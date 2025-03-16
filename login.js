function Function2() {
    var x = document.getElementById("searchicon2");
    var y = document.getElementById("searchinput2");
    
    if (1 === 1) { 
        x.style.display = 'none';
        y.style.display = 'flex';
    }
}
function Refunction2() {
    var x = document.getElementById("searchicon2");
    var y = document.getElementById("searchinput2");
    
    if (1 === 1) { 
        x.style.display = 'flex';
        y.style.display = 'none';
    }
}


function Function(){
	var x = document.getElementById("myinput");
	var y = document.getElementById("hide1");
	var z = document.getElementById("hide2")
	if(x.type === 'password'){
		x.type = "text";
		y.style.display = "block";
		z.style.display = "none";
	}
	else{
		x.type = "password";
		y.style.display = "none";
		z.style.display = "block";
	}
}



function myFunction(){
	alert("sccesfully Log In");
}