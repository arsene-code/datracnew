@extends ('layouts.hopital.caisse')
@section ('contenu')
<div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Caisse</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/caisse"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Identification Patient</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="body">
                            <div class="row d-flex flex-row" id="adv-search">
                                <div class="col-11 px-1">
                                    <input type="text" class="form-control searchValue" placeholder="Entrez le Nom de l'Assure..." />
                                </div>
                                <div class="col-1 px-0">
                                    <button type="button" class="btn btn-primary" id="searchAss"><span class="icon-magnifier" aria-hidden="true"></span></button>
                                </div>
                                {{--                                <div class="input-group-btn">--}}
{{--                                    <div class="btn-group" role="group">--}}
{{--                                        <div class="dropdown dropdown-lg">--}}
{{--                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>--}}
{{--                                            <div class="dropdown-menu dropdown-menu-right" role="menu">--}}
{{--                                                <form class="form-horizontal">--}}
{{--                                                    <div class="form-group">--}}
{{--                                                    <label>Filtrer par</label>--}}
{{--                                                    <select class="form-control">--}}
{{--                                                        <option value="0" selected>Sélection par</option>--}}
{{--                                                        <option value="1">Nom du Titulaire</option>--}}
{{--                                                        <option value="2">Numéro d'Identification</option>--}}
{{--                                                        <option value="3">Ayant-Droit</option>--}}
{{--                                                    </select>--}}
{{--                                                    </div>--}}
{{--                                                    <button type="submit" class="btn btn-primary btn-block">Rechercher</button>--}}
{{--                                                </form>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                        <div class="body">
                            <ul class="nav nav-tabs-new m-b-20">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#cnamgs">CNAMGS</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ascoma">ASCOMA</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sunu">SUNU</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sanlam">SANLAM</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#beneficial">BENEFICIAL</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#axa">AXA</a></li>
                            </ul>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label pl-3">Résultat Recherche </label>
                            <div class="row d-none" id="noResults">
                                <div class="col-12">
                                    <h3>Pas de Résultats</h3>
                                </div>
                            </div>
                            <div class="row" id="result">
                                <div class="col-12">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Noms</th>
                                            <th scope="col">Prénoms</th>
                                            <th scope="col">Telephone</th>
                                            <th scope="col">Sexe</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody id="assureTrouve">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
@endsection
