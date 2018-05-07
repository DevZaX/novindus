<?php
namespace App;


class Analytic {


  public function dt($a,$b,$items){
	$day = [];


		  foreach ($items as $item) {
			  if ($item->updated_at <= $b && $a <= $item->updated_at) {
				  $day["$a"] = $item;
			  }
		  }

		  return $day;


}

	public function statWeek($items){
		$week = [];
		$d = strtotime("today");
		$start_week = strtotime("last sunday midnight",$d);
		for($i=0;$i<=6;$i++){
			$d =self:: dt(date("Y-m-d H:i:s",$start_week+$i*3600*24),date("Y-m-d H:i:s",$start_week+59+59+23*60*60+$i*3600*24),$items);
			$week[]= $d;
		}
		return $week;
	}

	public function statWeekByStart($items,$start_week){
		$week = [];
		$d = strtotime("today");
		for($i=0;$i<=6;$i++){
			$d =self:: dt(date("Y-m-d H:i:s",$start_week+$i*3600*24),date("Y-m-d H:i:s",$start_week+59+59+23*60*60+$i*3600*24),$items);
			$week[]= $d;
		}
		return $week;
	}


public function getWeek($items){

          $week = [];
        $d = strtotime("today");
		$start_week = strtotime("last sunday midnight",$d);
		$end_week = strtotime("next saturday",$d);
		$start = date("Y-m-d H:i:s",$start_week); 
		$end = date("Y-m-d H:i:s",$end_week);
	//dd($end);
	   // dd(date("Y-m-d H:i:s",$start_week+59+59*60+23*60*60));

          foreach ($items as $item) {
          	if( $item->updated_at  <=  $end  &&    $start <= $item->updated_at ){
    				$week[] = $item;
    			}
          }

          return $week;
}

public function getDay($items){
	$start = date("Y-m-d 00:00:01");
	$end =  date("Y-m-d 23:59:59");
	          $day = [];
foreach ($items as $item) {
	if( $item->updated_at  <=  $end  &&    $start <= $item->updated_at ){
    				$day[] = $item;
    			}
}
return $day;
}

public function getMonth($items){
	             $start = date("Y-m-01 H:i:s");
                 $end  = date("Y-m-t H:i:s");
                  $month = [];
                 foreach ($items as $item) {
	if( $item->updated_at  <=  $end  &&    $start <= $item->updated_at ){
    				$month[] = $item;
    			}
}
return $month;
}

	public  function statMonth($items){
		$tab = [];
		$start_week_1 = date("Y-m-00 H:i:s");
		$start_week_2 = date("Y-m-07 H:i:s");
		$start_week_3 = date("Y-m-14 H:i:s");
		$start_week_4 = date("Y-m-21 H:i:s");
		$tab[] = self::statWeekByStart($items,$start_week_1);
		$tab[] = self::statWeekByStart($items,$start_week_2);
		$tab[] = self::statWeekByStart($items,$start_week_3);
		$tab[] = self::statWeekByStart($items,$start_week_4);
		return $tab;
	}

}