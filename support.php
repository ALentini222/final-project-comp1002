<!DOCTYPE html>
<!--initialization for page-->
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <title>Support | Contact and Support</title>
            <meta name="author" content="Andreas Lentini" />
            <meta name="description" content="Contact and Support" />
            <link rel="shortcut icon" href="images/favicon.png" type="images/x-icon" />
            <link rel="stylesheet" href="css/support.css" />
        </head>
        <body>
            <header>
                <!--global nav-->
<?php
    include('/home/Andreas1141007/public_html/final-project/includes/global-nav.php');
?>
            <img src="images/logo.png" height="207" width="674" alt="page icon" style="float:left"/>
            </header>
            <main>
                <h1>Contact and Support</h1>
                <!--Email Collection and Comments here-->
                <form>
                    <h2>Contact us</h2>
                    <p><label>First Name:</label> <input name="myEmail" type="text" /></p>
                    <p><label>Email Address:</label> <input style="cursor: pointer;" name="myEmail" type="text" /></p>
                    <p><label>Message:</label>  <textarea name="message"></textarea> </p>
                    <p><input type="submit" value="Send" /></p>
                </form>
            </main>
            <footer>
            <p><small>© Frogger 1981.</small></p>
            </footer>
        </body>
    </html>