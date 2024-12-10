<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Booking</title>
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }

        input {
            width: 80%;
        }
    </style>
</head>
<body>
    @include('home.navbar')

    <div class="w-full">
    <div class="flex flex-col">
        <div class="flex flex-col p-12">
            <p class="text-2xl font-bold mb-8 underline">Detail Lapangan</p>
        </div>

        <div class="grid grid-cols-2 gap-5 px-8">
            <div class="flex flex-col justify-start">
                <img src="/lapangan/{{$lapangan->image}}" class="rounded-lg w-4/5"/>
                <div class="p-5 flex flex-col">
                    <p class="text-2xl font-bold mb-8">{{$lapangan->nama}}</p>
                    <p class="font-bold mb-2">{{$lapangan->lokasi}}</p>
                    <p class="text-base font-normal mb-4">{{$lapangan->deskripsi}}</p>
                    <p class="text-xl font-bold text-green-600">Rp. {{$lapangan->harga}} per jam</p>          
                </div>
            </div>

            <div class="flex flex-col justify-start gap-4 w-full">
                <div>
                    <h1 class="text-2xl font-bold">Booking Form</h1>
                </div>

                <form class="flex flex-col justify-start gap-4 w-full" action="{{url('add_booking', $lapangan->id)}}" method="Post">
                <div class="flex items-center gap-8">
                    <label>Name</label>
                    <input type="text" name="name">
                </div>

                <div class="flex items-center gap-8">
                    <label>Email</label>
                    <input type="email" name="email">
                </div>

                <div class="flex items-center gap-8">
                    <label>Phone</label>
                    <input type="number" name="phone">
                </div>

                <div class="flex items-center gap-8">
                    <label>Tanggal</label>
                    <input type="date" name="date">
                </div>

                <div class="flex items-center gap-8">
                    <label>Jam</label>
                    <input type="time" name="time">
                </div>

                <div>
                    <input class="bg-green-600 text-white font-semibold px-5 py-1 rounded-lg" type="submit" value="Book Lapangan">
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

    @include('home.footer')
</body>
</html>