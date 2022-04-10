@extends('layouts.app')

@section('content')
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item mb-4">
                <a class="" href="/dashboard">
                    <img src="/assets/images/assurance/cnamgs.png" alt="cnamgs" width="100%" height="100%">
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="/dashboard">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#utilisateurs-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-people"></i><span>Utilisateurs</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="utilisateurs-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/dashboard/roles">
                            <i class="bi bi-circle"></i><span>Gestions des roles</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/services">
                            <i class="bi bi-circle"></i><span>Gestion des Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/assures">
                            <i class="bi bi-circle"></i><span>Gestions des Assurés</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/statistiques">
                            <i class="bi bi-circle"></i><span>Statistiques</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Comptabilité Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#Etablissement-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-building"></i><span>Etablissement</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="Etablissement-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="icons-bootstrap.html">
                            <i class="bi bi-circle"></i><span>Ajouter Etablissement</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons-remix.html">
                            <i class="bi bi-circle"></i><span>Modifier Etablissement</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons-boxicons.html">
                            <i class="bi bi-circle"></i><span>Etablissements</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Etablissement Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-clipboard-data"></i><span>Dossier Medical</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="icons-bootstrap.html">
                            <i class="bi bi-circle"></i><span>Dossiers Medicaux</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons-remix.html">
                            <i class="bi bi-circle"></i><span>Dossiers Refutés</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Scolarité Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-faq.html">
                    <i class="bi bi-question-circle"></i>
                    <span>F.A.Q</span>
                </a>
            </li><!-- End F.A.Q Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-contact.html">
                    <i class="bi bi-envelope"></i>
                    <span>Contact</span>
                </a>
            </li><!-- End Contact Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        <div class="card-body">
            <div class="d-flex flex-row justify-content-between align-content-end  px-3 mx-5">
                <h5 class="card-title float-left d-inline-block">Assuré Détail <span>| CNAMGS</span></h5>
            </div>

            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                <div class="card px-3 mx-5 pt-3">
                    <div class="card-body">
                        <!-- No Labels Form -->
                        <form class="row g-3" method="post" action="{{ route('add-assure-post') }}">
                            @csrf
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Nom Assuré" name="nomAss" value="{{$assure->nom}}" disabled>
                                <div id="emailHelp" class="form-text pl-4">Nom Complet de L'assuré</div>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Prénoms" name="prenom" value="{{$assure->prenom}}" disabled>
                                <div id="emailHelp" class="form-text pl-4">Prenom Complet de L'assuré</div>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email" name="email" value="{{$assureProfil->email}}" disabled>
                                <div id="emailHelp" class="form-text pl-4">Email de L'assuré</div>
                            </div>
                            <div class="col-md-6">
                                <input type="password" class="form-control" placeholder="Password" name="password"  value="{{$assureProfil->password}}" disabled>
                                <div id="emailHelp" class="form-text pl-4">Password de L'assuré</div>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Nom utilisateur"  value="{{$assureProfil->username}}" disabled>
                                <div id="emailHelp" class="form-text pl-4">Username de L'assuré</div>
                            </div>
                            <div class="col-md-3">
                                <select id="civilite" class="form-select" name="civilite" disabled>
                                    <option selected>{{$assure->civilite}}</option>
                                </select>
                            </div>
                            {{--                            <div class="col-12">--}}
                            {{--                                <input type="file" name="avatar"/>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-md-4">--}}
                            {{--                                <select id="inputState" class="form-select">--}}
                            {{--                                    <option selected>Choisir profil...</option>--}}
                            {{--                                    <option>...</option>--}}
                            {{--                                </select>--}}
                            {{--                                <div id="emailHelp" class="form-text pl-4">Nom Complet de L'assuré</div>--}}
                            {{--                            </div>--}}
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Matricule" name="matricule" value="{{$assure->matricule}}" disabled>
                                <div id="emailHelp" class="form-text pl-4">Matricule de L'assuré</div>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="adresse" name="adresse" value="{{$assure->adresse}}" disabled>
                                <div id="emailHelp" class="form-text pl-4">Adresse Complete de L'assuré</div>
                            </div>
                            <div class="col-md-4">
                                <select id="inputState" class="form-select" name="sexe" disabled>
                                    <option selected>{{$assure->sexe}}</option>
                                </select>
                                <div id="emailHelp" class="form-text pl-4">Sexe de L'assuré</div>
                            </div>
                            <div class="col-md-6">
                                <input type="date" class="form-control" placeholder="date Naissance" name="naissance" value="{{$assure->date_nais}}" disabled>
                                <div id="emailHelp" class="form-text pl-4">Date de Naissance de L'assuré</div>
                            </div>
                            <div class="col-md-6">
                                <input type="date" class="form-control" placeholder="date Fin de Contrat" name="fincontrat" value="{{$assure->date_fin_con}}" disabled>
                                <div id="emailHelp" class="form-text pl-4">Date de Fin Contrat de L'assuré</div>
                            </div>
                            <div class="col-md-3">
                                <input type="tel" class="form-control" placeholder="Numero Telephone" name="telephone" value="{{$assure->telephone}}" disabled>
                            </div>
                            <div class="text-center mt-3 pt-3 d-flex justify-content-evenly">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                <button type="reset" class="btn btn-secondary btn-block">Reset</button>
                            </div>
                        </form><!-- End No Labels Form -->

                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
