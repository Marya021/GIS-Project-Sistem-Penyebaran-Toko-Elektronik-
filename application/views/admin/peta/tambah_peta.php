<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="black" data-image="<?= base_url(); ?>assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="#" class="simple-text logo-normal">
                    PetShop X PCR
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>dashboard">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url(); ?>peta">
                            <i class="material-icons">map</i>
                            <p>Peta</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?= base_url(); ?>komentar">
                            <i class="material-icons">comments</i>
                            <p>Komentar</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        </script>

        <div class="main-panel">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Peta</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Keluar</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Tambah Peta</h4>
                </div>
                <div class="card-body">
                  <form method="post" action="" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama</label>
                          <input type="text" name="nama" class="form-control">
                        </div>
                        <span class="form-text text-danger"><?= form_error('nama'); ?></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Alamat</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"></label>
                            <textarea class="form-control" name="alamat" rows="5"></textarea>
                          </div>
                          <span class="form-text text-danger"><?= form_error('alamat'); ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Kategori</label>
                          <input type="text" name="kategori" class="form-control">
                        </div>
                        <span class="form-text text-danger"><?= form_error('kategori'); ?></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Lat</label>
                          <input type="text" name="lat" class="form-control">
                        </div>
                        <span class="form-text text-danger"><?= form_error('lat'); ?></span>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Lng</label>
                          <input type="text" name="lng" class="form-control">
                        </div>
                        <span class="form-text text-danger"><?= form_error('lng'); ?></span>
                      </div>
                    </div>
                    <br/>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleFormControlFile1">Pilih Gambar..</label>
                          <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                      </div>
                      <?= form_error('file'); ?>
                    </div>
                    <br/>
                    <button type="submit" href="peta.php"name="tambah" class="btn btn-primary pull-right">Tambah</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

