<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";
    protected $fillable = ["nome", "email", "idade"];

    public function notaFiscal()
    {
        return $this->hasMany(NotaFiscal::class);
    }

}
