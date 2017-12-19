<?php

namespace Prominado\Components;

class ComponentName extends CBitrixComponent
{
    private function getResult()
    {
        return [
            'ID'    => 1,
            'PARAM' => $this->arParams['PARAM_2']
        ];
    }

    public function executeComponent()
    {
        $this->arResult = $this->getResult();

        $this->includeComponentTemplate();
    }
}