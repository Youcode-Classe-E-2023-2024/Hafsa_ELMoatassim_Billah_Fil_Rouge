@include('Components.layout')
@include('Components.Top_Bar')
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

@include('Components.nav')
{{--@include('Components.SearchBar')--}}


<div class="flex flex-col justify-center my-20">
    <div
        class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl p-3 max-w-xs md:max-w-3xl mx-auto">
        <div class="w-full grid place-items-center">
            <img src="{{ asset('./assets/images/Rectangle 46.png') }}" alt="tailwind logo"
                 class="shadow-lg rounded-xl"/>
        </div>
        <div class="w-full flex flex-col space-y-2 p-3">
            <h3 class="font-black text-gray-800 md:text-3xl text-xl">Face Cream - Green Tea</h3>
            <p class="md:text-lg text-green-500 font-bold">In Stock</p>
            <p class="text-xl font-black text-gray-800">
                $25 &nbsp <span class="text-red-800 line-through">30$</span>
            </p>
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
        <p class="text-gray-600">
        Discover our Green Tea Cleansing Gel, a deep cleansing solution that preserves your skin's natural hydration.
        Designed to provide a gentle and effective experience, this gel contains carefully selected natural ingredients,
        such as Camelia Sinensis extract with hydrating, anti-inflammatory and anti-aging properties, as well as
        Chamomilla Recutita extract, soothing and hydrating .
        <br><br>
        Our unique formula incorporates Laurdimonium hydroxypropyl hydrolyzed wheat protein, strengthening the skin
        barrier and minimizing fine lines. With the gentle surfactant Cocamidopropyl betaine, this gel provides a gentle
        cleansing experience without the drying effects. Additionally, our product is free of sulfates, parabens,
        silicones and other harmful chemicals, making it ideal for sensitive skin.
        <br><br>
        The generous capacity of 120 ml guarantees long-lasting use. The full INCI list attests to our commitment to
        quality ingredients, with a concentration of 97% of ingredients of natural origin. We've removed silicones,
        parabens and sulfates from our formula, making Hazel Gel Cleanser the ideal choice for your skincare routine.
        <br><br>
        For all skin types, even the most sensitive, our Cleansing Gel offers a feeling of softness and freshness.
        Before first use, perform a patch test on a small area, especially if you have atopic skin or dermatological
        problems. For radiant and healthy skin, adopt Hazel Green Tea Cleansing Gel</p>
</div>

@include('Components.footer')

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
