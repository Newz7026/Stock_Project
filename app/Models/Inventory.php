<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = "inventory";
    protected $primarykey = "inventory_id";
    public $timestamps = true;
}
