<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sorting App</title>
    <link rel="stylesheet" href="{{ url('bootstrap.min.css') }}">
</head>

<body>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-5 mt-3">
                    <div class="col-sm-12 text-center">
                        <h1 class="m-0 text-dark">Sorting App</h1>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                        <h2>Menu Pilihan</h2>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>   
                            </div>
                        @endif
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>  
                            </div>
                        @endif
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <a href="{{ route('addNilai') }}" class="col-3"><button class="btn btn-primary" style="width: 100%; height: 100px; font-size: 18px;">Input Angka</button></a>
                            <a href="{{ route('sorting') }}" class="col-3"><button class="btn btn-success" style="width: 100%; height: 100px; font-size: 18px;">Sorting Angka</button></a>
                            <a href="{{ route('search') }}" class="col-3"><button class="btn btn-info" style="width: 100%; height: 100px; font-size: 18px;">Search Angka</button></a>
                            <a href="{{ route('selesai') }}" class="col-3"><button class="btn btn-danger" style="width: 100%; height: 100px; font-size: 18px;">Selesai</button></a>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
    </div>
</body>

<script src="{{ url('jquery.min.js') }}"></script>
<script src="{{ url('bootstrap.bundle.min.js') }}"></script>

</html>