<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type='text/css'>
        label {
            display: inline-block;
            width: 200px;
        }

        .div_deg {
            padding-top: 30px;
        }

        .div_center {
            text-align: center;
            padding-top: 30px;
        }

        .heading {
            font-size: 24px;
            font-weight: bold;
        }
    </style>
  </head>
  <body>
    @include('admin.header')
    
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <div class="div_center">
                    <h1 class="heading">Tambah Lapangan</h1>

                    <form action="{{url('add_field')}}" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="div_deg">
                            <label>Nama Lapangan</label>
                            <input type="text" name="nama" />
                        </div>
                        <div class="div_deg">
                            <label>Deskripsi</label>
                            <textarea name='deskripsi'></textarea>
                        </div>
                        <div class="div_deg">
                            <label>Harga</label>
                            <input type="number" name="harga" />
                        </div>
                        <div class="div_deg">
                            <label>Lokasi</label>
                            <input type="text" name="lokasi" />
                        </div>
                        <div class="div_deg">
                            <label>Upload Gambar</label>
                            <input type="file" name="image" />
                        </div>
                        <div class="div_deg">
                            <input class="btn btn-primary" type="submit" value="Tambahkan Lapangan" />
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    
    @include('admin.footer')
  </body>
</html>