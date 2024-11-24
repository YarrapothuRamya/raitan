@extends('layouts.businessapp')

@section('content')
<div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            

            <div class=" bg-white p-8 rounded-lg shadow-md">
                <!-- Your existing content here -->

                <!-- New section with Tailwind CSS classes -->
                <div class="advertiseBanner_advertbanner__JwUvf">
                    <div class="swiper swiper-initialized swiper-horizontal mySwiper swiper-backface-hidden">
                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-active swiper-slide-next" data-swiper-slide-index="0"
                                style="width: 915px; margin-right: 15px;">
                                <div
                                    class="advertiseBanner_advertiseBanner__GOP2w advertiseBanner_cursorPointer__bURVH">
                                    <a class="advertiseBanner_advertiseBanner__list__sIimj" >
                                        <img src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/Web_21feb.png"
                                            alt="advertise banner" title="advertise banner">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-prev swiper-button-lock"></div>
                        <div class="swiper-button-next swiper-button-lock"></div>
                        <div class="swiper-scrollbar"></div>
                        <div
                            class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-lock">
                            <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <div class="quickLinks_leads__section__heading__26UCM pl-20 pr-20">Quick Links</div>
                    <!-- Your content for quick links can follow here -->

                </div>

                <div id="quick_links" class="quickLinks_leads__section__LEDiA  " style="margin-bottom: 20px;">
                    <div class="quickLinks_leads__section__inner__P3_dE edit-profile" tabindex="0">
                        <div class="quickLinks_leads__section__count__oUx_V undefined "
                            style="background-color: rgb(255, 232, 206);"><img
                                src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/hotkeys_editprofile.svg"
                                class="quickLinks_quicklink_image__8Yn1D"></div>
                        <div class="quickLinks_leads__section__text__GN0a_">Edit Profile</div>
                    </div>
                    <form action="{{ route('kycverify') }}" method="POST" style="display: inline;">
    @csrf
    <input type="hidden" name="user_id" value="{{ $user_id }}"> <!-- Pass the actual user_id here -->
    <input type="hidden" name="business_name" value="{{ $business_name }}">
    <input type="hidden" name="business_id" value="{{ $business_id  }}">
    <input type="hidden" name="category" value="{{ $category }}"> <!-- Pass the user_id dynamically -->

    <!-- Link that triggers the form submission -->
    <a class="quickLinks_leads__section__inner__P3_dE" tabindex="0" href="javascript:void(0)" onclick="this.closest('form').submit()">
        <div class="quickLinks_leads__section__count__oUx_V undefined" style="background-color: rgb(231, 217, 255);">
            <img src="{{ asset('images/kyc.webp') }}" class="quickLinks_quicklink_image__8Yn1D kyc">
        </div>
        <div class="quickLinks_leads__section__text__GN0a_">KYC</div>
    </a>
</form>
                    <a class="quickLinks_leads__section__inner__P3_dE" tabindex="0"  href="{{ route('advertiseplans.home') }}">
                        <div class="quickLinks_leads__section__count__oUx_V undefined "
                            style="background-color: rgb(231, 217, 255);"><img
                                src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/hotkeys_advertise1.svg"
                                class="quickLinks_quicklink_image__8Yn1D"></div>
                        <div class="quickLinks_leads__section__text__GN0a_">Advertise</div>
                    </a>
                    <a class="quickLinks_leads__section__inner__P3_dE" tabindex="0" href="{{ route('addphoto.home') }}">
                        <div class="quickLinks_leads__section__count__oUx_V undefined "
                            style="background-color: rgb(218, 248, 204);"><img
                                src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/hotkeys_addphotos.svg"
                                class="quickLinks_quicklink_image__8Yn1D"></div>
                        <div class="quickLinks_leads__section__text__GN0a_">Add Photos</div>
                    </a>
                    <a class="quickLinks_leads__section__inner__P3_dE" tabindex="0" href="{{ route('additionalcontact.home') }}">
                        <div class="quickLinks_leads__section__count__oUx_V undefined "
                            style="background-color: rgb(237, 231, 229);"><img
                                src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/hotkeys_addcontact.svg"
                                class="quickLinks_quicklink_image__8Yn1D"></div>
                        <div class="quickLinks_leads__section__text__GN0a_">Add Contact</div>
                    </a>
                    <a class="quickLinks_leads__section__inner__P3_dE" tabindex="0" href="{{ route('edittimings.home') }}">
                        <div class="quickLinks_leads__section__count__oUx_V undefined "
                            style="background-color: rgb(244, 237, 189);"><img
                                src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/hotkeys_addbusinesstiming.svg"
                                class="quickLinks_quicklink_image__8Yn1D"></div>
                        <div class="quickLinks_leads__section__text__GN0a_">Business Timings</div>
                    </a>
                    
                    <div class="quickLinks_leads__section__inner__P3_dE" tabindex="0">
                        <div class="quickLinks_leads__section__count__oUx_V undefined "
                            style="background-color: rgb(223, 245, 255);"><img
                                src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/hotkeys_replyreview.svg"
                                class="quickLinks_quicklink_image__8Yn1D"></div>
                        <div class="quickLinks_leads__section__text__GN0a_">Reviews</div>
                    </div>
                    <div class="quickLinks_leads__section__inner__P3_dE" tabindex="0">
                        <div class="quickLinks_leads__section__count__oUx_V undefined "
                            style="background-color: rgb(210, 235, 255);"><img
                                src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/hotkeys_addwebsite.svg"
                                class="quickLinks_quicklink_image__8Yn1D"></div>
                        <div class="quickLinks_leads__section__text__GN0a_">Add Website</div>
                    </div>
                    
                    <a class="quickLinks_leads__section__inner__P3_dE" tabindex="0" href="{{ route('addsociallinks.home') }}">
                        <div class="quickLinks_leads__section__count__oUx_V undefined "
                            style="background-color: rgb(205, 249, 237);"><img
                                src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/hotkeys_addsociallink.svg"
                                class="quickLinks_quicklink_image__8Yn1D"></div>
                        <div class="quickLinks_leads__section__text__GN0a_">Add Social Links</div>
                    </a>
                    
                </div>


                



                <div id="mybusiness" class="mybusiness_mybusiness__wrapper__mlbSd">
                    <div class="mybusiness_mybusiness__wrapper__heading__qrRNO">My Business</div>
                    <div class="mybusiness_mybusiness__2IwYr mybusiness_myleads__Oitvk">
                        <div class="mybusiness_mybusiness__list__sWOVn ripple ripple-container" tabindex="0">
                            <div class="mybusiness_mybusiness__listbox___bh2_ "><img
                                    class="mybusiness_mybusiness__imgbox__4Y4zJ mybusiness_icbx34__wobjM"
                                    src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/nwleads_icon.svg">
                                <div class="mybusiness_mybusiness__text__xqAM2 ">
                                    <div class="mybusiness_mybusiness__text__text1__nRTpL">Leads</div>
                                    <div
                                        class="mybusiness_mybusiness__text__text2__ss5Ci mybusiness_ubltext2__ONtQT ripple ripple-container">
                                        <i class="mybusiness_iconswrap__k5_ud"
                                            style="background-image: url(&quot;undefined&quot;);"></i>View Leads,
                                        Competitor Trends &amp; Analytics<i class="mybusiness_iconswrap__k5_ud"
                                            style="background-image: url(&quot;undefined&quot;);"></i></div>
                                </div>
                                <div class="mybusiness_knowmore__5KFeU font11 color007 fw500">Know More</div>
                            </div>
                        </div>
                    </div>
                    <div class="mybusiness_mybusiness__2IwYr mybusiness_myleads__Oitvk">
                        <div class="mybusiness_mybusiness__list__sWOVn ripple ripple-container" tabindex="0">
                            <div class="mybusiness_mybusiness__listbox___bh2_ "><img
                                    class="mybusiness_mybusiness__imgbox__4Y4zJ mybusiness_icbx34__wobjM"
                                    src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/edit_business_profile_icon.svg">
                                <div class="mybusiness_mybusiness__text__xqAM2 ">
                                    <div class="mybusiness_mybusiness__text__text1__nRTpL">Business Profile<span
                                            class="mybusiness_tags__699TX"
                                            style="color: rgb(204, 40, 33); background-color: rgb(255, 242, 242);"><i
                                                class="mybusiness_icbx11__k2NpV"
                                                style="background-image: url(&quot;https://akam.cdn.jdmagicbox.com/images/icontent/jdbusiness/info_missing_tags.svg&quot;);"></i>Info
                                            Missing</span></div>
                                    <div
                                        class="mybusiness_mybusiness__text__text2__ss5Ci mybusiness_ubltext2__ONtQT ripple ripple-container">
                                        <i class="mybusiness_iconswrap__k5_ud"
                                            style="background-image: url(&quot;undefined&quot;);"></i>Update Categories
                                        , WhatsApp / Mobile Numbers &amp; Business Timings<i
                                            class="mybusiness_iconswrap__k5_ud"
                                            style="background-image: url(&quot;undefined&quot;);"></i></div>
                                </div>
                                <div class="mybusiness_knowmore__5KFeU font11 color007 fw500">Know More</div>
                            </div>
                        </div>
                    </div>
                    <div class="mybusiness_mybusiness__list__sWOVn ripple mr-20 ripple-container" tabindex="0">
                        <div class="mybusiness_mybusiness__listbox___bh2_"><img
                                class="mybusiness_mybusiness__imgbox__4Y4zJ mybusiness_icbx34__wobjM"
                                src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/business_name_icon.svg">
                            <div class="mybusiness_mybusiness__text__xqAM2">
                                <div class="mybusiness_mybusiness__text__text1__nRTpL">Business Tools<span
                                        class="mybusiness_tags__699TX"
                                        style="color: rgb(0, 116, 140); background-color: rgb(227, 251, 255);"><i
                                            class="mybusiness_icbx11__k2NpV"
                                            style="background-image: url(&quot;https://akam.cdn.jdmagicbox.com/images/icontent/jdbusiness/new_tags.svg&quot;);"></i>New</span>
                                </div>
                                <div class="mybusiness_mybusiness__text__text2__ss5Ci">Manage Offers, Reviews and more
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mybusiness_mybusiness__list__sWOVn ripple mr-0 ripple-container" tabindex="0">
                        <div class="mybusiness_mybusiness__listbox___bh2_"><img
                                class="mybusiness_mybusiness__imgbox__4Y4zJ mybusiness_icbx34__wobjM"
                                src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/advertise_icon.svg">
                            <div class="mybusiness_mybusiness__text__xqAM2">
                                <div class="mybusiness_mybusiness__text__text1__nRTpL">Advertise on Justdial</div>
                                <div class="mybusiness_mybusiness__text__text2__ss5Ci">Reach Out to 17 Crore New
                                    Customers</div>
                            </div>
                        </div>
                    </div>
                    <div class="mybusiness_mybusiness__list__sWOVn ripple mr-20 ripple-container" tabindex="0">
                        <div class="mybusiness_mybusiness__listbox___bh2_"><img
                                class="mybusiness_mybusiness__imgbox__4Y4zJ mybusiness_icbx34__wobjM"
                                src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/bs_kyc_icon.svg">
                            <div class="mybusiness_mybusiness__text__xqAM2">
                                <div class="mybusiness_mybusiness__text__text1__nRTpL">KYC, Payments &amp; Invoices<span
                                        class="mybusiness_tags__699TX"
                                        style="color: rgb(173, 84, 24); background-color: rgb(255, 236, 230);"><i
                                            class="mybusiness_icbx11__k2NpV"
                                            style="background-image: url(&quot;https://akam.cdn.jdmagicbox.com/images/icontent/jdbusiness/attention_tags.svg&quot;);"></i>Attention</span>
                                </div>
                                <div class="mybusiness_mybusiness__text__text2__ss5Ci">Update KYC and GST Details</div>
                            </div>
                        </div>
                    </div>
                    <div class="mybusiness_mybusiness__list__sWOVn ripple mr-0 ripple-container" tabindex="0">
                        <div class="mybusiness_mybusiness__listbox___bh2_"><img
                                class="mybusiness_mybusiness__imgbox__4Y4zJ mybusiness_icbx34__wobjM"
                                src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/bs_businfo_icon.svg">
                            <div class="mybusiness_mybusiness__text__xqAM2">
                                <div class="mybusiness_mybusiness__text__text1__nRTpL">Additional Business Info</div>
                                <div class="mybusiness_mybusiness__text__text2__ss5Ci">Update Awards, Certificates and
                                    more</div>
                            </div>
                        </div>
                    </div>
                    <div class="mybusiness_mybusiness__list__sWOVn ripple mr-20 ripple-container" tabindex="0">
                        <div class="mybusiness_mybusiness__listbox___bh2_"><img
                                class="mybusiness_mybusiness__imgbox__4Y4zJ mybusiness_icbx34__wobjM"
                                src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/bs_support_icon.svg">
                            <div class="mybusiness_mybusiness__text__xqAM2">
                                <div class="mybusiness_mybusiness__text__text1__nRTpL">Support</div>
                                <div class="mybusiness_mybusiness__text__text2__ss5Ci">Connect with Us</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <!-- New Section: 3 Simple Steps -->



        </div>
@endsection