<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioItem extends Model
{
    use HasFactory;
protected $fillable = [
        'title',
        'image_path',
        'filter',
        'category',
        'client',
        'project_date',
        'project_url',
        'description',
    ];

    protected $dates = ['project_date'];}
