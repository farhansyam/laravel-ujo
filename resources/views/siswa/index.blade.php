@extends('siswa.master')
@section('content')



        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                      <!--   <h3 class="page-header"> Peraturan </h3> -->

                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-12">
                      <br><br>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           Peraturan
                        </div>
                        <div class="panel-body">

       <h3 align='center'>{{$aturan->nama_ujian}}</h3><br>
       Waktu Pengerjaan : {{$aturan->waktu}} menit<br>
       Jumlah Soal : {{$jumlah}}<br>
       <p>
       <h2>PERATURAN</h2><br>
          @php
            echo $aturan->peraturan;
          @endphp
      </p>

<script>
 function cekForm() {
	if (!document.fValidate.agree.checked) {
				alert("Anda belum menyetujui!");
				return false;
			} else {
				location.href="siswa/soal";
			}
		}
</script>
<form name="fValidate">
<input type="checkbox" name="agree" id="agree" value="1"> Saya Mengerti dan Siap Untuk Mengikuti Tes<br/><br/>
          <div style='text-align:center;'><input type="button" name="button-ok" class="btn btn-primary" value="MULAI TES" onclick="cekForm()"></div>
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





@endsection
