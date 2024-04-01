@include('Partials.layout')

<div>

    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-green-800">
        <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
             class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>

        <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
             class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform lg:translate-x-0 lg:static lg:inset-0"
             style="background-color: #485440;">

            <div class="flex items-center justify-center mt-8">
                <div class="flex items-center">
                    <svg fill="#8c9e80" height="50px" width="50px" version="1.1" id="Layer_1"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         viewBox="0 0 512.001 512.001" xml:space="preserve" stroke="#8c9e80"><g id="SVGRepo_bgCarrier"
                                                                                                stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <g>
                                    <path
                                            d="M400.278,367.668c18.455-17.355,33.987-38.867,45.786-63.322c16.156-33.489,24.644-71.784,24.644-110.747 c0-38.963-8.567-77.258-24.724-110.747c-15.857-32.866-38.655-60.429-65.901-79.708c-5.924-4.192-13.857-4.192-19.781,0 c-27.248,19.279-50.035,46.841-65.892,79.708c-16.156,33.489-24.698,71.784-24.698,110.747c0,3.265,0.081,6.523,0.201,9.777 c-2.809-1.624-5.639-3.217-8.514-4.742c-34.422-18.254-72.256-28.651-109.412-30.067c-36.458-1.384-71.49,5.826-101.287,20.866 c-6.48,3.271-10.192,10.271-9.264,17.471c4.266,33.104,17.942,66.146,39.55,95.553c22.017,29.964,51.848,55.45,86.27,73.704 s72.254,28.651,109.411,30.067c2.956,0.113,5.9,0.169,8.834,0.169c30.13,0,59.253-5.936,84.781-17.316 c28.406,15.556,46.607,45.512,46.607,78.287v27.515c0,9.454,7.664,17.118,17.118,17.118s17.118-7.664,17.118-17.118v-27.515 C451.124,427.482,431.658,390.617,400.278,367.668z M183.295,345.916c-54.931-29.13-94.489-78.529-105.786-131.071 c49.833-20.127,112.919-15.094,167.849,14.037c10.603,5.623,20.625,12.008,29.989,19.017c4.148,19.747,10.531,38.77,19.058,56.447 c1.376,2.853,2.823,5.651,4.304,8.422l-24.356-12.915c-8.352-4.429-18.714-1.248-23.143,7.104 c-4.429,8.353-1.249,18.714,7.104,23.143l69.973,37.107C282.87,378.056,230.123,370.749,183.295,345.916z M387.604,331.328 c0.001-35.134-0.203-81.485-0.239-89.197c-0.043-9.428-7.699-16.943-17.117-16.943c-0.026,0-0.054,0-0.08,0 c-9.454,0-17.083,7.645-17.04,17.099c0.124,27.157,0.237,62.941,0.237,89.718c-31.044-35.057-49.42-85.23-49.42-138.406 c0-62.177,25.109-120.269,66.236-154.866c41.125,34.596,66.236,92.688,66.236,154.866 C436.418,246.429,418.282,296.302,387.604,331.328z"></path>
                                </g>
                            </g>
                        </g></svg>

                    <span class="mx-2 text-2xl font-semibold text-white">HazalStore</span>
                </div>
            </div>

            <nav class="mt-10">
                <a class="flex items-center px-6 py-2 mt-4 text-gray-100 bg-gray-700 bg-opacity-25" href="#">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>

                    <span class="mx-3">Dashboard</span>
                </a>

                <a class="flex items-center px-6 py-2 mt-4 text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                   href="#">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                        </path>
                    </svg>

                    <span class="mx-3">UI Elements</span>
                </a>

                <a class="flex items-center px-6 py-2 mt-4 text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                   href="#">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                    </svg>

                    <span class="mx-3">Tables</span>
                </a>

                <a class="flex items-center px-6 py-2 mt-4 text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                   href="#">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                        </path>
                    </svg>

                    <span class="mx-3">Forms</span>
                </a>
            </nav>
        </div>

        <div class="flex flex-col flex-1 overflow-hidden">
            <header class="flex items-center justify-between px-6 py-4 border-b-4 border-green-900"
                    style="background-color: #d4e6c8;">
                <div class="flex items-center">
                    <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                        </svg>
                    </button>

                    <div class="relative mx-4 lg:mx-0">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                                <path
                                        d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                </path>
                            </svg>
                        </span>

                        <input class="w-32 pl-10 pr-4 rounded-md form-input sm:w-64 focus:border-indigo-600" type="text"
                               placeholder="Search">
                    </div>
                </div>

                <div class="flex items-center">
                    <div x-data="{ notificationOpen: false }" class="relative">
                        <button @click="notificationOpen = ! notificationOpen"
                                class="flex mx-4 text-gray-600 focus:outline-none">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                </path>
                            </svg>
                        </button>

                        <div x-show="notificationOpen" @click="notificationOpen = false"
                             class="fixed inset-0 z-10 w-full h-full" style="display: none;"></div>

                        <div x-show="notificationOpen"
                             class="absolute right-0 z-10 mt-2 overflow-hidden bg-white rounded-lg shadow-xl w-80"
                             style="width: 20rem; display: none;">
                            <a href="#"
                               class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                                <img class="object-cover w-8 h-8 mx-1 rounded-full"
                                     src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80"
                                     alt="avatar">
                                <p class="mx-2 text-sm">
                                    <span class="font-bold" href="#">Sara Salah</span> replied on the <span
                                            class="font-bold text-indigo-400" href="#">Upload Image</span> artical . 2m
                                </p>
                            </a>
                            <a href="#"
                               class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                                <img class="object-cover w-8 h-8 mx-1 rounded-full"
                                     src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80"
                                     alt="avatar">
                                <p class="mx-2 text-sm">
                                    <span class="font-bold" href="#">Slick Net</span> start following you . 45m
                                </p>
                            </a>
                            <a href="#"
                               class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                                <img class="object-cover w-8 h-8 mx-1 rounded-full"
                                     src="https://images.unsplash.com/photo-1450297350677-623de575f31c?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80"
                                     alt="avatar">
                                <p class="mx-2 text-sm">
                                    <span class="font-bold" href="#">Jane Doe</span> Like Your reply on <span
                                            class="font-bold text-indigo-400" href="#">Test with TDD</span> artical . 1h
                                </p>
                            </a>
                            <a href="#"
                               class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                                <img class="object-cover w-8 h-8 mx-1 rounded-full"
                                     src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=398&amp;q=80"
                                     alt="avatar">
                                <p class="mx-2 text-sm">
                                    <span class="font-bold" href="#">Abigail Bennett</span> start following you . 3h
                                </p>
                            </a>
                        </div>
                    </div>

                    <div x-data="{ dropdownOpen: false }" class="relative">
                        <button @click="dropdownOpen = ! dropdownOpen"
                                class="relative block w-8 h-8 overflow-hidden rounded-full shadow focus:outline-none">
                            <img class="object-cover w-full h-full"
                                 src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=296&amp;q=80"
                                 alt="Your avatar">
                        </button>

                        <div x-show="dropdownOpen" @click="dropdownOpen = false"
                             class="fixed inset-0 z-10 w-full h-full"
                             style="display: none;"></div>

                        <div x-show="dropdownOpen"
                             class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl"
                             style="display: none;">
                            <a href="#"
                               class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>
                            <a href="#"
                               class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Products</a>
                            <a href="#"
                               class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
                        </div>
                    </div>
                </div>
            </header>
