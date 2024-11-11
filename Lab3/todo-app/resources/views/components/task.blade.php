@props(['task'])

<div>
    <h1 class="underline">{{ $task['title'] }}</h1>
    <p>{{ $task['description'] }}</p>
    <p><strong>Creation Date:</strong> {{ $task['created_at'] }}</p>
    <p><strong>Update Date:</strong> {{ $task['updated_at'] }}</p>
    <p><strong>Category:</strong>{{ $task['category_name'] }}</p>
    <p><strong>Status:</strong> {{ $task['status'] ? 'Completed' : 'Not Completed' }}</p>
    <p><strong>Tags:</strong>
        @foreach ($task->tags as $tag)
            <li>{{ $tag->name }}</li>
        @endforeach
        <a href="{{ route('task.edit', ['task' => $task['id']]) }}">
            <button
                class="mt-4 bg-violet-500 py-2 px-4  text-white font-semibold rounded hover:bg-violet-800 hover:text-green-400 transition duration-200 ease-in-out">
                Edit Task
            </button>
        </a>
    </p>
</div>