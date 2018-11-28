<?php
    
    /*
    * Funcion principal de llamado a la api
    * Retorna un Json con el resultado de la llamada.
    */
    function getFromApi($identifier)
    {
        
        $base_url = 'http://127.0.0.1:8000/api/';
        
        $service_url = $base_url . $identifier; 

        $curl = curl_init($service_url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $curl_response = curl_exec($curl);
        
        if ($curl_response === false)
        {
            $info = curl_getinfo($curl);
            curl_close($curl);
            die('error occured during curl exec. Additioanl info: ' . var_export($info));
        }
        
        curl_close($curl);
        $decoded = json_decode($curl_response);
        
        if (isset($decoded->response->status) && $decoded->response->status == 'ERROR')
        {
            die('error occured: ' . $decoded->response->errormessage);
        }

        if(isset($decoded->data))
        {
            return $decoded->data;
        }

        return $decoded;
    }

    function preloadCheckin()
    {
        $GLOBALS["checkin"] = getFromApi("checkin/");
    }
?>
