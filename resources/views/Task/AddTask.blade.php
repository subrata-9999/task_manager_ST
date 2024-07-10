<?php
// echo "Hello, World!".'<br>';
// echo session('user_id').'<br>';
// echo session('user_name').'<br>';
// echo session('user_email').'<br>';
// echo session('user_phone').'<br>';
$page_title = "Add Task";
?>

<!DOCTYPE html>
<html lang="en">
@include('Components.Header');

<body>
    @include('Components.Navbar');
    <div class="container mt-5">

        <div class="card p-4 shadow-sm border rounded">
            <h2>{{ $page_title }}</h2>
            <hr>
            <form action="/addTask" method="post">
                @csrf
                <div class="mb-3">
                    <label for="task_name" class="form-label">Task Name</label>
                    <input type="text" class="form-control" id="task_name" name="task_name" placeholder="Enter Task Name" required>
                </div>

                <div class="mb-3">
                    <label for="task_description" class="form-label">Task Description</label>
                    <input type="text" class="form-control" id="task_description" name="task_description" placeholder="Enter Task Description" required>
                </div>

                <div class="mb-3">
                    <label for="task_due_date" class="form-label">Task Due Date</label>
                    <input type="date" class="form-control" id="task_due_date" name="task_due_date" placeholder="Enter Task Due Date" required>
                </div>

                <button type="submit" class="btn btn-primary">Add Task</button>
            </form>
        </div>
    </div>

    @include('Components.Footer');
</body>

</html>