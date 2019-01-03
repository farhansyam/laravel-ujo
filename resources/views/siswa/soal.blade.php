@extends('siswa.master');
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
                         Soal
                      </div>
                      <div class="panel-body">

@php
    $username=Auth::user()->name;

   echo "<br><div align='center'>
   <table><tr><th colspan=3>Selamat Mengerjakan</th></tr>";
   echo '<table><tr><th>Waktu Anda</th></tr>
   <tr><td align=center><span style="font-size:18px"><span id="menit"></span>:<span id="detik"></span></span> </td></tr></table>';
echo "<div style='width:100%; border: 1px solid #EBEBEB; overflow:scroll;height:700px;'>";
echo '<table width="100%" border="0">';

$urut=0;
  @endphp
  <form name="form1" method="post" action="jawaban">
  @foreach ($soals as $soal)
    <input type="hidden" name="id[]" value=<?php echo $soal->id ?>>
    <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
  {{ csrf_field() }}

  <tr>
      <td width="17"><font color="#000000"><?php echo $urut=$urut+1; ?></font></td>
      <td width="430"><font color="#000000"><?php echo "$soal->soal"; ?></font></td>
  </tr>

  @php

    if (!empty($soal->gambar)) {
      echo "<tr><td></td><td><img src='http://localhost:8000/foto/$soal->gambar' width='200' hight='200'></td></tr>";
    }
    @endphp
  <tr>
      <td height="21"><font color="#000000">&nbsp;</font></td>
      <td><font color="#000000">
       A.  <input name="pilihan[<?php echo $soal->id; ?>]" type="radio" value="A">
        <?php echo "$soal->a";?></font> </td>
  </tr>
  <tr>
      <td><font color="#000000">&nbsp;</font></td>
      <td><font color="#000000">
       B. <input name="pilihan[<?php echo $soal->id; ?>]" type="radio" value="B">
        <?php echo "$soal->b";?></font> </td>
  </tr>
  <tr>
      <td><font color="#000000">&nbsp;</font></td>
      <td><font color="#000000">
      C.  <input name="pilihan[<?php echo $soal->id; ?>]" type="radio" value="C">
        <?php echo "$soal->c";?></font> </td>
  </tr>
  <tr>
    <td><font color="#000000">&nbsp;</font></td>
      <td><font color="#000000">
      D.   <input name="pilihan[<?php echo $soal->id; ?>]" type="radio" value="D">
        <?php echo "$soal->d";?></font> </td>
        </tr>

  @endforeach


        <tr>
      <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="Jawab" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')"></td>
          </tr>
    </table>
</form>
      </p>
</div>
<script>
<!--
//
 var detik=2;
 var menit={{$aturan->waktu}};
 //document.counter.d2.value='30'

function display()
{
  if (menit==0&&detik==0) {
    alert('Waktu habis, klik OK untuk melihat hasil ujian anda.');
    location.href="?hal=hasil_ujian";
  }

 if (detik<=0){
  detik=60;
  menit-=1;
 }
 if (menit<=-1){
  detik=0;
  menit+=1;
 }
 else
  detik-=1

  detik="" + detik
  menit="" + menit
  var pad = "00"
  document.getElementById("menit").innerHTML=pad.substring(0, pad.length - menit.length) + menit;
  document.getElementById("detik").innerHTML=pad.substring(0, pad.length - detik.length) + detik;
  //document.counter.d2.value=menit;
  //document.counter.d3.value=detik;
  setTimeout("display()",1000)
}
display()
-->
</script>

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
