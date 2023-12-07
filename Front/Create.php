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
      <?php include 'Create.css'; ?>
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
      <div class="crthead">
        Create a post
      </div>
      <div id="post-form">
          <form>
            <!-- dropdown || take from community database -->
              <select id="communityDropdown">
                <option value="" disabled selected>Choose a community</option>
                <option value="community1">Community 1</option>
                <option value="community2">Community 2</option>
                <option value="community3">Community 3</option>
              </select>
              <!-- dropdown -->
              <br>
              <br>
              <input type="text" id="title" name="title" placeholder="Give this post a title" required>

              <textarea id="content" name="content" rows="4" placeholder="Write your post here" required></textarea>

              <div class="btn">
              <div class="btn-submit"> <button type="submit">Post</button> </div>
              <div class="btn-cancel"> <button type="submit">Cancel</button> </div>
              </div>
              
          </form>
      </div>
    </div>

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