<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
    	'nome'];

    public $rules = [
    	'nome' => 'required|min:3|max:32',
    ];
}
