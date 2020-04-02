<?php

namespace OCFram;

class FormHandler
{
    // PROPERTIES //

    protected $form;
    protected $manager;
    protected $request;
    
    // CONSTRUCTOR //

    public function __construct(Form $form, Manager $manager, HTTPRequest $request)
    {
        $this->setForm($form);
        $this->setManager($manager);
        $this->setRequest($request);
    }

    // METHOD //

    public function process()
    {
        if ($this->request->method() == 'POST' && $this->form->isValid()) 
        {
            $this->manager->save($this->form->entity());

            return true;
        }

        return false;
    }

    // SETTERS //

    public function setForm(Form $form)
    {
        $this->form = $form;
    }

    public function setManager(Manager $manager)
    {
        $this->manager = $manager;
    }

    public function setRequest(HTTPRequest $request)
    {
        $this->request = $request;
    }
}
