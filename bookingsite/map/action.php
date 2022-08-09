<!-- Done By: Haziq -->

<!--Use for additional feature (admin)-->
<?php
   require 'map/location.php';
   $loc = new local;
   $loc->setId($_REQUEST['id']);
   $loc->setLat($_REQUEST['lat']);
   $loc->setLng($_REQUEST['lng']);
   $status = $loc->updateLocationWithLatLng();
   if ($status == true) {
     echo "Updated...";
   }else {
     echo "Failed...";
   }
 ?>
