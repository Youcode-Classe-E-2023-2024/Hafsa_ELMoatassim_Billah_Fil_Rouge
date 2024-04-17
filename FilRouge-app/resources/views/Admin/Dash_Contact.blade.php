@include('Partials.layout')
    <div>
        @include('Partials.dashnav')

        <main class="flex-1 overflow-x-hidden overflow-y-auto" style="background-color: #d4e6c8;">
            <div class="container px-6 py-8 mx-auto">
                <section class="grid grid-cols-3 gap-4 justify-center items-center px-2">
                    @foreach($contacts as $contact)
                        <div class="wrapper max-w-xs bg-gray-50 rounded-b-md shadow-lg overflow-hidden">
                            <div class="p-3 space-y-3">
                                <h3 class="text-gray-700 font-bold text-md">
                                    {{ $contact->first_name }} {{ $contact->last_name }}
                                </h3>
                                <p class="text-blue-700 font-semibold text-sm">
                                    <u>{{ $contact->email }}</u>
                                </p>
                                <p class="text-sm text-gray-900 leading-sm">
                                    {{ $contact->message }}
                                </p>
                            </div>
                            <button data-modal-target="crud-modal4" data-modal-toggle="crud-modal4" class="bg-green-900 w-full flex justify-center py-2 text-white font-semibold transition duration-300 hover:bg-green-800">
                                Contact The client
                            </button>
                        </div>

                        <!-- Contact the client -->
                        <div id="crud-modal4" tabindex="-1" aria-hidden="true"
                             class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal body -->
                                    <form action="" class="p-4 md:p-5" method="POST">
                                        @csrf
                                        <div class="col-span-2">
                                            <label for="description"
                                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                Reply The Client</label>
                                            <textarea id="Message" name="Message" rows="4"
                                                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                      placeholder="Write Your Message Here"></textarea>
                                        </div>
                                        <button type="submit"
                                                class="mt-5 text-white inline-flex items-center bg-green-900 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                            Reply
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </section>
            </div>
        </main>

    </div>
