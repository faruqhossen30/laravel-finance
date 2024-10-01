<section class="container mx-auto px-3 lg:px-0 -mt-56">
    <div class="grid grid-cols-12 gap-5">
        @foreach ($categories as $category)
            <div
                class="col-span-6 md:col-span-4 lg:col-span-3 border flex flex-col items-center py-10 shadow-lg bg-white rounded-lg">
                <img src="{{ asset('storage/' . $category->thumbnail) }}" class="h-16 W-16 p-2" alt="thumbnail">
                <h3 class="text-sm sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                    {{ $category->name }}
                </h3>
            </div>
        @endforeach
    </div>
</section>
