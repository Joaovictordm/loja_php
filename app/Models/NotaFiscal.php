<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NotaFiscal extends Model
{
    protected $fillable = ["preco", "cliente_id"];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
