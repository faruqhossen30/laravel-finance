@extends('layouts.app')
@section('content')
    <!-- Blog Article -->
    <div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-2xl">
            <h2 class="text-2xl  py-6 font-bold md:text-3xl dark:text-white">{{ $blog->title }}</h2>
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
                                        {{ date('M d', strtotime($blog->created_at)) }}

                                    </li>
                                    <li
                                        class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                        {{ $blog->created_at->diffForHumans() }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-y-5 md:space-y-8">
                <div class="space-y-3">
                    <p class="text-lg text-gray-800 dark:text-neutral-200">{!! $blog->description !!}</p>
                </div>

            </div>
            <div class=" flex items-center  space-x-6  pb-6 ">
                <img src="{{ asset('storage/' . $blog->user->thumbnail) }}" class="h-20 w-20 rounded-full">
                <div class="">
                    <p class="text-sm text-gray-400">Written by</p>
                    <h4 class="text-lg font-bold">{{ $blog->user->name }}</h4>
                    <p class="text-xs font-bold">Senior consumer banking reporter</p>
                </div>
            </div>
            <hr class="">
            <p class="py-3">Karen Bennett is a senior consumer banking reporter at Bankrate. She uses her finance writing
                background to help readers learn more about savings and checking accounts, CDs, and other financial matters.
            </p>
        </div>
    </div>


    <div class="px-24">
        <h3 class="text-2xl font-bold">Up next</h3>

        <p class=" py-6">Part of
            <span class="font-bold"> Introduction to Savings Accounts</span>
        </p>
{{--
        <div class="grid grid-cols-12 gap-6 pb-10">


            <div class="col-span-4">
                @foreach ($relatedBlogs as $blog)
                    <!-- Card -->
                    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg transition duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40 dark:focus:border-transparent dark:focus:shadow-black/40"
                        href="#">
                        <div class="aspect-w-16 aspect-h-11">
                            <img class="w-full object-cover rounded-xl"
                                src="https://images.unsplash.com/photo-1633114128174-2f8aa49759b0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80"
                                alt="Blog Image">
                        </div>
                        <div class="my-6">
                            <h3
                                class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                                {{ $blog->title }}
                            </h3>
                            <p class="mt-5 text-gray-600 dark:text-neutral-400">
                                {!! \Illuminate\Support\Str::limit($blog->description, 100) !!} <!-- limits to 100 words -->
                            </p>

                        </div>
                        <div class="mt-auto flex items-center gap-x-3">
                            <img class="size-8 rounded-full" src={{ asset('storage/' . $blog->user->thumbnail) }}
                                alt="Avatar">
                            <div>
                                <h5 class="text-sm text-gray-800 dark:text-neutral-200">By {{ $blog->user->name }}</h5>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->
                @endforeach
            </div>
        </div> --}}


        <div class="grid grid-cols-12">
            <div class="col-span-4">
                @foreach ($relatedBlogs as $blog)
                <!-- Card -->
                <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40"
                    href="{{route('single.blog',$blog->slug)}}">
                    <div class="aspect-w-16 aspect-h-11">
                        <img class="w-full object-cover rounded-xl"
                            src="{{asset('storage/' .$blog->thumbnail)}}"
                            alt="Image Description">
                    </div>
                    <div class="my-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                            {{$blog->title}}
                        </h3>
                        <p class="mt-5 text-gray-600 dark:text-neutral-400">
                           {{$blog->short_description}}
                        </p>
                    </div>
                    <div class="mt-auto flex items-center gap-x-3">
                        <img class="size-8 rounded-full"
                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                            alt="Image Description">
                        <div>
                            <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Lauren Waller</h5>
                        </div>
                    </div>
                </a>
                <!-- End Card -->
            @endforeach

            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- End Sticky Share Group -->
@endsection
