<?php
function amhssh_MetaData()
{
    return array(
        'DisplayName' => 'AMHSSH',
        'APIVersion' => '1.1', // Use API Version 1.1
        'RequiresServer' => true, // Set true if module requires a server to work
        'DefaultNonSSLPort' => '8888', // Default Non-SSL Connection Port
        'DefaultSSLPort' => '8888', // Default SSL Connection Port
    );
}
function amhssh_CreateAccount($params){
    $server = $params["server"]; # True if linked to a server
    $serverid = $params["serverid"];
    $serverip = $params["serverip"];
    $serverusername = $params["serverusername"];
    $serverpassword = $params["serverpassword"];
    $serveraccesshash = $params["serveraccesshash"];
    $serversecure = $params["serversecure"]; # If set, SSL Mode is enabled in the server config
	$username = $params['customfields']['Username'];
	$password = $params["password"];
    $serviceid = $params["serviceid"];
    $url = "http://".$serverip.":".$params["serverport"]."/index.php?c=amapi&a=call";
    $amh_cmd = "amh module BBShijieSSH-1.0 admin add,".$serviceid.",".$password;
    $data = "amapi_pass=" . $serveraccesshash . "&amh_cmd=" . base64_encode($amh_cmd);

    // Send the query to the pptp master

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $data = curl_exec($ch);
    curl_close($ch);
		$result = "success";
	return $result;
}
function amhssh_UnsuspendAccount($params){
    $server = $params["server"]; # True if linked to a server
    $serverid = $params["serverid"];
    $serverip = $params["serverip"];
    $serverusername = $params["serverusername"];
    $serverpassword = $params["serverpassword"];
    $serveraccesshash = $params["serveraccesshash"];
    $serversecure = $params["serversecure"]; # If set, SSL Mode is enabled in the server config
	$username = $params['customfields']['Username'];
	$password = $params["password"];
    $serviceid = $params["serviceid"];
    $url = "http://".$serverip.":".$params["serverport"]."/index.php?c=amapi&a=call";
    $amh_cmd = "amh module BBShijieSSH-1.0 admin add,".$serviceid.",".$password;
    $data = "amapi_pass=" . $serveraccesshash . "&amh_cmd=" . base64_encode($amh_cmd);

    // Send the query to the pptp master

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $data = curl_exec($ch);
    curl_close($ch);
		$result = "success";
	return $result;
}
function amhssh_SuspendAccount($params){
    $server = $params["server"]; # True if linked to a server
    $serverid = $params["serverid"];
    $serverip = $params["serverip"];
    $serverusername = $params["serverusername"];
    $serverpassword = $params["serverpassword"];
    $serveraccesshash = $params["serveraccesshash"];
    $serversecure = $params["serversecure"]; # If set, SSL Mode is enabled in the server config
	$username = $params['customfields']['Username'];
	$password = $params["password"];
    $serviceid = $params["serviceid"];
    $url = "http://".$serverip.":".$params["serverport"]."/index.php?c=amapi&a=call";
    $amh_cmd = "amh module BBShijieSSH-1.0 admin del,".$serviceid;
    $data = "amapi_pass=" . $serveraccesshash . "&amh_cmd=" . base64_encode($amh_cmd);

    // Send the query to the pptp master

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $data = curl_exec($ch);
    curl_close($ch);
		$result = "success";
	return $result;
}
function amhssh_TerminateAccount($params){
    $server = $params["server"]; # True if linked to a server
    $serverid = $params["serverid"];
    $serverip = $params["serverip"];
    $serverusername = $params["serverusername"];
    $serverpassword = $params["serverpassword"];
    $serveraccesshash = $params["serveraccesshash"];
    $serversecure = $params["serversecure"]; # If set, SSL Mode is enabled in the server config
	$username = $params['customfields']['Username'];
	$password = $params["password"];
    $serviceid = $params["serviceid"];
    $url = "http://".$serverip.":".$params["serverport"]."/index.php?c=amapi&a=call";
    $amh_cmd = "amh module BBShijieSSH-1.0 admin del,".$serviceid;
    $data = "amapi_pass=" . $serveraccesshash . "&amh_cmd=" . base64_encode($amh_cmd);

    // Send the query to the pptp master

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $data = curl_exec($ch);
    curl_close($ch);
		$result = "success";
	return $result;
}
function amhssh_ChangePassword($params){
    $server = $params["server"]; # True if linked to a server
    $serverid = $params["serverid"];
    $serverip = $params["serverip"];
    $serverusername = $params["serverusername"];
    $serverpassword = $params["serverpassword"];
    $serveraccesshash = $params["serveraccesshash"];
    $serversecure = $params["serversecure"]; # If set, SSL Mode is enabled in the server config
	$username = $params['customfields']['Username'];
	$password = $params["password"];
    $serviceid = $params["serviceid"];
    $url = "http://".$serverip.":".$params["serverport"]."/index.php?c=amapi&a=call";
    $amh_cmd = "amh module BBShijieSSH-1.0 admin edit,".$serviceid.",".$password;
    $data = "amapi_pass=" . $serveraccesshash . "&amh_cmd=" . base64_encode($amh_cmd);

    // Send the query to the pptp master

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $data = curl_exec($ch);
    curl_close($ch);
		$result = "success";
	return $result;
}
function amhssh_ClientArea($params) {
    	$html = "
    	<div class=\"row\">
			<div class=\"col-sm-4\"></div>
			<div class=\"col-sm-8\">
			<div class=\"panel-collapse collapse in\">
				<table class=\"table table-bordered table-hover tc-table\">
					<tbody>
						<tr>
							<td>流量限制</td><td>无限制</td>
						</tr>
						<tr>
						    <td>SSH端口</td><td>22</td>
						</tr>
						<tr>
							<td>SSH用户名</td><td>tizi{$params['serviceid']}</td>
						</tr>
						<tr>
							<td>SSH密码</td><td>{$params['password']}</td>
						</tr>
						<tr>
							<td>SSH连接IP</td><td>{$params['serverip']}</td>
						</tr>
					</tbody>
				</table>
				</div>
			</div>
		</div>
    	";
        return $html;
}
?>