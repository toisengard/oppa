<?php
namespace Helper;


class Email
{
    /**
     * Send EMail.
     *
     * @param $to
     * @param $subject
     * @param $body
     */
    public static function send( $to, $subject, $body )
    {
        $headers = [
            'Content-Type: text/html; charset=UTF-8',
            'From: Dalood <info@dalood.com>'
        ];

        wp_mail( $to, $subject, $body, $headers );
    }

    /**
     * Subscribe to Mailchimp.
     *
     * @param $email
     */
    public static function subscribeToMailchimp( $email )
    {
        $list_id      = '376dfd14ab';
        $api_key      = '78aa654237e1266967ae0bcd7d29ab62-us17';

    	$member_id    = md5( strtolower( $email) );
    	$data_center  = substr( $api_key, strpos( $api_key, '-' ) + 1 );

        $url          = 'https://' . $data_center . '.api.mailchimp.com/3.0/lists/' . $list_id . '/members/' . $member_id;

        $content_type = [ 'Content-Type: application/json' ];
    	$json = json_encode( [
            'status'        => 'subscribed',
    		'email_address' => $email
        ] );

    	$ch = curl_init();
    	curl_setopt( $ch, CURLOPT_URL, $url );
    	curl_setopt( $ch, CURLOPT_HTTPHEADER, $content_type );
    	curl_setopt( $ch, CURLOPT_USERPWD, 'webmaster:' . $api_key );
    	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    	curl_setopt( $ch, CURLOPT_TIMEOUT, 300 );
    	curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'PUT' );
    	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
    	curl_setopt( $ch, CURLOPT_POSTFIELDS, $json );
        $result    = curl_exec( $ch );
    	$http_code = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
    	curl_close( $ch );

        return [
    		'http_code' => $http_code,
    		'result'    => $result
    	];
    }
}
