@extends('layouts.app')

@section('content')
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link " href="/dashboard-superadmin">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#utilisateurs-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-people"></i><span>Utilisateurs</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="utilisateurs-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/dashboard-superadmin/users/users-liste">
                            <i class="bi bi-circle"></i><span>Gestions des roles</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard-superadmin">
                            <i class="bi bi-circle"></i><span>Statistiques</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#medicaments-nav" data-bs-toggle="collapse" href="#">
                    <i class="bx bx-capsule"></i><span>Medicaments</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="medicaments-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/dashboard/superadmin/medicaments/medicaments-liste">
                            <i class="bi bi-circle"></i><span>Gestions Medicaments</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard-superadmin">
                            <i class="bi bi-circle"></i><span>Statistiques</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            >
                <a class="nav-link collapsed" data-bs-target="#affections-nav" data-bs-toggle="collapse" href="#">
                    <i class="bx bxs-band-aid"></i><span>Affections</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="affections-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/dashboard/superadmin/affections/affections-liste">
                            <i class="bi bi-circle"></i><span>Gestion Affections</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard-superadmin">
                            <i class="bi bi-circle"></i><span>Statistiques</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#appareillages-nav" data-bs-toggle="collapse" href="#">
                    <i class="bx bx-accessibility"></i><span>Appareillages</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="appareillages-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/dashboard/superadmin/appareillages/appareillage">
                            <i class="bi bi-circle"></i><span>Gestion Appareillages</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard-superadmin">
                            <i class="bi bi-circle"></i><span>Statistiques</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#actes-nav" data-bs-toggle="collapse" href="#">
                    <i class="bx bxs-hand"></i><span>Actes</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="actes-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/dashboard/superadmin/actes/actes-liste">
                            <i class="bi bi-circle"></i><span>Gestion Actes</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard-superadmin">
                            <i class="bi bi-circle"></i><span>Statistiques</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#Etablissement-nav" data-bs-toggle="collapse" href="#">
                    <i class="bx bxs-institution"></i><span>Etablissement</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="Etablissement-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/dashboard/superadmin/etablissement/etablissement-add">
                            <i class="bi bi-circle"></i><span>Ajouter Etablissement</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/superadmin/etablissement/etablissement-modify">
                            <i class="bi bi-circle"></i><span>Modifier Etablissement</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/superadmin/etablissement/etablissement-liste">
                            <i class="bi bi-circle"></i><span>Etablissements</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#prestations-nav" data-bs-toggle="collapse" href="#">
                    <i class="bx bxs-report"></i><span>Prestations</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="prestations-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/dashboard/superadmin/prestations/prestations-liste">
                            <i class="bi bi-circle"></i><span>Gestion Prestations</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard-superadmin">
                            <i class="bi bi-circle"></i><span>Statistiques</span>
                        </a>
                    </li>
                </ul>
            </li>


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
                <h5 class="card-title float-left d-inline-block">Ajouter Un Utilisateur</h5>
            </div>

            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                <div class="card px-3 mx-5 pt-3">
                    <div class="card-body">
                        <!-- No Labels Form -->
                        <form class="row g-3" method="post" action="{{ route('add-assure-post') }}">
                            @csrf
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Nom" name="nom" required>
                                <div id="emailHelp" class="form-text pl-4">Nom Complet</div>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Prénoms" name="prenom" required>
                                <div id="emailHelp" class="form-text pl-4">Prenom Complet</div>
                            </div>
                            <div class="col-md-12">
                                <input type="email" class="form-control" placeholder="Email" name="email" required>
                                <div id="emailHelp" class="form-text pl-4">Email de l'Utilisateur</div>
                            </div>
                            <div class="col-md-6">
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                                <div id="emailHelp" class="form-text pl-4">Password de L'assuré</div>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Nom utilisateur" name="username" required>
                                <div id="emailHelp" class="form-text pl-4">Username de L'assuré</div>
                            </div>
                            <div class="col-md-3">
                                <select id="civilite" class="form-select" name="civilite" required>
                                    <option selected>Civilité</option>
                                    <option value="M.">Monsieur</option>
                                    <option value="Mlle">Mademoiselle</option>
                                    <option value="Mme">Madame</option>
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
                                <input type="text" class="form-control" placeholder="Matricule" name="matricule" required>
                                <div id="emailHelp" class="form-text pl-4">Matricule de L'assuré</div>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="adresse" name="adresse" required>
                                <div id="emailHelp" class="form-text pl-4">Adresse Complete de L'assuré</div>
                            </div>
                            <div class="col-md-4">
                                <select id="inputState" class="form-select" name="sexe" required>
                                    <option selected>Sexe</option>
                                    <option value="Masculin">Masculin</option>
                                    <option value="feminin">Feminin</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="date" class="form-control" placeholder="date Naissance" name="naissance" required>
                                <div id="emailHelp" class="form-text pl-4">Date de Naissance de L'assuré</div>
                            </div>
                            <div class="col-md-6">
                                <input type="date" class="form-control" placeholder="date Fin de Contrat" name="fincontrat" required>
                                <div id="emailHelp" class="form-text pl-4">Date de Fin Contrat de L'assuré</div>
                            </div>
                            <div class="col-md-3">
                                <input type="tel" class="form-control" placeholder="Numero Telephone" name="telephone" required>
                            </div>
                            <div class="col-md-3">
                                <select id="inputState" class="form-select" name="ville" required >
                                    <option selected>Ville</option>
{{--                                    @foreach ($villes as $ville)--}}
{{--                                        <option value="{{$ville['id']}}">{{$ville['libelle']}}</option>--}}
{{--                                    @endforeach--}}
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="inputState" class="form-select" name="typeassure" required>
                                    <option selected>Type Assure</option>
                                    <option value="1">GEF (Gabonais Economiquement Faible)</option>
                                    <option value="2">Secteur Public</option>
                                    <option value="3">Secteur Privé</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="inputState" class="form-select" name="assurance" required>
                                    <option selected>Assurance</option>
{{--                                    @foreach ($assurances as $assurance)--}}
{{--                                        <option value="{{$assurance['id']}}">{{$assurance['nom_assurance']}}</option>--}}
{{--                                    @endforeach--}}
                                </select>
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
