@include('Components.layout')

<!-- Blogs & Tips -->
<div class="mb-10 mt-10 flex-col text-green-950 text-center justify-center items-center"
     style="font-family: 'Italiana', sans-serif; font-weight: 400; font-style: normal;">
    <img class="m-auto" src="{{ asset('./assets/images/Star.png') }}" alt="">
    <h1 class="text-3xl">Products Highlight</h1>
    <h2 class="text-xl pt-4">Elevate your skincare routine with our top rated products</h2>
</div>

<div class="flex gap-5 justify-center items-center">
    <div class="w-36 h-65">
        <img
            class="rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all transform duration-500 w-full  object-cover rounded-t-full"

            src="{{ asset('./assets/images/pic1.png') }}" alt=""/>
    </div>
    <div class="w-60 h-70">
        <img
            class="rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all transform duration-500 w-full  object-cover rounded-t-full"
            src="{{ asset('./assets/images/pic2.png') }}" alt=""/>
    </div>
    <div class="w-80 h-90">
        <img
            class="rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all transform duration-500 w-full object-cover rounded-t-full"
            src="{{ asset('./assets/images/pic5.png') }}" alt=""/>
    </div>
    <div class="w-60 h-70">
        <img
            class="rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all transform duration-500 w-full  object-cover rounded-t-full"
            src="{{ asset('./assets/images/pic3.png') }}" alt=""/>
    </div>
    <div class="w-36 h-65">
        <img
            class="rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all transform duration-500 w-full  object-cover rounded-t-full"
            src="{{ asset('./assets/images/pic4.png') }}" alt=""/>
    </div>
</div>

<section class="my-20 px-10">
    <div class="flex my-5 justify-between px-5">
        <div>
            <p class="text-3xl" style="font-family: 'Italiana', sans-serif; font-weight: 400; font-style: normal;">New Collection :</p>
        </div>
        <div>
            <button type="button" class="text-green-950 rounded-full border border-green-950 py-2 px-6">
                <div class="flex flex-row align-middle">
                    <span>All Collection</span>
                    <svg class="w-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </div>
            </button>
        </div>
    </div>
    <div class="px-4">
        <div class="block md:flex justify-between md:-mx-2">
            <div class="w-full lg:w-1/3 md:mx-2 mb-4 md:mb-0">
                <div class="rounded-lg overflow-hidden shadow relative">
                    <img class="h-56 w-full object-cover object-center"
                         src="{{ asset('./assets/images/Rectangle 46.png') }}" alt="">
                    <div class="p-4 h-auto md:h-40 lg:h-48">
                        <div class="flex">
                            <a href="/Description"
                               class="block text-gray-800 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                                Face Cream
                            </a>
                            <p class="ml-auto font-black text-gray-800">
                                $25 &nbsp <span class="text-red-800 line-through">30$</span>
                            </p>
                        </div>
                        <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quidem blanditiis unde
                            asperiores?
                        </div>
                        <button type="button"
                                class="my-5 w-full text-orange-900 border border-orange-700 focus:outline-none hover:bg-orange-100 focus:ring-4 focus:ring-orange-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                            Light
                        </button>

                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/3 md:mx-2 mb-4 md:mb-0">
                <div class="rounded-lg overflow-hidden shadow relative">
                    <img class="h-56 w-full object-cover object-center"
                         src="{{ asset('./assets/images/Rectangle 45.png') }}" alt="">
                    <div class="p-4 h-auto md:h-40 lg:h-48">
                        <div class="flex">
                            <a href="/Description"
                               class="block text-gray-800 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                                Face Cream
                            </a>
                            <p class="ml-auto font-black text-gray-800">
                                $25 &nbsp <span class="text-red-800 line-through">30$</span>
                            </p>
                        </div>
                        <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quidem blanditiis unde
                            asperiores?
                        </div>
                        <button type="button"
                                class="my-5 w-full text-orange-900 border border-orange-700 focus:outline-none hover:bg-orange-100 focus:ring-4 focus:ring-orange-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                            Light
                        </button>

                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/3 md:mx-2 mb-4 md:mb-0">
                <div class="rounded-lg overflow-hidden shadow relative">
                    <img class="h-56 w-full object-cover object-center"
                         src="{{ asset('./assets/images/Rectangle 47.png') }}" alt="">
                    <div class="p-4 h-auto md:h-40 lg:h-48">
                        <div class="flex">
                            <a href="/Description"
                               class="block text-gray-800 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                                Face Cream
                            </a>
                            <p class="ml-auto font-black text-gray-800">
                                $25 &nbsp <span class="text-red-800 line-through">30$</span>
                            </p>
                        </div>
                        <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quidem blanditiis unde
                            asperiores?
                        </div>
                        <button type="button"
                                class="my-5 w-full text-orange-900 border border-orange-700 focus:outline-none hover:bg-orange-100 focus:ring-4 focus:ring-orange-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                            Light
                        </button>

                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/3 md:mx-2 mb-4 md:mb-0">
                <div class="rounded-lg overflow-hidden shadow relative">
                    <img class="h-56 w-full object-cover object-center"
                         src="{{ asset('./assets/images/Rectangle 44.png') }}" alt="">
                    <div class="p-4 h-auto md:h-40 lg:h-48">
                        <div class="flex">
                            <a href="/Description"
                               class="block text-gray-800 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                                Face Cream
                            </a>
                            <p class="ml-auto font-black text-gray-800">
                                $25 &nbsp <span class="text-red-800 line-through">30$</span>
                            </p>
                        </div>
                        <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quidem blanditiis unde
                            asperiores?
                        </div>
                        <button type="button"
                                class="my-5 w-full text-orange-900 border border-orange-700 focus:outline-none hover:bg-orange-100 focus:ring-4 focus:ring-orange-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                            Light
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="lg:w-4/5 px-10">
    <p class="font-bold text-5xl mb-5 pl-5" style="font-family: 'Italiana', sans-serif; font-weight: 400; font-style: normal;">Benifits of using our products </p>
    <p class="pl-5">Experience radiant beauty with our products, crafted to nourish, rejuvenate, <br> and enhance your skin's health.
       Enjoy the benefits of glowing complexion, improved texture,<br> and a boost of confidence in every application</p>
</div>
    <div class="container mx-auto mx-auto p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-3">
            <div class="rounded-lg p-4">
                <div class="px-1 py-4">
                    <div class="font-bold text-xl mb-2">100% Naturel</div>
                    <p class="text-gray-700 text-base">
                        your skin glows with vitality and health something beautiful to me</p>
                </div>
                <div class="px-1 py-4">
                    <div class="font-bold text-xl mb-2">Healthy Skin</div>
                    <p class="text-gray-700 text-base">
                        Relax and rejuvenate with our Health-Skin cream use to ease </div>
            </div>
            <div class="rounded-lg p-4">
                <div class="px-1 py-4">
                    <div class="font-bold text-xl mb-2">No Side Effects</div>
                    <p class="text-gray-700 text-base">
                        Experience renewed confidence as your skin glows with vitality and healthy</p>
                </div>
                <div class="px-1 py-4">
                    <div class="font-bold text-xl mb-2">Fastest Refreshment</div>
                    <p class="text-gray-700 text-base">
                        The heat from the stones penatrates deep into the muscles to improve </p>
                </div>
            </div>
            <div class="rounded-lg p-4">
                <div class="px-1 py-4">
                    <div class="font-bold text-xl mb-2">Blog Title</div>
                    <p class="text-gray-700 text-base">
                        This is a simple blog card example using Tailwind CSS. You can replace this text with your own blog content.
                    </p>
                </div>
                <div class="px-1 py-4">
                    <a href="#" class="text-blue-500 hover:underline">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

