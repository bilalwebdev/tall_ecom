@props(['product'])


<div
    class="overflow-hidden transition-all duration-300 bg-white rounded shadow dark:bg-gray-700 hover:shadow-xl group hover:border hover:saturate-100">
    <div class="relative">
        @if ($featuredImage = $product->featuredImage)
            <img alt="product 1" class="w-full" src="{{ $featuredImage->getUrl() }}"
                srcset="{{ $featuredImage->getSrcset() }}" sizes="(min-width: 768px) 50vw, 100vw"
                alt="{{ $featuredImage->name }}">
        @else
            <img alt="product 1" class="w-full" src="{{ placeholder_image() }}" />
        @endif

    </div>
    <div class="px-4 pt-4 pb-3">
        <a href="{{ route('product.view', $product->slug) }}">
            <h4
                class="mb-2 text-xl font-medium text-gray-800 uppercase transition dark:text-gray-200 hover:text-rose-600">
                {{ Str::limit($product->title, 15) }}</h4>
        </a>
        <div class="flex items-baseline mb-1 space-x-2">
            <p class="text-xl font-semibold text-rose-600">{{ format_money($product->variant->final_price) }}</p>
            <p class="text-sm text-gray-400 line-through">{{ format_money($product->variant->sale_price) }}</p>
        </div>
        <div class="flex items-center text-sm text-gray-600">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-500 fill-current">
                <path
                    d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                </path>
            </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                class="w-4 h-4 text-yellow-500 fill-current">
                <path
                    d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                </path>
            </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                class="w-4 h-4 text-yellow-500 fill-current">
                <path
                    d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                </path>
            </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                class="w-4 h-4 text-yellow-500 fill-current">
                <path
                    d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                </path>
            </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                class="w-4 h-4 text-gray-400 fill-current">
                <path
                    d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                </path>
            </svg>
            <span class="ml-2">{{ $product->sale_count }} {{ __('common.sales') }}</span>
        </div>
    </div>
    <button href="#" @click.prevent="Livewire.emit('addToCart', '{{ $product->variant->id }}')"
        class="block w-full py-1 text-center text-white transition border rounded-b top-[330px] bg-rose-600 border-rose-600 hover:bg-transparent hover:text-rose-600">
        Add
        to cart</button>
</div>
