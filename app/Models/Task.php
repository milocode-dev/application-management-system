<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function project() {
        return $this->belongsTo(Project::class);
    }

    public function users() {
        return $this->belongsToMany(User::class);
    }
}
