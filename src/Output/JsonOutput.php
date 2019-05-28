<?php

namespace SOLID\Output;

/**
 * Regarding Single-responsibility Principle the HtmlOutput object is responsible only to render data in json
 */
class JsonOutput implements OutputInterface
{
    public function render(array $data): string
    {
        return json_encode($data);
    }
}
