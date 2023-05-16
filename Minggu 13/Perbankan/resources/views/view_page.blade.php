<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nasabah</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
               
                <h1 class="text-center"> Data Nasabah </h1>
                <a href="{{ route('nasabah.create') }}"><div class="btn btn-primary">Tambah Data</div></a>
                <table class="table table-bordered table-hover">
                    <thead>
                        <th>ID  Nasabah</th>
                        <th>Nama Nasabah</th>
                        <th>Peminjaman</th>
                        <th>Bunga</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        
                        @foreach ($nasabah as $item)
                            <tr>
                                <td>{{ $item->id_nasabah }}</td>
                                <td>{{ $item->nama_nasabah }}</td>
                                <td>{{ $item->peminjaman }}</td>
                                <td>{{ $item->bunga }}</td>
                                <td>
                                    <a href="{{ route('nasabah.edit', $item->id_nasabah) }}"><button class="btn btn-primary">Ubah</button></a>
                                    <form action="{{ route('nasabah.destroy', $item->id_nasabah) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    
</body>
</html>
