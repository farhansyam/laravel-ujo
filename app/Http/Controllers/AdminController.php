<?php

namespace App\Http\Controllers;


use App\User;
use App\tbl_nilai;
use App\tbl_soal;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lulus = tbl_nilai::where('keterangan','Lulus')->count();
        $tidak_lulus = tbl_nilai::where('keterangan','Tidak Lulus')->count();
        $total_user = User::where('status',1)->where('statusaktif',0)->count();
        $total_soal = tbl_soal::where('aktif','Y')->count();

        return view('admin.index',compact('lulus','tidak_lulus','total_user','total_soal'));
    }

    public function soal()
    {
      $soals = tbl_soal::all();
      return view('admin.soal',compact('soals'));
    }

    public function status($id)
    {
      $soalnya = tbl_soal::where('id',$id)->first();
      if ($soalnya->aktif == 'Y') {
          $soalnya->update([
            'aktif' => 'N'
        ]);
      }

      elseif ($soalnya->aktif == 'N')
        {
          $soalnya->update([
            'aktif' => 'Y'
        ]);
      }

        return redirect('admin/kelola-soal');
    }

    public function preview($id)
    {
        $soal = tbl_soal::where('id',$id)->first();
          return view('admin.preview',compact('soal'));
    }

    public function hapus_soal($id)
    {
        tbl_soal::destroy($id);
        return redirect('admin/kelola-soal');
    }

    public function tambahsoal()
    {
      return view('admin.tambah_soal');
    }
}
