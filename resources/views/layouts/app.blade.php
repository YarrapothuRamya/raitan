<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- <link rel="stylesheet" type="text/css" href="css/vendor.css"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('tractors.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Montserrat:wght@300;400;500&display=swap"
      rel="stylesheet">
    <style>
        #footer {
          background-image: url('images/Banners/banner3.jpg');
          background-size: cover;
          background-position: center;
          background-repeat: no-repeat;
        }
        
    </style>
</head>
<body>
    <div id="app">
        

  
        <div class="preloader-wrapper">
            <div class="preloader">
            </div>
          </div>




          <header class="jdheader jdheader_home header_fixed header_sticky">
            <div class="header_home header">
              <div class="header_left">
                <div class="header_left_inner"><a role="link" class="animate__animated header_jdlogo " href="/"><img
                      src="images/raitanlogo.png" alt="Raitan Logo" aria-label="Raitan" title="Raitan" height="90"
                      width="102" class=""></a></div>
              </div>
              <div class="header_center">
                <div class="header_input_group home_input_group ">
                  <div role="combobox" aria-haspopup="listbox" aria-owns="react-autowhatever-city-auto-suggest"
                    aria-expanded="false" class="city-suggestions-container">
                    <div class="inputgroup_location mr-15 ">
                      <div class="input_location_box "><input type="text" autocomplete="off" aria-autocomplete="list"
                          aria-controls="react-autowhatever-city-auto-suggest" class="input_location font14 fw400 color111"
                          aria-label="City Auto-suggest" placeholder="Select Location" id="city-auto-sug" value="Hyderabad"
                          fdprocessedid="g23zzj"></div>
                    </div>
                    <div id="react-autowhatever-city-auto-suggest" role="listbox"
                      class="react-autosuggest__suggestions-container" aria-label="City Auto-suggest">
                      <div class="input_search_result input_search_recent"></div>
                    </div>
                  </div>
                  <div class="inputgroup_search "><label class="input_search_box has-voice-search">
                      <div role="combobox" aria-haspopup="listbox" aria-owns="react-autowhatever-main-auto-suggest"
                        aria-expanded="false" class="input_seach_box_results "><input type="text" autocomplete="off"
                          aria-autocomplete="list" aria-controls="react-autowhatever-main-auto-suggest"
                          class="input_search font14 fw400 color111" aria-label="Main Auto-suggest"
                          placeholder="Search for Packers and Movers" id="main-auto" value="" fdprocessedid="1qhazu">
                        <div id="react-autowhatever-main-auto-suggest" role="listbox"
                          class="react-autosuggest__suggestions-container" aria-label="Main Auto-suggest">
                          <div class="input_search_result input_search_recent"></div>
                        </div>
                      </div>
                      <div class="voice_btnbox">
                        <div class="mic_icon jdicon" role="button" aria-label="Search by voice" title="Search by voice"
                          tabindex="0" fdprocessedid="zum9gl"></div>
                      </div>
                      <div class="search_btnbox">
                        <div class="search_button" role="button" aria-label="search" tabindex="0" fdprocessedid="bjper">
                          <div id="srchbtn" class="jdicon search_white_icon"></div>
                        </div><span class="btnbox_text font13 fw400 colorFFF">Search the businesses</span>
                      </div>
                    </label></div>
                </div>
              </div>
              <div class="header_right">
                <div class="header_navigation">
                  <ul role="menu" class="headnav_list">
                    <li role="menuitem" tabindex="0" id="header_language" class="headnav_item headnav_language"><span
                        class="headnav_item_anchor whitefill_animate ">
                        <div class="nav_language_icon jdicon"></div>
                        <div class="headnav_item_text pl-5 font14 fw400 color007">English<span role="none"
                            class="nav_drop_icon jdicon ml-4"></span></div>
                      </span>
                      <div class="headnav_language_dropdown ">
                        <div class="language_drop_text font14 fw400 color111">हिंदी</div>
                        <div class="language_drop_text font14 fw400 color111">मराठी</div>
                        <div class="language_drop_text font14 fw400 color111">বেঙ্গলি</div>
                        <div class="language_drop_text font14 fw400 color111">ગુજરાતી</div>
                        <div class="language_drop_text font14 fw400 color111">ಕನ್ನಡ</div>
                        <div class="language_drop_text font14 fw400 color111">தமிழ்</div>
                      </div>
                    </li>
                    <li role="menuitem" tabindex="0" class="headnav_item headnav_hiring"><a
                        href="https://www.justdial.com/cms/career-opportunities" class="headnav_item_anchor whitefill_animate ">
                        <div class="headnav_item_text pl-5 font14 fw400 color111">We are Hiring
                        </div>
                      </a></li>
                    <li role="menuitem" tabindex="0" class="headnav_item headnav_investor"><a
                        href="https://www.justdial.com/cms/investor-relations" class="headnav_item_anchor whitefill_animate ">
                        <div class="headnav_item_text pl-5 font14 fw400 color111">Investor
                          Relations</div>
                      </a></li>
                    <li role="menuitem" tabindex="0" id="header_advertise" class="headnav_item headnav_advertise"><a
                        href="https://www.justdial.com/Advertise?cta_from=W_hmpge_web_header_advertise"
                        class="headnav_item_anchor whitefill_animate">
                        <div class="nav_advertise_icon jdicon"></div>
                        <div class="headnav_item_text pl-5 font14 fw400 color111">Advertise
                        </div>
                      </a></li>
                    <li role="menuitem" tabindex="0" id="header_freelisting" class="headnav_item headnav_addbusiness"><a
                        href="https://www.justdial.com/Free-Listing?cta_from=W_hmpge_web_header_freelisting"
                        class="headnav_item_anchor whitefill_animate">
                        <div class="nav_listing_icon jdicon"></div>
                        <div class="headnav_item_text pl-5 font14 fw400 color111">Free Listing
                        </div>
                        <div class="headnav_tag font8 fw700 colorFFF text_uppercase mr-4">
                          Business</div>
                      </a></li>
                    <li role="menuitem" aria-label="notification" class="headnav_item headnav_notify">
                      <div role="button" tabindex="0" aria-label="Notifications" class="headnav_item_anchor whitefill_animate"
                        fdprocessedid="xsjip">
                        <div class="nav_notify_icon jdicon"></div>
                      </div>
                    </li>
                    <li role="menuitem" tabindex="0" id="header_login" class="headnav_item headnav_user">
                      <div role="button" tabindex="0" aria-label="Login/Sign Up" class="headnav_item_anchor bluefill_animate"
                        fdprocessedid="yopgan">
                        <div class="headnav_item_text font14 fw500 colorFFF">
                            <nav class="navbar navbar-expand-md navbar-light shadow-sm">
                                <div class="container">
                                    <!--<a class="navbar-brand" href="{{ url('/') }}">
                                        {{ config('app.name', 'Laravel') }}
                                    </a>-->
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <!-- Left Side Of Navbar -->
                                        <ul class="navbar-nav me-auto">

                                        </ul>

                                        <!-- Right Side Of Navbar -->
                                        <ul class="navbar-nav ms-auto">
                                            <!-- Authentication Links -->
                                            @guest
                                                @if (Route::has('login'))
                                                    <li class="nav-item">
                                                        <a class="headnav_item_text font14 fw500 colorFFF nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                    </li>
                                                @endif

                                                @if (Route::has('register'))
                                                    <li class="nav-item">
                                                        <a class="headnav_item_text font14 fw500 colorFFF nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                    </li>
                                                @endif
                                            @else
                                                
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }}
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="{{ route('password') }}"
                                                           >
                                                            {{ __('Change Password') }}
                                                        </a>
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>
                                            @endguest
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                      </div>
                      <ul class="headnav_user_dropdown dn">
                        <li class="headnav_item"></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer id="footer" class="my-5">
    <div class="container py-5 my-5">
      <div class="row">

        <div class="col-md-3">
          <div class="footer-menu">
            <img src="" alt="logo">
            <p class="blog-paragraph fs-6 mt-3">Subscribe to our newsletter to get updates about our grand offers.</p>
            <div class="social-links">
              <ul class="d-flex list-unstyled gap-2">
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:facebook-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:twitter-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:pinterest-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:instagram-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:youtube-fill"></iconify-icon>
                  </a>
                </li>

              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-menu">
            <h3>Quick Links</h3>
            <ul class="menu-list list-unstyled">
              <li class="menu-item">
                <a href="#" class="nav-link">Home</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">About us</a>
              </li>
              
              <li class="menu-item">
                <a href="#" class="nav-link">Services</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Conatct Us</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-menu">
            <h3>Help Center</h5>
              <ul class="menu-list list-unstyled">
                <li class="menu-item">
                  <a href="#" class="nav-link">FAQs</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Payment</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Returns & Refunds</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Checkout</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Delivery Information</a>
                </li>
              </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div>
            <h3>Our Newsletter</h3>
            <p class="blog-paragraph fs-6">Subscribe to our newsletter to get updates about our grand offers.</p>
            <div class="search-bar border rounded-pill border-dark-subtle px-2">
              <form class="text-center d-flex align-items-center" action="" method="">
                <input type="text" class="form-control border-0 bg-transparent" placeholder="Enter your email here" />
                <iconify-icon class="send-icon" icon="tabler:location-filled"></iconify-icon>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </footer>

  <div id="footer-bottom">
    <div class="container">
      <hr class="m-0">
      <div class="row mt-3">
        <div class="col-md-6 copyright">
          <p class="secondary-font">© 2023 Raitan. All rights reserved.</p>
        </div>
        <div class="col-md-6 text-md-end">
          <p class="secondary-font"> </p>
          <p class="secondary-font"> </p>
        </div>
      </div>
    </div>
  </div>
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    

</body>
</html>
