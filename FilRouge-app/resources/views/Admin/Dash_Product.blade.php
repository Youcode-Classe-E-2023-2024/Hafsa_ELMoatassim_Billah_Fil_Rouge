<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

@include('Partials.layout')
<div>
    @include('Partials.dashnav')

    <main class="flex-1 overflow-x-hidden overflow-y-auto" style="background-color: #d4e6c8;">
        <div class="container px-6 py-8 mx-auto">
            <h3 class="text-3xl font-medium text-green-900 pb-5">Products</h3>
            <div class="flex">
                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                        class="block text-white mr-5 bg-green-900 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                        type="button">
                    Add a Product
                </button>

                <button data-modal-target="crud-modal2" data-modal-toggle="crud-modal2"
                        class="block text-white bg-green-900 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                        type="button">
                    Add a Category
                </button>
            </div>

            <div class="mt-8"></div>
            <div class="grid grid-cols mt-8">
                <div class="py-2 mb-10 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div
                        class="text-center min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full text-center">
                            <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 text-start text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Title
                                </th>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Price
                                </th>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Category
                                </th>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Quantity
                                </th>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Manage
                                </th>
                            </tr>
                            </thead>

                            <tbody class="bg-white">

                            @foreach($products as $product)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">

                                            <div class="ml-4">
                                                <div
                                                    class="text-sm font-medium leading-5 text-gray-900">{{ $product->title }}</div>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">{{ $product->price }}</div>
                                    </td>

                                    <td
                                        class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                        @foreach($categories as $category)
                                            @if($category->id==$product->category)
                                                {{ $category->name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td
                                        class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                        {{ $product->product_nbr }}
                                    </td>
                                    <td class="flex justify-between px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm font-medium">
                                       <!-- delete-->
                                        <form action="{{ route('products.softDelete', ['id' => $product->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-700 hover:text-red-900">Delete</button>
                                        </form>

                                        <a href="#" class="text-blue-700 hover:text-blue-900">Edit</a>
                                    </td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div
                        class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full">
                            <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Category
                                </th>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Operation
                                </th>
                            </tr>
                            </thead>

                            <tbody class="bg-white">

                            @foreach($categories as $category)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">{{ $category->name }}</div>
                                    </td>
                                    <td class="px-6 border-b border-gray-200">
                                        <form action="{{ route('delete.category', $category->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-success text-red-500">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="crud-modal" tabindex="-1" aria-hidden="true"
                 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Create New Product
                            </h3>
                            <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="crud-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>


                        <!-- Modal body -->
                        <form class="p-4 md:p-5" action="{{ route('Admin.Dash_Product') }}"
                              method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="name"
                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                    <input type="text" name="title" id="title"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                           placeholder="Enter Title" required>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="price"
                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                    <input type="number" name="price" id="price"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                           placeholder="Enter price" required>
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="quantity"
                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                                    <input type="number" name="product_nbr" id="quantity"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                           placeholder="Quantity" required>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="category"
                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                    <select id="category" name="category"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option selected disabled>Select category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-span-2">
                                    <label for="description"
                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                        Description</label>
                                    <textarea id="description" name="description" rows="4"
                                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                              placeholder="Write product description here"></textarea>
                                </div>
                                <div class="col-span-2">
                                    <label for="file_input"
                                           class="block mb-2 text-sm font-medium text-green-900 dark:text-white">Upload
                                        File</label>
                                    <input
                                        class="block w-full text-sm text-green-900 border border-gray-300 rounded-lg cursor-pointer bg-green-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="file_input" name="image" type="file">
                                </div>
                            </div>
                            <button type="submit"
                                    class="text-white inline-flex items-center bg-green-900 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Add new product
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div id="crud-modal2" tabindex="-1" aria-hidden="true"
                 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Create New Category
                            </h3>
                            <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="crud-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>

                        <!-- Modal body -->
                        <form action="{{ route('add.category') }}" class="p-4 md:p-5" method="POST">
                            @csrf
                            <div class="grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2">
                                    <input type="text" name="name" id="name"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                           placeholder="Type product name" required="">
                                </div>
                            </div>
                            <button type="submit"
                                    class="text-white inline-flex items-center bg-green-900 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Add new category
                            </button>
                        </form>

                    </div>
                </div>
            </div>


        </div>

