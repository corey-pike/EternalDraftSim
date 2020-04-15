
<?php
    include_once "headerA4.php";
?>
<?php
	include "menu.php"
?>
<style>
.outsideWrapper{ 
    width:303px; height:478px; 
    margin:20px 60px; 
    border:none;}
.insideWrapper{ 
    width:100%; height:100%; 
    position:relative;}
.coveredImage{ 
    width:100%; height:100%; 
    position:absolute; top:0px; left:0px;
}
.coveringSVG{ 
    width:100%; height:100%; 
    position:absolute; top:0px; left:0px;
}
</style>
  <main class="content">
  <h1>Cards</h1>
		<div id="">
		<h2>Filter</h2>
		<form>
			<input type="text" placeholder="Search..">
			<br>
			<div>
				<strong>Set:</strong>
				<input type="checkbox" id="set1" name="set1" value="set1">
				<label for="set1"> Set 1 </label>
				<input type="checkbox" id="set2" name="set2" value="set2">
				<label for="set2"> Set 2 </label>
				<input type="checkbox" id="set3" name="set3" value="set3">
				<label for="set3"> Set 3 </label>
			</div>
			<div>
				<strong>Type:</strong>
				<input type="checkbox" id="unit" name="unit" value="unit">
				<label for="unit"> Unit </label>
				<input type="checkbox" id="attachment" name="attachment" value="attachment">
				<label for="attachment"> Attachment </label>
				<input type="checkbox" id="spell" name="spell" value="spell">
				<label for="spell"> Spell </label>
				<input type="checkbox" id="power" name="power" value="power">
				<label for="power"> Power </label>
			</div>
			<div>
				<strong>Faction:</strong>
				<input type="checkbox" id="fire" name="fire" value="fire">
				<label for="fire"> Fire </label>
				<input type="checkbox" id="time" name="time" value="time">
				<label for="time"> Time </label>
				<input type="checkbox" id="justice" name="justice" value="justice">
				<label for="justice"> Justice </label>
				<input type="checkbox" id="primal" name="primal" value="primal">
				<label for="primal"> Primal </label>
				<input type="checkbox" id="shadow" name="shadow" value="shadow">
				<label for="shadow"> Shadow </label>
			</div>
			<div>
				<strong>Cost:</strong>
				<input type="checkbox" id="c1" name="c1" value="c1">
				<label for="c1"> 1 </label>
				<input type="checkbox" id="c2" name="c2" value="c2">
				<label for="c2"> 2 </label>
				<input type="checkbox" id="c3" name="c3" value="c3">
				<label for="c3"> 3 </label>
				<input type="checkbox" id="c4" name="c4" value="c4">
				<label for="c4"> 4 </label>
				<input type="checkbox" id="c5" name="c5" value="c5">
				<label for="c5"> 5 </label>
				<input type="checkbox" id="c6" name="c6" value="c6">
				<label for="c6"> 6 </label>
				<input type="checkbox" id="c7" name="c7" value="c7">
				<label for="c7"> 7 </label>
				<input type="checkbox" id="c8" name="c8" value="c8">
				<label for="c8"> 8 </label>
				<input type="checkbox" id="c9" name="c9" value="c9">
				<label for="c9"> 9+ </label>
			</div>
			<br>
			<button type="submit" value="Submit">Filter</button>
			<button type="reset" value="Reset">Reset</button>
		</form>
		</div>
<?php
echo '
	<div class="outsideWrapper">
	<div class="insideWrapper">
	<img src="images/eternal.png" class="coveredImage">
	<svg class="coveringSVG">
	
  <text x="16%" y="17%" dominant-baseline="middle" text-anchor="middle" style="fill:white;font-size:270%;">1</text>
  <text x="53%" y="45" dominant-baseline="middle" text-anchor="middle" style="fill:white;font-size:125%;">F</text>
  <text x="50%" y="65%" dominant-baseline="middle" text-anchor="middle" style="fill:white;font-size:130%;">Grenadin Drone</text>
  <circle cx="20%" cy="54%" r="30" stroke="gray" stroke-width="2" fill="black" />
  <text x="20%" y="55%" dominant-baseline="middle" text-anchor="middle" style="fill:white;font-size:270%;">1</text>
  <circle cx="80%" cy="54%" r="30" stroke="gray" stroke-width="2" fill="black" />
  <text x="80%" y="55%" dominant-baseline="middle" text-anchor="middle" style="fill:white;font-size:270%;">1</text>
  <text x="50%" y="75%" dominant-baseline="middle" text-anchor="middle" style="fill:black;">Summon: Play a 1/1 Grenadin.</text>
  <text x="50%" y="94%" dominant-baseline="middle" text-anchor="middle" style="fill:black;font-size:120%;">Unit</text>
	</svg>
	</div>
	</div>
	';
?>
</main>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js" type="text/javascript"></script>

<?php
    include_once "footerA4.php";
?>
