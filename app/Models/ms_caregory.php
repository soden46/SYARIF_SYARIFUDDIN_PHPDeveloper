<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ms_caregory extends Model
{
    use HasFactory;
    public $table = "ms_categories";
    protected $guarded = [
        'id',
    ];
    public $timestamps = false;
}
