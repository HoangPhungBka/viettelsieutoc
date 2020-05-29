<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'summary', 'type', 'description', 'cost', 'count'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }
}
