<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model{
    public $timestamps = false;
    protected $table = 'message';
    protected $fillable = ['id', 'hoten', 'email', 'subject', 'content'];
}
