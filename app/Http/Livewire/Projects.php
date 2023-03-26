<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class Projects extends Base
{
    public $sortBy = 'name';
    public function render()
    {
        if ($this->search) {
            $projects = Project::query()
                ->where('name', 'like', '%' . $this->search . '%')
                ->paginate(10);

            return view(
                'livewire.projects',
                ['projects' => $projects]
            );
        } else {
            $projects = Project::query()
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage);
            return view(
                'livewire.projects',
                ['projects' => $projects]
            );
        }
    }
}
