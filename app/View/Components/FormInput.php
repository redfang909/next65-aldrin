<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormInput extends Component
{
     /**
     * The alert type.
     *
     * @var string
     */
    public $type;

    /**
     * The alert message.
     *
     * @var string
     */
    public $name;

    /**
     * The alert message.
     *
     * @var array
     */
    public $data;

    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $name
     * @return void
     */
    public function __construct($type="", $name="", $data = [])
    {
        $this->type = $type;
        $this->name = $name;
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        dd($this->data);
        return view('components.form-input');
    }
}
