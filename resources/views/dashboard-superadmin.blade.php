@extends('layouts.app')

@section('content')
    <x:notify-messages />
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
        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Utilisateurs</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{  $users->count()  }}</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Medicaments</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bx bx-capsule"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $medicaments->count() }}</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Appareillages</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bx bx-accessibility"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $appareillages->count() }}</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->


                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Actes</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bx bxs-hand"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $actes->count() }}</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->


                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Etablissement</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bx bxs-institution"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $etablissements->count() }}</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->


                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Prestations</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bx bxs-report"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{  $prestations->count()  }}</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- Recent Activity -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                            <div class="activity">

                                <div class="activity-item d-flex">
                                    <div class="activite-label">32 min</div>
                                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                    <div class="activity-content">
                                        Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">56 min</div>
                                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                    <div class="activity-content">
                                        Voluptatem blanditiis blanditiis eveniet
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">2 hrs</div>
                                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                    <div class="activity-content">
                                        Voluptates corrupti molestias voluptatem
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">1 day</div>
                                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                    <div class="activity-content">
                                        Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">2 days</div>
                                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                    <div class="activity-content">
                                        Est sit eum reiciendis exercitationem
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">4 weeks</div>
                                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                    <div class="activity-content">
                                        Dicta dolorem harum nulla eius.
                                    </div>
                                </div><!-- End activity item-->

                            </div>

                        </div>
                    </div><!-- End Recent Activity -->

                </div><!-- End Right side columns -->

            </div>
        </section>
        <!-- ======= Features Section ======= -->
        <section id="features" class="features mt-1">
            <div class="card-body">
                <div class="d-flex flex-row justify-content-between align-content-end">
                    <h5 class="card-title float-left d-inline-block">Liste Utilisateurs <span>| Today</span></h5>
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
                                <th scope="col" data-sortable=""><a href="#"
                                                                    class="dataTable-sorter">Noms</a>
                                </th>
                                <th scope="col" data-sortable=""><a href="#"
                                                                    class="dataTable-sorter">Prenoms</a>
                                </th>
                                <th scope="col" data-sortable=""><a href="#"
                                                                    class="dataTable-sorter">email</a>
                                </th>
                                <th scope="col" data-sortable=""><a href="#"
                                                                    class="dataTable-sorter">Username</a>
                                </th>
                                <th scope="col"><a href="#"
                                                   class="dataTable-sorter">Actions</a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $item)
                                <tr>
                                    <th scope="row"><a href="#">#{{$item->name}}</a></th>
                                    <td>{{$item->surname}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->username}}</td>
                                    <td>
                                        <button type="button" class="btn p-0 px-1 btn-outline-success" id=""><i class="bi bi-eye-fill"></i></button>
                                        <a href="/dashboard-superadmin/users-modifier/{{$item->id}}">
                                            <button type="button" class="btn p-0 px-1 btn-outline-warning">
                                                <i class="bi bi-pencil-fill"></i>
                                            </button>
                                        </a>
                                        @if($item->status==1)
                                            <button type="button" class="btn p-0 px-1 btn-outline-danger" data-value="{{ $item->id }}"><i class="bi bi-trash-fill"></i></button>
                                        @endif
                                        @if($item->status==0)
                                            <button type="button" class="btn p-0 px-1 btn-outline-info" data-value="{{ $item->id }}"><i class="bi bi-person-check-fill"></i></button>
                                        @endif
                                    </td>
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
        </section><!-- End Features Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features mt-3">
            <div class="card-body">
                <div class="d-flex flex-row justify-content-between align-content-end">
                    <h5 class="card-title float-left d-inline-block">Liste Etablissements <span>| Today</span></h5>
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
                                    <a href="" class="dataTable-sorter">#CodEtablissement</a>
                                </th>
                                <th scope="col" data-sortable=""><a href="#"
                                                                    class="dataTable-sorter">Nom Etablissement</a>
                                </th>
                                <th scope="col" data-sortable=""><a href="#"
                                                                    class="dataTable-sorter">Raison Sociale</a>
                                </th>
                                <th scope="col" data-sortable=""><a href="#"
                                                                    class="dataTable-sorter">Telephone</a>
                                </th>
                                <th scope="col"><a href="#"
                                                   class="dataTable-sorter">Actions</a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @for($i=0; $i<5; $i++)

                            @endfor
                            @foreach($etablissements as $item)
                                <tr>
                                    <th scope="row"><a href="#">#{{$item->code_etablissement}}</a></th>
                                    <td>{{$item->nom_etablissement}}</td>
                                    <td>{{$item->raison_sociale}}</td>
                                    <td>{{$item->tel}}</td>
                                    <td>
                                        <button type="button" class="btn p-0 px-1 btn-outline-success"><i class="bi bi-eye-fill"></i></button>
                                        <button type="button" class="btn p-0 px-1 btn-outline-warning"><i class="bi bi-pencil-fill"></i></button>
                                        <button type="button" class="btn p-0 px-1 btn-outline-danger"><i class="bi bi-trash-fill"></i></button>
                                    </td>
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
        </section><!-- End Features Section -->
    </main>
@endsection
