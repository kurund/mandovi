<?php

use CRM_Mandovi_ExtensionUtil as E;

return [
  [
    'name' => 'RiverleaStream_Mandovi',
    'entity' => 'RiverleaStream',
    'update' => 'unmodified',
    'cleanup' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'mandovi',
        'label' => E::ts('Mandovi'),
        'description' => E::ts('A calm, modern theme for CiviCRM. Named after the Mandovi, the river that flows past Panjim in Goa.'),
        'is_reserved' => FALSE,
        'extension' => E::SHORT_NAME,
        'file_prefix' => 'streams/mandovi/',
        'css_file' => '_main.css',
        'css_file_dark' => '_dark.css',
      ],
      'match' => ['name'],
    ],
  ],
];
