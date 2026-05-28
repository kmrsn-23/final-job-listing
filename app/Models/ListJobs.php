<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ListJobs extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'company', 'location', 'salary', 'contact_email'];
}