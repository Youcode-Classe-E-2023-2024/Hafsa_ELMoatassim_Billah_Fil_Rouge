<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>


@include('Partials.layout')
@include('Partials.Top_Bar')

@include('Partials.nav')

<!-- component -->
<main class="w-screen mt-10 flex justify-center items-center dark:bg-gray-900">
    <div class="max-w-7xl dark:bg-gray-950 dark:text-white">
        <form class="w-full bg-white p-4 rounded shadow-md" action="{{ route('submit.comment') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h2 class="text-xl mb-4 tracking-wider font-lighter text-gray-900 dark:text-gray-200">Leave a Comment</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                <div class="mb-4">
                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="w-full bg-green-50 px-3 py-2 dark:bg-gray-900 rounded-sm border dark:border-none border-gray-300 focus:outline-none border-solid focus:border-dashed"
                        placeholder="Users Name*"
                        required/>
                </div>
                <div class="mb-4 col-span-1 md:col-span-3">
                  <textarea
                      id="comment"
                      name="comment"
                      class="w-full bg-green-50 px-3 py-2 dark:bg-gray-900 rounded-sm border dark:border-none border-gray-300 focus:outline-none border-solid focus:border-dashed resize-none"
                      placeholder="Type Comment...*"
                      rows="5" required>
                  </textarea>
                </div>
                <div class="mb-4 col-span-1 md:col-span-3">
                  <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                         name="image" id="multiple_files" type="file" multiple>
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

