<!DOCTYPE html>
<html lang="en">

<head>
    <title>Raitan</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<!-- <link rel="stylesheet" type="text/css" href="css/vendor.css"> -->
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" type="text/css" href="tractors.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Montserrat:wght@300;400;500&display=swap"
    rel="stylesheet">
<style>
    

    .expanded .extra-details {
        display: block;
    }

    .clickable {
        cursor: pointer;
    }
</style>
</head>

<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <defs>
            <symbol xmlns="http://www.w3.org/2000/svg" id="link" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M12 19a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0-4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm-5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm7-12h-1V2a1 1 0 0 0-2 0v1H8V2a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3Zm1 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9h16Zm0-11H4V6a1 1 0 0 1 1-1h1v1a1 1 0 0 0 2 0V5h8v1a1 1 0 0 0 2 0V5h1a1 1 0 0 1 1 1ZM7 15a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0 4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="category" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M19 5.5h-6.28l-.32-1a3 3 0 0 0-2.84-2H5a3 3 0 0 0-3 3v13a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-10a3 3 0 0 0-3-3Zm1 13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-13a1 1 0 0 1 1-1h4.56a1 1 0 0 1 .95.68l.54 1.64a1 1 0 0 0 .95.68h7a1 1 0 0 1 1 1Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="calendar" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3Zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16Zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="heart" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M20.16 4.61A6.27 6.27 0 0 0 12 4a6.27 6.27 0 0 0-8.16 9.48l7.45 7.45a1 1 0 0 0 1.42 0l7.45-7.45a6.27 6.27 0 0 0 0-8.87Zm-1.41 7.46L12 18.81l-6.75-6.74a4.28 4.28 0 0 1 3-7.3a4.25 4.25 0 0 1 3 1.25a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 6.05Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="plus" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M19 11h-6V5a1 1 0 0 0-2 0v6H5a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="minus" viewBox="0 0 24 24">
                <path fill="currentColor" d="M19 11H5a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M8.5 19a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 8.5 19ZM19 16H7a1 1 0 0 1 0-2h8.491a3.013 3.013 0 0 0 2.885-2.176l1.585-5.55A1 1 0 0 0 19 5H6.74a3.007 3.007 0 0 0-2.82-2H3a1 1 0 0 0 0 2h.921a1.005 1.005 0 0 1 .962.725l.155.545v.005l1.641 5.742A3 3 0 0 0 7 18h12a1 1 0 0 0 0-2Zm-1.326-9l-1.22 4.274a1.005 1.005 0 0 1-.963.726H8.754l-.255-.892L7.326 7ZM16.5 19a1.5 1.5 0 1 0 1.5 1.5a1.5 1.5 0 0 0-1.5-1.5Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="check" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M18.71 7.21a1 1 0 0 0-1.42 0l-7.45 7.46l-3.13-3.14A1 1 0 1 0 5.29 13l3.84 3.84a1 1 0 0 0 1.42 0l8.16-8.16a1 1 0 0 0 0-1.47Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="trash" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M10 18a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1ZM20 6h-4V5a3 3 0 0 0-3-3h-2a3 3 0 0 0-3 3v1H4a1 1 0 0 0 0 2h1v11a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8h1a1 1 0 0 0 0-2ZM10 5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1h-4Zm7 14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8h10Zm-3-1a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="star-outline" viewBox="0 0 15 15">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    d="M7.5 9.804L5.337 11l.413-2.533L4 6.674l2.418-.37L7.5 4l1.082 2.304l2.418.37l-1.75 1.793L9.663 11L7.5 9.804Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="star-solid" viewBox="0 0 15 15">
                <path fill="currentColor"
                    d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M15.71 12.71a6 6 0 1 0-7.42 0a10 10 0 0 0-6.22 8.18a1 1 0 0 0 2 .22a8 8 0 0 1 15.9 0a1 1 0 0 0 1 .89h.11a1 1 0 0 0 .88-1.1a10 10 0 0 0-6.25-8.19ZM12 12a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 15 15">
                <path fill="currentColor"
                    d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z" />
            </symbol>

        </defs>
    </svg>

    <div class="preloader-wrapper">
        <div class="preloader">
        </div>
    </div>




    <header class="jdheader jdheader_home header_fixed header_sticky">
        <div class="header_home header">
            <div class="header_left">
                <div class="header_left_inner"><a role="link" class="animate__animated header_jdlogo " href="/"><img
                            src="images/raitanlogo.png" alt="Justdial Logo" aria-label="Justdial" title="Justdial"
                            height="90" width="102" class=""></a></div>
            </div>
            <div class="header_center">
                <div class="header_input_group home_input_group ">
                    <div role="combobox" aria-haspopup="listbox" aria-owns="react-autowhatever-city-auto-suggest"
                        aria-expanded="false" class="city-suggestions-container">
                        <div class="inputgroup_location mr-15 ">
                            <div class="input_location_box "><input type="text" autocomplete="off"
                                    aria-autocomplete="list" aria-controls="react-autowhatever-city-auto-suggest"
                                    class="input_location font14 fw400 color111" aria-label="City Auto-suggest"
                                    placeholder="Select Location" id="city-auto-sug" value="Hyderabad"
                                    fdprocessedid="g23zzj"></div>
                        </div>
                        <div id="react-autowhatever-city-auto-suggest" role="listbox"
                            class="react-autosuggest__suggestions-container" aria-label="City Auto-suggest">
                            <div class="input_search_result input_search_recent"></div>
                        </div>
                    </div>
                    <div class="inputgroup_search "><label class="input_search_box has-voice-search">
                            <div role="combobox" aria-haspopup="listbox"
                                aria-owns="react-autowhatever-main-auto-suggest" aria-expanded="false"
                                class="input_seach_box_results "><input type="text" autocomplete="off"
                                    aria-autocomplete="list" aria-controls="react-autowhatever-main-auto-suggest"
                                    class="input_search font14 fw400 color111" aria-label="Main Auto-suggest"
                                    placeholder="Search for Packers and Movers" id="main-auto" value=""
                                    fdprocessedid="1qhazu">
                                <div id="react-autowhatever-main-auto-suggest" role="listbox"
                                    class="react-autosuggest__suggestions-container" aria-label="Main Auto-suggest">
                                    <div class="input_search_result input_search_recent"></div>
                                </div>
                            </div>
                            <div class="voice_btnbox">
                                <div class="mic_icon jdicon" role="button" aria-label="Search by voice"
                                    title="Search by voice" tabindex="0" fdprocessedid="zum9gl"></div>
                            </div>
                            <div class="search_btnbox">
                                <div class="search_button" role="button" aria-label="search" tabindex="0"
                                    fdprocessedid="bjper">
                                    <div id="srchbtn" class="jdicon search_white_icon"></div>
                                </div><span class="btnbox_text font13 fw400 colorFFF">Search the businesses</span>
                            </div>
                        </label></div>
                </div>
            </div>
            <div class="header_right">
                <div class="header_navigation">
                    <ul role="menu" class="headnav_list">
                        <li role="menuitem" tabindex="0" id="header_language" class="headnav_item headnav_language">
                            <span class="headnav_item_anchor whitefill_animate ">
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
                                href="https://www.justdial.com/cms/career-opportunities"
                                class="headnav_item_anchor whitefill_animate ">
                                <div class="headnav_item_text pl-5 font14 fw400 color111">We are Hiring
                                </div>
                            </a></li>
                        <li role="menuitem" tabindex="0" class="headnav_item headnav_investor"><a
                                href="https://www.justdial.com/cms/investor-relations"
                                class="headnav_item_anchor whitefill_animate ">
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
                        <li role="menuitem" tabindex="0" id="header_freelisting"
                            class="headnav_item headnav_addbusiness"><a
                                href="https://www.justdial.com/Free-Listing?cta_from=W_hmpge_web_header_freelisting"
                                class="headnav_item_anchor whitefill_animate">
                                <div class="nav_listing_icon jdicon"></div>
                                <div class="headnav_item_text pl-5 font14 fw400 color111">Free Listing
                                </div>
                                <div class="headnav_tag font8 fw700 colorFFF text_uppercase mr-4">
                                    Business</div>
                            </a></li>
                        <li role="menuitem" aria-label="notification" class="headnav_item headnav_notify">
                            <div role="button" tabindex="0" aria-label="Notifications"
                                class="headnav_item_anchor whitefill_animate" fdprocessedid="xsjip">
                                <div class="nav_notify_icon jdicon"></div>
                            </div>
                        </li>
                        <li role="menuitem" tabindex="0" id="header_login" class="headnav_item headnav_user">
                            <div role="button" tabindex="0" aria-label="Login/Sign Up"
                                class="headnav_item_anchor bluefill_animate" fdprocessedid="yopgan">
                                <div class="headnav_item_text font14 fw500 colorFFF">Login / Sign Up
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

    

    <section class=" home_appextra " aria-describedby="Cars list Page" style="padding-top: 140px;">
        <div class="section-container" style="opacity: 1;">
            <section aria-describedby="Book car Page" class="mb-20 section-container">
                
                <div class="max-w-5xl mx-auto border rounded-lg shadow-sm ">
                    <div class="sm:px-6 px-4 py-4 lg:px-2">
                        <div class="flex">
                            <div class="w-40 h-28">
                                <div class="w-full h-full"><img src="images/tractors/tractor1.jpg"
                                        alt="..." class="w-40 h-28" width="160" height="112"></div>
                            </div>
                            <div class="ml-10">
                                <h2 class="text-lg font-medium">Mahindra OJA 3140 Tractor</h2>
                                <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500"><span
                                        class="text-sm">Manual, Desiel</span></div>
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                            <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                        </div>
                            </div>
                            
                        </div>
                        <div class="px-6 ">
                            <div class="text-xs mt-4 text-gray-500">
                                <div class=" flex items-center ">
                                    <p>Includes 80 kms without fuel</p><svg stroke="currentColor" fill="currentColor"
                                        stroke-width="0" viewBox="0 0 16 16" role="button" class="text-pistachio ml-2"
                                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z">
                                        </path>
                                    </svg>
                                </div>
                                <p class="mt-2">Extra Kms @ 9/km</p>
                                
                            </div>
                            <div class="flex mt-6">
                                <div class="w-full border-l border-y py-2 px-4 rounded-l-lg">
                                    <div class="flex justify-between items-center">
                                        <h4 class="font-medium">Location</h4><a
                                            class="text-sm text-pistachio growing-link">Change</a>
                                    </div>
                                    <div class="flex mt-2"><svg stroke="currentColor" fill="currentColor"
                                            stroke-width="0" viewBox="0 0 512 512" class="mt-1 mr-1 text-pistachio"
                                            height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="32"
                                                d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z">
                                            </path>
                                            <circle cx="256" cy="192" r="48" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="32"></circle>
                                        </svg>
                                        <div class="text-sm"><span class="block">Bachupally, K V Rangareddy District
                                                </span><span class="block">Hyderabad - 500090</span></div>
                                    </div>
                                </div>
                                <div class="border my-2"></div>
                               
                            </div>
                            <!-- <div class="border rounded-lg mt-6 px-4 py-2 animate-fade-in">
                                <h4 class="font-medium mb-2">Price Details</h4>
                                <div class="px-3">
                                    <div>
                                        <div class="flex justify-between text-sm text-gray-600 my-1">
                                            <div class="flex items-center"><span>Base Fare</span><svg
                                                    stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    viewBox="0 0 16 16"
                                                    class=" text-pistachio ml-2 cursor-pointer smooth-animate "
                                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                                    </path>
                                                </svg></div>
                                            <div class="flex space-x-1 items-center"><svg stroke="currentColor"
                                                    fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17 6V4H6v2h3.5c1.302 0 2.401.838 2.815 2H6v2h6.315A2.994 2.994 0 0 1 9.5 12H6v2.414L11.586 20h2.828l-6-6H9.5a5.007 5.007 0 0 0 4.898-4H17V8h-2.602a4.933 4.933 0 0 0-.924-2H17z">
                                                    </path>
                                                </svg><span>960</span></div>
                                        </div>
                                        <div class="text-xs ml-5 text-gray-500" style="height: 0px; opacity: 0;">For 0
                                            Day 8 Hours 0 Min</div>
                                    </div>
                                    <div class="flex justify-between text-sm text-gray-600 my-1">
                                        <div class="flex items-center"><span>Delivery Charge</span></div>
                                        <div class="flex space-x-1 items-center"><svg stroke="currentColor"
                                                fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                                                width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17 6V4H6v2h3.5c1.302 0 2.401.838 2.815 2H6v2h6.315A2.994 2.994 0 0 1 9.5 12H6v2.414L11.586 20h2.828l-6-6H9.5a5.007 5.007 0 0 0 4.898-4H17V8h-2.602a4.933 4.933 0 0 0-.924-2H17z">
                                                </path>
                                            </svg><span>0</span></div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between text-sm text-gray-600 my-1">
                                            <div class="flex items-center"><span>Tax</span><svg stroke="currentColor"
                                                    fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                                                    class=" text-pistachio ml-2 cursor-pointer smooth-animate "
                                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                                    </path>
                                                </svg></div>
                                            <div class="flex space-x-1 items-center"><svg stroke="currentColor"
                                                    fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17 6V4H6v2h3.5c1.302 0 2.401.838 2.815 2H6v2h6.315A2.994 2.994 0 0 1 9.5 12H6v2.414L11.586 20h2.828l-6-6H9.5a5.007 5.007 0 0 0 4.898-4H17V8h-2.602a4.933 4.933 0 0 0-.924-2H17z">
                                                    </path>
                                                </svg><span>268</span></div>
                                        </div>
                                        <div class="text-xs ml-5 text-gray-500" style="height: 0px; opacity: 0;">Tax @
                                            28%</div>
                                    </div>
                                </div>
                                <hr class="my-3">
                                <div class="px-3">
                                    <div class="flex justify-between text-sm text-gray-600 my-1 font-medium">
                                        <div class="flex items-center"><span>Total Amount</span></div><span>₹
                                            1228</span>
                                    </div>
                                    <div class="flex justify-between text-sm text-red-500 my-1">
                                        <div class="flex items-center"><span>Refundable Deposit</span>
                                            <div class="relative"><svg stroke="currentColor" fill="currentColor"
                                                    stroke-width="0" viewBox="0 0 1024 1024"
                                                    class="text-red-500 ml-2 z-10" height="1em" width="1em"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z">
                                                    </path>
                                                    <path
                                                        d="M464 688a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm24-112h48c4.4 0 8-3.6 8-8V296c0-4.4-3.6-8-8-8h-48c-4.4 0-8 3.6-8 8v272c0 4.4 3.6 8 8 8z">
                                                    </path>
                                                </svg></div>
                                        </div><span>₹ 5000</span>
                                    </div>
                                </div>
                            </div> -->
                            <div class="border rounded-lg mt-6 sm:px-4 px-2 py-2 sm:shadow-none shadow-md">
                                <h4 class="font-medium mb-4">Things good to know</h4>
                                <div class="relative select-none">
                                    <div
                                        class=" flex overflow-x-auto overflow-y-hidden hide-scrollbar will-change-transform transition-all duration-300 cursor-grabbing relative gap-3 sm:snap-none snap-x">
                                        <div
                                            class="grid grid-cols-3 bg-gradient-to-r from-pistachio to-pear px-4 rounded-2xl min-w-[220px] max-w-[220px] max-h-28 min-h-[112px] place-items-center">
                                            <p
                                                class="text-center col-span-2 font-semibold text-sm text-gray-50 whitespace-pre-wrap mr-auto">
                                                24*7
                                                Assistance</p>
                                               
                                        </div>
                                        <div
                                            class="grid grid-cols-3 bg-gradient-to-r from-pistachio to-pear px-4 rounded-2xl min-w-[220px] max-w-[220px] max-h-28 min-h-[112px] place-items-center">
                                            <p
                                                class="text-center col-span-2 font-semibold text-sm text-gray-50 whitespace-pre-wrap mr-auto">
                                                Well Maintained &amp; Serviced </p>
                                               
                                        </div>
                                        <div
                                            class="grid grid-cols-3 bg-gradient-to-r from-pistachio to-pear px-4 rounded-2xl min-w-[220px] max-w-[220px] max-h-28 min-h-[112px] place-items-center">
                                            <p
                                                class="text-center col-span-2 font-semibold text-sm text-gray-50 whitespace-pre-wrap mr-auto">
                                                Wide
                                                Range </p>
                                               
                                        </div>
                                        <div
                                            class="grid grid-cols-3 bg-gradient-to-r from-pistachio to-pear px-4 rounded-2xl min-w-[220px] max-w-[220px] max-h-28 min-h-[112px] place-items-center">
                                            <p
                                                class="text-center col-span-2 font-semibold text-sm text-gray-50 whitespace-pre-wrap mr-auto">
                                                Pick &amp; Drop
                                                Anywhere</p>
                                               
                                        </div>
                                    </div>
                                </div>
                                <div class="px-2 mt-4 text-sm text-gray-500 flex flex-col gap-1"><a rel="noreferrer"
                                        class="growing-link w-fit" target="_blank" href="/terms-and-conditions/">Terms
                                        &amp; Conditions</a><a rel="noreferrer" class="growing-link w-fit"
                                        target="_blank" href="/fuel-policy/">Fuel Policy</a><a rel="noreferrer"
                                        class="growing-link w-fit" target="_blank"
                                        href="/cancellation-terms/">Cancellation Policy</a></div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="shadow-t-lg sm:rounded-xl rounded-t-3xl pb-4 pt-2 sm:px-6 lg:px-2 px-2 sm:mt-4 sm:sticky fixed bottom-0 left-0 right-0 bg-white">
                        <div class="min-h-[25px] text-sm text-center"></div>
                        <div class="flex sm:flex-row flex-col sm:px-6 px-2 sm:justify-between sm:items-center">
                            <div class="sm:block flex space-x-2 justify-between items-center">
                                <div>
                                    <div class="flex space-x-2">
                                        <div class=" flex font-medium text-lg items-center"><svg stroke="currentColor"
                                                fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                                                width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17 6V4H6v2h3.5c1.302 0 2.401.838 2.815 2H6v2h6.315A2.994 2.994 0 0 1 9.5 12H6v2.414L11.586 20h2.828l-6-6H9.5a5.007 5.007 0 0 0 4.898-4H17V8h-2.602a4.933 4.933 0 0 0-.924-2H17z">
                                                </path>
                                            </svg><span>6,228</span></div>
                                    </div><span class="text-xs text-gray-500">for 80 kms without fuel</span>
                                </div>
                            </div>
                            <div class="sm:mt-0 mt-2">
                                <div>
                                    <div role="button" class="items-center flex text-sm text-red-600">
                                       
                                        <p class="ml-1">Apply coupon</p>
                                    </div>
                                </div><button id="checkout-proceed-to-pay"
                                    class="proceed-to-pay action-btn sm:inline-block block sm:w-auto w-full mt-3 sm:py-2 py-3 px-4 rounded-xl text-sm whitespace-nowrap"><span>Call Now</span></button>
                            </div>
                        </div><button id="booking-success" style="display: none;"></button>
                    </div>
                </div>
            </section>
        </div>
    </section >
    
        
    





    <footer id="footer" class="my-5">
        <div class="container py-5 my-5">
            <div class="row">

                <div class="col-md-3">
                    <div class="footer-menu">
                        <img src="" alt="logo">
                        <p class="blog-paragraph fs-6 mt-3">Subscribe to our newsletter to get updates about our grand
                            offers.</p>
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
                        <p class="blog-paragraph fs-6">Subscribe to our newsletter to get updates about our grand
                            offers.</p>
                        <div class="search-bar border rounded-pill border-dark-subtle px-2">
                            <form class="text-center d-flex align-items-center" action="" method="">
                                <input type="text" class="form-control border-0 bg-transparent"
                                    placeholder="Enter your email here" />
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script>
        document.querySelectorAll('.clickable').forEach(item => {
            item.addEventListener('click', function () {
                const tractorBlock = this.closest('.tractor-block');
                tractorBlock.classList.toggle('expanded');
            });
        });

    </script>
</body>

</html>