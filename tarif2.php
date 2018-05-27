<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <title>Downtown Paradise</title>

        <style>
        body{   
            font-family : sans-serif;
            background-image: url(backpic.jpg);
            background-size:cover;
            background-attachment:fixed;

        }  

        table,th,td
        { 
            border: 1px -solid black;
            border-collapse:collapse;
            opacity:0.95;
        } 

        th,td{
            padding:10px;
            text-align:center;
        }
        th{
            background-color:#a70000;
            color:white;
        }

        tr:nth-child(even)
        {
            background-color:#e8e8e8;
        }

        tr:nth-child(odd)
        {
            background-color:white;
        }

        </style>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">Downtown Paradise</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

                        <li><a href="login2.php"><span class="glyphicon glyphicon-log-in"></span>  Login</a></li>
                        <li><a href="location.php"><span class="glyphicon glyphicon-map-marker"></span> Location</a></li>
                        <li><a href="accomodation.php"><span class="glyphicon glyphicon-home"></span>  Accomodation</a></li>                        
                        <li><a href="restaurant.php"><span class="glyphicon glyphicon-cutlery"></span>  Restaurant</a></li>
                        <li><a href="tarif2.php"><span class="glyphicon glyphicon-info-sign"></span>  Tariff </a></li>                                                

                        <li><a href="aboutus.php"><span class="glyphicon glyphicon-phone-alt"></span>  About us</a></li>


                    </ul>
                </div>
            </div>
            </div>
                
                   
                        <div class="container">
                        <center>
                          <table  align="center" >
                            <tbody>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              <tr>
                              <th>ROOM TYPE</th>
                              <th>SINGLE</th>
                              <th>DOUBLE</th>
                              <th>EXTRA PERSON</th>
                              </tr>
                              <tr><td>PRIVILEGE FLOOR</td><td></td><td></td><td></td></tr>
                              <tr><td>Suite</td><td>8000</td><td>8000</td><td>900</td></tr>
                              <tr><td>ExecDeluxe</td><td>4000</td><td>4500</td><td>700</td></tr>
                              <tr><td>Executive Room</td><td>3600</td><td>4000</td><td>700</td></tr>
                              <tr><td>EXECUTIVE FLOOR</td><td></td><td></td><td></td</tr>
                              <tr><td>Exec Deluxe</td><td>3700</td><td>4200</td><td>600</td></tr>
                              <tr><td>Executive Room</td><td>3400</td><td>3800</td><td>600</td></tr>
                              <tr><td>STANDARD FLOOR</td><td></td><td></td><td></td</tr>
                              <tr><td>Standard Deluxe</td><td>3200</td><td>3600</td><td>600</td></tr>
                              <tr><td>Standard Room</td><td>2200</td><td>2500</td><td>600</td></tr>
                              
                            </tbody>
                              
                            </tbody>
                          </table>
                          </center> 
                        </div>
                    
                
        </div>
    </body>
    <footer>
        <div class="container-fluid">
            <center>
                <p>Contact Us:+919000000000</p>
            </center>
        </div>
    </footer>
</html>
