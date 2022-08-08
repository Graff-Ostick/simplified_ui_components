<?php
declare(strict_types=1);

class ConfigReader
{
    const XML_PATH = "../routes/product/form.xml";

    /**
     * @return $1|false|SimpleXMLElement $1|false|SimpleXMLElement
     */
    protected function readXmlFile()
    {
        return simplexml_load_file(self::XML_PATH);
    }

    public function xmlToArray(): array
    {
        $xml = $this->readXmlFile();
        $json = json_encode($xml);
        $array = json_decode($json, true);
        return $array;
    }
}
