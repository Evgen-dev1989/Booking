<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable =['Location','id','location_id'];

    public function lists(){
        return $this->hasMany(Block::class,'id','id');
    }
}
