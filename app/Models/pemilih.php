<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class pemilih extends Authenticatable
{
    use HasFactory;
    protected $table = 'pemilihs';
    protected $guarded=['id'];
}
