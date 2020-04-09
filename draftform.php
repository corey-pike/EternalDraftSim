<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Draft</title>
	<meta name="author" content="name">
	<meta name="description" content="description here">
	<meta name="keywords" content="keywords,here">
	<link rel="stylesheet" href="css/stylesheet.css" type="text/css">
	</head>
	<body id="" >
		<div id="">
			<h2>Restrictions</h2>
			Uncheck any box to apply the restriction
			<br><br>
			<form>
			  <div>
			  <strong>Set:</strong>
				<input type="checkbox" id="set1" name="set1" value="set1" checked>
				<label for="set1"> Set 1 </label>
				<input type="checkbox" id="set2" name="set2" value="set2" checked>
				<label for="set2"> Set 2 </label>
				<input type="checkbox" id="set3" name="set3" value="set3" checked>
				<label for="set3"> Set 3 </label>
			  </div>
			   <div>
			   <strong>Type:</strong>
				<input type="checkbox" id="unit" name="unit" value="unit" checked disabled>
				<label for="unit"> Unit </label>
				<input type="checkbox" id="attachment" name="attachment" value="attachment" checked>
				<label for="attachment"> Attachment </label>
				<input type="checkbox" id="spell" name="spell" value="spell" checked>
				<label for="spell"> Spell </label>
				<input type="checkbox" id="power" name="power" value="power" checked>
				<label for="power"> Power </label>
			  </div>
			  <div>
			  <strong>Faction:</strong>
			  <input type="checkbox" id="fire" name="fire" value="fire" checked>
				<label for="fire"> Fire </label>
				<input type="checkbox" id="time" name="time" value="time" checked>
				<label for="time"> Time </label>
				<input type="checkbox" id="justice" name="justice" value="justice" checked>
				<label for="justice"> Justice </label>
				<input type="checkbox" id="primal" name="primal" value="primal" checked>
				<label for="primal"> Primal </label>
				<input type="checkbox" id="shadow" name="shadow" value="shadow" checked>
				<label for="shadow"> Shadow </label>
			  </div>
			   <div>
			  <strong>Rarity:</strong>
			  <input type="checkbox" id="common" name="common" value="common" checked disabled>
				<label for="common"> Common </label>
				<input type="checkbox" id="uncommon" name="uncommon" value="uncommon" checked>
				<label for="uncommon"> Uncommon </label>
				<input type="checkbox" id="rare" name="rare" value="rare" checked>
				<label for="rare"> Rare </label>
				<input type="checkbox" id="legendary" name="legendary" value="legendary" checked>
				<label for="legendary"> Legendary </label>
				<br>
				<br>
				<input type="text" placeholder="Search..">
				<br>
				<table>
					<tr>
						<th>Ban List</th>
					</tr>
					<tr>
						<td>placeholder...</td>
					</tr>
				   </table>
			  </div>
			  <br>
			  <button type="submit" value="Submit"> Submit </button>
			  <button type="reset" value="Reset"> Reset </button>
			  
			  
			</form>
		</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"/>
		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js" type="text/javascript"/>
	</body>
</html>