<?php

namespace DigitalCep;
use PHPUnit\Framework\TestCase;

class SearchTest extends TestCase
{
    private $url = "https://viacep.com.br/ws/";

    public function testGetEnderecoCep(){
        $result = new Search();
        $result = $result->getEnderecoCep('60040290');

        $esperado = [
            "cep" => "60040-290",
            "logradouro" => "Rua Padre Matos Serra",
            "complemento" => "",
            "unidade" => "",
            "bairro" => "Fátima",
            "localidade" => "Fortaleza",
            "uf" => "CE",
            "estado" => "Ceará",
            "regiao" => "Nordeste",
            "ibge" => "2304400",
            "gia" => "",
            "ddd" => "85",
            "siafi" => "1389"
        ];

        $this->assertEquals($esperado, $result);
    }
}