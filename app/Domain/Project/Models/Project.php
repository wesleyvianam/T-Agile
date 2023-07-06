<?php

namespace Domain\Project\Models;

use Domain\Task\Models\Task;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'title', 'type', 'description'];

    public function tasks()
    {
        return $this->hasMany(Task::class, 'project_id');
    }
}
