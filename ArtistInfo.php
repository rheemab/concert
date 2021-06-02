<!DOCTYPE html>
<html lang="js">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial,sans-serif;
            padding: 10px;
            background: #f1f1f1;
        }

        /* Header/Blog Title */
        .header {
            padding: 30px;
            text-align: center;
            background: white;
        }

        .header h1 {
            font-size: 50px;
        }

        /* Style the top navigation bar */
        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        /* Style the topnav links */
        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 16px 30px;
            text-decoration: none;
        }

        .topnav .search-container {
            float: right;
            vertical-align: top;

        }

        .topnav input[type=text] {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
        }

        .topnav .search-container button {
            float: right;
            padding: 6px 10px;
            margin-top: 8px;
            margin-right: 16px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        .topnav .menu-button button {
            float: left;
            padding: 6px 10px;
            margin-top: 8px;
            margin-left: 16px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        .topnav .menu-button button:hover {
            background: #ccc;
        }

        .topnav .search-container button:hover {
            background: #ccc;
        }

        @media screen and (max-width: 600px) {
            .topnav .search-container {
                float: none;
            }

            .topnav a, .topnav input[type=text], .topnav .search-container button {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }

            .topnav input[type=text] {
                border: 1px solid #ccc;
            }
        }

        /* Change color on hover */
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: absolute;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: #f9f9f9;
            min-width: 140px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #f1f1f1;}


        .dropdown:hover .dropdown-content {display: block;}


        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }

        /* Create two unequal columns that floats next to each other */
        /* Left column */
        .leftcolumn {
            float: left;
            width: 75%;
        }

        /* Right column */
        .rightcolumn {
            float: left;
            width: 25%;
            background-color: #f1f1f1;
            padding-left: 20px;
        }

        /* Fake image */
        .fakeimg {
            background-color: #aaa;
            width: 100%;
            padding: 20px;
        }

        /* Add a card effect for articles */
        .card {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Footer */
        .footer {
            padding: 20px;
            text-align: center;
            background: #ddd;
            margin-top: 20px;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 800px) {
            .leftcolumn, .rightcolumn {
                width: 100%;
                padding: 0;
            }
        }

        /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
        @media screen and (max-width: 400px) {
            .topnav a {
                float: none;
                width: 100%;
            }
        }

        * {box-sizing: border-box;}

        .form-inline {
            vertical-align: top;
            display: flex;
            flex-flow: row wrap;
            align-items: center;
        }

        .form-inline label {
            margin: 5px 10px 5px 0;
        }

        .form-inline input {
            vertical-align: top;
            margin: 5px 10px 5px 0;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
        }

        .form-inline button {
            padding: 10px 20px;
            background-color: #3e8e41;
            color: white;
            cursor: pointer;
        }

        .form-inline button:hover {
            background-color: royalblue;
        }

        @media (max-width: 800px) {
            .form-inline input {
                margin: 10px 0;
            }

            .form-inline {
                flex-direction: column;
                align-items: stretch;
            }
        }

        .login {;color: white;} /* Green */


    </style>
    <title> </title>
</head>
<body>

    <?php
        # // Requires MySQLi php extention to connect. //
        $DebugModeActive = true;

        #Variable declaration OUTPUTS
            $keyArtID = null;
            $strArtName = "[Artist name]";
            $strArtAbout = "[Artist About]";
            #pngArtPfp = -connectfile-;

        #Variable declaration INPUTS
            #n/a

        #SQL code to be run for this page. (Grab outputs)
            $sqlQueries = "";

            # // Requires MySQLi php extention to connect. //

        ##Connecting to SQLi

            #Credentials
            $connServer = "localhost";
            $connUsrNam = "username";
            $connPasWrd = "password";
            $connection = new mysqli($connServer, $connUsrNam, $connPasWrd);

            if ($connection->connect_error) {
                die('Connection error'); 
            }
            # Successful connection

                if ($connection->query($sql) === TRUE) {
                    # sql query ran successfully.
                }
                else {
                    #Something failed: debug v
                    # echo "error:".$connection->error;
                    die('SQL Error');
                }
            #If past this point, SQL and Connection were successful.

        ##SQL Decoding
                #--Required: SQL string format ~
                #Convert to the already assigned variables above.

        #Update page

            #Anywhere this info needs to be altered, just
            #add a <?php ?_> segment, using 'echo' to insert data into the
            #page code
            #ie: <p> Somethings going on in <?php echo $townName; ?_>  </p>

    ?>

    <?php
        #COPY + PASTE ELEMENT!! Paste these anywhere appropriate in the HTML script!
                        #(Can be in the middle of lines or paragraphs, dosn't matter)
            #EXPANDABLE LIST ITEM -------------------
                #Template: Missing HTML code.

            #Array Format: Title, subtext, HyperLink
                        #Get from SQL, Implement alongside decoder.
    $arrayList = array(
        ["title" => "Event1","data" => "Info1","hyper" => "LINK"],
        ["title" => "Event2","data" => "Info2","hyper" => "LINK"]
    );

    foreach($arrayList as &$value)  {
        #HTML CODE FOR CLICKABLE ELEMENT HERE /////////////////
            # $value["title"], $value["data"], $value["hyper"] to get data

            #echo '[code]'
            #ie: "echo '<p>$value["title"] Is coming to a town near you!</p>'"
    }
    unset($value);
    ?>

    <?php 
        #COPY + PASTE ELEMENT!!
            #Text / code. Literally any HTML code you want, including just strings or variables
            #can go here and will be added to the html code
            #ie: "<p>$EventName</p>" will add a paragraph of whatever the event is called.
    echo ""; ?>

<div class="topnav">

    <div class="dropdown" style="float:left;">
        <button class="dropbtn"><i class="fa fa-bars"></i></button>
        <div class="dropdown-content" style="left:0;">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
            <a href="#">Link 4</a>
            <a href="#">Link 5</a>
            <a href="#">Link 6</a>
            <a href="#">Link 7</a>
            <a href="#">Link 8</a>

        </div>
    </div>

    <div class="search-container">

        <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <a style="margin-left: 46px " href="http://localhost:63342/New%20folder%20(2)/home.html?_ijt=3dq6u2ga6r3kntg0d0ddr96fq5">Home</a>
    <a href="#">Past Concerts</a>

    <form class="form-inline" action="/action_page.php">
        <span class="label login" style="margin-left: 12px ">Login:  </span>
        <input type="email" id="email" style="margin-left: 12px "placeholder="Enter username" name="email">
        <input type="password" id="pwd" placeholder="Enter password" name="pswd">
        <button type="submit">Submit</button>
    </form>


</div>

<div class="row">
    <div class="leftcolumn">
        <div class="card">
            <h2>Featuring: <?php echo $strArtName; ?></h2>
            <h5>April 23rd, 2021</h5>
            <p>Team  8.1</p>
            <p1><?php echo $strArtAbout; ?></p1>
		
        <?php ?>
	    
            <div class="fakeimg" style="height:200px;">Image</div>
        </div>

    </div>
    <div class="rightcolumn">
        <div class="card">
            <div class="fakeimg" style="height:100px;">Image</div>
        </div>
        <div class="card">
            <h3>Upcoming concerts</h3>
            <a href="http://localhost:63342/New%20folder%20(2)/band1.html?_ijt=3dq6u2ga6r3kntg0d0ddr96fq5#">Waterparks</a>
            <p></p>
            <a href="https://google.com">Capstan</a>
            <p></p>
            <a href="https://google.com">Cremation Lily</a>
            <p></p>
            <a href="https://google.com">Cold Hart</a>
            <p></p>
            <a href="https://google.com">Horse Head</a>
            <p></p>

        </div>

    </div>
</div>

<div class="footer">
    <h2>Legal info</h2>
</div>

</body>
</html>
