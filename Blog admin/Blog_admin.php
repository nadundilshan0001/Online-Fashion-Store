
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEFAULT-BLOG</title>
    
    <!--Blog-->

    <script src="Blog.js"></script> <!--JS-->
    <link rel="stylesheet" href="Header and footer.css">
    <link rel="stylesheet" href="Blog admin css.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="wdith=device-width, initial-scale=1">

    

    <style>

      /*Scroll bar---------------------*/
        /* width */
        ::-webkit-scrollbar {
          width: 10px;
        }
        
        /* Track */
        ::-webkit-scrollbar-track {
          background: #f1f1f1; 
        }
         
        /* Handle */
        ::-webkit-scrollbar-thumb {
          background: #888; 
        }
        
        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
          background: #555; 
        }
        /*Scroll bar-------------------*/
        
        </style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <div class="header">
        <header>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="logo.png" alt="logo" width="125px">
            </div>
            <nav>
                <ul>
                    <li><a href="\Online Fashion Store\Home page\Homepage.php">Home</a></li>
                    <li><a href="">Shop</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </nav>
            <img src="cart.png" alt="cart" width="30px" height="30px">
           </div> 
           

    </div>
</header>
</div>
  <!--header ending--> 



  <!--blog page begining-->

 <!-- Image header -->
 <header>
    <div class="image-container-header">
    <img src="Blog-cover.jpg" alt="Fashion Blog" width="1560" height="800">
    <div class="header-overlay">
      <h1><b> BLOG</b></h1>
    </div>
    </div>
  </header>
  


     <!-- Blog entries -->
       <div class="main">
    
        <!-- Blog1 entry -->
        <div class="Blog">
           <?php
                
                require 'Connection.php';
                
                $query = "SELECT Blog_header, Blog_date, Blog_paragraph FROM crud LIMIT 1";
                $result = $con->query($query);
                
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $header = $row['Blog_header'];
                    $date = $row['Blog_date'];
                    $paragraph = $row['Blog_paragraph'];
                
                    echo "<div class='main'>";
                    echo "<h2 class=\"Title_heading\">$header</h2>";
                    echo"<h4 class=\"Date\">Date: $date</h4s>";
                    echo "<p class=\"paragraph\">$paragraph</p>";
                    echo "</div>";
                } else {
                    echo "No data found in the database.";
                }
                
                $con->close();
                
                

            ?>

         <!--Edit blog 1 button-->
                <form action="blog1_edit.php" method="post">
                    <button type="submit"  id="blog1" class="button1">Edit the blog</button>
                </form>


                <br>
                          <!-- <button class="button1">Read more</button> -->
          
          <br>            
                <!--Change pic button-->
                



            <div class="image-container-blog1">
            <img src="blog_1.jpg" alt="Haile's Story" class="blog-1-img">
            </div>

                <br>

            <br>
            <hr class="Horizontal_line">
     </div>
            <!-- Blog2 entry -->
        <div class="Blog">
            

        <?php
require 'Connection.php';

$query = "SELECT Blog_header, Blog_date, Blog_paragraph FROM crud LIMIT 1, 1";
$result = $con->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $header = $row['Blog_header'];
    $date = $row['Blog_date'];
    $paragraph = $row['Blog_paragraph'];

    echo "<div class='main'>";
    echo "<div class='Blog'>";
    echo "<h2 class=\"Title_heading\">$header</h2>";
    echo "<h4 class=\"Date\">Date: $date</h4>";
    echo "<p class=\"paragraph\">$paragraph</p>";
    echo "</div>";
    echo "</div>";
} else {
    echo "No data found in the database.";
}

$con->close();
?>


              <!--Edit blog 2 button-->
              <form action="blog2_edit.php" method="post">
                <button type="submit"  id="blog2" class="button1">Edit the blog</button>
            </form>
            <br>

                <br>

            
              <div class="image-container-blog1">
              <img src="blog_2.jpg" alt="Shane's story" class="blog-1-img">
              </div>
              

                      <br>
                      <!-- <button class="button1">Read more</button> -->
                <br>
                  
              <br>
              <hr class="Horizontal_line">
              </div>

              <!-- Blog3 entry -->
        <div class="Blog">
            
        <?php
require 'Connection.php';

$query = "SELECT Blog_header, Blog_date, Blog_paragraph FROM crud LIMIT 2, 1";
$result = $con->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $header = $row['Blog_header'];
    $date = $row['Blog_date'];
    $paragraph = $row['Blog_paragraph'];

    echo "<div class='main'>";
    echo "<div class='Blog'>";
    echo "<h2 class=\"Title_heading\">$header</h2>";
    echo"<h4 class=\"Date\">Date: $date</h4>";
    echo "<p class=\"paragraph\">$paragraph</p>";
    echo "</div>";
    echo "</div>";
} else {
    echo "No data found in the database.";
}

$con->close();
?>

                  <!--Edit blog 3 button-->
                  <form action="blog3_edit.php" method="post">
                  <button type="submit"  id="blog3"  class="button1">Edit the blog</button>
              </form>

                
              <br>

                <br>
                <!--Change pic button-->
                

            
              <div class="image-container-blog1">
              <img src="blog_3.jpg" alt="Alan's story" class="blog-1-img">
              </div>

                <br>
              <!-- <button class="button1">Read more</button> -->
                          
                
            
                          <br>
              
              <br>
              <hr class="Horizontal_line">
    </div>

              <!--Blog 4 entry-->
              <div class="Blog">
                
              <?php
require 'Connection.php';

$query = "SELECT Blog_header, Blog_date, Blog_paragraph FROM crud LIMIT 3, 1";
$result = $con->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $header = $row['Blog_header'];
    $date = $row['Blog_date'];
    $paragraph = $row['Blog_paragraph'];

    echo "<div class='main'>";
    echo "<div class='Blog'>";
    echo "<h2 class=\"Title_heading\">$header</h2>";
    echo"<h4 class=\"Date\">Date: $date</h4>";
    echo "<p class=\"paragraph\">$paragraph</p>";
    echo "</div>";
    echo "</div>";
} else {
    echo "No data found in the database.";
}

$con->close();
?>

                  <!--Edit blog 4 button-->
                <form action="blog4_edit.php" method="post">
                  <button type="submit"  id="blog4"  class="button1">Edit the blog</button>
              </form>



                <br>
                <!--Change pic button-->
                
                
                  <div class="image-container-blog1">
                  <img src="blog_4.jpg" alt="Alan's story" class="blog-1-img">
                  </div>
                  

                          <br>
                          <!-- <button class="button1">Read more</button> -->
                          <br>
                  <br>
                  <hr class="Horizontal_line">
    </div>

             <!-- Blog5 entry -->
        <div class="Blog">
            
        <?php
require 'Connection.php';

$query = "SELECT Blog_header, Blog_date, Blog_paragraph FROM crud LIMIT 4, 1";
$result = $con->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $header = $row['Blog_header'];
    $date = $row['Blog_date'];
    $paragraph = $row['Blog_paragraph'];

    echo "<div class='main'>";
    echo "<div class='Blog'>";
    echo "<h2 class=\"Title_heading\">$header</h2>";
    echo"<h4 class=\"Date\">Date: $date</h4>";
    echo "<p class=\"paragraph\">$paragraph</p>";
    echo "</div>";
    echo "</div>";
} else {
    echo "No data found in the database.";
}

$con->close();
?>

              <!--Edit blog 5 button-->
              <form action="blog5_edit.php" method="post">
                <button type="submit" id="blog5" class="button1">Edit the blog</button>
            </form>


              

            <br>
            <br>
            <!--Change pic button-->
            

            
              <div class="image-container-blog1">
              <img src="Blog_5.jpg" alt="Shane's Story" class="blog-1-img">
              </div>
              
              
                  <!-- <button class="button1">Read more</button> -->
                  <br>
              <br>
              <hr class="Horizontal_line">
    </div>

               <!-- Blog6 entry -->
        <div class="Blog">
            
        <?php
require 'Connection.php';

$query = "SELECT Blog_header, Blog_date, Blog_paragraph FROM crud LIMIT 5, 1";
$result = $con->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $header = $row['Blog_header'];
    $date = $row['Blog_date'];
    $paragraph = $row['Blog_paragraph'];

    echo "<div class='main'>";
    echo "<div class='Blog'>";
    echo "<h2 class=\"Title_heading\">$header</h2>";
    echo"<h4 class=\"Date\">Date: $date</h4>";
    echo "<p class=\"paragraph\">$paragraph</p>";
    echo "</div>";
    echo "</div>";
} else {
    echo "No data found in the database.";
}

$con->close();
?>
              <!--Edit blog 6 button-->
              <form action="blog6_edit.php" method="post">
                <button type="submit" id="blog6" class="button1">Edit the blog</button>
            </form>


            <br>
            <br>
            <!--Change pic button-->
            

              <div class="image-container-blog1">
              <img src="blog_6.jpg" alt="Ron's Story" class="blog-1-img">
              </div>
              
              
                  
                  <!-- <button class="button1">Read more</button> -->
                  <br>

              <br>
              <hr class="Horizontal_line">

          </div>
    </div>

    



            <!-- Create blog -->
<form action="create_blog.php" method="post">
    <button type="submit"  id="newblog" class="bottom-button1">Create new blog</button> 
</form>

<!-- Show table button -->
<form action="show_table.php" method="post">
    <button type="submit"  id="show_table" class="bottom-button2">Show table</button>
</form>


          









    <!--blog page ending-->

  <!--footer begining--> 
  <footer class="footer" style="margin-top: 8000px;">
    <div class="footer-container">
<div class="footer-row">

<div class="footer-col">
    <h3>CATEGORIES</h3>
    <ul class="footerul">
        <li><a href="#">Men</a></li>
        <li><a href="#">Women</a></li>
        <li><a href="#">Shoes</a></li>
        <li><a href="#">Watches</a></li>
    </ul>
</div>

<div class="footer-col">
    <h3>HELP</h3>
    <ul class="footerul">
        <li><a href="#">Track Order</a></li>
        <li><a href="#">Returns</a></li>
        <li><a href="#">Shopping</a></li>
        <li><a href="#">FAQs</a></li>
    </ul>
</div>

<div class="footer-col">
    <h3>Get in Touch</h3>
    <p id="GetInTouch">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br> 
        Repudiandae odio quae, fugit beatae ad aliquam,<br>  
        asperiores maiores obcaecati ex aspernatur<br>  
        officia facere dolores expedita totam<br>  
        tenetur sint unde natus rerum?<br> 
    </p>
</div>

<div class="footer-col">
    <h3>FOLLOW US</h3>
    <input type="email" name="email" id="subcribeEmail" placeholder="example@gmail.com">
    <a href="#" class="footerbtn">Subcribe to Email</a>
    <div class="socialMediaIcons">
    <a href="#"><i class="fa-brands fa-facebook"></i></a>
    <a href="#"><i class="fa-brands fa-instagram"></i></a>
    <a href="#"><i class="fa-brands fa-youtube"></i></a>
    <a href="#"><i class="fa-brands fa-twitter"></i></a>
</div>
</div>



</div>


</div>
<div class="copyright">
    <p>Copyright &copy;2023 All right reserved</p>
</div>


</footer>
</body>
</html>