<?php
/**
 * Created by PhpStorm.
 * User: kchapple
 * Date: 11/4/16
 * Time: 11:54 AM
 */
namespace LibreEHR\FHIR\Utilities;

class OxygenSms
{
    protected $X_HOST = null;
    protected $X_URL = null;
    protected $X_PORT = null;
    protected $X_USERNAME = null;
    protected $X_PASSWORD = null;
    protected $s_POST_DATA = array();

    public function __construct()
    {
        $this->X_HOST = config('FHIRConfig.oxygen8_host');
        $this->X_URL = config('FHIRConfig.oxygen8_url');
        $this->X_PORT = config('FHIRConfig.oxygen8_port');
        $this->X_USERNAME = config('FHIRConfig.oxygen8_username');
        $this->X_PASSWORD = config('FHIRConfig.oxygen8_password');
        $this->s_POST_DATA['Channel'] = "BULK";

        // $s_POST_DATA .= "&Shortcode=12345";
        // $s_POST_DATA .= "&SourceReference=3456";
        $this->s_POST_DATA['Mask'] = config('FHIRConfig.oxygen8_sender');

        // $s_POST_DATA .= "&DataType=0";
        $this->s_POST_DATA['Premium'] = 0;
//        $this->s_POST_DATA .= "&CampaignID=4321";
    }

    public function send( $message, $phone )
    {
        $success = true;
        if ( !$this->X_HOST ||
            !$this->X_URL ||
            !$this->X_USERNAME ||
            !$this->X_PASSWORD ) {
            error_log('ERROR: SMS not configured in FHIRConfig.php');
            $success = 'SMS not configured in FHIRConfig.php';
        } else {
            $num = str_replace("-", "", $phone)
            if ( substr( $num, 0, 1 ) === 0 ) {
                $num = trim(config('FHIRConfig.oxygen8_country_code')).ltrim($num, '0');
            }
            $this->s_POST_DATA['MSISDN'] = $num;
            $this->s_POST_DATA['Content'] = $message;
            $post = http_build_query($this->s_POST_DATA);

            if ($phone) {

                if (function_exists('curl_init')) {

                    $ch = curl_init();

                    curl_setopt($ch, CURLOPT_URL, "https://{$this->X_HOST}:{$this->X_PORT}{$this->X_URL}");
                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_POST, 1);
                    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
                    curl_setopt($ch, CURLOPT_USERPWD, $this->X_USERNAME . ":" . $this->X_PASSWORD); //Your credentials goes here
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

                    // receive server response ...
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                    $server_output = curl_exec($ch);

                    if ($server_output == false) {
                        $success = curl_error($ch);
                    }

                    curl_close($ch);

                } else {

                    $success = "SMS requires CURL";
                }

            } else {
                $success = "No phone number in recipient";
            }
        }

        return $success;
    }
}
