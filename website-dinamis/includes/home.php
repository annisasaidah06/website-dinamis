<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annisa Saidah Mubarokah - Profil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .header {
            background-color: #dc3545;
            color: #fff;
            padding: 3rem 0;
            text-align: center;
        }

        .profile-image {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .social-icons a {
            color: #333;
            font-size: 1.5rem;
            margin: 0 10px;
        }

        .skill-list {
            list-style: none;
            padding: 0;
        }

        .skill-item {
            margin-bottom: 15px;
        }

        .skill-name {
            display: inline-block;
            background-color: #dc3545;
            padding: 5px 10px;
            border-radius: 5px;
            margin-right: 10px;
            color: #fff
        }

        .skill-level {
            display: inline-block;
            background-color: #dc3545;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .about-section {
            background-color: #f8f9fa;
            padding: 2rem;
            border-radius: 10px;
            text-align: justify;
        }

        .about-section h2 {
            color: #dc3545;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="container bg-danger center ">
            <h1 class="Annisa Saidah Mubarokah</h1>
            <p class="lead">Mahasiswa - Teknik Informatika</p>
        </div>
    </header>

    <main class="container py-5">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="assets/images/profile.jpg" alt="Foto Profil" class="profile-image">
                <div class="mt-3 social-icons">
                    
                    <a href="https://github.com/annisasaidah06"><i class="fab fa-github"></i></a>
                    <a href="https://www.instagram.com/nssdh_06/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-md-8">
                <section class="about-section">
                    <h2>Tentang Saya</h2>
                    <p>
                        Halo! Saya seorang mahasiswa semester 3 di Universitas Pelita bangsa.Saya ingin terus belajar dan
                     untuk dapat mengolah data menjadi informasi yang bermanfaat.
                    </p>
                </section>

                <h2 class="mt-4">Keahlian</h2>
                <ul class="skill-list">
                    <li class="skill-item">
                        <span class="skill-name">SQL (MySQL, PostgreSQL)</span>

                    </li>
                    <li class="skill-item">
                        <span class="skill-name">Python</span>

                    </li>
                    <li class="skill-item">
                        <span class="skill-name">Microsoft Excel</span>

                    </li>
                    <li class="skill-item">
                        <span class="skill-name">Tableau</span>

                    </li>
                    <li class="skill-item">
                        <span class="skill-name">Matplotlib</span>

                    </li>
                </ul>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>