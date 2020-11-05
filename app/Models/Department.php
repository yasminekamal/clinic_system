<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function users()
    {
        return $this->hasMany(User::class,'dept_id');
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class,'deptartment_id');
    }

}
