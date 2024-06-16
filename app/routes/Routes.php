<?php
namespace App\Routes;

class Routes
{
    public static function get()
    {
        return [
            "get" => [
                "/" => "LoginController@index",
                "/login" => "LoginController@index",
                "/home" => "HomeController@index",
                "/morador" => "MoradorController@index",
                "/morador" => "MoradorController@getApartamentos",
                "/apartamentos" => "ApartamentoController@store",
                "/relatorio" => "AuditoriaController@get",
                "/areas" => "AreasLazerController@get",
                "/reservas" => "ReservaController@getReservas",
                "/reservas/morador/[0-9]+" => "ReservaController@getReservasByMorador",
                "/logout" => "Logout@logout"
            ],
           "post" => [
                "/morador" => "MoradorController@store",
                "/validate" => "LoginController@validate",
                "/reservar" => "ReservaController@store",
                "/reserva/excluir/[0-9]+" => "ReservaController@delete"
            ]
        ]; 
    }
}