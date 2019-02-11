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
            $variable = new \Submtd\LaravelGlobalVariables\Models\GlobalVariable(['index' => $index]);
        }
        $variable->value = $value;
        $variable->save();
        return true;
    }
}
