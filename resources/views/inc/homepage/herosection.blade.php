
<section class="relative  bg-gray-100  pb-10 lg:pb-20 min-h-screen " >

    <img class="hidden lg:block lg:absolute top-0 left-0 mt-32" src="zeus-assets/icons/dots/yellow-dot-left-bars.svg" alt="">
    <img class="hidden lg:block lg:absolute bottom-0 right-0 mt-20" src="zeus-assets/icons/dots/red-dot-right-shield.svg" alt="">
    <div class="relative container pt-12 px-4 mb-3 sm:mb-20 mx-auto space-y-3 text-center">

      <h2 class=" lg:mb-5 text-2xl  sm:text-5xl md:text-[54px] lg:py-0 capitalize text-slate-800  lg:text-[44px] xl:text-5xl 2xl:text-6xl font-bold ">Your Guide to Loans and Credit
    </h2>
      <p class="max-w-3xl  py-1 text-justify mx-auto mb-8 lg:py-1  sm:text-center lg:mb-10 text-slate-800 text-xl opacity-50">We provide expert insights, simple comparisons, and calculators for personal loans, mortgages, and credit card rates.
    </p>
    </div>
    <div class="max-w-6xl px-4 mx-auto">
      <div class="flex flex-wrap -mx-4">

        @foreach ($categories as $category)
        <div class="w-full sm:w-1/2 md:w-1/2 py-2 lg:w-1/3 px-4 mb-4 md:mb-0">
          <div class="p-8 border border-blue-800 rounded-lg">
            <span class="flex items-center justify-center mb-8 w-16 h-16 rounded-full bg-[#73EC8B]">
                <img class="size-16 rounded-full"
                src="{{ asset('storage/' . $category->thumbnail) }}"
                alt="Image Description">
            </span>
            <h3 class="mb-6 text-2xl text-slate-800 font-semibold font-heading">{{$category->name}}</h3>
            <p class="mb-8 text-gray-500">{{$category->description ?? ''}}</p>
          </div>
        </div>
        @endforeach

      </div>
    </div>

  </section>

