<?php

namespace App\Trait;

trait UseValueAsLabel
{
    /**
     * Get the label for the enum case.
     */
    public function getLabel(): string
    {
        // return $this->value;
        return str($this->value)
            ->replace(['-', '_'], ' ')
            ->ucwords();
    }
}
