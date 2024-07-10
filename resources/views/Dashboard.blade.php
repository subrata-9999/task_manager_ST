<?php
$page_title = "Dashboard";
?>

<!DOCTYPE html>
<html lang="en">

@include('Components.Header');

<body>
    @include('Components.Navbar');
    
    <div class="container mt-5 container-custom" style="margin-top: 50px;">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="mb-0">All Tasks</h2>
            <a href="AddTask" class="btn btn-primary">Add Task</a>
        </div>
    <hr>
        <table id="tasksTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Task Name</th>
                    <th>Task Description</th>
                    <th>Task Due Date</th>
                    <th>Task Status</th>
                    <th>Task Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allTasks as $task)
                <tr>
                    <td>{{$task->task_name}}</td>
                    <td>{{$task->task_description}}</td>
                    <td>{{$task->task_due_date}}</td>
                    <td>{{$task->task_status}}</td>
                    <td>
                        <a href="EditTask/{{$task->task_id}}" class="btn btn-warning btn-sm btn-custom">Edit</a>
                        <a href="DeleteTask/{{$task->task_id}}" class="btn btn-danger btn-sm btn-custom">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    @include('Components.Footer');

    <script>
        $(document).ready(function() {
            $('#tasksTable').DataTable({
                responsive: true
            });
        });
    </script>
</body>

</html>