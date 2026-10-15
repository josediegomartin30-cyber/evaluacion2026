<?php

namespace App\Models;

use CodeIgniter\Model;

class IntegrantesModel extends Model
{
    protected $table            = 'integrantes';
    protected $primaryKey       = 'integrante_id';
    protected $allowedFields    = [
    'integrante_id',
    'nombre',
    'apellido',
    'fecha_nacimiento',
   'fecha_muerte',
    'web_oficial',
    'pais_nacimiento'
    ];

 
}
