@include('BaseCopy')

@include('NavBar')
@foreach($events as $event)
            <div class="view view-eighth">
                <a href="{{ asset('helps/images/g1.jpg') }}" title="{{ $event->title }}">
                </a>
                    <img src="{{ asset('helps/images/g1.jpg') }}" alt="{{ $event->title }}" />
                    
                    <div class="w3lmask">
                        <h4>
                            {{-- @if(dd($event->accept) == 0) --}}
                            {{-- {{ dd($event->accept) }} --}}
                            <form action="{{ route('admin.events.accept', $event->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Accept Event</button>
                            </form>
                            
                             {{-- @endif --}}
                        </h4>
                                  

                        </form>
                        {{ $event->title }}</h4>
                        <p>{{ $event->description }}</p>
                        <p>{{ $event->date }}</p>
                        <p>{{ $event->location }}</p>
                        <p>{{ $event->places_available }}</p>
                    </div>

                
                
            </div>
            
            @endforeach
          
           
        </div>
        
        <script src="js/jquery.chocolat.js"></script> 
        <!-- light-box-files -->
        <script type="text/javascript">
        $(function() {
            $('.gallery a').Chocolat();
        });
        </script> 
    </div>
</div>
