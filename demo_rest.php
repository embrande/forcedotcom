<?php
    session_start();

    function show_campaigns($instance_url, $parent_id){
        echo $instance_url;
        $query = "SELECT 
                        Status,
                        StartDate, 
                        Registration_Start_Date__c, 
                        Event_Capacity__c, 
                        Event_Spaces_Left__c, 
                        EndDate, 
                        Start_Time__c, 
                        End_Time__c, 
                        Name, 
                        ID  
                    from Campaign 
                    where ParentId = $parent_id
                    and StartDate = NEXT_N_DAYS:365";
        $url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);
        $return_values = array();

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
                array("Authorization: OAuth $access_token"));

        $json_response = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($json_response, true);

        $total_size = $response['totalSize'];

        foreach ((array) $response['records'] as $record) {
            $array_inner = array();
            $array_inner['Id'] = $record['Id'];
            $array_inner['Name'] = $record['Name'];
            $array_inner['Registration_Start_Date__c'] = $record['Registration_Start_Date__c'];
            $array_inner['Event_Capacity__c'] = $record['Event_Capacity__c'];
            $array_inner['Event_Spaces_Left__c'] = $record['Event_Spaces_Left__c'];
            $array_inner['StartDate'] = $record['StartDate'];
            $array_inner['EndDate'] = $record['EndDate'];
            $array_inner['Start_Time__c'] = $record['Start_Time__c'];
            $array_inner['End_Time__c'] = $record['End_Time__c'];
            $array_inner['Status'] = $record['Status'];
            
            array_push( $return_values,  $array_inner );
        }
        


        return json_encode( $return_values );


    }

    function show_accounts($instance_url, $access_token) {
        $query = "SELECT Name, Id from Account LIMIT 100";
        $url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
                array("Authorization: OAuth $access_token"));

        $json_response = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($json_response, true);

        $total_size = $response['totalSize'];

        echo "$total_size record(s) returned<br/><br/>";
        foreach ((array) $response['records'] as $record) {
            echo $record['Id'] . ", " . $record['Name'] . "<br/>";
        }
        echo "<br/>";
    }

    function create_account($name, $instance_url, $access_token) {
        $url = "$instance_url/services/data/v20.0/sobjects/Account/";

        $content = json_encode(array("Name" => $name));

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
                array("Authorization: OAuth $access_token",
                    "Content-type: application/json"));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

        $json_response = curl_exec($curl);

        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ( $status != 201 ) {
            die("Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
        }
        
        echo "HTTP status $status creating account<br/><br/>";

        curl_close($curl);

        $response = json_decode($json_response, true);

        $id = $response["id"];

        echo "New record id $id<br/><br/>";

        return $id;
    }

    function find_account($first_name, $last_name, $email){

        //get account based on 

    }

    function show_account($id, $instance_url, $access_token) {
        $url = "$instance_url/services/data/v20.0/sobjects/Account/$id";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
                array("Authorization: OAuth $access_token"));

        $json_response = curl_exec($curl);

        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ( $status != 200 ) {
            die("Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
        }

        echo "HTTP status $status reading account<br/><br/>";

        curl_close($curl);

        $response = json_decode($json_response, true);

        foreach ((array) $response as $key => $value) {
            echo "$key:$value<br/>";
        }
        echo "<br/>";
    }

    function update_account($id, $new_name, $city, $instance_url, $access_token) {
        $url = "$instance_url/services/data/v20.0/sobjects/Account/$id";

        $content = json_encode(array("Name" => $new_name, "BillingCity" => $city));

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
                array("Authorization: OAuth $access_token",
                    "Content-type: application/json"));
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PATCH");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

        curl_exec($curl);

        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ( $status != 204 ) {
            die("Error: call to URL $url failed with status $status, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
        }

        echo "HTTP status $status updating account<br/><br/>";

        curl_close($curl);
    }

    function delete_account($id, $instance_url, $access_token) {
        $url = "$instance_url/services/data/v20.0/sobjects/Account/$id";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
                array("Authorization: OAuth $access_token"));
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");

        curl_exec($curl);

        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ( $status != 204 ) {
            die("Error: call to URL $url failed with status $status, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
        }

        echo "HTTP status $status deleting account<br/><br/>";

        curl_close($curl);
    }
?>

<?php
    require_once 'content.php';
?>
