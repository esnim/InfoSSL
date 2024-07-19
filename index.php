<?php
require 'InfoSSL.php';

$url = 'https://www.google.com';

$info_ssl = new InfoSSL();

$data = $info_ssl->getInfo($url);

print '<pre>';
print_r($data);
print '</pre>';

// Ejemplo de resultado:
/*
Array
(
    [name] => /CN=www.google.com
    [subject] => Array
        (
            [CN] => www.google.com
        )

    [hash] => dcb02fe2
    [issuer] => Array
        (
            [C] => US
            [O] => Google Trust Services
            [CN] => WR2
        )

    [version] => 2
    [serialNumber] => 53391683869263244847271377780644962349
    [validFrom] => 240624074234Z
    [validTo] => 240916074233Z
    [validFrom_time_t] => 1719211354
    [validTo_time_t] => 1726468953
    [signatureTypeSN] => RSA-SHA256
    [signatureTypeLN] => sha256WithRSAEncryption
    [signatureTypeNID] => 668
    [purposes] => Array
        (
            [1] => Array
                (
                    [0] => 
                    [1] => 
                    [2] => sslclient
                )

            [2] => Array
                (
                    [0] => 1
                    [1] => 
                    [2] => sslserver
                )

            [3] => Array
                (
                    [0] => 
                    [1] => 
                    [2] => nssslserver
                )

            [4] => Array
                (
                    [0] => 
                    [1] => 
                    [2] => smimesign
                )

            [5] => Array
                (
                    [0] => 
                    [1] => 
                    [2] => smimeencrypt
                )

            [6] => Array
                (
                    [0] => 
                    [1] => 
                    [2] => crlsign
                )

            [7] => Array
                (
                    [0] => 1
                    [1] => 1
                    [2] => any
                )

            [8] => Array
                (
                    [0] => 1
                    [1] => 
                    [2] => ocsphelper
                )

            [9] => Array
                (
                    [0] => 
                    [1] => 
                    [2] => timestampsign
                )

        )

    [extensions] => Array
        (
            [keyUsage] => Digital Signature
            [extendedKeyUsage] => TLS Web Server Authentication
            [basicConstraints] => CA:FALSE
            [subjectKeyIdentifier] => 88:61:D3:44:6D:E7:48:34:94:B5:A2:DA:CD:C3:36:42:06:63:51:39
            [authorityKeyIdentifier] => keyid:DE:1B:1E:ED:79:15:D4:3E:37:24:C3:21:BB:EC:34:39:6D:42:B2:30

            [authorityInfoAccess] => OCSP - URI:http://o.pki.goog/wr2
CA Issuers - URI:http://i.pki.goog/wr2.crt

            [subjectAltName] => DNS:www.google.com
            [certificatePolicies] => Policy: 2.23.140.1.2.1

            [crlDistributionPoints] => 
Full Name:
  URI:http://c.pki.goog/wr2/oBFYYahzgVI.crl

            [ct_precert_scts] => Signed Certificate Timestamp:
    Version   : v1(0)
    Log ID    : EE:CD:D0:64:D5:DB:1A:CE:C5:5C:B7:9D:B4:CD:13:A2:
                32:87:46:7C:BC:EC:DE:C3:51:48:59:46:71:1F:B5:9B
    Timestamp : Jun 24 08:42:35.524 2024 GMT
    Extensions: none
    Signature : ecdsa-with-SHA256
                30:45:02:21:00:F8:BD:57:A8:8D:67:8E:F7:ED:DB:25:
                A2:8E:32:BB:44:16:97:FF:69:3A:7C:04:2E:CF:8D:14:
                D8:AD:25:04:DD:02:20:3A:55:09:FB:D9:3E:31:2E:0A:
                BC:22:5E:00:3F:43:44:76:6D:96:B1:74:16:D5:4F:76:
                4B:AA:7C:76:C8:30:76
Signed Certificate Timestamp:
    Version   : v1(0)
    Log ID    : 48:B0:E3:6B:DA:A6:47:34:0F:E5:6A:02:FA:9D:30:EB:
                1C:52:01:CB:56:DD:2C:81:D9:BB:BF:AB:39:D8:84:73
    Timestamp : Jun 24 08:42:35.562 2024 GMT
    Extensions: none
    Signature : ecdsa-with-SHA256
                30:44:02:20:42:DF:DD:70:C7:A1:80:C7:72:5A:64:6C:
                0C:1E:B1:44:CA:74:1E:B4:F3:5C:26:A4:B0:9A:E6:89:
                1D:A4:33:C0:02:20:15:B0:A1:EE:46:36:1A:A2:0F:6D:
                06:63:27:F1:EB:DF:E4:F4:C0:DA:9E:1C:C9:FE:FE:57:
                66:CC:D9:35:FB:8A
        )

)
*/