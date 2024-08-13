<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('business.css') }}">
  <title>Listing</title>
  <style>
    .header-scroll {
      transform: translateY(-100%);
      transition: transform 0.5s ease-in-out;
    }
    .main-color{
        
    color: #50b500;

    }

    .text-main-green-600 {
      color: #50b500;
    }

    .text-main-green-700 {
      color: #65db00;
    }

    .bg-main-green-600{
        background-color: #50b500;
        transition: background-color 0.3s ease;
    }

    .bg-main-green-700{
        background-color: #65db00;
    }

    .focus\:border-main-green:focus {
            border-color: #50b500;
        }

    .relative {
            margin: 20px 0;
        }
        .label-float {
            pointer-events: none;
            position: absolute;
            left: 1rem;
            top: 0.5rem;
            padding: 0 0.25rem;
            transition: 0.2s;
            transition-timing-function: cubic-bezier(0.25, 0.1, 0.25, 1);
            opacity: 0.5;
            background: #fff;
        }
        .input:focus + .label-float,
        .input:not(:placeholder-shown) + .label-float {
            opacity: 1;
            transform: scale(0.75) translateY(-100%) translateX(-14px);
        }


        .addtiming_week__select__label {
    cursor: pointer;
    flex: 0 0 38px;
    height: 38px;
    background-color: #fff;
    position: relative;
    margin-right: 12px; /* Added margin-right */
}

.addtiming_week__select__label input[type=checkbox] {
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.addtiming_week__block {
    position: relative;
}

.addtiming_week__select {
    display: flex;
    align-items: center;
    flex-flow: initial;
}

.addtiming_week__select__label input[type=checkbox]:checked~span {
    color: #fff;
    border: 1px solid #50b500;
}

.addtiming_week__select__label>span {
    z-index: 1;
    width: 100%;
    height: 100%;
    border: 1px solid #dadce0;
    border-radius: 50%;
    position: absolute;
    top: 0;
    left: 0;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #718190;
}

.addtiming_week__select__label input[type=checkbox]:checked~span:before {
    color: #fff;
    background-color: #50b500;
    transform: scale(1.01);
    opacity: 1;
    transition: transform .25s ease-out;
}
.addtiming_week__select__label input[type=checkbox]~span:before {
    content: "";
    border-radius: 50%;
    opacity: 0;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: block;
    transform: scale(.2);
    transition: all .25s ease-in;
    z-index: -1;
}

.font13 {
    font-size: 13px;
}

.ml-10 {
    margin-left: 10px;
}

.addtiming_selectalldays.radio {
    border-bottom: 0;
}

.addtiming_pb-10, .addtiming_selectalldays.radio {
    padding-bottom: 10px;
}

.addtiming_progressbar__UTNBN, .addtiming_selectalldays.radio {
    margin-bottom: 10px;
}

.radio {
    display: flex;
    align-items: center;
    border-bottom: 1px solid #eee;
}

.addtiming_selectalldays.radio input[type=checkbox]~.addtiming_uncheck {
    width: 18px;
    height: 18px;
    border-radius: 5px;
    border: 1px solid #dadce0;
}

.addtiming_selectalldays.radio input[type=checkbox]:checked~.addtiming_uncheck {
    background-position: 50%;
    border-color: #0076d7;
}

.addtiming_selectalldays.radio input[type=checkbox]~.addtiming_uncheck {
    width: 18px;
    height: 18px;
    border-radius: 5px;
    border: 1px solid #dadce0;
}

.radio input[type=checkbox]:checked~.uncheck, .radio input[type=radio]:checked~.uncheck {
    background-image: url(//akam.cdn.jdmagicbox.com/images/icontent/listingbusiness/blue_check_icon.svg);
    border: none;
}

.radio input[type=checkbox]~.uncheck, .radio input[type=radio]~.uncheck {
    width: 25px;
    height: 25px;
    border-radius: 50%;
    border: 1px solid #777;
    flex: none;
}

.radio input {
    display: none;
}
  </style>
</head>
<body class="bg-gray-100">
@include('layouts.businessHeader')

  <div class="mt-16" id="mainContent">
  @yield('content')
  </div>

  <div id="edit_profile" class="jdBusiness_sidebar__gcbL4" style="display: none;">
        <div id="sidebar" class="jdBusiness_sidebar__overlay__cTN8s" tabindex="-1" aria-hidden="false">
            <div class="jdBusiness_sidebar__inner__zOFej">
                <div class="jdBusiness_profile__header__6EL2T"><i class="jdBusiness_backicon__ZC_ri"></i> Business
                    Profile</div>
                <div class="jdBusiness_profile__wrapper__AQgKJ">
                    <div class="jdBusiness_profile__wrapper__anchrwrap__RC3B8">
                        <div class="jdBusiness_profile__wrapper__anchrwrap__ripple___6XCj ripple ripple-container">
                            <a><img src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/business_name_icon.svg"
                                    class="jdBusiness_icbx_26__0RuRm mr-10">
                                <div class="jdBusiness_sub_text__7905s"><span class="jdBusiness_p_text__BwDSF">Business
                                        Name</span><span class="jdBusiness_p_subtext__79c3a mt-5"><span
                                            class="jdBusiness_p_subtext_1__0QBi_">lasso</span></span></div>
                            </a></div>
                        <div class="jdBusiness_profile__wrapper__anchrwrap__ripple___6XCj ripple ripple-container">
                            <a><img src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/contact_details_icon.svg"
                                    class="jdBusiness_icbx_26__0RuRm mr-10">
                                <div class="jdBusiness_sub_text__7905s"><span class="jdBusiness_p_text__BwDSF">Contact
                                        Details</span><span class="jdBusiness_p_subtext__79c3a mt-5"><span
                                            class="jdBusiness_p_subtext_1__0QBi_">+(91)-9553775093</span></span></div>
                            </a></div>
                        <div class="jdBusiness_profile__wrapper__anchrwrap__ripple___6XCj ripple ripple-container">
                            <a><img src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/map_location_icon.svg"
                                    class="jdBusiness_icbx_26__0RuRm mr-10">
                                <div class="jdBusiness_sub_text__7905s"><span class="jdBusiness_p_text__BwDSF">Business
                                        Address</span><span class="jdBusiness_missing_profile__XxwpN">Missing
                                        Info</span><span class="jdBusiness_p_subtext__79c3a mt-5"><span
                                            class="jdBusiness_p_subtext_1__0QBi_"></span><span
                                            class="jdBusiness_p_subtext_2__kjryY"><img
                                                src="https://akam.cdn.jdmagicbox.com/images/icons/gojd/maps.png"
                                                alt="jdmap" title="jdmap"></span></span></div>
                            </a></div>
                        <div class="jdBusiness_profile__wrapper__anchrwrap__ripple___6XCj ripple ripple-container">
                            <a><img src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/clock_icon.svg"
                                    class="jdBusiness_icbx_26__0RuRm mr-10">
                                <div class="jdBusiness_sub_text__7905s"><span class="jdBusiness_p_text__BwDSF">Business
                                        Timings</span><span class="jdBusiness_missing_profile__XxwpN">Missing
                                        Info</span><span class="jdBusiness_p_subtext__79c3a mt-5"><span
                                            class="jdBusiness_p_subtext_1__0QBi_"></span></span></div>
                            </a></div>
                        <div class="jdBusiness_profile__wrapper__anchrwrap__ripple___6XCj ripple ripple-container">
                            <a><img src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/yr_of_est_icon.svg"
                                    class="jdBusiness_icbx_26__0RuRm mr-10">
                                <div class="jdBusiness_sub_text__7905s"><span class="jdBusiness_p_text__BwDSF">Year of
                                        Establishment</span><span class="jdBusiness_missing_profile__XxwpN">Missing
                                        Info</span><span class="jdBusiness_p_subtext__79c3a mt-5"><span
                                            class="jdBusiness_p_subtext_1__0QBi_"></span></span></div>
                            </a></div>
                        <div class="jdBusiness_profile__wrapper__anchrwrap__ripple___6XCj ripple ripple-container">
                            <a><img src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/bus_categories.svg"
                                    class="jdBusiness_icbx_26__0RuRm mr-10">
                                <div class="jdBusiness_sub_text__7905s"><span class="jdBusiness_p_text__BwDSF">Business
                                        Categories</span><span class="jdBusiness_missing_profile__XxwpN">Missing
                                        Info</span><span class="jdBusiness_p_subtext__79c3a mt-5"><span
                                            class="jdBusiness_p_subtext_1__0QBi_"></span></span></div>
                            </a></div>
                        
                        <div class="jdBusiness_profile__wrapper__anchrwrap__ripple___6XCj ripple ripple-container">
                            <a><img src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/no_employees_icon.svg"
                                    class="jdBusiness_icbx_26__0RuRm mr-10">
                                <div class="jdBusiness_sub_text__7905s"><span class="jdBusiness_p_text__BwDSF">Number of
                                        Employees</span><span class="jdBusiness_missing_profile__XxwpN">Missing
                                        Info</span><span class="jdBusiness_p_subtext__79c3a mt-5"><span
                                            class="jdBusiness_p_subtext_1__0QBi_"></span></span></div>
                            </a></div>
                        <div class="jdBusiness_videowrap__N8wQY">
                            <div class="jdBusiness_videowrap__heading__jmVKN mb-15"><img
                                    src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/add_photo_bg.svg"
                                    width="22px" height="22px" style="margin-right: 5px;">Photos and Videos</div>
                            <div class="jdBusiness_videowrap__container__ja4Jb">
                                <div
                                    class="swiper swiper-initialized swiper-horizontal mySwiper swiper-backface-hidden">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide swiper-slide-active"
                                            style="width: 105.152px; margin-right: 10px;">
                                            <div
                                                class="jdBusiness_videowrap__container__list__YBKxP jdBusiness_videowrap__container__addphoto__0tizG">
                                                <div class="jdBusiness_addphoto__text__5Qdd1">Add Photos and Videos
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-prev swiper-button-disabled swiper-button-lock"></div>
                                    <div class="swiper-button-next swiper-button-disabled swiper-button-lock"></div>
                                    <div class="swiper-scrollbar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="jdBusiness_videowrap__N8wQY">
                            <div class="jdBusiness_videowrap__heading__jmVKN mb-15"><img
                                    src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/rate_card_icon.svg"
                                    width="22px" height="22px" style="margin-right: 5px;">Rate Card / Catalogue</div>
                            <div class="jdBusiness_videowrap__container__ja4Jb">
                                <div
                                    class="swiper swiper-initialized swiper-horizontal mySwiper swiper-backface-hidden">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide swiper-slide-active"
                                            style="width: 105.152px; margin-right: 10px;">
                                            <div
                                                class="jdBusiness_videowrap__container__list__YBKxP jdBusiness_videowrap__container__addphoto__0tizG">
                                                <div class="jdBusiness_addphoto__text__5Qdd1">Add Rate Card / Catalogue
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-prev swiper-button-disabled swiper-button-lock"></div>
                                    <div class="swiper-button-next swiper-button-disabled swiper-button-lock"></div>
                                    <div class="swiper-scrollbar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="jdBusiness_borderBottom__EfRyG"></div>
                        <div class="jdBusiness_profile__wrapper__anchrwrap__ripple___6XCj ripple ripple-container">
                            <a><img src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/website_url_icon.svg"
                                    class="jdBusiness_icbx_26__0RuRm mr-10">
                                <div class="jdBusiness_sub_text__7905s"><span class="jdBusiness_p_text__BwDSF">Business
                                        Website</span><span class="jdBusiness_missing_profile__XxwpN">Missing
                                        Info</span><span class="jdBusiness_p_subtext__79c3a mt-5"><span
                                            class="jdBusiness_p_subtext_1__0QBi_"></span></span></div>
                            </a></div>
                        <div class="jdBusiness_profile__wrapper__anchrwrap__ripple___6XCj ripple ripple-container">
                            <a><img src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/social_media_channels_icon.svg"
                                    class="jdBusiness_icbx_26__0RuRm mr-10">
                                <div class="jdBusiness_sub_text__7905s"><span class="jdBusiness_p_text__BwDSF">Social
                                        Media</span><span class="jdBusiness_missing_profile__XxwpN">Missing
                                        Info</span><span class="jdBusiness_p_subtext__79c3a mt-5"><span
                                            class="jdBusiness_p_subtext_1__0QBi_"></span></span></div>
                            </a></div>
                        <div class="jdBusiness_profile__wrapper__anchrwrap__ripple___6XCj ripple ripple-container">
                            <a><img src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/business_name_icon.svg"
                                    class="jdBusiness_icbx_26__0RuRm mr-10">
                                <div class="jdBusiness_sub_text__7905s"><span class="jdBusiness_p_text__BwDSF">Business
                                        Tools</span><span class="jdBusiness_p_subtext__79c3a mt-5"><span
                                            class="jdBusiness_p_subtext_1__0QBi_">Manage Offers, Reviews and
                                            more</span></span></div>
                            </a></div>
                        <div class="jdBusiness_profile__wrapper__anchrwrap__ripple___6XCj ripple ripple-container">
                            <a><img src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/bs_kyc_icon.svg"
                                    class="jdBusiness_icbx_26__0RuRm mr-10">
                                <div class="jdBusiness_sub_text__7905s"><span class="jdBusiness_p_text__BwDSF">KYC,
                                        Payments &amp; Invoices</span><span
                                        class="jdBusiness_p_subtext__79c3a mt-5"><span
                                            class="jdBusiness_p_subtext_1__0QBi_">Update KYC and GST
                                            Details</span></span></div>
                            </a></div>
                        <div class="jdBusiness_profile__wrapper__anchrwrap__ripple___6XCj ripple ripple-container">
                            <a><img src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/bs_businfo_icon.svg"
                                    class="jdBusiness_icbx_26__0RuRm mr-10">
                                <div class="jdBusiness_sub_text__7905s"><span
                                        class="jdBusiness_p_text__BwDSF">Additional Business Info</span><span
                                        class="jdBusiness_p_subtext__79c3a mt-5"><span
                                            class="jdBusiness_p_subtext_1__0QBi_">Update Awards, Certificates and
                                            more</span></span></div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  

  <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>
  <script>
    document.addEventListener("scroll", function() {
      const header = document.querySelector("header");
      if (window.scrollY > 50) {
        header.classList.add("header-scroll");
      } else {
        header.classList.remove("header-scroll");
      }
    });
    
  </script>
  <script>
        // Get all elements with the class 'edit-profile'
        const editProfileButtons = document.getElementsByClassName('edit-profile');

        const backIcon = document.getElementsByClassName('jdBusiness_backicon__ZC_ri');
      
        // Loop through the collection and add an event listener to each
        Array.from(editProfileButtons).forEach(button => {
          button.addEventListener('click', function() {
            const editProfile = document.getElementById('edit_profile');
            if (editProfile.style.display === 'none') {
              editProfile.style.display = 'block';
            } else {
              editProfile.style.display = 'none';
            }
          });
        });

        Array.from(backIcon).forEach(button => {
          button.addEventListener('click', function() {
            const editProfile = document.getElementById('edit_profile');
            if (editProfile.style.display === 'block') {
              editProfile.style.display = 'none';
            } else {
              editProfile.style.display = 'block';
            }
          });
        });
      </script>
</body>
</html>
