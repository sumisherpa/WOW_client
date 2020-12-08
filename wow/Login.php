<?php

session_start();

 

 

              require_once('dbconfig/2.php');

 

 

              if($_SERVER['REQUEST_METHOD'] == "POST")

              {

                           //Something was posted

                           $email = $_POST['email'];

                           $password = $_POST['password'];

 

                           if(!empty($email) && !empty($password))

                           {

                                        

                           $enc_password = md5($password);

                           //save to database

                           //$custID = (random_num(20);

                           $sql = "SELECT * FROM users WHERE  email = '$email' AND password = '$enc_password'";

                           $result = mysqli_query($conn, $sql);

                           $num_rows = mysqli_num_rows($result);

             

                          

                                         if ($num_rows == 1) {

                                                                     echo "New record created successfully !";

                                                                     // add redirect

                                                                     header("location: index.");

                                         } else {

                                                                     echo "login failed :(";

                                         }

                                         mysqli_close($conn);                   

                           }  

              }else{

                           echo "Please enter some valid information!";

              }

 

 

?>

 

<!doctype html>

<html>

<head>

              <meta charset="utf-8">

              <title>WashonWheelsnyc: Login</title>

              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"

              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

              <link rel="stylesheet" href="wow.css">

              <link href="https://fonts.googleapis.com/css?family=Maven+Pro|Poiret+One|Raleway|Roboto" rel="stylesheet">

              <link rel="shortcut icon" type="image/png" href="images/logo2.png"/>

</head>

 

<body>

     <div class="home-nav">

          <a class="navbar-brand" href="index.html">

            <img src="images/logo.png" alt="logo">

          </a>

     </div>

       

     <div id="navigation">

          <ul class="nav justify-content-center">

               <li class="nav-item">

                    <a class="nav-link active" href="index.html">Home</a>

               </li>

               <li class="nav-item">

                    <a class="nav-link" href="aboutus.html">About Us</a>

               </li>

               <li class="nav-item">

                    <a class="nav-link" href="contact.html">Contact Us</a>

               </li>

         </ul>

     </div>

     <hr>

     <div id="about-div" >

        <h1 >Sign in</h1><br>

        <!--Login form -->

        <form action="login.php" method="POST">

            <div id="signIn">

                <label for="email">Email address:</label>

                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>

            </div>

            <div id="signIn">

                <label for="Password">Password:</label>

                <input type="Password" name="password" id="password" class="form-control"  value="" required>

            </div><br>

            <button type="submit" class="btn btn-primary" value="Sign in">Sign in</button>

        </form>

        <br>

          <p>Don't have an account?</p>

          <p>No worries, you can <a href="registertest.php" ><u>Register here</u></a>.</p>

     </div>

    

 

     <footer>Copyright &copy; 2020</footer>

 

 

 

 

 

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"

             integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"

             integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>