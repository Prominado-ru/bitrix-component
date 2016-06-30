<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$arComponentDescription = array(
    "NAME" => Loc::getMessage("PROMINADO_COMPONENT_NAME"),
    "DESCRIPTION" => Loc::getMessage("PROMINADO_COMPONENT_DESCRIPTION"),
    "ICON" => "/images/icon.gif",
    "SORT" => 10,
    "CACHE_PATH" => "Y",
    "PATH" => array(
        "ID" => "content",
        "CHILD" => array(
            "ID" => "prominado",
            "NAME" => Loc::getMessage("PROMINADO_COMPONENT_PATH_NAME"),
            "SORT" => 1,
        ),
    ),
);

?>