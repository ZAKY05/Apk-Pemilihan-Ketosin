<?php

namespace App\Models;

// use App\Models\pemilih;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hasil extends Model
{
    use HasFactory;
    protected $table = 'hasils';
    protected $guarded = ['id'];

    public function kandidat(){
        return $this->belongsTo(kandidat::class);
        // return $this->belongsTo((pemilih::class));
    }
    public function pemilih(){
        return $this->belongsTo(pemilih::class);
    }
    
}
