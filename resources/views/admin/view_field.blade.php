<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
        .table_deg {
            border: 2px solid white;
            margin: auto;
            width: 80%;
            text-align: center;
            margin-top: 30px;
        }

        .th_deg {
            background-color: darkgreen;
            padding: 8px;
        }

        tr {
            border: 3px solid white
        }

        td {
            padding: 8px;
        }
    </style>
  </head>
  <body>
    @include('admin.header')
    
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <table class='table_deg'>
                    <tr>
                        <th class="th_deg">Nama Lapangan</th>
                        <th class="th_deg">Deskripsi</th>
                        <th class="th_deg">Harga</th>
                        <th class="th_deg">Lokasi</th>
                        <th class="th_deg">Image</th>
                        <th class="th_deg">Delete</th>
                        
                    </tr>

                    @foreach($data as $data)
                    <tr>
                        <td>{{$data->nama}}</td>
                        <td>{!! Str::limit($data->deskripsi, 150)!!}</td>
                        <td>Rp. {{$data->harga}}</td>
                        <td>{{$data->lokasi}}</td>
                        <td>
                            <img width="100" src="lapangan/{{$data->image}}">
                        </td>

                        <td>
                            <a onclick="return confirm('Are you sure to delete this?');" class="btn btn-danger" href="{{url('field_delete', $data->id)}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>


        </div>
    </div>
</div>


    @include('admin.footer')
  </body>
</html>