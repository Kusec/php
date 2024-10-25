<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset= UTF-8">
        <meta name= "description" content="Da Vincijev kod je kriminalistički triler američkog pisca Dana Browna.">
        <meta name= "keywords" content="Da Vincijev kod, Dan Brown, kriminalistički triler">
        <meta name= "author" content= "Marko Kušec">
        <meta name="viewport" content="width=width-device; initial-scale=1.0">

        
            <title>Vjezba 4</title>
        
          
    </head>
    <body>
    
        <h1>Vjezba 4</h1>
        <form action="" method="post">
            <label for="vrijednostA">Vrijednost a:</label>
            <input type="number" name="vrijednostA" id="A">
            <br>
            <br>
            <label for="vrijednostB">Vrijednost b:</label>
            <input type="number" name="vrijednostB" id="B">
            <br>
            <br>
            <button type="submit">Pošalji</button>

        </form>

        <?php
            $a=$_POST['vrijednostA'];
            $b=$_POST['vrijednostB'];
            $c=(3* $a - $b)/2;

            print '
            <p>a= ' .$a . '</p>
            <p>b= ' . $b . '</p>
            <p>c= (3*'.$a. '-'.$b.')/2 = ' .$c. '</p>';
            

        ?>
        
        
    </body>
</html>
<!-- index4.php -->

