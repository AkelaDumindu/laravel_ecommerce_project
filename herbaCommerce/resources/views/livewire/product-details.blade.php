<div>
    <div class="flex gap-5 p-20">
        <!-- Product Image -->
        <img src="{{asset('images/1.jpg')}}" alt="product-image" class="rounded-t-lg object-cover" height="400px" width="400px">
        
        <div class="flex flex-col justify-between w-full"> <!-- Added flex-col to organize content -->
            <!-- Product Title and Description -->
            <div>
                <h2 class="p-1 font-medium text-2xl line-clamp-2">Product Title</h2>
                <h2 class="p-1 text-grey-500 line-clamp-4">A Plantations are farms specializing in cash crops, usually mainly planting a single crop, with perhaps ancillary areas for vegetables for eating and so on.</h2>
                <div class="flex gap-20">
                    <div class="bg-green-200 p-1 rounded-md">
                        <h2 class="text-1xl">Outfit</h2>
                    </div>
                    <h2 class="text-1xl font-medium">Rs.50.00</h2>
                </div>
            </div>

            <!-- Add to Cart Button aligned right -->
            <div class="my-3 flex justify-left"> <!-- Aligns the button to the right -->
                <button wire:navigate href='#'>
                    <div class="flex gap-2 justify-center w-full max-w-xs rounded bg-green-600 px-12 py-2 text-sm font-medium text-white text-center shadow hover:bg-green-700 focus:outline-none focus:ring active:bg-green-500 sm:w-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg> 
                        <span>Add to cart</span>
                    </div>
                </button>
            </div>
        </div>
    </div>

    <!-- Related Product Section -->
    <div class="m-5 px-20 pt-5 mt-10">
        <h2 class="text-2xl font-medium">Related Products</h2>
        <livewire:product-listing />
    </div>
</div>
