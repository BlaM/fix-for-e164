<?php
// fixForE164
// Copyright (c) 2016 by Dominik Deobald (interdose.com)
// free to use in both non-commercial and commercial use cases (MIT License)

// fix phone numbers for e.164 formatting
// e.g.: 0174-1399999 -> +491741399999
//       0176 83 99 99 99 -> +4917683999999
//       +351 218299999 -> +351218299999

// will return null if conversion failed

function fixForE164($e164_phone) {
    $e164_phone = str_replace(' ', '', $e164_phone);

    if (strlen($e164_phone) > 15) {
      $e164_phone = substr($e164_phone, 0, 10) . preg_replace('/[\/a-z-]0.+$/', '', substr($e164_phone, 10));
    }

    $e164_phone = preg_replace('/[^0-9]/', '', $e164_phone);
    $e164_phone = preg_replace('/^(00)/', '+', $e164_phone);
    $e164_phone = preg_replace('/^(0)/', '+49', $e164_phone);
    $e164_phone = preg_replace('/^([1-9])/', '+\1', $e164_phone);

    if (substr($e164_phone, 0, 1) !== '+' || strlen($e164_phone) < 8) {
      $e164_phone = null;
    }

    return substr($e164_phone, 0, 16);
}
