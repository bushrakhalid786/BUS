<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'accounts';
    protected $primaryKey = 'account_id';
    protected $fillable =['account_name','contact_person','phone_no','email','address','city_id','region_id','account_manager_id'];
}
