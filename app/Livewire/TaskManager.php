<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskManager extends Component
{
    public $tasks, $name, $taskId;

    public function render()
    {
        $this->tasks = Task::all();
        return view('livewire.task-manager');
    }
 
    public function create()
    {
        Task::create(['name' => $this->name]);
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        $this->taskId = $id;
        $this->name = $task->name;
    }

    public function update()
    {
        $task = Task::find($this->taskId);
        $task->update(['name' => $this->name]);
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Task::find($id)->delete();
    }

    public function resetInputFields()
    {
        $this->name = '';
    }
}
