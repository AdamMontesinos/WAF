<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" type="text/css" rel="stylesheet">
    <title>WAF TEST</title>
</head>
<body>
    <div class="titleContainer">
        <h1>WAF TESTER</h1>
        <h5>by Marc, Adam & Arnau</h3>
    </div>

    <form onSubmit='submitData(event)' class='formContainer'>
        <label>localhost/test.php?</label>
        <input type="text" placeholder="...">
        <input type="submit" value="Send">
    </form>

    <div class='responseContainerWrapper'>
        <div class='responseContainer'>
            <pre class='responseText'></pre>
        </div> 
    </div>
</body>
<script src='script.js'></script>
</html>