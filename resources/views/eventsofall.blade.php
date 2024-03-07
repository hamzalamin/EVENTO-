@include('BaseCopy')
@include('NavBar')
<style>
    .w3ls-tittle {
        /* Specify background properties */
        margin-buttom: 110%;
        background-image: url({{ asset('helps/images/tt.jpg') }});
        background-size: cover; /* Cover the entire element */
        background-position: center; /* Center the background image */
        background-repeat: no-repeat; /* Prevent repeating the background image */
        padding: 50px; /* Add padding for better visibility */
        /* color: #fff; Set text color to white for better contrast */
        text-align: center; /* Center align text */
    }
    
</style>
<div id="gallery" class="gallery">
    <div class="container">
        <h3 class="w3ls-tittle">Events
            <form action="{{ route('search') }}" method="GET">
                <input type="text" name="title" placeholder="Search by title">
                <select name="category_id">
                    <option value="">All Categories</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <button type="submit">Search</button>
            </form>
        </h3>
        <div class="container mt-4">
            
            <div class="pagination-container">
                {{ $events->links() }}
            </div>
        </div>
        
        <div class="gallery-wthreegrids">
           
            <!-- Iterate over each event -->
            @foreach($events as $event)
            <div class="view view-eighth">
                <a href="{{ asset('helps/images/g1.jpg') }}" title="{{ $event->title }}">
                </a>
                    <img src="{{ asset('helps/images/g1.jpg') }}" alt="{{ $event->title }}" />
                    
                    <div class="w3lmask">
                        <h4>
                            @if($event->places_available <= $event->reservations()->where('event_id', $event->id)->count())
                            <button type="button" class="btn btn-success">Reservation Complete</button>
                            @else
                                <form action="{{ route('reservations.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="event_id" value="{{ $event->id }}">
                                    <button type="submit" class="btn btn-primary">Reserve Event</button>
                                </form>
                            @endif
                        
                        </h4>
                                  
                        <p>{{ $message }}</p>

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
@include('footer')