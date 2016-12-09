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
        $this->X_HOST = config('FHIRConfig.oxygen8_host') ? config('FHIRConfig.oxygen8_host') : "relay.evolve.oxygen8.com";
        $this->X_URL = config('FHIRConfig.oxygen8_url') ? config('FHIRConfig.oxygen8_url') : "/GPOnline";
        $this->X_PORT = config('FHIRConfig.oxygen8_port') ? config('FHIRConfig.oxygen8_port') : "9126";
        $this->X_USERNAME = config('FHIRConfig.oxygen8_username') ? config('FHIRConfig.oxygen8_username') : "GPOnline";
        $this->X_PASSWORD = config('FHIRConfig.oxygen8_password') ? config('FHIRConfig.oxygen8_password') : "hjg876t4g";
        $this->s_POST_DATA['Channel'] = "BULK";
        // $s_POST_DATA .= "&Shortcode=12345";
        // $s_POST_DATA .= "&SourceReference=3456";


        // $s_POST_DATA .= "&DataType=0";
        $this->s_POST_DATA['Premium'] = 0;
//        $this->s_POST_DATA .= "&CampaignID=4321";
    }

    public function send( $message, $phone )
    {
        $this->s_POST_DATA['MSISDN'] = str_replace( "-", "", $phone );
        $this->s_POST_DATA['Content'] = $message;
        $post = http_build_query( $this->s_POST_DATA );

        $success = true;
        if ( $phone ) {

            if ( function_exists( 'curl_init' ) ) {

                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, "https://relay.evolve.oxygen8.com:9126/GPOnline");
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

        return $success;
    }
}
