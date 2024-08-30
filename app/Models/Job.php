<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "job_listings";

    use HasFactory;

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
