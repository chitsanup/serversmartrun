<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tests extends Model
{
    protected $table = 'test';//ชื่อ table

    protected $fillable = [
        'name', 'email', 'password',
    ];//ชื่อ fill ที่ใช้ใน table
}
