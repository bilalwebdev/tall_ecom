<x-base-layout>
    <header class="relative overflow-hidden bg-gray-200 dark:bg-gray-800">
        <div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-48">
            <div class="relative px-4 mx-auto max-w-7xl sm:static sm:px-6 lg:px-8">
                <div class="sm:max-w-lg">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 dark:text-white font sm:text-6xl">
                        Unleash Style with Our Collection</h1>
                    <p class="mt-4 text-xl text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Est ipsam recusandae repellat nostrum, illum possimus culpa quia expedita
                        doloribus.</p>
                </div>
                <div>
                    <div class="mt-10">
                        <!-- Decorative image grid -->
                        <div aria-hidden="true"
                            class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                            <div
                                class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                                <div class="flex items-center space-x-6 lg:space-x-8">
                                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div class="h-64 overflow-hidden rounded-lg w-44 sm:opacity-0 lg:opacity-100">
                                            <img src="{{ asset('images/imag4.jpg') }}" alt=""
                                                class="object-cover object-center w-full h-full">
                                        </div>
                                        <div class="h-64 overflow-hidden rounded-lg w-44">
                                            <img src="{{ asset('images/imag6.jpg') }}" alt=""
                                                class="object-cover object-center w-full h-full">
                                        </div>
                                    </div>
                                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div class="h-64 overflow-hidden rounded-lg w-44">
                                            <img src="{{ asset('images/imag1.jpg') }}" alt=""
                                                class="object-cover object-center w-full h-full">
                                        </div>
                                        <div class="h-64 overflow-hidden rounded-lg w-44">
                                            <img src="{{ asset('images/imag2.jpg') }}" alt=""
                                                class="object-cover object-center w-full h-full">
                                        </div>
                                        <div class="h-64 overflow-hidden rounded-lg w-44">
                                            <img src="{{ asset('images/imag5.jpg') }}" alt=""
                                                class="object-cover object-center w-full h-full">
                                        </div>
                                    </div>
                                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div class="h-64 overflow-hidden rounded-lg w-44">
                                            <img src="{{ asset('images/imag7.jpg') }}" alt=""
                                                class="object-cover object-center w-full h-full">
                                        </div>
                                        <div class="h-64 overflow-hidden rounded-lg w-44">
                                            <img src="{{ asset('images/imag3.jpg') }}" alt=""
                                                class="object-cover object-center w-full h-full">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#"
                            class="inline-block px-8 py-3 font-medium text-center text-white border border-transparent rounded-md bg- bg-rose-600 hover:bg-transparent hover:border-rose-600 hover:text-rose-600">Shop
                            Collection</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Category section -->
        <section aria-labelledby="category-heading" class="bg-white dark:bg-slate-800">
            <div class="px-4 py-12 mx-auto max-w-7xl sm:py-16 sm:px-6 lg:px-8">
                <div class="sm:flex sm:items-baseline sm:justify-between">
                    <h2 id="category-heading" class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Shop by Category</h2>
                    <a href="#"
                        class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 dark:text-indigo-50 dark:hover:text-indigo-200 sm:block">
                        Browse all categories
                        <span aria-hidden="true"> →</span>
                    </a>
                </div>

                <div class="grid grid-cols-3 gap-3 mt-8">

                    @foreach ($categories as $category)
                        <div class="relative overflow-hidden rounded-sm group">
                            <img src="{{ $category->image }}" alt="category 1" class="w-full">
                            <a href="#"
                                class="absolute inset-0 flex items-center justify-center text-xl font-medium text-white transition bg-black bg-opacity-40 font-roboto group-hover:bg-opacity-60">{{ $category->name }}</a>
                        </div>
                    @endforeach


                </div>

                <div class="mt-6 sm:hidden">
                    <a href="#"
                        class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500 dark:text-indigo-50 dark:hover:text-indigo-200">
                        Browse all categories
                        <span aria-hidden="true"> →</span>
                    </a>
                </div>
            </div>
        </section>


        <div class="max-w-2xl px-4 py-10 mx-auto -mt-4 sm:pb-16 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="sm:flex sm:items-baseline sm:justify-between">
                <h2 id="category-heading" class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Trending Products</h2>
                <a href="#"
                    class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 dark:text-indigo-50 dark:hover:text-indigo-200 sm:block">
                    Browse all products
                    <span aria-hidden="true"> →</span>
                </a>
            </div>
            <div class="grid grid-cols-1 mt-8 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($products as $product)
                    <x-product.card :product="$product" />
                @endforeach
            </div>
        </div>

        <!-- Long-term thinking -->
        <section aria-labelledby="cause-heading">
            <div class="relative px-6 py-32 bg-gray-800 sm:py-40 sm:px-12 lg:px-16">
                <div class="absolute inset-0 overflow-hidden">
                    <img src="{{ asset('images/london-wall-art-wide.avif') }}" alt=""
                        class="object-cover object-center w-full h-full">
                </div>
                <div aria-hidden="true" class="absolute inset-0 bg-gray-900 bg-opacity-50"></div>
                <div class="relative flex flex-col items-center max-w-3xl mx-auto text-center">
                    <h2 id="cause-heading" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Long-term
                        thinking</h2>
                    <p class="mt-3 text-xl text-white">We're committed to responsible, sustainable, and ethical
                        manufacturing. Our small-scale approach allows us to focus on quality and reduce our impact.
                        We're doing our best to delay the inevitable heat-death of the universe.</p>
                    <a href="#"
                        class="block w-full px-8 py-3 mt-8 text-base font-medium text-gray-900 bg-white border border-transparent rounded-md dark:text-white dark:bg-gray-800 hover:bg-gray-100 sm:w-auto">Read
                        our story</a>
                </div>
            </div>
        </section>

        <!-- Favorites section -->
        <section aria-labelledby="favorites-heading">
            <div class="px-4 py-24 mx-auto max-w-7xl sm:py-32 sm:px-6 lg:px-8">
                <div class="sm:flex sm:items-baseline sm:justify-between">
                    <h2 id="favorites-heading" class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Our Favorites</h2>
                    <a href="#"
                        class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 dark:text-indigo-50 dark:hover:text-indigo-200 sm:block">
                        Browse all favorites
                        <span aria-hidden="true"> →</span>
                    </a>
                </div>

                <div class="grid grid-cols-1 mt-6 gap-y-10 sm:grid-cols-3 sm:gap-y-0 sm:gap-x-6 lg:gap-x-8">

                    <div class="relative group">
                        <div
                            class="w-full overflow-hidden rounded-lg h-96 group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-3 sm:h-auto">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-01.jpg"
                                alt="Model wearing women's black cotton crewneck tee."
                                class="object-cover object-center w-full h-full">
                        </div>
                        <h3 class="mt-4 text-base font-semibold text-gray-900 dark:text-white">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Black Basic Tee
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">$32</p>
                    </div>

                    <div class="relative group">
                        <div
                            class="w-full overflow-hidden rounded-lg h-96 group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-3 sm:h-auto">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-02.jpg"
                                alt="Model wearing women's off-white cotton crewneck tee."
                                class="object-cover object-center w-full h-full">
                        </div>
                        <h3 class="mt-4 text-base font-semibold text-gray-900 dark:text-white">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Off-White Basic Tee
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">$32</p>
                    </div>

                    <div class="relative group">
                        <div
                            class="w-full overflow-hidden rounded-lg h-96 group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-3 sm:h-auto">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-03.jpg"
                                alt="Model wearing women's burgundy red crewneck artwork tee with small white triangle overlapping larger black triangle."
                                class="object-cover object-center w-full h-full">
                        </div>
                        <h3 class="mt-4 text-base font-semibold text-gray-900 dark:text-white">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Mountains Artwork Tee
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">$36</p>
                    </div>

                </div>

                <div class="mt-6 sm:hidden">
                    <a href="#"
                        class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500 dark:text-indigo-50 dark:hover:text-indigo-200">
                        Browse all favorites
                        <span aria-hidden="true"> →</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- CTA section -->
        <x-base.section-cta />
    </main>


</x-base-layout>
