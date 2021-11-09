<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model{
    public $timestamps = false;
    protected $table = 'book';
    protected $fillable = ['id', 'bookDay', 'bookTime', 'sl', 'hoten', 'email', 'notes', 'checked'];
}