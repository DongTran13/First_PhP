function get() {
    var a = document.getElementById("a").nodeValue;
    var tmp = "";
    for(var i=1; i<=a; i++){
        if(a%i==0){
            tmp = a;
        }
    }
    document.getElementById("chan").innerHTML=a;
    
}