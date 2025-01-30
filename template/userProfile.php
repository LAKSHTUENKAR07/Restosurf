<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imgs/restaurant-svgrepo-com.svg" type="image/x-icon">

    <link rel="stylesheet" href="../styles/style_2.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>User Profile</title>
    <style>
        body {
            background: rgb(31 41 55);
            padding: 5%;
            margin-left: 10%;
            margin-right: 10%;
        }

        img {
            margin: auto;
        }

        form {
            position: relative;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #ddd;
            margin-bottom: 5%;
        }


        input,
        textarea {
            outline: none;
            font-family: 'Times New Roman', Times, serif;
            font-weight: 400;
            position: relative;
            width: 90%;
            margin: auto;
            margin: 1%;
            padding: 2%;
            border-radius: 10px;
            color: aquamarine;
            background: rgba(128, 128, 128, 0.753);
            letter-spacing: 2px;
            border: none;
        }

        input:active,
        input:hover,
        textarea:hover {
            background-color: rgba(0, 0, 0, 0.300);
        }

        .nameofusr {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 100%;
            align-items: center;
        }

        .nameofusr input {
            width: 40%;
            min-width: 250px;
        }


        .typeofres {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin-top: 5%;
        }

        .answer {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        .answer label {
            width: 100%;
            word-wrap: normal;
            padding: 1%;
            margin: 2%;
        }

        span {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
            min-width: 25%;
        }

        button {
            background: rgba(220, 20, 60, 0.808);
            width: 50%;
            margin: auto;
            padding: 1%;
            color: #ddd;
            margin-top: 5%;
            border-radius: 10px;
            border: none;
            font-weight: 600;
            box-sizing: border-box;
            letter-spacing: 2px;
            /* border: transparent 5px groove; */
            transition: all 0.5s ease-out;
            padding: 2%;
        }

        strong {
            color: yellow;
        }

        .accept {
            width: 100%;
            display: flex;
            justify-content: space-around;
            margin-top: 5%;
        }

        .accept label {
            width: 100%;
            letter-spacing: 2px;
        }

        a {
            color: aqua;
        }

        ::placeholder {
            color: #ddd;
        }

        button:hover {
            background: rgba(20, 220, 137, 0.200);
            letter-spacing: 3px;
            /* border: rgba(220, 20, 60, 0.808) 5px groove; */
        }

        #passwd {
            color: red;
        }

        .errorshow {
            color: red;
            margin-top: 1%;
            margin-bottom: 3%;
            text-align: center;
            padding: 1%;
            word-spacing: 3px;
        }

        pre {
            color: red;
            text-align: center;
            width: auto;
            padding: 1%;
        }

        .register{
            color:greenyellow;
            text-align: center;
            margin:auto;
            width:fit-content;
            margin-bottom:3%;
        }

        .menu{
            margin-bottom: 20px;
        }
        .close{
            width:fit-content;
            padding:1%;
            background-color: transparent;
            margin-left:10px;
            font-size:100%;
            color:red;
        }
        .alert{
            height: fit-content;
            padding-top:0%;
            padding:1%;
            text-align: center;
        }

        img{
            transition: all 0.3s ease-out;
        }
        img:hover{
            filter:hue-rotate(45deg);
        }

    </style>
</head>

<body>
    <div class="menu">
        <a href="./index.php"><img class="h-8 w-8 rounded-full" height=60px width=60px src="../imgs/home-page-svgrepo-com.svg" alt="user profile" /></a>
    <img class="h-8 w-8 rounded-full profile" height=100px width=100px src="../imgs/user-profile-person-svgrepo-com.svg" alt="user profile" />
    </div>

      <!-- receiving errors from backend -->
  <?php
  if (isset($_GET['msg'])) {
    $error = $_GET['msg'];
    if (strlen($error) > 1) {
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">' . $error . '  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
    }
  }
  ?>

    <div class="register"><strong>Registrations :</strong>
        <?php if (isset($_SESSION['reservations'])) {
            echo $_SESSION['reservations'];
        } else {
            echo "no registration found";
        } ?>
        </div>
    <form action="/restofile/php/userupdate.php" method="post">
        <div class="nameofusr">
            <input type="text" name="FirstName" class="tempo" placeholder="First Name" value="<?php echo $_SESSION['FirstName'] ?>" disabled>

            <input type="text" name="LastName" class="tempo" placeholder="Last Name" value="<?php echo $_SESSION['LastName'] ?>" disabled>
        </div><br>

        <input type="text" name="username" id="usrname" class="tempo" value="<?php echo $_SESSION['username']; ?>" placeholder="Username" disabled>

        <input type="tel" name="contactno" id="contact" value="<?php echo $_SESSION['contact']; ?>" placeholder="contact no. with country code" disabled>

        <input type="email" name="EmailId" value="<?php echo $_SESSION['email']; ?>" placeholder="Eamil Id" disabled><br>

        <input type="text" name="address" id="address" value="<?php echo $_SESSION['address'];?>" placeholder="address"><br>

       

        <input type="text" name="description" d="description" class="description" value="<?php echo $_SESSION['description']; ?>" placeholder="Small description about yourself."></input><br>

        </div>
        <button type="submit" name="update">Save</button>
    </form>
</body>

</html>