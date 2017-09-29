<?php 
namespace Harrigo\DeliveryCountdown\Block;

class DeliveryCountdown extends \Magento\Framework\View\Element\Template 
{
	public function getDeliveryDate() {
		$currenttime = $this->getCurrentTime();
		$deliverydate = date('d/m/Y', strtotime(date('d-m-Y') . ' + 2 weekdays'));
		//if ($currenttime >= $this->getCufOffTime()) {
			//$deliverydate+= 86400;
		//}
		return $deliverydate;
	}
	
	public function getCutOffTime() {
		$currenttime = $this->getCurrentTime();
		$cutofftime = strtotime(date('h:i:s A', strtotime(date('d-m-Y') . ' + 16 hours')));
		//if ($currenttime>$cutofftime) {
			//$cutofftime+= 86400;
		//}
		return $cutofftime;
	}
	
	public function getTimeRemaining() {
		$interval = date('H:i:s', mktime(0, 0, $this->getCufOffTime() - $this->getCurrentTime()));
		return $interval;
	}
	
	public function getCurrentTime() {
		$currenttime = strtotime(date("h:i:s A"));
		return $currenttime;
	}
	
	public function getTimeRemainingSeconds() {
		return $interval = $this->getCutOffTime() - $this->getCurrentTime();
	}
	
} 