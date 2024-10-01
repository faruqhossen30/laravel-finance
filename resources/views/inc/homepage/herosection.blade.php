
<section class="relative  bg-gray-100 pb-20 " >

    <img class="hidden lg:block lg:absolute top-0 left-0 mt-32" src="zeus-assets/icons/dots/yellow-dot-left-bars.svg" alt="">
    <img class="hidden lg:block lg:absolute bottom-0 right-0 mt-20" src="zeus-assets/icons/dots/red-dot-right-shield.svg" alt="">
    <div class="relative container pt-12 px-4 mb-20 mx-auto text-center">

      <h2 class="mt-8 mb-8 lg:mb-12 text-slate-800 text-4xl lg:text-6xl font-semibold font-heading">Take care of your performance every day.</h2>
      <p class="max-w-3xl mx-auto mb-8 lg:mb-12 text-slate-800 text-xl opacity-50">Build a well-presented brand that everyone will love. Take care to develop resources continually and integrity them with previous projects.</p>
      <a class="relative z-10 inline-block w-full md:w-auto mb-2 md:mb-0 px-8 py-4 mr-4 text-sm font-medium leading-normal bg-red-400 hover:bg-red-300 text-white rounded transition duration-200" href="#">Try for free</a>
    </div>
    <div class="max-w-6xl px-4 mx-auto">
      <div class="flex flex-wrap -mx-4">

        @foreach ($categories as $category)
        <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0">
          <div class="p-8 border border-blue-800 rounded-lg">
            <span class="flex items-center justify-center mb-12 w-16 h-16 rounded-full bg-[#73EC8B]">
                {{-- <img src="{{ asset('storage/' . $category->thumbnail) }}" class="h-16 W-16 p-2" alt="thumbnail"> --}}
                <img class="size-16 rounded-full"
                src="{{ asset('storage/' . $category->thumbnail) }}"
                alt="Image Description">
            </span>
            <h3 class="mb-6 text-2xl text-slate-800 font-semibold font-heading">{{$category->name}}</h3>
            <p class="mb-8 text-gray-500">We made sure you get feedback the same day.</p>
          </div>
        </div>
        @endforeach

      </div>
    </div>
    <div :class="{ 'block': mobileNavOpen, 'hidden': !mobileNavOpen }" class="hidden fixed top-0 left-0 bottom-0 w-5/6 max-w-sm z-50">
      <div x-on:click="mobileNavOpen = !mobileNavOpen" class="fixed inset-0 bg-gray-800 opacity-25"></div>
      <nav class="relative flex flex-col py-6 px-6 w-full h-full bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
          <a class="mr-auto text-lg font-semibold leading-none" href="#">
            <img class="h-7" src="zeus-assets/logo/logo-zeus-red.svg" alt="" width="auto">
          </a>
          <button x-on:click="mobileNavOpen = !mobileNavOpen">
            <svg class="h-6 w-6 text-gray-500 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
        <div>
          <ul>
            <li class="mb-1"><a class="block p-4 text-sm font-medium text-gray-900 hover:bg-gray-50 rounded" href="#">About</a></li>
            <li class="mb-1"><a class="block p-4 text-sm font-medium text-gray-900 hover:bg-gray-50 rounded" href="#">Company</a></li>
            <li class="mb-1"><a class="block p-4 text-sm font-medium text-gray-900 hover:bg-gray-50 rounded" href="#">Services</a></li>
            <li class="mb-1"><a class="block p-4 text-sm font-medium text-gray-900 hover:bg-gray-50 rounded" href="#">Testimonials</a></li>
          </ul>
        </div>
        <div class="mt-auto">
          <div class="pt-6"><a class="block py-3 text-center text-sm leading-normal rounded bg-red-50 hover:bg-red-200 text-red-500 font-semibold transition duration-200" href="#">Contact Us</a></div>
          <p class="mt-6 mb-4 text-sm text-center text-gray-500">
            <span>© 2021 All rights reserved.</span>
          </p>
        </div>
      </nav>
    </div>
  </section>
