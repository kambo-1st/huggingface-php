<?php

declare(strict_types=1);

namespace Kambo\Huggingface\Contracts;

use Kambo\Huggingface\Exceptions\ErrorException;
use Kambo\Huggingface\Exceptions\TransporterException;
use Kambo\Huggingface\Exceptions\UnserializableResponse;
use Kambo\Huggingface\ValueObjects\Transporter\Payload;
use Psr\Http\Message\ResponseInterface;

/**
 * @internal
 */
interface TransporterContract
{
    /**
     * Sends a request to a server.
     **
     * @return array<array-key, mixed>
     *
     * @throws ErrorException|UnserializableResponse|TransporterException
     */
    public function requestObject(Payload $payload): array|string;

    /**
     * Sends a content request to a server.
     *
     * @throws ErrorException|TransporterException
     */
    public function requestContent(Payload $payload): string;

    /**
     * Sends a stream request to a server.
     **
     * @throws ErrorException
     */
    public function requestStream(Payload $payload): ResponseInterface;
}
