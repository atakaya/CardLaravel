<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardModel extends Model
{
    protected $table="cards";
    protected $fillable=["title","description","url","created_at","updated_at"];
}
