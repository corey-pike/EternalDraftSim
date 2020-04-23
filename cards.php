
<?php
include_once "headerA4.php";
include_once "db_config.php";
?>
<?php
include "menu.php"
?>
<style>
.my-custom-scrollbar {
position: relative;
height: 800px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}

</style>
<main class="content">

<h1>Cards</h1>
<div id="page-container">
<h2>Filter</h2>
<form action="" method="post">
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
<input type="checkbox" id="f" name="f" value="f">
<label for="f"> Fire </label>
<input type="checkbox" id="t" name="t" value="t">
<label for="t"> Time </label>
<input type="checkbox" id="j" name="j" value="j">
<label for="j"> Justice </label>
<input type="checkbox" id="p" name="p" value="p">
<label for="p"> Primal </label>
<input type="checkbox" id="s" name="s" value="s">
<label for="s"> Shadow </label>
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
<?php
echo '<div class="table-wrapper-scroll-y my-custom-scrollbar">
<table id="carddata" class="table table-striped table-fixed table-bordered">
<thead>
<tr>
<th class="th-sm">Name</th>
<th class="th-sm">Type</th>
<th class="th-sm">Influence Cost</th>
<th class="th-sm">Power Cost</th>
<th class="th-sm">Attack</th>
<th class="th-sm">Health/Armor</th>
<th class="th-sm">Rarity</th>
<th class="th-sm">Text</th>
</tr>
</thead>
<tbody>

</tbody>
</table>
</div>
';
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js" type="text/javascript"></script>
<script>
$(function() {


var cards = [];

$.getJSON('eternal-cards.json', function(data) {
$.each(data.card, function(i, f) {
var tblRow = "<tr>" + "<td>" + f.Name + "</td>" +
"<td>" + f.Type + "</td>" + "<td>" + f.Influence + "</td>" + "<td>" + f.Cost + "</td>" + 
"<td>" + f.Attack + "</td>" + "<td>" + f.Health + "</td>" + "<td>" + f.Rarity + "</td>" + 
"<td>" + f.CardText + "</td>" + "</tr>"
$(tblRow).appendTo("#carddata tbody");
});

});

});

</script>
<script>
$(document).ready(function () {
  $('#carddata').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</script>
		</div>
		</main>
    </body>
</html>
