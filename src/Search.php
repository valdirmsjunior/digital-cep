<?php

namespace DigitalCep;

class Search
{
    private $url = "https://viacep.com.br/ws/";

    public function getEnderecoCep(string $cep): array{
        $cep = preg_replace('/[^0-9]/im', '', $cep);

        $get = file_get_contents($this->url . $cep . "/json");

        print_r($get);

        
    }
}