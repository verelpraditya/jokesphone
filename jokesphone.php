<?php

function random($length, $a)
    {
        $str = "";
        if ($a == 0) {
            $characters = array_merge(range('0', '9'));
        } elseif ($a == 1) {
            $characters = array_merge(range('a', 'z'));
        } elseif ($a == 2) {
            $characters = array_merge(range('A', 'Z'));
        } elseif ($a == 3) {
            $characters = array_merge(range('0', '9'), range('a', 'z'));
        } elseif ($a == 4) {
            $characters = array_merge(range('0', '9'), range('A', 'Z'));
        } elseif ($a == 5) {
            $characters = array_merge(range('a', 'z'), range('A', 'Z'));
        } elseif ($a == 6) {
            $characters = array_merge(range('0', '9'), range('a', 'z'), range('A', 'Z'));
        }
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }

    


function create($did, $imsi){
    // $param = "{\"memberToken\":\"\",\"receivers\":\"$no\"}";     
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://master.appha.es:8080/lua/jokesphone/user/create.lua");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '{"uv":"jokesphone","dtype":"adr","did":"'.$did.'@jokesphone","tags":{"mf":"google","m":"G011A","d":"G011A","mcc":510,"mnc":1,"r":"5.1.1","v":"1.1.171019.73","l":"in_ID","c":"ID","h":1280,"w":720,"cpu":"x86","platform":"gplay","aid":"'.$did.'"},"root":true,"imeiex":false,"imsi":"'.$imsi.'","version":"1.1.171019.73","version_num":73}');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36');

        $headers = array();
        $headers[] = 'Content-Length:355';
        $headers[] = 'Content-Type:application/json';
        // $headers[] = 'Content-Length:428';
        $headers[] = 'Host:master.appha.es:8080';
        $headers[] = 'Connection:Keep-Alive';
        // $headers[] = 'origin: https://www.hotstar.com';
        // $headers[] = 'referer: https://www.hotstar.com/';
        // $headers[] = 'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="96", "Google Chrome";v="96"';
        // $headers[] = 'sec-ch-ua-mobile: ?0';
        // $headers[] = 'sec-ch-ua-platform: "Windows"';
        // $headers[] = 'sec-fetch-dest: empty';
        // $headers[] = 'sec-fetch-mode: cors';
        // $headers[] = 'sec-fetch-site: same-site';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec ($ch);
        return $response;
        curl_close ($ch);
    

    }



function cek($did){
// $param = "{\"memberToken\":\"\",\"receivers\":\"$no\"}";     
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"http://master.appha.es:8080/lua/jokesphone/user/getMembershipInfo");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"did":"cS4536f392d13h76@jokesphone"}');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    // curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36');

    $headers = array();
    $headers[] = 'Content-Length:37';
    $headers[] = 'Content-Type:application/json';
    // $headers[] = 'Content-Length:428';
    $headers[] = 'Host:master.appha.es:8080';
    $headers[] = 'Connection:Keep-Alive';
    // $headers[] = 'origin: https://www.hotstar.com';
    // $headers[] = 'referer: https://www.hotstar.com/';
    // $headers[] = 'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="96", "Google Chrome";v="96"';
    // $headers[] = 'sec-ch-ua-mobile: ?0';
    // $headers[] = 'sec-ch-ua-platform: "Windows"';
    // $headers[] = 'sec-fetch-dest: empty';
    // $headers[] = 'sec-fetch-mode: cors';
    // $headers[] = 'sec-fetch-site: same-site';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec ($ch);
    return $response;
    curl_close ($ch);


}





function reff($did, $kode){
    // $param = "{\"memberToken\":\"\",\"receivers\":\"$no\"}";     
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://master.appha.es:8080/lua/jokesphone/user/addRecommender");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '{"did":"'.$did.'@jokesphone","fat":"'.$kode.'"}');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36');

        $headers = array();
        $headers[] = 'Content-Length: 51';
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Host: master.appha.es:8080';
        $headers[] = 'Connection: Keep-Alive';
        // $headers[] = 'hotstarauth: st=1641126165~exp=1641132165~acl=/*~hmac=381dbbf4e89c34775a9c632989bf1d199a4b9c994f24b3a3d9bab39b018032d2';
        // $headers[] = 'origin: https://www.hotstar.com';
        // $headers[] = 'referer: https://www.hotstar.com/';
        // $headers[] = 'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="96", "Google Chrome";v="96"';
        // $headers[] = 'sec-ch-ua-mobile: ?0';
        // $headers[] = 'sec-ch-ua-platform: "Windows"';
        // $headers[] = 'sec-fetch-dest: empty';
        // $headers[] = 'sec-fetch-mode: cors';
        // $headers[] = 'sec-fetch-site: same-site';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec ($ch);
        return $response;
        curl_close ($ch);
    

    }

    

$banner = "
============================================
    [+] Auto Reff JokesPhone [+]
 Coded by  : Verel Yulianto Praditya
============================================\n";
echo $banner;

    echo "[?] Masukan Reff: ";
    $kode = trim(fgets(STDIN));

    echo "[?] Berapa Banyak: ";
    $jumlah = trim(fgets(STDIN));

    
    for ($i=0; $i < $jumlah ; $i++) { 
        $imsi = random(15, 0);
        $did = random(16, 6);

        echo "[+] Create Akun...\n";
        // sleep(1);
        $create = create($did, $imsi);
        echo $create;

        sleep(1);
        echo "\n[+] Menambah Reff...\n";
        
        $reff = reff($did, $kode);
        echo $reff;
        echo "\n\n";

        sleep(1);

    }





// echo "[+] Username: {$user}\n";
// echo "[+] Pass: {$pass}\n ";
// while (1){
//     $code = random(5,4);
//     echo "Code: {$code}\n";
//     $cek = cek($code);
//     echo $cek."\n\n";
//     sleep(1);
// }
// echo "[+] Regis Berhasil \n";
// $login = login($user, $pass, $device, $ts2);
// echo "[+] Login Berhasil \n";
// var_dump($login);
// $reff = reff($device, $user, $ct);

// // echo "[+] Reff Berhasil \n";
// var_dump($reff);

// for ($x = 1; $x<=$jum; $x++){
// $phd2 = phd2($no);

// $json = json_decode($phd2, true);
// // var_dump($json);
// if($json['code'] == 200){
//             echo "[$x] Sukses\n";
//         }else{
//             echo "[$x] Gagal\n";
//         }
//     }

?>
