<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Profiles extends Model
{
    protected $table = 'profile';
    protected $fillable = [
        'user_id','fname','mname','lname','religion','sex','age','ffname','mfname','mstatus'
        ,'mnotimes','blgrp','wt','ht','lnumber','mno','email','address','pincode','city','state','country','reffered_by'
    ];
    protected $primaryKey = 'profile_id';
}
