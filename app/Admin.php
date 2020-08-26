<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    public $tablename ="admins";
    protected $primarykey ="id";
    protected $timestamp  ="true";
}
