<?php

namespace Submtd\LaravelGlobalVariables\Models;

use Illuminate\Database\Eloquent\Model;

class GlobalVariable extends Model
{
    protected $fillable = [
        'index',
        'value',
    ];

    public static function find(string $index)
    {
        return static::where('index', $index)->first();
    }
}
