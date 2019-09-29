<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href='../style/main2.css'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>add product</title>
</head>
<body>
<header>
    <h1>Product Add</h1>

</header>
<!--container where can input information about product-->
<main class="productAddMain" >

    <form action="../../back/requester/insertInDataBase.php" method="post">
        <label for="sku">SKU
            <input type="text" name="sku" placeholder="ENTER SKU" >
        </label>
        <label for="name">Name
            <input type="text" name="name" placeholder="ENTER PRODUCT NAME">
        </label>
        <label for="Price">Price
            <input type="text" name="price"  onkeyup="return onlyNumber(this);" placeholder="ENTER PRICE(only numbers)">
        </label>
        <div>
            <select name="typeSelect" id="selector"  title="typeSelect">
                <option selected>choose</option>
                <option value="DVDdisc">DVD-disc</option>
                <option value="Book">Book</option>
                <option value="​Furniture">​Furniture</option>
            </select>

            <button type="button" class="buttonForChoose" onclick="HideFunctionAdd()">change type</button>
        </div>
        <div class="additionalInfo">
            <p id="textForAddInfo" >please choose type</p>
            <label id="dvdDisc" for="DVDdisc" >DVD-disc
                <input type="text" name="size" onkeyup="return onlyNumber(this);" placeholder="ENTER size(only numbers)">
            </label>
            <label  id="book"   for="Book">Book
                <input type="text" name="weight" onkeyup="return onlyNumber(this);" placeholder="ENTER weight(only numbers)">
            </label>

            <label  id="​furniture"   for="​Furniture">X-H-Z
                <input type="text" name="height" onkeyup="return onlyNumber(this);" placeholder="ENTER height(only numbers)">
                <input type="text" name="width" onkeyup="return onlyNumber(this);" placeholder="ENTER width(only numbers)">
                <input type="text" name="length" onkeyup="return onlyNumber(this);" placeholder="ENTER length(only numbers)">
            </label>
        </div>
        <button type="submit" class="refreshingbutton" >save</button>
    </form>

</main>
<!--including js scripts-->
<script src="../js/fuction.js"></script>
<script src="../../back/libs/jquery-3.4.1.js"></script>
</body>