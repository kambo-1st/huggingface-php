<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Kambo\Huggingface\Huggingface;
use Kambo\Huggingface\Enums\Type;

$yourApiKey = getenv('HUGGINGFACE_API_KEY');
$client = Huggingface::client($yourApiKey);

$result = $client->inference()->create([
    'model' => 'gpt2',
    'inputs' => 'The goal of life is?',
    'type' => Type::TEXT_GENERATION,
]);

echo $result['generated_text']."\n";
var_export($result->toArray());


$result = $client->inference()->create([
    'model' => 'distilbert-base-uncased',
    'inputs' => 'The answer to the universe is [MASK].',
    'type' => Type::FILL_MASK,
]);

echo $result['filled_masks'][0]['sequence']."\n";
var_export($result->toArray());
