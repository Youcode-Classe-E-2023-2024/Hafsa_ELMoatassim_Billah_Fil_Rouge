@include('Partials.layout')
@include('Partials.Top_Bar')
@include('Partials.nav')
@include('Partials.SearchBar')


<div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
    <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#00FF00] to-[#00FF00] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]"
         style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
</div>


<div class="mx-auto max-w-2xl text-center">
    <h2 class="text-3xl font-bold tracking-tight text-green-950 sm:text-4xl">Contact</h2>
</div>

<form action="{{ route('contact.store') }}" method="POST" class="mx-auto max-w-xl mt-10">
    @csrf
    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
        <div>
            <div class="mt-2.5">
                <input type="text" name="first_name" id="first-name" placeholder="First Name" autocomplete="given-name"
                       class="bg-transparent block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-green-500 ring-1 ring-inset ring-green-800 placeholder:text-gray-600 focus:green-400 sm:text-sm sm:leading-6">
            </div>
        </div>

        <div>
            <div class="mt-2.5">
                <input type="text" name="last_name" id="last-name" placeholder="Last Name" autocomplete="given-name"
                       class="bg-transparent block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-green-500 ring-1 ring-inset ring-green-800 placeholder:text-gray-600 focus:green-400 sm:text-sm sm:leading-6">
            </div>
        </div>

        <div class="sm:col-span-2">
            <div class="mt-2.5">
                <input type="email" name="email" id="email" placeholder="Email" autocomplete="email"
                       class="bg-transparent block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-green-500 ring-1 ring-inset ring-green-800 placeholder:text-gray-600 focus:green-400 sm:text-sm sm:leading-6">
            </div>
        </div>

        <div class="sm:col-span-2">
            <input type="tel" name="phone_number" id="phone-number" placeholder="Phone Number" autocomplete="tel"
                   class="bg-transparent block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-green-500 ring-1 ring-inset ring-green-800 placeholder:text-gray-600 focus:green-400 sm:text-sm sm:leading-6">
        </div>

        <div class="sm:col-span-2">
            <div class="mt-2.5">
                        <textarea name="message" id="message" placeholder="Message" rows="4"
                                  class="bg-transparent block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-green-500 ring-1 ring-inset ring-green-800 placeholder:text-gray-600 focus:green-400 sm:text-sm sm:leading-6">
                        </textarea>
            </div>
        </div>
    </div>

    <div class="mt-10">
        <button type="submit"
                class="block w-full rounded-md bg-green-900 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Let's talk
        </button>
    </div>
</form>
</div>
@include('Partials.footer')
