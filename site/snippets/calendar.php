<?php 
$months=array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
$current_month=date('n');
$current_year=date('Y');
$current_day=date('d');
$month=0;
$startYear = 2017;
?>

<div class="calendar">
		<?php 
			$nb_of_years = 3;
			for ($column=0; $column<$nb_of_years; $column++) { 
				echo '<table class="year-'.($startYear + $column).'">';
				$month = 0;
				echo '<tr class="year">';
					echo '<td>'. ($startYear + $column) .'</td>';
				echo '</tr>';
				echo '<tr class="months">';
				for ($row=1; $row<=12; $row++) { 
									// for ($column=1; $column<=4; $column++) {
										echo '<td class="month">';

										$month++;
										
										// echo '<td>'.$months[$month-1].'</td>';
										
										$first_day_in_month=date('w',mktime(0,0,0,$month,1,$current_year));
										$month_days=date('t',mktime(0,0,0,$month,1,$current_year));
										
										// in PHP, Sunday is the first day in the week with number zero (0)
										// to make our calendar works we will change this to (7)
										if ($first_day_in_month==0){
											$first_day_in_month=7;
										}

										echo '<table>';
										echo '<th>'.$months[$month-1].'</th>';
										echo '<tr>';

										// for($i=1; $i<$first_day_in_month; $i++) {
										// 	echo '<td> </td>';
										// }

										for($day=1; $day<=$month_days; $day++) {
											$pos=($day+$first_day_in_month-1)%7;
											$class = (($day==$current_day) && ($month==$current_month)) ? 'today' : 'day';
											$class .= ($pos==6) ? ' sat' : '';
											$class .= ($pos==0) ? ' sun' : '';

											// echo '<td class="'.$class.'">'.$day.'</td>';
											echo '<td class="'.$class.'"></td>';
											// if ($pos==0) echo '</tr><tr>';
										}

										echo '</tr>';
										echo '</table>';

										echo '</td>';
									// }	
				} 
			echo '</tr>';
			echo '</table>';
			
			}
			
?>
</div>
