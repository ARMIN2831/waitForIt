<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','title','general','input','button','today','views','date'];
    public function detail()
    {
        return $this->hasMany(Detail::class);
    }
}
