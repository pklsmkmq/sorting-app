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
                        <h2>Input Angka</h2>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="jumlah">Masukkan jumlah nilai tugas</label>
                            <input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="Masukkan Jumlah Nilai">
                            <span style="color: red; display: none;" id="jmlerror">Harap Masukkan Jumlah Nilai</span>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" id="subjum">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="row mt-3" id="nilaiii" style="display: none">
                <div class="col-12">
                  <div class="card">

                    <form action="{{ route('snilai') }}" method="post">
                        @csrf
                        <div class="card-body" id="input-nilai">
                        </div>
    
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" id="subjum">Submit</button>
                        </div>
                    </form>
                    
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
            var jumlah = $("#jumlah").val();
            if (jumlah == 0 || jumlah == null || jumlah == "") {
                $("#jmlerror").css('display', 'block');
            } else {
                $("#jmlerror").css('display', 'none');
                $("#nilaiii").css('display', 'block');
                $("#input-nilai").empty();
                for (let index = 1; index <= jumlah; index++) {
                    $("#input-nilai").append("<div class='form-group'><label for='nilai'>Masukkan nilai " + index + "</label><input type='text' name='nilai["+ index +"]' class='form-control' id='nilai' placeholder='Masukkan Jumlah Nilai'><span style='color: red; display: none;' id='jmlerror'>Harap Masukkan Jumlah Nilai</span></div>");
                }
            }
        });
    });
</script>

</html>