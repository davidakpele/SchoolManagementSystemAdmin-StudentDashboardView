<?php

use \Firebase\JWT\JWT;

class zoom
{
    // This are this API key that connect user/student or anybody to join meeting
    private $zoom_api_key = '7FsGip75SCaxWES3hPmMOA';
    private $zoom_api_secret = 'xF75g78Zm6PAlPxXziyNuv4ErjJ48XeTRSkj';

    // function to generation JWT

    private function generateJWTkey(){
        $key = $this->zoom_api_key;
        $secret = $this->zoom_api_secret;

        $token = array(
            "iss" =>$key,
            "exp" =>time() + 3600 //60 seconds as suggested
        );

        return JWT::encode($token, $secret);
    }

    // function to create meeting
    public function createMeeting($dataAPi = array()){
        $post_time = $dataAPi['start_date'];
        $start_time = gmdate("Y-m-d\TH:i:s", strtotime($post_time));

        $createMeetingArray = array();
         if (!empty($data['alternative_host_ids'])) {
            if (count($data['alternative_host_ids']) > 1) {
                $alternative_host_ids = implode(",", $data['alternative_host_ids']);
            } else {
                $alternative_host_ids = $data['alternative_host_ids'][0];
            }
        }
        
        $createMeetingArray['topic']          = $dataAPi['topic'];
        $createMeetingArray['agenda']         = !empty($dataAPi['agenda']) ? $dataAPi['agenda'] : "";
        $createMeetingArray['type']           = !empty($dataAPi['type']) ? $dataAPi['type'] : 2;//schedule
        $createMeetingArray['start_date']     = $start_time;
        $createMeetingArray['timezone']       = 'Africa/Bangui';
        $createMeetingArray['password']       = !empty($dataAPi['password']) ? $dataAPi['password'] : "";
        $createMeetingArray['duration']       = !empty($dataAPi['duration']) ? $dataAPi['duration'] : 60;

        $createMeetingArray['settings'] = array(
            'join_before_host'                => !empty($dataAPi['join_before_host']) ? true : false,
            'host_video'                      => !empty($dataAPi['option_host_video']) ? true : false,
            'participant_video'               => !empty($dataAPi['option_participant_video']) ? true : false,
            'mute_upon_entry'                 => !empty($dataAPi['option_enfore_login']) ? true : false,
            'enforce_login'                   => !empty($dataAPi['option_enforce_login']) ? true : false,
            'auto_recording'                  => !empty($dataAPi['option_auto_recording']) ? $dataAPi['option_auto_recording'] : false,
            'alternative_hosts'               => isset($alternative_hosts_id) ? $alternative_hosts_id : "",
        );

        return $this->sendRequest($createMeetingArray);
    }

    // function to send request
    public function sendRequest($dataAPi)
    {
        $request_url = "https://api.zoom.us/v2/users/akpeledavidprogress@gmail.com/meetings";

        $header = array(
            "authorization: Bearer ".$this->generateJWTkey(),
            "content-type: application/json",
            "Accept: application/json", 
        );

        $postField =json_encode($dataAPi);

        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL =>$request_url,
            CURLOPT_RETURNTRANSFER=> true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS=>10,
            CURLOPT_TIMEOUT=>30,
            CURLOPT_HTTP_VERSION=>CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST=> "POST",
            CURLOPT_POSTFIELDS=> $postField,
            CURLOPT_HTTPHEADER=> $header,
        ));

        $response = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);
        if(!$response){
            return $err;
        }
        return json_decode($response);
    }
}
