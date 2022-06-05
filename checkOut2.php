<!-- Item Format 
    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1978060/harnais.png' alt=''>
<div class="info">
    <h4>Julius K9 Powerharness, Mini/M</h4>
    <p class="quantity">Quantity: 1</p>
    <p class="price">31.95€</p>
</div> .info -->
<html>
    <head>
        <title>Check Out</title>
        <link rel="stylesheet" href="Checkoutstyle.css">
    </head>
    <body>
        <div id="wrapper">
            <div class="container1">
                <div class="order">
                    <h2>Your order summary</h2>
                    <div class="item">

                    </div> <!-- .item -->
                    <hr>
                    <h3 class="total">TOTAL: 0</h3>
                </div> <!-- .order -->
            </div> <!-- .container1     -->
            
            <div class="container2">
                <div class="checkout">
                    <p><i class="fas fa-check-circle"></i>Checkout</p>
                    <p><i class="fas fa-check-circle"></i>Confirmation</p>
                    
                    <div class="payment">
                        <div class="content">
                            <div class="infos">
                                <div class="method">
                                    <h2>Choose a payment method</h2>
                                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1978060/visa.png' alt='' class="visa">
                                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1978060/mastercard.png' alt='' class="mastercard">
                                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1978060/paypal.png' alt='' class="paypal">
                                </div> <!-- .method -->
                                <div class="cardNumber">
                                    <p class="title">Credit card number</p><br>
                                    <input type="text" class="number">
                                    <input type="text" class="number">
                                    <input type="text" class="number">
                                    <input type="text" class="number">							
                                </div> <!-- .cardNumber -->
                                <div class="cardHolderName">
                                    <p class="title">Card holder name</p>
                                    <input type="text">
                                </div> <!-- cardHolderName -->
                                <div class="expiration">
                                    <p class="title">Expiration date</p>
                                    <select>
                                        <option>Month</option>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                    
                                    <select>
                                        <option>Year</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                        <option>2025</option>
                                        <option>2026</option>
                                        <option>2027</option>
                                    </select>
                                </div> <!-- .expiration -->
                                <div class="security">
                                    <p class="title">Security</p>
                                    <input type="text">
                                </div><!-- .security -->
                                <button class="btnCheckout">Checkout</button>
                            </div> <!-- .infos -->
                        </div> <!-- .content -->
                    </div> <!-- .payment -->
                </div> <!-- .checkout -->
            </div> <!-- .container2 -->
        </div> <!-- #wrapper -->
    </body>
</html>
