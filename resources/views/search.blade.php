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
                        <h2>Cari Angka</h2>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="cari">Masukkan nilai yang ingin dicari</label>
                            <input type="text" name="cari" class="form-control" id="cari" placeholder="Masukkan nilai">
                            <p id="status"></p>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" id="subjum">Submit</button>
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
<script>
    $(document).ready(function() {
        $("#subjum").click(function(){
            var cari = $("#cari").val();
            $.ajax({
                type:"POST",
                url:"{{ route('cariNilai') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "cari": cari
                },
                success:function(data) {
                    if (data == true) {
                        $("#status").text("Data " + cari + " Berhasil Ditemukan");
                    } else {
                        $("#status").text("Data " + cari + " Tidak Ditemukan");
                    }
                }
            });
        });
    });
</script>

</html>