<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'sub_title',
        'skill_name',
        'score',
        'position',
        'status'
    ];
}
