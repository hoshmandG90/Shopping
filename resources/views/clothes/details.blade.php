<div>

    @section('title','Details Clothes')


    <div class="mt-20">

        <div class="mt-10 mb-10">




            <div class="  px-4 sm:px-6 lg:px-8">
                <div class="flex items-center space-x-2 text-gray-400 text-sm">
                    <a href="{{ route('welcome') }}" class="hover:underline hover:text-blue-600">Home</a>
                    <span>
                        <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <a href="{{ route('Clothes') }}" class="hover:underline hover:text-blue-600">Clothes</a>
                    <span>
                        <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <span>Details</span>
                </div>
            </div>

        </div>



        <div class="py-6">

            <!-- ./ Breadcrumbs -->

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
                <div class="flex flex-col md:flex-row -mx-4">
                    <div class="md:flex-1 px-4">
                        <div>
                            <div class=" mb-40 rounded-lg bg-gray-100 mb-4">
                                <div class=" rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                                    <img src="/Uploads/Electronics/{{ $clothes->image }}" role="img"
                                        class="img-fluid  img-responsive"
                                        class="rounded-lg  object-cover h-full w-full shadow-md" />
                                </div>


                            </div>

                            <div class="flex -mx-2 mb-4">
                                <template x-for="i in 4">
                                    <div class="flex-1 px-2">
                                        <button x-on:click="image = i"
                                            :class="{ 'ring-2 ring-indigo-300 ring-inset': image === i }"
                                            class="focus:outline-none w-full rounded-lg h-24 md:h-32 bg-gray-100 flex items-center justify-center">
                                            <span x-text="i" class="text-2xl"></span>
                                        </button>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                    <div class="md:flex-1 px-4">
                        <h2 class="mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">
                            {{ $clothes->excerpt }}.</h2>
                        <p class="text-gray-500 text-sm capitalize"><a href="#"
                                class="text-indigo-600 hover:underline">Brand </a> {{ $clothes->brand }}</p>

                        <p class="text-gray-500 text-sm uppercase"><a href="#"
                                class="text-indigo-600 hover:underline">Location </a> {{ $clothes->location }}
                            <span>DELIVERY TIME: ERBIL 24 HOURS</span> </p>


                        <div class="flex items-center space-x-4 my-4">

                            <div class="flex-1">
                                <p class="text-green-500 text-xl font-semibold">Save
                                    {{ number_format($clothes->price,0,'.','.') }} USD</p>
                                <p class="text-gray-400 text-sm">Inclusive of all Taxes.</p>
                            </div>
                        </div>

                        <p class="text-gray-500">
                            web page on an eCommerce site that presents the description of a specific product in view.
                            The details displayed often include size, color, price, shipping information, reviews, and
                            other relevant.</p>

                        @auth
                        <form wire:submit.prevent="addToCart" class="flex py-4 space-x-4">
                            <div class="relative">
                                <div
                                    class="text-center left-0 pt-2 right-0 absolute block text-xs uppercase text-gray-400 tracking-wide font-semibold">
                                    Qty</div>
                                <select wire:model.defer="quantity"
                                    class="cursor-pointer appearance-none rounded-xl border border-gray-200 pl-4 pr-8 h-14 flex items-end pb-1">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>

                                <svg class="w-5 h-5 text-gray-400 absolute right-0 bottom-0 mb-2 mr-2"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                </svg>
                            </div>

                            <button type="submit"
                                class="h-14 px-6 py-2 font-semibold rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white">
                                Add to Cart
                            </button>
                        </form>
                        @endauth

                    </div>
                </div>
            </div>
        </div>


    </div>

</div>
