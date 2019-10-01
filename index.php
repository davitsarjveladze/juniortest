<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href='front/style/main2.css'>

    <title> cart list </title>
</head>
<body>
    <header>
        <h1>Product List</h1>
        <div>
            <!-- switcher for cards -->
            <select name="typeSwitcher" title="typeswitcher" id="select" >
                <option selected>choose</option>
                <option value="DVD-disc">DVD-disc</option>
                <option value="Book">Book</option>
                <option value="​Furniture">​Furniture</option>
            </select>

            <button type="button" class="refreshingbutton" onclick="hideFunctionList()">apply</button>
        </div>
    </header>
   <main>
        <?php
        require_once 'back/requester/cardsSelector.php';
        /**
         * load classes automatic
         *
         */
        spl_autoload_register(function ($class){
        $path = dirname(__FILE__)."/".strtolower(str_replace("\\","/",$class));
        spl_autoload($path);
        });

        /**
         * making objects
         * setting there value
         * display them
         */
        $dvd = new back\classes\DVD();
        $dvd ->setValue($selectForDvd);
        $dvd ->getValue();

        $book = new back\classes\Book();
        $book->setValue($selectForBook);
        $book->getValue();

        $furniture = new back\classes\Furniture();
        $furniture ->setValue($selectForFurniture);
        $furniture ->getValue();

         ?>
   </main>
    <!-- including js script  -->
    <script src="/back/libs/jquery-3.4.1.js"></script>
    <script src="/front/js/fuction.js"></script>
</body>
</html>