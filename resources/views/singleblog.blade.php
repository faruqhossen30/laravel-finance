@extends('layouts.app')
@section('title', $blog->meta_title )
@section('content')
    <!-- Blog Article -->
    <div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-2xl">
            <h1 class="text-4xl  py-6 font-bold md:text-3xl dark:text-white">{{ $blog->title }}</h1>
            <div class="flex justify-between items-center mb-6">

                <div class="flex w-full sm:items-center gap-x-5 sm:gap-x-3">
                    <div class="flex-shrink-0">
                        <img class="size-12 rounded-full" src="{{ asset('storage/' . $blog->user->thumbnail) }}"
                            alt="{{ $blog->title }}">
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
                                        Edited by <span
                                            class="border-b border-gray-700 pb-1 ">{{ $blog->user->name }}</span>

                                    </li>
                                    <li
                                        class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                        Updated on {{ date('M d', strtotime($blog->updated_at)) }}

                                    </li>



                                    <li
                                        class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                        {{ $category->name }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-y-5 md:space-y-8">
                <div class="space-y-3 prose prose-lg prose-ul:list-disc prose-table:border-collapse">
                    {!! $blog->description !!}
                </div>

            </div>
            <div class=" flex items-center  space-x-6  pb-6 ">
                <img src="{{ asset('storage/' . $blog->user->thumbnail) }}" class="h-20 w-20 rounded-full">
                <div class="">
                    {{-- <p class="text-sm text-gray-400">Written by</p> --}}
                    <h4 class="text-lg font-bold">{{ $blog->user->name }}</h4>
                    <p class="text-xs font-bold">Senior consumer banking reporter</p>
                </div>
            </div>
            <hr class="">
            <p class="py-3">Marc Wojno is a seasoned finance editor and writer with over 20 years of experience, having
                worked with leading outlets like Kiplinger’s Personal Finance, U.S. News & World Report, and Dow Jones. He
                regularly writes on finance for BankingScoop, covering topics such as banking, credit cards, and investing.
            </p>
        </div>
    </div>


    <div class="container mx-auto space-y-5 mb-10">
        <h3 class="text-2xl font-bold">Up next</h3>
        <div class="grid grid-cols-12 gap-5">
            @foreach ($relatedBlogs as $blog)
            <a href="{{ route('single.blog', $blog->slug) }}" class="group col-span-12 md:col-span-6 lg:col-span-4 flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40"
                >
                <div class="aspect-w-16 aspect-h-11">
                    <img class="w-full object-cover rounded-xl" src="{{ asset('storage/' . $blog->thumbnail) }}"
                        alt="Image Description">
                </div>
                <div class="my-6">
                    <h3
                        class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                        {{ $blog->title }}
                    </h3>
                    <p class="mt-5 text-gray-600 dark:text-neutral-400">
                        {{ $blog->short_description }}
                    </p>
                </div>
                <div class="mt-auto flex items-center gap-x-3">
                    <img class="size-8 rounded-full" src={{ asset('storage/' . $blog->user->thumbnail) }}
                        alt="Image Description">
                    <div>
                        <h5 class="text-sm text-gray-800 dark:text-neutral-200">By{{ $blog->user->name }}</h5>
                    </div>
                </div>

            </a>
            @endforeach
        </div>
    </div>

@endsection
