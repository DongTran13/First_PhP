function get() {
    var firstName = document.getElementById("name").value;
    var lastname = document.getElementById("lastName").value;
if(firstName == ""){
    alert("Please fill your name");
    document.getElementById("name").style.borderColor="red";
    document.getElementById("error-name").style.display="block";    
}else{
    document.getElementById("name").style.borderColor="";
    document.getElementById("error-name").style.display="";
}
if(lastname == ""){
    alert("Please fill your last name");
    document.getElementById("lastName").style.borderColor="red";
    document.getElementById("error-lastName").style.display="block";
    return lastname;
    }else{
        document.getElementById("lastName").style.borderColor="";
        document.getElementById("error-lastName").style.display="";
        alert("Success");
    }
}

