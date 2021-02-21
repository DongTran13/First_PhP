function get() {
    var a = document.getElementById("a").nodeValue;
    for(var i=1; i<=a; i++){
        if(a%i==0){
            document.getElementById("chan").innerHTML=i;
        }

    }
    
}