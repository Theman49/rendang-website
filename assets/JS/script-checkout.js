function metodePengiriman(pilihan){
	let kirim = "";
	let ongkir = 0;
	if(pilihan == 1){
		kirim = "<p class=\"fw-bold\">JNE - OKE (0.1kg)</p><h5>Rp. <span>19.000</span>,-</h5>";
		ongkir = 19000;
	}else if(pilihan == 2){
		kirim = "<p class=\"fw-bold\">JNE - REGULER (0.1kg)</p><h5>Rp. <span>22.000</span>,-</h5>";
		ongkir = 22000;
	}else if(pilihan == 3){
		kirim = "<p class=\"fw-bold\">JNE - YES (0.1kg)</p><h5>Rp. <span>37.000</span>,-</h5>";
		ongkir = 37000;
	}else if(pilihan == 4){
		kirim = "<p class=\"fw-bold\">JNT - REGULER (0.1kg)</p><h5>Rp. <span>19.000</span>,-</h5>";
		ongkir = 19000;
	}
	
	const getSubTotal = document.getElementById("subTotal");
	let subTotal = parseInt(getSubTotal.innerHTML);

	const getOngkir = document.getElementById("ongkir");
	getOngkir.innerHTML =  kirim;

	const getTotalHarga = document.getElementById("totalHarga");

	subTotal += ongkir;
	getTotalHarga.innerHTML = subTotal;
	console.log(pilihan);
}