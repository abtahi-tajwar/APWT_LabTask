<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhysicalStore extends Model
{
    use HasFactory;
    public $table = 'physical_store';
    const CREATED_AT = 'date_sold';
}
