<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accountaddmoney extends Model
{
    use HasFactory;
    protected $table = "accountaddmoneys";

    public function accounts()
    {
        return $this->belongsTo(Post::class);
    }
}
