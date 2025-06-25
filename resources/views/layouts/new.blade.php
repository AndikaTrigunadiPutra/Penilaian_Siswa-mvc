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
            background: linear-gradient(135deg, #e7f0fd, #ffffff);
            font-family: 'Segoe UI', sans-serif;
        }
        .sidebar {
            background: #0056d2; /* biru biasa */
            color: white;
            min-height: 100vh;
            padding-top: 20px;
            box-shadow: 5px 0 20px rgba(0, 0, 0, 0.3);
            z-index: 10;
            position: relative;
        }
        .sidebar h4 {
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 2rem;
        }
        .sidebar .nav-link {
            color: white;
            background-color: #003e8a;
            margin: 16px 15px; 
            border-radius: 25px;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: background-color 0.3s ease, transform 0.2s;
        }
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: #007bff;
            transform: translateX(5px);
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
            transition: background 0.3s;
        }
        .logout-btn:hover {
            background: darkred;
        }
        .card-dashboard {
            border-radius: 20px;
            padding: 20px;
            color: white;
            font-weight: bold;
            text-align: center;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }
        .card-dashboard:hover {
            transform: translateY(-5px);
        }
        .bg-blue {
            background: linear-gradient(to right, #0052d4, #4364f7);
        }
        .bg-green {
            background: linear-gradient(to right, #11998e, #38ef7d);
        }
        .bg-yellow {
            background: linear-gradient(to right, #f7971e, #ffd200);
        }
        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        .dashboard-header h2 {
            margin: 0;
            font-weight: bold;
            color: #003e8a;
            font-size: 2.5rem;
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
        .card-role-title {
            background-color: #003e8a;
            height: 200px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            color: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin: 0;
            padding: 0;
            border-radius: 25px;
}

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 sidebar">
            <div class="card-role-title">
                @yield('role-title')
            </div>
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
