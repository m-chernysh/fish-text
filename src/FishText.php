<?php

declare(strict_types=1);

namespace Chernysh\FishText;

class FishText implements FishTextInterface
{

    public function loadSentence(int $number = 3): array
    {
        return [];
    }

    public function loadParagraph(int $number = 3): array
    {
        return [];
    }

    public function loadTitle(int $number = 1): array
    {

        $client = new \GuzzleHttp\Client();

        $res = $client->get('https://fish-text.ru/get');

        echo $res->getStatusCode();
        echo $res->getBody();

        return [];
    }

}