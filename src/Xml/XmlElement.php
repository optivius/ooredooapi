<?php

namespace Applab\Ooreedo\Xml;


use Exception;
use SimpleXMLElement;

class XmlElement extends SimpleXMLElement {

    public function toJson() {
        return json_encode($this);
    }

    public function toArray() {
        $json = $this->toJson();
        return json_decode($json, true);
    }
}
