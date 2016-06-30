<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$arComponentParameters = array(
    "GROUPS" => array(
        "SETTINGS" => array(
            "NAME" => Loc::getMessage("PROMINADO_COMPONENT_SETTINGS")
        ),
        "PARAMS" => array(
            "NAME" => Loc::getMessage("PROMINADO_COMPONENT_PARAMS")
        ),
    ),
    "PARAMETERS" => array(
        "PARAM_1" => array(
            "PARENT" => "SETTINGS",
            "NAME" => Loc::getMessage("PROMINADO_COMPONENT_PARAM_1"),
            "TYPE" => "LIST",
            "VALUES" => Array(),
            "REFRESH" => "Y"
        ),
        
        "PARAM_2" => array(
            "PARENT" => "PARAMS",
            "NAME" => Loc::getMessage("PROMINADO_COMPONENT_PARAM_2"),
            "TYPE" => "STRING",
            "MULTIPLE" => "Y",
        )
    )
);