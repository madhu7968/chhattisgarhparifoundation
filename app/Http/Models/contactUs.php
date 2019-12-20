<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $connection = 'mysql';
    protected $table = 'contact_details';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;
    protected $casts = [
     'id' => 'int'
    ];

    protected $fillable = [
        'id',
        'name',
        'email',
        'subject',
        'message'
    ];
}
