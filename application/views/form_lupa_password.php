<body style="background-color: skyblue; ">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
             
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Reset Password</h1>
                  </div>
                   <?= $this->session->flashdata('pemberitahuan'); ?>

                  <form class="user" method="post" action="<?= base_url('auth/lupa_password');?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="email" placeholder="Masukkan Email ..." name="email" autocomplete="off">
                      
                      <?= form_error('email','<small class="text-danger pl-3">','</small>') ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Reset Password
                    </button>
                    <hr>
                 
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('auth/index');?>">Kembali ke Login?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
