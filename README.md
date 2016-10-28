# LanguageTools

One of the most annoying this about international standards is that no agree what standard they should pick and use.
After running into this every now and then over the last years i took the time to make a simple class doing this form me.

The ISOCodeConverter class converts ISO639-1 to ISO639-2/T or ISO639-2/B and Alpha 2 digit to alpha 3 digit. It also allows
backwards conversion and outputs either lower or uppercase formatted codes.
```php
$isoCodeConverter = new ISOCodeConverter();
$threeDigitIsoLanguageTag = $isoCodeConverter->convertLanguageCode('sq');
// returns 3 digit ISO 639-2/T lowercase code
$threeDigitIsoLanguageTag = $isoCodeConverter->convertLanguageCode('sq', TRUE, TRUE);
// returns 3 digit ISO 639-2/B uppercase code
```
