
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nasabah</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center"> Tambah Data Nasabah </h1>
                <form action="{{ isset($nasabah) ? route('nasabah.update', $nasabah->id_nasabah) : route('nasabah.store') }}" method="post">
                    @csrf
                    {!! isset($nasabah) ? method_field('PUT') : '' !!}

         
                    <input type="hidden" name="id_nasabah" value="{{ isset($nasabah) ? $nasabah->id_nasabah : '' }}">

                    
                    <div class="form-group">
                        <label for="nama" class="control-label">Nama nasabah</label>
                        <input type="text" name="nama_nasabah" id="nama_nasabah" class="form-control" placeholder="Nama Nasabah" value="{{ isset($nasabah) ? $nasabah->nama_nasabah : '' }}">
                    </div>

                    
                    <div class="form-group">
                        <label for="peminjaman" class="control-label">Peminjaman</label>
                        <input type="text" name="peminjaman" id="peminjaman" class="form-control" placeholder="Peminjaman" value="{{ isset($nasabah) ? $nasabah->peminjaman : '' }}">
                    </div>

                    
                    <div class="form-group">
                        <label for="bunga" class="control-label">Bunga</label>
                        <input type="text" name="bunga" id="bunga" class="form-control" placeholder="Bunga" value="{{ isset($nasabah) ? $nasabah->bunga : '' }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>