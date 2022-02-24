<?php

class Notification extends CI_Controller
{
    public function __construct() {
        parent::__construct();  
    }

	public function send()
	{
        echo $device_token = "ac68ab3a24d63fb6";//"E377BE6EA3B6F311";//"DB58CA77633D38FA";
        // E377BE6EA3B6F311
        $SERVER_API_KEY = "AAAA4VDRuJ4:APA91bH35r6vImsaCX4puGwWZ8Ta-eFCJxvCX2naE6z2-m-nqmnrYD_PPFcia5Erchl32qNVRePaB2BaiL83FrTPI5ABRU6brTNYqz4ogZXDtj5Ru8D3bVHk2hDWFwRdo7aURiXAt9is";
        $message = array(
			"title" => "Sample Message",
			"body" => "This is Test message body"
        );
        
        // payload data, it will vary according to requirement
        $data = [
            "to" => $device_token, // for single device id
            "data" => $message
        ];
        $dataString = json_encode($data);
    
        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];    
    
        $ch = curl_init();
      
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
               
        $response = curl_exec($ch);
        curl_close($ch);

        // print_r($response);
        // exit;
        $this->response([
            'status' => TRUE,
            'message' => 'Notification successful.',
            'data' => $response
        ], 200);
	}

}