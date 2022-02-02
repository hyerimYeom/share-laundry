<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Using extends Model
{
    use HasFactory;


    protected $table = 'using';

    protected $primaryKey = 'using_id';

    const CREATED_AT = 'creation_date';

    const UPDATED_AT = 'updated_date';

    protected $attributes =[
        'user_id' => '',
        'laundry_id' => '',
        'using_state' => 1
    ]
}
