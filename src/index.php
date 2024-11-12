<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="profile-card">
        <section class="profile-image">
            <img src="src/DSC05368.jpg" alt="Foto på mig" loading="lazy">
        </section>

        <section class="greeting">
            <h1> Profil </h1>
            <?php
                $name = "Tina Foreby";
                $age = 29;
                $city = "Stockholm";

                function greeting() {
                    global $name;
                    echo "Välkommen, $name <br>";
                }

                greeting();

                echo "Du är " . $age . " år gammal och du bor i " . $city . ".";
            ?>
        </section>

        <section class="ofAge">
            <p> Status: </p>
            <?php
                if ($age >= 18) {
                    echo "Du är myndig <br>";
                } else { 
                    echo "Du är inte myndig <br>";
                    }
            ?>
        </section>
        
        <section class="hobbies">
            <p> Dina hobbies är: </p>
        <?php
            $hobbies = array("Träning", "Kost", "Kodning", "Film", "Resa");

            foreach ($hobbies as $i) {
                echo "<li> $i </li>";
            }
        ?>
        </section>
    </section>
        
</body>
</html>