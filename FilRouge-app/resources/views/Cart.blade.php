@include('Partials.layout')
@include('Partials.Top_Bar')
<style>
    @layer utilities {
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    }
</style>

<div class="bg-gray-100 pt-10">
    <h1 class="mb-10 text-center text-2xl font-bold">
        Cart Items
    </h1>
    <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
        <div class="rounded-lg md:w-2/3">
            {{-- @dd($userId); --}}

            @php
                $total = 0;
            @endphp

            @foreach($cartItems as $cartItem)
                @php
                    $total += $cartItem->product->price * $cartItem->quantity;
                @endphp
                <div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start">
                    <img
                        src="{{ asset('storage/' . $cartItem->product->image) }}"
                        alt="product-image" class="w-full rounded-lg sm:w-40"/>
                    <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                        <div class="mt-5 sm:mt-0">
                            <h2 class="text-lg font-bold text-gray-900">{{ $cartItem->product->title}}</h2>
                            <p class="mt-1 text-xs text-gray-700" style="max-height: 35px; overflow-y: hidden;">{{ $cartItem->product->description }}</p>
                        </div>
                        <div class="mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                            <div class="flex items-center border-gray-100">
                                <span class="cursor-pointer rounded-l bg-gray-100 py-1 px-3.5 duration-100 hover:bg-blue-500 hover:text-blue-50"> - </span>
                                <input class="h-8 w-8 border bg-white text-center text-xs outline-none" type="number" value="{{ $cartItem->quantity }}" min="1"/>
                                <span class="cursor-pointer rounded-r bg-gray-100 py-1 px-3 duration-100 hover:bg-blue-500 hover:text-blue-50"> + </span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <p class="text-sm">{{ $cartItem->product->price }}$</p>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 cursor-pointer duration-150 hover:text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Sub total -->
        @php
            $shipping = $total > 60 ? 0 : 5;
            $finalTotal = $total + $shipping;
        @endphp

        <div class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/3">
            <div class="mb-2 flex justify-between">
                <p class="text-gray-700">Subtotal</p>
                <p class="text-gray-700">${{ number_format($total, 2) }}</p>
            </div>
            <div class="flex justify-between">
                <p class="text-gray-700">Shipping</p>
                <p class="text-gray-700">${{ number_format($shipping, 2) }}</p>
            </div>
            <hr class="my-4"/>
            <div class="flex justify-between">
                <p class="text-lg font-bold">Total</p>
                <div class="">
                    <p class="mb-1 text-lg font-bold">${{ number_format($finalTotal, 2) }} USD</p>
                    <p class="text-sm text-gray-700">including VAT</p>
                </div>
            </div>
            <button class="mt-6 w-full rounded-md bg-green-800 py-1.5 font-medium text-green-50 hover:bg-green-600">
                Check out
            </button>
            <a href="/All_products">
                <button class="mx-auto mt-2 w-full middle none center rounded-lg bg-gray-600 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-gray-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                    Back
                </button>
            </a>
        </div>
    </div>
</div>
