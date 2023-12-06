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
      <?php include 'banner.css'; ?>
      <?php include 'Home.css'; ?>
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

  <section class="home-section">
    <div id="main-content">
            <!-- banner -->
            <div class="header-background">   
            <span class="title-huge"><strong>Tanza Academic Forum</strong></span>
            </div>
            <!-- end of banner -->
      
      <!-- Announcement Box -->
      <div class="box">
        <div class="ann">
          <div class="annhead">
            <i class='bx bxs-megaphone'>
            <strong> Announcement </strong>
            </i>
          </div>
        </div>

        <table class="tbann">
          <tr class="tbhead">
            <th>Title</th>
            <th>Content</th>
            <th>Date Created</th>
          </tr>
          <tr class="tbbody"> <!-- This should be generated -->
            <td>Sample title</td>
            <td>Sample Content</td>
            <td>12/25/2025</td>
          </tr>
          <tr class="tbbody">
            <td>Server Maintenance</td>
            <td>Fixing Database</td>
            <td>12/05/2023</td>
          </tr>
        </table>
      </div>
      <!-- End of Announcement Box -->
      
      <br><br><br><br>
      <div class="fb-iframe">
        <!-- iframe facebook page plugin -->
        <div class="fb-page">
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCvSUTC&tabs=timeline&width=500&height=70&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="70" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
        <!-- end of iframe facebook page plugin -->
        
        <!-- iframe facebook post plugin -->
        <div class="fb-post">
          <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fphoto%2F%3Ffbid%3D846208657298112%26set%3Da.576850760900571&width=750&show_text=true&height=660&appId" width="500" height="660" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

        </div>

        <div class="fb-post2">
        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fphoto%2F%3Ffbid%3D999563454825997%26set%3Da.748825163233162&width=500&show_text=true&height=536&appId" width="500" height="660" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
        <!-- end of iframe facebook post plugin -->
      </div>

    </div>




    <!-- footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <h2>About Us</h2>
                <p>An academic forum for the students of Cavite State University of Tanza that will serve as a tool to have an efficient learning experience while engaging with other individuals and improving their communication skills.
                </p>
            </div>
            <div class="footer-section links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#">
                    <i class='bx bxl-facebook'></i>
                    </a></li>
                    <!-- Add more links as needed -->
                </ul>
            </div>
            <div class="footer-section contact">
                <h2>Contact Us</h2>
                <p>Email: your@email.com</p>
                <p>Phone: +123 456 789</p>
                <!-- Add more contact information as needed -->
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2023 Cavite State University | Tanza, Cavite, Philippines</p>
        </div>
    </footer>
    <!-- End of footer -->
  
  </section>


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