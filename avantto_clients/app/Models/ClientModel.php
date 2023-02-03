<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientModel extends Model
{
    use HasFactory;

    protected $table = 'lead';
    
    protected $guarded = [];

    public static $rules_create = [
    'nome_principal' => 'required',
    'cargo' => 'required',
    ];

    public static $rules_update = [
    'nome_principal' => 'required',
    'ranking' => 'required',
    ];
}
