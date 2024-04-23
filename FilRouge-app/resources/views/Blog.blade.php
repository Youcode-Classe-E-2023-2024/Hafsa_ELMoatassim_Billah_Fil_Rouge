@include('Partials.layout')
@include('Partials.Top_Bar')

@include('Partials.nav')

<div class="bg-[#C6D0BF] min-h-screen py-15 mt-10 px-10">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-x-10 xl-grid-cols-4 gap-y-10 gap-x-6">
        @foreach($blogs as $blog)
            <div class="container mx-auto shadow-lg rounded-lg max-w-md hover:shadow-2xl transition duration-300">
                <a href="/Blog_Description/{{ $blog->id }}" style="display: block; height: 200px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $blog->picture) }}" alt="{{ $blog->title }}" class="rounded-t-lg w-full h-full object-cover">
                </a>
                <div class="p-6 bg-white">
                    <h1 class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200 font-bold text-gray-900">
                        {{ $blog->title }}
                    </h1>
                    <p class="text-gray-700 my-2 hover-text-900" style="max-height: 3.2em; overflow: hidden;">
                        {{ $blog->content }}
                    </p>
                    <p class="text-green-700">
                        <a href="/Blog_Description/{{ $blog->id }}"><u>... read more</u></a>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>


@include('Partials.footer')
