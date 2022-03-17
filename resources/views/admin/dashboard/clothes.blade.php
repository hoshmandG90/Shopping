<div>
    <section class="dark:bg-coolGray-800 dark:text-coolGray-100 mb-8">
        <div class="container  p-6 mx-auto space-y-6 sm:space-y-12">
            <a rel="noopener noreferrer" href="#"
                class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-coolGray-900">
                <img src="{{ asset('assets/img/clothes.jpg') }}" alt=""
                    class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-coolGray-500">
                <div class="p-6 space-y-2 lg:col-span-5">
                    <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">Welcome Shopping Mall</h3>
                    <span class="text-xs dark:text-coolGray-400">March 16, 2022</span>
                    <p>We’re putting free trials on trial. With Ecwid, you get free FOREVER. Set up your free account once, and keep it as long as you like. Seriously.</p>
                </div>
            </a>
                
            <div class="grid justify-center  grid-cols-1 gap-6 sm:grid-cols-1 lg:grid-cols-3">
                @foreach ($clothes as $row)




                <a rel="noopener noreferrer" href="{{ route('detailsClothes',$row->id) }}"
                    class="max-w-sm mx-auto hover:shadow-lg transition duration-300 ease-in-out group hover:no-underline focus:no-underline dark:bg-coolGray-900 hidden sm:block">
                    <img role="presentation" class="img-fluid  img-responsive" 
                    class="rounded-lg  object-cover h-full w-full shadow-md"
                        src="/Uploads/Clothes/{{ $row->image }}">
                    <div class="p-6 space-y-2">
                        <div class="flex justify-between">
                            <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">{{ $row->title }}</h3>
                            <h3 class="text-green-500 font-bold">{{  number_format($row->price,0,'.','.') }} USD</h3>

                        </div>
                        <span class="text-xs dark:text-coolGray-400">January 26, 2021 {{ $row->created_at->format(' M D , Y') }}</span>
                        <p>{{ $row->excerpt }}.</p>
                    </div>
                </a>
                @endforeach

                <!---->
            </div>

        </div>
    </section>
</div>
