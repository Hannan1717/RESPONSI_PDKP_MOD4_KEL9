<?php

function encryptdata($data)
{
    $result = "";
    $changeword = strtolower($data);
    $split = str_split($changeword);
    $wadah = array();
    // convert
    for ($i = 0; $i < count($split); $i++) {
        $ascii_char = (int)ord($split[$i]) + 9;
        if ($ascii_char >= 123) {
            $selisih = $ascii_char - 123;
            $wadah_item = 97 + $selisih;
            $wadah_item = chr($wadah_item);
        } else {
            $wadah_item = chr($ascii_char);
        }
        array_push($wadah, $wadah_item);
    }
    $result = implode("", $wadah);
    return $result;
}

class dec
{

    public function decryptthis($data)
    {
        $result = "";
        $cngword = strtolower($data);
        $split = str_split($cngword);
        $wadah = array();
        for ($i = 0; $i < count($split); $i++) {
            $ascii_number = (int)ord($split[$i]) - 9;
            if ($ascii_number >= 123) {
                $selisih = $ascii_number - 123;
                $wadah_item = 97 + $selisih;
                $wadah_item = chr($wadah_item);
            } else {
                $wadah_item = chr($ascii_number);
            }
            array_push($wadah, $wadah_item);
        }
        $result = implode("", $wadah);
        return $result;
    }
}
