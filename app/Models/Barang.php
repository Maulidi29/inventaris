<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Models;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $guarded = ['id'];
    public $timestamps = false;
}

?>