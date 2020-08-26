<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    public $tablename ="teachers";
    protected $primarykey ="id";
    protected $timestamp  ="true";
}
