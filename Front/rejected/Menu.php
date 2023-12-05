<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    <?php include 'sidebar.css'; ?>
    <?php include 'banner.css'; ?>
    <?php include 'main.css'; ?>
  </style>
</head>
<body>
    <div id="sidebar">
        <ul>
        <li>
        <form action="/search" method="get" class="search-form">
        <div id="search-bar">
        <input type="text" id="search-input" placeholder="Search...">
        </form>
        </div>
        </li>
        <li>Home</li>
        <li>My Post</li>
        <li>Notifications</li>
        <li>Profile</li>
        <!-- Add more list items as needed -->
        </ul>

        <div class="profile">

        </div>
            <img id="profile-picture" src="Image/Choso cat.jpg" alt="Profile Picture"> <!-- take the user profile here -->
            <br>
            <div class="UserName"> <!-- take the Name profile here -->
                Ryam Montana
            </div>
            <div class="Course"> <!-- take the Course profile here -->
                BSIT
            </div>
        </div>
    </div>

    <!-- Your main content goes here -->
    <div id="main-content">
        <!-- Your main content goes here -->
        <div class="header-background">   
        <span class="title-huge"><strong>Tanza Academic Forum</strong></span>
    </div>

</body>
</html>
