
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>INFO / CS 2300 Section 2</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <style type="text/css">
            html, body {
                margin: 0;
                padding: 0;
            }
            html {
                background-color: #ff4c4c;
            }
            body {
                background-color: white;
                font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
                margin: auto;
                padding: 10px;
                width: 80%;
            }

            #super-bowl-img {
                display: block;
                margin: 0 auto;
            }

            h1, #super-bowl-img-src {
                text-align: center;
            }
            .player-info {
                align-items: center;
                display: flex;
                height: 70px;
            }
            .team-logo {
                height: 70px;
                width: 70px;
            }
            a {
                color: deepskyblue;
            }
            img {
                height: 50%;
                width: 50%;
            }
        </style>
    </head>
    <body>
        <h1>PHP SuperBowl</h1>
        <img src="http://www.housuperbowl.com/wp-content/themes/super-bowl-51/images/houston-superbowl-logo.png" id="super-bowl-img" alt="Super Bowl Banner"/>
        <div id="super-bowl-img-src">
            <a href="http://www.housuperbowl.com">Image Source</a>
        </div>
        <p>Welcome to the greatest PHP review there ever was. In honor of this weekend's game, put the team on yo back and fill out the missing (or incomplete) PHP code to fix the form and display lists of the players on each team.</p>
        <!-- Self submitting form - no 'action' attribute needed -->
        <form method="post">
            If you wish to add a player to the Patriots roster, select "New England Patriots" from the below menu.  If you wish to add a player to the Falcons roster, select "Atlanta Falcons".<br>
            <input type="text" name="newPlayer" />
            <select name="newTeam">
                <option value="New England Patriots">New England Patriots</option>
                <option value="Atlanta Falcons">Atlanta Falcons</option>
            </select>
            <input type="submit" name="submit" value="Add Player" />
        </form>

        <?php
            # The current associative array of players; don't edit
            $players = array(
                "Tom Brady" => "New England Patriots",
                "Julian Edelman" => "New England Patriots",
                "Julio Jones" => "Atlanta Falcons",
                "Malcolm Butler" => "New England Patriots",
                "Vic Beasley" => "Atlanta Falcons",
                "Matt Ryan" => "Atlanta Falcons"
            );

            /*
            * ===============================================================================
            * EDIT BELOW THIS LINE ONLY; UNCOMMENT EACH SECTION SO THAT IT FUNCTIONS PROPERLY
            * ===============================================================================
            */

            # First down: Fix the following 'if' statement.
            # *REPLACE 'false'* so that when submit has been clicked, you get and store the POST values. What PHP function do you know that does this?
            # Next week, we’ll start using something more secure than $_POST but OK for today

            if(isset($_POST["submit"])) {

                $newPlayer = $_POST["newPlayer"];
                $newTeam = $_POST["newTeam"];

                # Second down: if newPlayer and newTeam are set and newPlayer matches the regular expression, then add it to the array to be printed.
                # Remember that there are two arguments for preg_match: the pattern and the string to test. Allow only letters (uppercase or lowercase) or spaces for player names.

                if(isset($newPlayer) && isset($newTeam) && preg_match("/^[a-z ]+$/i", $newPlayer)) {
                    # Uncomment the below line when ready, and add the new player to the $players array
                    $players["$newPlayer"] = $newTeam;
                }
                else {
                    echo "<h3>Please enter a valid player name for it to be added!</h3>";
                }
            }
        ?>

        <h3>Print the list of players using a foreach loop</h3>

        <?php
            # Third and goal: Insert the correct foreach parameters in the foreach loop and the if statement
        	# uncomment the loop once you are ready

            foreach ($players as $playerName => $playerTeam) {
                # Print out the key and value, as in "Tom Brady plays for the New England Patriots".
                # We've gotten you started by adding the div and appropriate class
                # Fix the if statement (REPLACE 'false') so that the appropriate logo prints.

                echo "<div class='player-info'>";
                if ($playerTeam === "New England Patriots") {
                    $img = 'http://prod.static.patriots.clubs.nfl.com/nfl-assets/img/gbl-ico-team/NE/logos/away/large.png';
                    }
                else {
                    $img = 'http://prod.static.patriots.clubs.nfl.com/nfl-assets/img/gbl-ico-team/ATL/logos/away/large.png';
                }

                echo "$playerName plays for the $playerTeam: <img src='$img' class='team-logo' alt='$playerTeam Logo' />";
                echo "</div>";
            }


            # Touchdown! If there's time left, go for the two-point conversion.
        ?>

        <h3>Recreate the above using a function</h3>

        <?php
            # Two point conversion: define the following function
      		# It should should take in two arguments, and will be later called on each array element in $players.
       	 	# Don't forget to print the appropriate div tags!

            /*function printName( ) {

            }*/

            # Call the function using a foreach (similar setup to before) loop on $players

            /*foreach () {

            }
            */

            # Great job! You scored a TD and punched the two-point conversion in. Enjoy the Superbowl this weekend!
        ?>
        <h1><a href="http://www.cc.com/video-clips/qs3r6w/the-colbert-report-logo-restrictions-for-the-super-bowl">Have fun at the Superb Owl!</a></h1>
    </body>
</html>
