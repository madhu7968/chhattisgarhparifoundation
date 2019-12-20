<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class MemberDetails extends Model
{
    protected $connection = 'mysql';
    protected $table = 'member_details';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;
    protected $casts = [
     'id' => 'int'
    ];

    protected $fillable = [
        'id',
        'user_id',
        'member_name1',
        'relation1',
        'age1',
        'aadhar_number1',
        'member_name2',
        'relation2',
        'age2',
        'aadhar_number2',
        'member_name3',
        'relation3',
        'age3',
        'aadhar_number3',
        'member_name14',
        'relation4',
        'age4',
        'aadhar_number4',
    ];
}
