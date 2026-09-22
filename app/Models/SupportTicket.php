<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/SupportTicket.php
class SupportTicket extends Model
{
    protected $fillable = ['name', 'email', 'subject', 'category', 'priority', 'message', 'status'];
}
