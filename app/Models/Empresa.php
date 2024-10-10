<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'nombre',
        'cliente_id'];

    use HasFactory;
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente','id','cliente_id');
    }
}
