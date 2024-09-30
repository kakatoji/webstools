<?php
error_reporting(0);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kunci rahasia dari Google
    $secretKey = "6Lc5DjwqAAAAAJhX9eIGnTh0aLpHpkCMJN36LOob";

    // Mendapatkan response dari reCAPTCHA
    $responseKey = $_POST['g-recaptcha-response'];
    $userIP = $_SERVER['REMOTE_ADDR'];

    // Membuat request ke Google untuk verifikasi
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
    $response = file_get_contents($url);
    $responseKeys = json_decode($response, true);

    // Memeriksa apakah verifikasi berhasil
    if(intval($responseKeys["success"]) !== 1) {
        $error = '<a tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-title="Ceklis dulu recaptcha nya njir" data-bs-content="Coba jangan di paksain,ikutin aturan dong ngab">Ceklis dulu recaptcha nya</a><meta http-equiv="refresh" content="1">';
        $nr = [
            "https://click.a-ads.com/2351446/99079/",
            "https://click.a-ads.com/2351446/158410/",
            "https://click.a-ads.com/2351446/187070/"
            ];
        $mx = array_rand($nr);
        header("Location: {$mx}");
    } else {
        // Verifikasi berhasil, berikan file download
        $error = 0;
    }
}
?>
