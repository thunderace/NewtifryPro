<?php
/**
 * NewtifryPro - PHP message push script for eedomus
 * for version up to 1.2.0
 */

$apikey = "YourFirebaseToken";
$deviceIds = array();
// Add your GCM IDs below
$deviceIds[] = "MyFirstGCMDeviceID";
//$deviceIds[] = "MySecondGCMDeviceIDIfAny";
// samples
// standard message
$result = newtifryProPush(  $apikey,
                            $deviceIds, 
                            "Test message 1", 
                            "Normal", 
                            "Hello from NewtifryPro", 
                            1, 
                            "https://newtifry.appspot.com", 
                            "http://upload.wikimedia.org/wikipedia/commons/b/b5/PA120016.JPG", 
                            -1,	// speak 
                            false, 	// noCache
                            0, 	// state : default
                            -1); 	// notify




function iso8601() {
  date_default_timezone_set("UTC");
  $time=time();
  return date("Y-m-d", $time) . 'T' . date("H:i:s", $time) .'.00:00';
}

function newtifryProPush(	$apikey,
                          $deviceIds,  
                          $title, 
                          $source = NULL, 
                          $message = NULL, 
                          $priority = 0, 
                          $url = NULL, 
                          $imageUrl = NULL, 
                          $speak = -1, 
                          $noCache = false, 
                          $state = 0, 
                          $notify = -1) {
  //Prepare variables
  $GCM_URL = "https://android.googleapis.com/gcm/send";
  $data = array ( "type" => "ntp_message",
                  "timestamp" => iso8601(),
                  "priority" => $priority, 
                  "title" => base64_encode($title));

  if ($message) {
    $data["message"] = base64_encode($message);
  }
  if ($source) {
    $data["source"] = base64_encode($source);
  }
  if ($url) {
    $data["url"] = base64_encode($url);
  }
  if ($imageUrl) {
    if (is_array($imageUrl)) {
      for ($i = 1; $i < 6; $i++) {
        if ($imageUrl[$i - 1] != null) {
          $data["image" . $i] = base64_encode($imageUrl[$i - 1]);
        }
      }
    } else {
      $data["image"] = base64_encode($imageUrl);
    }
  }

  if ($speak == 0 || $speak == 1) {
    $data["speak"] = $speak;
  }
  if ($noCache == true) {
    $data["nocache"] = 1;
  }
  if ($state == 1 || $state == 2) {
    $data["state"] = $state;
  }
  if ($notify == 0 || $notify == 1) {
    $data["notify"] = $notify;
	}

  $fields = array(  'registration_ids'  => $deviceIds,
                    'data'              => $data);

  $headers = array( 'Authorization: key=' . $apikey,
                    'Content-Type: application/json');

  // Open connection
  $ch = curl_init();
  // Set the url, number of POST vars, POST data
  curl_setopt( $ch, CURLOPT_URL, $GCM_URL );
  curl_setopt( $ch, CURLOPT_POST, true );
  curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
  curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $fields ) );

  // Execute post
  $result = curl_exec($ch);
  // Close connection
  curl_close($ch);
  //Return push response as array
  return json_decode($result);
}
?>
