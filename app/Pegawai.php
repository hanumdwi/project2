<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "pegawai";

    protected $fillable = 
    [
    'first_name',
    'last_name',
    'username',
    'email',
    'phone',
    'password',
    'job_status'
    ];

    public $timestamps = false;

}
