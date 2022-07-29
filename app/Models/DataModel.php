<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataModel extends Model
{
    $data = DB::table('users')
        ->leftJoin('biodata', 'users.id', '=', 'biodata.users')
        ->leftJoin('dataortu', 'users.id', '=', 'dataortu.users')
        ->leftJoin('datapendukung', 'users.id', '=', 'datapendukung.users')
        ->get();
}
