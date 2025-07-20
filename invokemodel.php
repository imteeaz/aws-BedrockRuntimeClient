<?php
/*https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/welcome.html*/
require 'vendor/autoload.php';

use Aws\BedrockRuntime\BedrockRuntimeClient;

$bedrockRuntimeClient = new BedrockRuntimeClient([
    'region' => 'us-east-1',
    'version' => 'latest',
    'credentials' => [
        'key' => 'xxx',
        'secret' => 'yyy',
    ],
    'http'=> ['verify' => false]
]);

$prompt = 'story of two dogs';

$modelId = 'anthropic.claude-v2';
$prompt = "\n\nHuman: {$prompt}\n\nAssistant:";
$body = [
    'prompt' => $prompt,
    'max_tokens_to_sample' => 200,
    'temperature' => 0.5,
    'stop_sequences' => ["\n\nHuman:"],
];
$result = $bedrockRuntimeClient->invokeModel([
    'contentType' => 'application/json',
    'body' => json_encode($body),
    'modelId' => $modelId,
]);
$response_body = json_decode($result['body']);
$completion = $response_body->completion;

echo('<hr>');
echo($completion);
echo('<hr>');