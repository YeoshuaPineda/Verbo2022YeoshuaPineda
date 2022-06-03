<html>
    <body>
        <?php
            $cateto1 = $_GET['txt_c1'];
            $cateto2 = $_GET['txt_c2'];

            $hipotenusa = sqrt($cateto1 * $cateto1 + $cateto2 * $cateto2);

            echo "El resultado sería: " ,$hipotenusa 
        ?>

<img src = "pitágoras.jpg"height = "120" width="325" align = "left">
    </body>    
</html>        