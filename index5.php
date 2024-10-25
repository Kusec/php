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
    
        <p>Igra (pogodi broj)</p>
        <form action="" method="post" id="calculator">
           <label for="pogodi"><b>Upiši jedan broj od 1 do 9*</b></label>
           <input type=number name="pogodi" id="pogodi" required autofocus>

        </form>

        <?php
            $randBroj=rand(1,9);

            if ($_POST["pogodi"]==$randBroj){
                print '<p class="btn btn-success">Pogodak, probaj ponovno!</p>';

            }
            else {
                print '<p class="btn btn-danger">Krivo, probaj ponovno</p>';
            }
            print '<p>Zamišljeni broj je ' . $randBroj.'</p>'

        ?>
        
        
    </body>
</html>
<!-- index5.php -->

