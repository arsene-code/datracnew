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
                <a href="/"><img src="..\assets\images\datrac.JPG" alt="Datrac Logo" width="20" height="30"></a>
            </div>

            <div class="navbar-right">
{{--                <form id="navbar-search" class="navbar-form search-form">--}}
{{--                    <input value="" class="form-control" placeholder="Rechercher Ici..." type="text">--}}
{{--                    <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>--}}
{{--                </form>--}}

                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
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
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="icon-menu"><i class="icon-login"></i></a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
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
                        <a href="" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>{{ Auth::user()->name }} {{ Auth::user()->surname }}</strong></a>
                        <ul class="dropdown-menu dropdown-menu-right account">
                            <li><a href="doctor-profile.html"><i class="icon-user"></i>Mon Profil</a></li>
                            <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                            <li><a href=""><i class="icon-settings"></i>Paramètres</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-power"></i>Déconnecter</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
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
                                <li class="active"><a href="/index"><i class="icon-home"></i><span>Identifier Patient</span></a></li>
                                <li><a href="/rendezvous"><i class="icon-calendar"></i>Rendez-vous</a></li>
                                <li class=""><a href="" class="has-arrow"><i class="icon-wallet"></i><span>Paiements</span> </a>
                                <ul>
                                    <li class="active"><a href="/paiement">Paiements</a></li>
                                    <li><a href="/add-paiement">Ajouter un paiement</a></li>
                                    <li><a href="/paiement">Facture d'achat</a></li>
                                </ul>
                            </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
    </div>

    <div id="main-content">
        @yield('contenu')
    </div>

</div>

<!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="assets/hopital/asset/bundles/vendorscripts.bundle.js"></script>
<script src="assets/hopital/asset/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->
<script src="assets/hopital/asset/bundles/flotscripts.bundle.js"></script> <!-- flot charts Plugin Js -->
<script src="assets/hopital/assets/vendor/toastr/toastr.js"></script>
<script src="assets/hopital/assets/vendor/flot-charts/jquery.flot.selection.js"></script>

<script src="assets/hopital/asset/bundles/mainscripts.bundle.js"></script>
<script src="assets/hopital/asset/js/index.js"></script>
    <script language="JavaScript">
        $(document).ready(function () {


            $(document).on('click', '#searchAss', function (e) {
                e.preventDefault();

                // alert('ok')
                // var branchid = $(this).data('branch');
                let data =  $('.searchValue').val();

                $.ajax({
                    'url': '/assures/search?name='+data,
                    'type': 'GET',
                    'data': {},
                    'dataType': 'json',

                    success: function(response){ // What to do if we
                        let htmlView = '';
                        if(response.assures.length <= 0){
                           htmlView += `<tr><td colspan="5" class="text-center text-18">No data.</td></tr>`
                        }
                        for(let i = 0; i < response.assures.length; i++){
                            htmlView += `<tr><td>`+ response.assures[i].id + `</td><td>`
                                +response.assures[i].nom+`</td><td>`
                                +response.assures[i].prenom+`</td><td>`
                                +response.assures[i].telephone+`</td><td>`
                                +response.assures[i].sexe+`</td><td>`
                                +`<a href="/dashboard/assure/`+response.assures[i].id+`">
                                                    <button type="button" class="btn btn-sm btn-success"><i class="bi bi-eye-fill"></i> Voir Profil</button>
                                                </a><a href="/dashboard/assure/`+response.assures[i].id+`">
                                                    <button type="button" class="btn btn-sm pl-2 btn-success"> Choisir</button>
                                                </a></td></tr>`;
                        }
                        $('#assureTrouve').html(htmlView);
                    },
                    error: function(response){
                        alert('Error'+response);
                    }
                });
            });

        });
    </script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/lucid/hospital/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jan 2022 18:17:28 GMT -->
</html>
