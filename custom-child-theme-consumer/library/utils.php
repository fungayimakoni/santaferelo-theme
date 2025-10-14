<?php 

if(!function_exists('get_phone')){
    function get_phone()
    {
        if (function_exists('geoip_detect2_get_info_from_current_ip')) {
            $ret_phone = [];
            $record = geoip_detect2_get_info_from_ip( geoip_detect2_get_client_ip(), NULL );
            $phone = '+44 (0)20 961 4141';
           
            foreach( get_field('country_items', 'options') as $item ):
                if($record->country->isoCode == $item['country'] ):
                    $phone = $item['phone_number'];
                    break;
                endif;
    
            endforeach;
    
            $sphone = preg_replace('/\s+/', '', $phone);
            $sphone = preg_replace('/\(|\)/', '', $sphone);
            $ret_phone['display-tel'] = $phone;
            $ret_phone['tel'] = $sphone;
            return $ret_phone;
        }
    }
}
if(!function_exists('is_allowed_country')){
    function is_allowed_country(array $allowed=[])
    {
        if(count($allowed)<1) return FALSE;
        $current = geoip_detect2_get_info_from_ip( geoip_detect2_get_client_ip(), NULL );
        foreach($allowed as $code){
            if(strtoupper($code) == $current->country->isoCode) return TRUE;
        }
        return FALSE;
    }
}
if(!function_exists('get_country')){
    function get_country(){
        // $ip = geoip_detect2_get_client_ip();
        // $current = geoip_detect2_get_info_from_current_ip( $ip );
        // return $current->country->isoCode;  
         return get_visitor_country_code();
    }
    

}

