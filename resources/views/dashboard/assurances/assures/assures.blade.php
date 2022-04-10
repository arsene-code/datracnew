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
                        <a href="/dashboard/concours-gma">
                            <i class="bi bi-circle"></i><span>Gestions des roles</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons-bootstrap.html">
                            <i class="bi bi-circle"></i><span>Gestion des Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons-boxicons.html">
                            <i class="bi bi-circle"></i><span>Gestions des Assurés</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons-boxicons.html">
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
            <div class="d-flex flex-row justify-content-between align-content-end">
                <h5 class="card-title float-left d-inline-block">Liste Assurés <span>| Today</span></h5>
                <a href="/dashboard/add-assure" class="card-title py-1 px-2 btn btn-outline-primary btn-sm float-end"><i class="bi bi-person-plus"></i> Ajouter</a>
            </div>

            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                <div class="dataTable-top">
                    <div class="dataTable-dropdown"><label><select class="dataTable-selector">
                                <option value="5">5</option>
                                <option value="10" selected="">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                            </select> entries per page</label></div>
                    <div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text">
                    </div>
                </div>
                <div class="dataTable-container">
                    <table class="table table-borderless datatable dataTable-table">
                        <thead>
                        <tr>
                            <th scope="col" data-sortable="">
                                <a href="" class="dataTable-sorter">#Matricule</a>
                            </th>
                            <th scope="col" data-sortable=""><a href="#"
                                                                class="dataTable-sorter">Noms</a>
                            </th>
                            <th scope="col" data-sortable=""><a href="#"
                                                                class="dataTable-sorter">Prenoms</a>
                            </th>
                            <th scope="col" data-sortable=""><a href="#"
                                                                class="dataTable-sorter">Sexe</a>
                            </th>
                            <th scope="col" data-sortable=""><a href="#"
                                                                class="dataTable-sorter">Fin Contrat</a>
                            </th>
                            <th scope="col" data-sortable=""><a href="#"
                                                                class="dataTable-sorter">Telephone</a>
                            </th>
                            <th scope="col" data-sortable=""><a href="#"
                                                                class="dataTable-sorter">Type Assure</a>
                            </th>
                            <th scope="col" data-sortable=""><a href="#"
                                                                class="dataTable-sorter">Assurance</a>
                            </th>
                            <th scope="col"><a href="#"
                                               class="dataTable-sorter">Actions</a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($assures as $item)
                                <tr>
                                    <th scope="row"><a href="#">#{{$item->n_matricule}}</a></th>
                                    <td>{{$item->nom}}</td>
                                    <td>{{$item->prenom}}</td>
                                    <td>{{$item->sexe}}</td>
                                    <td><span class="badge bg-success">{{$item->date_fin_con}}</span></td>
                                    <td>{{$item->telephone}}</td>
                                    <td>{{$item->type_assure_id}}</td>
                                    <td>{{$item->assurance_id}}</td>
                                    <td><a href="/dashboard/assure/{{$item->id}}">
                                            <button type="button" class="btn btn-warning"><i class="bi bi-eye-fill"></i></button>
                                        </a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="dataTable-bottom">
                    <div class="dataTable-info">Showing 1 to 5 of 5 entries</div>
                    <nav class="dataTable-pagination">
                        <ul class="dataTable-pagination-list"></ul>
                    </nav>
                </div>
            </div>

        </div>
    </main>
@endsection
