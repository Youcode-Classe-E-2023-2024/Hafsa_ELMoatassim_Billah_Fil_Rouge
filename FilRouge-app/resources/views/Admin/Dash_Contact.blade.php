@include('Partials.layout')
<div>
    @include('Partials.dashnav')

    <main class="flex-1 overflow-x-hidden overflow-y-auto" style="background-color: #d4e6c8;">
        <div class="container px-6 py-8 mx-auto">
            <section class="grid grid-cols-3 gap-4 justify-center items-center px-2">
                <div class="wrapper max-w-xs bg-gray-50 rounded-b-md shadow-lg overflow-hidden">
                    <div class="p-3 space-y-3">
                        <h3 class="text-gray-700 font-bold text-md">
                           Hafsa elmoatassim Billah
                        </h3>
                        <p class="text-blue-700 font-semibold text-sm">
                           <u>Hafsa@gmail.com</u>
                        </p>
                        <p class="text-sm text-gray-900 leading-sm">
                            Bienvenido a la montaña de nepal un maravilloso lugar en el
                            que podras escalar y repirar aire limpio, serás acompoañado
                            por profesonales en alpinismo.
                        </p>
                    </div>
                    <button class="bg-teal-600 w-full flex justify-center py-2 text-white font-semibold transition duration-300 hover:bg-teal-500">
                        Contact The client
                    </button>
                </div>
            </section>
        </div>
    </main>
</div>
