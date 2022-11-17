<?php

declare(strict_types=1);

namespace Chernysh\FishText;

interface FishTextInterface
{

    /**
     * Вернет указанное количество предложений
     *
     * @param int $number
     * @return array
     */
    public function loadSentence(int $number = 3): array;

    /**
     * Вернет указанное количество абзацев
     *
     * @param int $number
     * @return array
     */
    public function loadParagraph(int $number = 3): array;

    /**
     * Вернет указанное количество заголовков
     *
     * @param int $number
     * @return array
     */
    public function loadTitle(int $number = 1): array;

}