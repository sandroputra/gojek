<?php
function curl($url, $fields = null, $headers = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        if ($fields !== null) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        }
        if ($headers !== null) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }
        $result   = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        return array(
            $result,
            $httpcode
        );
	}

function curlget($url, $fields = null, $headers = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
       	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        if ($fields !== null) {
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

function curz($url, $fields = null, $headers = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        if ($fields !== null) {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        }
        if ($headers !== null) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }
        $result   = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        return array(
            $result,
            $httpcode
        );
	}

function curq($url, $fields = null, $headers = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        if ($fields !== null) {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

function getHeaders($result)
    {

        if (!preg_match_all('/([A-Za-z\-]{1,})\:(.*)\\r/', $result, $matches) 
                || !isset($matches[1], $matches[2])){
            return false;
        }

        $headers = [];

        foreach ($matches[1] as $index => $key){
            $headers[$key] = $matches[2][$index];
        }

        return $headers;
    }

echo "=========================================================================================================================================================================\n";
echo "
 ██████╗  ██████╗      ██╗███████╗██╗  ██╗     █████╗ ██╗   ██╗████████╗ ██████╗ ███╗   ███╗ █████╗ ████████╗██╗ ██████╗ ███╗   ██╗    ██████╗  ██████╗ ████████╗███████╗
██╔════╝ ██╔═══██╗     ██║██╔════╝██║ ██╔╝    ██╔══██╗██║   ██║╚══██╔══╝██╔═══██╗████╗ ████║██╔══██╗╚══██╔══╝██║██╔═══██╗████╗  ██║    ██╔══██╗██╔═══██╗╚══██╔══╝██╔════╝
██║  ███╗██║   ██║     ██║█████╗  █████╔╝     ███████║██║   ██║   ██║   ██║   ██║██╔████╔██║███████║   ██║   ██║██║   ██║██╔██╗ ██║    ██████╔╝██║   ██║   ██║   ███████╗
██║   ██║██║   ██║██   ██║██╔══╝  ██╔═██╗     ██╔══██║██║   ██║   ██║   ██║   ██║██║╚██╔╝██║██╔══██║   ██║   ██║██║   ██║██║╚██╗██║    ██╔══██╗██║   ██║   ██║   ╚════██║
╚██████╔╝╚██████╔╝╚█████╔╝███████╗██║  ██╗    ██║  ██║╚██████╔╝   ██║   ╚██████╔╝██║ ╚═╝ ██║██║  ██║   ██║   ██║╚██████╔╝██║ ╚████║    ██████╔╝╚██████╔╝   ██║   ███████║
 ╚═════╝  ╚═════╝  ╚════╝ ╚══════╝╚═╝  ╚═╝    ╚═╝  ╚═╝ ╚═════╝    ╚═╝    ╚═════╝ ╚═╝     ╚═╝╚═╝  ╚═╝   ╚═╝   ╚═╝ ╚═════╝ ╚═╝  ╚═══╝    ╚═════╝  ╚═════╝    ╚═╝   ╚══════╝
                                                                                                                                                                         
";
echo "									 =+CODE By @Sandro.putraa+=												\n";
echo "								   	#* ACCOUNT MANAGE VERSION *#												\n";
echo "=========================================================================================================================================================================\n";


iki_menu:
echo"\n
####################
1. Info akun
2. Transfer Gopay
3. Ganti Nomor
4. Claim Voucher
5. Buy Voucher ( batch_id Manual )
6. Perbarui Authorization Token
7. Cek History Pembelian
8. Cek Inbox
9. Cek Voucher
10. Cek Misi
11. Exit
####################\n";

// OJO DI EDIT

$secret = '83415d06-ec4e-11e6-a41b-6c40088ab51e';

$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'X-AppVersion: 3.27.0';
$headers[] = "X-Uniqueid: ac94e5d0e7f3f".rand(111,999);
$headers[] = 'X-Location: -6.986531,110.413165';
$filename = "toket.txt";
$aksi = file_get_contents($filename);

//OJO DI EDIT



echo "Select Features: ";
$menu = trim(fgets(STDIN));
while($menu!=1 AND $menu!=2 AND $menu!=3 AND $menu!=4 AND $menu!=5 AND $menu!=6 AND $menu!=7 AND $menu!=8 AND $menu!=9 AND $menu!=10 AND $menu!=11);
if($menu==1){
     	echo "Info Akun\n\n";
		$headers[] = 'Authorization: Bearer '.$aksi.'';
		$cekprof = curlget('https://api.gojekapi.com:443/gojek/v2/customer', null, $headers);
		$cekpros = json_decode($cekprof);

		$cekwallet = curlget('https://api.gojekapi.com:443/wallet/profile', null, $headers);
		$cekwallets = json_decode($cekwallet);

		$cek_id = $cekpros->customer->id;
		$cek_name = $cekpros->customer->name;
		$cek_email = $cekpros->customer->email;
		$cek_phone = $cekpros->customer->phone;
		$cek_created = $cekpros->customer->created_at;
		$cek_balance = $cekwallets->data->balance;

		echo "ID 		: ".$cek_id."\n";
		echo "Name 		: ".$cek_name."\n";
		echo "Email 		: ".$cek_email."\n";
		echo "Phone 		: ".$cek_phone."\n";
		echo "created 	: ".$cek_created."\n\n";
		echo "Sisa Saldo  	: Rp ".$cek_balance."\n";
		goto iki_menu;

}
if($menu==2){
     	echo "Transfer Gopay\n";

     	echo "Input Phone Number Target : ";
		$num = trim(fgets(STDIN));

		echo "Input Nominal Transfer : ";
		$nom = trim(fgets(STDIN));

		echo "Input Pin Gopay : ";
		$pin = trim(fgets(STDIN));


		$headers[] = 'Authorization: Bearer '.$aksi.'';
		$login = curl('https://api.gojekapi.com/wallet/qr-code?phone_number=%2B62'.$num.'', null, $headers);
		$logins = json_decode($login[0]);
		$qr_id = $logins->data->qr_id;

		$headers[] = 'pin: '.$pin.'';
		$proses = curl('https://api.gojekapi.com:443/v2/fund/transfer','{"amount":"'.$nom.'","description":"”TEST BOT @sandro.putraa","qr_id":"'.$qr_id.'"}', $headers);
		$prosess = json_decode($proses[0]);
		print_r($proses);
		goto iki_menu;
     
}
if($menu==3){
     
     	echo "Ganti Nomor\n";

     	echo "PIN: ";
		$pin = trim(fgets(STDIN));

		echo "Nomer US: ";
		$usa = trim(fgets(STDIN));

		$headers[] = 'Authorization: Bearer '.$aksi.'';
		$gas = curz('https://api.gojekapi.com/v4/customers', '{"email":"'.$verifs->data->email_address.'","name":"'.$verifs->data->name.'","phone":"+'.$usa.'"}', $headers);
		$gasx = json_decode($gas[0]);
		if ($gasx->success == false) {
		$headers[] = 'pin: '.$pin;
		$gac = curq('https://api.gojekapi.com/v4/customers', '{"email":"'.$verifs->data->email_address.'","name":"'.$verifs->data->name.'","phone":"+'.$usa.'"}', $headers);
		$gacc = getHeaders($gac);
		array_pop($headers);
		$info = curl('https://api.gojekapi.com/gojek/v2/customer', null, $headers);
		$infos = json_decode($info[0]);
		$idx = $infos->customer->id;
		echo "OTP US: ";
		$ppx = trim(fgets(STDIN));
		$headers[] = 'GPToken: '.$gacc['GPToken'];
		$gad = curl('https://api.gojekapi.com/v4/customer/verificationUpdateProfile', '{"id":"'.$idx.'","phone":"+'.$usa.'","verificationCode":"'.$ppx.'"}', $headers);
		$gads = json_decode($gad[0]);
		echo "\n";
		print_r($gads);
	}


		goto iki_menu;
     
}
if($menu==4){
     
     	echo "Claim Voucher\n";
     	echo "Masukan Voucher: ";
		$pocer = trim(fgets(STDIN));
		$headers[] = 'Authorization: Bearer '.$aksi.'';
		$pocers = curl('https://api.gojekapi.com/go-promotions/v1/promotions/enrollments', '{
	"promo_code":"'.$pocer.'"
}', $headers);
		$pocerss = json_decode($pocers[0]);
		print_r($pocerss);
		goto iki_menu;
     
}
if($menu==5){
     
     	echo "Buy Voucher\n";

     	echo "Coming soon ngantuk aku :v\n";
     
}
if($menu==6){

		echo "Perbarui Authorization Token\n";

		echo "Nomer HP: ";
		$number = trim(fgets(STDIN));
		$numbers = $number[0].$number[1];
		if ($numbers == "08") $number = str_replace("08","628",$number);
		$login = curl('https://api.gojekapi.com/v3/customers/login_with_phone', '{"phone":"+'.$number.'"}', $headers);
		$logins = json_decode($login[0]);
		if ($logins->success !== true) die("Nomor belum terdaftar!");

		echo "OTP: ";
		$otp = trim(fgets(STDIN));
		$verif = curl('https://api.gojekapi.com/v3/customers/token', '{"scopes":"gojek:customer:transaction gojek:customer:readonly","grant_type":"password","login_token":"'.$logins->data->login_token.'","otp":"'.$otp.'","client_id":"gojek:cons:android","client_secret":"'.$secret.'"}', $headers);
		$verifs = json_decode($verif[0]);
		if($verifs->success !== true) die("OTP salah!");
		$token = $verifs->data->access_token;
		echo $token;
		$file = fopen("toket.txt","w");
		echo fwrite($file, $token);
		fclose($file);
		goto iki_menu;

}
if($menu==7){
		echo "Cek History Pembelian\n\n";

		$headers[] = 'Authorization: Bearer '.$aksi.'';
		$cekbeli = curlget('https://api.gojekapi.com:443/wallet/history?page=1&limit=1', null, $headers);
		$cekbelii = json_decode($cekbeli);

		$cek_status = $cekbelii->data->success[0]->status;
		$cek_amount = $cekbelii->data->success[0]->amount;
		$cek_transacted = $cekbelii->data->success[0]->transacted_at;
		$cek_description = $cekbelii->data->success[0]->description;
		$cek_after = $cekbelii->data->success[0]->effective_balance_after_transaction;

		echo "Status 							: ".$cek_status."\n";
		echo "Amount							: ".$cek_amount."\n";
		echo "Transacted_at 						: ".$cek_transacted."\n";
		echo "Description 						: ".$cek_description."\n";
		echo "Balance_after_transaction 				: ".$cek_after."\n\n";
		goto iki_menu;

}
if($menu==8){
		echo "Cek Inbox\n\n";

		$headers[] = 'Authorization: Bearer '.$aksi.'';
		$cekmesage= curlget('https://api.gojekapi.com:443/v1/user/messages?page=1&limit=3', null, $headers);
		$inboxx = json_decode($cekmesage);
		$inboxxx = $inboxx->data->messages[0]->body->message;
		print_r($inboxxx);
		goto iki_menu;

	
}
if($menu==9){
	echo "Cek Voucher\n\n";

		$headers[] = 'Authorization: Bearer '.$aksi.'';
		$ceklistvoc= curlget('https://api.gojekapi.com:443/gopoints/v3/wallet/vouchers?limit=1&page=1', null, $headers);
		$voclist = json_decode($ceklistvoc);

		$voclistx = $voclist->voucher_stats->total_vouchers;
		$voclistxx = $voclist->voucher_stats->expiring_soon;
		$voclistxxx = $voclist->voucher_stats->expiring_in_days;
		$voclistxxxx = $voclist->data[0]->title;

		echo "Info Voucher\n\n";

		echo "Total_vouchers 		: ".$voclistx." Voucher\n";
		echo "Expiring_soon	 	: ".$voclistxx." Voucher\n";
		echo "Expiring_in_days 	: ".$voclistxxx." days\n\n";

		echo "Voucher Teratas 	: ".$voclistxxxx."";
		goto iki_menu;
	
}
if($menu==10){

		echo "Cek Misi\n\n";

		$headers[] = 'Authorization: Bearer '.$aksi.'';
		$cekmisi= curlget('https://api.gojekapi.com:443/gobenefits/v1/journeys', null, $headers);
		$cekmisis = json_decode($cekmisi);

		$cek_desc = $cekmisis->data->history_journeys[0]->description;
		$cek_duit = $cekmisis->data->history_journeys[0]->total_reward_info;
		//$voclistxx = $voclist->voucher_stats->expiring_soon;

		echo "Reward 		: ".$cek_duit."\n";
		echo "Description 	: ".$cek_desc."\n";

		//echo "Total_vouchers 		: ".$voclistx." Voucher\n";

		goto iki_menu;
	
}
if($menu==11){
	
}
