<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = ['deptartment_id','user_id','name','age','mobile','date','time'];
    public function department()
    {
        return $this->belongsTo(Department::class,'deptartment_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
