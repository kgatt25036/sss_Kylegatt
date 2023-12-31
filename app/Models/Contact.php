<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Enable mass assignment
    protected $fillable = ['first_name', 'last_name', 'email', 'address'];

    public function company(){
        return $this->belongsTo(Company::class);
    }
}
