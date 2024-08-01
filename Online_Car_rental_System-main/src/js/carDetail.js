function loadData(data){
	if (data == "car1"){
		document.getElementById("cname").innerHTML = "Toyota Corolla - 2011";
		document.getElementById("avlbl").innerHTML = "Available";
		document.getElementById("nseats").innerHTML = "Number of Seats: 5";
		document.getElementById("fuel").innerHTML = "Fuel: 40L";
		document.getElementById("aut").innerHTML = "Auto";
		document.getElementById("lugg").innerHTML = "Luggage: 3 travelling bags";
		document.getElementById("rate").innerHTML = " Rates:<br>	1 Day	   : Rs.  2,200<br>	3 Days	   : Rs.  6,200<br>	1 Week	   : Rs. 14,500";
		document.getElementById("image1").src = "images/corolla1.jpg";
		document.getElementById("image2").src = "images/corolla2.jpg";
		document.getElementById("image3").src = "images/corolla3.jpg";
	}
	else if (data=="car2"){
		document.getElementById("cname").innerHTML = "Nissan Kicks - 2018";
		document.getElementById("avlbl").innerHTML = "Available";
		document.getElementById("nseats").innerHTML = "Number of Seats: 5";
		document.getElementById("fuel").innerHTML = "Fuel: 45L";
		document.getElementById("aut").innerHTML = "Auto";
		document.getElementById("lugg").innerHTML = "Luggage: 4 travelling bags";
		document.getElementById("rate").innerHTML = " Rates:<br>	1 Day	   : Rs.  3,000<br>	3 Days	   : Rs.  9,000<br>	1 Week	   : Rs. 20,000";
		document.getElementById("image1").src = "images/kicks1.jpg";
		document.getElementById("image2").src = "images/kicks2.jpg";
		document.getElementById("image3").src = "images/kicks3.jpg";
	}
	else if (data=="car3"){
		document.getElementById("cname").innerHTML = "Toyota Prius - 2021";
		document.getElementById("avlbl").innerHTML = "Available";
		document.getElementById("nseats").innerHTML = "Number of Seats: 5";
		document.getElementById("fuel").innerHTML = "Fuel: 42L";
		document.getElementById("aut").innerHTML = "Auto";
		document.getElementById("lugg").innerHTML = "Luggage: 4 travelling bags";
		document.getElementById("rate").innerHTML = " Rates:<br>	1 Day	   : Rs.  2,800<br>	3 Days	   : Rs.  8,200<br>	1 Week	   : Rs. 18,500";
		document.getElementById("image1").src = "images/prius1.jpg";
		document.getElementById("image2").src = "images/prius2.jpg";
		document.getElementById("image3").src = "images/prius4.jpg";
	}
	else if (data=="car4"){
		document.getElementById("cname").innerHTML = "Nissan Leaf - 2015";
		document.getElementById("avlbl").innerHTML = "Available";
		document.getElementById("nseats").innerHTML = "Number of Seats: 4";
		document.getElementById("fuel").innerHTML = "Fuel: 38L";
		document.getElementById("aut").innerHTML = "Auto";
		document.getElementById("lugg").innerHTML = "Luggage: 2 travelling bags";
		document.getElementById("rate").innerHTML = " Rates:<br>	1 Day	   : Rs.  2,500<br>	3 Days	   : Rs.  7,200<br>	1 Week	   : Rs. 17,000";
		document.getElementById("image1").src = "images/leaf1.jpg";
		document.getElementById("image2").src = "images/leaf2.jpg";
		document.getElementById("image3").src = "images/leaf3.jpg";
	}
	else if (data=="car5"){
		document.getElementById("cname").innerHTML = "Suzuki Alto - 2000";
		document.getElementById("avlbl").innerHTML = "Available";
		document.getElementById("nseats").innerHTML = "Number of Seats: 4";
		document.getElementById("fuel").innerHTML = "Fuel: 35L";
		document.getElementById("aut").innerHTML = "Manual";
		document.getElementById("lugg").innerHTML = "Luggage: 2 travelling bags";
		document.getElementById("rate").innerHTML = " Rates:<br>	1 Day	   : Rs.  2,300<br>	3 Days	   : Rs.  6,500<br>	1 Week	   : Rs. 15,000";
		document.getElementById("image1").src = "images/alto1.jpg";
		document.getElementById("image2").src = "images/alto2.jpg";
		document.getElementById("image3").src = "images/alto3.jpg";
	}
	else if (data=="car6"){
		document.getElementById("cname").innerHTML = "Honda Civic - 2007";
		document.getElementById("avlbl").innerHTML = "Available";
		document.getElementById("nseats").innerHTML = "Number of Seats: 4";
		document.getElementById("fuel").innerHTML = "Fuel: 44L";
		document.getElementById("aut").innerHTML = "Auto";
		document.getElementById("lugg").innerHTML = "Luggage: 3 travelling bags";
		document.getElementById("rate").innerHTML = " Rates:<br>	1 Day	   : Rs.  2,600<br>	3 Days	   : Rs.  7,300<br>	1 Week	   : Rs. 17,200";
		document.getElementById("image1").src = "images/civic1.jpg";
		document.getElementById("image2").src = "images/civic2.jpg";
		document.getElementById("image3").src = "images/civic3.jpg";
	}
	else {
		alert("invalid!!!");
	}
}