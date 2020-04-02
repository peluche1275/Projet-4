<?php

namespace OCFram;

abstract class FormBuilder
{
    // PROPERTY //

    protected $form;

    // CONSTRUCTOR //

    public function __construct(Entity $entity)
    {
        $this->setForm(new Form($entity));
    }

    // METHOD //
    
    abstract public function build();

    // SETTER //

    public function setForm(Form $form)
    {
        $this->form = $form;
    }

    // GETTER

    public function form()
    {
        return $this->form;
    }
}
