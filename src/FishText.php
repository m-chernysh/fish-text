<?php

declare(strict_types=1);

namespace Chernysh\FishText;

class FishText implements FishTextInterface
{

    /**
     * @param int $number
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function loadSentence(int $number = 3): array
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->get('https://fish-text.ru/get?type=sentence&number=' . $number);
        return json_decode($res->getBody()->getContents(), true);
    }

    /**
     * @param int $number
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function loadParagraph(int $number = 3): array
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->get('https://fish-text.ru/get?type=paragraph&number=' . $number);
        return json_decode($res->getBody()->getContents(), true);
    }

    /**
     * @param int $number
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function loadTitle(int $number = 1): array
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->get('https://fish-text.ru/get?type=title&number=' . $number);
        return json_decode($res->getBody()->getContents(), true);
    }

}