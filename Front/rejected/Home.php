<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
<?php include 'navbar.css'; ?>
<?php include 'banner.css'; ?>
</style>
</head>
<body>
<div> 
  <!-- header -->
    <div>
        <div class="header-background">   
        <span class="title-huge"><strong>Tanza Academic Forum</strong></span>
    </div>

    <!-- navbar -->
    <nav class="navbar">
        <div class="navbar-container container">
            <ul class="menu-items">
                <li><a href="#">Home</a></li>
                <li><a href="#">Post</a></li>
                <li> <form action="/search" method="get" class="search-form">
                    <input type="text" id="searchInput" name="q" placeholder="Search...">
                    <button type="submit">Search</button>
                    </form>
                </li>
                <li><a href="#">Notifications</a></li>
                <li><a href="#">Profile</a></li>
            </ul>
            <img src="Image\logo.png">
            <h1 class="logo">CVSU</h1>
        </div>
    </nav>
</div>
</body>
</html>