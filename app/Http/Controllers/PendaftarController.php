<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PendaftarExport;
use Illuminate\Support\Facades\DB;
use App\Models\biodata;
use App\Models\dataortu;
use App\Models\datapendukung;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class PendaftarController extends Controller
{
    public function index(){

        $data = DB::table('users')
                ->leftJoin('biodata', 'users.id', '=', 'biodata.users')
                ->leftjoin('dataortu', 'users.id', '=', 'dataortu.users')
                ->leftjoin('datapendukung', 'users.id', '=', 'datapendukung.users')
                ->where('role', '=',2)
                ->get();


        return view('dashboard.admin.pendaftar', compact('data'));
    }

    public function lihat(){
        $img = base_path('logo.png');
        $type=pathinfo($img, PATHINFO_EXTENSION);
        $data = file_get_contents($img);
        $pic ='data:image'.$type . ';base64,' . base64_encode($data);
        $data = DB::table('users')
                ->Join('biodata', 'users.id', '=', 'biodata.users')
                ->Join('dataortu', 'users.id', '=', 'dataortu.users')
                ->Join('datapendukung', 'users.id', '=', 'datapendukung.users')
                ->get();
        return view('dashboard.admin.lihat', compact('data','pic'));
    }
    public function excel(){
        return Excel::download(new PendaftarExport, 'datapendaftar.xlsx');
    }
}
