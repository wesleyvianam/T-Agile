<?php

namespace App\Models\Project\Models;

use App\Models\Category\Models\Category;
use App\Models\Epic\Models\Epic;
use App\Models\Task\Models\Task;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'user_id'];

    public function epics()
    {
        return $this->hasMany(Epic::class, 'project_id');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class, 'project_id');
    }

    public function categories()
    {
        return $this->hasMany(Category::class, 'project_id');
    }
}
