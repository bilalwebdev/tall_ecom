<div class="max-w-2xl px-4 py-6 mx-auto lg:max-w-none sm:px-6">


    <div class="container grid items-start grid-cols-2 gap-6 pt-4 pb-16 md:grid-cols-4">
        <!-- sidebar -->
        <!-- drawer init and toggle -->
        <div class="text-center md:hidden">
            <button
                class="text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 block md:hidden"
                type="button" data-drawer-target="drawer-example" data-drawer-show="drawer-example"
                aria-controls="drawer-example">
                <ion-icon name="grid-outline"></ion-icon>
            </button>
        </div>

        <!-- drawer component -->
        <div id="drawer-example"
            class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800"
            tabindex="-1" aria-labelledby="drawer-label">
            <h5 id="drawer-label"
                class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400"><svg
                    class="w-5 h-5 mr-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>Info</h5>
            <button type="button" data-drawer-hide="drawer-example" aria-controls="drawer-example"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
            <div class="space-y-5 divide-y divide-gray-200">
                {{-- <div>
                    <h3 class="mb-3 text-xl font-medium text-gray-800 uppercase">Categories</h3>
                    <div class="space-y-2">
                        @foreach ($categories as $category)
                            <div class="flex items-center">
                                <input type="checkbox" name="cat-1" id="cat-1"
                                    class="rounded-sm cursor-pointer text-primary focus:ring-0">
                                <label for="cat-1"
                                    class="ml-3 text-gray-600 cusror-pointer">{{ $category->name }}</label>
                                <div class="ml-auto text-sm text-gray-600">(15)</div>
                            </div>
                        @endforeach

                    </div>
                </div> --}}

                <div class="pt-4">
                    <h3 class="mb-3 text-xl font-medium text-gray-800 uppercase">Brands</h3>
                    <div class="space-y-2">
                        <div class="flex items-center">
                            <input type="checkbox" name="brand-1" id="brand-1"
                                class="rounded-sm cursor-pointer text-primary focus:ring-0">
                            <label for="brand-1" class="ml-3 text-gray-600 cusror-pointer">Cooking Color</label>
                            <div class="ml-auto text-sm text-gray-600">(15)</div>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" name="brand-2" id="brand-2"
                                class="rounded-sm cursor-pointer text-primary focus:ring-0">
                            <label for="brand-2" class="ml-3 text-gray-600 cusror-pointer">Magniflex</label>
                            <div class="ml-auto text-sm text-gray-600">(9)</div>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" name="brand-3" id="brand-3"
                                class="rounded-sm cursor-pointer text-primary focus:ring-0">
                            <label for="brand-3" class="ml-3 text-gray-600 cusror-pointer">Ashley</label>
                            <div class="ml-auto text-sm text-gray-600">(21)</div>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" name="brand-4" id="brand-4"
                                class="rounded-sm cursor-pointer text-primary focus:ring-0">
                            <label for="brand-4" class="ml-3 text-gray-600 cusror-pointer">M&D</label>
                            <div class="ml-auto text-sm text-gray-600">(10)</div>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" name="brand-5" id="brand-5"
                                class="rounded-sm cursor-pointer text-primary focus:ring-0">
                            <label for="brand-5" class="ml-3 text-gray-600 cusror-pointer">Olympic</label>
                            <div class="ml-auto text-sm text-gray-600">(10)</div>
                        </div>
                    </div>
                </div>

                <div class="pt-4">
                    <h3 class="mb-3 text-xl font-medium text-gray-800 uppercase">Price</h3>
                    <div class="flex items-center mt-4">
                        <input type="text" name="min" id="min"
                            class="w-full px-3 py-1 text-gray-600 border-gray-300 rounded shadow-sm focus:border-primary focus:ring-0"
                            placeholder="min">
                        <span class="mx-3 text-gray-500">-</span>
                        <input type="text" name="max" id="max"
                            class="w-full px-3 py-1 text-gray-600 border-gray-300 rounded shadow-sm focus:border-primary focus:ring-0"
                            placeholder="max">
                    </div>
                </div>

                <div class="pt-4">
                    <h3 class="mb-3 text-xl font-medium text-gray-800 uppercase">size</h3>
                    <div class="flex items-center gap-2">
                        <div class="size-selector">
                            <input type="radio" name="size" id="size-xs" class="hidden">
                            <label for="size-xs"
                                class="flex items-center justify-center w-6 h-6 text-xs text-gray-600 border border-gray-200 rounded-sm shadow-sm cursor-pointer">XS</label>
                        </div>
                        <div class="size-selector">
                            <input type="radio" name="size" id="size-sm" class="hidden">
                            <label for="size-sm"
                                class="flex items-center justify-center w-6 h-6 text-xs text-gray-600 border border-gray-200 rounded-sm shadow-sm cursor-pointer">S</label>
                        </div>
                        <div class="size-selector">
                            <input type="radio" name="size" id="size-m" class="hidden">
                            <label for="size-m"
                                class="flex items-center justify-center w-6 h-6 text-xs text-gray-600 border border-gray-200 rounded-sm shadow-sm cursor-pointer">M</label>
                        </div>
                        <div class="size-selector">
                            <input type="radio" name="size" id="size-l" class="hidden">
                            <label for="size-l"
                                class="flex items-center justify-center w-6 h-6 text-xs text-gray-600 border border-gray-200 rounded-sm shadow-sm cursor-pointer">L</label>
                        </div>
                        <div class="size-selector">
                            <input type="radio" name="size" id="size-xl" class="hidden">
                            <label for="size-xl"
                                class="flex items-center justify-center w-6 h-6 text-xs text-gray-600 border border-gray-200 rounded-sm shadow-sm cursor-pointer">XL</label>
                        </div>
                    </div>
                </div>

                <div class="pt-4">
                    <h3 class="mb-3 text-xl font-medium text-gray-800 uppercase">Color</h3>
                    <div class="flex items-center gap-2">
                        <div class="color-selector">
                            <input type="radio" name="color" id="red" class="hidden">
                            <label for="red"
                                class="block w-6 h-6 border border-gray-200 rounded-sm shadow-sm cursor-pointer"
                                style="background-color: #fc3d57;"></label>
                        </div>
                        <div class="color-selector">
                            <input type="radio" name="color" id="black" class="hidden">
                            <label for="black"
                                class="block w-6 h-6 border border-gray-200 rounded-sm shadow-sm cursor-pointer"
                                style="background-color: #000;"></label>
                        </div>
                        <div class="color-selector">
                            <input type="radio" name="color" id="white" class="hidden">
                            <label for="white"
                                class="block w-6 h-6 border border-gray-200 rounded-sm shadow-sm cursor-pointer"
                                style="background-color: #fff;"></label>
                        </div>

                    </div>
                </div>

            </div>
            <div class="grid grid-cols-2 gap-4">
                <a href="#"
                    class="px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Learn
                    more</a>
                <a href="#"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Get
                    access <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg></a>
            </div>
        </div>

        <!-- ./sidebar -->
        <div class="hidden col-span-1 px-4 pb-6 bg-white rounded shadow overflow-hiddenb md:block">
            <div class="space-y-5 divide-y divide-gray-200">
                <div>
                    <h3 class="mb-3 text-xl font-medium text-gray-800 uppercase">Categories</h3>
                    <div class="space-y-2">
                        @foreach ($av_categories as $category)
                            <div class="flex items-center">
                                <input type="checkbox" wire:model="categories" value="{{ $category->id }}"
                                    class="rounded-sm cursor-pointer text-primary focus:ring-0">
                                <label for="cat-1"
                                    class="ml-3 text-gray-600 cusror-pointer">{{ $category['name'] }}</label>
                                <div class="ml-auto text-sm text-gray-600">(15)</div>
                            </div>
                            @foreach ($category->child as $cat)
                                <div class="flex items-center ml-4">
                                    <input type="checkbox" value="{{ $cat->id }}" wire:model="categories"
                                        class="rounded-sm cursor-pointer text-primary focus:ring-0">
                                    <label for="cat-1"
                                        class="ml-3 text-gray-600 cusror-pointer">{{ $cat->name }}</label>
                                    <div class="ml-auto text-sm text-gray-600">(15)</div>
                                </div>
                            @endforeach
                        @endforeach

                    </div>
                </div>



                <div class="pt-4">
                    <h3 class="mb-3 text-xl font-medium text-gray-800 uppercase">Price</h3>
                    <div class="flex items-center mt-4">
                        <input type="text" name="min" id="min" wire:model='min_price'
                            class="w-full px-3 py-1 text-gray-600 border-gray-300 rounded shadow-sm focus:border-primary focus:ring-0"
                            placeholder="Min">
                        <span class="mx-3 text-gray-500">-</span>
                        <input type="text" name="max" id="max" wire:model.debounce.500ms='max_price'
                            class="w-full px-3 py-1 text-gray-600 border-gray-300 rounded shadow-sm focus:border-primary focus:ring-0"
                            placeholder="Max">
                    </div>
                </div>

                <div class="pt-4">
                    <h3 class="mb-3 text-xl font-medium text-gray-800 uppercase">size</h3>
                    <div class="flex items-center gap-2">

                        @foreach ($av_sizes as $size)
                            <div class="size-selector">
                                <input type="radio" name="size" value="{{ $size->id }}" wire:model="size"
                                    class="">
                                <label for="size-xs"
                                    class="flex items-center justify-center w-6 h-6 text-xs text-gray-600 border border-gray-200 rounded-sm shadow-sm cursor-pointer">{{ $size->name }}</label>
                            </div>
                        @endforeach


                    </div>
                </div>

                <div class="pt-4">
                    <h3 class="mb-3 text-xl font-medium text-gray-800 uppercase">Color</h3>
                    <div class="flex items-center gap-2">

                        @foreach ($av_colors as $cl)
                            <div class="color-selector">
                                <input type="radio" name="color" wire:model='color' value="{{ $cl->id }}"
                                    id="red" class="">
                                <label for="red"
                                    class="block w-6 h-6 border border-gray-200 rounded-sm shadow-sm cursor-pointer"
                                    style="background-color: {{ $cl->name }};"></label>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
        <!-- products -->
        <div class="col-span-3">
            <div class="flex items-center mb-4">
                <select name="sort" id="sort" wire:model='sort'
                    class="px-4 py-3 text-sm text-gray-600 border-gray-300 rounded shadow-sm w-44 focus:ring-primary focus:border-primary">
                    <option value="">Default sorting</option>
                    <option value="l_to_h">Price low to high</option>
                    <option value="h_to_l">Price high to low</option>
                    <option value="latest">Latest product</option>
                </select>

                {{-- <div class="flex gap-2 ml-auto">
                    <div
                        class="flex items-center justify-center w-10 text-white border rounded cursor-pointer border-primary h-9 bg-primary">
                        <i class="fa-solid fa-grip-vertical"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-10 text-gray-600 border border-gray-300 rounded cursor-pointer h-9">
                        <i class="fa-solid fa-list"></i>
                    </div>
                </div> --}}
            </div>

            <div class="grid grid-cols-2 gap-6 md:grid-cols-3">
                @foreach ($products as $product)
                    <x-product.card :product="$product" />
                @endforeach



            </div>
        </div>

        <div class="ml-12 w-full flex justify-center items-center">
            {{ $products->links() }}
        </div>


        <!-- ./products -->
    </div>
</div>
