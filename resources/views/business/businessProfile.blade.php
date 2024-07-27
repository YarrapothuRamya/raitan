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
                    <a class="quickLinks_leads__section__inner__P3_dE" tabindex="0" >
                        <div class="quickLinks_leads__section__count__oUx_V undefined "
                            style="background-color: rgb(191, 239, 229);"><img
                                src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/hotkeys_addoffer.svg"
                                class="quickLinks_quicklink_image__8Yn1D"></div>
                        <div class="quickLinks_leads__section__text__GN0a_">Add Offer</div>
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
                    <div class="quickLinks_leads__section__inner__P3_dE" tabindex="0">
                        <div class="quickLinks_leads__section__count__oUx_V undefined "
                            style="background-color: rgb(252, 220, 250);"><img
                                src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/hotkeys_addvideo.svg"
                                class="quickLinks_quicklink_image__8Yn1D"></div>
                        <div class="quickLinks_leads__section__text__GN0a_">Add Video</div>
                    </div>
                    <a class="quickLinks_leads__section__inner__P3_dE" tabindex="0" href="{{ route('addsociallinks.home') }}">
                        <div class="quickLinks_leads__section__count__oUx_V undefined "
                            style="background-color: rgb(205, 249, 237);"><img
                                src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/hotkeys_addsociallink.svg"
                                class="quickLinks_quicklink_image__8Yn1D"></div>
                        <div class="quickLinks_leads__section__text__GN0a_">Add Social Links</div>
                    </a>
                    <div class="quickLinks_leads__section__inner__P3_dE" tabindex="0">
                        <div class="quickLinks_leads__section__count__oUx_V undefined "
                            style="background-color: rgb(244, 237, 189);"><img
                                src="http://akam.cdn.jdmagicbox.com/images/icontent/jdbusiness/biz_icon.svg"
                                class="quickLinks_quicklink_image__8Yn1D"></div>
                        <div class="quickLinks_leads__section__text__GN0a_">Share Biz Card</div>
                    </div>
                </div>


                <div id="smart_card" class="smartCard_smartcard__sectionwrapper__zv93i">
                    <div class="smartCard_smartcard__section__XGGYr">
                        <div class="swiper swiper-initialized swiper-horizontal mySwiper swiper-backface-hidden">
                            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                <div class="swiper-slide swiper-slide-active"
                                    style="width: 384.6px; margin-right: 15px;">
                                    <div class="smartCard_smartcard__section__inner__aASyI">
                                        <div class="smartCard_smartcard__section__inner__left__8sAQc">
                                            <div>
                                                <div class="smartCard_addtext__oAUHC">Improve your Ratings</div>
                                                <div class="smartCard_helptext__RAVxj">Download &amp; share QR Code
                                                </div>
                                            </div>
                                            <form method="POST" id="myForm_smart_card"
                                                action="https://wap.justdial.com/jdpay2/?page=ratingsqr&amp;name=lasso&amp;source=77&amp;vertical=562&amp;docid=9999P8818.8818.240713114332.J9A2&amp;campaign_name=ratings_qr&amp;message_template=JdBusiness_ratingsqr&amp;communication_channel=&amp;customer_segment=vendors_all&amp;wkwebview=1&amp;hide_header=1&amp;ep=smart_card&amp;source_link=jdBusiness&amp;docid=9999P8818.8818.240713114332.J9A2">
                                                <input hidden="" type="text" name="sid" readonly=""
                                                    value="2vp4o7g5rz8%2FGMo0aOIL9npfWjNBHvu%2BDg7HLAMMiy4%3D"><input
                                                    type="text" hidden="" name="mobile" readonly="" value="9553775093">
                                            </form><button
                                                class="smartCard_primary__btn__E419X primary__btn ripple ripple-container">GET
                                                MY QR CODE<i class="smartCard_arrowrgt__m13X3"></i></button>
                                        </div><img class="smartCard_smartcard__section__inner__right__tibpU"
                                            src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/smart_qrode_icon.svg">
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-next" style="width: 384.6px; margin-right: 15px;">
                                    <div class="smartCard_smartcard__section__inner__aASyI">
                                        <div class="smartCard_smartcard__section__inner__left__8sAQc">
                                            <div>
                                                <div class="smartCard_addtext__oAUHC">Add Complete Address</div>
                                                <div class="smartCard_helptext__RAVxj">Add store location for your
                                                    customer to locate you easily</div>
                                            </div>
                                            <form method="POST" id="myForm_smart_card"
                                                action="https://wap.justdial.com/edit_list/index.php?docid=9999P8818.8818.240713114332.J9A2&amp;owner=1&amp;hide_header=1&amp;city=Tadepalligudem&amp;source=77&amp;version=0&amp;editlist=address&amp;editname=address&amp;vertical=jdBusiness&amp;ep=smart_card&amp;source_link=jdBusiness&amp;docid=9999P8818.8818.240713114332.J9A2">
                                                <input hidden="" type="text" name="sid" readonly=""
                                                    value="2vp4o7g5rz8%2FGMo0aOIL9npfWjNBHvu%2BDg7HLAMMiy4%3D"><input
                                                    type="text" hidden="" name="mobile" readonly="" value="9553775093">
                                            </form><button
                                                class="smartCard_primary__btn__E419X primary__btn ripple ripple-container">ADD<i
                                                    class="smartCard_arrowrgt__m13X3"></i></button>
                                        </div><img class="smartCard_smartcard__section__inner__right__tibpU"
                                            src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/smart_address_icon.svg">
                                    </div>
                                </div>
                                <div class="swiper-slide" style="width: 384.6px; margin-right: 15px;">
                                    <div class="smartCard_smartcard__section__inner__aASyI">
                                        <div class="smartCard_smartcard__section__inner__left__8sAQc">
                                            <div>
                                                <div class="smartCard_addtext__oAUHC">Add Store Timings</div>
                                                <div class="smartCard_helptext__RAVxj">Add store timings for your
                                                    customer to know when you are open</div>
                                            </div>
                                            <form method="POST" id="myForm_smart_card"
                                                action="https://wap.justdial.com/edit_list/index.php?docid=9999P8818.8818.240713114332.J9A2&amp;owner=1&amp;hide_header=1&amp;city=Tadepalligudem&amp;source=77&amp;version=0&amp;editlist=timingnew&amp;editname=timingnew&amp;vertical=jdBusiness&amp;ep=smart_card&amp;source_link=jdBusiness&amp;docid=9999P8818.8818.240713114332.J9A2">
                                                <input hidden="" type="text" name="sid" readonly=""
                                                    value="2vp4o7g5rz8%2FGMo0aOIL9npfWjNBHvu%2BDg7HLAMMiy4%3D"><input
                                                    type="text" hidden="" name="mobile" readonly="" value="9553775093">
                                            </form><button
                                                class="smartCard_primary__btn__E419X primary__btn ripple ripple-container">ADD<i
                                                    class="smartCard_arrowrgt__m13X3"></i></button>
                                        </div><img class="smartCard_smartcard__section__inner__right__tibpU"
                                            src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/storetiming_icon.svg">
                                    </div>
                                </div>
                                <div class="swiper-slide" style="width: 384.6px; margin-right: 15px;">
                                    <div class="smartCard_smartcard__section__inner__aASyI">
                                        <div class="smartCard_smartcard__section__inner__left__8sAQc">
                                            <div>
                                                <div class="smartCard_addtext__oAUHC">Upload Rate Card / Catalogue</div>
                                                <div class="smartCard_helptext__RAVxj">Upload a Rate Card / Catalogue to
                                                    help your customers</div>
                                            </div>
                                            <form method="POST" id="myForm_smart_card"
                                                action="https://wap.justdial.com/edit_list/index.php?docid=9999P8818.8818.240713114332.J9A2&amp;owner=1&amp;hide_header=1&amp;city=Tadepalligudem&amp;source=77&amp;version=0&amp;editlist=rcBrochure&amp;editname=rcBrochure&amp;vertical=jdBusiness&amp;ep=smart_card&amp;source_link=jdBusiness&amp;docid=9999P8818.8818.240713114332.J9A2">
                                                <input hidden="" type="text" name="sid" readonly=""
                                                    value="2vp4o7g5rz8%2FGMo0aOIL9npfWjNBHvu%2BDg7HLAMMiy4%3D"><input
                                                    type="text" hidden="" name="mobile" readonly="" value="9553775093">
                                            </form><button
                                                class="smartCard_primary__btn__E419X primary__btn ripple ripple-container">UPLOAD<i
                                                    class="smartCard_arrowrgt__m13X3"></i></button>
                                        </div><img class="smartCard_smartcard__section__inner__right__tibpU"
                                            src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/update_ratecard.svg">
                                    </div>
                                </div>
                                <div class="swiper-slide" style="width: 384.6px; margin-right: 15px;">
                                    <div class="smartCard_smartcard__section__inner__aASyI">
                                        <div class="smartCard_smartcard__section__inner__left__8sAQc">
                                            <div>
                                                <div class="smartCard_addtext__oAUHC">Add Business Categories</div>
                                                <div class="smartCard_helptext__RAVxj">Add more categories to reach out
                                                    to more customers</div>
                                            </div>
                                            <form method="POST" id="myForm_smart_card"
                                                action="https://wap.justdial.com/edit_list/index.php?docid=9999P8818.8818.240713114332.J9A2&amp;owner=1&amp;hide_header=1&amp;city=Tadepalligudem&amp;source=77&amp;version=0&amp;editlist=category&amp;editname=category&amp;vertical=jdBusiness&amp;ep=smart_card&amp;source_link=jdBusiness&amp;docid=9999P8818.8818.240713114332.J9A2">
                                                <input hidden="" type="text" name="sid" readonly=""
                                                    value="2vp4o7g5rz8%2FGMo0aOIL9npfWjNBHvu%2BDg7HLAMMiy4%3D"><input
                                                    type="text" hidden="" name="mobile" readonly="" value="9553775093">
                                            </form><button
                                                class="smartCard_primary__btn__E419X primary__btn ripple ripple-container">ADD<i
                                                    class="smartCard_arrowrgt__m13X3"></i></button>
                                        </div><img class="smartCard_smartcard__section__inner__right__tibpU"
                                            src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/business_catgory_icon.svg">
                                    </div>
                                </div>
                                <div class="swiper-slide" style="width: 384.6px; margin-right: 15px;">
                                    <div class="smartCard_smartcard__section__inner__aASyI">
                                        <div class="smartCard_smartcard__section__inner__left__8sAQc">
                                            <div>
                                                <div class="smartCard_addtext__oAUHC">Add Contact Details</div>
                                                <div class="smartCard_helptext__RAVxj">Add multiple contact details for
                                                    your customers to reach you easily</div>
                                            </div>
                                            <form method="POST" id="myForm_smart_card"
                                                action="https://wap.justdial.com/edit_list/index.php?docid=9999P8818.8818.240713114332.J9A2&amp;owner=1&amp;hide_header=1&amp;city=Tadepalligudem&amp;source=77&amp;version=0&amp;editlist=contactsV2&amp;editname=contactsV2&amp;vertical=jdBusiness&amp;ep=smart_card&amp;source_link=jdBusiness&amp;docid=9999P8818.8818.240713114332.J9A2">
                                                <input hidden="" type="text" name="sid" readonly=""
                                                    value="2vp4o7g5rz8%2FGMo0aOIL9npfWjNBHvu%2BDg7HLAMMiy4%3D"><input
                                                    type="text" hidden="" name="mobile" readonly="" value="9553775093">
                                            </form><button
                                                class="smartCard_primary__btn__E419X primary__btn ripple ripple-container">ADD<i
                                                    class="smartCard_arrowrgt__m13X3"></i></button>
                                        </div><img class="smartCard_smartcard__section__inner__right__tibpU"
                                            src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/smcontact_details_icon.svg">
                                    </div>
                                </div>
                                <div class="swiper-slide" style="width: 384.6px; margin-right: 15px;">
                                    <div class="smartCard_smartcard__section__inner__aASyI">
                                        <div class="smartCard_smartcard__section__inner__left__8sAQc">
                                            <div>
                                                <div class="smartCard_addtext__oAUHC">Add Offers</div>
                                                <div class="smartCard_helptext__RAVxj">Add exciting offers to attract
                                                    more customers</div>
                                            </div>
                                            <form method="POST" id="myForm_smart_card"
                                                action="https://m.justdial.com/deals-offers/addoffer?docid=9999P8818.8818.240713114332.J9A2&amp;source=77&amp;hide_header=1&amp;el=1&amp;jdbusiness=1&amp;sc=1&amp;ep=smart_card&amp;source_link=jdBusiness&amp;docid=9999P8818.8818.240713114332.J9A2">
                                                <input hidden="" type="text" name="sid" readonly=""
                                                    value="2vp4o7g5rz8%2FGMo0aOIL9npfWjNBHvu%2BDg7HLAMMiy4%3D"><input
                                                    type="text" hidden="" name="mobile" readonly="" value="9553775093">
                                            </form><button
                                                class="smartCard_primary__btn__E419X primary__btn ripple ripple-container">ADD<i
                                                    class="smartCard_arrowrgt__m13X3"></i></button>
                                        </div><img class="smartCard_smartcard__section__inner__right__tibpU"
                                            src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/add_offers.svg">
                                    </div>
                                </div>
                                <div class="swiper-slide" style="width: 384.6px; margin-right: 15px;">
                                    <div class="smartCard_smartcard__section__inner__aASyI">
                                        <div class="smartCard_smartcard__section__inner__left__8sAQc">
                                            <div>
                                                <div class="smartCard_addtext__oAUHC">Complete your KYC</div>
                                                <div class="smartCard_helptext__RAVxj">Complete your KYC to verify your
                                                    business profile on Justdial</div>
                                            </div>
                                            <form method="POST" id="myForm_smart_card"
                                                action="https://wap.justdial.com/jdpay2/?name=lasso&amp;hide_header=1&amp;wap=77&amp;source=77&amp;version=&amp;native=1&amp;mobtype=2&amp;page=kyc&amp;vertical=6&amp;docid=9999P8818.8818.240713114332.J9A2&amp;wkwebview=1&amp;ep=smart_card&amp;source_link=jdBusiness&amp;docid=9999P8818.8818.240713114332.J9A2">
                                                <input hidden="" type="text" name="sid" readonly=""
                                                    value="2vp4o7g5rz8%2FGMo0aOIL9npfWjNBHvu%2BDg7HLAMMiy4%3D"><input
                                                    type="text" hidden="" name="mobile" readonly="" value="9553775093">
                                            </form><button
                                                class="smartCard_primary__btn__E419X primary__btn ripple ripple-container">COMPLETE
                                                KYC<i class="smartCard_arrowrgt__m13X3"></i></button>
                                        </div><img class="smartCard_smartcard__section__inner__right__tibpU"
                                            src="https://akam.cdn.jdmagicbox.com/images/icontent/analytics/kyc_icon.svg">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-prev swiper-button-disabled"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-scrollbar"></div>
                            <div class="swiper-pagination swiper-pagination-custom swiper-pagination-horizontal"><span
                                    class="activecount">1/7</span> <span key="1"
                                    class="swiper-pagination-bullet"></span> <span key="2"
                                    class="swiper-pagination-bullet"></span> <span key="3"
                                    class="swiper-pagination-bullet"></span> <span key="4"
                                    class="swiper-pagination-bullet"></span> <span key="5"
                                    class="swiper-pagination-bullet"></span> <span key="6"
                                    class="swiper-pagination-bullet"></span></div>
                        </div>
                    </div>
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