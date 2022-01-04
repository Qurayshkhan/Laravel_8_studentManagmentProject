<?php

namespace App\Models;

use App\Http\Controllers\CourseController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    public $fillable=array('bsort','bfull');
    public function course(){
        return $this->hasOne(courses::class);
    }
}
