<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\biodata;
use App\Models\dataortu;
use App\Models\datapendukung;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function index(){
        $pendaftar = User::where('role', 2)->count();
        $admin = User::where('role', 1)->count();
        $user_id = Auth::user()->id;

        return view('dashboard.index', compact('admin', 'pendaftar'));
    }
    public function cetak(Request $request, $id){
        $img = base_path('logo.png');
        $type=pathinfo($img, PATHINFO_EXTENSION);
        $data = file_get_contents($img);
        $pic ='data:image'.$type . ';base64,' . base64_encode($data);
        $data = DB::table('users')->where('users.id', $id)
                ->Join('biodata', 'users.id', '=', 'biodata.users')
                ->Join('dataortu', 'users.id', '=', 'dataortu.users')
                ->Join('datapendukung', 'users.id', '=', 'datapendukung.users')
                ->get();
        $html= view('dashboard.calonsiswa.cetak', compact('data','pic'));
        $domppdf = new Dompdf();
        $domppdf->loadHtml($html);
        $domppdf->setPaper('f4', 'portrait');
        $domppdf->render();
        $domppdf->stream('Formulir.pdf');
    }
}
