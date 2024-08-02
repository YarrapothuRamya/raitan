<div class="lg:min-w-[384px] lg:mt-0 mt-6">
          <div class="lg:w-96 bg-white rounded-lg z-10">
            <div>
              <!-- <p class="text-sm tracking-[0.1px] mb-3 mt-3 md:mt-0">Other Services</p> -->
              <div
              class="w-full p-4 bg-neutral-10 dark:bg-neutral-900 rounded-2xl border border-gray-200 dark:border-gray-700 shadow-t-md border">
              <!-- Lists --max-h-60-->
              <div
                class="w-full md:w-[360px] flex flex-col py-2 rounded-xl overflow-hidden bg-neutral-10 dark:bg-neutral-900  overflow-y-auto">
                
                @foreach($services as $service)
                <!-- lists & image -->
                <a href="<?php echo env('APP_URL'). '/' .$service->route; ?>">
                <div
                  class="min-h-[3.5rem] flex flex-row items-center gap-4 py-2 pl-4 pr-6 cursor-pointer border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
                  <div
                    class="w-14 h-14 flex items-center justify-center title-md font-bold bg-primary-600 text-white dark:bg-primary-200 dark:text-neutral-900">
                    <img src="{{ asset('service_images').'/'.$service->image }}" alt="media 2" class="w-14 h-14">
                  </div>
                  <div class="flex flex-col flex-grow">
                    <p class="tracking-[.03125em]">{{ $service->service_name }}</p>
                    <span class="text-sm tracking-[0.25px]">{{ $service->description }}</span>
                  </div>
                  <span class="text-[11px] leading-4 tracking-[.045em] font-medium"></span>
                </div></a>
                @endforeach


              </div>

            </div>
            </div>
          </div>
        </div>