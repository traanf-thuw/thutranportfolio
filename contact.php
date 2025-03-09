<?php
// variables to validate the form
$error = array();
$errorFlag = false;
$successFlag = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $fname = filter_input(INPUT_POST, "fname");
    $lname = filter_input(INPUT_POST, "lname");
    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $options = filter_input(INPUT_POST, "options");
    $insurance = filter_input(INPUT_POST, "yes");
    $insurance1 = filter_input(INPUT_POST, "no");

    if (empty($fname) || empty($lname) || empty($brand) || empty($model) || empty($insurance) || empty($insurance1)) {
        array_push($error, "Please provide all necessary information");
        $errorFlag = true;
    }

    if (str_word_count($options) < 5) {
        array_push($error, "Your options field must contain at least 5 words");
        $errorFlag = true;
    }

    else {
        $successFlag = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bing's Cars &trade;</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <header>
        <nav>
            <img src="img/logo.png" alt="logo">

            <ul>
                <?php
                $menuTexts = array("Home", "Most hired cars", "Contact");
                $links = array("home.php", " ", "contact.php");

                for ($i = 0; $i < count($menuTexts); $i++) {
                    echo "<li><a href='".$links[$i]."'>".$menuTexts[$i]."</a></li>";
                }
                ?>
            </ul>
        </nav>

        <div class="header">
            <div class="text">
                <h1>Bing's Cars</h1>
                <p>For all your special cars</p>
            </div>
            <img src="img/header.png" alt="header">
        </div>
    </header>

    <main>
        <?php
        if (!$successFlag) {
            // if there's any error
            if (!empty($error)) {
                echo "<h1 id='request'>Request a car</h1>";
                echo "<div class='error'>";
                foreach ($error as $errorMsg) {
                    echo "<p>".$errorMsg."</p>";
                }
                echo "</div>";
            } else {
        ?>
            <div class="form-contact">
            <h1>Request a car</h1>
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                    <p>
                        <label for="fname">Firstname</label>
                        <input type="text" name="fname">
                    </p>
                    <p>
                        <label for="lname">Lastname</label>
                        <input type="text" name="lname">
                    </p>
                    <p>
                        <label for="brand">Car brand & model</label>
                    </p>
                    <p>
                        <label for="model"></label>
                        <select name="brand">
                            <option value="Volkwagen">Volkwagen</option>
                            <option value="Volvo">Volvo</option>
                        </select><select name="model">
                            <option value="Hatchback">Hatchback</option>
                            <option value="Cabrio">Cabrio</option>
                        </select>
                    </p>
                    <p>
                        <label for="options">Options</label>
                        <input type="text" name="options" placeholder="please enter">
                    </p>
                    <p>Do you want insurance?</p>
                    <p>
                        <input type="radio" name="yes" id="yes">
                        <label for="yes">Yes</label>
                    </p>
                    <p>
                        <input type="radio" name="no" id="no">
                        <label for="no">No</label>
                    </p>
                    <p><input type="submit" value="Send request" id="submit"></p>
                </form>
            </div>
        <?php
            }
        } else {
            // after submit the form, the following information will be displayed 
            if ($successFlag) {
                if ($insurance) {
                    // if customer wants an insurance
                    echo "<h1>Thank you</h1>";
                    echo "<div class='success'>";
                    echo "<p>Firstname: ".$fname."</p>";
                    echo "<p>Lastname : ".$lname."</p>";
                    echo "<p>Car brand & model: ".$brand." ".$model."</p>";
                    echo "<p>Oprions: ".$options."</p>";
                    echo "<p>Do you want insurance: Yes</p>";        
                } if ($insurance1) {
                    // if customer don't want an insurance
                    echo "<h1>Thank you</h1>";
                    echo "<div class='success'>";
                    echo "<p>Firstname: ".$fname."</p>";
                    echo "<p>Lastname : ".$lname."</p>";
                    echo "<p>Car brand & model: ".$brand." ".$model."</p>";
                    echo "<p>Oprions: ".$options."</p>";
                    echo "<p>Do you want insurance: No</p>";        
                }
            }
        }
        ?>
    </main>

    <footer>
        <div class="copyright">
            <p>&copy; 2022 Bings Cars</p>
            <a href="">Send us a direct e-mail!</a>
        </div>

        <div class="opening-time">
            <?php
                $day = ["Monday ", "Tuesday ", "Wednesday ", "Thursday ", "Friday ", "Saturday "];
                $time = ["13:00 - 18:00", "9:00 - 18:00", "9:00 - 18:00", "9:00 - 21:00", "9:00 - 21:00", "9:00 - 17:00"];

                for ($i = 0; $i < count($day); $i++) {
                    echo "<p>".$day[$i].$time[$i]."</p>";
                }
            ?>
        </div>
        
    </footer>


    
</body>
</html>