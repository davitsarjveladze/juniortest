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
        /**
         * including classes
         * including info from db
         */
        require_once 'back/requester/cardsSelector.php';
        require_once 'back/classes/ProductCard.php';
        /**
         * making objects
         * setting there value
         * display them
         */
        $dvd = new back\classes\ProductCardDvdDisc();
        $dvd ->setValue($selectForDvd);
        $dvd ->getValue();

        $book = new back\classes\ProductCardBook();
        $book->setValue($selectForBook);
        $book->getValue();

        $furniture = new back\classes\ProductCardFurniture();
        $furniture ->setValue($selectForFurniture);
        $furniture ->getValue();

         ?>
   </main>
    <!-- including js script  -->
    <script src="/back/libs/jquery-3.4.1.js"></script>
    <script src="/front/js/fuction.js"></script>
</body>
</html>