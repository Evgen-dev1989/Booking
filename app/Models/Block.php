<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $fillable =['Location','id','location_id'];

    public function lists(){
        return $this->belongsTo(Location::class);}
}
