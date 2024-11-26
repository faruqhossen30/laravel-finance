
<section class="bg-gray-100">
    <!-- Card Blog -->
    <div class="container mx-auto px-3 lg:px-0 bg-gray-100">
        <!-- Title -->
        <div class="mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-[24px] font-bold md:text-4xl md:leading-tight dark:text-white  py-3 md:py-12">Financial Resources</h2>
            <p class=" text-gray-600 text-xl text-justify dark:text-neutral-400 ">Stay up-to-date with the latest insights from the experts. We cover all the latest information and expert opinions from financial professionals.</p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="grid grid-cols-12 gap-3 sm:gap-6">
            <!-- Card -->
            @foreach ($blogs as $blog)
                <a class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-4 group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40"
                    href="{{route('single.blog',$blog->slug)}}">

                    <div class="my-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                            {{ $blog->title }}
                        </h3>
                        <p class="mt-5 text-gray-600 dark:text-neutral-400">
                            {{ Str::words($blog->short_description, 15, '...') }}
                        </p>
                    </div>
                    {{-- <div class="pb-2">
                        <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">Badge</span>

                    </div> --}}
                    <div class="mt-auto flex items-center gap-x-3">
                        <img class="size-8 rounded-full"
                            src="{{asset('storage/' . $blog->user->thumbnail)}}"
                            alt="Image Description">

                        <div>
                            <h5 class="text-sm text-gray-800 dark:text-neutral-200">{{$blog->user->name}}</h5>
                        </div>
                    </div>
                </a>
            @endforeach
            <!-- End Card -->

        </div>
        <!-- End Grid -->

        <!-- Card -->
        <div class=" text-center py-12">
            <a class="py-4 px-4 inline-flex items-center gap-x-1 text-sm font-medium rounded-full border border-gray-200 bg-white text-blue-600 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-blue-500 dark:hover:bg-neutral-800"
                href="{{route('blogpage')}}">
                Read more
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                </svg>
            </a>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Blog -->
</section>
