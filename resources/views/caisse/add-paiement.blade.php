@extends ('layouts.hopital.caisse')
@section ('contenu')
<div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Ajouter des paiements</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Paiements</li>
                            <li class="breadcrumb-item active">Ajouter des paiements</li>
                        </ul>
                    </div>            
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="card">
                        <div class="header">
                            <h2>Informations pour les patients</h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Numéro de facture">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nom du patient">
                                    </div>
                                </div>
                                <div class="col-sm-12 ">
                                    <div class="form-group">
                                        <select class="form-control show-tick">
                                        <option value="">- Praticien -</option>
                                        <option>Dr. John Smith</option>
                                        <option>Dr. Maryam Amiri</option>
                                        <option>Dr. Hossein Shams </option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 ">
                                    <select class="form-control show-tick">
                                        <option value="">- Assurance -</option>
                                        <option>CNAMGS</option>
                                        <option>ASCOMA</option>
                                        <option>SANLAM</option>
                                    </select>       
                                </div>                             
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Informations de paiement</h2>                           
                        </div>
                        <div class="body">
                            <p>
                                <img src="../assets/images/mastercard.png" class="m-r-5" alt="">
                                <img src="../assets/images/visa-card.png" class="m-r-5" alt="">
                                <img src="../assets/images/paypal.png" alt="">
                            </p>
                            <p class="alert alert-success">Succès ou erreur de texte</p>                            
                            <form>
                                <div class="form-group">
                                    <label>Nom complet (sur la carte)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="username" placeholder="" required="">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>Card number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="cardNumber" placeholder="">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label><span class="hidden-xs">Expiration</span> </label>
                                            <div class="form-inline">
                                                <select class="form-control" style="width:45%">
                                                    <option>MM</option>
                                                    <option>01 - Janiary</option>
                                                    <option>02 - February</option>
                                                    <option>03 - February</option>
                                                </select>
                                                <span style="width:10%; text-align: center"> / </span>
                                                <select class="form-control" style="width:45%">
                                                    <option>YY</option>
                                                    <option>2018</option>
                                                    <option>2019</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
                                            <input class="form-control" required="" type="text">
                                        </div>
                                    </div>
                                </div>
                                <button class="subscribe btn btn-primary btn-block" type="button"> Confirm  </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection