<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Address extends Model
{
    //
    use HasFactory, Notifiable, SoftDeletes;
    //
    protected $fillable = [
        'user_id',
        'country',
    ];
    //
    public function user(){
        //
        return $this->belongsTo(User::class);
    }
}
