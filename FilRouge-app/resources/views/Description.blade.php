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

<div class="flex flex-col justify-center my-10">
    <div
        class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl p-3 max-w-xs md:max-w-3xl mx-auto">
        <div class="w-full grid place-items-center">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                 class="shadow-lg rounded-xl"/>
        </div>
        <div class="w-full flex flex-col space-y-2 p-3">
            <h3 class="font-black text-gray-800 md:text-3xl text-xl">{{ $product->title }}</h3>
            <p class="md:text-lg text-green-500 font-bold">In Stock</p>
            <p class="text-xl font-black text-gray-800">{{ $product->price }}$
                <span class="text-red-800 line-through">{{ $product->oldprice }}$</span>
            </p>
                <p> Total Products : {{ $product->product_nbr }}</p>
            <div class="flex p-1 gap-1 text-orange-300">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star-half"></ion-icon>
            </div>

            <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <input type="hidden" name="quantity" value="1">
                <button type="submit" class="add-to-cart-button w-1/2 h-10 focus:outline-none text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5">
                    Add to Bag
                </button>
            </form>

        </div>
    </div>

    <div class="flex items-center">
        <div class="border-t border-gray-400 my-10 flex-grow"></div>
        <div class="mx-4 text-green-900 font-regular leading-none"><u>Product Description</u></div>
        <div class="border-t border-gray-400 flex-grow"></div>
    </div>

    <div class="max-w-4xl text-center m-auto px-10  py-6 rounded-lg shadow-md">
        <p class="text-gray-600">{{ $product->description }}</p>
    </div>

@include('Partials.footer')
