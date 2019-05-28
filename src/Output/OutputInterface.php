<?php

namespace SOLID\Output;

interface OutputInterface
{
    public function render(array $data): string;
}
