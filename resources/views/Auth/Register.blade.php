<?php
$page_title = "Registration";
?>
<!DOCTYPE html>
<html lang="en">
@include('Components.Header')

<body>
    <div class="container">
        <div class="card shadow mt-5">
            <div class="card-body">
                <h2 class="card-title text-center">Registration</h2>
                <hr>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="/register" method="post" class="mt-3">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password (Atleast eight digit with one UpperCase, one LowerCase, One Number, One Special Character)" required>

                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" pattern="[0-9]{10}" placeholder="Enter your phone number" value="{{ old('phone') }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </form>
                <div class="mt-3 text-center">
                    <p>Already have an account? <a href="/login" class="btn btn-link">Login here</a></p>
                </div>
            </div>
        </div>
    </div>

    @include('Components.Footer')

</body>

</html>
