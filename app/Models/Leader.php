<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    use HasFactory;
    public function company()
{
    return $this->belongsTo(Company::class);
}

public function employees()
{
    return $this->hasMany(Employee::class);
}
}
