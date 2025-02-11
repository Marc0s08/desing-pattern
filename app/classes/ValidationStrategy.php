<?php

namespace App\Classes;

use App\Interfaces\ValidationInterface;
use App\Models\Login;

class ValidationStrategy implements ValidationInterface
{
    public function validate(array $data) {
        
        $erros = [];
        if(empty($data['email'])){
            $erros['message'] = 'Informe o apartamento';
        }

        if(empty($data['senha'])) {
            $erros['message'] = 'Informe a senha';
        }

        $user = new Login();
        $validate = $user->getMorador($data); 

        if(!$validate) {
            $erros['message'] = 'Apartamento e/ou senha inválidos';
        }

        if(count($erros) > 0) {
            $erros['data'] = $data;
            
            $erros['erro'] = true;

            return $erros;
        }

        return $validate;
    }
}