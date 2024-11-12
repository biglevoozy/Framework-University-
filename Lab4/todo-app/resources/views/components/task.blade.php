@props(['task'])

<div>
    <h1 class="underline">{{ $task['title'] }}</h1>
    <p>{{ $task['description'] }}</p>
    <p><strong>Creation Date:</strong> {{ $task['created_at'] }}</p>
    <p><strong>Update Date:</strong> {{ $task['updated_at'] }}</p>
    <p><strong>Category:</strong> {{ $task['category_name'] }}</p>
    <p><strong>Due Date:</strong> {{ $task['due_date'] }}</p>
    <p><strong>Status:</strong> {{ $task['status'] ? 'Completed' : 'Not Completed' }}</p>
    <p><strong>Tags:</strong>
        @if($task->tags->isNotEmpty())
            @foreach ($task->tags as $tag)
                <li>{{ $tag->name }}</li>
            @endforeach
        @else
            <span>None</span>
        @endif

    </p>
</div>