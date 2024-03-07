@include('NavBar')
<div class="banner">
    <div class="container">
        {{-- <!-- <script src="js/responsiveslides.min.js"></script>
        <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
        });
        </script> --> --}}
        <div  id="top" class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li>
                    <div class="banner-agileinfo">
                        <h3>WELCOME</h3>
                        <h4>Event planning & wedding coordination</h4> 
                    </div>
                </li>
                
        </div>
    </div>
</div>
<!-- //banner -->
<!-- about -->
<div id="about" class="about">
    <div class="container">
        <h3 class="w3ls-tittle">About</h3>
        
        <div class="about-grids">
            <div class="col-md-5 abt-left">
                <img src="{{ asset('helps/images/g1.jpg') }}" alt="" />
            </div>
            <div class="col-md-7 abt-right">
                <h4>Temporibus autem quibusdam</h4>
                <p>Voluptas assumenda est, omnis dolor repellendus. 
                    Temporibus autem quibusdam et aut officiis debitis aut 
                    rerum necessitatibus saepe.Nam libero tempore, cum soluta nobis est eligendi optio cumque 
                    nihil impedit quo minus id quod maxime placeat facere possimus, 
                    omnis voluptas assumenda est, omnis dolor repellendus.</p>
                <p> Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe  possimus, 
                    omnis voluptas assumenda est, omnis dolor repellendus rerum necessitatibus saepe  possimus, 
                    omnis voluptas assumenda est, omnis dolor repellendus</p>
            
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //about -->
<!-- services -->
<div id="services" class="services">
    <div class="container">
        <h2 class="w3ls-tittle">Services</h2>
        <div class="services-grids w3layouts-grids">
            <div class="col-md-6 services-left">
                <div class="serw3agile-grid">	
                    <span class="hi-icon hi-icon-archive glyphicon glyphicon-check"> </span>
                </div>
                <div  class="ser-agiletop">
                    <h4>Best Quality</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
                        It has roots in a piece of classical.Contrary to popular belief, Lorem Ipsum </p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 services-left">
                <div class="serw3agile-grid">	
                    <span class="hi-icon hi-icon-archive glyphicon glyphicon-music"> </span>
                </div>
                <div  class="ser-agiletop">
                    <h4>Rocking Music</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
                        It has roots in a piece of classical.Contrary to popular belief, Lorem Ipsum </p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 services-left">
                <div class="serw3agile-grid">	
                    <span class="hi-icon hi-icon-archive glyphicon glyphicon-picture"> </span>
                </div>
                <div  class="ser-agiletop">
                    <h4>Amazing Themes</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
                        It has roots in a piece of classical.Contrary to popular belief, Lorem Ipsum </p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 services-left">
                <div class="serw3agile-grid">	
                    <span class="hi-icon hi-icon-archive glyphicon glyphicon-heart-empty"> </span>
                </div>
                <div  class="ser-agiletop">
                    <h4>Latest Collections</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
                        It has roots in a piece of classical.Contrary to popular belief, Lorem Ipsum </p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //services -->
<!-- gallery -->
<div id="gallery" class="gallery">
    <div class="container">
        <h3 class="w3ls-tittle">Events</h3>
        <div class="container mt-4">
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
        </div>
        
        <div class="gallery-wthreegrids">
           
            <!-- Iterate over each event -->
            @foreach($events as $event)
            <div class="view view-eighth">
                <a href="{{ asset('helps/images/g1.jpg') }}" title="{{ $event->title }}">
                </a>
                    <img src="{{ asset('helps/images/g1.jpg') }}" alt="{{ $event->title }}" />
                    
                    <div class="w3lmask">
                        <h4> @if($event->places_available == $event->reservations()->count())
                            <button type="button" class="btn btn-success">Reservation Complete</button>
                            @else
                            <form action="{{ route('reservations.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="event_id" value="{{ $event->id }}">
                           
                            <!-- Display reservation button -->
                            {{-- <form action="{{ route('reserve.event', $event->id) }}" method="POST">
                                @csrf --}}
                                <button type="submit" class="btn btn-primary">Reserve Event</button>
                            {{-- </form> --}}
                            @endif                            
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
