<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class PendaftarExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = DB::table('users')->where('role', '=',2)
                ->leftJoin('biodata', 'users.id', '=', 'biodata.users')
                ->leftjoin('dataortu', 'users.id', '=', 'dataortu.users')
                ->leftjoin('datapendukung', 'users.id', '=', 'datapendukung.users')

                ->get();
        return $data;
    }
}
