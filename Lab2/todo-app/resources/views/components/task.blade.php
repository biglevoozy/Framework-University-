@props(['task'])

<div>
    <h1 class="underline">{{ $task['title'] }}</h1>
    <p>{{ $task['description'] }}</p>
    <p><strong>Creation Date:</strong> {{ $task['created_at'] }}</p>
    <p><strong>Update Date:</strong> {{ $task['updated_at'] }}</p>
    <p class="flex gap-2"><strong>Priority:</strong> <x-priority :priority="$task['priority']" /></p>
    <p><strong>Status:</strong> {{ $task['status'] ? 'Completed' : 'Not Completed' }}</p>
    <p><strong>Assignee:</strong> {{ $task['assignee'] }}</p>
</div>