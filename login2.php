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

                    </ul>
                </div>
            </div>  
        </div>
        <div class="container">
    
            <div class="row row_style">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <div class="panel" panel-primary>
                        <div class="panel-heading">
                            <h4>panel heading</h4>
                        </div>
                        <div class="panel-body">
                            <div class="text-warning">
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                                <h2>LOGIN</h2><p>&nbsp;</p>
                            </div>
                            <form action="logindb.php" method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email" required="true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                                </div><p>&nbsp;</p>
                                <button type="submit" name="submit" class="btn btn-primary "value ="submit">Submit</button>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                        
                                <div class="panel-footer">Don't have an account?<a href="signup.php">Sign Up</a></div>
                                
                            </form>
                        </div>
                        

                    </div>
                </div>
                 
            </div>
        </div>
    </body>
    <footer>
        <div class="container">
            <center>
                <p>Contact Us:+919000000000</p>
            </center>
        </div>
    </footer>
</html>
