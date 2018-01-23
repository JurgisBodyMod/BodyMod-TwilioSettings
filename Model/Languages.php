<?php
namespace BodyMod\TwilioSettings\Model;

class Languages implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
      return array(
            array(
                'value' => 'da-DK',
                'label' => 'Danish, Denmark',
            ),
            array(
                'value' => 'de-DE',
                'label' => 'German, Germany',
            ),
            array(
                'value' => 'en-AU',
                'label' => 'English, Australia',
            ),
            array(
                'value' => 'en-CA',
                'label' => 'English, Canada',
            ),
            array(
                'value' => 'en-GB',
                'label' => 'English, UK',
            ),
            array(
                'value' => 'en-IN',
                'label' => 'English, India',
            ),
            array(
                'value' => 'en-US',
                'label' => 'English, United States',
            ),
            array(
                'value' => 'ca-ES',
                'label' => 'Catalan, Spain',
            ),
            array(
                'value' => 'es-ES',
                'label' => 'Spanish, Spain',
            ),
            array(
                'value' => 'es-MX',
                'label' => 'Spanish, Mexico',
            ),
            array(
                'value' => 'fi-FI',
                'label' => 'Finnish, Finland',
            ),
            array(
                'value' => 'fr-CA',
                'label' => 'French, Canada',
            ),
            array(
                'value' => 'fr-FR',
                'label' => 'French, France',
            ),
            array(
                'value' => 'it-IT',
                'label' => 'Italian, Italy',
            ),
            array(
                'value' => 'ja-JP',
                'label' => 'Japanese, Japan',
            ),
            array(
                'value' => 'ko-KR',
                'label' => 'Korean, Korea',
            ),
            array(
                'value' => 'nb-NO',
                'label' => 'Norwegian, Norway',
            ),
            array(
                'value' => 'nl-NL',
                'label' => 'Dutch, Netherlands',
            ),
            array(
                'value' => 'pl-PL',
                'label' => 'Polish-Poland',
            ),
            array(
                'value' => 'pt-BR',
                'label' => 'Portuguese, Brazil',
            ),
            array(
                'value' => 'pt-PT',
                'label' => 'Portuguese, Portugal',
            ),
            array(
                'value' => 'ru-RU',
                'label' => 'Russian, Russia',
            ),
            array(
                'value' => 'sv-SE',
                'label' => 'Swedish, Sweden',
            ),
            array(
                'value' => 'zh-CN',
                'label' => 'Chinese (Mandarin)',
            ),
            array(
                'value' => 'zh-HK',
                'label' => 'Chinese (Cantonese)',
            ),
            array(
                'value' => 'zh-TW',
                'label' => 'Chinese (Taiwanese Mandarin)',
            ),
        );
    }
}
