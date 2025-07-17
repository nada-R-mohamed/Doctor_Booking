<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'date',
        'time',
        'complaint',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
