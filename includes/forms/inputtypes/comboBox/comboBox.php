<?php


abstract class comboBox extends KInput
{

    
    protected $searchable;
    protected $multiple;
    protected $tokens;
    protected $maxValues;
    protected $selectedOptions;
    protected $form;
    protected $required;
    protected $size;
    



    
    public function setSearchable ($searchable)
    {
        $this->searchable = $searchable;

    }

    public function getSearchable ()
    {
        return $this->searchable;
    }



    public function setMultiple ($multiple)
    {
        $this->multiple =$multiple;

    }

    public function getMultiple ()
    {
        return $this->multiple;
    }



    public function setTokens ($tokens)
    {
        $this->tokens = $tokens;

    }

    public function getTokens ()
    {
        return $this->tokens;
    }



    public function setMaxValues ($maxValues)
    {
        $this->maxValues = $maxValues;

    }

    public function getMaxValues ()
    {
        return $this->maxValues;
    }





    public function setForm ($form)
    {
        $this->form = $form;

    }

    public function getForm ()
    {
        return $this->form;
    }




    public function setRequired ($required)
    {
        $this->required = $required;

    }

    public function getRequired ()
    {
        return $this->required;
    }



    public function setSize ($size)
    {
        $this->size = $size;

    }

    public function getSize ()
    {
        return $this->size;
    }



    public function setSelectedOptions ($selectedOptions)
    {
        $this->selectedOptions = $selectedOptions;

    }

    public function getSelectedOptions ()
    {
        return $this->selectedOptions;
    }





}