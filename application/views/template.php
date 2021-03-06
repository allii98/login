<!doctype html>
<html class="no-js " lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

  <title>MSAL LOGIN</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <!-- Favicon-->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css">
  <!-- JQuery DataTable Css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
  <!-- Custom Css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap-select/css/bootstrap-select.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.min.css">
</head>

<body class="theme-blush">

  <!-- Page Loader -->
  <div class="page-loader-wrapper">
    <div class="loader">
      <div class="m-t-30"><img class="zmdi-hc-spin" src="<?php echo base_url() ?>assets/images/loader.svg" width="48" height="48" alt="Aero"></div>
      <p>Please wait...</p>
    </div>
  </div>

  <!-- Overlay For Sidebars -->
  <div class="overlay"></div>

  <!-- Main Search -->
  <div id="search">
    <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
    <form>
      <input type="search" value="" placeholder="Search..." />
      <button type="submit" class="btn btn-primary">Search</button>
    </form>
  </div>

  <!-- Right Icon menu Sidebar -->
  <div class="navbar-right">
    <ul class="navbar-nav">
      <button type="submit" class="btn btn-primary rv-btn-toggle"><i class="zmdi zmdi-settings"></i></button>
      <li><a href="#search" class="main_search" title="Search..."><i class="zmdi zmdi-search"></i></a></li>
      <li class="dropdown">
        <a href="javascript:void(0);" class="dropdown-toggle" title="App" data-toggle="dropdown" role="button"><i class="zmdi zmdi-apps"></i></a>
        <ul class="dropdown-menu slideUp2">
          <li class="header">App Sortcute</li>
          <li class="body">
            <ul class="menu app_sortcut list-unstyled">
              <li>
                <a href="image-gallery.html">
                  <div class="icon-circle mb-2 bg-blue"><i class="zmdi zmdi-camera"></i></div>
                  <p class="mb-0">Photos</p>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);">
                  <div class="icon-circle mb-2 bg-amber"><i class="zmdi zmdi-translate"></i></div>
                  <p class="mb-0">Translate</p>
                </a>
              </li>
              <li>
                <a href="events.html">
                  <div class="icon-circle mb-2 bg-green"><i class="zmdi zmdi-calendar"></i></div>
                  <p class="mb-0">Calendar</p>
                </a>
              </li>
              <li>
                <a href="contact.html">
                  <div class="icon-circle mb-2 bg-purple"><i class="zmdi zmdi-account-calendar"></i></div>
                  <p class="mb-0">Contacts</p>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);">
                  <div class="icon-circle mb-2 bg-red"><i class="zmdi zmdi-tag"></i></div>
                  <p class="mb-0">News</p>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);">
                  <div class="icon-circle mb-2 bg-grey"><i class="zmdi zmdi-map"></i></div>
                  <p class="mb-0">Maps</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0);" class="dropdown-toggle" title="Notifications" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
        </a>
        <ul class="dropdown-menu slideUp2">
          <li class="header">Notifications</li>
          <li class="body">
            <ul class="menu list-unstyled">
              <li>
                <a href="javascript:void(0);">
                  <div class="icon-circle bg-blue"><i class="zmdi zmdi-account"></i></div>
                  <div class="menu-info">
                    <h4>8 New Members joined</h4>
                    <p><i class="zmdi zmdi-time"></i> 14 mins ago </p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);">
                  <div class="icon-circle bg-amber"><i class="zmdi zmdi-shopping-cart"></i></div>
                  <div class="menu-info">
                    <h4>4 Sales made</h4>
                    <p><i class="zmdi zmdi-time"></i> 22 mins ago </p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);">
                  <div class="icon-circle bg-red"><i class="zmdi zmdi-delete"></i></div>
                  <div class="menu-info">
                    <h4><b>Nancy Doe</b> Deleted account</h4>
                    <p><i class="zmdi zmdi-time"></i> 3 hours ago </p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);">
                  <div class="icon-circle bg-green"><i class="zmdi zmdi-edit"></i></div>
                  <div class="menu-info">
                    <h4><b>Nancy</b> Changed name</h4>
                    <p><i class="zmdi zmdi-time"></i> 2 hours ago </p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);">
                  <div class="icon-circle bg-grey"><i class="zmdi zmdi-comment-text"></i></div>
                  <div class="menu-info">
                    <h4><b>John</b> Commented your post</h4>
                    <p><i class="zmdi zmdi-time"></i> 4 hours ago </p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);">
                  <div class="icon-circle bg-purple"><i class="zmdi zmdi-refresh"></i></div>
                  <div class="menu-info">
                    <h4><b>John</b> Updated status</h4>
                    <p><i class="zmdi zmdi-time"></i> 3 hours ago </p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);">
                  <div class="icon-circle bg-light-blue"><i class="zmdi zmdi-settings"></i></div>
                  <div class="menu-info">
                    <h4>Settings Updated</h4>
                    <p><i class="zmdi zmdi-time"></i> Yesterday </p>
                  </div>
                </a>
              </li>
            </ul>
          </li>
          <li class="footer"> <a href="javascript:void(0);">View All Notifications</a> </li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
        </a>
        <ul class="dropdown-menu slideUp2">
          <li class="header">Tasks List <small class="float-right"><a href="javascript:void(0);">View All</a></small></li>
          <li class="body">
            <ul class="menu tasks list-unstyled">
              <li>
                <div class="progress-container progress-primary">
                  <span class="progress-badge">eCommerce Website</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                      <span class="progress-value">86%</span>
                    </div>
                  </div>
                  <ul class="list-unstyled team-info">
                    <li class="m-r-15"><small>Team</small></li>
                    <li>
                      <img src="<?php echo base_url() ?>assets/images/xs/avatar2.jpg" alt="Avatar">
                    </li>
                    <li>
                      <img src="<?php echo base_url() ?>assets/images/xs/avatar3.jpg" alt="Avatar">
                    </li>
                    <li>
                      <img src="<?php echo base_url() ?>assets/images/xs/avatar4.jpg" alt="Avatar">
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <div class="progress-container">
                  <span class="progress-badge">iOS Game Dev</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                      <span class="progress-value">45%</span>
                    </div>
                  </div>
                  <ul class="list-unstyled team-info">
                    <li class="m-r-15"><small>Team</small></li>
                    <li>
                      <img src="<?php echo base_url() ?>assets/images/xs/avatar10.jpg" alt="Avatar">
                    </li>
                    <li>
                      <img src="<?php echo base_url() ?>assets/images/xs/avatar9.jpg" alt="Avatar">
                    </li>
                    <li>
                      <img src="<?php echo base_url() ?>assets/images/xs/avatar8.jpg" alt="Avatar">
                    </li>
                    <li>
                      <img src="<?php echo base_url() ?>assets/images/xs/avatar7.jpg" alt="Avatar">
                    </li>
                    <li>
                      <img src="<?php echo base_url() ?>assets/images/xs/avatar6.jpg" alt="Avatar">
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <div class="progress-container progress-warning">
                  <span class="progress-badge">Home Development</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;">
                      <span class="progress-value">29%</span>
                    </div>
                  </div>
                  <ul class="list-unstyled team-info">
                    <li class="m-r-15"><small>Team</small></li>
                    <li>
                      <img src="<?php echo base_url() ?>assets/images/xs/avatar5.jpg" alt="Avatar">
                    </li>
                    <li>
                      <img src="<?php echo base_url() ?>assets/images/xs/avatar2.jpg" alt="Avatar">
                    </li>
                    <li>
                      <img src="<?php echo base_url() ?>assets/images/xs/avatar7.jpg" alt="Avatar">
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="javascript:void(0);" class="app_calendar" title="Calendar"><i class="zmdi zmdi-calendar"></i></a></li>
      <li><a href="javascript:void(0);" class="app_google_drive" title="Google Drive"><i class="zmdi zmdi-google-drive"></i></a></li>
      <li><a href="javascript:void(0);" class="app_group_work" title="Group Work"><i class="zmdi zmdi-group-work"></i></a></li>
      <li><a href="javascript:void(0);" class="js-right-sidebar" title="Setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
      <li><a href="<?= base_url('Login/logout') ?>" class="mega-menu" title="Sign Out"><i class="zmdi zmdi-power"></i></a></li>
    </ul>
  </div>


  <!-- Left Sidebar -->
  <aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
      <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
      <a href="index.html"><img src="<?php echo base_url() ?>assets/images/logo_msal_transparat.gif" width="25" alt="Aero"><span class="m-l-10">Login MSAL</span></a>
    </div>
    <div class="menu">
      <ul class="list">
        <li>
          <div class="user-info">
            <a class="image" href="profile.html"><img src="<?php echo base_url() ?>assets/images/profile_av.jpg" alt="User"></a>
            <div class="detail">
              <h4><?= ucfirst($this->session->userdata('userlogin')) ?></h4>
              <?php if ($this->session->userdata('level') == 1) { ?>
                <small>Admin</small>
              <?php } else if ($this->session->userdata('level') == 2) { ?>
                <small>User</small>
              <?php } else { ?>
                <small>Super Admin</small>
              <?php } ?>
            </div>
          </div>
        </li>
        <li><a href="<?= base_url('Home') ?>"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
        <?php if ($this->session->userdata('level') == 1) { ?>
          <li><a href="<?= base_url('Pt') ?>"><i class="zmdi zmdi-balance"></i><span>PT</span></a></li>
          <li><a href="<?= base_url('Dept') ?>"><i class="zmdi zmdi-chart"></i><span>Department</span></a></li>
          <li><a href="<?= base_url('Apk') ?>"><i class="zmdi zmdi-apps"></i><span>Aplikasi</span></a></li>
          <li><a href="<?= base_url('Users') ?>"><i class="zmdi zmdi-account"></i><span>Users</span></a></li>
          <li><a href="<?= base_url('Users_role') ?>"><i class="zmdi zmdi-swap-alt"></i><span>Users Role</span></a></li>
        <?php } ?>

      </ul>
    </div>
  </aside>



  <!-- Right Sidebar -->
  <aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs sm">
      <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
      <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat"><i class="zmdi zmdi-comments"></i></a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="setting">
        <div class="slim_scroll">
          <div class="card">
            <h6>Theme Option</h6>
            <div class="light_dark">
              <div class="radio">
                <input type="radio" name="radio1" id="lighttheme" value="light" checked="">
                <label for="lighttheme">Light Mode</label>
              </div>
              <div class="radio mb-0">
                <input type="radio" name="radio1" id="darktheme" value="dark">
                <label for="darktheme">Dark Mode</label>
              </div>
            </div>
          </div>
          <div class="card">
            <h6>Color Skins</h6>
            <ul class="choose-skin list-unstyled">
              <li data-theme="purple">
                <div class="purple"></div>
              </li>
              <li data-theme="blue">
                <div class="blue"></div>
              </li>
              <li data-theme="cyan">
                <div class="cyan"></div>
              </li>
              <li data-theme="green">
                <div class="green"></div>
              </li>
              <li data-theme="orange">
                <div class="orange"></div>
              </li>
              <li data-theme="blush" class="active">
                <div class="blush"></div>
              </li>
            </ul>
          </div>
          <div class="card">
            <h6>General Settings</h6>
            <ul class="setting-list list-unstyled">
              <li>
                <div class="checkbox rtl_support">
                  <input id="checkbox1" type="checkbox" value="rtl_view">
                  <label for="checkbox1">RTL Version</label>
                </div>
              </li>
              <li>
                <div class="checkbox ms_bar">
                  <input id="checkbox2" type="checkbox" value="mini_active">
                  <label for="checkbox2">Mini Sidebar</label>
                </div>
              </li>
              <li>
                <div class="checkbox">
                  <input id="checkbox3" type="checkbox" checked="">
                  <label for="checkbox3">Notifications</label>
                </div>
              </li>
              <li>
                <div class="checkbox">
                  <input id="checkbox4" type="checkbox">
                  <label for="checkbox4">Auto Updates</label>
                </div>
              </li>
              <li>
                <div class="checkbox">
                  <input id="checkbox5" type="checkbox" checked="">
                  <label for="checkbox5">Offline</label>
                </div>
              </li>
              <li>
                <div class="checkbox">
                  <input id="checkbox6" type="checkbox" checked="">
                  <label for="checkbox6">Location Permission</label>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="tab-pane right_chat" id="chat">
        <div class="slim_scroll">
          <div class="card">
            <ul class="list-unstyled">
              <li class="online">
                <a href="javascript:void(0);">
                  <div class="media">
                    <img class="media-object " src="<?php echo base_url() ?>assets/images/xs/avatar4.jpg" alt="">
                    <div class="media-body">
                      <span class="name">Sophia <small class="float-right">11:00AM</small></span>
                      <span class="message">There are many variations of passages of Lorem Ipsum available</span>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="online">
                <a href="javascript:void(0);">
                  <div class="media">
                    <img class="media-object " src="<?php echo base_url() ?>assets/images/xs/avatar5.jpg" alt="">
                    <div class="media-body">
                      <span class="name">Grayson <small class="float-right">11:30AM</small></span>
                      <span class="message">All the Lorem Ipsum generators on the</span>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="offline">
                <a href="javascript:void(0);">
                  <div class="media">
                    <img class="media-object " src="<?php echo base_url() ?>assets/images/xs/avatar2.jpg" alt="">
                    <div class="media-body">
                      <span class="name">Isabella <small class="float-right">11:31AM</small></span>
                      <span class="message">Contrary to popular belief, Lorem Ipsum</span>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="me">
                <a href="javascript:void(0);">
                  <div class="media">
                    <img class="media-object " src="<?php echo base_url() ?>assets/images/xs/avatar1.jpg" alt="">
                    <div class="media-body">
                      <span class="name">John <small class="float-right">05:00PM</small></span>
                      <span class="message">It is a long established fact that a reader</span>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="online">
                <a href="javascript:void(0);">
                  <div class="media">
                    <img class="media-object " src="<?php echo base_url() ?>assets/images/xs/avatar3.jpg" alt="">
                    <div class="media-body">
                      <span class="name">Alexander <small class="float-right">06:08PM</small></span>
                      <span class="message">Richard McClintock, a Latin professor</span>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </aside>

  <!-- Jquery Core Js -->
  <script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->


  <section class="content">
    <div class="body_scroll">
      <div class="block-header">
        <div class="row">
          <div class="col-lg-7 col-md-6 col-sm-12">
            <h2>
              <?= $tittle; ?>
            </h2>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= base_url('Home') ?>"><i class="zmdi zmdi-home"></i> Home</a></li>
              <li class="breadcrumb-item active"><?= $tittle ?></li>
            </ul>
            <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
          </div>
          <div class="col-lg-5 col-md-6 col-sm-12">
            <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
          </div>
        </div>
      </div>

      <?php echo $contents ?>
    </div>
  </section>




  <script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
  <!-- Jquery DataTable Plugin Js -->
  <script src="<?php echo base_url() ?>assets/bundles/datatablescripts.bundle.js"></script>

  <script src="<?php echo base_url() ?>assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
  <script src="<?php echo base_url() ?>assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
  <script src="<?php echo base_url() ?>assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
  <script src="<?php echo base_url() ?>assets/plugins/jquery-datatable/buttons/buttons.flash.min.js"></script>
  <script src="<?php echo base_url() ?>assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
  <script src="<?php echo base_url() ?>assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>

  <script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
  <script src="<?php echo base_url() ?>assets/js/pages/tables/jquery-datatable.js"></script>
</body>

</html>