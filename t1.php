<?php

$publicKey = file_get_contents("mykey.pub");
$privateKey= file_get_contents("mykey.pem");
$plaintext = "String to encrypt";

openssl_public_encrypt($plaintext, $encrypted, $publicKey);
openssl_private_decrypt($encrypted, $decrypted, $privateKey);

echo base64_encode($encrypted);
echo "\n";
echo $decrypted;

echo substr( "abcdefghijklmnopqrstuvwxyz", mt_rand(0, 25) , 1) .substr( md5( time() ), 1);
