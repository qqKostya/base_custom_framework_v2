<?php

namespace myfrm;
class Validator
{
    protected array $errors = [];
    protected array $rules_list = ['required', 'min', 'max', 'email'];
    protected array $messages = [
        'required' => 'The :fieldname: field is required',
        'min' => 'The :fieldname: field must be a minimun :rulevalue: characters',
        'max' => 'The :fieldname: field must be a maximum :rulevalue: characters',
        'email' => 'Not valid email',
    ];

    public function validate(array $data = [], array $rules = [])
    {
        foreach ($data as $fieldname => $value) {
            if (isset($rules[$fieldname])) {
                $this->check([
                    'fieldname' => $fieldname,
                    'value' => $value,
                    'rules' => $rules[$fieldname],
                ]);
            }
        }
        return $this;
    }

    protected function check(array $field)
    {
        foreach ($field['rules'] as $rule => $rule_value) {
            if (in_array($rule, $this->rules_list)) {
                if (!call_user_func_array([$this, $rule], [$field['value'], $rule_value])) {
                    $this->addError($field['fieldname'], str_replace([':fieldname:', ':rulevalue:'],
                        [$field['fieldname'], $rule_value],
                        $this->messages[$rule]));
                }
            }
        }
    }

    protected function addError($fieldname, $error)
    {
        return $this->errors[$fieldname][] = $error;
    }

    public function hasErrors()
    {
        return !empty($this->errors);
    }

    public function listError($fieldname)
    {
        $output = '';
        if (isset($this->errors[$fieldname])) {
            $output .= "<div class='invalid-feedback d-block'><ul class='list-unstyled'>";
            foreach ($this->errors[$fieldname] as $error) {
                $output .= "<li>{$error}</li>";
            }
            $output .= "</ul></div>";

            return $output;
        }
    }

    public function getErrors()
    {
        return $this->errors;
    }

    protected function required($value, $rule_value)
    {
        return !empty(trim($value));
    }

    protected function min($value, $rule_value)
    {
        return mb_strlen($value, 'UTF-8') >= $rule_value;
    }

    protected function max($value, $rule_value)
    {
        return mb_strlen($value, 'UTF-8') <= $rule_value;
    }

    protected function email($value, $rule_value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}