# Генератор случайного текста

Отсылаем запросы к API https://fish-text.ru/api и возвращаем полученный результат в виде массива строк

## Требования

 - PHP 7.4

## Установка

```bash
$ composer require m-chernysh/fish-text
```

## Использование

```php
$fish = new FishText();

// Вернет указанное количество предложений
echo $fish->loadSentence(10);

// Вернет указанное количество абзацев
echo $fish->loadParagraph(3);

// Вернет указанное количество заголовков
echo $fish->loadTitle(1);

```