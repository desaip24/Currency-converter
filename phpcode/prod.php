<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 18px;
  font-size:18px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #e9fcc0;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #d4f57f;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}


/* Create two columns/boxes that floats next to each other*/ 
nav {

  float: left;
  width: 16%;
  height: 1335px; /* only for demonstration, should be removed*/ 
  background: #d0f7d1;
  padding: 20px;
}

/* Style the list inside the menu*/ 
nav ul 
{
  list-style-type: none;
  padding: ;
}


* {
  box-sizing: border-box;
}

/* Photo Hover css*/ 
 .zoomA {
        width: 280px;
        height: auto;
        transition-duration: 1s;
        transition-timing-function: ease;
      }
      .zoomA:hover {
        transform: scale(1.1);
      }


           .button {
               /* background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 18px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
              }
              .button3 {background-color: #3e8e41;}


 
</style>


</head>
<body bgcolor="#3e8e41">

<?php
echo "<center><h1>Product</h1></center><br><hr><br><br><br>";
echo "<section>
  <nav>
            <div class='dropdown'>
            <button class='dropbtn' >Product Companey</button>
            <div class='dropdown-content'>
            <a href='#'>Apple</a>
            <a href='#'><option>Samsung</option></a>
            <a href='#'><option>Xiaomi </option></a>
            <a href='#'><option>Mi </option></a>
            <a href='#'><option>Lenovo </option></a>
            <a href='#'><option>HUAWEI </option></a>
            <a href='#'><option>GOOGLE </option> </a>
            <a href='#'><option>One Plus</option></a>
            <a href='#'><option> NOKIA  </option></a>
              
           </div>
           </div>         
        <br>
        <br>   
        <br>

            <div class='dropdown'>
            <button class='dropbtn'>Product Type</button>
            <div class='dropdown-content'>
          
            <a href='#'><option>Phone</option></a>
            <a href='#'><option>Accessories</option></a>
            </div>
            </div>

 <br>
 <br>
 <br>

            <div>
            <div>
           
           <button class='button button3'input type='submit' name='co' value='submit' >Contact</button><br><br><br>
           
            </div>
            </div>
           

            <div class='dropdown'>
            <button class='dropbtn'>About Us</button>
            <div class='dropdown-content'>
            <a href='Apple.html'>Apple</a>

            <a href='Samsung.html'><option>Samsung</option></a>

            <a href='Xiaomi.html'><option>Xiaomi </option></a>

            <a href='mi.html'><option>Mi </option></a>

            <a href='#'><option>Lenovo </option></a>

            <a href='#'><option>HUAWEI </option></a>

            <a href='#'><option>GOOGLE </option> </a>

            <a href='#'><option>One Plus</option></a>

            <a href='#'><option> NOKIA  </option></a>
           
            </div>
            </div><br><br><br>
    <a href='log.php'>
           <button class='button button3'input type='submit' name='lo' value='logout' >Log out</button></a>
 
</section>";
 
echo "

<table>

  <tr>
      <td><img src='A6.jpg' class='zoomA'/ hspace=13 vspace=15></td>
      <td><img src='A6S.jpg' class='zoomA'/ hspace=13 vspace=15></td>
      <td><img src='A6SP.jpg' class='zoomA'/ hspace=13 vspace=15></td>
      <td><img src='APP7.webp' class='zoomA'/ hspace=13 vspace=15></td>

  </tr> <br>

  <tr>
      
      <td><img src='APP7PLUSH.jpg' class='zoomA'/ hspace=13 vspace=15></td>
      <td><img src='A8.jpg' class='zoomA'/ hspace=13 vspace=15></td>
      <td><img src='A8P.jpg' class='zoomA'/ hspace=13 vspace=15></td>
      <td><img src='AX.jpg' class='zoomA'/ hspace=13 vspace=15></td>

  </tr><br>    
    
    <tr>
      
      <td><img src='AXS.jpg' class='zoomA'/ hspace=13 vspace=15></td>
      <td><img src='AXSM.jpg' class='zoomA'/ hspace=13 vspace=15></td>
      <td><img src='IXR.jpg' class='zoomA'/ hspace=13 vspace=15></td>
      <td><img src='A11.jpg' class='zoomA'/ hspace=13 vspace=15></td>

  </tr> <br>

  <tr>
      
  </tr> <br>

  <tr>
      <td><img src='A11P.jpg' class='zoomA'/ hspace=13 vspace=15></td>
      <td><img src='A11PM.jpg' class='zoomA'/ hspace=13 vspace=15></td>
      <td><img src='A.jpg' class='zoomA'/ hspace=13 vspace=15></td>
  </tr> <br>


   </table>";

?>

</body>
</html>

