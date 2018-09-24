<?php

namespace Laravel\Nova\Fields;

class Text extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'text-field';
<<<<<<< HEAD
=======

    /**
     * Display the field as raw HTML using Vue.
     *
     * @return $this
     */
    public function asHtml()
    {
        return $this->withMeta(['asHtml' => true]);
    }
>>>>>>> 4356d8bf7b1edc7b0c182b9e1a519ff606eac5fb
}
