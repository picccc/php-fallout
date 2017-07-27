function addition(f) {
    var a = parseInt(document.getElementById('1').value);
    var b = parseInt(document.getElementById('2').value);
    var c = parseInt(document.getElementById('3').value);
    var d = parseInt(document.getElementById('4').value);
    var e = parseInt(document.getElementById('5').value);
    var f = parseInt(document.getElementById('6').value);
    var g = parseInt(document.getElementById('7').value);
    var sum = 42-(a + b + c + d + e + f + g);
    document.getElementById('result').innerHTML = sum;
    var subm = document.getElementById('submit');
    if(sum==0){
        subm.disabled=false;
    }
}
