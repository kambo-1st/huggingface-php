<?php

namespace Kambo\Huggingface\Contracts;

use Kambo\Huggingface\Resources\Inference;

interface ClientContract
{
    public function inference(): Inference;
}
