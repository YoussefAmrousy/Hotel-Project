<!DOCTYPE html>
<html lang="en">
<?php include 'navbar.php'; ?>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <title>GRND Hotel - Contact Us</title>
    <style>
        {  
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
p{
    margin:10px 0;
}
.container{
    margin:auto;
    max-width: 1100px;
    overflow:auto;
    padding:0 20px;
}
.text-primary{
    color:#f7c08a;
    font-family: "Copperplate Gothic Light";
}
.btn{
    display:inline-block;
    font-size:18px;
    color:#fff;
    background:#333;
    padding:13px 20px;
    border:none;
    cursor:pointer;
}

.btn:hover{
    background:#f7c08a;
    color:#333
}

  .bg-dark {
    background: #333;
    color: #fff;
  }
.box{
    float:left;
    widows: 33.5%;
    padding:60px;
    text-align:center;
}

.box i{
    margin-bottom:10px;
}
#contact-form .form-group{
    mairgin-bottom:20px;
}
#contact-form label{
    display:block;
    margin-bottom:5px;
}

#contact-form input, #contact-form textarea {
    width:100%;
    padding:10px;
    border:1px #ddd slod;
}

#contact-form textarea{
    height:200px;
}
#contact-form input:focus, #contact-form textarea:focus {
    outline:none;
    border-color:#f7c08a
}
</style>
</head>
<body>

     <section id="contact-form" class="py-3">
         <div class="container">
            <h1 class="l-heading"><span class="text-primary">Contact </span> Us</h1>
            <p>Please fill in all spots so you can contact us</p>
            <form method="post">
                <div class="form-group">
                   <laber for="name">Name</laber>
                   <input type="text" name="Name">
                </div>
                <div class="form-group">
                   <laber for="email">Email</laber>
                   <input type="email" name="email">
                </div>
                <div class="form-group">
                   <laber for="message">Message</laber>
                   <textarea type="email" name="message"></textarea>
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
         </div>
     </section>
     <section id="contact-info" class="bg-dark">
         <div class="container">
            <div class="box ">
                <i class="fas fa-hotel fa-3x"></i>
                   <h3> Location</h3>
                   <p>Hurghada, Red Sea</p>
               </div>
               <div class="box">
                <i class="fas fa-phone fa-3x"></i>
                <h3>Telephone Number</h3>
                <p>(+02)-22-555-444</p>
               </div>
               <div class="box ">
                <i class="fas fa-envelope fa-3x"></i>
                <h3>Email Address</h3>
                <p>GRNDHOTEL@gmail.com</p>
               </div>
         </div>

     </section>
 
</body>
</html>