<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('web.index');
    }
    public function index2(){
        return view('web.index2');
    }
    public function alarm(){
        return view('alarm.tminder');
    }
    public function jagung(){
        return view('web.jagung');
    }
    public function jekit(){
        return view('web.jekit');
    }
    public function taskminder(){
        return view('web.taskminder');
    }
    public function dentcorn(){
        return view('jenis_jagung.dentcorn');
    }
    public function flintcorn(){
        return view('jenis_jagung.flintcorn');
    }
    public function podcorn(){
        return view('jenis_jagung.podcorn');
    }
    public function popcorn(){
        return view('jenis_jagung.popcorn');
    }
    public function sweetcorn(){
        return view('jenis_jagung.sweetcorn');
    }
    public function waxycorn(){
        return view('jenis_jagung.waxycorn');
    }
    public function diagnosa(){
        return view('jenis_penyakit.diagnosa');
    }
    public function info(){
        return view('jenis_penyakit.info');
    }
    public function bercak_daun(){
        return view('jenis_penyakit.bercak_daun');
    }
    public function bulai_jagung(){
        return view('jenis_penyakit.bulai_jagung');
    }
    public function busuk_batang(){
        return view('jenis_penyakit.busuk_batang');
    }
    public function busuk_pelepah(){
        return view('jenis_penyakit.busuk_pelepah');
    }
    public function gosong(){
        return view('jenis_penyakit.gosong');
    }
    public function hawar_daun(){
        return view('jenis_penyakit.hawar_daun');
    }
    public function karat_daun(){
        return view('jenis_penyakit.karat_daun');
    }
    public function mosaik_jagung(){
        return view('jenis_penyakit.mosaik_jagung');
    }
    public function artikel(){
        return view('artikel.artikel');
    }
    public function artikel1(){
        return view('artikel.artikel1');
    }
    public function artikel2(){
        return view('artikel.artikel2');
    }
    public function artikel3(){
        return view('artikel.artikel3');
    }


    public function index3(){
        return view('admin.index3');
    }
    public function index4(){
        return view('admin.index4');
    }

    public function jagung_admin(){
        return view('admin.jagung_admin');
    }
    public function jekit_admin(){
        return view('admin.jekit_admin');
    }
    public function taskminder_admin(){
        return view('admin.taskminder_admin');
    }
    public function dentcorn_admin(){
        return view('jenis_jagung_admin.dentcorn_admin');
    }
    public function flintcorn_admin(){
        return view('jenis_jagung_admin.flintcorn_admin');
    }
    public function podcorn_admin(){
        return view('jenis_jagung_admin.podcorn_admin');
    }
    public function popcorn_admin(){
        return view('jenis_jagung_admin.popcorn_admin');
    }
    public function sweetcorn_admin(){
        return view('jenis_jagung_admin.sweetcorn_admin');
    }
    public function waxycorn_admin(){
        return view('jenis_jagung_admin.waxycorn_admin');
    }
    public function diagnosa_admin(){
        return view('jenis_penyakit_admin.diagnosa_admin');
    }
    public function info_admin(){
        return view('jenis_penyakit_admin.info_admin');
    }
    public function bercak_daun_admin(){
        return view('jenis_penyakit_admin.bercak_daun_admin');
    }
    public function bulai_jagung_admin(){
        return view('jenis_penyakit_admin.bulai_jagung_admin');
    }
    public function busuk_batang_admin(){
        return view('jenis_penyakit_admin.busuk_batang_admin');
    }
    public function busuk_pelepah_admin(){
        return view('jenis_penyakit_admin.busuk_pelepah_admin');
    }
    public function gosong_admin(){
        return view('jenis_penyakit_admin.gosong_admin');
    }
    public function hawar_daun_admin(){
        return view('jenis_penyakit_admin.hawar_daun_admin');
    }
    public function karat_daun_admin(){
        return view('jenis_penyakit_admin.karat_daun_admin');
    }
    public function mosaik_jagung_admin(){
        return view('jenis_penyakit_admin.mosaik_jagung_admin');
    }
    public function artikel_admin(){
        return view('artikel_admin.artikel_admin');
    }
    public function artikel1_admin(){
        return view('artikel_admin.artikel1_admin');
    }
    public function artikel2_admin(){
        return view('artikel_admin.artikel2_admin');
    }
    public function artikel3_admin(){
        return view('artikel_admin.artikel3_admin');
    }

}
