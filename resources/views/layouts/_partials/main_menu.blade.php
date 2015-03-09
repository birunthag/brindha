<ul class="nav navbar-nav">
    <li class="home-link">
        <a href="{{ URL::to('/') }}"><i class="fa fa-home"></i><span class="hidden">Home</span></a>
    </li>
  
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" id="pages-drop" data-toggle="dropdown" data-hover="dropdown">Pages +</a> 
        <!-- Menu -->
        <ul class="dropdown-menu" role="menu" aria-labelledby="pages-drop">
            <li class="dropdown dropdown-submenu">
                <a 
                    href="{{ URL::route('aboutus_basic') }}" 
                    class="dropdown-toggle" 
                    id="about-drop" 
                    data-toggle="dropdown" 
                    data-hover="dropdown" 
                    data-close-others="false">About</a> 
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu" role="menu" aria-labelledby="about-drop">
                    <li role="presentation">
                        <a role="menuitem" href="{{ URL::route('aboutus_basic') }}" tabindex="-1" class="menu-item">About Us Basic <i class="new-tag">Updated!</i></a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" href="{{ URL::route('aboutus_extend') }}" tabindex="-1" class="menu-item">About Us Extended <i class="new-tag">New!</i></a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" href="{{ URL::route('aboutus_me') }}" tabindex="-1" class="menu-item">About Me <i class="new-tag">New!</i></a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" href="{{ URL::route('teamlist') }}" tabindex="-1" class="menu-item">Team List <i class="new-tag">Updated!</i></a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" href="{{ URL::route('teamgrid') }}" tabindex="-1" class="menu-item">Team Grid <i class="new-tag">New!</i></a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" href="{{ URL::route('teammemb') }}" tabindex="-1" class="menu-item">Team Member <i class="new-tag">New!</i></a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" href="{{ URL::route('contact') }}" tabindex="-1" class="menu-item">Contact</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown dropdown-submenu">
                <a href="{{ URL::route('pricing') }}" class="dropdown-toggle" id="pricing-drop" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Pricing</a> 
                <!-- pricing pages -->
                <ul class="dropdown-menu" role="menu" aria-labelledby="pricing-drop">
                    <li role="presentation"><a role="menuitem" href="{{ URL::route('pricing') }}" tabindex="-1" class="menu-item">Pricing Plans</a></li>
                    <li role="presentation"><a role="menuitem" href="{{ URL::route('pricing_table') }}" tabindex="-1" class="menu-item">Comparison Tables</a></li>
                </ul>
            </li>
            <li class="dropdown dropdown-submenu">
                <a href="{{ URL::route('timeline') }}" class="dropdown-toggle" id="timeline-drop" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Timeline</a> 
                <!-- timelines -->
                <ul class="dropdown-menu" role="menu" aria-labelledby="timeline-drop">
                    <li role="presentation"><a role="menuitem" href="{{ URL::route('timeline') }}" tabindex="-1" class="menu-item">Timeline Default</a></li>
                    <li role="presentation"><a role="menuitem" href="{{ URL::route('timelineleft') }}" tabindex="-1" class="menu-item">Timeline Left</a></li>
                    <li role="presentation"><a role="menuitem" href="{{ URL::route('timelineright') }}" tabindex="-1" class="menu-item">Timeline Right</a></li>
                    <li role="presentation"><a role="menuitem" href="{{ URL::route('timelinestacked') }}" tabindex="-1" class="menu-item">Timeline Stacked</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ URL::route('custumers') }}" class="menu-item">Customers</a>
            </li>
            <li>
                <a href="{{ URL::route('features') }}" class="menu-item">Features/Services</a></li>
            <li role="presentation">
                <a role="menuitem" href="{{ URL::route('login') }}" tabindex="-1" class="menu-item">Login</a>
            </li>
            <li role="presentation">
                <a role="menuitem" href="{{ URL::route('signup') }}" tabindex="-1" class="menu-item">Sign Up</a>
            </li>
            <li role="presentation">
                <a role="menuitem" href="{{ URL::route('starter') }}" tabindex="-1" class="menu-item">Starter Snippets</a>
            </li>
            <li role="presentation">
                <a role="menuitem" href="{{ URL::route('custumers') }}" tabindex="-1" class="menu-item">Homepage Static Banner</a>
            </li>
            <li role="presentation">
                <a role="menuitem" href="{{ URL::route('custumers') }}" tabindex="-1" class="menu-item">Homepage Boxed</a>
            </li>
            <li role="presentation">
                <a role="menuitem" href="{{ URL::route('custumers') }}" tabindex="-1" class="menu-item">404 Error</a>
            </li>
        </ul>
    </li>
  
    <li class="dropdown">
        <a 
            href="blog.htm" 
            class="dropdown-toggle" 
            id="blog-drop" 
            data-toggle="dropdown" 
            data-hover="dropdown">Blog +</a> 
        <!-- Dropdown Menu -->
        <ul class="dropdown-menu" role="menu" aria-labelledby="blog-drop">
            <li role="presentation">
                <a role="menuitem" href="blog.htm" tabindex="-1" class="menu-item">Blog List Right Sidebar <i class="new-tag">Updated!</i></a>
            </li>
            <li role="presentation">
                <a role="menuitem" href="blog-leftbar.htm" tabindex="-1" class="menu-item">Blog List Left Sidebar <i class="new-tag">Updated!</i></a>
            </li>
            <li role="presentation">
                <a role="menuitem" href="blog-timeline.htm" tabindex="-1" class="menu-item">Blog List Timeline <i class="new-tag">New!</i></a>
            </li>
            <li role="presentation">
                <a role="menuitem" href="blog-grid.htm" tabindex="-1" class="menu-item">Blog List Grid <i class="new-tag">New!</i></a>
            </li>
            <li role="presentation">
                <a role="menuitem" href="blog-post.htm" tabindex="-1" class="menu-item">Blog Post <i class="new-tag">Updated!</i></a>
            </li>
            <li role="presentation">
                <a role="menuitem" href="blog-post-video.htm" tabindex="-1" class="menu-item">Blog Post With Video <i class="new-tag">New!</i></a>
            </li>
            <li role="presentation">
                <a role="menuitem" href="blog-post-slideshow.htm" tabindex="-1" class="menu-item">Blog Post With Slideshow <i class="new-tag">New!</i></a>
            </li>
            <li role="presentation">
                <a role="menuitem" href="blog-post-audio.htm" tabindex="-1" class="menu-item">Blog Post With Audio Clip <i class="new-tag">New!</i></a>
            </li>
        </ul>
    </li>
  
    <li class="dropdown dropdown-full">
        <a 
            href="#" 
            class="dropdown-toggle menu-item" 
            id="megamenu-drop" 
            data-toggle="dropdown" 
            data-hover="dropdown">Mega Menu +</a> 
        <!-- Dropdown Menu - Mega Menu -->
        <ul class="dropdown-menu mega-menu" role="menu" aria-labelledby="megamenu-drop">
            <li role="presentation" class="dropdown-header">Mega Menu with links & text items</li>
            <li role="presentation">
                <ul class="row list-unstyled" role="menu">
                    <li class="col-md-3" role="presentation">
                        <a role="menuitem" href="features.htm" class="img-link">
                            <img src="{{ asset('img/features/feature-1.png' )}} " alt="Feature 1" />
                        </a>
                        <a role="menuitem" href="features.htm" tabindex="-1" class="menu-item">
                            <strong>Mobile Friendly</strong>
                        </a>
                        <span>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio!</span> 
                    </li>
                    <li class="col-md-3" role="presentation">
                        <a role="menuitem" href="features.htm" class="img-link">
                            <img src="{{ asset('img/features/feature-2.png' )}}" alt="Feature 2" />
                        </a>
                        <a role="menuitem" href="features.htm" tabindex="-1" class="menu-item">
                            <strong>24/7 Support</strong>
                        </a>
                        <span>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio!</span> 
                    </li>
                    <li class="col-md-3" role="presentation">
                        <a role="menuitem" href="features.htm" class="img-link">
                            <img src="{{ asset('img/features/feature-3.png' )}}" alt="Feature 3" />
                        </a>
                        <a role="menuitem" href="features.htm" tabindex="-1" class="menu-item"><strong>99% Uptime</strong></a>
                        <span>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio!</span> 
                    </li>
                    <li class="col-md-3" role="presentation">
                        <a role="menuitem" href="features.htm" class="img-link">
                            <img src="{{ asset('img/features/feature-4.png' )}}" alt="Feature 4" />
                        </a>
                        <a role="menuitem" href="features.htm" tabindex="-1" class="menu-item"><strong>Upgrade Assistance</strong></a>
                        <span>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio!</span> 
                    </li>
                </ul>
            </li>
        </ul>
    </li>
  
    <li class="dropdown">
        <a href="#" 
            class="dropdown-toggle" 
            id="more-drop" 
            data-toggle="dropdown" 
            data-hover="dropdown">More +</a> 
        <!-- Mega Menu -->
        <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="more-drop">
            <li class="dropdown dropdown-submenu dropdown-menu-left">
                <a 
                    href="headers.htm" 
                    class="dropdown-toggle" 
                    id="headers-drop" 
                    data-toggle="dropdown" 
                    data-hover="dropdown" 
                    data-close-others="false">Header Variations</a> 
                <!-- Header variations -->
                <ul class="dropdown-menu" role="menu" aria-labelledby="headers-drop">
                    <li role="presentation"><a role="menuitem" href="header-old.htm" tabindex="-1" class="menu-item">Header Old</a></li>
                    <li role="presentation"><a role="menuitem" href="header-old-full.htm" tabindex="-1" class="menu-item">Header Old Full Width</a></li>
                </ul>
            </li>
            <li class="dropdown dropdown-submenu dropdown-menu-left">
                <a 
                    href="sliders.htm" 
                    class="dropdown-toggle" 
                    id="slider-drop" 
                    data-toggle="dropdown" 
                    data-hover="dropdown" 
                    data-close-others="false">Sliders</a> 
                <!-- Sliders -->
                <ul class="dropdown-menu" role="menu" aria-labelledby="slider-drop">
                    <!--Slider Revolution -->
                    <li role="presentation" class="dropdown-header">Slider Revolution</li>
                    <li role="presentation">
                        <a role="menuitem" href="slider-revolution-default.htm" tabindex="-1" class="menu-item">Default</a>
                        </li>
                    <li role="presentation">
                        <a role="menuitem" href="slider-revolution-full.htm" tabindex="-1" class="menu-item">Full Width</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" href="slider-revolution-behind.htm" tabindex="-1" class="menu-item">Behind Navbar</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" href="slider-revolution-boxed.htm" tabindex="-1" class="menu-item">Boxed</a>
                    </li>
                    <!--Backstretch Slider-->
                    <li role="presentation" class="dropdown-header">Backstretch</li>
                    <li role="presentation">
                        <a role="menuitem" href="backstretch.htm" tabindex="-1" class="menu-item">Background Slideshow</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" href="backstretch-boxed.htm" tabindex="-1" class="menu-item">Boxed Background Slideshow</a>
                    </li>
                    <!--Flexslider-->
                    <li role="presentation" class="dropdown-header">Flexslider</li>
                    <li role="presentation">
                        <a role="menuitem" href="flexslider-default.htm" tabindex="-1" class="menu-item">Default</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" href="flexslider-full.htm" tabindex="-1" class="menu-item">Full Width</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" href="flexslider-behind.htm" tabindex="-1" class="menu-item">Behind Navbar</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" href="flexslider-boxed.htm" tabindex="-1" class="menu-item">Boxed</a>
                    </li>
                </ul>
            </li>
            <li role="presentation">
                <a role="menuitem" href="elements.htm" tabindex="-1" class="menu-item">Theme Elements <i class="new-tag">Updated!</i></a>
            </li>
            <li role="presentation">
                <a role="menuitem" href="colours.htm" tabindex="-1" class="menu-item">Theme Colours</a>
            </li>
            <li role="presentation">
                <a role="menuitem" href="bs-mobile-menu.htm" tabindex="-1" class="menu-item">Bootstrap Mobile Menu</a>
            </li>
        </ul>
    </li>
</ul>