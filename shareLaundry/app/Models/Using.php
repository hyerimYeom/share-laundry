<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Using extends Model
{
    use HasFactory;


    protected $table = 'usings';

    protected $primaryKey = 'id';

    // const CREATED_AT = 'creation_date';

    // const UPDATED_AT = 'updated_date';

    // protected $attributes =[
    //     'user_id' => '',
    //     'laundry_id' => '',
    //     'using_state' => 1
    // ];

    protected $fillable = ['id', 'user_id', 'laundry_id', 'duration_time', 'status'];


    //Laundry belongs to using
    public function laundry(){
        return $this->belongsTo(Laundry::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
