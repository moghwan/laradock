<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>description</th>
        <th>priority</th>
    </tr>
    @foreach ($tasks as $task)
    <tr>
        <td><a href="{{ route('tasks.show', $task->id) }}">{{$task->id}}</a></td>
        <td>{{$task->name}}</td>
        <td>{{$task->description}}</td>
        <td>{{$task->priority}}</td>
    </tr>
    @endforeach
</table>
