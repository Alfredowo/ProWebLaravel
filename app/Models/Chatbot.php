<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chatbot extends Model
{
    // En tu modelo Chatbot
    protected $table = 'chatbot';
    protected $fillable = ['pregunta', 'respuesta'];
    use HasFactory;
}
