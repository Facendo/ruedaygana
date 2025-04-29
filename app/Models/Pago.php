<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Pago extends Model
{
    use HasFactory;
    protected $table = 'pago';

    public function ticket(){
        return $this->belongsTo(Ticket::class, 'id_ticket', 'id_ticket');
    }
}
