<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Sidebar Menu  | CodingLab </title>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
      <?php include 'sidebar.css'; ?>
      <?php include 'Profile.css'; ?>
      <?php include 'style.css'; ?>
      <?php include 'footer.css'; ?>
     </style>
   </head>
<body>
  <!-- sidebar -->
  <div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">CVSU</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
          <input type="text" placeholder="Search...">
          <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-home-alt'></i>
          <span class="links_name">Home</span>
        </a>
         <span class="tooltip">Home</span>
      </li>
      <li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">User</span>
       </a>
       <span class="tooltip">User</span>
     </li>
     <li>
       <a href="#">
          <i class='bx bx-plus'></i>
         <span class="links_name">Create Post</span>
       </a>
       <span class="tooltip">Create Post</span>
     </li>
     <li>
       <a href="#">
          <i class='bx bx-food-menu'></i>
         <span class="links_name">My Post</span>
       </a>
       <span class="tooltip">My Post</span>
     </li>
     <li>
       <a href="#">
          <i class='bx bx-bell'></i>
         <span class="links_name">Notifications</span>
       </a>
       <span class="tooltip">Notifications</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="Image/choso cat.jpg" alt="profileImg"> <!-- take the user profile here -->
           <div class="name_course">
             <div class="name">Ryam Montana</div> <!-- take the user name here -->
             <div class="course">BSIT</div> <!-- take the user course here -->
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>
  <!-- end of sidebar -->


  <div class="bg-cover"></div>
  <div class="container">
    <div class="middle">
      <img src="Image\choso cat.jpg" alt="" class="user-pic" />
      <h4 class="name">Ryam Montana</h4>
      <h4 class="course">BSIT</h4>
    </div>
    <div class="post">
      <h4 class="profile-status">This profile is hidden</h4>
    </div>
  </div>

  <br><br><br><br><br><br><br><br><br><br>
  <!-- footer -->
  <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <h2>About Us</h2>
                <p>An academic forum for the students of Cavite State University of Tanza that will serve as a tool to have an efficient learning experience while engaging with other individuals and improving their communication skills.
                </p>
            </div>
            <div class="footer-section contact">
                <h2>Contact Us</h2>
                <p>Email: your@email.com</p>
                <p>Phone: +123 456 789</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2023 Cavite State University | Tanza, Cavite, Philippines</p>
        </div>
    </footer>
    <!-- End of footer -->

    <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>

</body>
</html>