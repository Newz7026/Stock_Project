<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $table = "claim_product";
    protected $primarykey = "claim_id";
    public $timestamps = false;

}
