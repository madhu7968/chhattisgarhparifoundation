<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $connection = 'mysql';
    protected $table = 'user_details';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;
    protected $casts = [
     'id' => 'int'
    ];

    protected $fillable = [
        'id',
        'user_name',
        'user_m_name',
        'user_f_name',
        'user_dob',
        'user_gender',
        'user_mob_number',
        'user_aadhar_number',
        'user_village',
        'user_ref_id',
        'user_post',
        'user_dist',
        'user_state',
        'user_pin_code',
        'user_bank_name',
        'user_ifsc_code',
        'user_branch_name',
        'user_acc_no',
        'user_pan_no',
        'user_status',
        'amount',
    ];
}
