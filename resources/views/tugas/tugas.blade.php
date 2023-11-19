<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <!-- navigation -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route("home") }}">Todo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route("home") }}">Tugas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("tugas-selesai") }}">Tugas Selsai</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <!-- judul -->
        <h1>
            Halo, {{ $nama }}
        </h1>

        <!-- kolom -->
        <div class="row mt-4">

            @foreach ($todo as $item)
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card p-3" style="width: 18rem;">
                        <div clazss="card-body">
                            <h5 class="card-title">
                                {{ $item->judul }}
                            </h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                kategori
                            </h6>
                            <p class="card-text">
                                {{ $item->deskripsi }}
                            </p>
                            
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>