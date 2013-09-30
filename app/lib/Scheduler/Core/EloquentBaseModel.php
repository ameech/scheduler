<?php namespace Scheduler\Core;

use Validator, Eloquent;
use Scheduler\Core\Exceptions\NoValidationRulesFoundException;
use Scheduler\Core\Exceptions\NoValidatorInstantiatedException;

abstract class EloquentBaseModel extends Eloquent
{
    protected $validationRules = [];
    protected $validator;

    public function isValid()
    {
        if ( ! isset($this->validationRules)) {
            throw new NoValidationRulesFoundException('no validation rule array defined in class ' . get_called_class());
        }

        $this->validator = Validator::make($this->getAttributes(), $this->getPreparedRules());

        return $this->validator->passes();
    }

    public function getErrors()
    {
        if ( ! $this->validator) {
            throw new NoValidatorInstantiatedException;
        }

        return $this->validator->errors();
    }

    protected function getPreparedRules()
    {
        return $this->replaceIdsIfExists($this->validationRules);
    }
}