<?php

namespace Kambo\Huggingface\Responses\Inference;

use Kambo\Huggingface\Responses\Concerns\ArrayAccessible;

class CreateResponseFilledMask
{
    use ArrayAccessible;

    public function __construct(
        private readonly float $score,
        private readonly int $token,
        private readonly string $tokenStr,
        private readonly string $sequence,
    )
    {
        // ..
    }

    public static function from(array $attributes)
    {
        return new self(
            $attributes['score'],
            $attributes['token'],
            $attributes['token_str'],
            $attributes['sequence'],
        );
    }

    public function toArray(): array
    {
        return [
            'score' => $this->score,
            'token' => $this->token,
            'token_str' => $this->tokenStr,
            'sequence' => $this->sequence,
        ];
    }
}
