<?php
 namespace App\Models;
 use Illuminate\Database\Eloquent\Model;
 class User extends Model{

    protected $table = 'tbluser1';
    public $timestamps = false;
 // column sa table
 protected $fillable = [
 'username', 'password','jobid'
 ];

 protected $primarykey = 'id';
 }