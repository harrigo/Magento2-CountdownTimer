<?php 
namespace Harrigo\DeliveryCountdown\Block;

class DeliveryCountdown {
	public function getDeliveryDate() {
		$currenttime = $this->getCurrentTime();
		$deliverydate = date('d-m-Y', strtotime(date('d-m-Y') . ' + 2 weekdays'));
		if ($currenttime>$cutofftime) {
			$cutofftime+= 86400;
			$deliverydate+= 86400;
		}
	}
	
	public function getCutOffTime() {
		$currenttime = $this->getCurrentTime();
		$cutofftime = strtotime(date('h:i:s A', strtotime(date('d-m-Y') . ' + 16 hours')));
		if ($currenttime>$cutofftime) {
			$cutofftime+= 86400;
			$deliverydate+= 86400;
		}
	}
	
	public function getTimeRemaining() {
		$interval = date('H:i:s', mktime(0, 0, $cutofftime-$currenttime));
	}
	
	public function getCurrentTime() {
		$currenttime = strtotime(date("h:i:s A"));
	}
	
} 