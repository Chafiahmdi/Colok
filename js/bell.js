let  box  = document.getElementById('box');
let  down = false;


function toggleNotifi(){
	if (down) {
		box.style.height  = '0px';
		box.style.opacity = 0;
		down = false;
	}else {
		box.style.height  = '100px';
		box.style.opacity = 1;
		down = true;
	}
}