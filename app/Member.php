<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $table = 'members';
    
    protected $fillable = [
    	'membership_no',
    	'nric',
    	'name',
        'gender',
    	'address',
    	'postcode',
    	'city',
    	'state',
        'phone',
        'division_id',
    ];

    public function division(){
        return $this->belongsTo(Division::class);
    }

}
