<?php
include 'session.php';
?>

<html>
    <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <title>Downtown Paradise</title>
        <style>
        #date{
        
            border: 1px solid powderblue;
            margin: 10px;

        }</style>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a href="#" class="navbar-brand">Lifesyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

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
                                <h2>Check Rooms Availability</h2><p>&nbsp;</p>
                            </div>
                            <form action="reservationdb.php" method="post">
                                <div class="form-group">
                                Check in Date<input id="date" type="date"  required="true" name="cindate">
                                <div class="form-group">
                                Check out Date<input id="date" type="date" name="coutdate" >

                                </div>
                                <div class="form-group">
                                Room type <select name="roomtype">
                                <option value="suite">Suite</option>
                                <option value="standard">Standard</option>
                                <option value="deluxe">Deluxe</option>
                                <option value="superdeluxe">Superdeluxe</option>
                                </select>
                                <br>
                                <p>&nbsp;</p>
                                <div class="form-group">
                                No of Rooms <select name="roomcnt">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                </select>
                                <br>
                                </div><p>&nbsp;</p>
                                <button type="submit" name="submit" class="btn btn-primary" value="submit">BOOK</button>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                        
                               
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
?>
