@extends('layouts.app')
@section('content')
    <!-- Blog Article -->
    <div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-2xl">

            <figure>
                <img class="w-full object-cover rounded-xl" src="{{ asset('storage/' . $blog->thumbnail) }}"
                    alt="Image Description">
                <figcaption class="mt-3 text-sm text-center text-gray-500 dark:text-neutral-500">
                    {{ $blog->title }}
                </figcaption>
            </figure>
            <!-- Avatar Media -->
            <div class="flex justify-between items-center mb-6">
                <div class="flex w-full sm:items-center gap-x-5 sm:gap-x-3">
                    <div class="flex-shrink-0">
                        <img class="size-12 rounded-full" src="{{ asset('storage/' . $blog->user->thumbnail) }}"
                            alt="Image Description">
                    </div>

                    <div class="grow">
                        <div class="flex justify-between items-center gap-x-2">
                            <div>
                                <!-- Tooltip -->
                                <div class="hs-tooltip [--trigger:hover] [--placement:bottom] inline-block">
                                    <div class="hs-tooltip-toggle sm:mb-1 block text-start cursor-pointer">
                                        <span class="font-semibold text-gray-800 dark:text-neutral-200">
                                            {{ $blog->user->name }}
                                        </span>

                                    </div>
                                </div>
                                <!-- End Tooltip -->

                                <ul class="text-xs text-gray-500 dark:text-neutral-500">
                                    <li
                                        class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                        Jan 18
                                    </li>
                                    <li
                                        class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                        8 min read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Avatar Media -->

            <!-- Content -->
            <div class="space-y-5 md:space-y-8">
                <div class="space-y-3">
                    <h2 class="text-2xl font-bold md:text-3xl dark:text-white">{{ $blog->title }}</h2>

                    <p class="text-lg text-gray-800 dark:text-neutral-200">{!! $blog->description !!}</p>
                </div>

            </div>
            <!-- End Content -->
        </div>
    </div>
    <!-- End Blog Article -->





    <div class="pl-[360px] py-3">

        <p class=" block py-2 text-gray-800 font-bold">Share Now</p>

        <a href="https://www.facebook.com/sharer/sharer.php?u="
            class="px-3 py-1 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800  focus:outline-none  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-4 h-4 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                    clip-rule="evenodd" />
            </svg>
            facebook
        </a>
        <a href="https://twitter.com/intent/tweet?url="
            class="px-3  py-1  space-x-2 text-xs font-medium text-center inline-flex items-center text-white bg-[#1DA1F2] rounded-lg hover:bg-blue-800  focus:outline-none  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-4 h-4 text-white   mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M22 5.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.343 8.343 0 0 1-2.605.981A4.13 4.13 0 0 0 15.85 4a4.068 4.068 0 0 0-4.1 4.038c0 .31.035.618.105.919A11.705 11.705 0 0 1 3.4 4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 6.1 13.635a4.192 4.192 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 2 18.184 11.732 11.732 0 0 0 8.291 20 11.502 11.502 0 0 0 19.964 8.5c0-.177 0-.349-.012-.523A8.143 8.143 0 0 0 22 5.892Z"
                    clip-rule="evenodd" />
            </svg>
            twitter
        </a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url="
            class="px-3  py-1  space-x-2 text-xs font-medium text-center inline-flex items-center text-white bg-[#E4405F] rounded-lg hover:bg-blue-800  focus:outline-none  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-4 h-4 text-white mr-1 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="none" viewBox="0 0 24 24">
                <path fill="currentColor" fill-rule="evenodd"
                    d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                    clip-rule="evenodd" />
            </svg>
            instagram
        </a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url="
            class="px-3  py-1  space-x-2 text-xs font-medium text-center inline-flex items-center text-white bg-[#0A66C2] rounded-lg hover:bg-blue-800  focus:outline-none  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-4 h-4 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z"
                    clip-rule="evenodd" />
                <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
            </svg>
            linkedin
        </a>
        <a href="https://api.whatsapp.com/send?text="
            class="px-3  py-1  space-x-2 text-xs font-medium text-center inline-flex items-center text-white bg-green-400 rounded-lg hover:bg-blue-800  focus:outline-none  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path
                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
            </svg>
            <span class="ml-2">Whatsup</span>
        </a>
    </div>
    <!-- Button -->
    </div>


    <!-- End Content -->
    <!-- Button -->
    </div>
    </div>
    </div>
    <!-- End Sticky Share Group -->
@endsection
