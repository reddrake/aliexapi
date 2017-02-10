<?php

namespace AliexApi\ResponseTransformer;

interface ResponseTransformerInterface
{
    public function transform($response);
}