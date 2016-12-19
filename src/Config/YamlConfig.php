<?php

namespace Pantheon\Terminus\Config;

use Symfony\Component\Yaml\Yaml;

/**
 * Class YamlConfig
 * @package Pantheon\Terminus\Config
 */
class YamlConfig extends TerminusConfig
{
    /**
     * YamlConfig constructor.
     * @param string $yml_path The path to the yaml file.
     */
    public function __construct($yml_path)
    {
        $this->setSourceName($yml_path);
        $file_config = file_exists($yml_path) ? Yaml::parse(file_get_contents($yml_path)) : [];
        $this->fromArray($file_config);
    }
}