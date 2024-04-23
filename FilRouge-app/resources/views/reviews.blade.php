@include('Partials.layout')
@include('Partials.Top_Bar')

@include('Partials.nav')

<!-- component -->
<main class="w-screen mt-10 flex justify-center items-center dark:bg-gray-900">
    <div class="max-w-7xl dark:bg-gray-950 dark:text-white">
        <form class="w-full bg-white p-4 rounded shadow-md" action="/submit-comment" method="post">
            <h2 class="text-xl mb-4 tracking-wider font-lighter text-gray-900 dark:text-gray-200">Leave a Comment</h2>
            <p class="text-gray-600 mb-4">Your email address will not be published. Required fields are marked *</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                <div class="mb-4 col-span-1 md:col-span-3">
                  <textarea
                      id="comment"
                      name="comment"
                      class="w-full bg-green-50 px-3 py-2 dark:bg-gray-900 rounded-sm border dark:border-none border-gray-300 focus:outline-none border-solid focus:border-dashed resize-none"
                      placeholder="Type Comment...*"
                      rows="5" required>
                  </textarea>
                </div>

                <div class="mb-4">
                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="w-full bg-green-50 px-3 py-2 dark:bg-gray-900 rounded-sm border dark:border-none border-gray-300 focus:outline-none border-solid focus:border-dashed"
                        placeholder="Name*"
                        required/>
                </div>

                <div class="mb-4">
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="w-full bg-green-50 px-3 py-2 dark:bg-gray-900 rounded-sm border dark:border-none border-gray-300 focus:outline-none border-solid focus:border-dashed"
                        placeholder="Email*"
                        required/>
                </div>

                <div class="mb-4">
                    <input
                        type="text"
                        id="website"
                        name="website"
                        class="w-full bg-green-50 px-3 py-2 dark:bg-gray-900 rounded-sm border dark:border-none border-gray-300 focus:outline-none border-solid focus:border-dashed"
                        placeholder="Website"/>
                </div>

            </div>
            <div class="flex justify-end">
                <button
                    type="submit"
                    class="py-1 px-6 bg-green-950 text-white rounded-sm hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-800">
                    Post Review →
                </button>
            </div>
        </form>
    </div>
</main>
