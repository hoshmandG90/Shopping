<div>

    <!-- component -->
    <div class="mb-16">
        <!-- Code block starts -->
        <div>
            <div class="container flex justify-center mx-auto pt-16">
                <div>
                    <h1
                        class=" text-3xl text-center text-gray-800 font-extrabold pb-6  mx-auto">
                        Ecommerce Product Cart</h1>
                </div>
            </div>
            <div class="w-full bg-gray-100 px-10 pt-10">
                <div class="container mx-auto">
                    <div role="list" 
                        class=" lg:flex md:flex sm:flex items-center xl:justify-between flex-wrap md:justify-around sm:justify-around lg:justify-around">
                        @foreach ($Electronics as $item)
                            
                        <a href="{{ route('detailsElectronic',$item->id) }}" role="listitem"
                            class="xl:w-1/3 m-2 sm:w-3/4 md:w-2/5  mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5 cursor-pointer">
                            <div class="rounded hover:shadow-lg transition duration-700  ease-in-out shadow-md bg-white px-4" >
                                <div class=" -mt-20 w-full flex justify-center">
                                    <div class="">
                                        <img src="Uploads/Electronics/{{ $item->image }}"
                                             role="img" class="img-fluid  img-responsive" 
                                            class="rounded-lg  object-cover h-full w-full shadow-md" />
                                    </div>
                                </div>
                                <div class="px-6 mt-2">
                                    <h1 class="font-bold text-2xl text-center mb-1 uppercase">{{ $item->title }}</h1>
                                    <p class="text-gray-800 text-sm text-center">Price <span class="text-red-500 font-bold">{{  number_format($item->price,0,'.','.') }}</span> USD</p>
                                    <p class="text-center text-gray-600 py-4 text-base pt-3 font-normal">{{ $item->excerpt }}.</p>
                                  
                                </div>
                            </div>
                        </a>
                        @endforeach

                            

                    </div>
                      
                       
                 
                    </div>
                </div>
            </div>
    

    </div>
</div>
