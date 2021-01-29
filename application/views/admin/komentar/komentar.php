<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="black" data-image="<?= base_url(); ?>assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the
         sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="<?= base_url(); ?>dashboard" class="simple-text logo-normal">
                    Electronic X PCR
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
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>peta">
                            <i class="material-icons">map</i>
                            <p>Peta</p>
                        </a>
                    </li>
                    <li class="nav-item active">
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
            <a class="navbar-brand" href="<?= base_url(); ?>komentar"><h1 style="font-family:verdana;">Komentar Electronic City</h1></a>
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
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Data Komentar</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class=" text-primary">
                          <th>No</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Subject</th>
                          <th>Pesan</th>
                          <th>Aksi</th>
                        </thead>
                        <tbody>
                        <?php $no=1; ?>

                          <?php foreach ($komentar as $kom) : ?>
                          <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $kom['nama']; ?></td>
                            <td><?= $kom['email']; ?></td>
                            <td><?= $kom['subjek']; ?></td>
                            <td><?= $kom['komentar']; ?></td>
                            <td><a href="<?= base_url(); ?>komentar/hapus/<?= $kom['id']; ?>" data-original-title="Hapus Booking" data-toggle="tooltip" onclick="return confirm('Anda yakin?');"><i class="material-icons">delete </i></a></td>
                          </tr>
                          <tr>
                          <?php endforeach; ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>