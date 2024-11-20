@extends('layouts.app')
@section('content')
    <!-- Card Blog -->
    <form action="" method="GET">
        <div class="max-w-[85rem] px-4  sm:px-6 lg:px-8 lg:py-6 mx-auto">
            <!-- Title -->
            <div class="container mx-auto text-center ">
                <ol class="flex items-center whitespace-nowrap">
                    <li class="inline-flex items-center">
                        <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                            href="#">
                            Home
                        </a>
                        <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </li>
                    <li class="inline-flex items-center">
                        <span class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                            href="">
                            Blogs
                            <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                        </span>
                    </li>

                </ol>
            </div>
            <!-- End Title -->
            <div class=" bg-white flex justify-between  ">
                <div class=" py-6 flex  space-x-2">
                    <select name="category" onchange="this.form.submit()"
                    class="py-1 px-4 pe-9 block w-full border-gray-200 rounded-lg text-xs focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                    <option value="">Sort by:</option>

                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                </div>
                <div class=" flex space-x-2 py-3 items-center ">
                    <div class="">
                        <select name="per_page" onchange="this.form.submit()"
                            class="py-1 px-4 pe-9 block w-full border-gray-200 rounded-lg text-xs focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                            <option value="">Show:</option>
                            <option value="10" @if (isset($_GET['per_page']) && $_GET['per_page'] == '10') selected @endif>10
                            </option>
                            <option value="20" @if (isset($_GET['per_page']) && $_GET['per_page'] == '20') selected @endif>20
                            </option>
                            <option value="30" @if (isset($_GET['per_page']) && $_GET['per_page'] == '30') selected @endif>30
                            </option>
                        </select>
                    </div>
                    <div class="">
                        <select name="orderby" onchange="this.form.submit()"
                            class="py-1 px-4 pe-9 block w-full border-gray-200 rounded-lg text-xs focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                            <option value="">Sort by:</option>
                            <option value="asc">Latest</option>
                            <option value="desc">Oldest</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">


                @foreach ($blogs as $blog)
                    <!-- Card -->
                    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40"
                        href="{{ route('single.blog', $blog->slug) }}">
                        <div class="aspect-w-16 aspect-h-11">
                            <img class="w-full object-cover rounded-xl" src="{{ asset('storage/' . $blog->thumbnail) }}" alt="Image Description">
                        </div>
                        <div class="my-6">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                                {{ $blog->title }}
                            </h3>
                            <p class="mt-5 text-gray-600 dark:text-neutral-400">
                                {{ $blog->short_description }}
                            </p>
                        </div>
                        <div class="mt-auto flex items-center gap-x-3">
                            <img
                                class="size-8 rounded-full"
                                src="{{ $blog->user->thumbnail ? asset('storage/' . $blog->user->thumbnail) : 'no image'}}"
                                alt="Image Description">
                            <div>
                                <h5 class="text-sm text-gray-800 dark:text-neutral-200">
                                    {{$blog->user->name}}
                                </h5>
                            </div>
                        </div>

                    </a>
                    <!-- End Card -->
                @endforeach


            </div>
            <!-- End Grid -->

            <!-- Card -->
            <div class="mt-12 text-center">
                {{ $blogs->links() }}
            </div>
            <!-- End Card -->
        </div>
        <!-- End Card Blog -->

    </form>
@endsection
