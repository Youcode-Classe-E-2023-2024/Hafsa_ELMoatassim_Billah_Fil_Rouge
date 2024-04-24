@include('Partials.layout')
<div>
    @include('Partials.dashnav')

    <main class="flex-1 overflow-x-hidden overflow-y-auto" style="background-color: #d4e6c8;">
        <div class="container px-6 py-8 mx-auto">
            <h3 class="text-3xl font-medium text-green-900 mb-5">Dashboard</h3>
            <section class="text-gray-600 body-font">
                <div class="container px-5 mx-auto">
                    <div class="grid grid-cols-3 -m-4 text-center">
                        <div class="p-4">
                            <a href="/dashboard"><div class="bg-green-900 rounded-lg p-2 xl:p-6">
                                <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">{{ $totalUsers }}</h2>
                                <p class="leading-relaxed text-gray-100 font-bold">Users</p>
                            </div></a>
                        </div>
                        <div class="p-4">
                            <a href="/Dash_Product"><div class="bg-green-900 rounded-lg p-2 xl:p-6">
                                <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">{{ $totalProducts }}</h2>
                                <p class="leading-relaxed text-gray-100 font-bold">Products</p>
                            </div></a>
                        </div>
                        <div class="p-4">
                            <a href="/Dash_Contact"><div class="bg-green-900 rounded-lg p-2 xl:p-6">
                                <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">{{ $totalContacts }}</h2>
                                <p class="leading-relaxed text-gray-100 font-bold">Contact Form</p>
                            </div></a>
                        </div>
                    </div>
                </div>
            </section>

            <div class="mt-8"></div>

            <h3 class="text-xl font-medium text-green-900">Users</h3>
            <div class="flex flex-col mt-8">
                <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div
                        class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full">
                            <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Name
                                </th>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Email
                                </th>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Engagement Date
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                            </tr>
                            </thead>

                            <tbody class="bg-white">
                            @foreach($activeUsers as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="flex items-center">

                                        <div class="ml-4">
                                            <div class="text-sm font-medium leading-5 text-gray-900">{{ $user->name }}</div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">{{ $user->email }}</div>
                                </td>


                                <td
                                    class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                    {{ $user->created_at }}
                                </td>

                                <td
                                    class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                    <a href="#" class="text-red-700 hover:text-red-900">
                                        <form action="{{ route('ban.user', ['user' => $user->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Ban User</button>
                                        </form>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="mt-8"></div>

            <h3 class="text-xl font-medium text-green-900">Banned Users</h3>
            <div class="flex flex-col mt-8">
                <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div
                        class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full">
                            <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Name
                                </th>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Email
                                </th>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Engagement Date
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                            </tr>
                            </thead>

                            <tbody class="bg-white">
                            @foreach($bannedUsers as $user)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">

                                            <div class="ml-4">
                                                <div class="text-sm font-medium leading-5 text-gray-900">{{ $user->name }}</div>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">{{ $user->email }}</div>
                                    </td>


                                    <td
                                        class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                        {{ $user->created_at }}
                                    </td>

                                    <td
                                        class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                        <a href="#" class="text-green-700 hover:text-green-900">
                                            <form action="{{ route('recover.user', ['user' => $user->id]) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-success">Recover</button>
                                            </form>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>
</div>
</div>
