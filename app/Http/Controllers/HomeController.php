<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lapangan;
use App\Models\Booking;


class HomeController extends Controller
{
    public function book_field($id)
    {
        $lapangan = Lapangan::find($id);
        return view('home.book_field', compact('lapangan'));
    }

    public function add_booking(Request $request, $id) 
    {
        $data = new Booking;

        $data->field_id = $id;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->date = $request->date;
        $data->hour = $request->hour;

        $data->save();

        return redirect()->back(); 
    }
}
