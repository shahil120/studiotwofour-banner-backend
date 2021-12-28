<?php

namespace App\model;
use Illuminate\Database\Eloquent\Model;


class products extends Model{
    protected $table = "products";
    protected $fillable = ["product"];
}