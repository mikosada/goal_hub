<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Lapangan;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;


            if($usertype =='user')
            {
                $lapangan = Lapangan::all();
                return view('home.index', compact('lapangan'));
            }

            else if($usertype =='admin')
            {
                return view('admin.index');
            }
            
            else
            {
                return redirect()->back();
            }
        }
    }

    public function home()
    {
        $lapangan = Lapangan::all();
        return view('home.index', compact('lapangan'));
    }

    public function create_field()
    {
        return view('admin.create_field');
    }

    public function add_field(Request $request) 
    {
        $data = new Lapangan();

        $data->nama = $request->nama;
        $data->deskripsi = $request->deskripsi;
        $data->harga = $request->harga;
        $data->lokasi = $request->lokasi;

        $image=$request->image;
        if($image) {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('lapangan', $imagename);
            $data->image=$imagename;
        }

        $data->save();

        return redirect()->back();
    }

    public function view_field()
    {
        $data = Lapangan::all();

        return view('admin.view_field', compact('data'));
    }

    public function field_delete($id)
    {
        $data = Lapangan::find($id);

        $data->delete();

        return redirect()->back();
    }
}
