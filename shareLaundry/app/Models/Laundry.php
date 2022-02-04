<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    use HasFactory;

    protected $table = 'laundries'; //migrate 할때 복수형으로 안하려면 어떻게 하지

    protected $primaryKey = 'id';

    protected $timestamp = true;

    // filled 아님..! (typo로 엄청난 시간 소비;;)
    protected $fillable = ['name', 'sort', 'brand', 'buy_when'];
}
