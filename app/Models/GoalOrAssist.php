<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoalOrAssist extends Model
{
    use HasFactory;
    
    protected $table = "goal_or_assists";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'value',
    ];
}
