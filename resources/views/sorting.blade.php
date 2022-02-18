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
                        <h2>Data Nilai</h2>
                    </div>

                    <div class="card-body">
                        @if ($data != "")
                            <div class="row">
                                <div class="col-2 text-center">
                                    <h5>Sebelum Sorting</h5>
                                </div>
                                <div class="col-1 text-center">
                                    <h5>:</h5>
                                </div>
                                <div class="col-9">
                                    {{ $data }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-center">
                                    <h5>Hasil Sorting</h5>
                                </div>
                                <div class="col-1 text-center">
                                    <h5>:</h5>
                                </div>
                                <div class="col-9">
                                    {{ $dataSort }}
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h5>Belum Ada Data Nilai</h5>
                                </div>
                            </div>
                        @endif
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