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
        <h1>Pick one of our popular cars!</h1>

        <div class="car">
            <?php
                for ($i = 0; $i < 6; $i++) {
                    echo "<div class='hyonda'>";
                    echo "<img src='img/car1.png' alt='Hyonda'>";
                    echo "<h1>Hyonda</h1>";
                    echo "<p>&euro; 120.000</p>";
                    echo "<p> Beautiful car that can last for years to come.</p>";
                    echo "</div>";
                }
            ?>
        </div>

        <div class="bing-cars">
            <h2>Who is Bing cars?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, porro. Vitae velit, quia pariatur enim aliquam eum voluptatibus! Sed possimus dolores ad deleniti eaque soluta nam quia fugit id! Molestiae. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, nesciunt tempora! Quibusdam incidunt quaerat consequuntur unde, sint cum aliquid iste consectetur, molestiae iusto voluptatum optio? Expedita explicabo modi id saepe. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim voluptas quod ex explicabo? Eum veritatis perferendis est fuga vitae, doloremque reprehenderit debitis labore sequi alias, similique fugit et quasi repellendus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Est eveniet earum eum alias excepturi ipsam dignissimos ad maxime nobis iusto? Expedita ipsa adipisci nobis temporibus ex velit cum beatae omnis?</p>
        </div>
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