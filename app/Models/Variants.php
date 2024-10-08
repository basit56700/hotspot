<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cars;
use App\Models\Models;
class Variants extends Model
{
    use HasFactory;
    protected $table="variants";

    protected $fillable=
    [
    'model_id',
    'name',
    'features',
    'color',
    'created_at',
    'updated_at',
    ];
  
    public function brand()
    {
        return $this->belongsTo(Brands::class, 'variant_id');
    }
}
