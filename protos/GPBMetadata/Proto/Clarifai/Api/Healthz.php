<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/healthz.proto

namespace GPBMetadata\Proto\Clarifai\Api;

class Healthz
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Proto\Clarifai\Api\Status\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac4010a2070726f746f2f636c6172696661692f6170692f6865616c7468" .
            "7a2e70726f746f120c636c6172696661692e61706922130a114765744865" .
            "616c74687a52657175657374224f0a124765744865616c74687a52657370" .
            "6f6e7365122b0a0673746174757318012001280b321b2e636c6172696661" .
            "692e6170692e7374617475732e537461747573120c0a0474696d65180220" .
            "01280942245a03617069a2020443414950c202015fca0211436c61726966" .
            "61695c496e7465726e616c620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
