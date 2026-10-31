<?php
require_once("./private/conexion.php");

// GET and FILTER

$request = $conexion->query("SELECT verse_box_text, verse_box_purpose FROM verses");
$verses = [];
while ($row = $request->fetch_assoc()) {
    $verses[] = $row;
}

$verses = json_encode($verses);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Verses bibliotec</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Favorite verses list</h1>
        </header>
        <br/>
        <br/>
        <main>
            <form action="process_form.php" method="POST">
                <fieldset>
                    <label for="verse_box_id">Verse to insert</label>
                    <textarea name="verse_box" id="verse_box_id"></textarea>
                </fieldset>
                <fieldset>
                    <label for="verse_purpose">Verse purpose</label>
                    <input type="text" name="purpose" id="verse_purpose">
                </fieldset>
                <input type="submit" value="Send">
            </form>
            <br/>
            <ul>
                <?php

                    $string = str_replace(["[", "]", "{", "}"], '', $verses); // verse_box_text, verse_box_purpose
                    $strings_first_element = explode(",", $string);
                    
                    foreach ($strings_first_element as $string) {
                        echo "<li>" . $string . "</li>";
                    }
                                         
                ?>
            </ul>

        </main>
    </div>

    <script type="text/javascript">
        // Block of code to use after we test the getting of data
        /*
            var request = new XMLHttpRequest()

            request.open('GET', 'data.json', true)

            request.onload = function () {
                // begin accessing JSON data here
                var data = JSON.parse(this.response)

                for (var i = 0; i < data.length; i++) {
                    console.log(data[i].name + ' is a ' + data[i].race + '.')
                }
            }

            request.send()

            // A shorteneth way...
            // Replace ./data.json with your JSON feed
            fetch('./data.json')
            .then((response) => {
                return response.json()
            })
            .then((data) => {
                // Work with JSON data here
                console.log(data)
            })
            .catch((err) => {
                // Do something for an error here
            })
        */
    </script>
</body>
</html>