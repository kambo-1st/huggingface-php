<?php

namespace Kambo\Huggingface\Resources;

use Kambo\Huggingface\Contracts\TransporterContract;
use Kambo\Huggingface\Responses\Inference\CreateResponse;
use Kambo\Huggingface\ValueObjects\Transporter\Payload;

class Inference
{
    /**
     * Creates a Client instance with the given API token.
     */
    public function __construct(private readonly TransporterContract $transporter)
    {
        // ..
    }

    public function create(array $parameters)
    {
        $payload = Payload::create('models'.'/'.$parameters['model'], $parameters);

        $result = $this->transporter->requestObject($payload);

        return CreateResponse::from($result, $parameters['type']);
    }
}
