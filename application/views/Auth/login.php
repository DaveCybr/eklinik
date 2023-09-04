
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?= base_url(); ?>dist/img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Login</title>
  <link href="<?= base_url(); ?>dist/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url(); ?>dist/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url(); ?>dist/css/ruang-admin.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>dist/vendor/select2/dist/css/select2.min.css" rel="stylesheet">
  <script src="<?= base_url(); ?>dist/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>dist/vendor/select2/dist/js/select2.min.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      $('#select2-single').select2();
    });
  </script>
</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login" style="margin-top: 3%;">
    <div class="row justify-content-center">
      <div class="col-xl-4 col-lg-12 col-md-9">
        <div class="text-center">
          <img src="<?= base_url(); ?>dist/img/logo/logo-eklinik.png" width="300px" >
        </div>
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <?php echo $this->Core->massage(); ?>
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <form class="user" method="post" action="<?= base_url(); ?>Login/aksi">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Enter Username Address">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <select class=" form-control" name="akun" >
                          <option value="">-- Login sebagai --</option>
                          <option value="admin">Admin</option>
                          <option value="dokter">Dokter</option>
                          <option value="resepsionis">Resepsionis</option>
                        </select>
                    </div>  
                    <br><br>
                    <div class="form-group">
                      <button class="btn btn-primary btn-block">Login</button>
                    </div>
                  </form>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="<?= base_url(); ?>dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>dist/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>