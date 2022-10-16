<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Detail Tugas</title>
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
                <a href="/todo" class="btn btn-primary mb-3">Kembali</a>
            </div>
            <div class="card border-info mb-3">
                @foreach ($todos as $td)
                    <div class="card">
                        <div class="card-header">
                            Detail Tugas
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Judul : {{$td->Judul}}</li>
                            <li class="list-group-item">Deskripsi : {{$td->Deskripsi}}</li>
                            <li class="list-group-item">Tenggat : {{$td->Tenggat}}</li>
                            <li class="list-group-item">Status : {{$td->Status}}</li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
        
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    </body>
</html>