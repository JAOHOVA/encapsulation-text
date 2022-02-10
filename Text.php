<?php


class Text
{
    public string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function getSentences(): array
    {
        $sentences = explode('.', $this->text);
        array_pop($sentences); //On enlève le dernier élément, toujours vide

        return $sentences;
    }

    public function getTextLength(): int
    {
        return strlen($this->text);
    }

    public function getSentencesCount(): int
    {
        return count($this->getSentences());
    }
}
