@include('Partials.layout')

<section class="flex h-screen relative section1">
    <div class="absolute inset-0 flex items-center justify-center"
         style="font-family: 'Italiana', sans-serif; top: -25%;">
        <h1 class="title text-gray-800 pb-20">SKINCARE</h1>
    </div>

    <div class="w-1/2 bg-gradient-to-b from-8EA67F to-white relative">
        <div class="absolute pl-20 hidden lg:block bottom-20 flex flex-col items-center justify-center">
            <h1 class="w-4/5 text-gray-900">Welcome to our skincare haven, where beauty meets science. Explore our
                curated collection of premium products designed to pamper and transform your skin. From
                indulgent face serums to masks, discover the perfect regimen for
                a radiant and confident you
            </h1>
            <button class="shadow-lg mt-7 mb-9 text-gray-200 px-4 py-2 rounded"
                    style="background-color: #78876d; box-shadow: 5px 5px 5px gray;">
                <a href="/All_products" style="text-decoration: none; color: inherit; display: block;">Shop Now</a>
            </button>
        </div>
    </div>

    <div class="flex">
        <div class="navbar absolute inset-x-0 top-8 transform -translate-y-1/2 flex justify-center pt-10 z-10">
            <a href="/" class="no-underline text-black hover:text-green-800 px-4 py-2">Home</a>
            <a href="/About" class="no-underline text-black hover:text-green-800 px-4 py-2">About</a>
            <a href="/Blog" class="no-underline text-black hover:text-green-800 px-4 py-2">Blogs</a>
            <a href="/"><img src="{{ asset('./assets/images/Logo.png') }}" alt="logo"></a>
            <a href="/All_products" class="no-underline text-black hover:text-green-800 px-4 py-2">Products</a>
            <a href="/Contact" class="no-underline text-black hover:text-green-800 px-4 py-2">Contact</a>
            @guest
            <a href="/login" class="no-underline text-black hover:text-green-800 px-4 py-2">Login</a>
            @endguest
            @auth()
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="no-underline text-black hover:text-green-800 px-4 py-2">Logout</button>

                </form>
            @endauth

        </div>
    </div>

    <div class="w-1/2 h-full hidden lg:block" style="background-color: #8EA67F;">
        <div class="max-w-screen-md md:w-3/6 mx-auto">
            <div class="flex flex-col md:flex-row items-center justify-center h-full px-2 rounded-xl"
                 style="margin-top: 22rem; background-color:#6c8060">
                <div class="w-auto md:w-1/2 py-2">
                    <img class="w-full h-auto rounded-lg" src="{{ asset('./assets/images/Rectangle 46.png') }}"
                         alt="Image"/>
                </div>
                <div class="w-full md:w-3/4 py-2">
                    <p class="w-full px-2 text-sm tracking-wide leading-tight text-white">Face serum infused with the
                        goodness of argan oil for a radiant and youthful complexion.
                        <br> 25$</p>
                    <div class="flex p-1 gap-1 text-orange-300">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-half"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute inset-x-0 bottom-0">
        <div class="w-full h-20 flex justify-evenly" style="background-color: #AAB9A1">
            <img src="{{ asset('./assets/images/paraben free.png') }}" class="p-3" alt="">
            <img src="{{ asset('./assets/images/perfum free.png') }}" class="p-3" alt="">
            <img src="{{ asset('./assets/images/silicon free.png') }}" class="p-3" alt="">
            <img src="{{ asset('./assets/images/sulfat free.png') }}" class="p-3" alt="">
        </div>
    </div>
    <img src="{{ asset('./assets/images/middle pic.png') }}" class="absolute w-2/4 inset-0 m-auto pt-7"
         alt="Your Image">
</section>


<!-- Blogs & Tips -->
<div class="mb-10 mt-10 flex-col text-green-950 text-center justify-center items-center"
     style="font-family: 'Italiana', sans-serif; font-weight: 400; font-style: normal;">
    <img class="m-auto" src="{{ asset('./assets/images/Star.png') }}" alt="">
    <h1 class="text-3xl">Products Highlight</h1>
    <h2 class="text-xl pt-4">Elevate your skincare routine with our top rated products</h2>
</div>

<div class="flex gap-5 justify-center items-center">
    <div class="w-36 h-65">
        <a href="/blog1"><img
                class="rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all transform duration-500 w-full  object-cover rounded-t-full"

                src="{{ asset('./assets/images/pic1.png') }}" alt=""/></a>
    </div>
    <div class="w-60 h-70">
        <a href="/blog2"><img
                class="rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all transform duration-500 w-full  object-cover rounded-t-full"
                src="{{ asset('./assets/images/pic2.png') }}" alt=""/></a>
    </div>
    <div class="w-80 h-90">
        <a href="/blog3"><img
                class="rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all transform duration-500 w-full object-cover rounded-t-full"
                src="{{ asset('./assets/images/pic5.png') }}" alt=""/></a>
    </div>
    <div class="w-60 h-70">
        <a href="/blog4"><img
                class="rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all transform duration-500 w-full  object-cover rounded-t-full"
                src="{{ asset('./assets/images/pic3.png') }}" alt=""/></a>
    </div>
    <div class="w-36 h-65">
        <a href="/blog5"><img
                class="rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all transform duration-500 w-full  object-cover rounded-t-full"
                src="{{ asset('./assets/images/pic4.png') }}" alt=""/></a>
    </div>
</div>

<section class="my-20 px-10">
    <div class="flex my-5 justify-between px-5">
        <div>
            <p class="text-3xl" style="font-family: 'Italiana', sans-serif; font-weight: 400; font-style: normal;">New
                Collection :</p>
        </div>
        <div>
            <a href="/All_products">
                <button type="button" class="text-green-950 rounded-full border border-green-950 py-2 px-6">
                    <div class="flex flex-row align-middle">
                        <span>All Collection</span>
                        <svg class="w-5 ml-2" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </button>
            </a>
        </div>
    </div>
    <div class="px-4">
        <div class="block md:flex justify-between md:-mx-2">
            @foreach($products as $product)
            <div class="w-full lg:w-1/3 md:mx-2 mb-4 md:mb-0">
                <div class="rounded-lg overflow-hidden shadow relative">
                    <a href="/Description/{{ $product->id }}">
                        <img class="h-56 w-full object-cover object-center"
                         src="{{ asset('storage/' . $product->image) }}" alt=""></a>
                    <div class="p-4 h-auto md:h-40 lg:h-48">
                        <div class="flex">
                            <a href="/Description/{{ $product->id }}"
                               class="block text-gray-800 hover:text-green-800 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                                {{ $product->name }}
                            </a>
                            <p class="ml-auto font-black text-gray-800">
                                ${{ $product->price }} &nbsp <span class="text-red-800 line-through">${{ $product->oldprice }}</span>
                            </p>
                        </div>
                        <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quidem blanditiis unde
                            asperiores?
                        </div>
                        <a href="/Description/{{ $product->id }}"> <button type="button"
                                class="my-5 w-full text-orange-900 border border-orange-700 focus:outline-none hover:bg-orange-100 focus:ring-4 focus:ring-orange-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                            Shop Now
                        </button>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section>
    <div class="lg:w-3/5 px-10">
        <p class="font-bold text-5xl mb-5 pl-5"
           style="font-family: 'Italiana', sans-serif; font-weight: 400; font-style: normal;">Benefits of using our
            products </p>
        <p class="pl-5">Experience radiant beauty with our products, crafted to nourish, rejuvenate, <br> and enhance
            your skin's health.
            Enjoy the benefits of glowing complexion, improved texture,<br> and a boost of confidence in every
            application</p>
    </div>
    <div class="container mx-auto mx-auto p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-3">
            <div class="rounded-lg p-4">
                <div class="px-1 py-4">
                    <div class="font-bold text-2xl mb-2"
                         style="font-family: 'Italiana', sans-serif; font-weight: 400; font-style: normal;">
                        100% Naturel
                    </div>
                    <p class="text-gray-700 text-base">
                        your skin glows with vitality and health something beautiful to me</p>
                </div>
                <div class="px-1 py-4">
                    <div class="font-bold text-2xl mb-2"
                         style="font-family: 'Italiana', sans-serif; font-weight: 400; font-style: normal;">
                        Healthy Skin
                    </div>
                    <p class="text-gray-700 text-base">
                        Relax and rejuvenate with our Health-Skin cream use to ease
                </div>
                <div class="px-1 py-4">
                    <div class="font-bold text-2xl mb-2"
                         style="font-family: 'Italiana', sans-serif; font-weight: 400; font-style: normal;">
                        100% Naturel
                    </div>
                    <p class="text-gray-700 text-base">
                        your skin glows with vitality and health something beautiful to me</p>
                </div>
                <div class="px-1 py-4">
                    <div class="font-bold text-2xl mb-2"
                         style="font-family: 'Italiana', sans-serif; font-weight: 400; font-style: normal;">
                        100% Naturel
                    </div>
                    <p class="text-gray-700 text-base">
                        your skin glows with vitality and health something beautiful to me</p>
                </div>
            </div>
            <div class="rounded-lg p-4">
                <div class="px-1 py-4">
                    <div class="font-bold text-2xl mb-2"
                         style="font-family: 'Italiana', sans-serif; font-weight: 400; font-style: normal;">
                        No Side Effects
                    </div>
                    <p class="text-gray-700 text-base">
                        Experience renewed confidence as your skin glows with vitality and healthy</p>
                </div>
                <div class="px-1 py-4">
                    <div class="font-bold text-2xl mb-2"
                         style="font-family: 'Italiana', sans-serif; font-weight: 400; font-style: normal;">
                        Fastest Refreshment
                    </div>
                    <p class="text-gray-700 text-base">
                        The heat from the stones penatrates deep into the muscles to improve </p>
                </div>
                <div class="px-1 py-4">
                    <div class="font-bold text-2xl mb-2"
                         style="font-family: 'Italiana', sans-serif; font-weight: 400; font-style: normal;">
                        100% Naturel
                    </div>
                    <p class="text-gray-700 text-base">
                        your skin glows with vitality and health something beautiful to me</p>
                </div>
                <div class="px-1 py-4">
                    <div class="font-bold text-2xl mb-2"
                         style="font-family: 'Italiana', sans-serif; font-weight: 400; font-style: normal;">
                        100% Naturel
                    </div>
                    <p class="text-gray-700 text-base">
                        your skin glows with vitality and health something beautiful to me</p>
                </div>
            </div>

            <div class="bg-gray-300 rounded-t-full pb-15">
                <img src="{{ asset('./assets/images/Benefit pic.png') }}"
                     alt="Image"
                     class="w-full rounded-md object-cover">
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-2">
            <div class="rounded-lg">
                <img src="{{ asset('./assets/images/Benefit2.png') }}"
                     alt="Image"
                     class="">
            </div>
            <div class="rounded-lg p-4 m-auto" style="padding-top: 1rem;">
                <p class="font-bold text-5xl mb-5 pl-5"
                   style="font-family: 'Italiana', sans-serif; font-weight: 400; font-style: normal;">What Our Client
                    Says </p>
                <p class="pl-5">I've struggled with acne-prone skin for years and l've tried countless products to try
                    and clear it up.
                    Nothing seemed to work until I found Hazelstore website l’ve struggled with acne-prone skin for
                    years and l've tried
                    countless products to try and clear it up. Nothing seemed to work until I found this skin care
                    website l've struggled with
                    acne-prone skin for years and I've tried countless products to try and clear it up. Nothing seemed
                    to work until I found
                    this skin care</p>
                <div class="flex mt-5 pl-5">
                    <div>
                        <img src="{{ asset('./assets/images/ana.jpg') }}" class="rounded-full w-10 h-10"/>
                    </div>
                    <div class="ml-5">
                        <p class="text-sm font-semibold">Hafas Elmoatassim Billah</p>
                        <p class="text-sm">Graphic Designer</p>
                        <div class="flex p-1 gap-1 text-orange-300">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-half"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <div class="max-w-screen md:w-3/4 mx-auto">
        @foreach ($reviews as $review)
            <div class="flex flex-row space-y-2 items-center justify-center h-full py-4 bg-gray-200 rounded-xl space-x-10">
                <div class="w-2/3">
                    <p class="w-full text-2xl font-semibold">{{ $review->name }}</p>
                    <p class="w-full pb-8 text-sm tracking-wide leading-tight">{{ $review->comment }}</p>
                </div>
                <div class="w-auto h-">
                    @if ($review->image)
                        <img class="flex-1 h-full rounded-lg" src="{{ asset('storage/' . $review->image) }}" />
                    @endif
                </div>
            </div>
        @endforeach
    </div>



@include('Partials.footer')

