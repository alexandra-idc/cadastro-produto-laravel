<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
    	'nome', 'categoria'];

    public $rules = [
    	'nome' => 'required|min:3|max:32',
    	'categoria' => 'required|min:3|max:32',
    ];
    	
}
