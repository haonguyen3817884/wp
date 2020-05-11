function calculateprice(){
    alert('calculate price');
}
function calculateprice2(){
    alert('calculate price2');
}
function price3(){
    alert('p3 clicked')
}

var myButton = document.getElementById('week7');
myButton.onclick = calculateprice;
myButton.onclick = calculateprice2;

var myButton = document.getElementById('week7-2');
myButton.addEventListener('click', calculateprice);
myButton.addEventListener('click', calculateprice2);

var myP3 = document.getElementById('week7-3');
myP3.addEventListener('scroll', price3, true);


function checkInput(){
    var patt = /^Steve [a-zA-Z ]+$/
    name = document.getElementById('week7-4').value;
    if(patt.test(name)){
        alert('Good');
    }
    else{
        alert('Bad')
    }

}
