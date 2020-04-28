<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "pegawai";

    protected $fillable = 
    [
    'id_pegawai',
    'first_name',
    'last_name',
    'username',
    'email',
    'phone',
    'password',
    'job_status'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = false;

}
