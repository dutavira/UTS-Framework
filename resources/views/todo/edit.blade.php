<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit Tugas</title>
        {{-- CSS Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        {{-- Bootstrap Icon --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-
        icons@1.9.1/font/bootstrap-icons.css">

    </head>
    <body>
        <div class="container mt-5">
            <h1 class="text-center mb-5">Edit To Do List</h1>
            <div class="d-grid gap-2 col-2 mx-auto">
                <a href="/todo" class="btn btn-primary mb-3">Kembali</a>
            </div>
            <div class="card border-info mb-3">
                <div class="card-body">
                    @foreach ($todos as $td)
                    <form action="/todo/update" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $td->id }}"> <br/>
                        <div class="mb-3">
                            <label for="Judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="Judul" value="{{$td->Judul}}" id="Judul">
                        </div>
                        <div class="mb-3">
                            <label for="Deskripsi" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" name="Deskripsi"  value="{{$td->Deskripsi}}" id="Deskripsi">
                        </div>
                        <div class="mb-3">
                            <label for="Tenggat" class="form-label">Tenggat</label>
                            <input type="date" class="form-control" name="Tenggat"  value="{{$td->Tenggat}}" id="Tenggat">
                        </div>
                        <div class="mb-3">
                            <select for="Status" class="form-select" aria-label="Status" name="Status"  value="{{$td->Status}}" id="Status">
                                <option selected>Pilih Status</option>
                                <option value="Selesai">Selesai</option>
                                <option value="Belum Selesai">Belum Selesai</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary float-end">Simpan</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
        
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    </body>
</html>