<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfume extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','img','brand_id'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
