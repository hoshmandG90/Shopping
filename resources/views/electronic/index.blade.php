<div>


    @section('title','Electronic')

    <!-- Registration Form -->
    <section class="flex flex-col  md:flex-row  items-center mb-12">

        <div class="bg-indigo-600  lg:block w-full md:w-1/2 xl:w-2/3 ">
            <img src="https://images.pexels.com/photos/777001/pexels-photo-777001.jpeg?cs=srgb&dl=pexels-xxss-is-back-777001.jpg&fm=jpg" alt=""
                class="w-full h-full object-cover img-fluid img-responsive rounded-lg">
        </div>
        <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
          flex items-center justify-center">

            <div class="w-full h-100 mt-40 ">
                <h1 class="text-xl md:text-2xl font-semibold font-bold leading-tight mt-12 text-gray-400 uppercase ">
                    create new Electronic</h1>


                <form wire:submit.prevent="SaveElectronic" class="mt-6 mb-18">
                    @csrf
                    <div>
                        <label class="block text-gray-700 mb-2 uppercase" style="letter-spacing: 1px">title</label>
                        <input wire:model.defer="title" type="text" placeholder="Enter title"
                            class=" w-full pl-6 pr-2 text-gray-400 py-2 my-2 bg-gray-200 @error('title') border border-red-400
                             @enderror focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple" autofocus>

                        @error('title')
                        <small class="text-red-400 mt-2 mb-1  font-semibold">{{$message}}</small>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-gray-700 uppercase " style="letter-spacing: 1px">excerpt </label>
                        <input wire:model.defer="excerpt" type="text" placeholder="Enter excerpt"
                            class="w-full pl-6 pr-2 text-gray-400 py-2 my-2 bg-gray-200  @error('excerpt') border border-red-400 @enderror focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple"
                            autofocus autocomplete>
                        @error('excerpt')
                        <small class="text-red-400 mt-2 mb-1  font-semibold">{{$message}}</small>
                        @enderror
                    </div>


                    <div class="mt-4">
                        <label class="block text-gray-700 uppercase">location</label>
                        <input wire:model.defer="location" type="text" placeholder="Enter location"
                            class="w-full pl-6 pr-2 text-gray-400 py-3 my-2 bg-gray-200  @error('location') border border-red-400 @enderror focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple"
                            autocomplete>
                        @error('location')
                        <small class="text-red-400 mt-2 mb-1  font-semibold">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700 uppercase">brand</label>
                        <input wire:model.defer="brand" type="text" placeholder="Enter name brand"
                            class="w-full pl-6 pr-2 text-gray-400 py-3 my-2 bg-gray-200 border-0 focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple"
                            autocomplete>
                        @error('brand')
                        <small class="text-red-400 mt-2 mb-1  font-semibold">{{$message}}</small>
                        @enderror
                    </div>


                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0  left-0 pl-3 flex items-center ">
                                <span class="text-gray-500 sm:text-sm">$</span>
                            </div>
                            <input type="number" wire:model.defer="price" id="price"
                                class="w-full pl-6 pr-2 text-gray-400 py-3 my-2 bg-gray-200 border-0 focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple "
                                placeholder="0.00">

                                @error('price')
                                <small class="text-red-400 mt-2 mb-1  font-semibold">{{$message}}</small>
                                @enderror
                         
                        </div>
                    </div>


                    <hr class="my-6 border-gray-300 w-full">


                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Upload
                            Photo</label>
                        <div class='flex items-center justify-center w-full'>
                            <label
                                class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                                <div class='flex flex-col items-center justify-center pt-7'>
                                    <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    <p
                                        class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>
                                        Select a photo</p>
                                    <input wire:model="image" type="file" class="hidden">




                                </div>




                            </label>

                        </div>
                        @error('image')
                        <small class="text-red-400 mt-2 mb-1  font-semibold">{{$message}}</small>

                        @enderror

                        <div class="mt-4 mb-4">
                            @if ($image)


                            image preview:
                            <img src="{{ $image->temporaryUrl() }}" alt=""
                                class="shadow-sm rounded-full mt-3 w-24 h-24 object-cover" alt="">
                            @endif
                        </div>








                    </div>

                    <button type="submit" class="w-full block uppercase bg-indigo-500 hover:bg-green-400 focus:bg-green-400 text-white font-semibold rounded-lg
                px-4 py-3 mt-6">published post</button>
                </form>

         

            </div>
        </div>

    </section>
</div>
