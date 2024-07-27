@extends('layouts.businessapp')

@section('content')
<div class="flex flex-col lg:flex-row lg:justify-center items-center p-4 lg:p-8 font-sans bg-slate-100 space-y-4 lg:space-y-0">
    <div class="w-full lg:w-[23rem] bg-white border-2 border-gray-200 p-5 rounded-2xl transition-transform duration-300 ease-in-out hover:shadow-lg hover:border-teal-500 hover:-translate-y-2">
        <div class="pb-3 mb-4 border-b border-gray-200">
            
            <h2 class="text-3xl lg:text-5xl m-0 font-normal" style="color: #15a677;">Standard</h2>
        </div>
        <div class="flex items-center mb-2">
            <svg width="24" height="24" fill="none" class="text-green-500 mr-1" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
            </svg>10k Visitors/mo
        </div>
        <div class="flex items-center mb-2">
            <svg width="24" height="24" fill="none" class="text-green-500 mr-1" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
            </svg>
            10 Funnels, 50 Pages
        </div>
        <div class="flex items-center mb-5">
            <svg width="24" height="24" fill="none" class="text-green-500 mr-1" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
            </svg>Unlimited Transactions
        </div>
        <div class="mt-auto w-full">
            <a class="bg-main-green-600 text-white rounded-xl py-2 border-none w-full flex items-center px-3 hover:bg-teal-600" href="{{ route('choosepayment.home') }}">
                Buy Now
                <svg class="ml-auto" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M19 12H4.75"></path>
                </svg>
            </a>
            <div class="text-xs mt-3 text-slate-600">Literally you probably haven't heard of them jean shorts.</div>
        </div>
    </div>
    <!-- Repeat the above div block for each pricing option -->
    <div class="w-full lg:w-[23rem] bg-white border-2 border-gray-200 p-5 rounded-2xl transition-transform duration-300 ease-in-out hover:shadow-lg hover:border-teal-500 hover:-translate-y-2">
        <div class="pb-3 mb-4 border-b border-gray-200">
            
            <h2 class="text-3xl lg:text-5xl m-0 font-normal" style="color: #15a677;">Standard</h2>
        </div>
        <div class="flex items-center mb-2">
            <svg width="24" height="24" fill="none" class="text-green-500 mr-1" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
            </svg>10k Visitors/mo
        </div>
        <div class="flex items-center mb-2">
            <svg width="24" height="24" fill="none" class="text-green-500 mr-1" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
            </svg>
            10 Funnels, 50 Pages
        </div>
        <div class="flex items-center mb-5">
            <svg width="24" height="24" fill="none" class="text-green-500 mr-1" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
            </svg>Unlimited Transactions
        </div>
        <div class="mt-auto w-full">
            <a class="bg-main-green-600 text-white rounded-xl py-2 border-none w-full flex items-center px-3 hover:bg-teal-600" href="{{ route('choosepayment.home') }}">
                Buy Now
                <svg class="ml-auto" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M19 12H4.75"></path>
                </svg>
            </a>
            <div class="text-xs mt-3 text-slate-600">Literally you probably haven't heard of them jean shorts.</div>
        </div>
    </div>
    <div class="w-full lg:w-[23rem] bg-white border-2 border-gray-200 p-5 rounded-2xl transition-transform duration-300 ease-in-out hover:shadow-lg hover:border-teal-500 hover:-translate-y-2">
        <div class="pb-3 mb-4 border-b border-gray-200">
            
            <h2 class="text-3xl lg:text-5xl m-0 font-normal" style="color: #e52b8d;">Premium</h2>
        </div>
        <div class="flex items-center mb-2">
            <svg width="24" height="24" fill="none" class="text-green-500 mr-1" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
            </svg>10k Visitors/mo
        </div>
        <div class="flex items-center mb-2">
            <svg width="24" height="24" fill="none" class="text-green-500 mr-1" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
            </svg>
            10 Funnels, 50 Pages
        </div>
        <div class="flex items-center mb-5">
            <svg width="24" height="24" fill="none" class="text-green-500 mr-1" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
            </svg>Unlimited Transactions
        </div>
        <div class="mt-auto w-full">
            <a class="bg-main-green-600 text-white rounded-xl py-2 border-none w-full flex items-center px-3 hover:bg-teal-600" href="{{ route('choosepayment.home') }}">
                Buy Now
                <svg class="ml-auto" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M19 12H4.75"></path>
                </svg>
            </a>
            <div class="text-xs mt-3 text-slate-600">Literally you probably haven't heard of them jean shorts.</div>
        </div>
    </div>
    <div class="w-full lg:w-[23rem] bg-white border-2 border-gray-200 p-5 rounded-2xl transition-transform duration-300 ease-in-out hover:shadow-lg hover:border-teal-500 hover:-translate-y-2 lg:border-l-0">
        <div class="pb-3 mb-4 border-b border-gray-200">
            
            <div class="flex items-center">
                <h2 class="text-3xl lg:text-5xl m-0 font-normal" style="color: #4e49e9;">Pro</h2>
                <span class="text-slate-300 ml-1">/mo</span>
            </div>
        </div>
        <div class="flex items-center mb-2">
            <svg width="24" height="24" fill="none" class="text-green-500 mr-1" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
            </svg>Audience Data
        </div>
        <div class="flex items-center mb-2">
            <svg width="24" height="24" fill="none" class="text-green-500 mr-1" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
            </svg>
            Premium templates
        </div>
        <div class="flex items-center mb-5">
            <svg width="24" height="24" fill="none" class="text-green-500 mr-1" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
            </svg>White Labelling
        </div>
        <div class="mt-auto w-full">
            <a class="bg-main-green-600 text-white rounded-xl py-2 border-none w-full flex items-center px-3 hover:bg-teal-600" href="{{ route('choosepayment.home') }}">
                Buy Now
                <svg class="ml-auto" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M19 12H4.75"></path>
                </svg>
            </a>
            <div class="text-xs mt-3 text-slate-600">Literally you probably haven't heard of them jean shorts.</div>
        </div>
    </div>
    <div class="w-full lg:w-[23rem] bg-white border-2 border-gray-200 p-5 rounded-2xl transition-transform duration-300 ease-in-out hover:shadow-lg hover:border-teal-500 hover:-translate-y-2 lg:border-l-0">
        <div class="pb-3 mb-4 border-b border-gray-200">
            
            <div class="flex items-center">
                <h2 class="text-3xl lg:text-5xl m-0 font-normal" style="color: #049fd8;">Growth</h2>
                <span class="text-slate-300 ml-1">/mo</span>
            </div>
        </div>
        <div class="flex items-center mb-2">
            <svg width="24" height="24" fill="none" class="text-green-500 mr-1" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
            </svg>Audience Data
        </div>
        <div class="flex items-center mb-2">
            <svg width="24" height="24" fill="none" class="text-green-500 mr-1" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
            </svg>
            Premium templates
        </div>
        <div class="flex items-center mb-5">
            <svg width="24" height="24" fill="none" class="text-green-500 mr-1" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
            </svg>White Labelling
        </div>
        <div class="mt-auto w-full">
            <a class="bg-main-green-600 text-white rounded-xl py-2 border-none w-full flex items-center px-3 hover:bg-teal-600" href="{{ route('choosepayment.home') }}">
                Buy Now
                <svg class="ml-auto" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M19 12H4.75"></path>
                </svg>
            </a>
            <div class="text-xs mt-3 text-slate-600">Literally you probably haven't heard of them jean shorts.</div>
        </div>
    </div>
</div>


<div id="featuresid" class="section py-12 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <div class="text-2xl font-bold text-gray-900">Features</div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="space-y-6">
                <div class="flex items-start space-x-4 p-4 bg-white rounded-lg shadow-md">
                    <div class="flex-shrink-0">
                        <img src="https://akam.cdn.jdmagicbox.com/images/icontent/listingbusiness/SearchVisibility_f.svg" alt="Premium Listing" class="h-12 w-12">
                    </div>
                    <div>
                        <div class="text-lg font-semibold text-gray-800">Premium Listing</div>
                        <div class="text-sm text-gray-600">Get higher visibility and exposure on Justdial</div>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-4 bg-white rounded-lg shadow-md">
                    <div class="flex-shrink-0">
                        <img src="https://akam.cdn.jdmagicbox.com/images/icontent/listingbusiness/OnlineCatalogue_f.svg" alt="Online Catalogue" class="h-12 w-12">
                    </div>
                    <div>
                        <div class="text-lg font-semibold text-gray-800">Online Catalogue</div>
                        <div class="text-sm text-gray-600">Showcase your product and service offerings to potential customers</div>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-4 bg-white rounded-lg shadow-md">
                    <div class="flex-shrink-0">
                        <img src="https://akam.cdn.jdmagicbox.com/images/icontent/listingbusiness/PaymentSolutions_f.svg" alt="Payment Solutions" class="h-12 w-12">
                    </div>
                    <div>
                        <div class="text-lg font-semibold text-gray-800">Payment Solutions</div>
                        <div class="text-sm text-gray-600">Send and receive money from suppliers and customers</div>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-4 bg-white rounded-lg shadow-md">
                    <div class="flex-shrink-0">
                        <img src="https://akam.cdn.jdmagicbox.com/images/icontent/listingbusiness/SmartLeadSystem_f.svg" alt="Smart Lead Management System" class="h-12 w-12">
                    </div>
                    <div>
                        <div class="text-lg font-semibold text-gray-800">Smart Lead Management System</div>
                        <div class="text-sm text-gray-600">View and track all your leads at one place</div>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-4 bg-white rounded-lg shadow-md">
                    <div class="flex-shrink-0">
                        <img src="https://akam.cdn.jdmagicbox.com/images/icontent/listingbusiness/CompetitorAnalysis_f.svg" alt="Competitor Analysis" class="h-12 w-12">
                    </div>
                    <div>
                        <div class="text-lg font-semibold text-gray-800">Competitor Analysis</div>
                        <div class="text-sm text-gray-600">Understand how your competitors are performing on Justdial</div>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-4 bg-white rounded-lg shadow-md">
                    <div class="flex-shrink-0">
                        <img src="https://akam.cdn.jdmagicbox.com/images/icontent/listingbusiness/PremiumCareSupport_f.svg" alt="Premium Customer Support" class="h-12 w-12">
                    </div>
                    <div>
                        <div class="text-lg font-semibold text-gray-800">Premium Customer Support</div>
                        <div class="text-sm text-gray-600">Guided onboarding experience with priority assistance</div>
                    </div>
                </div>
            </div>
            <div class="space-y-6">
                <div class="flex items-start space-x-4 p-4 bg-white rounded-lg shadow-md">
                    <div class="flex-shrink-0">
                        <img src="https://akam.cdn.jdmagicbox.com/images/icontent/listingbusiness/VerifiedSeal_f.svg" alt="Verified Seal" class="h-12 w-12">
                    </div>
                    <div>
                        <div class="text-lg font-semibold text-gray-800">Verified Seal</div>
                        <div class="text-sm text-gray-600">Verify your business listing on Justdial and improve your credibility</div>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-4 bg-white rounded-lg shadow-md">
                    <div class="flex-shrink-0">
                        <img src="https://akam.cdn.jdmagicbox.com/images/icontent/listingbusiness/TrustStamp_f.svg" alt="Trust Stamp" class="h-12 w-12">
                    </div>
                    <div>
                        <div class="text-lg font-semibold text-gray-800">Trust Stamp</div>
                        <div class="text-sm text-gray-600">Become eligible for a Trust Stamp that indicates your business is trustworthy</div>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-4 bg-white rounded-lg shadow-md">
                    <div class="flex-shrink-0">
                        <img src="https://akam.cdn.jdmagicbox.com/images/icontent/listingbusiness/mobile_banner.svg" alt="Mobile Banner" class="h-12 w-12">
                    </div>
                    <div>
                        <div class="text-lg font-semibold text-gray-800">Mobile Banner</div>
                        <div class="text-sm text-gray-600">Promote your business on competitor listings by targeting high-intent mobile users</div>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-4 bg-white rounded-lg shadow-md">
                    <div class="flex-shrink-0">
                        <img src="https://akam.cdn.jdmagicbox.com/images/icontent/listingbusiness/website_banner.svg" alt="Website Banner" class="h-12 w-12">
                    </div>
                    <div>
                        <div class="text-lg font-semibold text-gray-800">Website Banner</div>
                        <div class="text-sm text-gray-600">Promote your business on competitor listings by targeting high-intent website users</div>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-4 bg-white rounded-lg shadow-md">
                    <div class="flex-shrink-0">
                        <img src="https://akam.cdn.jdmagicbox.com/images/icontent/listingbusiness/business_website.svg" alt="Business Website" class="h-12 w-12">
                    </div>
                    <div>
                        <div class="text-lg font-semibold text-gray-800">Business Website</div>
                        <div class="text-sm text-gray-600">Get a professional looking website with your own domain</div>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-4 bg-white rounded-lg shadow-md">
                    <div class="flex-shrink-0">
                        <img src="https://akam.cdn.jdmagicbox.com/images/icontent/listingbusiness/Jd_rating_certificate.svg" alt="Jd Rating Certificate" class="h-12 w-12">
                    </div>
                    <div>
                        <div class="text-lg font-semibold text-gray-800">Jd Rating Certificate</div>
                        <div class="text-sm text-gray-600">Boost trust by displaying positive ratings with a fiber-framed certificate</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
