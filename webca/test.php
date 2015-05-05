<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'phpseclib');
include('Net/SSH2.php');
include('phpseclib/File/X509.php');
include('phpseclib/Crypt/RSA.php');
include('phpseclib/Math/BigInteger.php');

$x509 = new File_X509();
$cert = $x509->loadX509('-----BEGIN CERTIFICATE-----
MIIFvDCCA6QCCQCR3+DdvIhgaDANBgkqhkiG9w0BAQUFADCBnzELMAkGA1UEBhMC
SUQxDjAMBgNVBAgTBUphdGltMQswCQYDVQQHEwJUQzEoMCYGA1UEChMfS2VhbWFu
YW4gSW5mb3JtYXNpIGRhbiBKYXJpbmdhbjEOMAwGA1UECxMFS0lKQ0ExEjAQBgNV
BAMTCVRpbSBLSUpDQTElMCMGCSqGSIb3DQEJARYWc2FpZG11c2F5eWFiQGdtYWls
LmNvbTAeFw0xNTA1MDQxODU0MzdaFw0xNjA1MDMxODU0MzdaMIGfMQswCQYDVQQG
EwJJRDEOMAwGA1UECBMFSmF0aW0xCzAJBgNVBAcTAlRDMSgwJgYDVQQKEx9LZWFt
YW5hbiBJbmZvcm1hc2kgZGFuIEphcmluZ2FuMQ4wDAYDVQQLEwVLSUpDQTESMBAG
A1UEAxMJVGltIEtJSkNBMSUwIwYJKoZIhvcNAQkBFhZzYWlkbXVzYXl5YWJAZ21h
aWwuY29tMIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAxIb0TC2Xi6xN
5JNrDcP1P3XAKe1npwVvLcQGdUcBtU2bI9BANrfb8IuRFRRy/HqydZXkCKofejIm
VySw58DIoSaOsg6XrxkmoULrsyxNhwVbU82P5/b3B8nks/q/rKe9zICMQAZd7RPs
GKjgfDtc1v/gzO9Mme2tZd+aN6JFJCEqU7xbqCkhcgJQGKArkHLXmN/gPjR96I8F
xaMXa2JcLvsgDu14vF6/RjPTLapdg7GWDuGBufCSYk/ELRP5HXrLOjl8i8OryI4s
i3o7ehCMDUsjN1HYlRjl0kd+lwvbgCe1ip2jaIy4sSDq7p5DfngFNmXzcbtdGyMe
BIc5m0IspoY7K5rY2mzf8FenXQGQiLgGPeOkjAAOKhG3T0JZk6PI304eN45nGwP0
6asN6bXVawqauH8+NkkYrXGkAHcoExtLnjU7U/3VhemB2c0dXGZvYLMvq2xXT06j
AJ3gXa2dULusDic3Cpg1ydbXpdFfNetbYmziPn8C6F+tF/3y19zD23EXBCbX90NP
UAV1lisPVmqynXMHbs3wy7gQDmytTPDz6hNRmnT8NuCoETFwII503AIjN79fMq+/
mOYcHfRUX+IoWKHtkdCIKzwJTOMN6X7wIWYfQTL6fnCqEODZLcR6KJOPPot7mz/X
fTZ+QoaKKU1Wun2Tgrx2mtMiZh/2J60CAwEAATANBgkqhkiG9w0BAQUFAAOCAgEA
Bjot135W3iru+aFh4rz3eoNpi4ddDZakixSCIgYV5gpZSOKm+0O31dtNb3ex49G8
lFpCg9U6xRkKoUfB7WVFD494LmIyAPkarNU3WnvVTj1Pwf1V4aiso+tWQgSQJznZ
Kqal0HBlyr5VAov++07cyOG5M1deINdr7Jx2oQXCR58O2k0Na8syBfpaJEDT3zPg
5MFP60jPOS8ARGnmPU19u0jTSZHyAxagS+B9mD/fqR8nUctWiwFeoukGfh219XJ1
bYiHoKwOR5upQnwwkLtLSJIJkWQh/io+mywN0LziN2/huVgTYoFhYl6450VUm1EG
Dv/4cttiZWEjSeBUvR4MWrvA88Uqi4/UNpBCAv9eVUKxqmxCqsgCJUtPJLfSpJBu
7vpk58xNJDLg6Ng019RMal+2pS86gkwJhTuqBW5XlQn3jmoLiNGWE/bPC7XQHF8U
egD8wdXAvRnEkAENqs49Mdoh+eonagbEqOOshgD5yFLjfUIg7geyb1ZgA+a0s9eN
UP5Fucj7a3iJgHFHaEY0kUlCu2hTACv+5jlXkR5VGK3UcZZCdoawpIPdmKaIQXZB
BX5oXFfVbQXJIStoyYZhpFVMqDNPHCng+OAd9ehBAG5SdLi8PwcEDTtmDQumoNeA
cv/sEbjynZQxdO3OwBSxk4riSFmqE6g9XLGkBcTHTRo=
-----END CERTIFICATE-----');

echo $x509->getDN(true);
?>