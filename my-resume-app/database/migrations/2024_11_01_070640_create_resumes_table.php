<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        'Jo Margareth',
        'jmar@gmail.com',
        '09123456789',
        'address',
        'summary',
        'experience', // This can be a JSON field for storing multiple entries
        'education', // Also JSON for multiple entries
        'skills', // Array or JSON
        'hobbies', // Array or JSON
        // Add other fields as needed
    ];

    protected $casts = [
        'experience' => 'array',
        'education' => 'array',
        'skills' => 'array',
        'hobbies' => 'array',
    ];
}