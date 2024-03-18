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

<body class="h-screen" style="background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(198,208,191,1) 0%);">
@include('Components.nav')
@include('Components.SearchBar')

<div class="w-full mx-auto pt-10">
    <div class="flex justify-center items-center flex-warp">
        <img class="mr-10" style="filter: drop-shadow(15px 13px 18px #486746);"
             src="{{ asset('./assets/images/Rectangle 46.png') }}">
        <div class="pl-10">
            <p class="pt-5 mb-5 w-full text-gray-800 text-3xl font-bold leading-none">
                Face Cream - Green Tea
            </p>
            <p class="pt-5 mb-5 w-full text-gray-800 text-xl font-bold leading-none">
                25$ <span class="text-red-800 line-through">30$</span>
            </p>
            <div class="flex">
                <div class="custom-number-input h-10 w-32">
                    <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                        <button data-action="decrement"
                                class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                            <span class="m-auto text-2xl font-thin">−</span>
                        </button>
                        <input type="number"
                               class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none"
                               name="custom-input-number" value="0">
                        <button data-action="increment"
                                class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                            <span class="m-auto text-2xl font-thin">+</span>
                        </button>
                    </div>
                </div>
                <div>
                    <button type="button"
                            class="h-10 mt-1 ml-5 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2  dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Add to Bag
                    </button>
                </div>
            </div>

            <div class="mt-5 flex">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow" width="24"
                     height="24">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path
                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow" width="24"
                     height="24">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path
                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow" width="24"
                     height="24">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path
                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow" width="24"
                     height="24">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path
                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>

            </div>

        </div>
    </div>
</div>
</body>

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
