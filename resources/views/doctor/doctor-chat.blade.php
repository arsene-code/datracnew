@extends ('layouts.hopital.doctor')
@section ('contenu')
<div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Chat</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Praticien</li>
                            <li class="breadcrumb-item active">Chat</li>
                        </ul>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <div class="bh_chart hidden-xs">
                                <div class="float-left m-r-15">
                                    <small>Feuille de Soins</small>
                                </div>
                            </div>
                            <div class="bh_chart hidden-sm">
                                <div class="float-left m-r-15">
                                    <small>Feuille Examen</small>
                                </div>
                            </div>
                            <div class="bh_chart hidden-sm">
                                <div class="float-left m-r-15">
                                    <small>Feuille Hospitalisation</small>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card chat-app">
                        <div id="plist" class="people-list">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                            <ul class="list-unstyled chat-list mt-2 mb-0">
                                <li class="clearfix">
                                    <img src="../assets/images/xs/avatar1.jpg" alt="avatar" />
                                    <div class="about">
                                        <div class="name">Dr. Vincent Porter</div>
                                        <div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago </div>                                            
                                    </div>
                                </li>
                                <li class="clearfix active">
                                    <img src="../assets/images/xs/avatar2.jpg" alt="avatar" />
                                    <div class="about">
                                        <div class="name">Dr. Aiden Chavez</div>
                                        <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img src="../assets/images/xs/avatar3.jpg" alt="avatar" />
                                    <div class="about">
                                        <div class="name">Dr. Mike Bing</div>
                                        <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                    </div>
                                </li>                                    
                                <li class="clearfix">
                                    <img src="../assets/images/xs/avatar7.jpg" alt="avatar" />
                                    <div class="about">
                                        <div class="name">Dr. Christian Kelly</div>
                                        <div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img src="../assets/images/xs/avatar8.jpg" alt="avatar" />
                                    <div class="about">
                                        <div class="name">Dr. Monica Ward</div>
                                        <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img src="../assets/images/xs/avatar9.jpg" alt="avatar" />
                                    <div class="about">
                                        <div class="name">Dr. Dean Henry</div>
                                        <div class="status"> <i class="fa fa-circle offline"></i> offline since Oct 28 </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="chat">
                            <div class="chat-header clearfix">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                            <img src="../assets/images/xs/avatar2.jpg" alt="avatar" />
                                        </a>
                                        <div class="chat-about">
                                            <h6 class="m-b-0">Dr. Aiden Chavez</h6>
                                            <small>Last seen: 2 hours ago</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 hidden-sm text-right">
                                        <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="icon-camera"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-outline-primary"><i class="icon-camcorder"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-outline-info"><i class="icon-settings"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-outline-warning"><i class="icon-question"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-history">
                                <ul class="m-b-0">
                                    <li class="clearfix">
                                        <div class="message-data text-right">
                                            <span class="message-data-time" >10:10 AM, Today</span>
                                            <img src="../assets/images/xs/avatar7.jpg" alt="avatar">
                                        </div>
                                        <div class="message other-message float-right"> Hi Aiden, how are you? How is the project coming along? </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="message-data">
                                            <span class="message-data-time">10:12 AM, Today</span>
                                        </div>
                                        <div class="message my-message">Are we meeting today?</div>                                    
                                    </li>                               
                                    <li class="clearfix">
                                        <div class="message-data">
                                            <span class="message-data-time">10:15 AM, Today</span>
                                        </div>
                                        <div class="message my-message">Project has been already finished and I have results to show you.</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat-message clearfix">
                                <div class="input-group mb-0">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-paper-plane"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Enter text here...">                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection