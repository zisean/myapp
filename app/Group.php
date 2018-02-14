<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';

    protected $fillable = [
    	'code',
    	'name',
    	'description',
    ];

    public function members() {
    	return $this->belongsToMany(Member::class, 'group_member');
    }
}
