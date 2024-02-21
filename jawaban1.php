<?php 

function generate_token(&$tokens, $user) {
     if (!isset($tokens[$user])) {
          $tokens[$user] = [];
     }

     if (count($tokens[$user]) >= 10) {
          array_shift($tokens[$user]);
     }
     
     $character = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
     $token = '';

     for ($i = 0; $i<10; $i++){
          $token .= $character[rand(0, strlen($character) - 1)];
     }

     $tokens[$user][] = $token;

     return $token;
}

function verify_token(&$tokens, $user, $token) {
     if (isset($tokens[$user])) {
          $index = array_search($token, $tokens[$user]);
          if ($index !== false) {
               unset($tokens[$user][$index]);
               return true;
          }
     }
     return false;
}


$tokens = [];
$user = 'MohFiqihErinsyah';

$tokens1 = generate_token($tokens, $user);
$tokens2 = generate_token($tokens, $user);

echo "Token 1 : $tokens1\n";
echo "Token 2 : $tokens2\n";
echo "All Token for $user: \n";
print_r($tokens[$user]);

$tokenverify = $tokens1;
$verificationResult = verify_token($tokens, $user, $tokenverify);

if ($verificationResult) {
     echo "$tokenverify successfully atau benar";
} else {
     echo "$tokenverify salah";
}

?>