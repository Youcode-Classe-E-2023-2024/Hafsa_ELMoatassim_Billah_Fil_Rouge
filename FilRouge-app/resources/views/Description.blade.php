@include('Partials.layout')
@include('Partials.Top_Bar')
<style>
    input[type='number']::-webkit-inner-spin-button,
    input[type='number']::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .custom-number-input input:focus {
        outline: none !important;
    }

    .custom-number-input button:focus {
        outline: none !important;
    }
</style>

@include('Partials.nav')
{{--@include('Partials.SearchBar')--}}

<div class="flex flex-col justify-center my-20">
    <div class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl p-3 max-w-xs md:max-w-3xl mx-auto">
        <div class="w-full grid place-items-center">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="shadow-lg rounded-xl"/>
        </div>
        <div class="w-full flex flex-col space-y-2 p-3">
            <h3 class="font-black text-gray-800 md:text-3xl text-xl">{{ $product->title }}</h3>
            <p class="md:text-lg text-green-500 font-bold">In Stock</p>
            <p class="text-xl font-black text-gray-800">{{ $product->price }}$
{{--                <span class="text-red-800 line-through">30$</span>--}}
            </p>
            <!-- Add other product details here -->
            <div class="flex p-1 gap-1 text-orange-300">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star-half"></ion-icon>
            </div>
            <div class="h-5"></div>
            <div class="flex">
                <div class="flex flex-col custom-number-input h-10 w-32">
                    <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent">
                        <button data-action="decrement"
                                class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-10 rounded-l cursor-pointer outline-none">
                            <span class="m-auto text-2xl font-thin">−</span>
                        </button>
                        <input type="number"
                               class="outline-none focus:outline-none text-center w-12 bg-gray-300 font-semibold text-md hover:text-black focus:text-black cursor-default flex items-center text-gray-700"
                               name="custom-input-number" value="0">
                        <button data-action="increment"
                                class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-10 rounded-r cursor-pointer">
                            <span class="m-auto text-2xl font-thin">+</span>
                        </button>
                    </div>
                </div>
                <button type="button"
                        class="ml-4 h-10 focus:outline-none text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5 ">
                    Add to Bag
                </button>
            </div>
        </div>
    </div>
</div>

<div class="flex items-center">
    <div class="border-t border-gray-400 my-20 flex-grow"></div>
    <div class="mx-4 text-green-900 font-regular leading-none"><u>Product Description</u></div>
    <div class="border-t border-gray-400 flex-grow"></div>
</div>

<div class="max-w-4xl text-center m-auto px-10  py-6 rounded-lg shadow-md">
    <p class="text-gray-600">{{ $product->description }}</p>
</div>

@include('Partials.footer')

<script>
    function decrement(e) {
        const btn = e.target.parentNode.parentElement.querySelector(
            'button[data-action="decrement"]'
        );
        const target = btn.nextElementSibling;
        let value = Number(target.value);
        value--;
        target.value = value;
    }

    function increment(e) {
        const btn = e.target.parentNode.parentElement.querySelector(
            'button[data-action="decrement"]'
        );
        const target = btn.nextElementSibling;
        let value = Number(target.value);
        value++;
        target.value = value;
    }

    const decrementButtons = document.querySelectorAll(
        `button[data-action="decrement"]`
    );

    const incrementButtons = document.querySelectorAll(
        `button[data-action="increment"]`
    );

    decrementButtons.forEach(btn => {
        btn.addEventListener("click", decrement);
    });

    incrementButtons.forEach(btn => {
        btn.addEventListener("click", increment);
    });
</script>
