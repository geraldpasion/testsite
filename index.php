<html>
<head>
	
<script src="tablefilter/tablefilter.js"></script>


</head>
<body>
<table class="mytable" cellpadding="0" cellspacing="0" id="table1">
          <caption>
          WORLD INTERNET USAGE AND POPULATION STATISTICS
          </caption>
          <tr>
            <th>World Regions</th>
            <th>Population ( 2007 Est.)</th>
            <th>Population % of World</th>
            <th>% Population ( Penetration )</th>
            <th>Usage % of World</th>
          </tr>
          <tr>
            <td>Africa</td>
            <td>933,448,292</td>
            <td>14.2 %</td>
            <td>3.5 %</td>
            <td>3.0 %</td>
          </tr>
          <tr>
            <td>Asia</td>
            <td>3,712,527,624</td>
            <td>56.5 %</td>
            <td>10.5 %</td>
            <td>35.6 %</td>
          </tr>
          <tr>
            <td>Europe</td>
            <td>809,624,686</td>
            <td>12.3 %</td>
            <td>38.6 %</td>
            <td>28.6 %</td>
          </tr>
          <tr>
            <td>Middle East</td>
            <td>193,452,727</td>
            <td>2.9 %</td>
            <td>10.0 %</td>
            <td>1.8 %</td>
          </tr>
          <tr>
            <td>North America</td>
            <td>334,538,018</td>
            <td>5.1 %</td>
            <td>69.4 %</td>
            <td>21.2 %</td>
          </tr>
          <tr>
            <td>Latin America / Caribbean</td>
            <td>556,606,627</td>
            <td>8.5 %</td>
            <td>16.0 %</td>
            <td>8.1 %</td>
          </tr>
          <tr>
            <td>Oceania / Australia</td>
            <td>34,468,443</td>
            <td>0.5 %</td>
            <td>53.5 %</td>
            <td>1.7 %</td>
          </tr>
</table>

<script src='tablefilter/tablefilter.js'></script>
<script data-config>
var tf = new TableFilter('table1');
tf.init();
</script>

<p id="demo"></p>
<script>
document.getElementById("demo").innerHTML = "Hello JavaScript!";
</script> 

<?php
	$letter='B';
	echo ++$letter;

?>


</body>
</html>