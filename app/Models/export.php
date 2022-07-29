<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;
class export extends Model
{
    DB::table('users')->where('role', '=',2)
    ->Join('biodata', 'users.id', '=', 'biodata.users')
    ->Join('dataortu', 'users.id', '=', 'dataortu.users')
    ->Join('datapendukung', 'users.id', '=', 'datapendukung.users')
    ->get();
}
