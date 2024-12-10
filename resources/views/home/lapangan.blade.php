<div class="w-full">
    <div class="flex flex-col">
        <div class="flex flex-col p-12">
            <p class="text-2xl font-bold mb-8 underline">Cari Lapangan Mini Soccer Terbaik?</p>
        </div>

        <div class="grid grid-cols-4 gap-5 px-8">
            @foreach($lapangan as $lapangan)
            <div class="flex flex-col justify-start">
                <img src="lapangan/{{$lapangan->image}}" class="rounded-t-xl max-h-[200px]"/>
                <div class="p-5 flex flex-col">
                    <p class="text-xl font-bold mb-2">{{$lapangan->nama}}</p>
                    <p class="text-lg font-semibold mb-2 text-white bg-green-600 w-fit px-3 rounded-lg">4.5</p>
                    <p class="text-lg font-semibold">About</p>
                    <p class="text-base font-normal mb-4">{{$lapangan->deskripsi}}</p>            
                    <a href="{{url('book_field', $lapangan->id)}}" class="text-white font-semibold text-lg bg-green-600 px-6 py-2 rounded-lg w-fit">Book Now</a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>