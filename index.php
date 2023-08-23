<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- MY CSS -->
    <style>
        body {
            background-color: #f4f5f7;
        }

        .jumbotron {
            padding-top: 6rem;
            background-color: #f4f5f7;
        }
    </style>

    <title>Rona Aprilia</title>
</head>

<body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary bg-primary shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Rona Aprilia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- JumboTron -->
    <section class="jumbotron text-center">
        <img src="img/gambarkuceng.jpeg" alt="Rona Aprilia" width="200" class="rounded-circle img-thumbnail" />
        <h1 class="display-4">Rona Aprilia</h1>
        <p class="lead">Undergraduate Informatics Engineering Students at Lampung University</p>

        <?php
        $semester = 5;
        $learningPath = "Full-stack Web Developer";
        echo "<p>Pada semester $semester ini mengikuti Program Studi Independen di PT GITS Indonesia dengan learning path $learningPath</p>";
        ?>
    </section>
    <!-- Akhir Jumboton -->

    <!-- Footer -->
    <footer class="bg-secondary text-white text-center fixed-bottom">
        <p>by <a href="https://www.instagram.com/ronaprr_/" class="text-white fw-bold">Rona Aprilia</a></p>
    </footer>
    <!-- Akhir Footer -->

</body>

</html>