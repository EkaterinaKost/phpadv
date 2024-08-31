<?php
# source: person.proto

namespace GPBMetadata;

class Person
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0a4c0a0c706572736f6e2e70726f746f22340a06506572736f6e120c0a046e616d65180120012809120b0a03616765180220012805120f0a0761646472657373180320032809620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}