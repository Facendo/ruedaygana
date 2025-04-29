<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Premio extends Model
{
    use HasFactory;
    protected $table = 'premio';
    protected $primaryKey = 'premio_nombre';
    public $incrementing = false;
    protected $keyType = 'string';
}
