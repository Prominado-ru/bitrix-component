<?php

class CProminadoComponent extends CBitrixComponent
{
    function getResult()
    {
        return Array(
            "ID" => 1,
            "PARAM" => $this->arParams["PARAM_2"]
        );
    }
    
    function executeComponent()
    {
        $this->arResult = $this->getResult();
        
        $this->includeComponentTemplate();
    }
}