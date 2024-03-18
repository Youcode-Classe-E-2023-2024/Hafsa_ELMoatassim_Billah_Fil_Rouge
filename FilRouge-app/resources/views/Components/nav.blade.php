@include('Components.layout')

<div class="pt-5 w-full text-xs flex justify-around items-center">
    <div class="flex">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
             xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
             viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M8.64 4.737A7.97 7.97 0 0 1 12 4a7.997 7.997 0 0 1 6.933 4.006h-.738c-.65 0-1.177.25-1.177.9 0 .33 0 2.04-2.026 2.008-1.972 0-1.972-1.732-1.972-2.008 0-1.429-.787-1.65-1.752-1.923-.374-.105-.774-.218-1.166-.411-1.004-.497-1.347-1.183-1.461-1.835ZM6 4a10.06 10.06 0 0 0-2.812 3.27A9.956 9.956 0 0 0 2 12c0 5.289 4.106 9.619 9.304 9.976l.054.004a10.12 10.12 0 0 0 1.155.007h.002a10.024 10.024 0 0 0 1.5-.19 9.925 9.925 0 0 0 2.259-.754 10.041 10.041 0 0 0 4.987-5.263A9.917 9.917 0 0 0 22 12a10.025 10.025 0 0 0-.315-2.5A10.001 10.001 0 0 0 12 2a9.964 9.964 0 0 0-6 2Zm13.372 11.113a2.575 2.575 0 0 0-.75-.112h-.217A3.405 3.405 0 0 0 15 18.405v1.014a8.027 8.027 0 0 0 4.372-4.307ZM12.114 20H12A8 8 0 0 1 5.1 7.95c.95.541 1.421 1.537 1.835 2.415.209.441.403.853.637 1.162.54.712 1.063 1.019 1.591 1.328.52.305 1.047.613 1.6 1.316 1.44 1.825 1.419 4.366 1.35 5.828Z"
                  clip-rule="evenodd"/>
        </svg>
        <p class="ml-3 pt-1 font-serif">Worldwide shipping</p>
    </div>
    <img class="pr-28" src="{{ asset('./assets/images/Logo.png') }}" alt="logo">
    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
         viewBox="0 0 24 24">
        <path fill-rule="evenodd"
              d="M4 4a1 1 0 0 1 1-1h1.5a1 1 0 0 1 .979.796L7.939 6H19a1 1 0 0 1 .979 1.204l-1.25 6a1 1 0 0 1-.979.796H9.605l.208 1H17a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L5.686 5H5a1 1 0 0 1-1-1Z"
              clip-rule="evenodd"/>
    </svg>
</div>

<div>
    {{--                <div class="flex justify-around">--}}
    {{--                    <div class="flex justify-end ">--}}
    {{--                        <div class="flex whitespace-nowrap pt-1  mx-3justify-center space-x-1 "><a href="#"--}}
    {{--                                                                                                   class="text-gray-900 hover:text-gray-500"><span--}}
    {{--                                    class="sr-only">Facebook</span>--}}
    {{--                                <svg--}}
    {{--                                    class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">--}}
    {{--                                    <path fill-rule="evenodd"--}}
    {{--                                          d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"--}}
    {{--                                          clip-rule="evenodd"></path>--}}
    {{--                                </svg>--}}
    {{--                            </a><a href="#"--}}
    {{--                                   class="text-gray-900 hover:text-gray-500"><span class="sr-only">Instagram</span>--}}
    {{--                                <svg--}}
    {{--                                    class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">--}}
    {{--                                    <path fill-rule="evenodd"--}}
    {{--                                          d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"--}}
    {{--                                          clip-rule="evenodd"></path>--}}
    {{--                                </svg>--}}
    {{--                            </a><a href="#"--}}
    {{--                                   class="text-gray-900 hover:text-gray-500"><span class="sr-only">Twitter</span>--}}
    {{--                                <svg--}}
    {{--                                    class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">--}}
    {{--                                    <path--}}
    {{--                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">--}}
    {{--                                    </path>--}}
    {{--                                </svg>--}}
    {{--                            </a><a href="#"--}}
    {{--                                   class="text-gray-900 hover:text-gray-500"><span class="sr-only">GitHub</span>--}}
    {{--                                <svg--}}
    {{--                                    class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">--}}
    {{--                                    <path fill-rule="evenodd"--}}
    {{--                                          d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"--}}
    {{--                                          clip-rule="evenodd"></path>--}}
    {{--                                </svg>--}}
    {{--                            </a><a href="#"--}}
    {{--                                   class="text-gray-900 hover:text-gray-500"><span class="sr-only">Dribbble</span>--}}
    {{--                                <svg--}}
    {{--                                    class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">--}}
    {{--                                    <path fill-rule="evenodd"--}}
    {{--                                          d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"--}}
    {{--                                          clip-rule="evenodd"></path>--}}
    {{--                                </svg>--}}
    {{--                            </a></div>--}}

    {{--                    </div>--}}
    {{--                    <div class="-my-2 md:hidden">--}}
    {{--                        <button type="button"--}}
    {{--                                class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-900 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"--}}
    {{--                                aria-expanded="false"><span class="sr-only">Open menu</span>--}}
    {{--                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
    {{--                                 stroke="currentColor" aria-hidden="true">--}}
    {{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
    {{--                                      d="M4 6h16M4 12h16M4 18h16"></path>--}}
    {{--                            </svg>--}}
    {{--                        </button>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
</div>

<nav id="bar" class="flex justify-center ">
    <div class=" flex flex-col font-serif md:flex-row justify-center md:space-y-0 my-4 space-y-4 text-center text-green-950">
        <a href="/" class="mx-8 hover:text-green-900 active" aria-current="page"> Home </a>
        <a href="/All_products" class="mx-8 hover:text-green-900"> Products </a>
        <a href="/Contact" class="mx-8 hover:text-green-900"> Contact Us </a>
        <a href="/FAQ" class="mx-8 hover:text-green-900"> F.A.Q</a>
        <a href="#" class="mx-8 hover:text-green-900"> About Us </a>
    </div>
</nav>
</div>
