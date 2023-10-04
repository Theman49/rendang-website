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






















// Function pada page detail menu


let jumlahOrder = document.getElementById("jumlahOrder");
let value = parseInt(jumlahOrder.innerHTML);
function tambahOrder(){
	value++;
	jumlahOrder.innerHTML = value;

	change();
}

function kurangOrder(){
	if(value > 1){
		value--;
		jumlahOrder.innerHTML = value;
	}
	change();
}


function showImageHover(id, source){

	const gambarUtama = document.getElementById("gambar-produk");
	if(id==0){
		str = `<img class="w-100" src="${source}.jpg"/>`;
	}else{
		str = `<img class="w-100" src="${source}-2.jpg"/>`;
	}
	
	gambarUtama.innerHTML = str;
	console.log(str)
}



















// Function pada page cart
function firstLoad(){
	const pesanan = document.getElementsByClassName('menu-pesan');
	const jumlahMenu = pesanan.length;
	hargaBayar(jumlahMenu);
}


function menghitungHarga(id, value){
	const getIdHarga = "hargaMenu" + id;
	let harga = document.getElementById(getIdHarga);
	const getSubTotal = "subTotal" + id;
	let subTotal = document.getElementById(getSubTotal)
	let parseHarga = parseFloat(harga.innerHTML);
	let totalHarga = parseHarga * value;
	subTotal.innerHTML = totalHarga;
}

function tambahOrderOnCart(id){
	const getIdOrder = "jumlahOrder" + id;
	let jumlahOrder = document.getElementById(getIdOrder);
	let value = parseInt(jumlahOrder.innerHTML);
	value++;
	jumlahOrder.innerHTML = value;

	menghitungHarga(id, value);

	hargaBayar();
	change2(id);
}

function kurangOrderOnCart(id){
	const getIdOrder = "jumlahOrder" + id;
	let jumlahOrder = document.getElementById(getIdOrder);
	let value = parseInt(jumlahOrder.innerHTML);
	if(value > 1){
		value--;
		jumlahOrder.innerHTML = value;
	}



	menghitungHarga(id, value);

	hargaBayar();
	change2(id);
}

function hargaBayar() {
	const bayar = document.getElementById("hargaBayar");
	const pesanan = document.getElementsByClassName('menu-pesan');
	const jumlahMenu = pesanan.length;
	let hargaBayar = 0;
	let subTotal = document.getElementsByClassName('subTotal');
	for(let i=0; i<jumlahMenu; i++){
		
		let parseHarga = parseFloat(subTotal[i].innerHTML);
		hargaBayar+=parseHarga;
	}
	bayar.innerHTML = hargaBayar;
}


function hapusDariCart(id){
	const getId = "idMenuPesan" + id;
	const jumlahMenuDipesan = document.getElementById('jumlahMenuDipesan');
	const pesanan = document.getElementById(getId);
	pesanan.remove();

	hargaBayar();
	jumlahMenuDipesan.value--;
}