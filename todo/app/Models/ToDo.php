<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    use HasFactory;
    protected $fillable = ["content", "completed"];

    // ToDo.php
public function user()
{
    return $this->belongsTo(User::class);
}

}
