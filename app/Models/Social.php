<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
  use HasFactory;

  protected $fillable = [
    'email',
    'facebook',
    'instagram',
    'linkedin',
    'whatsapp',
    'X_twitter',
    'github',
  ];
}
