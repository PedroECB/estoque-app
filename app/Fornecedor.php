<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores';


    public static function listAll()
    {
       $all =  Fornecedor::all();
       return $all;
    }
}
