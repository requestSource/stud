<?php


namespace App;


class Helper
{
    public function RemoveXSS($input){
        $input_without_xss = htmlspecialchars($input);
        return $input_without_xss;
    }
}