<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoDetalhe extends Model
{
    use HasFactory;

    protected $fillable = ['altura', 'comprimento', 'largura', 'produto_id', 'unidade_id'];

    public function produto()
    {
        return $this->belongsTo('App\Models\Produto');

    }
}
