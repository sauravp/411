<?php

namespace FOO;

class Link_Enricher extends Enricher {
    public static $TYPE = 'link';

    public static function process($data) {
        return $data;
    }

    public static function processHTML($data) {
        return Util::escape($data);
    }
}
