<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$arComponentParameters = [
    'GROUPS'     => [
        'SETTINGS' => [
            'NAME' => Loc::getMessage('PROMINADO_COMPONENT_SETTINGS')
        ],
        'PARAMS'   => [
            'NAME' => Loc::getMessage('PROMINADO_COMPONENT_PARAMS')
        ],
    ],
    'PARAMETERS' => [
        'PARAM_1' => [
            'PARENT'  => 'SETTINGS',
            'NAME'    => Loc::getMessage('PROMINADO_COMPONENT_PARAM_1'),
            'TYPE'    => 'LIST',
            'VALUES'  => [],
            'REFRESH' => 'Y'
        ],

        'PARAM_2' => [
            'PARENT'   => 'PARAMS',
            'NAME'     => Loc::getMessage('PROMINADO_COMPONENT_PARAM_2'),
            'TYPE'     => 'STRING',
            'MULTIPLE' => 'Y',
        ]
    ]
];