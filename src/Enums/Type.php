<?php

namespace Kambo\Huggingface\Enums;

enum Type: string
{
    case TEXT_GENERATION = 'text-generation';
    case FILL_MASK = 'fill-mask';
}
