<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <!--font-->

</head>
<body>
    <!--Profile card-->
    <article class="profile-card">
        <section class="profile-image">
            <img src="DSC053681.jpg" class="image" alt="Foto på mig" loading="lazy">
        </section>

        <!--intro/greeting-->
        <section class="intro">
            <section class="greeting">
                <h1> Profil </h1>
                <?php
                    $name = "Tina Foreby";
                    $age = 29;
                    $city = "Stockholm";

                    function greeting() { //Method
                        global $name;
                        echo '<p class="greeting-text">Välkommen, ' . $name . '</p>';
                    }

                    greeting(); //Calling method

                    echo "Du är " . $age . " år gammal och du bor i " . $city . "."; //Concatination
                ?>
            </section>

            <!--Is the person off age-->
            <section class="off-age">
                <p><strong> Status: </strong></p>
                <?php
                    if ($age >= 18) { //If-else
                        echo "Du är myndig <br>";
                    } else { 
                        echo "Du är inte myndig <br>";
                        }
                ?>
            </section>

            <!--Occupation-->
            <section class="occupation"> 
                <p><strong> Sysselsättning: </strong></p>
                <?php
                    $occupation = "Studerar";
                    if ($occupation == "Studerar") { //If-else
                        echo "Du $occupation Utveckling på Chas Academy";
                    }
                    else {
                        echo "Du $occupation som Utvecklare"; 
                    }
                ?>

            </section>
        </section>
        
        <!--Hobbies list-->
        <section class="hobbies">
            <p><strong> Dina hobbies är: </strong></p>
        <?php
            $hobbies = array("Träning", "Kost", "Kodning", "Film", "Resa");

            foreach ($hobbies as $i) { //Foreach
                echo "<li> $i </li>";
            }
        ?>
        </section>
        </article>
        
</body>
</html>