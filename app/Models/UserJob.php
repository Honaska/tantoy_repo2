<?php

 namespace App\Models;
 use Illuminate\Database\Eloquent\Model;

 class UserJob extends Model{

  
 protected $table = 'tbluser1job';

 // column sa table
 protected $fillable = [
 'id', 'Jobname'
 ];

 public $timestamp = false;
 protected $primarykey = 'id';
 }