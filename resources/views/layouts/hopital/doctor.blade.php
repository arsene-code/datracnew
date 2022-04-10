<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<!-- Mirrored from www.wrraptheme.com/templates/lucid/hospital/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jan 2022 18:16:33 GMT -->
<head>
<title>Caisse-DATRAC 2.0</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Datrac Bootstrap 4.1.1 Caisse Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">

 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">

<!-- VENDOR CSS -->
<link rel="stylesheet" href="assets/hopital/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/hopital/assets/vendor/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="assets/hopital/assets/vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href="assets/hopital/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="assets/hopital/assets/vendor/toastr/toastr.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/hopital/asset/css/main.css">
<link rel="stylesheet" href="assets/hopital/asset/css/color_skins.css">
</head>
<body class="theme-cyan">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="..\assets\images\datrac.JPG" width="48" height="48" alt="Datrac"></div>
            <p>Please wait...</p>        
        </div>
    </div>
    <!-- Overlay For Sidebars -->

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>

            <div class="navbar-brand">
                <a href="index.html"><img src="..\assets\images\datrac.JPG" alt="Datrac Logo" width="48" height="48"></a>                
            </div>
            
            <div class="navbar-right">
                <form id="navbar-search" class="navbar-form search-form">
                    <input value="" class="form-control" placeholder="Rechercher Ici..." type="text">
                    <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                </form>                

                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                    <li>
                            <a href="/doctor-events" class="icon-menu d-none d-sm-block d-md-none d-lg-block"><i class="icon-calendar"></i></a>
                        </li>
                        <li>
                            <a href="/doctor-chat" class="icon-menu d-none d-sm-block"><i class="icon-bubbles"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="icon-bell"></i>
                                <span class="notification-dot"></span>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li class="header"><strong>Vous avez 1 nouvelle Notification</strong></li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-info text-warning"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Campagne <strong>Vente de vacances</strong> a presque atteint la limite budgétaire.</p>
                                                <span class="timestamp">10h00 aujourd'hui</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>                                                  
                                <li class="footer"><a href="javascript:void(0);" class="more">Voir toutes les notificationss</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="icon-equalizer"></i></a>
                            <ul class="dropdown-menu user-menu menu-icon">
                                <li class="menu-heading">PARAMÈTRES DU COMPTE</li>
                                <li><a href="javascript:void(0);"><i class="icon-note"></i> <span>Basique</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-equalizer"></i> <span>Préferences</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-lock"></i> <span>Vie privée</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-bell"></i> <span>Notifications</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="page-login.html" class="icon-menu"><i class="icon-login"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div id="left-sidebar" class="sidebar">
            <div class="sidebar-scroll">
                <div class="user-account">
                    <img src="../assets/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
                    <div class="dropdown">
                        <span>Bienvenue,</span>
                        <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>M. MOUSSAVOU</strong></a>
                        <ul class="dropdown-menu dropdown-menu-right account">
                            <li><a href="doctor-profile.html"><i class="icon-user"></i>Mon Profil</a></li>
                            <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                            <li><a href="javascript:void(0);"><i class="icon-settings"></i>Paramètres</a></li>
                            <li class="divider"></li>
                            <li><a href="page-login.html"><i class="icon-power"></i>Déconnecter</a></li>
                        </ul>
                    </div>
                    <hr>
                </div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>                              
                </ul>
                    
                <!-- Tab panes -->
                <div class="tab-content p-l-0 p-r-0">
                    <div class="tab-pane active" id="menu">
                        <nav class="sidebar-nav">
                            <ul class="main-menu metismenu">
                                <li class="active"><a href="/doctor"><i class="icon-puzzle"></i><span>Statistique</span></a></li>
                                <li><a href="/suivi-patient"><i class="icon-user"></i>Suivi Patient</a></li>
                                <li class="active"><a href="javascript:void(0);" class="has-arrow"><i class="icon-wallet"></i><span>Dossier Medical</span> </a>
                                    <ul>
                                        <li class="active"><a href="/feuille-soins">Feuille de Soins</a></li>
                                        <li><a href="/feuille-examen">Feuille d'Examen</a></li>
                                        <li><a href="/feuille-hospitalisation">Feuille Hospitalisation</a></li>
                                        <li><a href="/autre-document">Autre document</a></li>
                                    </ul>
                                </li>
                                <li><a href="/rendez-vous"><i class="icon-calendar"></i>rendez-vous</a></li>
                                <li><a href="/doctor-chat"><i class="icon-envelope-open"></i>Chat</a></li>
                                <li><a href="/infos"><i class="icon-list"></i>Infos Hôpital</a></li>
                            </ul>
                        </nav>
                    </div>            
                </div>          
            </div>
        </div>
    </div>

    <div id="main-content">
        @yield('contenu')
    </div>

</div>
    
<!-- Javascript -->
<script src="assets/hopital/asset/bundles/libscripts.bundle.js"></script>
<script src="assets/hopital/asset/bundles/vendorscripts.bundle.js"></script>

<script src="assets/hopital/asset/bundles/chartist.bundle.js"></script>
<script src="assets/hopital/asset/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->
<script src="assets/hopital/asset/bundles/flotscripts.bundle.js"></script> <!-- flot charts Plugin Js -->
<script src="assets/hopital/assets/vendor/toastr/toastr.js"></script>
<script src="assets/hopital/assets/vendor/flot-charts/jquery.flot.selection.js"></script>

<script src="assets/hopital/asset/bundles/mainscripts.bundle.js"></script>
<script src="assets/hopital/asset/js/index.js"></script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/lucid/hospital/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jan 2022 18:17:28 GMT -->
</html>