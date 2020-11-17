
<body style="background-color: skyblue;">

  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
         
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Form Registrasi</h1>
              </div>
              <form class="user" method="post" action="<?= base_url('auth/registrasi'); ?>">

               
                <div class="form-group">
                  
                    <input type="text" class="form-control form-control-user" id="nama" placeholder="Masukkan Nama ..." name="nama" autocomplete="off"  value="<?= set_value('nama'); ?>">
                    <?= form_error('nama','<small class="text-danger pl-3">','</small>') ?>
                 
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" placeholder="Email" name="email" value="<?= set_value('email'); ?>">
                   <?= form_error('email','<small class="text-danger pl-3">','</small>') ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" placeholder="Password" name="password1" autocomplete="off">
                     <?= form_error('password1','<small class="text-danger">','</small>') ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" placeholder="Ulangi Password" name="password2" autocomplete="off">
                     <?= form_error('password2','<small class="text-danger">','</small>') ?>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Registrasi Akun
                </button>
                <hr>
               
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Lupa Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?= base_url('Auth/index') ?>">Sudah punya akun? Silahkan Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
