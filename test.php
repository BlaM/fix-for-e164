<?php

require 'fix-for-e164.php';

echo '<table>';

echo '<tr><td>' . '01794699999' . '</td><td>' . fixForE164('01794699999') . '</td></tr>';
echo '<tr><td>' . '01717999999' . '</td><td>' . fixForE164('01717999999') . '</td></tr>';
echo '<tr><td>' . '0231 499999 / 015753699999' . '</td><td>' . fixForE164('0231 499999 / 015753699999') . '</td></tr>';
echo '<tr><td>' . '0171 6999 999' . '</td><td>' . fixForE164('0171 6999 999') . '</td></tr>';
echo '<tr><td>' . '03831/399999' . '</td><td>' . fixForE164('03831/399999') . '</td></tr>';
echo '<tr><td>' . '0172-8899999' . '</td><td>' . fixForE164('0172-8899999') . '</td></tr>';
echo '<tr><td>' . '+491727299999' . '</td><td>' . fixForE164('+491727299999') . '</td></tr>';
echo '<tr><td>' . '04152 19 9999/   01752899999' . '</td><td>' . fixForE164('04152 19 9999/   01752899999') . '</td></tr>';
echo '<tr><td>' . '017631599999 - 07441599999' . '</td><td>' . fixForE164('017631599999 - 07441599999') . '</td></tr>';
echo '<tr><td>' . 'keine' . '</td><td>' . fixForE164('keine') . '</td></tr>';
echo '<tr><td>' . '017622599999' . '</td><td>' . fixForE164('017622599999') . '</td></tr>';
echo '<tr><td>' . '06384 / 9999' . '</td><td>' . fixForE164('06384 / 9999') . '</td></tr>';
echo '<tr><td>' . '0176 83 99 99 99' . '</td><td>' . fixForE164('0176 83 99 99 99') . '</td></tr>';
echo '<tr><td>' . '0152 23599999' . '</td><td>' . fixForE164('0152 23599999') . '</td></tr>';
echo '<tr><td>' . '0151 701 999 99' . '</td><td>' . fixForE164('0151 701 999 99') . '</td></tr>';
echo '<tr><td>' . '0157 n736 999 99' . '</td><td>' . fixForE164('0157 n736 999 99') . '</td></tr>';
echo '<tr><td>' . '017643499999' . '</td><td>' . fixForE164('017643499999') . '</td></tr>';
echo '<tr><td>' . 'ab 17:00 Uhr 035773/999999' . '</td><td style="color:red">' . fixForE164('ab 17:00 Uhr 035773/999999') . '</td></tr>';
echo '<tr><td>' . '0152 54199999' . '</td><td>' . fixForE164('0152 54199999') . '</td></tr>';
echo '<tr><td>' . '0231/8499999 oder 0231 /999999' . '</td><td>' . fixForE164('0231/8499999 oder 0231 /999999') . '</td></tr>';
echo '<tr><td>' . '0000' . '</td><td>' . fixForE164('0000') . '</td></tr>';
echo '<tr><td>' . 'â€­+49 160 6199999â€¬' . '</td><td>' . fixForE164('â€­+49 160 6199999â€¬') . '</td></tr>';
echo '<tr><td>' . '+351 218299999' . '</td><td>' . fixForE164('+351 218299999') . '</td></tr>';
echo '<tr><td>' . '0201/999999 oder 0171/7999999' . '</td><td>' . fixForE164('0201/999999 oder 0171/7999999') . '</td></tr>';
echo '<tr><td>' . '+6585299999' . '</td><td>' . fixForE164('+6585299999') . '</td></tr>';
echo '<tr><td>' . '14999' . '</td><td>' . fixForE164('14999') . '</td></tr>';
echo '<tr><td>' . '-' . '</td><td>' . fixForE164('-') . '</td></tr>';
echo '<tr><td>' . '779999' . '</td><td>' . fixForE164('779999') . '</td></tr>';
echo '<tr><td>' . '\,27299999' . '</td><td style="color:red">' . fixForE164('\,27299999') . '</td></tr>';
echo '<tr><td>' . '(030) 30 999 999' . '</td><td>' . fixForE164('(030) 30 999 999') . '</td></tr>';
echo '<tr><td>' . '0711-999999 ab 13.30 Uhr' . '</td><td style="color:red">' . fixForE164('0711-999999 ab 13.30 Uhr') . '</td></tr>';
echo '<tr><td>' . '06151-999999--017656899999' . '</td><td>' . fixForE164('06151-999999--017656899999') . '</td></tr>';
echo '<tr><td>' . 'nicht möglich' . '</td><td>' . fixForE164('nicht möglich') . '</td></tr>';

echo '</table>';
