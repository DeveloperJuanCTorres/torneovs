<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'nick_name' => ['required', 'string', 'max:100'],
            'tipo_doc' => ['required'],
            'numero_doc' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $tipo_doc="valor";
        if ($input['tipo_doc']==1) {
            $tipo_doc = "DNI";
        }
        elseif ($input['tipo_doc']==2) {
            $tipo_doc = "PASAPORTE";
        }

        $ruta = "https://mensajex.com/api/ChatBot/apisend";
        $body = array(
            "numero_celular" => $input['phone'],
            "mensaje" => "tu codigo es de prueba",
            "ruta_imagen" => ""
        );

        // Http::withBody()->post($ruta, $body);

        Http::post($ruta, [
            "numero_celular" => $input['phone'],
            "mensaje" => "tu codigo es de prueba",
            "ruta_imagen" => "",
        ]);

        return User::create([
            'name' => $input['name'],
            'nick_name' => $input['nick_name'],
            'tipo_doc' => $tipo_doc,
            'numero_doc' => $input['numero_doc'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'phone' => $input['phone'],
            
        ]);
    }
}
