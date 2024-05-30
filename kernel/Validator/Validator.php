<?php

namespace App\Kernel\Validator;

class Validator {

    private array $errors = [];

    private array $data;

    public function validate(array $data, array $rules) {
        $this->errors = [];
        $this->data = $data;

        foreach ($rules as $key => $rule) {
            $rules = $rule;

            foreach ($rules as $rule) {
                $rule = explode(':', $rule);

                $ruleName = $rule[0];
                $ruleValue = $rule[1] ?? null;

                $error = $this->validateRule($key, $ruleName, $ruleValue);

                if ($error) {
                    $this->errors[$key][] = $error;
                }
            }
        }

        return empty($this->errors);
    }

    public function errors() {
        return $this->errors;
    }

    public function validateRule(string $key, string $ruleName, string $ruleValue = null) {
        $value = $this->data[$key];

        switch ($ruleName) {
            case 'required':
                if (empty($value)) {
                    return "Field $key is required";
                }
                break;
            case 'min':
                if (strlen($value) < $ruleValue) {
                    return "Enter more $ruleValue characters";
                }
                break;
            case 'max':
                if (strlen($value) > $ruleValue) {
                    return "Enter less $ruleValue characters";
                }
                break;
            case 'email':
                if (! filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    return "Enter a valid email address";
                }
                break;
        }

        return false;
    }
}