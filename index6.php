<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset= UTF-8">
        <meta name= "description" content="Da Vincijev kod je kriminalistički triler američkog pisca Dana Browna.">
        <meta name= "keywords" content="Da Vincijev kod, Dan Brown, kriminalistički triler">
        <meta name= "author" content= "Marko Kušec">
        <meta name="viewport" content="width=width-device; initial-scale=1.0">
        <!-- Uključujemo Bootstrap CDN za stilove -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        
          
    </head>
    <body style="margin: 20px">
    
        <p>Kalkulator (Switch naredba)</p>
        <form action="" method="post" id="calculator">
           <label for="prvibroj"><b>Upiši prvi broj*</b></label>
           <input type="number" name="prvibroj" id="prvibroj" required autofocus>
           <br>
           <label for="drugibroj"><b>Upiši drugi broj*</b></label>
           <input type="number" name="drugibroj" id="drugibroj" required>
           <br>
           
           <input type="submit" value="+" name="operator">
           <input type="submit" value="-" name="operator">
           <input type="submit" value="*" name="operator">
           <input type="submit" value="/" name="operator">

        </form>
        

        <?php
           $prviBroj=$_POST["prvibroj"];
           $drugiBroj=$_POST["drugibroj"];
           $operator=$_POST["operator"];
           $rezultat="";

           switch ($operator){
            case "+":
                $rezultat=$prviBroj + $drugiBroj;
                break;
            case "-":
                $rezultat=$prviBroj - $drugiBroj;
                break;
            case "*":
                $rezultat=$prviBroj * $drugiBroj;
                break;
            case "/":
                $rezultat = $drugiBroj != 0 ? $prviBroj / $drugiBroj : "Dijeljenje s nulom nije dopušteno";
                break;

           }
           echo "Rezultat: $rezultat "
        ?>
        
        
    </body>
</html>
<!-- index6.php -->

