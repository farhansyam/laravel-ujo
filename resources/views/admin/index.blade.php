@extends('admin.master')
@section('content')
  <div id="page-wrapper">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12">
                    <!--   <h3 class="page-header"> Peraturan </h3> -->

                  </div>

              </div>
<br>          
              <div class="row">
                  <div class="col-lg-12">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                         Dashboard
                      </div>
                      <div class="panel-body">


                        <h3>SELAMAT DATANG ADMIN</h3>

                          <div class="row">
              <div class="col-lg-3 col-md-6">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                          <div class="row">
                              <div class="col-xs-3">
                                  <i class="fa fa-user fa-5x"></i>
                              </div>
                              <div class="col-xs-9 text-right">
                                  <div class="huge"><?php echo $lulus ?></div>
                                  <div>Siswa Lulus</div>
                              </div>
                          </div>
                      </div>
                      <a href="#">
                          <div class="panel-footer">
                              <span class="pull-left">View Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                              <div class="clearfix"></div>
                          </div>
                      </a>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <div class="panel panel-red">
                      <div class="panel-heading">
                          <div class="row">
                              <div class="col-xs-3">
                                  <i class="fa fa-user fa-5x"></i>
                              </div>
                              <div class="col-xs-9 text-right">
                                  <div class="huge"><?php echo $tidak_lulus ?></div>
                                  <div>Siswa Tidak Lulus</div>
                              </div>
                          </div>
                      </div>
                      <a href="#">
                          <div class="panel-footer">
                              <span class="pull-left">View Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                              <div class="clearfix"></div>
                          </div>
                      </a>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <div class="panel panel-yellow">
                      <div class="panel-heading">
                          <div class="row">
                              <div class="col-xs-3">
                                  <i class="fa fa-file fa-5x"></i>
                              </div>
                              <div class="col-xs-9 text-right">
                                  <div class="huge"><?php echo $total_user ?></div>
                                  <div>Total User</div>
                              </div>
                          </div>
                      </div>
                      <a href="#">
                          <div class="panel-footer">
                              <span class="pull-left">View Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                              <div class="clearfix"></div>
                          </div>
                      </a>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <div class="panel panel-red">
                      <div class="panel-heading">
                          <div class="row">
                              <div class="col-xs-3">
                                  <i class="fa fa-file fa-5x"></i>
                              </div>
                              <div class="col-xs-9 text-right">
                                  <div class="huge"><?php echo $total_soal ?></div>
                                  <div>Total Soal</div>
                              </div>
                          </div>
                      </div>
                      <a href="#">
                          <div class="panel-footer">
                              <span class="pull-left">View Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                              <div class="clearfix"></div>
                          </div>
                      </a>
                  </div>
              </div>
          </div>


                      </div>
                      <div class="panel-footer">

                      </div>
                  </div>
                  </div>
              </div>
              <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
      </div>
@endsection
