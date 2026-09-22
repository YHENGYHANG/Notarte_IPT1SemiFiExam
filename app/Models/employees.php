<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class employees extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'address', 'departments', 'attendance'];
}
