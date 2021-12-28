<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MultiTable Generation</title>
        <meta name="description" content="">
        <link rel="icon" type="image/png" href="fonts-images/icon.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            @font-face {
                font-family: "Lucida Grande";
                src: url(fonts-images/LucidaGrande.ttf);
            }

            .container {
                margin: 0 auto;
                background-color: #292A2D;
                width: 50%;
                text-align: center;
                font-family: Lucida Grande;
                color: #9179C4;
                font-size: 100%;
            }

            textarea {
                color: #C9CCCA;
            }

            .multi {
                border-spacing: 15px;
                margin: 0 auto;
                border: 0px;
                color: #fff;
            }
        </style>    
    </head>
    <body style="background-color: #242424;">
        <h1 style="font-family: Lucida Grande; text-align: center; color: #fff;">
            MultiTable Generation
        </h1>

        <div class="container">
            <?php            
            session_start();
            if (isset($_SESSION['views']))
                $_SESSION['views']++;
            else   
                $_SESSION['views'] = 1;
            
            // read in values
            $col = $_POST['col'];
            $row = $_POST['row'];

            $invalidCol = ($row < "3" or $row > "12");
            $invalidRow = ($col < "3" or $col > "12");

            if ($invalidCol or $invalidRow) {
                echo '<br><a style="font-family: Lucida Grande; color: ;">Rows or columns are not between 3 and 12.</a>';

                echo '<br><br><a href="https://www.cs.ryerson.ca/~sssafi/webdev/part1/index.html"><button type="button">Go back and try again.</button></a><br><br>';
            } else {
                echo "<br>";
                echo '<h3>Your Generated Multiplication Table:</h3>';
                echo '<table class="multi">';
                for ($i = 1; $i <= $row; $i++) {
                    echo "<tr>";
                    for ($j = 1; $j <= $col; $j++) {
                        echo "<td>".$i*$j."</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
                echo "<br>";
                echo "Current hits on this site: ".$_SESSION['views']."<br>";
                echo '<br><br><a href="https://www.cs.ryerson.ca/~sssafi/webdev/part1/index.html"><button type="button">Go back and try again.</button></a><br><br><br>';
            }
            ?>
        </div>
    </body>
</html>
