<header id="fh5co-header-section" class="sticky-banner">
    <div class="container">
        <div class="nav-header">
            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
            <h1 id="fh5co-logo"><a href="index.html"><i class="icon-airplane"></i>Travel</a></h1>
            <!-- START #fh5co-menu-wrap -->
            <nav id="fh5co-menu-wrap" role="navigation">
                <ul class="sf-menu" id="fh5co-primary-menu">
                    <li id="nav-home-link"><a href="{{ route('home') }}">Home</a></li>
                    <li id="nav-vacation-link">
                        <a href="{{ url('vacation') }}" class="fh5co-sub-ddown">Vacations</a>
                        <ul class="fh5co-sub-menu">
                            <li><a href="#">Family</a></li>
                            <li><a href="#">CSS3 &amp; HTML5</a></li>
                            <li><a href="#">Angular JS</a></li>
                            <li><a href="#">Node JS</a></li>
                            <li><a href="#">Django &amp; Python</a></li>
                        </ul>
                    </li>
                    <li id="nav-flight-link"><a href="{{ route('flight') }}">Flights</a></li>
                    <li id="nav-hotel-link"><a href="{{ route('hotel') }}">Hotel</a></li>
                    <li id="nav-car-link"><a href="{{ route('car') }}">Car</a></li>
                    <li id="nav-blog-link"><a href="{{ route('blog') }}">Blog</a></li>
                    <li id="nav-contact-link"><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>