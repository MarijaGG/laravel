<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    use HasFactory;
    protected $fillable = ["title", "body", "date"];

    // Diary.php
public function user()
{
    return $this->belongsTo(User::class);
}

}
