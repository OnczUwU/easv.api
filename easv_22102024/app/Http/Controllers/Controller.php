<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    protected $conection = 'mysql';
    protected $table = 'departamento';
    protected $primarykey = 'id_departamento';
    public $incrementing =true;
    public $timestamps =false;
    
}
