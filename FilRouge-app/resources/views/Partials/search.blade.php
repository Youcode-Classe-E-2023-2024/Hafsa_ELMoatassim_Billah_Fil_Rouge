@if($products)
    @foreach($products as $product)
        <div class="relative flex flex-col rounded-xl aspect-w-1 aspect-h-1">
            <div class="h-auto overflow-hidden">
                <div
                    class="shadow-gray-500/20 relative mx-4 mt-4 h-70 overflow-hidden rounded-xl bg-clip-border text-gray-700 shadow-lg">
                    <a href="/Description/{{ $product->id }}"><img src="{{  asset('storage/' . $product->image) }}"
                                                                   alt="{{ $product->name }}"></a>
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
@endif
