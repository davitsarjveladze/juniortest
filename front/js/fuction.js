
// hiding forms in product_add
$("#book").hide();
$("#dvdDisc").hide();
$("#​furniture").hide();
$("#textForAddInfo").show();

/**
 * use to show selected  form in product add page
 *
 */

function HideFunctionAdd() {
    let pol = document.querySelector('#selector').value;
    if (pol === 'choose') {
        $("#book").hide();
        $("#dvdDisc").hide();
        $("#textForAddInfo").show();
        $("#​furniture").hide();
    }

    else if ('DVDdisc' === pol) {
        $("#book").hide();
        $("#​furniture").hide();
        $("#dvdDisc").show();
        $("#textForAddInfo").hide();
    }

    else if ('Book' === pol) {
        $("#dvdDisc").hide();
        $("#​furniture").hide();
        $("#book").show();
        $("#textForAddInfo").hide();
    }
    else if ('​Furniture' === pol) {
        $("#dvdDisc").hide();
        $("#​furniture").show();
        $("#book").hide();
        $("#textForAddInfo").hide();
    }



}

/**
 * used to show selected product in product list
 */
function hideFunctionList() {
    let pol = document.querySelector('#select').value;
    if (pol === '​Furniture') {
        $(".Book").hide();
        $(".DVD-disc").hide();
        $(".​Furniture").show();
    }

    else if ('DVD-disc' === pol) {
        $(".Book").hide();
        $(".DVD-disc").show();
        $(".​Furniture").hide();
    }

    else if ('Book' === pol) {
        $(".Book").show();
        $(".DVD-disc").hide();
        $(".​Furniture").hide();
    }

    else if ('choose' === pol) {
        $(".Book").show();
        $(".DVD-disc").show();
        $(".​Furniture").show();
    }
}

/**
 *
 * @param input
 * used to enter only numbers
 */
function onlyNumber(input) {
    let value = input.value;
    let rep = /[-.;":'a-zA-Zа-яА-Я]/;
    if (rep.test(value)) {
        value = value.replace(rep, '');
        input.value = value;
    }
}