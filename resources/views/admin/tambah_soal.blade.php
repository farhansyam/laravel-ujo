@extends('admin.master')
@section('content')
  <div id="page-wrapper">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-lg-12">
                        <!--   <h3 class="page-header"> Peraturan </h3> -->

                      </div>

                  </div>

                  <div class="row">
                      <div class="col-lg-12">
                      <div class="panel panel-primary">
                          <div class="panel-heading">
                            Kelola Soal
                          </div>
                          <div class="panel-body">



  <script language="JavaScript">
  function bukajendela(url) {
   window.open(url, "window_baru", "width=800,height=500,left=120,top=10,resizable=1,scrollbars=1");
  }
  </script>

  <h2>Tambah Soal</h2>
            <form method=POST class='form-horizontal' action='modul/mod_soal/aksi_soal.php?module=soal&act=input' enctype='multipart/form-data'>

                          <div class='form-group'>
                            <label for='inputEmail3' class='col-sm-2 control-label'>Pertanyaan</label>
                            <div class='col-sm-10'>
                              <textarea name='soal' style='width: 500px; height: 100px;'></textarea>
                            </div>
                          </div>

                          <div class='form-group'>
                            <label for='inputEmail3' class='col-sm-2 control-label'>Gambar</label>
                            <div class='col-sm-10'>
                              <input type=file name='fupload' size=40>
                                            <br>Tipe gambar harus JPG/JPEG dan ukuran lebar maks: 400 px
                            </div>
                          </div>


                          <div class='form-group'>
                            <label for='inputEmail3' class='col-sm-2 control-label'>Jawaban A</label>
                            <div class='col-sm-4'>
                              <input type=text name='a' class='form-control' size=80 required/>
                            </div>
                          </div>

                          <div class='form-group'>
                            <label for='inputEmail3' class='col-sm-2 control-label'>Jawaban B</label>
                            <div class='col-sm-4'>
                              <input type=text name='b' class='form-control' size=80 required/>
                            </div>
                          </div>

                          <div class='form-group'>
                            <label for='inputEmail3' class='col-sm-2 control-label'>Jawaban C</label>
                            <div class='col-sm-4'>
                              <input type=text name='c' class='form-control' size=80 required/>
                            </div>
                          </div>

                          <div class='form-group'>
                            <label for='inputEmail3' class='col-sm-2 control-label'>Jawaban D</label>
                            <div class='col-sm-4'>
                              <input type=text name='d' class='form-control' size=80 required/>
                            </div>
                          </div>

                          <div class='form-group'>
                            <label for='inputEmail3' class='col-sm-2 control-label'>Kunci Jawaban</label>
                            <div class='col-sm-4'>
                              <select name='knc_jawaban' class='form-control'>
                              <option value='a'>A</option>
                              <option value='b'>B</option>
                              <option value='c'>C</option>
                              <option value='d'>D</option>
                              </select>
                            </div>
                          </div>

                          <div class='form-group'>
                            <label for='inputEmail3' class='col-sm-2 control-label'></label>
                            <div class='col-sm-4'>
                          <input type=submit name=submit value=Simpan class='btn btn-primary'>
                          <input type=button value=Batal onclick=self.history.back() class='btn btn-danger'>
                          </div>
                          </div>
                    </form>
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
          <!-- /#page-wrapper -->


  <script type="text/javascript">
    var $ = jQuery;
    $('#knc_jawaban').val('');
  </script>

@endsection
