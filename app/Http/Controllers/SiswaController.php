<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\tbl_soal;
use App\tbl_nilai;

use App\tbl_pengaturan_ujian;

class SiswaController extends Controller
{
    public function index()
    {
      $jumlah = tbl_soal::all()->count();

        $aturan =  tbl_pengaturan_ujian::findOrFail(1);
        return view('siswa.index',compact('aturan','jumlah'));
    }

    public function soal()
    {

       $jumlah = tbl_soal::all()->count();
        $soals = tbl_soal::where('aktif','Y')->inRandomOrder()->get();
        $hasil  = tbl_nilai::where('id_user',Auth::user()->id)->first();
        $aturan =  tbl_pengaturan_ujian::findOrFail(1);

        if (is_null($hasil)) {
          return view('siswa.soal',compact('soals','jumlah','cek','aturan','hasil'));
        }
        else {
          return view('siswa.hasil',compact('hasil','aturan'));
        }
    }

    public function jawaban(Request $request)
    {
      $conn = mysqli_connect('localhost','root','','db_ujianonline');
			$pilihan=$_POST["pilihan"];
			$id_soal=$_POST["id"];
			$jumlah=$_POST['jumlah'];

                $aturan =  tbl_pengaturan_ujian::findOrFail(1);

			$score=0;
			$benar=0;
			$salah=0;
			$kosong=0;

			for ($i=0;$i<$jumlah;$i++){
				//id nomor soa`l
				$nomor=$id_soal[$i];
				//jika user tidak memilih jawaban
				if (empty($pilihan[$nomor])){
					$kosong++;
				}else{
					//jawaban dari user
					$jawaban=$pilihan[$nomor];

					//cocokan jawaban user dengan jawaban di database
					$query=mysqli_query($conn,"select * from tbl_soal where id_soal='$nomor' and knc_jawaban='$jawaban'");

					$cek=mysqli_num_rows($query);
					if($cek){
						//jika jawaban cocok (benar)
						$benar++;
					}else{
						//jika salah
						$salah++;
					}

				}
				/*RUMUS
				Jika anda ingin mendapatkan Nilai 100, berapapun jumlah soal yang ditampilkan
				*/
        // hasil= 100 / jumlah soal * jawaban yang benar
				$result=mysqli_query($conn,"select * from tbl_soal WHERE aktif='Y'");

				$jumlah_soal=mysqli_num_rows($result);
				$score = 100/$jumlah_soal*$benar;
				$hasil_nilai = number_format($score,1);
			}
      $id_user = Auth::user()->id;

      $cek=mysqli_num_rows(mysqli_query($conn,"SELECT id_user FROM tbl_nilai WHERE id_user='$id_user'"));
          if ($cek < 1) {
          //Pemberian kondisi lulus/ tidak lulus

          $tanggal = date('y-m-d');
          if ($hasil_nilai >= $aturan->nilai_min) {
          //Lakukan Penyimpanan Kedalam Database

            $q3 = mysqli_query($conn,"INSERT INTO tbl_nilai (id_nilai,id_user,benar,salah,kosong,score,tanggal,keterangan) Values (NULL,$id_user','$benar','$salah','$kosong','$hasil','$tanggal','Lulus')");

          }else {
          //Lakukan Penyimpanan Kedalam Database
            $q4 = mysqli_query($conn,"INSERT INTO tbl_nilai (id_nilai,id_user,benar,salah,kosong,score,tanggal,keterangan) Values (NULL,'$id_user','$benar','$salah','$kosong','$hasil','$tanggal','Tidak Lulus')");
          }

          		}

          $jumlah = tbl_soal::all()->count();
           $soals = tbl_soal::where('aktif','Y')->inRandomOrder()->get();
           $hasil  = tbl_nilai::where('id_user',Auth::user()->id)->first();

             return view('siswa.hasil',compact('jumlah','cek','aturan','hasil'));
        }



}
