<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $table = 'sweetwater_test';

    protected $fillable = ['orderid', 'comments', 'shipdate_expected'];

}
