<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
 use HasFactory;

    protected $table = 'form';
    protected $fillable = ['first_name', 'last_name'];

}
