<div class="mt-8 p-6 bg-white border rounded-md shadow-md">
    <input wire:model="name" type="text" placeholder="Task Name" class="border p-2 mb-4 w-full">
    
    @if($taskId)
        <button wire:click="update" class="bg-blue-500 text-white px-4 py-2">Update</button>
    @else
        <button wire:click="create" class="bg-green-500 text-white px-4 py-2">Create</button>
    @endif

    <ul class="mt-6">
        @foreach($tasks as $task)
            <li class="flex justify-between items-center border-b py-2">
                {{ $task->name }}
                <div class="space-x-2">
                    <button wire:click="edit({{ $task->id }})" class="bg-blue-500 text-white px-2 py-1">Edit</button>
                    <button wire:click="delete({{ $task->id }})" class="bg-red-500 text-white px-2 py-1">Delete</button>
                </div>
            </li>
        @endforeach
    </ul>
</div>