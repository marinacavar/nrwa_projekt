<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $primaryKey = 'dept_id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['dept_id', 'name'];
}
