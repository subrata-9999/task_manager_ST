<div style="background-color: rgba(0, 0, 0, 0.35);">
    <nav class="navbar navbar-dark bg-dark fixed-top" style="margin-left: 7%; margin-right: 7%; margin-top: 1%; margin-bottom: 2%; border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Task Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">{{session('user_name')}}</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link {{ $page_title === 'Dashboard' ? 'active' : '' }}" aria-current="page" href="Dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $page_title === 'Add Task' ? 'active' : '' }}   " href="AddTask">Add Task</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $page_title === 'User Details' ? 'active' : '' }}" href="UserDetails"> User Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>