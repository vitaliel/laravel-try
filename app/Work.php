<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'name', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(WorkCategory::class, 'category_id');
    }
}
