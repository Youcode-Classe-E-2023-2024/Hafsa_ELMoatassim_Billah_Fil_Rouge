@include('Components.layout')


<div class="mb-10 mt-10 flex-col text-green-950 text-center justify-center items-center" style="font-family: 'Italiana', sans-serif; font-weight: 400; font-style: normal;">
    <img class="m-auto" src="{{ asset('./assets/images/Star.png') }}" alt="">
    <h1 class="font-bold text-3xl">Products Highlight</h1>
    <h2 class="text-xl font-bold pt-4">Elevate your skincare routine with our top rated products</h2>
</div>

<div class="flex gap-5 justify-center items-center">
    <div class="w-36 h-65">
        <img
            class="rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all transform duration-500 w-full  object-cover rounded-t-full"

            src="{{ asset('./assets/images/1.jpeg') }}" alt=""/>
    </div>
    <div class="w-60 h-70">
        <img
            class="rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all transform duration-500 w-full  object-cover rounded-t-full"
            src="{{ asset('./assets/images/2.jpeg') }}" alt=""/>
    </div>
    <div class="w-80 h-90">
        <img
            class="rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all transform duration-500 w-full object-cover rounded-t-full"
            src="{{ asset('./assets/images/3.webp') }}" alt=""/>
    </div>
    <div class="w-60 h-70">
        <img
            class="rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all transform duration-500 w-full  object-cover rounded-t-full"
            src="{{ asset('./assets/images/4.webp') }}" alt=""/>
    </div>
    <div class="w-36 h-65">
        <img
            class="rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all transform duration-500 w-full  object-cover rounded-t-full"
            src="{{ asset('./assets/images/5.jpg') }}" alt=""/>
    </div>
</div>
