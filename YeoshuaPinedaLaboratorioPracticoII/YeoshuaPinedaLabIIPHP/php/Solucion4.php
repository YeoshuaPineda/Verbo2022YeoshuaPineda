<html>
    <body>
        <?php
            $num = $_GET['txt_num'];

            if ($num > 0){
                echo "El número es positivo";
            }
            
            if ($num < 0){
                echo "El número es negativo";
            }    

            if ($num == 0){
                echo "El número es neutral";
            }  
            
        ?>
    </body>    
</html>        