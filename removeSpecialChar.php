<?php 

if (!function_exists('removeSpecialChar')) {
 
    function removeSpecialChar(string|null $String): string
    {
        return preg_replace('/[^پتثجچحخدذرزژسشصضطظعغفقکگلمنوهی0-9a-zA-Z0-9]/s', '', $String);
    }
}