var prices = {
    p1: 18.5,
    p2: 3.5,
}

function plus(WhichId){
    console.log('plus button click');
    var whichQty= document.getElementById(WhichId+'-qty');
    var whichSubtotal = document.getElementById(WhichId+'-subtotal');
    whichQty.value = Number(whichQty.value) + 1;
    var price = whichQty.value * prices(WhichId);
    console.log(whichQty.getAttribute('name') + ' quatity is ' +' //your code here');
    console.log(whichSubtotal.getAttribute('name') + ' is: $' +'//your code here');
    whichSubtotal.innerHTML = "Total $:" + price.toFixed(2);
}

function minus(whichId){
    console.log('minus button click');
    var whichQty = document.getElementById(whichId+'-qty');
    var whichSubtotal = document.getElementById(whichId+'-subtotal');
    whichQty.value=whichQty.value - 1;
    var re = new RegExp("[0-9]+")
    if (whichQty > 0){
        console.log('')
        whichQty.value = Number(whichQty.value) - 1;
    }
    var price = whichQty.value * prices(whichId);
    console.log(whichQty.getAttribute('name') +' quantity is ' + '//your code here');
    console.log(whichSubtotal.getAttribute('name') + ' is:$' + ' //your code here');
    whichSubtotal.innerHTML = "Total $:" + price.toFixed(2);
}

function updateQuantity(WhichId){
    var whichQty = document.getElementById(WhichId + '-qty');
    var whichSubtotal = document.getElementById(WhichId+'-subtotal')
    var re = new RegExp("[0-9]+")
    if(!re.test(whichQty.value)){
        alert('Wrong quantity');
        return
    }
    var price = whichQty * prices(whichId);
    console.log(whichQty.getAttribute('name') + ' quantity is ' + whichQty.value)
    console.log(whichSubtotal.getAttribute('name') + ' is: $' + price)
    whichSubtotal.innerHTML = "Total $:" + price.toFixed(2);
}