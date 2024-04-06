<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Can change the text</title>
</head>
<style>
    body {
        background-color: DodgerBlue;
    }
</style>

<body>
    <h2>Change The Text </h2>
    <p id="can"></p>
    <button type="button" onclick="document.getElementById('can').innerHTML= 'Hello  Web Developer'">Click Me </button>
    <button onClick="window.location.reload();">back</button>

    <!-- <button type="button" onclick="document.getElementById('can').innerHTML= 'Hello  Web Developer'">Click Me </button> -->

</body>

</html>