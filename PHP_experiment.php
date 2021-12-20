<!DOCTYPE html>
<html>
    <head>
        <title>Lance's First Webpage</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
    <div id="container">
        <div id="header">
            <h1>Yanan (Lance) Lu</h1>
        </div>
        <div id="content">
            <div id="main">
                <p>Hello world, this is my first webpage. <br/> I hope you like it :)</p>
                <p><span class="fact">Some facts about me: </span></p>
                <ul>
                    <li>I am 21 years old.</li>
                    <li>I am studying <span class="major">Data Science</span> and <span class="major">Molecular and Cell Biology</span>.</li>
                    <li> <a class="resume" href="https://www.linkedin.com/in/yanan-lance-lu/"> My Linkedin Page. </a></li>
                </ul>
            </div>
            <div id="my_photo">
                <img src='sitting_me.jpg' alt="Me" style="width:210px;height=350px;"/>
            </div>

            <div id="interact">
            <form action="process.php" method="post">
                What is your name? <input name="entered_name" type="text">
                <input type="submit">
            </form>
            </div>

        </div>

        <hr/>
        <div id="thank">
            <?php
                // $hello = "<PHP ";
                // $LoggedIn = true;
                // $visitor = array("Simon", "Bryant", "Nick");
                // echo $hello . "for the first time.>";
                // if ($LoggedIn == true) {
                //     echo "<p> Special thanks to ";
                //     foreach($visitor as $person) {
                //         echo $person . ' ';
                //     }
                //     echo "!</p>";
                // } else {
                //     echo "<br/> Please log in.</p>";
                //     print_r($visitor[1]);
                // }
                // echo "Thank you!"
            ?>
        </div>
        <div id="footer">
            <h4 class="copyright">Copyright &copy; 2021 Lance Lu <br/> All rights reserved.</h4>
        </div>
    </div>    
    </body>
</html>