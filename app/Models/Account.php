<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    //public $timestamps = false;
    protected $fillable = [
        'code',
        'name',
        'amount'
    ];

    protected $table = "accounts";

    public function accountaddmoneys()
    {
        return $this->hasMany(Comment::class);
    }
}
