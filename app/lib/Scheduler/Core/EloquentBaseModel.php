<?php namespace Scheduler\core;

use Validator, Eloquent;
use Scheduler\Core\Exceptions\NoValidationRulesFoundException;
use Scheduler\Core\Exceptions\NoValidatorInstantiatedException;

abstract class EloquentBaseModel extends Eloquent
{
    protected $validationRules = [];
    protected $validator;

    /**
     * Checks if the attributes are valid
     *
     * @return mixed
     * @throws \Scheduler\Core\Exceptions\NoValidationRulesFoundException
     */
    public function isValid()
    {
        if (!isset($this->validationRules)) {
            throw new NoValidationRulesFoundException('no validation rule array defined in class ' . get_called_class());
        }

        $this->validator = Validator::make($this->getAttributes(), $this->getPreparedRules());

        return $this->validator->passes();
    }

    /**
     * Gets the errors that are thrown if invalid
     *
     * @return mixed
     * @throws \Scheduler\Core\Exceptions\NoValidatorInstantiatedException
     */
    public function getErrors()
    {
        if ( ! $this->validator) {
            throw new NoValidatorInstantiatedException;
        }

        return $this->validator->errors();
    }
}