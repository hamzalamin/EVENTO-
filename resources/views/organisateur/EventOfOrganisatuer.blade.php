<x-Organisateur-layout>
    @include('BaseCopy')
    <style>
        /* Custom border style for the cards */
        .col {
            border: 1px solid #000; /* Black border */
            border-radius: 10px; 
            padding: 9px;          
            margin-top: 30px;
            position: relative; /* Position the card relatively */
        }

        .icon-container {
            position: absolute; /* Position the icons absolutely */
            bottom: 5px; /* Adjust the bottom position as needed */
            left: 0; /* Align icons at the left */
            right: 0; /* Align icons at the right */
            text-align: center; /* Center icons horizontally */
        }

        .icon-container button,
        .icon-container a {
            margin: 0 5px; /* Adjust spacing between icons */
        }

        @media (min-width: 768px) {
            .col-lg-4 {
                flex: 0 0 33.33%;
                max-width: 33.33%;
            }
        }
    </style>    
    <a href="{{ route('events.form') }}">
        <img src="{{ asset('helps/images/t4.png') }}" class="mx-3 mt-3" style="width: 4%" alt="">
    </a>
    {{-- <div class="gallery-wthreegrids"> --}}
        @foreach($events as $event)
        <div class="view view-eighth">
            <a href="{{ asset('helps/images/g1.jpg') }}" title="{{ $event->title }}">
            </a>
                <img src="{{ asset('helps/images/g1.jpg') }}" alt="{{ $event->title }}" />
                <div class="w3lmask">
                    <h4>
                    <div class="d-flex">
                        <form action="{{ route('events.destroy', $event->id) }}" method="POST">
                            @csrf
                          
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this event?')">
                                <img src="{{ asset('helps/images/t2.png') }}" style="width: 10%;" alt="">
                            </button>
                        </form>
                        <!-- Link for updating the event -->
                        <a href="{{ route('events.edit', $event->id) }}">
                            <img src="{{ asset('helps/images/t3.png') }}" style="width: 10%;" alt="">
                        </a>
                    {{-- </div> --}}

                        {{ $event->title }}
                    </h4>
                    <p>{{ $event->description }}</p>
                    <p>{{ $event->date }}</p>
                    <p>{{ $event->location }}</p>
                </div>
            
            <!-- Icon container inside the card -->
                <!-- Form for deleting the event -->
               
        </div>
    @endforeach
    
       
        <div class="clearfix"></div>
    </div>
</x-Organisateur-layout>
