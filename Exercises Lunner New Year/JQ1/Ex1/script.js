function get() {
    var a = document.getElementById("cd").value;
    var b = document.getElementById("cc").value;    
    if(a ==""||b ==""){
        alert("Xin quý khách vui lòng điền đầy đủ thông tin");
    }else{
        var cv = (parseInt(a)+parseInt(b))*2;
        var dt = a*b;
        document.getElementById("cv").innerHTML= "Chu Vi = " + cv;
        document.getElementById("dt").innerHTML= "Dien Tich = " + dt;
    }
}