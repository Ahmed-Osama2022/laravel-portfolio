<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
  use HasFactory;

  /**
   * This model is only for CV file
   */

  protected $fillable = [
    'cv_link'
  ];
}
