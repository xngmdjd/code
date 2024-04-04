<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $fillable = ['grade_level', 'room_number'];

    public function clas()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }


}
