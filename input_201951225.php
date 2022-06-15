<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>201951225 - Muhammad Arif Ramadhani</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="images/umk.png">
    <link rel="shortcut icon" href="images/umk.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
  <div id="right-panel" class="right-panel">

          <!-- Header-->
          <header id="header" class="header">
              <div class="top-left">
                  <div class="navbar-header">
                     <a class="navbar-brand" alt="Logo">Administrator</a>
                      <a class="navbar-brand hidden" href="./"><img src="assets/images/rama.jpg" alt="Logo"></a>
                      <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                  </div>
              </div>
              <div class="top-right">
                  <div class="header-menu">
                      <div class="header-left">
                          <button class="search-trigger"><i class="fa fa-search"></i></button>
                          <div class="form-inline">
                              <form class="search-form">
                                  <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                  <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                              </form>
                          </div>

                          <div class="dropdown for-notification">
                              <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fa fa-bell"></i>
                                  <span class="count bg-danger">3</span>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="notification">
                                  <p class="red">You have 3 Notification</p>
                                  <a class="dropdown-item media" href="#">
                                      <i class="fa fa-check"></i>
                                      <p>Server #1 overloaded.</p>
                                  </a>
                                  <a class="dropdown-item media" href="#">
                                      <i class="fa fa-info"></i>
                                      <p>Server #2 overloaded.</p>
                                  </a>
                                  <a class="dropdown-item media" href="#">
                                      <i class="fa fa-warning"></i>
                                      <p>Server #3 overloaded.</p>
                                  </a>
                              </div>
                          </div>

                          <div class="dropdown for-message">
                              <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fa fa-envelope"></i>
                                  <span class="count bg-primary">4</span>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="message">
                                  <p class="red">You have 4 Mails</p>
                                  <a class="dropdown-item media" href="#">
                                      <span class="photo media-left"><img alt="avatar" src="http://a.id/komunitasdistro/assets/images/avatar/1.jpg"></span>
                                      <div class="message media-body">
                                          <span class="name float-left">Jonathan Smith</span>
                                          <span class="time float-right">Just now</span>
                                          <p>Hello, this is an example msg</p>
                                      </div>
                                  </a>
                                  <a class="dropdown-item media" href="#">
                                      <span class="photo media-left"><img alt="avatar" src="http://a.id/komunitasdistro/assets/images/avatar/2.jpg"></span>
                                      <div class="message media-body">
                                          <span class="name float-left">Jack Sanders</span>
                                          <span class="time float-right">5 minutes ago</span>
                                          <p>Lorem ipsum dolor sit amet, consectetur</p>
                                      </div>
                                  </a>
                                  <a class="dropdown-item media" href="#">
                                      <span class="photo media-left"><img alt="avatar" src="http://a.id/komunitasdistro/assets/images/avatar/3.jpg"></span>
                                      <div class="message media-body">
                                          <span class="name float-left">Cheryl Wheeler</span>
                                          <span class="time float-right">10 minutes ago</span>
                                          <p>Hello, this is an example msg</p>
                                      </div>
                                  </a>
                                  <a class="dropdown-item media" href="#">
                                      <span class="photo media-left"><img alt="avatar" src="http://a.id/komunitasdistro/assets/images/avatar/4.jpg"></span>
                                      <div class="message media-body">
                                          <span class="name float-left">Rachel Santos</span>
                                          <span class="time float-right">15 minutes ago</span>
                                          <p>Lorem ipsum dolor sit amet, consectetur</p>
                                      </div>
                                  </a>
                              </div>
                          </div>
                      </div>

                      <div class="user-area dropdown float-right">
                          <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <img class="user-avatar rounded-circle" src="images/rama.jpg" alt="User Avatar">
                          </a>

                          <div class="user-menu dropdown-menu">
                              <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                              <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

                              <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                              <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                          </div>
                      </div>
                  </div>
              </div>
          </header>
  <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"<class="menu-icon"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <!--<li class="menu-title">UI elements</li>--><!-- /.menu-title -->
                    <li  class="active">
                        <a href="input_201951225.php"<class="menu-icon"><i class="menu-icon fa fa-wheelchair"></i>Input PMB</a>
                    </li>
                    <li>
                        <a href="tampil_201951225.php"<class="menu-icon"><i class="menu-icon fa fa-users"></i>Tampil Data</a>
                    </li>
                    <li>
                        <a href="prediksi_201951225.php"<class="menu-icon"> <i class="menu-icon fa fa-bar-chart"></i>Prediksi</a>
                    </li>

                    <!--<li class="menu-title">Icons</li>--><!-- /.menu-title -->

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>

    <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Muhammad Arif Ramadhani</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                  <li class="active">201951225</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

  <div class="content">
            <div class="animated fadeIn">
              <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Input Data</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Input Prediksi Pendaftaran Mahasiswa Baru</h3>
                                        </div>
                                        <hr>
                                        <form action="simpan_201951225.php" method="post">
                                            <div class="form-group text-center">
                                            </div>
                                            <div class="form-group">
                                              <label for="periode_pmb" class="control-label mb-1">Periode PMB</label>
                                              <select name="periode_pmb" id="periode_pmb" class="form-control">
                                                <?php
                                                $now = date('Y');
                                                for ($i = $now; $i >= 2000; $i--) {
                                                  echo "<option value='".$i."/".($i+1)."'>".$i."/".($i+1)."</option>"
                                                  ;
                                                }
                                                ?>
                                              </select>
                                            </div>
                                            <div class="form-group">
                                              <label>Jumlah PMB</label>
                                              <input id="jumlah_pmb" name="jumlah_pmb" type="number" class="form-control" value="">
                                            </div>
                                            <div class="form-actions form-group">
                                              <button type="submit" name="simpan" class="btn btn-primary btn-sm">Simpan</button>
                                            </div>
                                          </form>
                                        </hr>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                                            <div class="clearfix"></div>

                                            <?php include "assets/footer.php" ?>


                                            </div><!-- /#right-panel -->

                                            <!-- Right Panel -->

                                            <!-- Scripts -->
                                            <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
                                            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
                                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
                                            <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
                                            <script src="assets/js/main.js"></script>
</body>
</html>
