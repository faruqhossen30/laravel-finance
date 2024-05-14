@extends('layouts.app')
@section('content')


    <!-- Hero -->
    <section class="bg-[#00143d] pb-64">
        <div class="container mx-auto text-center">

            <div class="p-16 py-20 mx-auto">
                <h1 class="font-semibold text-white text-5xl md:text-5xl">
                    <span class="text-[#ff0] "> Guiding you</span> through life’s financial journey
                </h1>
                <div class="max-w-4xl ">
                    <p class="mt-5 text-neutral-400 text-lg  text-right">
                        Compare rates, crunch numbers and get expert guidance for life’s biggest financial moments.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <section class="container mx-auto px-3 lg:px-0 -mt-56">
        <div class="grid grid-cols-12 gap-5">
            @foreach ($categories as $category)
                <div class="col-span-6 md:col-span-4 lg:col-span-3 border flex flex-col items-center py-10 shadow-lg bg-white rounded-lg">
                    <img src="{{ asset('storage/' . $category->thumbnail) }}" class="h-16 W-16 p-2"
                    alt="thumbnail">
                    <h3 class="text-sm sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                        {{$category->name}}
                    </h3>
                </div>
            @endforeach
        </div>
    </section>
    @include('inc.homepage.blog')
    <!-- Approach -->
    <div class="bg-[#00143d]">
        <!-- Approach -->
        <div class="max-w-5xl px-4 xl:px-0 py-10 lg:pt-20 lg:pb-20 mx-auto">
            <!-- Title -->
            <div class="max-w-3xl mb-10 lg:mb-14">
                <h2 class="text-white font-semibold text-2xl md:text-4xl md:leading-tight">Our approach</h2>
                <p class="mt-1 text-neutral-400">This profound insight guides our comprehensive strategy — from meticulous
                    research and strategic planning to the seamless execution of brand development and website or product
                    deployment.</p>
            </div>
            <!-- End Title -->

            <!-- Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 lg:items-center">
                <div class="aspect-w-16 aspect-h-9 lg:aspect-none">
                    <img class="w-full object-cover rounded-xl"
                        src="https://images.unsplash.com/photo-1587614203976-365c74645e83?q=80&w=480&h=600&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Image Description">
                </div>
                <!-- End Col -->

                <!-- Timeline -->
                <div>
                    <!-- Heading -->
                    <div class="mb-4">
                        <h3 class="text-[#ff0] text-xs font-medium uppercase">
                            Steps
                        </h3>
                    </div>
                    <!-- End Heading -->


                    <!-- Item -->
                    @foreach ($approches as $key=> $approch)

                    <div class="flex gap-x-5 ms-1">
                        <!-- Icon -->
                        <div
                            class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-neutral-800">
                            <div class="relative z-10 size-8 flex justify-center items-center">
                                <span
                                    class="flex flex-shrink-0 justify-center items-center size-8 border border-neutral-800 text-[#ff0] font-semibold text-xs uppercase rounded-full">
                                   {{$key+1}}
                                </span>
                            </div>
                        </div>
                        <!-- End Icon -->

                        <!-- Right Content -->
                        <div class="grow pt-0.5 pb-8 sm:pb-12">
                            <p class="text-sm lg:text-base text-neutral-400">
                                <span class="text-white">{{$approch->title}} :</span>
                             {!! $approch->description!!}
                            </p>
                        </div>
                        <!-- End Right Content -->
                    </div>
                    @endforeach
                    <!-- End Item -->


                    <a class="group inline-flex items-center gap-x-2 py-2 px-3 bg-[#ff0] font-medium text-sm text-neutral-800 rounded-full focus:outline-none"
                        href="#">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                            <path
                                class="opacity-0 group-hover:opacity-100 group-focus:opacity-100 group-hover:delay-100 transition"
                                d="M14.05 2a9 9 0 0 1 8 7.94"></path>
                            <path class="opacity-0 group-hover:opacity-100 group-focus:opacity-100 transition"
                                d="M14.05 6A5 5 0 0 1 18 10"></path>
                        </svg>
                        Schedule a call
                    </a>
                </div>
                <!-- End Timeline -->
            </div>
            <!-- End Grid -->
        </div>
    </div>
    <!-- End Approach -->

    <!-- Features -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="relative p-6 md:p-16">
            <!-- Grid -->
            <div class="relative z-10 lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
                <div class="mb-10 lg:mb-0 lg:col-span-6 lg:col-start-8 lg:order-2">
                    <h2 class="text-2xl text-gray-800 font-bold sm:text-3xl dark:text-neutral-200">
                        Fully customizable rules to match your unique needs
                    </h2>

                    <!-- Tab Navs -->
                    <nav class="grid gap-4 mt-5 md:mt-10" aria-label="Tabs" role="tablist">
                        <button type="button"
                            class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-neutral-700 dark:hover:bg-neutral-700 active"
                            id="tabs-with-card-item-1" data-hs-tab="#tabs-with-card-1" aria-controls="tabs-with-card-1"
                            role="tab">
                            <span class="flex">
                                <svg class="flex-shrink-0 mt-2 size-6 md:size-7 hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M5 5.5A3.5 3.5 0 0 1 8.5 2H12v7H8.5A3.5 3.5 0 0 1 5 5.5z" />
                                    <path d="M12 2h3.5a3.5 3.5 0 1 1 0 7H12V2z" />
                                    <path d="M12 12.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 1 1-7 0z" />
                                    <path d="M5 19.5A3.5 3.5 0 0 1 8.5 16H12v3.5a3.5 3.5 0 1 1-7 0z" />
                                    <path d="M5 12.5A3.5 3.5 0 0 1 8.5 9H12v7H8.5A3.5 3.5 0 0 1 5 12.5z" />
                                </svg>
                                <span class="grow ms-6">
                                    <span
                                        class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200">Advanced
                                        tools</span>
                                    <span
                                        class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-neutral-200">Use
                                        Preline thoroughly thought and automated libraries to manage your businesses.</span>
                                </span>
                            </span>
                        </button>

                        <button type="button"
                            class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-neutral-700 dark:hover:bg-neutral-700"
                            id="tabs-with-card-item-2" data-hs-tab="#tabs-with-card-2" aria-controls="tabs-with-card-2"
                            role="tab">
                            <span class="flex">
                                <svg class="flex-shrink-0 mt-2 size-6 md:size-7 hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m12 14 4-4" />
                                    <path d="M3.34 19a10 10 0 1 1 17.32 0" />
                                </svg>
                                <span class="grow ms-6">
                                    <span
                                        class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200">Smart
                                        dashboards</span>
                                    <span
                                        class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-neutral-200">Quickly
                                        Preline sample components, copy-paste codes, and start right off.</span>
                                </span>
                            </span>
                        </button>

                        <button type="button"
                            class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-neutral-700 dark:hover:bg-neutral-700"
                            id="tabs-with-card-item-3" data-hs-tab="#tabs-with-card-3" aria-controls="tabs-with-card-3"
                            role="tab">
                            <span class="flex">
                                <svg class="flex-shrink-0 mt-2 size-6 md:size-7 hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z" />
                                    <path d="M5 3v4" />
                                    <path d="M19 17v4" />
                                    <path d="M3 5h4" />
                                    <path d="M17 19h4" />
                                </svg>
                                <span class="grow ms-6">
                                    <span
                                        class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200">Powerful
                                        features</span>
                                    <span
                                        class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-neutral-200">Reduce
                                        time and effort on building modern look design with Preline only.</span>
                                </span>
                            </span>
                        </button>
                    </nav>
                    <!-- End Tab Navs -->
                </div>
                <!-- End Col -->

                <div class="lg:col-span-6">
                    <div class="relative">
                        <!-- Tab Content -->
                        <div>
                            <div id="tabs-with-card-1" role="tabpanel" aria-labelledby="tabs-with-card-item-1">
                                <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/20"
                                    src="https://images.unsplash.com/photo-1605629921711-2f6b00c6bbf4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&h=1220&q=80"
                                    alt="Image Description">
                            </div>

                            <div id="tabs-with-card-2" class="hidden" role="tabpanel"
                                aria-labelledby="tabs-with-card-item-2">
                                <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/20"
                                    src="https://images.unsplash.com/photo-1665686306574-1ace09918530?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&h=1220&q=80"
                                    alt="Image Description">
                            </div>

                            <div id="tabs-with-card-3" class="hidden" role="tabpanel"
                                aria-labelledby="tabs-with-card-item-3">
                                <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/20"
                                    src="https://images.unsplash.com/photo-1598929213452-52d72f63e307?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&h=1220&q=80"
                                    alt="Image Description">
                            </div>
                        </div>
                        <!-- End Tab Content -->

                        <!-- SVG Element -->
                        <div class="hidden absolute top-0 end-0 translate-x-20 md:block lg:translate-x-20">
                            <svg class="w-16 h-auto text-orange-500" width="121" height="135" viewBox="0 0 121 135"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164" stroke="currentColor"
                                    stroke-width="10" stroke-linecap="round" />
                                <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5" stroke="currentColor"
                                    stroke-width="10" stroke-linecap="round" />
                                <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874" stroke="currentColor"
                                    stroke-width="10" stroke-linecap="round" />
                            </svg>
                        </div>
                        <!-- End SVG Element -->
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->

            <!-- Background Color -->
            <div class="absolute inset-0 grid grid-cols-12 size-full">
                <div
                    class="col-span-full lg:col-span-7 lg:col-start-6 bg-gray-100 w-full h-5/6 rounded-xl sm:h-3/4 lg:h-full dark:bg-neutral-800">
                </div>
            </div>
            <!-- End Background Color -->
        </div>
    </div>
    <!-- End Features -->
    @include('inc.homepage.clients')
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="{{ asset('plugin/Sortable.min.js') }}"></script>
@endpush
