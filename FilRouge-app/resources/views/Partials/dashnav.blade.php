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
                <a class="flex items-center px-6 py-2 mt-4 text-gray-100 bg-opacity-25" href="/dashboard">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                        </path>
                    </svg>

                    <span class="mx-3">Users</span>
                </a>

                <a class="flex items-center px-6 py-2 mt-4 text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                   href="/Dash_Product">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                    </svg>

                    <span class="mx-3">Products</span>
                </a>

                <a class="flex items-center px-6 py-2 mt-4 text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                   href="/Dash_Contact">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                        </path>
                    </svg>

                    <span class="mx-3">Contact</span>
                </a>

                <a class="flex items-center px-6 py-2 mt-4 text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                   href="/">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                    </svg>

                    <span class="mx-3">Home</span>
                </a>
            </nav>
        </div>

