# LanguageTools
```php
$isoCodeConverter = new ISOCodeConverter();
$threeDigitIsoLanguageTag = $isoCodeConverter->convertLanguageCode('sq');
// returns 3 digit ISO 639-2/T lowercase code
$threeDigitIsoLanguageTag = $isoCodeConverter->convertLanguageCode('sq', TRUE, TRUE);
// returns 3 digit ISO 639-2/B uppercase code
```
