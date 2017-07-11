<?php
    session_start();
	function restfullApexCall( $JSON_string, $instance_url, $access_token ){
        $url = "$instance_url/services/apexrest/CreateContactOpportunityCampaignMember/v1/";
	
        $content = json_encode($JSON_string);
		
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

        curl_close($curl);

        // $response = json_decode($json_response, true);
		$response = $json_response;
		
		return $response;
	}
    function show_campaigns($instance_url, $parent_id, $access_token){
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
                    where ParentId = '$parent_id'
                    and StartDate = NEXT_N_DAYS:365";
        $url = "$instance_url/services/data/v29.0/query?q=" . urlencode($query);
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

    function create_account($fields, $instance_url, $access_token) {
        $url = "$instance_url/services/data/v20.0/sobjects/Account/";
	
        $content = json_encode($fields);

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

        curl_close($curl);

        $response = json_decode($json_response, true);

        $id = $response["id"];

        return $id;
    }
	
	function create_contact($fields, $instance_url, $access_token) {
        $url = "$instance_url/services/data/v20.0/sobjects/Contact/";
	
        $content = json_encode($fields);

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

        curl_close($curl);

        $response = json_decode($json_response, true);

        $id = $response["id"];

        return $id;
    }

    function describe_opportunity($instance_url, $access_token){
       $url =  '$instance_url/services/data/v29.0/sobjects/Opportunity/describe';
       $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
                array("Authorization: OAuth $access_token"));

        $json_response = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($json_response, true);

        return json_encode($response);

    }

    function create_opportunity($variables,  $instance_url, $access_token) {
        $url = "$instance_url/services/data/v20.0/sobjects/Opportunity/";
        $field_array = array();
        
        // loop through $variables
            // place into field array as field - value pairs
            // $field_array['field'] = value;
        // end loop
        $content = json_encode($variables);

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

        curl_close($curl);

        $response = json_decode($json_response, true);

        $id = $response["id"];

        return $id;
    }

    function find_account($first_name, $last_name, $email, $instance_url, $access_token){

        //get account based on 
        $query = "SELECT id, LastName from Contact where FirstName = '$first_name' and LastName = '$last_name' and Email = '$email'";
        $url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);
        $return_value = array();

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
                array("Authorization: OAuth $access_token"));

        $json_response = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($json_response, true);
        $return_value['totalSize'] = $response['totalSize'];
        if( $return_value['totalSize'] > 0 ){
			foreach ((array) $response['records'] as $record) {
				// get id of first record
				$return_value['Id'] = $record['Id'];
			}
		}

        return json_encode($return_value);
    }
	
	function find_campaign( $contact, $campaign, $instance_url, $access_token ){
		
        $query = "Select id, Status, CampaignId from CampaignMember where ContactId = '$contact' and CampaignId = '$campaign'";
        $url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);
        $return_value = array();

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
                array("Authorization: OAuth $access_token"));

        $json_response = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($json_response, true);
        $return_value['totalSize'] = $response['totalSize'];
		
		if( $return_value['totalSize'] > 0 ){
			foreach ((array) $response['records'] as $record) {
				// get id of first record
				$return_value['Id'] = $record['Id'];
			}
		}
		
        return json_encode($return_value);
		
	}
	
	function campaign_update( $campaignMemberID, $instance_url, $access_token ){
		$url = "$instance_url/services/data/v20.0/sobjects/CampaignMember/$campaignMemberID";
    
        $content = json_encode(array("Status"=>"Registered"));

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

        curl_close($curl);
	}
	function campaign_add_to( $fields, $instance_url, $access_token){
		$url = "$instance_url/services/data/v20.0/sobjects/CampaignMember/";
	
        $content = json_encode($fields);

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

        curl_close($curl);
		
	}
    function find_opportunity( $contact, $instance_url, $access_token ){

        $query = "SELECT Id from Opportunity where Contact__c = $contact and
            Institution_Prospect__c = 'IUINA' and Career_Prospect__c != 'GRAD'";
        $url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);
        $return_value = array();

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
                array("Authorization: OAuth $access_token"));

        $json_response = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($json_response, true);
        $return_value['totalSize'] = $response['totalSize'];

        return json_encode( $return_value['totalSize'] );

    }
    
    
?>

<?php
    require_once 'content2.php';
?>
