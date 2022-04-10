@extends ('layouts.hopital.caisse')
@section ('contenu')
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Liste des Paiements</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Paiements</li>
                            <li class="breadcrumb-item active">Liste des Paiements</li>
                        </ul>
                    </div>            
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Liste des paiements</h2>
                            <ul class="header-dropdown">
                                <li>
                                    <a class="tab_btn" href="javascript:void(0);" title="Lire">
                                        <span class='glyphicon glyphicon-list'></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="tab_btn" href="javascript:void(0);" title="Modifier">
                                        <span class='glyphicon glyphicon-edit'></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="tab_btn active" href="javascript:void(0);" title="Supprimer">
                                        <span class='glyphicon glyphicon-remove'></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Numéro Facture</th>
                                            <th>Date de facturation</th>
                                            <th>Patient</th>
                                            <th>Praticien</th>                                         
                                            <th>Remise</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>21</td>
                                            <td>02/21/2017</td>
                                            <td>Christina Bing</td>
                                            <td>Juan Freeman</td>
                                            <td>10%</td>
                                            <td>210</td>
                                        </tr>
                                        <tr>
                                            <td>17</td>
                                            <td>02/21/2017</td>
                                            <td>Christina Bing</td>
                                            <td>Juan Freeman</td>
                                            <td>10%</td>
                                            <td>210</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
