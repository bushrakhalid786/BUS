<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $primaryKey = 'contact_id';
    protected $fillable =['contact_name','designation','phone_no','email','address','account_id','account_type_id'];
}
