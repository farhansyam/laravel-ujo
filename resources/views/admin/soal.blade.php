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

  <h2>Soal</h2><div style='text-align:left;padding-left:30px;'>

    <a class='btn btn-primary' href='{{url('admin/kelola-soal/tambah-soal')}}';">Tambah Soal</a><div style='text-align:right;padding-right:30px;'><br>
      <form method="POST" action="?module=soal&amp;act=carisoal">
           <input type="text" name="cari" placeholder="Masukkan Pertanyaan" list="auto" size="40" required=""> <input type="submit" class="btn btn-danger" value="Cari"></form>
  </div> <table class='table table-striped table-bordered table-hover'>
    <tr><th>No</th><th>Pertanyaan</th><th>Status</th><th>aksi</th><th>View</th><th>Status</th></tr><tr>
      @php
        $i = 1;
      @endphp
      @foreach ($soals as $soal)
       <tr><td>{{$i++}}</td>
       <td>
        @php
          $soalnya = mb_substr($soal->soal,0,60)."...";
          echo $soalnya
        @endphp
      </td>
  <td align='center'>{{$soal->aktif}}</td>
       <td>
  <a href=?module=soal&act=editsoal&id=1><i class='fa fa-pencil-square-o'></i></a> |
  <a href='{{url('admin/kelola-soal/hapus')}}/{{$soal->id}}'><i class='fa fa-trash'></i></a></td>
  <td> <a href='#' onclick="bukajendela('kelola-soal/preview{{'/'.$soal->id}}')"><i class='fa fa-eye'></i></a></td><td><a href="{{url('admin/kelola-soal/status')}}/{{$soal->id}}">
      @if ($soal->aktif == 'Y')
        <button class="btn btn-default">Non Aktifkan</button>
      @else
        <button class="btn btn-default">Aktifkan</button>
      @endif
  </a></td>   </td>
  </tr>
  @endforeach
  </table>
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

  <!-- /#page-wrapper -->

  </div>
@endsection
