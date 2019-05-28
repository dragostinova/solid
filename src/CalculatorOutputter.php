<?php

namespace SOLID;

use SOLID\Output\OutputInterface;

class CalculatorOutputter
{
    /**
     * @var mixed
     */
    protected $output;

    /**
     * Inject the output format (json, html)
     * Regarding Dependency Inversion principle,
     * entities must depend on abstractions not on concretions.
     * So use the interface (OutputInterface) as scalar type hint,
     * instead of the actual object (JsonOutput, HtmlOutput)
     *
     * @param OutputInterface $output
     */
    public function __construct(OutputInterface $output)
    {
        $this->output = $output;
    }

    /**
     * Call the injected outputter to render the data
     *
     * @param array $data
     * @return mixed
     */
    public function render(array $data): string
    {
        return $this->output->render($data);
    }
}
