<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public function company()
{
    return $this->belongsTo(Company::class);
}

public function leader()
{
    return $this->belongsTo(Leader::class);
}

public function dailyReports()
{
    return $this->hasMany(DailyReport::class);
}
}
