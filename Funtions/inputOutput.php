<h1>#3: Arguments from User Input
Rewrite the exercise from #2 to accept user input.</h1>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
        <title>Rectangle Area Function</title>
    </head>

    <body>
        <h2>Rectangle Area Function</h2>
        <?php
//If data not submitted, show form.
        if(!isset ($_POST['submit'])){
        ?>
            <form method="post" action="/php-exercises/CorePHP/Funtions/inputOutput.php">
                <p>Please enter the values of the length and width of your rectangle.</p>
                <p> Length: <input type="number" name="length" size="5" /> 
                    Width:  <input type="number" name="width" size="5" /></p>
                            <input type="submit" name="submit" value="Go" />
            </form>
            <?php
 
}else{		

    function calc()
{
    $w = $_POST['width'];
    $l = $_POST['length'];
    $a = $l * $w;	

    echo "A rectangle of length $l and width $w has an area of $a.";
}
calc();
}

?>
    </body>
</html>