<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['judul', 'foto', 'tanggal_rilis', 'isi'];
}
