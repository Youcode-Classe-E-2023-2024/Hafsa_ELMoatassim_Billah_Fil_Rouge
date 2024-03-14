@include('layout')

<div class="bg-no-repeat bg-cover bg-center relative"
     style="background-image: url(https://images.pexels.com/photos/6713501/pexels-photo-6713501.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);">
    <div class="absolute bg-gradient-to-b from-green-500 to-green-400 opacity-35 inset-0 z-0"></div>
    <div class="min-h-screen sm:flex sm:flex-row mx-0 justify-center">
        <div class="flex-col flex  self-center p-10 sm:max-w-5xl xl:max-w-2xl  z-10">
            <div class="self-start hidden lg:flex flex-col  text-white">
                <img src="" class="mb-3">
                <h1 class="mb-3 font-bold text-5xl">Hi ? Welcome Back </h1>
                <p class="pr-3">Discover the rejuvenating power of green tea for you skin. Our carefully curated green
                    tea skincare products harness the
                    antioxidant-rich properties of this natural wonder, protecting your skin from external aggressors,
                    promoting your skin from external
                    aggressors, promoting hydration, and minimizing fine lines.
                </p>
            </div>
        </div>
        <div class="flex justify-center self-center  z-10">
            <div class="p-12 bg-white mx-auto rounded-2xl w-100 ">
                <div class="mb-4">
                    <h3 class="text-center font-semibold text-2xl text-gray-800">Regsiter </h3>
                </div>
                <div class="space-y-5">

                    <div class="space-y-2">
                        <label class="text-sm font-medium text-gray-700 tracking-wide">Name</label>
                        <input
                            class=" w-full text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400"
                            type="text" placeholder="mail@gmail.com">
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-medium text-gray-700 tracking-wide">Email</label>
                        <input
                            class=" w-full text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400"
                            type="email" placeholder="mail@gmail.com">
                    </div>

                    <div class="space-y-2">
                        <label class="mb-5 text-sm font-medium text-gray-700 tracking-wide">
                            Password
                        </label>
                        <input
                            class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400"
                            type="password" placeholder="Enter your password">
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" name="remember_me" type="checkbox"
                                   class="h-4 w-4 bg-blue-500 focus:ring-blue-400 border-gray-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-800">
                                Remember me
                            </label>
                        </div>
                        <div class="text-sm">
                            <a href="#" class="text-green-800 hover:text-green-500">
                                Forgot your password?
                            </a>
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                                class="w-full flex justify-center bg-green-900  hover:bg-green-800 text-gray-100 p-3 rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                            Register
                        </button>
                        <a href="login">
                            <button type="button"
                                    class="mt-5 w-full flex justify-center p-3 bg-green-900  hover:bg-green-800 rounded-full text-white tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                                Login
                            </button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
