@include('Partials.layout')
@include('Partials.Top_Bar')

@include('Partials.nav')
<!-- component -->
<div class="max-w-screen-xl mx-auto">
    <main class="mt-10">
        <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 34em;">
            <div class="absolute left-0 bottom-0 w-full h-full z-10"
                 style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
            <img src="{{ asset('storage/' . $blog->picture) }}" alt="{{ $blog->title }}" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
            <div class="p-4 absolute bottom-0 left-0 z-20">
                <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                    {{ $blog->title }}
                </h2>
            </div>
        </div>

        <div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
            <p class="pb-6">
                {{ $blog->content }}
            </p>

        </div>
    </main>
</div>
@include('Partials.footer')
