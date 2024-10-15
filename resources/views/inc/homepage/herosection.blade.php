
<section class="relative  bg-gray-100 pb-20 min-h-screen " >

    <img class="hidden lg:block lg:absolute top-0 left-0 mt-32" src="zeus-assets/icons/dots/yellow-dot-left-bars.svg" alt="">
    <img class="hidden lg:block lg:absolute bottom-0 right-0 mt-20" src="zeus-assets/icons/dots/red-dot-right-shield.svg" alt="">
    <div class="relative container pt-12 px-4 mb-20 mx-auto text-center">

      <h2 class="my-7 lg:mb-10 text-slate-800 text-4xl lg:text-6xl font-semibold font-heading">Take care of your performance every day.</h2>
      <p class="max-w-3xl mx-auto mb-8 lg:mb-10 text-slate-800 text-xl opacity-50">Build a well-presented brand that everyone will love. Take care to develop resources continually and integrity them with previous projects.</p>
    </div>
    <div class="max-w-6xl px-4 mx-auto">
      <div class="flex flex-wrap -mx-4">

        @foreach ($categories as $category)
        <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0">
          <div class="p-8 border border-blue-800 rounded-lg">
            <span class="flex items-center justify-center mb-8 w-16 h-16 rounded-full bg-[#73EC8B]">
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

  </section>

{{--
  <section class="relative bg-gray-100 pb-12 min-h-screen">
    <div class="container pt-12 px-4 mx-auto text-center">
        <!-- Heading -->
        <h2 class="my-5 text-slate-800 text-3xl sm:text-4xl lg:text-5xl font-semibold font-heading">
            Take care of your performance every day.
        </h2>
        <!-- Subtitle -->
        <p class="max-w-2xl mx-auto mb-6 lg:mb-8 text-slate-700 text-lg sm:text-xl opacity-70">
            Build a well-presented brand that everyone will love. Develop resources continually and integrate them with previous projects.
        </p>
    </div>

    <!-- Categories Section -->
    <div class="max-w-6xl px-4 mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($categories as $category)
            <div class="p-6 border border-blue-800 rounded-lg bg-white hover:shadow-md transition-shadow duration-300">
                <!-- Thumbnail -->
                <span class="flex items-center justify-center mb-5 w-16 h-16 rounded-full bg-[#73EC8B]">
                    <img class="w-full h-full object-cover rounded-full"
                         src="{{ asset('storage/' . $category->thumbnail) }}"
                         alt="{{ $category->name }} Image">
                </span>
                <!-- Category Title -->
                <h3 class="mb-4 text-xl sm:text-2xl text-slate-800 font-semibold font-heading">
                    {{ $category->name }}
                </h3>
                <!-- Description -->
                <p class="text-gray-500 text-sm sm:text-base">
                    We made sure you get feedback the same day.
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section> --}}

