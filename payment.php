<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
    function preventBack() {
        window.history.forward();
    }

    setTimeout("preventBack()", 0);
    window.onunload = function() {
        null
    };
    </script>
</head>
<body>


<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus, 
input:-webkit-autofill:active  {
    transition: background-color 5000s ease-in-out 0s;
    -webkit-text-fill-color: rgb(255, 255, 255) !important;
}
body{
    font-family: 'Poppins', sans-serif;
}
::placeholder {
    color: rgb(221, 202, 202); /* Firefox  chrome and other*/
    opacity: 0.8;  
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
    color: rgb(218, 206, 206);
    opacity: 0.8;
}
h2{
    text-align:left;
}
.logo{
    max-width: 12%;
    margin-top: 0.2rem;
    margin-left: 0rem;
}
.main{
    background: linear-gradient(-75deg, #48bead 60%, transparent 100%), url(images1/third\ \(1\).jpg);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 110vh;
    -webkit-background-size: cover;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
    z-index: -1;
}
.main-content{
    background: cover;
    padding: 1rem 3rem;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.main-content h2{
    font-size: 3rem;
    color:#ffffff

}
.row {
    display: grid;
    margin: 0 -10px;
    grid-template-columns: repeat(2, 1fr);
    grid-column-gap: 10rem;

}


.payment {
    -ms-flex: 75%; 
    flex: 75%;
}

.payment-col,.payment {
    padding: 0 16px;
}
.payment-col h3{
    margin-top: 15px;
    margin-bottom: 20px;
    color: #ffffff;
}
.payment-col {
    margin-top: 15px;
    -ms-flex: 50%; 
    flex: 50%;
    width: 130%;
}

input[type=text], input[type=email], input[type=date] {
    border: none;
    border-bottom: 1px solid #ffffff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #ffffff;
    font-size: 16px;
    width: 100%;
}
label {
    margin-bottom: 8px;
    margin-top: 12px;
    display: block;
    font-size: 1rem;
    color: #ffffff;
}
.icon-container {
    padding: 4px 0;
    font-size: 28px;
}
.icon-container .fa{
    transition: 0.7s;
    cursor: pointer;
}
.icon-container .fa:hover{
    transform: translateY(-7px);
}
.btn {
    background-color: #cad3d6;
    color: #0CBABA;
    padding: 12px;
    border: none;
    width: 100%;
    border-radius: 7px;
    cursor: pointer;
    font-size: 17px;
    box-shadow: 0 0 1rem 0 rgba(99, 123, 150, 0.329);
    margin-top: 15px;
    transition: 0.8s;
}

.btn:hover {
    background-color: #0CBABA;
    color: white;
}
.button{
    margin-left: 20%;
}
a {
    color: #2196F3;
}

hr {
    border: 1px solid lightgrey;
}

span.price {
    float: right;
    color: grey;
}

@media (max-width: 860px) {
    .logo{
        max-width: 25%;
    }
    .row {
        grid-template-columns: repeat(1, 1fr);
    }
    .main{
        height: 260vh;
    }
    .main-content{
        left: 40%;
    }
    .button{
        position: absolute;
        left: 30%;
    }
}
</style>
    <div class="main">
        <a href="1%20homepage.php"><img src="images/logo2.png" class="logo"></a>
        <div class="main-content">
            <h2>Payment Details</h2>
        <div class="row">
            <div class="payment">
                <div class="container">
                    <form id="validate" action="paymentdb.php" method="POST">
                        <div class="row">
                            <div class="payment-col">
                                <h3>Billing Address</h3>
                                <label for="fullname"><i class="fa fa-user"></i> Full Name</label>
                                <input type="text" id="fullname" name="fullname" placeholder="Enter full name" required>
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
                                <label for="address"><i class="fa fa-address-card-o"></i> Address</label>
                                <input type="text" id="address" name="aadress" placeholder="12th Street Kathmandu, Nepal" required>
                                <label for="city"><i class="fa fa-institution"></i> City</label>
                                <input type="text" id="city" name="city" placeholder="Enter City" required>

                                <div class="row">
                                    <div class="payment-col">
                                        <label for="sstate">State</label>
                                        <input type="text" id="sstate" name="sstate" placeholder="Enter State" required>
                                    </div>
                                    <div class="payment-col">
                                        <label for="zip">Zip</label>
                                        <input type="text" id="zip" name="zip" maxlength="5" placeholder="12000" required>
                                    </div>
                                </div>
                            </div>

                            <div class="payment-col">
                                <h3>Payment</h3>
                                <label for="fname">Accepted Cards</label>
                                <div class="icon-container">
                                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                                </div>

                                <label for="cname">Name on Card</label>
                                <input type="text" id="cname" name="cname" placeholder="Enter Name"required>
                                <label for="ccnum">Credit card number</label>
                                <input type="text" id="ccnum" name="ccnum" maxlength="19" placeholder="1111-2222-3333-4444"required>
                                <label for="expmonth">Expire Month</label>
                                <input type="text" id="expmonth" name="expmonth" placeholder="September"required>
                                <div class="row">
                                    <div class="payment-col">
                                        <label for="expyear">Expire Year</label>
                                        <input type="date" id="expyear" name="expyear" placeholder="2021"required>
                                    </div>
                                    <div class="payment-col">
                                        <label for="cvv">CVV</label>
                                        <input type="text" id="cvv" name="cvv" maxlength="3" placeholder="352"required>
                                    </div>
                                    <input type="hidden" name="customerid">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="button">
                            <input type="submit" name="submit" value="Confirm" class="btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

    </div>

</body>
</html>