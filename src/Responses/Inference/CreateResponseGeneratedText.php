<?php

namespace Kambo\Huggingface\Responses\Inference;

use Kambo\Huggingface\Contracts\ResponseContract;
use Kambo\Huggingface\Responses\Concerns\ArrayAccessible;

final class CreateResponseGeneratedText implements ResponseContract
{
    use ArrayAccessible;
    public function __construct(private readonly string $text)
    {
        // ..
    }

    public static function from(array $attributes)
    {
        return new self($attributes[0]['generated_text']);
    }

    public function toArray(): array
    {
        return ['generated_text' => $this->text];
    }
}
