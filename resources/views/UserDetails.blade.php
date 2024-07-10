<?php
$page_title = "User Details";
?>
<!DOCTYPE html>
<html lang="en">
@include('Components.Header');
<body>
    @include('Components.Navbar');

    <div class="container mt-5">
        <div class="card p-4 shadow-sm border rounded">
            <h2>User Details</h2>
            <hr>
            <div class="mb-3">
                <label for="user_name" class="form-label">User Name</label>
                <input type="text" class="form-control" id="user_name" name="user_name" value="{{ session('user_name') }}" readonly>
            </div>

            <div class="mb-3">
                <label for="user_email" class="form-label">User Email</label>
                <input type="email" class="form-control" id="user_email" name="user_email" value="{{ session('user_email') }}" readonly>
            </div>

            <div class="mb-3">
                <label for="user_phone" class="form-label">User Phone</label>
                <input type="text" class="form-control" id="user_phone" name="user_phone" value="{{ session('user_phone') }}" readonly>
            </div>
            <button class="btn bt-primary"><a class="btn btn-primary" href="Dashboard">Go To Dashboard</a></button>
        </div>

        @include('Components.Footer');
    
</body>
</html>