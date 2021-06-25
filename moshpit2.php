<?php
	$Weight = $_POST["weight"];
    $Height = $_POST["height"];
    $bmi1 = $Weight / $Height / $Height;
    $bmi2 = $bmi1 * 10000;
    $bmi3 = round($bmi2, 1);
?>
<h4>Your weight <?php echo $Weight ?>kg</h4>
<h4>Your height <?php echo $Height ?>cm</h4>
<h4>Your BMI is <?php echo $bmi3 ?></h4>
<h4>Check if it's normal on the chart below.</h4>
<h4>If you're in the blue or lower, it might be dangerous to go into the moshpit!</h4>
<div class="col-12 col-sm-6">
    <img src="./img/bmi-chart.png" class="w-10"></img>
</div>

