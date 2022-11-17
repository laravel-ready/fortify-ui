<?php

namespace LaravelReady\FortifyUi\Services;

class FortifyUiService
{
    public function __construct()
    {
    }

    /**
     * This is nonstatic service method
     *
     * @return string
     */
    public function myServiceFunction(string $input): string
    {
        return $input;
    }
}
