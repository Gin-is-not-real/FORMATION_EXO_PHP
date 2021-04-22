<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="style.css" />
</style>
    <title>Multiplications</title>
</head>

<body>
    <main>

        <section id="tables">
            <h1>Tables de Multiplications - Etape 3</h1>

            <!-- <form action="" method="post">
                <label for="user-input">Choisir une table: </label>
                <input type="number" name="user-input" min="0" max="10" id="table-nbr" value=3>

                <input type="submit" value="ok">
            </form> -->

            <?php 
                // $user_nbr = 3;

                // if(isset($_POST['user-input'])) {
                //     $user_nbr = htmlspecialchars($_POST['user-input']);
                // }

                // echo '<h3>Afficher la table de ' . $user_nbr . '</h3>'; 

                // for($i = 0; $i <= 10; $i++) {
                //     echo $i . " * " . $user_nbr . " = " . ($i * $user_nbr) . '</br>'; 
                // }

            ?>
            <section id="section-checkbox">
                <h4>Choisir une ou plusieures table(s):</h4>
                <form action="" method="post">
                    <label for="nbrs"> </label>
                    <?php 
                        for($i = 0; $i <= 10; $i++) {
                            echo '<br><p><input type="checkbox" name="nbrs[]" value=' . $i . '>' . $i . '</p>';
                        }
                    ?>
                    <br>
                    <input type="submit">
                </form>
            </section>

            <section id="section-resultats">
            <?php 
                
                if(isset($_POST['nbrs'])) {
                    $nbrs = $_POST['nbrs'];

                    foreach($nbrs as $value) {
                        echo '<div><h4>Table de ' . $value . ':</h4>';

                        for($i = 0; $i <= 10; $i++) {
                            echo $i . " * " . $value . " = " . ($i * $value) . '</br>'; 
                        }
                        echo '</div>';
                    }
                }

            ?>
            </section>
        </section>
    </main>
</body>

</html>