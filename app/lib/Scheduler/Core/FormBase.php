<?php namespace Scheduler\Core;

use Validator, App;

class FormBase
{
    protected $inputData;
    protected $validationRules;

    /**
     * Get the input data
     */
    public function __construct()
    {
        $this->inputData = App::make('request')->all();
    }

    /**
     * Return the input data
     * 
     * @return array
     */
    public function getInputData()
    {
        return $this->inputData;
    }

    /**
     * Check if the form is valid
     * 
     * @return boolean
     */
    public function isValid()
    {
        $this->beforeValidation();

        if ( ! isset($this->validationRules)) {
            throw new NoValidationRulesFoundException('no validation rules found in class ' . get_called_class());
        }

        $this->validator = Validator::make($this->getInputData(), $this->getPreparedRules());

        return $this->validator->passes();
    }

    /**
     * Returns validation errors
     * 
     * @return object
     */
    public function getErrors()
    {
        return $this->validator->errors();
    }

    /**
     * Returns the prepared rules
     * 
     * @return array
     */
    protected function getPreparedRules()
    {
        return $this->validationRules;
    }

    protected function beforeValidation() {}
}