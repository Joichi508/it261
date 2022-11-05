<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My portal page</title>
    <link href="index.css" type="text/css" rel="stylesheet">
</head>
<body>

    <h1>
    <a href="index.php">JO Portal page</a>
    </h1>
    <div id="wrapper">
        <nav>
             <ul>
                <li><a href="">Switch</a></li>
                <li><a href="">Trobleshoot</a></li>
                <li><a href="">Calculator</a></li>
                <li><a href="">Email</a></li>
                <li><a href="">Database</a></li>
                <li><a href="">Gallery</a></li>
            </ul>
        </nav>

    <main>
        <h2>About JO</h2>
        <img class= "right" src="images/me.jpeg" alt="JO">

        <p>
        Hello <br/>
        I'm Joichiro Ueno and a international student from Japan.
        My hobby is looking at people's fashion. I like clothes and sneakers, so I often research and people-watch.
        Recently, I am a member of a Japanese soccer team that is active in Bellevue, and we have league games every week, which is a lot of fun.
        I will be in Seattle until next September and would love to talk with you all.
        </p>
    </main>

    <aside>

    <h2>Weekly Class Exercises</h2>

        <h3>Week2</h3>
            <ol>
                <li><a href="https://jo-codes.com/it261/weeks/week2/var.php">var.php</a></li>
                <li><a href="https://jo-codes.com/it261/weeks/week2/vars2.php">vars2.php</a></li>
                <li><a href="https://jo-codes.com/it261/weeks/week2/currency-logic.php">currency-logic.php</a></li>
            </ol>

        <h3>Week3</h3>
             <ol>
                <li><a href="https://jo-codes.com/it261/weeks/week3/if.php">if.php</a></li>
                <li><a href="https://jo-codes.com/it261/weeks/week3/about.php">about.php</a></li>
                <li><a href="https://jo-codes.com/it261/weeks/week3/for-each.php">for-each.php</a></li>
                <li><a href="https://jo-codes.com/it261/weeks/week3/for-loop.php">for-loop.php</a></li>
                <li><a href="https://jo-codes.com/it261/weeks/week3/date.php">date.php</a></li>
                <li><a href="https://jo-codes.com/it261/weeks/week3/switch.php">switch.php</a></li>
            </ol>

        <h3>Week4</h3>
             <ol>
                <li><a href="https://jo-codes.com/it261/weeks/week4/form1.php">form1.php</a></li>
                <li><a href="https://jo-codes.com/it261/weeks/week4/form2.php">form2.php</a></li>
                <li><a href="https://jo-codes.com/it261/weeks/week4/form3.php">form3.php</a></li>
                <li><a href="https://jo-codes.com/it261/weeks/week4/arithmetic-form.php">arithmetic-form.php</a></li>
                <li><a href="https://jo-codes.com/it261/weeks/week4/form-get.php">form-get.php</a></li>
                <li><a href="https://jo-codes.com/it261/weeks/week4/added.php">added.php</a></li>
            </ol>

        <h3>Week5</h3>
             <ol>
                <li><a href="https://jo-codes.com/it261/weeks/week5/currency1.php">currency1.php</a></li>
                <li><a href="https://jo-codes.com/it261/weeks/week5/currency2.php">currency2.php</a></li>
                <li><a href="https://jo-codes.com/it261/weeks/week5/currency3.php">currency3.php</a></li>
                <li><a href="https://jo-codes.com/it261/weeks/week5/currency4.php">currency4.php</a></li>
                <li><a href="https://jo-codes.com/it261/weeks/week5/null.php">null.php</a></li>
            </ol>

        <h3>Week6</h3>
             <ol>
                <li><a href="form1.php">form1.php</a></li>
                <li><a href="implode.php">implode.php</a></li>
                <li><a href="functions.php">functions.php</a></li>
            </ol>

        <h3>Week7</h3>
            <ol>
                <li><a href="random.php">random.php</a></li>
                <li><a href="pictures.php">pictures.php</a></li>
                <li><a href="strings.php">strings.php</a></li>
            </ol>
        <h3>Week8</h3>
            <ol>
                <li><a href="people.php">people.php</a></li>
            </ol>

        <h3>Final Assignment</h3>
            
    </aside>

    <h2 class="MAMP">MAMP</h2>
    <img class= "normal" src="images/normal.jpeg" alt="JO">
    <img class= "error" src="images/error.jpeg" alt="JO">

    </div>

    <footer>
            <p>
                <small>&copy; 2022 by 
                Joichiro Ueno, All Rights Reserved ~ 
                <a id="html-checker" href="#" target="_blank">Check HTML</a> ~ 
                <a id="css-checker" href="#" target="_blank">Check CSS</a>
                </small>
           </p>
    </footer>
    <script>
        //https://tinyurl.com/dynamic-html-checker
        document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);

        document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
     </script>

</body>
</html>