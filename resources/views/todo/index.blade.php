<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>To Do List</title>
        {{-- CSS Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        {{-- Bootstrap Icon --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-
        icons@1.9.1/font/bootstrap-icons.css">

    </head>
    <body>
        <div class="container mt-5">
            <h1 class="text-center mb-5">To Do List</h1>
            <div class="d-grid gap-2 col-2 mx-auto">
                <a href="/todo/create" class="btn btn-primary mb-3">Tambah Tugas</a>
            </div>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif
            <div class="card border-info mb-3">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Judul</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Tenggat</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($todos->count() > 0)
                                @foreach ($todos as $td)
                                    <tr>
                                        <td>{{ $td->Judul}}</td>
                                        <td>{{ $td->Deskripsi}}</td>
                                        <td>{{ $td->Tenggat}}</td>
                                        <td>{{ $td->Status}}</td>
                                        <td>
                                            <a href="/todo/detail/{{$td->id}}"  class="btn btn-success">Detail</a>
                                            <a href="/todo/edit/{{$td->id}}" class="btn btn-warning">Edit</a>
                                            <a href="/todo/hapus/{{$td->id}}" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                            <tr>
                                <td colspan="10" align="center"> Yeeayy Tidak Ada Tugas</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="text-center mb-5">
                {{ $todos->links('pagination::bootstrap-4') }}
            </div>
        </div>
        
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    </body>
</html>