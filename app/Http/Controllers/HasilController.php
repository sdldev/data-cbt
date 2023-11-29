<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hasil;
use Illuminate\Support\Facades\DB;
class HasilController extends Controller
{
    public function index()
    {

        $hasilujian = DB::table('h_ujian')
        ->join('tm_siswa', 'h_ujian.tmsiswa_id', '=', 'tm_siswa.id')
        ->join('tm_ujian', 'h_ujian.tmujian_id', '=', 'tm_ujian.id')
        ->select('h_ujian.*', \DB::raw('tm_ujian.nama as nama_ujian'), \DB::raw('tm_siswa.nama as nama_siswa'), \DB::raw('tm_siswa.nisn as nisn') )
        ->where('tm_ujian.publish', '=', '1')
        ->get();


        return view('hasil', [
            'hasilujian' => $hasilujian,

        ]);
    }

    public function ajax(Request $request)
    {

        $hasilujian = DB::table('h_ujian')
        ->join('tm_siswa', 'h_ujian.tmsiswa_id', '=', 'tm_siswa.id')
        ->join('tm_ujian', 'h_ujian.tmujian_id', '=', 'tm_ujian.id')
        ->select('h_ujian.*', \DB::raw('tm_ujian.nama as nama_ujian'), \DB::raw('tm_siswa.nama as nama_siswa') )
        ->get();
        return view('ajax', [
            'hasilujian' => $hasilujian,

        ]);
    }

}
