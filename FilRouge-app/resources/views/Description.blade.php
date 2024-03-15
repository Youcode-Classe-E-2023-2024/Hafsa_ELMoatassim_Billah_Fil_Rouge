@include('Components.layout')
@include('Components.Top_Bar')

<body class="h-screen" style="background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(198,208,191,1) 0%);">
@include('Components.nav')
@include('Components.SearchBar')

<div class="w-full mx-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2">
        <div>
            <div class="flex justify-center items-center h-screen">
                <img src="{{ asset('./assets/images/Rectangle 46.png') }}">
            </div>
        </div>

        <div class="m-auto">
            <div class="pt-5 mb-5 w-full text-gray-800 text-4xl px-5 font-bold leading-none">
                Hellooooooooo
            </div>

            <div class="m-5">
                <button type="button"
                        class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    100 MAD Reserve Now!
                </button>
            </div>
        </div>
    </div>
</div>



</body>
