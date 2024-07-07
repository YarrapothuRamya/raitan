@extends('layouts.app')
<script src="https://cdn.tailwindcss.com"></script>
@section('content')


<section class="mt-2" style="justify-content: center;">
    <div class="grid min-h-full place-items-center bg-white px-6 mb-5 sm:py-32 lg:px-8">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">

                <div class="mb-5 flex items-center justify-center gap-x-6">
                    <a href="#about-us" class="rounded-md action-btn px-3.5 py-2.5 text-sm font-semibold shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">ABOUT US <span aria-hidden="true">&rarr;</span></a>

                    <a href="#who-we-are" class="rounded-md action-btn px-3.5 py-2.5 text-sm font-semibold shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">WHO WE ARE <span aria-hidden="true">&rarr;</span></a>

                    <a href="#what-we-offer" class="rounded-md action-btn px-3.5 py-2.5 text-sm font-semibold shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">WHAT WE OFFER <span aria-hidden="true">&rarr;</span></a>

                    <a href="#our-vision" class="rounded-md action-btn px-3.5 py-2.5 text-sm font-semibold shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">OUR VISION <span aria-hidden="true">&rarr;</span></a>

                    <a href="#why-choose-raitan" class="rounded-md action-btn px-3.5 py-2.5 text-sm font-semibold shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">WHY CHOOSE RAITAN <span aria-hidden="true">&rarr;</span></a>

                    <a href="#join-us" class="rounded-md action-btn px-3.5 py-2.5 text-sm font-semibold shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">JOIN US <span aria-hidden="true">&rarr;</span></a>
                </div>

                <div id="about-us" class="mx-auto mb-[60px] text-center lg:mb-5">
                    <span class="block mb-2 text-lg font-semibold text-primary">ABOUT US</span>
                    <p class="text-base text-body-color dark:text-dark-6">
                        Welcome to RAITHAN, your trusted partner in transforming the farming experience. Our mission is to empower farmers with immediate access to essential services, ensuring they can optimize their operations and achieve greater productivity.
                    </p><br>
                    <p class="text-base text-body-color dark:text-dark-6">
                        It is a nonprofit entity, registered under section 8 company to serve farmers across the world.
                    </p><br>
                </div>

                <div id="who-we-are" class="mx-auto mb-[60px] text-center lg:mb-5">
                    <span class="block mb-2 text-lg font-semibold text-primary">WHO WE ARE</span>
                    <p class="text-base text-body-color dark:text-dark-6">
                        At RAITHAN, we understand the unique challenges faced by farmers today. From the unpredictability of weather to the labor-intensive nature of farming, we know that having the right resources at the right time can make all the difference. That’s why we’ve created a GIG platform that connects farmers with the tools and labor they need, precisely when they need them.
                    </p><br>
                </div>

                <div id="what-we-offer" class="mx-auto mb-[60px] text-center lg:mb-5">
                    <span class="block mb-2 text-lg font-semibold text-primary">WHAT WE OFFER</span>
                    <p class="text-base text-body-color dark:text-dark-6">
                        Instant Access to Services: Our platform provides farmers with quick and easy access to a variety of services, including:
                    </p><br>
                    <p class="text-base text-body-color dark:text-dark-6">
                        <ul style="list-style-type: circle;">
                            <li>Tractors and Implements: Rent high-quality tractors and implement with just a few clicks. Whether you need a plow, harrow, seeder, or any other equipment, we’ve got you covered.</li>
                            <li>Agricultural Labor: Find skilled labor for planting, harvesting, and other farm tasks. Our network of workers is ready to assist you with all your farming needs.</li>
                            <li>Harvesters: Highly technology-enabled harvesters to prevent unnecessary waste.</li>
                            <li>Technology-enabled tools: Such as Drones as sprayers, Agri-waste binders, fruit cutters with cutting-edge technologies</li>
                            <li>Servicemen: For electric pump sets, Diesel pump sets, Solar Pump Sets, Tractors</li>
                        </ul><br>
                    </p>
                </div>

                <div id="our-vision" class="mx-auto mb-[60px] text-center lg:mb-5">
                    <span class="block mb-2 text-lg font-semibold text-primary">OUR VISION</span>
                    <p class="text-base text-body-color dark:text-dark-6">
                        We envision a world where every farmer, regardless of location, has access to the resources they need to thrive. By leveraging technology and fostering a community of skilled workers, we aim to eliminate barriers and create a more efficient and productive agricultural sector.
                    </p><br>
                </div>

                <div id="why-choose-raitan" class="mx-auto mb-[60px] text-center lg:mb-5">
                    <span class="block mb-2 text-lg font-semibold text-primary">WHY CHOOSE RAITAN?</span>
                    <p class="text-base text-body-color dark:text-dark-6">
                        Efficiency: Save time and resources by accessing services instantly.<br>
                        Quality: Benefit from reliable equipment and skilled labor.<br>
                        Flexibility: Choose services based on your specific needs and schedule.<br>
                        Support: Our dedicated customer support team is always here to help you.
                    </p><br>
                </div>

                <div id="join-us" class="mx-auto mb-[60px] text-center lg:mb-5">
                    <span class="block mb-2 text-lg font-semibold text-primary">JOIN US</span>
                    <p class="text-base text-body-color dark:text-dark-6">
                        Join the RAITHAN community today and experience the future of farming. Whether you're a farmer looking for support or a service provider ready to contribute your skills, we welcome you to be a part of our journey.
                    </p><br>
                </div>

            </div>
        </div>
    </div>
</section>



@endsection