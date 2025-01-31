<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../imgs/restaurant-svgrepo-com.svg" type="image/x-icon">
  <title>resto.com</title>

  <!-- Self css -->
  <link rel="stylesheet" href="../styles/style.css" />
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />

  <!-- scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="../script/code.js"></script>
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>

  <script>
    const menuButton = document.querySelector("button[aria-controls='mobile-menu']");
  const menu = document.querySelector("#mobile-menu");
  const menuOpenIcon = menuButton.querySelector(".block");
  const menuCloseIcon = menuButton.querySelector(".hidden");
  
  menuButton.addEventListener("click", function () {
    if (menu.classList.contains("hidden")) {
      menu.classList.remove("hidden");
      menuOpenIcon.classList.add("hidden");
      menuCloseIcon.classList.remove("hidden");
      menuButton.setAttribute("aria-expanded", true);
    } else {
      menu.classList.add("hidden");
      menuOpenIcon.classList.remove("hidden");
      menuCloseIcon.classList.add("hidden");
      menuButton.setAttribute("aria-expanded", false);
    }
  });

  // const menuButton = document.querySelector("button[aria-controls='mobile-menu']");
  // const menu = document.querySelector("#mobile-menu");
  // const menuOpenIcon = menuButton.querySelector(".block");
  // const menuCloseIcon = menuButton.querySelector(".hidden");
  
  // menuButton.addEventListener("click", function () {
  //   if (menu.classList.contains("hidden")) {
  //     menu.classList.remove("hidden");
  //     menuOpenIcon.classList.add("hidden");
  //     menuCloseIcon.classList.remove("hidden");
  //     menuButton.setAttribute("aria-expanded", true);
  //   } else {
  //     menu.classList.add("hidden");
  //     menuOpenIcon.classList.remove("hidden");
  //     menuCloseIcon.classList.add("hidden");
  //     menuButton.setAttribute("aria-expanded", false);
  //   }
  // });
  
  </script>

  <style>
    body {
      box-sizing: border-box;
      background-color: rgb(43, 58, 78);
    }

    a {
      text-decoration: none;
    }

    #hideme {
      display: none;
    }

    .headerview{
    background:linear-gradient(30deg,rgba(17, 16, 16, 0.5),rgba(17, 16, 16, 0.5),rgba(17, 16, 16, 0.5)),url(../imgs/demo.jpg);
    width:100vw;
    height:90vh;
    /* background:url(../imgs/demo.jpg); */
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
  }
  .headerview:hover{
    background:linear-gradient(180deg,rgba(17, 16, 16, 0.1),rgba(17, 16, 16, 0.3),rgba(17, 16, 16, 0.8)),url(../imgs/demo.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
  }
  .aboutintro{
    backdrop-filter: blur(3px);
    background-color: rgba(0, 0, 0, 0.377);
    width:100%;
    height:100%;
    text-align: center;
    display: flex;
    align-items: center;
    }
    .aboutintroP{
      /* margin-top: 10%; */
      padding:3%;
      color:#ddd;
      word-spacing: 4px;
      letter-spacing: 2px;
      font-family:Arial, Helvetica, sans-serif;
    }

    nav{
      background-color: rgba(31, 41, 55, 0.500);
      padding-top:1%;
      padding-bottom:1%;
      position:fixed;
      top:0;
      left:0;
      right:0;
      z-index: 20;
    }


    /* notices */

#notice{
    background:rgba(184, 178, 178, 0.300);
    border:2px groove white;
    border-left:2px groove transparent;
    border-radius:0px 20px 20px 0px;
    position:fixed;
    top:30%;
    left:0%;
    width:5%;
    max-width:30px;
    height:20%;
    overflow:hidden;
    text-align: center;
    box-shadow:2px 3px 20px 5px rgba(0, 0, 0, 0.945);
    filter:brightness(200%);
    border:none;
    z-index:99;
    backdrop-filter: blur(2px);
  }
  
  #notice:hover{
    overflow:scroll;
  }
  
  #notice ol{
    display:none;
  }
  
  #notice:hover ol{
    display:block;
  }
  #notice li{
    text-align:left;
    padding:1%;
    color:white;
    padding-left:2%;
    border-radius: 10px;
  }
  
  #notice li:hover{
    /* color:black; */
    background:rgba(172, 169, 169, 0.336);
  }
  #notice:hover{
    filter:brightness(100%);
    animation-name: note;
    animation-duration: 2s;
    animation-iteration-count:1;
    animation-delay: 0s;
    animation-fill-mode:forwards;
    animation-timing-function: ease-in-out;
  }
  #notice li::placeholder{
    color:red;
  }
  @keyframes note{
    from{
      right:100%;
      width:5%;
      height:20%;
      background:rgba(0, 0, 0, 0.774);
      box-shadow:0px 0px 0px 0px black;
    }
    to{
      right:5%;
      height:50vh;
      width:95vw;
      max-width: 95vw;
      background-color: rgba(2, 41, 8, 0.863);
      box-shadow:1px 1px 5px 600px rgba(0, 0, 0, 0.849);
    }
  }
  
  #notice h3{
    width:fit-content;
    margin:auto;
    margin-bottom: 2%;
  }

  .msgs{
    z-index:20;
  }

  .noticeAlert{
    border: none;
    box-shadow: -20px 20px 20px 5px rgba(0, 0, 0, 0.650);
        z-index:19;
        animation: notified 1.5s 0s 1 alternate both;
        animation-timing-function:cubic-bezier(0.01, -0.05, 0.005, 1.5);
        transform: perspective(200px) rotateX(45deg);
        /* border:1px solid red; */
        width:70%;
        max-width:fit-content;
        padding:1%;
        margin: auto;
        /* position: sticky;
        top:20px; */
        background:linear-gradient(45deg,rgba(7, 66, 66, 0.6),rgba(29, 33, 34, 0.6),rgba(29, 33, 34, 0.6),rgba(7, 66, 66, 0.6));
        color:greenyellow;
        display: flex;
        justify-content: space-around;
        border-radius:10px;
        align-items: center;
        text-align: center;
        letter-spacing: 2px;
        word-spacing:4px;
        /* position:sticky;
        top:10px; */
        }
    .noticeAlert button{
        animation: notified 1.5s 0s 1 alternate both;
        animation-timing-function:cubic-bezier(0.68, -0.55, 0.265, 1);
        margin-left:3%;
        /* background:crimson; */
        border:none;
        border-radius: 5px;
        color:crimson;
        font-size:2em;
        padding:2%;
        width: 100%;
    }

    @keyframes notified {
        from{
            background:rgba(0, 0, 0, 0.8);
            /* background:linear-gradient(180deg,rgba(14, 147, 180, 0.700),rgba(18, 18, 19, 0.700),rgba(14, 147, 180, 0.700),rgba(18, 18, 19, 0.700)); */
            margin-top:-2%;
            transform: perspective(2px) rotateX(45deg);
        }
        to{
            background:linear-gradient(45deg,rgba(7, 66, 66, 0.6),rgba(29, 33, 34, 0.6),rgba(29, 33, 34, 0.6),rgba(7, 66, 66, 0.6));
            margin-top:30vh;
            transform: perspective(200px) rotateX(3deg);
        }
    }
    #noticeblock{
      z-index: 19;
    }

  </style>
</head>

<body>
  <!-- receiving errors from backend -->
  <?php
  if (isset($_GET['msg'])) {
    $error = $_GET['msg'];
    if (strlen($error) > 1) {
      echo '<div class="alert msgs alert-warning alert-dismissible fade show noticeAlert" id = "noticeblock" role="alert">'.$error.'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
    }
  }
  ?>


  <!-- ######################  navigation  ###################### -->
  <nav>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!--
                  Icon when menu is closed.
      
                  Heroicon name: outline/bars-3
      
                  Menu open: "hidden", Menu closed: "block"
                -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!--               
                  Icon when menu is open.
      
                  Heroicon name: outline/x-mark
      
                  Menu open: "block", Menu closed: "hidden"
                -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex flex-shrink-0 items-center">
            <img title="resto" class="block h-8 w-auto lg:hidden" src="../imgs/restaurant-svgrepo-com.svg" alt="Your Company" />
            <img title="resto" class="hidden h-8 w-auto lg:block" src="../imgs/restaurant-svgrepo-com.svg" alt="Your Company" />
          </div>
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex items-center space-x-4">
                <?php
                if (isset($_SESSION['userID'])) {
                  echo '<a href="./userProfile.php" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">'.$_SESSION["username"].'</a>';
                } else {
                  echo '<a href="./signup.html" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Sign Up</a>';
                }
                ?>

              <form action="index.php" method="POST"><button type="submit" name="filterAs" value="V" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium filter">Veg</button></form>

              <form action="index.php" method="POST"><button type="submit" name="filterAs" value="NV" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium  filter">Non Veg</button></form>

              <form action="index.php" method="POST"><button type="submit" name="filterAs" value="MIX" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium filter">Mix</button></form>

              <form action="index.php" method="POST"><button type="submit" name="filterAll" value="All" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium filter">All</button></form>

              <?php
              if (isset($_SESSION['userID'])) {
                echo '<a href="./add.html" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Add</a>';
              } else {
                echo '<a href="./add.html" id="hideme" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Add</a>';
              }
              ?>

            </div>
          </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <!-- <button
              type="button"
              class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
            >
              <span class="sr-only">View notifications</span>
              <svg
                class="h-6 w-6"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                aria-hidden="true"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"
                />
              </svg>
            </button> -->

          <!-- Profile dropdown -->
          <div class="relative ml-3">
            <div>
              <button type="button" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="sr-only">Open user menu</span>
                <!-- <img
                    class="h-8 w-8 rounded-full"
                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                    alt=""
                  /> -->

                <?php
                if (isset($_SESSION['userID'])) {
                  echo '<a href="../php/logout.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Logout</a>';
                } else {
                  echo '<a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Welcome</a>';
                }
                ?>
              </button>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
      <!-- <div class="space-y-1 px-2 pt-2 pb-3"> -->
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <!-- <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page"> -->
          <?php
          if (isset($_SESSION['userID'])) {
            echo '<a href="./userProfile.php" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">'.$_SESSION["username"].'</a>';
                } else {
                  echo '<a href="./signup.html" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Sign Up</a>';
          }?>       

        <form action="index.php" method="POST"><button type="submit" name="filterAs" value="V" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium filter">Veg</button></form>

        <form action="index.php" method="POST"><button type="submit" name="filterAs" value="NV" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium  filter">Non Veg</button></form>

        <form action="index.php" method="POST"><button type="submit" name="filterAs" value="MIX" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium filter">Mix</button></form>

        <form action="index.php" method="POST"><button type="submit" name="filterAll" value="All" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium filter">All</button></form>

        <?php
              if (isset($_SESSION['userID'])) {
                echo '<a href="./add.html" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Add</a>';
              } else {
                echo '<a href="./add.html" id="hideme" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Add</a>';
              }
              ?>

      </div>
    </div>
  </nav>

  <!-- #############  Notification Area ########### -->
  <span id="notice">
    <ol id="notice_ol" type="1">
        <h3>Notifications</h3>
          <li><p>Review and rating system comming soon.</p></li>
          <li><p>More filtering options will be available soon.</p></li>
          <li><p>Menu of each restaurant will be shown (Update comming soon).</p></li>
    </ol>
  </span>

  <!-- #############  HEADER VIEW ########### -->
  <div class="headerview">
    <div class="aboutintro">
      <p class="aboutintroP">Welcome to <strong>resto</strong>, your one-stop destination for discovering and exploring the best restaurants in town. Our platform showcases a diverse range of dining options, each with its unique menu, atmosphere, and style. Whether you're in the mood for a quick bite, a romantic dinner, or a family-friendly outing, we've got you covered. Browse through our restaurant profiles and find your perfect match. Once you've made your choice, simply register to enjoy seamless and convenient ordering and payment. Join us today and discover a world of flavors at your fingertips.</p>
    </div>
  </div>

  <!-- ############  list of products  ############ -->
  <section class="main m-3">
    <div class="items_list">

      <?php
      require '../php/database_con.php';
      require '../php/filtering.php';
      
      if ($resultCheck > 0) {
        for ($i = 0; $i <= $resultCheck; $i++) {
          if ($row = mysqli_fetch_assoc($result)) {
            if ($row['typeofresto'] == 'V') {
              $typeresto = "Veg";
            } else if ($row['typeofresto'] == 'NV') {
              $typeresto = "Non-Veg";
            } else if ($row['typeofresto'] == 'MIX') {
              $typeresto = "Both veg and non-veg";
            } else {
              $typeresto = "no idea";
            }
            if (!(isset($row['imageurl']))){
              $imageurl = "../imgs/demo.jpg"; 
            }else{
              $imageurl = $row['imageurl'];
            }
            echo '<div class="boxy p-1 product" data-type=' . $row["typeofresto"] . '>
                  <div class="img-info image-holder">
      
           <img class="restaurent-img" src="' . $imageurl . '" alt="' . $row["restoName"] . '">
      
          <div class="overlayer">
        <div class="type-res type-res"><span title=' . $typeresto . '>' . $row["typeofresto"] . '</span></div>
      </div>
      </div>
      <div class="other-info m-2 ml-4">
        <div class="facilities">
          <div class="contents"><p>' . $row["restoName"] . '</p></div>
          <div class="contents"><strong> &#8377;' . $row["lowestprice"] . ' - &#8377;' . $row["highestprice"] . '</strong></div>
          <div class="contents"><strong> &#128337;	' . $row["OpenTime"] . ' - ' . $row["closeTime"] . '</strong></div>
          <div class="contents"><strong> &#9990;' . $row["contact"] . '</strong></div><br>
          <div class="contents">
          &#9947; ' . $row['restolocation'] . '</em></i>
          </div>
        </div>
        <div class="register">'?>
        <?php 
        if (isset($_SESSION['userID'])){
          echo '<form class="mt-2" action="../php/save.php" method="get">
            <button type="submit" name="register" value=' . $row["restoName"] . ' class="register-btn p-1 w-100">Register</button>
          </form>
          </div>
      </div>
    </div>';
        }else{
          echo '<form class="mt-2" id = "hideme" action="../php/save.php" method="get">
            <button type="submit" name="register" value=' . $row["restoName"] . ' class="register-btn p-1 w-100">Register</button>
          </form>
          </div>
      </div>
    </div>';
        }
          } else {
            break;
          }
        }
      } else {
        echo '<h3> Sorry No restaurants found</h3>';
      }
      ?>

    </div>
  </section>

  <!-- footer -->
  <footer>
    <details class="pe-3 p-2">
      <summary><strong>About : </strong></summary>
      <p>
        This platform provides users to add a new restaurent or reserve a
        restaurant booking out of the availabe restaurants.<br />The team is
        working hard every day to make it even more better, each time user
        visits the page.
        We will soon add  <strong>reviews</strong> and <strong>rating</strong> system to allow our users to register for best quality restaurants.
      </p>
    </details>

    <div class="footer-data">

      <div class="contact">
        <h3>Help</h3>
        <form action="../php/emailHandel.php" method="post">
          <input type="text" name="name" placeholder="Full Name" required /><br />
          <input type="email" name="email" placeholder="Email Id" required /><br />
          <input type="text" name="issue" placeholder="Issue (in short)" required /><br />
          <button type="submit" name="helpline">Submit</button>
        </form>
      </div>

      <div class="help">
        <h3>Contact Us</h3>
        <div class="help-info" style="align-items: start">
          <span><strong>Name : </strong> <em>Nikhil Kumar</em></span>
          <span><strong>Email Id : </strong> <em>list.append17@gmail.com</em></span>
          <span><strong>Mobile No. : </strong> <em>1234567890</em></span>
        </div>
      </div>

      <div class="feedback">
        <h3>FeedBack</h3>
        <form action="../php/emailHandel.php" method="post">
          <input type="text" name="name" placeholder="Full Name" required /><br />
          <input type="email" name="email" placeholder="Email Id" required /><br />
          <textarea name="feedback" id="feed" cols="20" rows="10" placeholder="Feedback is the best gift a user can give to a company :)" required></textarea><br />
          <button type="submit" name="feedback">Submit</button>
        </form>
      </div>
    </div>
  </footer>

</body>
</html>