<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = ['name', 'price'];

    public function scopeOwner($query)
    {
        return $query->where('user_id', \Auth::id());
    }
}
