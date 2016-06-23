# fix-for-e164
Simple PHP function that attempts to format German phone numbers coming from a free text input to E.164 format.

Far from perfect (humans are so random), but according to our test working in most cases.

Usage:

    $fixed = fixForE164('0172-8899999');
