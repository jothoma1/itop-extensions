<?php
//
// iTop module Geolocalisation
// J.THOMAS / JTO
// 02/5/2018
//

class MyGeolocExtension implements iPopupMenuExtension
{
   public static function EnumItems($iMenuId, $param)
   {
	  if ($iMenuId == self::MENU_OBJDETAILS_ACTIONS)
	  {
		 $oObject = $param;
		 if ($oObject instanceof Location)
		 {
			 $sUID = 'MyPopupExtension-Geoloc'; // Make sure that each menu item has a unique "ID"
			 $sLabel = 'Geolocalisation';
			 $sURL = 'http://www.openstreetmap.org/?mlat='.$oObject->Get('latitude').'&mlon='.$oObject->Get('longitude').'&zoom=12';
			 $sTarget = '_blank';
			 $oMenuItem = new URLPopupMenuItem($sUID, $sLabel, $sURL, $sTarget);
			 return array($oMenuItem);
		 }
	  }
	  return array();
   }
}
?>
