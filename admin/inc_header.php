<?php
include("../inc/inc_koneksi.php");
include("../inc/inc_fungsi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Company Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>

    <link href="../css/summernote-image-list.css">
    <script src="../js/summernote-image-list.min.js"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <style>
        .image-list-content .col-lg-3 { width: 100%;}
        .image-list-content img { float:left; width: 20%}
        .image-list-content p { float:left; padding-left:20px}
        .image-list-item { padding:10px 0px 10px 0px } 
    </style>
</head>

<body class="container">
    <header>
        <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Admin Halaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Admin Tutors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Admin Partner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Admin Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Logout>></a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>
<main>