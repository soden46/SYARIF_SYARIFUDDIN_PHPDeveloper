<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction_header extends Model
{
    use HasFactory;
    public $table = "transaction_headers";
    protected $guarded = [
        'id',
    ];
    public $timestamps = false;
}
