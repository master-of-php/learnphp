<! DOCTIPE HTML>
<html>
      <head>
        <title>
         variable
        </title>
      </head>
      <body>
        <?php 
            $body_temp = 36.6;
            echo "<p>температура тела по цельсию $body_temp ";
            $body_temp = 97.8;
            echo "(а по фарингейту $body_temp)</p>";
            $hi = "привет ";
            $buy = "пока";
            $hibuy = $hi.$buy;
            echo "$hibuy";
        ?>
      </body>
</html>
