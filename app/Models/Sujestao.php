<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sujestao extends Model
{
    use HasFactory;
    
    protected $table= 'sujestao';
    protected $fillable = [
        'postado', // Adicione 'postado' aqui se ele não estiver presente
        // outros atributos do modelo
    ];


}
