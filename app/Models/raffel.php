<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class raffel extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'number',
    ];

    protected  $table = 'raffel';


}
