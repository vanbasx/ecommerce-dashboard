<?php

namespace App\Kernel\Http;

use App\Kernel\Validator\Validator;

class Request {

   private Validator $validator;

   public function __construct(
      public readonly array $get,
      public readonly array $post,
      public readonly array $server,
      public readonly array $files,
      public readonly array $cookies,
   ) {}

   public static function createFormGlobals() {
      return new static($_GET, $_POST, $_SERVER, $_FILES, $_COOKIE);
   }

   public function uri() {
      return strtok($this->server['REQUEST_URI'], '?');
   }

   public function method() {
      return $this->server['REQUEST_METHOD'];
   }

   public function input(string $key, $default = null) {
      return $this->post[$key] ?? $this->get[$key] ?? $default;
   }

   public function setValidator(Validator $validator) {
      $this->validator = $validator;
   }

   public function validate(array $rules) {
      $data = [];

      foreach ($rules as $field => $rule) {
         $data[$field] = $this->input($field);
      }

      return $this->validator->validate($data, $rules);
   }

   public function errors() {
      return $this->validator->errors();
   }
}