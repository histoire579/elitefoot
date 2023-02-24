<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Elitefootball Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('dash/assets/images/favicon.ico')}}">

        <!-- DataTables -->
        <link href="{{ asset('dash/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('dash/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{asset('dash/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />     

        <!-- Bootstrap Css -->
        <link href="{{asset('dash/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('dash/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('dash/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('dash/assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('dash/assets/libs/bootstrap-fileupload/bootstrap-fileupload.css') }}" rel="stylesheet">

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('dash/assets/images/logo-sm-dark.png')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('dash/assets/images/logo-dark.png')}}" alt="" height="20">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('dash/assets/images/logo-sm-light.png')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('dash/assets/images/logo-light.png')}}" alt="" height="20">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-backburger"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                     

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{-- <img class="rounded-circle header-profile-user" src="dash/assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar"> --}}
                                <span class="d-none d-sm-inline-block ml-1">{{ Auth::user()->name }}</span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                {{-- <a class="dropdown-item" href="#"><i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-credit-card-outline font-size-16 align-middle mr-1"></i> Billing</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-account-settings font-size-16 align-middle mr-1"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-lock font-size-16 align-middle mr-1"></i> Lock screen</a> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('administration.logout') }}"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout
                                  <form id="logout-form" action="{{ route('administration.logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                                </a>
                            </div>
                        </div>
            
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="index.html" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i><span class="badge badge-pill badge-success float-right">3</span>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="/administration/competition" class=" waves-effect">
                                    <i class="mdi mdi-calendar-month"></i>
                                    <span>Compétition</span>
                                </a>
                            </li>

                            <li>
                                <a href="/administration/saison" class=" waves-effect">
                                    <i class="mdi mdi-calendar-month"></i>
                                    <span>Saison</span>
                                </a>
                            </li>

                            <li>
                                <a href="/administration/stade" class=" waves-effect">
                                    <i class="mdi mdi-file-code-outline"></i>
                                    <span>Stade</span>
                                </a>
                            </li>

                            <li>
                                <a href="/administration/poste" class=" waves-effect">
                                    <i class="mdi mdi-file-powerpoint-box-outline"></i>
                                    <span>Poste</span>
                                </a>
                            </li>

                            <li>
                                <a href="/administration/poule" class=" waves-effect">
                                    <i class="mdi mdi-file-powerpoint-box-outline"></i>
                                    <span>Phase</span>
                                </a>
                            </li>

                            <li>
                                <a href="/administration/journee" class=" waves-effect">
                                    <i class="mdi mdi-file-powerpoint-box-outline"></i>
                                    <span>Journées</span>
                                </a>
                            </li>

                            <li>
                                <a href="/administration/arbitre" class=" waves-effect">
                                    <i class="mdi mdi-format-underline"></i>
                                    <span>Arbitres</span>
                                </a>
                            </li>

                            <li>
                                <a href="/administration/joueur" class=" waves-effect">
                                    <i class="mdi mdi-format-underline"></i>
                                    <span>Joueurs</span>
                                </a>
                            </li>

                            <li>
                                <a href="/administration/club" class=" waves-effect">
                                    <i class="mdi mdi-format-underline"></i>
                                    <span>Club</span>
                                </a>
                            </li>

                            <li>
                                <a href="/administration/effectif" class=" waves-effect">
                                    <i class="mdi mdi-format-underline"></i>
                                    <span>Effactifs</span>
                                </a>
                            </li>

                            <li>
                                <a href="/administration/detail-competion-saison" class=" waves-effect">
                                    <i class="mdi mdi-format-underline"></i>
                                    <span>Club d'une compétition par saison et par phase</span>
                                </a>
                            </li>

                            <li>
                                <a href="/administration/match" class=" waves-effect">
                                    <i class="mdi mdi-format-underline"></i>
                                    <span>Matchs</span>
                                </a>
                            </li>

                            <li>
                                <a href="/administration/feuille" class=" waves-effect">
                                    <i class="mdi mdi-format-underline"></i>
                                    <span>Feuille match</span>
                                </a>
                            </li>

                            <li>
                                <a href="/administration/detail-match" class=" waves-effect">
                                    <i class="mdi mdi-format-underline"></i>
                                    <span>Détail match</span>
                                </a>
                            </li>

                            <li>
                                <a href="/administration/classement" class=" waves-effect">
                                    <i class="mdi mdi-format-underline"></i>
                                    <span>Classement</span>
                                </a>
                            </li>

                            <li>
                                <a href="/administration/statistique-joueur" class=" waves-effect">
                                    <i class="mdi mdi-poll"></i>
                                    <span>Statistique joueur</span>
                                </a>
                            </li>

                            <li>
                                <a href="/administration/actualite" class=" waves-effect">
                                    <i class="mdi mdi-format-underline"></i>
                                    <span>Actualités</span>
                                </a>
                            </li>

                            <li>
                                <a href="/administration/boutique" class=" waves-effect">
                                    <i class="mdi mdi-file-code-outline"></i>
                                    <span>Boutiques</span>
                                </a>
                            </li>
                            

                            <li>
                                <a href="/administration/pub" class=" waves-effect">
                                    <i class="mdi mdi-file-code-outline"></i>
                                    <span>Publicités</span>
                                </a>
                            </li>

                            <li>
                                <a href="/administration/partenaire" class=" waves-effect">
                                    <i class="mdi mdi-black-mesa"></i>
                                    <span>Partenaires</span>
                                </a>
                            </li>

                            <li>
                                <a href="/administration/pays" class=" waves-effect">
                                    <i class="mdi mdi-black-mesa"></i>
                                    <span>Pays</span>
                                </a>
                            </li>
                            

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-table-settings"></i>
                                    <span>Tables</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Tables</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="mdi mdi-file-document-box-check-outline"></i>
                                    <span class="badge badge-pill badge-danger float-right">07</span>
                                    <span>Forms</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                    <li><a href="form-editors.html">Form Editors</a></li>
                                    <li><a href="form-uploads.html">Form File Upload</a></li>
                                    <li><a href="form-mask.html">Form Mask</a></li>
                                    <li><a href="form-summernote.html">Summernote</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-poll"></i>
                                    <span>Charts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="charts-morris.html">Morris</a></li>
                                    <li><a href="charts-apex.html">Apex</a></li>
                                    <li><a href="charts-chartist.html">Chartist</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs</a></li>
                                    <li><a href="charts-flot.html">Flot</a></li>
                                    <li><a href="charts-sparkline.html">Sparkline</a></li>
                                    <li><a href="charts-knob.html">Jquery Knob</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-flip-horizontal"></i>
                                    <span>Layouts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="layouts-light-sidebar.html">Light Sidebar</a></li>
                                    <li><a href="layouts-sidebar-sm.html">Small Sidebar</a></li>
                                    <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                    <li><a href="layouts-dark-topbar.html">Dark Topbar</a></li>
                                    <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-share-variant"></i>
                                    <span>Multi Level</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);">Level 1.1</a></li>
                                    <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="javascript: void(0);">Level 2.1</a></li>
                                            <li><a href="javascript: void(0);">Level 2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>

                        <div class="sidebar-section mt-5 mb-3">
                            <h6 class="text-reset font-weight-medium">
                                Project Completed
                                <span class="float-right">67%</span>
                            </h6>
                            <div class="progress mt-3" style="height: 4px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        @yield('content')
                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                2019 © Apaxy.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="/dash/assets/libs/jquery/jquery.min.js"></script>
        <script src="/dash/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/dash/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="/dash/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="/dash/assets/libs/node-waves/waves.min.js"></script>

        <!-- Required datatable js -->
        <script src="/dash/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="/dash/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="/dash/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="/dash/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="/dash/assets/libs/jszip/jszip.min.js"></script>
        <script src="/dash/assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="/dash/assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="/dash/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="/dash/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="/dash/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="/dash/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="/dash/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="/dash/assets/js/pages/datatables.init.js"></script>
        <!-- dropzone js -->
        <script src="/dash/assets/libs/dropzone/min/dropzone.min.js"></script>

        <script src="{{ asset('dash/assets/libs/bootstrap-fileupload/bootstrap-fileupload.js') }}" defer></script>

        <!--tinymce js-->
        <script src="{{asset('dash/assets/libs/tinymce/tinymce.min.js')}}"></script>

        <!-- init js -->
        <script src="{{asset('dash/assets/js/pages/form-editor.init.js')}}"></script>

        <script src="/dash/assets/js/app.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        @yield('extra-js')

    </body>
</html>
