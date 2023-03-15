<?php

if (! function_exists('validate')) {
    function validate(array $attributes, array $rules): array
    {
        return validator($attributes, $rules)->validate();
    }
}
