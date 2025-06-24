<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(to bottom right, #e7f0fd, #ffffff);
            font-family: 'Segoe UI', sans-serif;
        }
        .sidebar {
            background: #003e8a;
            color: white;
            min-height: 100vh;
            padding-top: 20px;
        }
        .sidebar h4 {
            text-align: center;
            font-weight: bold;
        }
        .sidebar .nav-link {
            color: white;
            background-color: #0056d2;
            margin: 8px 15px;
            border-radius: 25px;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: #007bff;
        }
        .logout-form {
            margin: 20px 15px 0;
        }
        .logout-btn {
            width: 100%;
            background: red;
            color: white;
            font-weight: bold;
            border-radius: 25px;
            padding: 10px 15px;
            border: none;
            text-align: center;
            text-decoration: none;
        }
        .card-dashboard {
            border-radius: 20px;
            padding: 20px;
            color: white;
            font-weight: bold;
            text-align: center;
        }
        .bg-blue { background: linear-gradient(to right, #0052d4, #4364f7); }
        .bg-green { background: linear-gradient(to right, #11998e, #38ef7d); }
        .bg-yellow { background: linear-gradient(to right, #f7971e, #ffd200); }
        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        .dashboard-header h2 {
            margin: 0;
        }
        .search-bar {
            display: flex;
            align-items: center;
            background-color: white;
            padding: 5px 10px;
            border-radius: 25px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        .search-bar input {
            border: none;
            outline: none;
            margin-left: 5px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 sidebar">
            <h4 class="mb-4">@yield('role-title')</h4>
            <a href="#" class="nav-link active"><i class="fas fa-gauge"></i> Dashboard</a>
            @yield('sidebar-menu')
            <form action="{{ route('logout') }}" method="POST" class="logout-form">
                @csrf
                <button type="submit" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Logout</button>
            </form>
        </div>
        <div class="col-md-10 p-5">
            <div class="dashboard-header">
                <h2>@yield('title')</h2>
                <div>
                    <div class="search-bar">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search">
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
