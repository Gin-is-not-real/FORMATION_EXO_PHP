<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
    function fizbuzz() {
        $tolog = "";

        for($i = 0; $i < 400; $i++) {
            if($i%15==0) {
                $tolog = 'fizzbuzz';
            }
            elseif($i%3 == 0) {
                $tolog = 'fizz';
            }
            elseif($i%5 == 0) {
                $tolog = 'buzz';
            }
            else {
                $tolog = $i;
            }

        echo $tolog . '</br>';

        }
    }

    fizbuzz();
?>

</body>
</html>