<!Doctype html>
<html>
	<style>
		a {
			background-color: #DDDD99;
			color: #4444BB;
		}
		a:hover {background-color: #CCFFCC;}
		table {
			visibility: hidden;
			table-layout: fixed;
		}
		tr{
			background-color: #DDDD99;
			color: #4444BB;
		}
		body {background-color: #4444BB;}
		h2 {
			background-color: #DDDD99;
			color: #4444BB;
		}
		h1 {
			background-color: #DDDD99;
			color: #4444BB;
		}
	</style>
	<meta title="FRC Team 5181 Shop Inventory">
	<head>
		<img src="Team5181ShopInventory.github.io/TeamLogo.PNG"></img>
	</head>
	<body> 
		<?php
			echo "My first PHP script!";
		?> 
		<div>
			<h1>FRC Team 5181 Shop Inventory<h1>
		</div>
		<input onclick="clearInput(0)" type="text" id="searchBar" value="Search Part Name or Part #"></input>
		<button onclick="searchRegistry()">Search</button><br>
		<h2 id="inventoryText">Inventory</h2>
		<table id="registryDisplay">
			<tr>
				<th>Part Name</th>
				<th>Part Number</th>
				<th>Location</th>
				<th>Quantity</th>
				<th>Link</th>
			</tr>
		</table>
		<script src="methods.js"></script>
		<script src="constructors.js"></script>
		<script>
			var registryData=[];
			registryData.push(new part("CIM Motor","am-0255","P-LS-M",4,"http://www.andymark.com/CIM-Motor-p/am-0255.htm","Motors",["Motor","KOP","2.5in"]));
			registryData.push(new part("HiGrip Wheel","am-2256","P-LS-W",10,"http://www.andymark.com/4-inch-white-higrip-wheel-p/am-2256.htm","Wheels",["Wheel","KOP","4in"]));
			displayRegistry();
		</script>
	</body>
</html>