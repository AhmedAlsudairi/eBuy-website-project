window.addEventListener("load",start,false);

function start(){
    var now= new Date();
	var hour=now.getHours();
    var greeting= document.getElementById("greeting");
    if(hour<12){
        greeting.innerHTML="Hello,Good morning!";
    }
	if(hour>=12){
        hour=hour-12;

        if(hour<6){
            greeting.innerHTML="Hello,Good afternoon!";
        }
		
		if(hour>=6) {
            greeting.innerHTML="Hello,Good evening!";
        }
    }
}

var delBtn = document.getElementById("delete");

delBtn.addEventListener("click",areYouSure,false);

function areYouSure(){
alert("hi");
}