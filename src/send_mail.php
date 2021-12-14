//working_directory/emailBuilder.php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$credentials = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');
$apiInstance = new SendinBlue\Client\Api\TransactionalEmailsApi(new GuzzleHttp\Client(),$credentials);

$sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail([
     'subject' => 'from the PHP SDK!',
     'sender' => ['name' => 'Sendinblue', 'email' => 'contact@sendinblue.com'],
     'replyTo' => ['name' => 'Sendinblue', 'email' => 'contact@sendinblue.com'],
     'to' => [[ 'name' => 'Max Mustermann', 'email' => 'example@example.com']],
     'htmlContent' => '<html><body><h1>This is a transactional email {{params.bodyMessage}}</h1></body></html>',
     'params' => ['bodyMessage' => 'made just for you!']
]);

try {
    $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(),PHP_EOL;
}

?>
<!-- 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 -->
