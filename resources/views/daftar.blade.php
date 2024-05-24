<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title></title>

  <link rel="stylesheet" href="/theme/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="/theme/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @toastr_css
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">
    {{-- <nav class="main-header navbar navbar-expand-md navbar-light navbar-white bg-gradient-teal">
      <div class="container">
        <a href="#" class="navbar-brand">
          <img src="/theme/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light"><strong>Rekrutmen Tenaga Ahli Programmer 2022
              Diskominfotik</strong></span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            
          </ul>
        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          
        </ul>
      </div>
    </nav> --}}
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: silver">

      <!-- Main content -->
      <div class="content">
        <div class="container">
          <br />
          <br />
          <form action="/daftar" method="post">
            @csrf
            <div class="row">
              <div class="col-lg-3">
              </div>

              <div class="col-lg-6">
                <div class="card card-widget widget-user">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <div class="widget-user-header text-white"
                    style="background: url('/theme/bglogin.jpg') center center;">
                    <h3 class="widget-user-username text-center"><strong>SMK N 2 KANDANGAN</strong></h3>
                    <h5 class="widget-user-desc text-center">DAFTAR</h5>
                  </div>
                  {{-- <div class="widget-user-image">
                    <img class="img-circle" src="/kandangan.jpeg" alt="User Avatar">
                  </div> --}}
                  <div class="card-footer">
                    <div class="row">
                      <div class="card-body">
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 col-form-label">NIK</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="nik" value="{{old('nik')}}" placeholder="NIK"
                              minlength="16" maxlength="16" required>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 col-form-label">Nama</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputEmail4" name="nama"
                              placeholder="nama lengkap" value="{{old('nama')}}" required>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="inputEmail4" class="col-sm-4 col-form-label">Telp / WA</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="telp" name="telp" maxlength="15"
                              placeholder="telp" value="{{old('telp')}}" required>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="inputEmail4" class="col-sm-4 col-form-label">Email</label>
                          <div class="col-sm-8">
                            <input type="email" class="form-control" name="email" placeholder="email"
                              value="{{old('email')}}" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail4" class="col-sm-4 col-form-label">Password</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="password" placeholder="password" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail4" class="col-sm-4 col-form-label">Masukkan Password Lagi</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="confimation_password"
                              placeholder="konfirmasi password" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 col-form-label">Catatan :</label>
                          <div class="col-sm-8">
                            NIK menjadi username untuk Login
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-4 col-form-label"></label>
                          <div class="col-sm-8">
                            <button type="submit" class="btn btn-primary">Daftar</button>
                            <a href="/" class="btn btn-primary">Login</a>
                          </div>
                        </div>

                      </div>
                    </div>
                    <!-- /.row -->
                  </div>
                </div>
              </div>
            </div>
          </form>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer text-center">
      {{-- <div class="float-right d-none d-sm-inline">
        CAT
      </div> --}}
      <strong>Copyright &copy; 2024 <a href="#">SMK N 2 KANDANGAN
      </a>.</strong>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="/theme/plugins/jquery/jquery.min.js"></script>
  <script src="/theme/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/theme/dist/js/adminlte.min.js"></script>
  @toastr_js
  @toastr_render
  <script>
    $(document).ready(function() {
        $("input#nik").on({
        keydown: function(e) {
            if (e.which === 32)
            return false;
        },
        change: function() {
            this.value = this.value.replace(/\s/g, "");
        }
        });
        $("input#telp").on({
        keydown: function(e) {
            if (e.which === 32)
            return false;
        },
        change: function() {
            this.value = this.value.replace(/\s/g, "");
        }
        });
     });
  </script>
</body>

</html>