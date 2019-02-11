<?php

if (!function_exists('getVariable')) {
    function getVariable(string $index)
    {
        if (!$variable = \Submtd\LaravelGlobalVariables\Models\GlobalVariable::find($index)) {
            return null;
        }
        return $variable->value;
    }
}

if (!function_exists('setVariable')) {
    function setVariable(string $index, string $value)
    {
        if (!$variable = \Submtd\LaravelGlobalVariables\Models\GlobalVariable::find($index)) {
            $variable = \Submtd\LaravelGlobalVariables\Models\GlobalVariable::create([
                'index' => $index,
                'value' => $value
            ]);
        }
        return true;
    }
}
