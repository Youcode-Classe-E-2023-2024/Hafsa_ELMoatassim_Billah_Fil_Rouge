@include('Partials.layout')
@include('Partials.Top_Bar')
@include('Partials.nav')

<div class="w-full text-center">
    <div class="m-5 relative mx-auto text-gray-600">
        <input class="border-2 border-gray-300 bg-gray-100 h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
               type="search" id="searchInput" name="search" placeholder="Search">
    </div>
    {{-- Search results will replace the initial products directly in the product grid --}}
    <div id="productGrid" class="grid w-full sm:grid-cols-3 xl:grid-cols-3 gap-6">
        {{-- Initial products will be displayed here --}}
        @foreach($products as $product)
            <div class="relative flex flex-col rounded-xl aspect-w-1 aspect-h-1 product">
                <div class="h-auto overflow-hidden">
                    <div class="shadow-gray-500/20 relative mx-4 mt-4 h-70 overflow-hidden rounded-xl bg-clip-border text-gray-700 shadow-lg">
                        <a href="/Description/{{ $product->id }}"><img src="{{  asset('storage/' . $product->image) }}" alt="{{ $product->name }}"></a>
                    </div>
                </div>
                <div class="pt-5 text-center">
                    <h3 class="mb-2 font-medium">{{ $product->title }}</h3>
                    <div class="flex justify-between items-center">
                        <p class="w-full text-center text-gray-900">{{ $product->price }}$
                            <span class="text-red-900 line-through">{{ $product->oldprice }}$</span>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('Partials.footer')

<script>
    $(document).ready(function() {
        $('#searchInput').on('keyup', function() {
            var searchTerm = $(this).val().trim();

            $.ajax({
                url: '/search',
                method: 'GET',
                data: { term: searchTerm },
                success: function(response) {
                    $('#productGrid').html(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>
