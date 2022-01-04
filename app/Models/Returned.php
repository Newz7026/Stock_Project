<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Returned extends Model
{
    protected $table = "return_product";
    protected $primarykey = "return_id";
    public $timestamps = false;
}
