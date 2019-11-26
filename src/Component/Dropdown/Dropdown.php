<?php

namespace BladeComponentLibrary\Component\Dropdown;

class Dropdown extends \BladeComponentLibrary\Component\BaseController
{

    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        // Base class
        array_unshift($this->data['classList'], 'c-dropdown');

        if(isset($direction)){
            $this->data['direction'] = $direction;
            $this->data['classList'][] = $this->getBaseClass() . '-button--' . $direction;
        }

        if(isset($direction) && $popup === 'focus'){
            $this->data['classList'][] = $this->getBaseClass() . '-button--' . $direction . '__focus';
        }

        if(isset($direction) && $popup === 'click'){
            $this->data['classList'][] = $this->getBaseClass() . '-button--' . $direction . '__click';
        }

        if(isset($popup)){
            $this->data['classList'][] = $this->getBaseClass() . '--on-' . $popup; 
        }
    }
}
