<?php
// PROJECT INI DI MULAI DENGAN DO'A
// PROJCET INI BERSISI HARAPAN DARI SEBUAH IMPIAN CAN CITA-CITA 
// SEORANG ANAK KAMPUNG YANG MENCOBA MELAMPAUI BATAS DIRINYA

// WARNING HARAP DI BACA WAHAI ICHO ISHAMASHI !!!
// RISIKO MENJADI PROGRAMMER !!!
// DI AWAL KARIR, PROGRAMMER AKAN MENGALAMI STRESS YANG CUKUP BERAT
// KEMUNGKINANNYA RAMBUT RONTOK ATAU MUKA BERJERAWAT (ITU NORMAL)
// ELON MUSK JUGA DULU BOTAK KOK, SETELAH SUKSES RAMBUTNYA NUMBUH
// JERAWAT BISA HILNAG, RAMBUT BISA TUMBUH

// SEMANGAT. !!!!
// KATA IBU GUA MASIH 20 TAHUN. JADI JANGAN TERLALU MIKIRIN PEREMPUAN
// MASIH WAKTUNYA BELAJAR, KARENA GAK BISA KULIAH, JADI BELAJAR LANGSUNG
// DARI PENGALAMAN, DARI KESALAHAN DAN DARI SIKAP BERANI MENCOBA


require __DIR__ . '/vendor/autoload.php';

if (php_sapi_name() != 'cli') {
    throw new Exception('This application must be run on the command line.');
}

/**
 * Returns an authorized API client.
 * @return Google_Client the authorized client object
 */
function getClient()
{
    $client = new Google_Client();
    $client->setApplicationName('Google Drive API PHP Quickstart');
    $client->setScopes(Google_Service_Drive::DRIVE_METADATA_READONLY);
    $client->setAuthConfig('credentials.json');
    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');

    // Load previously authorized token from a file, if it exists.
    // The file token.json stores the user's access and refresh tokens, and is
    // created automatically when the authorization flow completes for the first
    // time.
    $tokenPath = 'token.json';
    if (file_exists($tokenPath)) {
        $accessToken = json_decode(file_get_contents($tokenPath), true);
        $client->setAccessToken($accessToken);
    }

    // If there is no previous token or it's expired.
    if ($client->isAccessTokenExpired()) {
        // Refresh the token if possible, else fetch a new one.
        if ($client->getRefreshToken()) {
            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
        } else {
            // Request authorization from the user.
            $authUrl = $client->createAuthUrl();
            printf("Open the following link in your browser:\n%s\n", $authUrl);
            print 'Enter verification code: ';
            $authCode = trim(fgets(STDIN));

            // Exchange authorization code for an access token.
            $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
            $client->setAccessToken($accessToken);

            // Check to see if there was an error.
            if (array_key_exists('error', $accessToken)) {
                throw new Exception(join(', ', $accessToken));
            }
        }
        // Save the token to a file.
        if (!file_exists(dirname($tokenPath))) {
            mkdir(dirname($tokenPath), 0700, true);
        }
        file_put_contents($tokenPath, json_encode($client->getAccessToken()));
    }
    return $client;
}


// Get the API client and construct the service object.
$client = getClient();
$service = new Google_Service_Drive($client);

// Print the names and IDs for up to 10 files.
$optParams = array(
  'pageSize' => 10,
  'fields' => 'nextPageToken, files(id, name)'
);
$results = $service->files->listFiles($optParams);

if (count($results->getFiles()) == 0) {
    print "No files found.\n";
} else {
    print "Files:\n";
    foreach ($results->getFiles() as $file) {
        printf("%s (%s)\n", $file->getName(), $file->getId());
    }
}