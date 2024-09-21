<?php

namespace DigitalCep;

use DigitalCep\ws\ViaCep;

class Search
{
    private $url = "https://viacep.com.br/ws/";

    public function getEnderecoCep(string $cep): array
    {
        $cep = preg_replace('/[^0-9]/im', '', $cep);

        return $this->getFromServer($cep);
    }

    private function getFromServer(string $cep): array
    {
        $get = new ViaCep();

        return $get->get($cep);
    }

    private function processData($data)
    {
        foreach ($data as $key => $val) {
            $data[$key] = trim($val);
        }

        return $data;
    }
}
