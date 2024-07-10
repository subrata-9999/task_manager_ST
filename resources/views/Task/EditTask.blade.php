<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>
<body>
<form action="/updateTask" method="post">
    @csrf
    <input type="hidden" name="task_id" value="{{$task->task_id}}">
    <input type="text" name="task_name" value="{{$task->task_name}}"><br><br>
    <input type="text" name="task_description" value="{{$task->task_description}}"><br><br>
    <select name="task_status" class="task_status_dropdown" data-task-id="{{ $task->task_id }}">
        <option value="Pending" @if($task->task_status == 'Pending') selected @endif>Pending</option>
        <option value="Completed" @if($task->task_status == 'Completed') selected @endif>Completed</option>
    </select>
    <input type="date" name="task_due_date" value="{{$task->task_due_date}}"><br><br>
    <input type="submit" value="Update Task">
</form>
    
</body>
</html>