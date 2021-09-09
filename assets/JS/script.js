// let banner = document.getElementById("banner");
// let deg = 0;
// // let string = "linear-gradient("+ deg +"deg, black, transparent)";
// // banner.style.backgroundImage = string;
// banner.addEventListener("click", function(){
// 	deg += 10;
// 	string = "linear-gradient("+ deg +"deg, black, transparent)";
// 	banner.style.backgroundImage = string;
// 	console.log(deg)
// })
let jumlahOrder = document.getElementById("jumlahOrder");
let value = parseInt(jumlahOrder.innerHTML);
function tambahOrder(){
	value++;
	jumlahOrder.innerHTML = value;
}

function kurangOrder(){
	if(value > 1){
		value--;
		jumlahOrder.innerHTML = value;
	}
	
}