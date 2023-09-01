<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction_detail extends Model
{
    use HasFactory;
    public $table = "transaction_details";
    protected $guarded = [
        'id',
    ];
    public $timestamps = false;
    public function categories()
    {
        return $this->belongsTo('App\Models\ms_categories', 'transaction_category_id ');
    }
    public function header()
    {
        return $this->belongsTo('App\Models\transaction_headers', 'transaction_id ');
    }
}
