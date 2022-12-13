<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $primaryKey = 'emp_id';

    public function projects()
    {
        return $this->hasMany(project::class, 'emp_id', 'emp_id');
    }
}
