
@extends('siswa.master')
@section('content')
  <div id="page-wrapper" class="row">
      <div class="col-lg-9">
      <div class="panel panel-primary">
          <div class="panel-heading">
             Hasil
          </div>
          <div class="panel-body">

@php

$username=Auth::user()->name;

echo "<h3 style='border:0';><u>$username</u> Sudah Mengerjakan Tes</h3>";
echo "<br><br><br><div align='center'>
<table><tr><th colspan=3>Hasil Tes Anda</th></tr>
<tr><td>Jumlah Jawaban Benar</td><td> : $hasil->benar</td>";
if ($hasil->score >= $aturan->nilai_min) {
echo "<td rowspan='4'><h1 style=color:green>Lulus</h1></td></tr>";
}else {
echo "<td rowspan='4'><h1 style=color:red>Gagal</h1></td></tr>";
}
echo "
<tr><td>Jumlah Jawaban Salah</td><td> : $hasil->salah</td></tr>
<tr><td>Jumlah Jawaban Kosong</td><td>: $hasil->kosong</td></tr>
<tr><td><b>Nilai anda            </td><td>: $hasil->score</b></td></tr></table></div>";
echo '<table><tr><th></th></tr>';
@endphp
@endsection
