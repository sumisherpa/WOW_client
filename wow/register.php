<!DOCTYPE html>

 

<html>

 

<head>

 

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"

              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Maven+Pro|Poiret+One|Raleway|Roboto" rel="stylesheet">

<link rel="stylesheet" href="wow.css">

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

                  <a class="nav-link" href="index.html">Home</a>

             </li>

             <li class="nav-item">

                  <a class="nav-link" href="locations.html">About Us</a>

             </li>

             <li class="nav-item">

                  <a class="nav-link" href="contact.html">Contact Us</a>

             </li>

       </ul>

   </div>

   <hr/>

   <br/>

    <h1>Responsive Checkout Form</h1>

   <br/>

<div class="row">

 

  <div class="col-75">

 

    <div class="container">

 

      <form action="/action_page.php">

 

        <div class="row">

 

          <div class="col-50">

 

            <h3>Billing Address</h3>

 

            <label for="fname"><i class="fa fa-user"></i> Full Name</label>

 

            <input type="text" id="fname" name="firstname" placeholder="D. Nicius">

 

            <label for="email"><i class="fa fa-envelope"></i> Email</label>

 

            <input type="text" id="email" name="email" placeholder="dnicius@outlook.com">

 

            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>

 

            <input type="text" id="adr" name="address" placeholder="999 Blvd">

 

            <label for="city"><i class="fa fa-institution"></i> City</label>

 

            <input type="text" id="city" name="city" placeholder="New York">

 

 

            <div class="row">

 

              <div class="col-50">

 

                <label for="state">State</label>

 

                <input type="text" id="state" name="state" placeholder="NY">

 

              </div>

 

              <div class="col-50">

 

                <label for="zip">Zip</label>

 

                <input type="text" id="zip" name="zip" placeholder="10001">

 

              </div>

 

            </div>

 

          </div>

 

 

          <div class="col-50">

 

            <h3>Payment</h3>

 

            <label for="fname">Accepted Cards</label>

 

            <div class="icon-container">

 

              <i class="fa fa-cc-visa" style="color:navy;"></i>

 

              <i class="fa fa-cc-amex" style="color:blue;"></i>

 

              <i class="fa fa-cc-mastercard" style="color:red;"></i>

 

              <i class="fa fa-cc-discover" style="color:orange;"></i>

 

            </div>

 

            <label for="cname">Name on Card</label>

 

            <input type="text" id="cname" name="cardname" placeholder="D. Nicius">

 

            <label for="ccnum">Credit card number</label>

 

            <input type="text" id="ccnum" name="cardnumber" placeholder="4111-1111-1111-1111">

 

            <label for="expmonth">Exp Month</label>

 

            <input type="text" id="expmonth" name="expmonth" placeholder="September">

 

            <div class="row">

 

              <div class="col-50">

 

                <label for="expyear">Exp Year</label>

 

                <input type="text" id="expyear" name="expyear" placeholder="2023">

 

              </div>

 

              <div class="col-50">

 

                <label for="cvv">CVV</label>

 

                <input type="text" id="cvv" name="cvv" placeholder="352">

 

              </div>

 

            </div>

 

          </div>

 

        

 

        </div>

 

        <label>

 

          <input type="checkbox" checked="checked" name="sameadr"> Delivery address same as billing

 

        </label>

 

        <button type="submit" value="" class="btn btn-primary">Continue to checkout</button>

 

      </form>

 

    </div>

 

  </div>

 

  <div class="col-25">

 

    <div class="container">

 

      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>

 

      <p><a href="#">Product 1</a> <span class="price">$15</span></p>

 

      <p><a href="#">Product 2</a> <span class="price">$5</span></p>

 

      <p><a href="#">Product 3</a> <span class="price">$8</span></p>

 

      <p><a href="#">Product 4</a> <span class="price">$2</span></p>

 

      <hr>

 

      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>

 

    </div>

 

  </div>

 

</div>

<footer>Copyright &copy; 2020</footer>

 

</body>

 

</html>