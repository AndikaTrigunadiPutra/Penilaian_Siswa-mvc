<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Siswa - Penilaian Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      rel="stylesheet"
    />
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .sidebar {
            background: #064aad;
            color: white;
            min-height: 100vh;
            padding-top: 1rem;
        }

        .sidebar h2 {
            font-weight: 700;
            padding: 1.5rem 1rem;
            font-size: 1.8rem;
            border-bottom: 2px solid #043f94;
        }

        .nav-link {
            font-weight: 600;
            margin-bottom: 0.8rem;
            border-radius: 2rem;
            padding: 0.75rem 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.8rem;
            box-shadow: 1px 1px 4px rgb(0 0 0 / 0.1);
        }

        .nav-link.active {
            background: #0b4bbb;
            box-shadow: 2px 5px 12px rgb(0 0 0 / 0.25);
        }

        .logout-btn {
            background: #df1a1a;
            font-weight: 700;
            border-radius: 2rem;
            padding: 0.75rem 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.7rem;
            box-shadow: 1px 1px 5px rgb(0 0 0 / 0.3);
            border: none;
            cursor: pointer;
            width: 100%;
            justify-content: center;
            margin-top: auto;
            margin-bottom: 2rem;
            transition: background-color 0.3s ease;
        }

        .logout-btn:hover {
            background: #a41313;
        }

        .content {
            background-image: linear-gradient(135deg, #d7eafa 0%, #f9faff 100%);
            min-height: 100vh;
            padding: 3rem 2rem 2rem 2rem;
            display: flex;
            flex-direction: column;
        }

        .top-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            color: #004696;
            font-weight: 700;
            font-size: 2rem;
            text-shadow: 1px 1px 2px rgb(0 0 0 / 0.1);
        }

        .profile-icon {
            background-color: #0b4bbb;
            color: white;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            font-size: 1.6rem;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 1px 2px 6px rgb(0 0 0 / 0.15);
            transition: background-color 0.3s ease;
        }

        .profile-icon:hover {
            background-color: #063a90;
        }

        .card-wrapper {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
            margin-bottom: 2rem;
        }

        .card-custom {
            flex: 1 1 250px;
            color: white;
            border-radius: 15px;
            padding: 1.5rem 1.8rem;
            box-shadow: 2px 5px 15px rgb(0 0 0 / 0.15);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            font-weight: 600;
            transition: transform 0.3s ease;
        }

        .card-custom:hover {
            transform: translateY(-5px);
        }

        .card-icon-container {
            background-color: rgba(255, 255, 255, 0.18);
            padding: 1.2rem;
            border-radius: 50%;
            margin-bottom: 1rem;
            font-size: 1.8rem;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .gradient-blue {
            background: linear-gradient(135deg, #5dade2, #2e69d6);
        }

        .gradient-green {
            background: linear-gradient(135deg, #4eca71, #269b1e);
        }

        .gradient-yellow {
            background: linear-gradient(135deg, #e2c849, #dda519);
        }

        .welcome-panel {
            background: white;
            border-radius: 15px;
            padding: 2rem 2.5rem;
            color: #0b4bbb;
            font-weight: 700;
            font-size: 1.6rem;
            box-shadow: 2px 10px 25px rgb(0 0 0 / 0.12);
            text-align: center;
            max-width: 100%;
            line-height: 1.3;
        }

        .welcome-panel small {
            display: block;
            font-weight: 400;
            font-size: 1rem;
            margin-top: 0.4rem;
            color: #0b4bbbcc;
            font-style: italic;
        }

        @media (max-width: 768px) {
            .sidebar {
                min-height: auto;
                height: auto;
                position: relative;
            }

            .content {
                padding: 2rem 1rem;
            }

            .card-wrapper {
                flex-direction: column;
            }

            .top-header {
                font-size: 1.5rem;
                margin-bottom: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <aside class="sidebar d-flex flex-column col-md-3 col-lg-2 px-3">
            <h2>Penilaian Siswa</h2>
            <nav class="nav flex-column mt-4">
                <a href="#" class="nav-link active text-white">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
                <a href="#" class="nav-link text-white">
                    <i class="fas fa-clipboard-list"></i> Nilai Siswa
                </a>
                <a href="#" class="nav-link text-white">
                    <i class="fas fa-user"></i> Profil Siswa
                </a>
            </nav>
            <button class="logout-btn mt-auto"><i class="fas fa-sign-out-alt"></i> Logout</button>
        </aside>

        <main class="content flex-grow-1">
            <header class="top-header">
                <div>Dashboard Siswa</div>
                <div class="profile-icon" title="Profil Siswa">
                    <i class="fas fa-user"></i>
                </div>
            </header>

            <section class="card-wrapper">
                <article class="card-custom gradient-blue" aria-label="Jumlah Mata Pelajaran">
                    <div class="card-icon-container">
                        <i class="fas fa-book"></i>
                    </div>
                    <div>Mata Pelajaran</div>
                    <div class="fs-2 fw-bold">10</div>
                </article>

                <article class="card-custom gradient-green" aria-label="Total Nilai Siswa">
                    <div class="card-icon-container">
                        <i class="fas fa-clipboard-list "></i>
                    </div>
                    <div>Total Nilai Siswa</div>
                    <div class="fs-2 fw-bold">85</div>
                </article>

                <article class="card-custom gradient-yellow" aria-label="Nilai Rata Rata">
                    <div class="card-icon-container">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div>Nilai Rata-Rata</div>
                    <div class="fs-2 fw-bold">87,5</div>
                </article>
            </section>

            <section class="welcome-panel" role="region" aria-labelledby="welcome-title">
                <h1 id="welcome-title">Selamat Datang, Siswa!</h1>
                <small>Berikut Ringkasan Nilai dan Mata Pelajaran Anda</small>
            </section>
        </main>
    </div>
</body>

</html>
