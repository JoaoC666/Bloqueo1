<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloqueador extends Model
{
    use HasFactory;
    protected $table='bloqueadores';
    protected $primaryKey='id';
    protected $fillable=['id'];
}
