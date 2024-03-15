@include('Components.layout')
@include('Components.Top_Bar')

<body class="h-screen" style="background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(198,208,191,1) 0%);">
@include('Components.nav')
@include('Components.SearchBar')

<div class="w-full mx-auto pt-10">
    <div class="flex justify-center items-center flex-warp">
        <img class="mr-10 shadow-2xl hover:shadow-3xl" src="{{ asset('./assets/images/Rectangle 46.png') }}">
        <div class="pl-10">
            <p class="pt-5 mb-5 w-full text-gray-800 text-3xl font-bold leading-none">
                Face Cream - Green Tea
            </p>
            <p class="pt-5 mb-5 w-full text-gray-800 text-xl font-bold leading-none">
                25$ <span class="text-red-800 line-through">30$</span>
            </p>
            <div>
                {{--                <button type="button"--}}
                {{--                        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-transparent rounded-lg border border-gray-700 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">--}}
                {{--                    -    1    +--}}
                {{--                </button>--}}

                <div class="flex">
                <form class="max-w-xs mx-auto">
                    <label for="quantity-input"
                           class="bg-transparent block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose
                        quantity:</label>
                    <div class="relative flex items-center max-w-[8rem]">
                        <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input"
                                class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M1 1h16"/>
                            </svg>
                        </button>
                        <input type="text" id="quantity-input" data-input-counter
                               aria-describedby="helper-text-explanation"
                               class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="999" required/>
                        <button type="button" id="increment-button" data-input-counter-increment="quantity-input"
                                class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </button>
                    </div>
                </form>
                </div>

                <button type="button"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Add to Bag
                </button>

                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow" width="24" height="24">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path
                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                        <path d="M0 0h24v24H0z" fill="none"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow" width="24" height="24">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path
                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                        <path d="M0 0h24v24H0z" fill="none"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow" width="24" height="24">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path
                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                        <path d="M0 0h24v24H0z" fill="none"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow" width="24" height="24">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path
                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                        <path d="M0 0h24v24H0z" fill="none"/>
                    </svg>

                </div>
            </div>
        </div>


    </div>
</div>


</body>
