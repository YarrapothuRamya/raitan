@extends('layouts.app')
<script src="https://cdn.tailwindcss.com"></script>
<style>
   .rotate-180 {
  transform: rotate(180deg);
  transition: transform 0.3s;
}
</style>
@section('content')

<nav class="bg-grey-light w-full rounded-md" style="margin-top: 5rem; margin-left: 5rem; position: absolute;">
  <ol class="list-reset flex">
    <li>
      <a
        href="#"
        class="text-primary transition duration-150 ease-in-out hover:text-primary-accent-300 focus:text-primary-accent-300 active:text-primary-accent-300 motion-reduce:transition-none dark:text-primary-400"
        >Home</a
      >
    </li>
    <li>
      <span class="mx-2 text-neutral-400">></span>
    </li>
    
    <li class="text-neutral-400">Faq's</li>
  </ol>
</nav>

<!-- ====== FAQ Section Start -->
<section
   x-data="
   {
   openFaq1: false, 
   openFaq2: false, 
   openFaq3: false, 
   openFaq4: false, 
   openFaq5: false, 
   openFaq6: false
   }
   "
   class="relative  overflow-hidden bg-white dark:bg-dark pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]"
   >
   <div class="container mx-auto">
      <div class="flex flex-wrap -mx-4">
         <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[520px] text-center lg:mb-20">
               <span class="block mb-2 text-lg font-semibold text-primary">
               FAQ
               </span>
               <h2
                  class="text-dark dark:text-white mb-4 text-3xl font-bold sm:text-[40px]/[48px]"
                  >
                  Any Questions? Look Here
               </h2>
               <p class="text-base text-body-color dark:text-dark-6">
                  There are many variations of passages of Lorem Ipsum available
                  but the majority have suffered alteration in some form.
               </p>
            </div>
         </div>
      </div>
      <div class="flex flex-wrap -mx-4">
         <div class="w-full px-4 lg:w-1/2">
            <div
               class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
               >
               <button
                  class="flex w-full text-left faq-btn"
                  onclick="toggleFaq('faq1')"
                  >
                  <div
                     class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                     >
                     <svg id="icon-faq1" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z" fill="currentColor"/>
          </svg>
                  </div>
                  <div class="w-full">
                     <h4
                        class="mt-1 text-lg font-semibold text-dark dark:text-white"
                        >
                        How long we deliver your first blog post?
                     </h4>
                  </div>
               </button>
               <div id="content-faq1" class="faq-content pl-[62px]">
                  <p
                     class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                     >
                     It takes 2-3 weeks to get your first blog post ready. That
                     includes the in-depth research & creation of your monthly
                     content marketing strategy that we do before writing your
                     first blog post, Ipsum available .
                  </p>
               </div>
            </div>
           
            <div
               class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
               >
               <button
                  class="flex w-full text-left faq-btn"
                  onclick="toggleFaq('faq2')"
                  >
                  <div
                     class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                     >
                     <svg id="icon-faq2" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z" fill="currentColor"/>
          </svg>
                  </div>
                  <div class="w-full">
                     <h4
                        class="mt-1 text-lg font-semibold text-dark dark:text-white"
                        >
                        How long we deliver your first blog post?
                     </h4>
                  </div>
               </button>
               <div id="content-faq2" class="faq-content pl-[62px]">
                  <p
                     class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                     >
                     It takes 2-3 weeks to get your first blog post ready. That
                     includes the in-depth research & creation of your monthly
                     content marketing strategy that we do before writing your
                     first blog post, Ipsum available .
                  </p>
               </div>
            </div>
            <div
               class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
               >
               <button
                  class="flex w-full text-left faq-btn"
                  onclick="toggleFaq('faq3')"
                  >
                  <div
                     class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                     >
                     <svg id="icon-faq3" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z" fill="currentColor"/>
          </svg>
                  </div>
                  <div class="w-full">
                     <h4
                        class="mt-1 text-lg font-semibold text-dark dark:text-white"
                        >
                        How long we deliver your first blog post?
                     </h4>
                  </div>
               </button>
               <div id="content-faq3" class="faq-content pl-[62px]">
                  <p
                     class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                     >
                     It takes 2-3 weeks to get your first blog post ready. That
                     includes the in-depth research & creation of your monthly
                     content marketing strategy that we do before writing your
                     first blog post, Ipsum available .
                  </p>
               </div>
            </div>
         </div>
         <div class="w-full px-4 lg:w-1/2">
         <div
               class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
               >
               <button
                  class="flex w-full text-left faq-btn"
                  onclick="toggleFaq('faq4')"
                  >
                  <div
                     class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                     >
                     <svg id="icon-faq4" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z" fill="currentColor"/>
          </svg>
                  </div>
                  <div class="w-full">
                     <h4
                        class="mt-1 text-lg font-semibold text-dark dark:text-white"
                        >
                        How long we deliver your first blog post?
                     </h4>
                  </div>
               </button>
               <div id="content-faq4" class="faq-content pl-[62px]">
                  <p
                     class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                     >
                     It takes 2-3 weeks to get your first blog post ready. That
                     includes the in-depth research & creation of your monthly
                     content marketing strategy that we do before writing your
                     first blog post, Ipsum available .
                  </p>
               </div>
            </div>
            <div
               class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
               >
               <button
                  class="flex w-full text-left faq-btn"
                  onclick="toggleFaq('faq5')"
                  >
                  <div
                     class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                     >
                     <svg id="icon-faq5" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z" fill="currentColor"/>
          </svg>
                  </div>
                  <div class="w-full">
                     <h4
                        class="mt-1 text-lg font-semibold text-dark dark:text-white"
                        >
                        How long we deliver your first blog post?
                     </h4>
                  </div>
               </button>
               <div id="content-faq5" class="faq-content pl-[62px]">
                  <p
                     class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                     >
                     It takes 2-3 weeks to get your first blog post ready. That
                     includes the in-depth research & creation of your monthly
                     content marketing strategy that we do before writing your
                     first blog post, Ipsum available .
                  </p>
               </div>
            </div>
            <div
               class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
               >
               <button
                  class="flex w-full text-left faq-btn"
                  onclick="toggleFaq('faq6')"
                  >
                  <div
                     class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                     >
                     <svg id="icon-faq6" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z" fill="currentColor"/>
          </svg>
                  </div>
                  <div class="w-full">
                     <h4
                        class="mt-1 text-lg font-semibold text-dark dark:text-white"
                        >
                        How long we deliver your first blog post?
                     </h4>
                  </div>
               </button>
               <div id="content-faq6" class="faq-content pl-[62px]">
                  <p
                     class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                     >
                     It takes 2-3 weeks to get your first blog post ready. That
                     includes the in-depth research & creation of your monthly
                     content marketing strategy that we do before writing your
                     first blog post, Ipsum available .
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="absolute bottom-0 right-0 z-[-1]">
      <svg
         width="1440"
         height="886"
         viewBox="0 0 1440 886"
         fill="none"
         xmlns="http://www.w3.org/2000/svg"
         >
         <path
            opacity="0.5"
            d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z"
            fill="url(#paint0_linear)"
            />
         <defs>
            <linearGradient
               id="paint0_linear"
               x1="1308.65"
               y1="1142.58"
               x2="602.827"
               y2="-418.681"
               gradientUnits="userSpaceOnUse"
               >
               <stop stop-color="#3056D3" stop-opacity="0.36" />
               <stop offset="1" stop-color="#F5F2FD" stop-opacity="0" />
               <stop offset="1" stop-color="#F5F2FD" stop-opacity="0.096144" />
            </linearGradient>
         </defs>
      </svg>
   </div>
   <div class="lg:text-[250px] varien absolute top-8 left-24 text-[#50b500]/5  z-0    ">
            Raitan
        </div>
</section>
<!-- ====== FAQ Section End -->
<script>
  function toggleFaq(faqId) {
    const content = document.getElementById(`content-${faqId}`);
    const icon = document.getElementById(`icon-${faqId}`);

    if (content.style.display === "none") {
      content.style.display = "block";
      icon.classList.add("rotate-180");
    } else {
      content.style.display = "none";
      icon.classList.remove("rotate-180");
    }
  }
</script>

@endsection