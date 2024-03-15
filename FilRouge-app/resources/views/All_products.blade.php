@include('Components.layout')
@include('Components.Top_Bar')

<body class="h-screen" style="background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(198,208,191,1) 0%);">

    @include('Components.nav')
    @include('Components.SearchBar')

    <h2 class="w-full text-center text-3xl text-green-900 dark:text-white font-semibold">Gamme Hazel</h2>

    <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray- py-6 sm:py-12">
        <div class="mx-auto max-w-screen-xl px-4 w-full">
            <div class="grid w-full sm:grid-cols-2 xl:grid-cols-3 gap-6">

                <div class="relative flex flex-col rounded-xl aspect-w-1 aspect-h-1">
                    <div class="h-auto overflow-hidden">
                        <div
                            class="shadow-gray-500/20 relative mx-4 mt-4 h-70 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700 shadow-lg">
                            <img src="{{ asset('./assets/images/Rectangle 46.png') }}" alt="toner">
                        </div>
                    </div>
                    <div class="pt-5 text-center">
                        <h3 class=" mb-2 font-medium">Face Toner - Geen Tea</h3>
                        <div class="flex justify-between items-center">
                            <p class="w-full text-center text-gray-900">19$ <span class="text-red-900">30$</span></p>
                        </div>
                    </div>
                </div>

                <div class="relative flex flex-col rounded-xl aspect-w-1 aspect-h-1">
                    <div class="h-auto overflow-hidden">
                        <div
                            class="shadow-gray-500/20 relative mx-4 mt-4 h-70 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700 shadow-lg">
                            <img src="{{ asset('./assets/images/Rectangle 45.png') }}" alt="toner">
                        </div>
                    </div>
                    <div class="pt-5 text-center">
                        <h3 class=" mb-2 font-medium">Face Toner - Geen Tea</h3>
                        <div class="flex justify-between items-center">
                            <p class="w-full text-center text-gray-900">19$ <span class="text-red-900">30$</span></p>
                        </div>
                    </div>
                </div>

                <div class="relative flex flex-col rounded-xl aspect-w-1 aspect-h-1">
                    <div class="h-auto overflow-hidden">
                        <div
                            class="shadow-gray-500/20 relative mx-4 mt-4 h-70 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700 shadow-lg">
                            <img src="{{ asset('./assets/images/Rectangle 44.png') }}" alt="toner">
                        </div>
                    </div>
                    <div class="pt-5 text-center">
                        <h3 class=" mb-2 font-medium">Face Toner - Geen Tea</h3>
                        <div class="flex justify-between items-center">
                            <p class="w-full text-center text-gray-900">19$ <span class="text-red-900">30$</span></p>
                        </div>
                    </div>
                </div>

                <div class="relative flex flex-col rounded-xl aspect-w-1 aspect-h-1">
                    <div class="h-auto overflow-hidden">
                        <div
                            class="shadow-gray-500/20 relative mx-4 mt-4 h-70 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700 shadow-lg">
                            <img src="{{ asset('./assets/images/Rectangle 47.png') }}" alt="toner">
                        </div>
                    </div>
                    <div class="pt-5 text-center">
                        <h3 class=" mb-2 font-medium">Face Toner - Geen Tea</h3>
                        <div class="flex justify-between items-center">
                            <p class="w-full text-center text-gray-900">19$ <span class="text-red-900">30$</span></p>
                        </div>
                    </div>
                </div>

                <div class="relative flex flex-col rounded-xl aspect-w-1 aspect-h-1">
                    <div class="h-auto overflow-hidden">
                        <div
                            class="shadow-gray-500/20 relative mx-4 mt-4 h-70 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700 shadow-lg">
                            <img src="{{ asset('./assets/images/Rectangle 48.png') }}" alt="toner">
                        </div>
                    </div>
                    <div class="pt-5 text-center">
                        <h3 class=" mb-2 font-medium">Face Toner - Geen Tea</h3>
                        <div class="flex justify-between items-center">
                            <p class="w-full text-center text-gray-900">19$ <span class="text-red-900">30$</span></p>
                        </div>
                    </div>
                </div>

                <div class="relative flex flex-col rounded-xl aspect-w-1 aspect-h-1">
                    <div class="h-auto overflow-hidden">
                        <div
                            class="shadow-gray-500/20 relative mx-4 mt-4 h-70 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700 shadow-lg">
                            <img src="{{ asset('./assets/images/Rectangle 49.png') }}" alt="toner">
                        </div>
                    </div>
                    <div class="pt-5 text-center">
                        <h3 class=" mb-2 font-medium">Face Toner - Geen Tea</h3>
                        <div class="flex justify-between items-center">
                            <p class="w-full text-center text-gray-900">19$ <span class="text-red-900">30$</span></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
