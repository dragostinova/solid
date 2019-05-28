<?php

namespace SOLID\Output;

/**
 * Regarding Single-responsibility Principle the HtmlOutput object is responsible only to render data in html
 */
class HtmlOutput implements OutputInterface
{
    public function render(array $data): string
    {
        $string = '';

        foreach ($data as $key => $value) {
            $string .= $key . ': ' . $value;
        }

        return $string;
    }
}
