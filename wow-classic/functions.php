<?php
include 'defines.php';

generateAccessToken() {
  $params = array(
    'grant_type' => 'client_credentials'
  );
  $tokenUri = 'https://us.battle.net/oauth/token';

  $ch = curl_init();
}