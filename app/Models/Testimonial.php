<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'sub_title',
        'person_name',
        'person_designation',
        'person_comment',
        'person_image',
        'bg_image',
        'status',
    ];
}
