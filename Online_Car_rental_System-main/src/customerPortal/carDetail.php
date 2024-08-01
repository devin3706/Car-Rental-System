<?php // remember to link the payment page
include_once("../inc/indexHeader.php");?>
<!DOCTYPE html>
<html>
    <head>
        <title>RentACar.lk</title>
        <link rel="stylesheet" href="../styles/carDetail.css">
		<script src="../js/carDetail.js"></script>
    </head>
	
    <body>
		
		<div class="outlined">
			<img src="../images/prius1.jpg" alt="Toyota Prius 2021" id="image1">
			<img src="../images/prius2.jpg" alt="Toyota Prius 2021" style="width:590px;" id="image2">
			<img src="../images/prius4.jpg" alt="Toyota Prius 2021" id="image3">
		</div>
		
		<br><br>
		
		<div class="outlined" style="width:550px;"><br>
			<span id="cname" style="background-color: DodgerBlue; font-size: 30px;">Toyota Prius - 2021</span>
			<span id="avlbl" style="background-color: MediumSeaGreen; margin-left: 80px">Available</span><br><br><br>
			<span id="nseats">Number of Seats: 5</span>
			<span style="margin-left: 120px;" id="fuel">Fuel: 42L</span><br><br>
			<span id="aut">Auto</span><br><br>
			<span id="lugg">Luggage: 4 travelling bags</span><br><br>
			<pre class="rates" id="rate"> Rates:<br>	1 Day	   : Rs.  2,800<br>	3 Days	   : Rs.  8,200<br>	1 Week	   : Rs. 18,500</pre><br><br>
		</div>
		
		<div class="outlined" style="width:1060px;">
			<form action="#" method="post">
				<br><br>
				<label for="rPeriod">Select a rental period:</label>
				<select name="rPeriod" id="rPeriod">
					<option value="1day">1 Day</option>
					<option value="3days">3 Days</option>
					<option value="1week">1 Week</option>
					<option value="2weeks">2 Weeks</option>
					<option value="1month">1 Month</option>
					<option value="more">More than 1 Month</option>
				</select><br><br><br>
				<label for="Loc">Enter Pickup Location:</label>
				<input type="text" id="Loc" name="Loc" placeholder="Location" size="60px"><br><br><br>
				<input type="checkbox" id="driver" name="driver" value="Driver">
				<label for="driver">I need a driver</label>
				<br><br><br><br><br><br><br><br><br><br>
				<button onclick="window.history.back()">Go Back</button>
				<input type="submit" value="Rent This Car" id="sbmt">
			</form>
		</div>
				
		<br><br>
		
		<hr color="black" size="3px">
		
		<br>
		
		<center>
		<div class="carBox">
			<img src="../images/corolla1.jpg" alt="Toyota Corolla" onclick="loadData('car1')">
			<p>Toyota Corolla - 2011</p>
			<p>4.8 ratings | 20</span></p><br>
			<p>Rs. 2,200 per day</p>
		</div>
		<div class="carBox">
			<img src="../images/kicks1.jpg" alt="Nissan Kicks" onclick="loadData('car2')">
			<p>Nissan Kicks - 2018</p>
			<p>4.9 ratings | 27</span></p><br>
			<p>Rs. 3,000 per day</p>
		</div>
		<div class="carBox">
			<img src="../images/prius2.jpg" alt="Toyota Prius" onclick="loadData('car3')">
			<p>Toyota Prius - 2021</p>
			<p>4.4 ratings | 16</span></p><br>
			<p>Rs. 2,800 per day</p>
		</div>
		<div class="carBox">
			<img src="../images/leaf1.jpg" alt="Nissan Leaf" onclick="loadData('car4')">
			<p>Nissan Leaf - 2015</p>
			<p>4.5 ratings | 36</span></p><br>
			<p>Rs. 2,500 per day</p>
		</div>
		<div class="carBox">
			<img src="../images/alto1.jpg" alt="Suzuki Alto" onclick="loadData('car5')">
			<p>Suzuki Alto - 2000</p>
			<p>4.8 ratings | 33</span></p><br>
			<p>Rs. 2,300 per day</p>
		</div>
		<div class="carBox">
			<img src="../images/civic1.jpg" alt="Honda Civic" onclick="loadData('car6')">
			<p>Honda Civic - 2007</p>
			<p>4.9 ratings | 23</span></p><br>
			<p>Rs. 2,600 per day</p>
		</div>

		<br><br>
		</center>
    </body>
</html>
<?php include_once("../inc/indexFooter.php");?>