function get() {
    var a = document.getElementById("num1").value;
    var b = document.getElementById("num2").value;
    var c = document.getElementById("num3").value;
    if (a > b && a > c) {
        document.getElementById("max").innerHTML = "Max = " + a;
    } 
    if( b > a && b > c ){
        document.getElementById("max").innerHTML = "Max = " + b;        
    } 
    if( c > a && c > b){
        document.getElementById("max").innerHTML = "Max = " + c;
    }  
}
function Get() {
    var a = document.getElementById("num1").value;
    var b = document.getElementById("num2").value;
    var c = document.getElementById("num3").value;
    if (a < b && a < c) {
        document.getElementById("min").innerHTML = "Min = " + a;
    }
    if( b < a && b < c ){
        document.getElementById("min").innerHTML = "Min = " + b;        
    }
    if( c < a && c < b){
        document.getElementById("min").innerHTML = "Min = " + c;
    }
}