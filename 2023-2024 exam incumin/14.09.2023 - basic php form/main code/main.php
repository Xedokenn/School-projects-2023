<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tit-le</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Header</h1>
    </header>
    <main>
        <!-- empy forms -->
        <label for="empty_form_1">empty_form_1: </label>
        <input type="text" id="empty_form_1" name="empty_form_1"><br><br>
        <label for="empty_form_2">empty_form_1: </label>
        <input type="text" id="empty_form_1" name="empty_form_1"><br><br>

        <!-- php section with gettin data from database -->

        
        <form method="post">
            <?php include 'hidden_form.php'?> <br><br>
            <button type="submit" name="submit" value="Submit">pobierz</button>
        </form>




        <!-- js button to use information from php form -->

        <script type="text/javascript" src="button_copy.js"></script>
        <input type="button" onclick="button_copy()" value="Copy">

        
    </main>
    <section id="information_section">
        
    </section>
    <footer>
        mmmm St00pka
    </footer>
</body>
</html>