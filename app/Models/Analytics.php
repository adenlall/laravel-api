<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analytics extends Model
{
    use HasFactory;
		
    protected $table = "analitycs";
    protected $primaryKey = 'key';
    protected $fillable = ['key', 'value'];

}
