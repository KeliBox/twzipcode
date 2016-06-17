<?php

namespace Recca0120\Twzipcode;

class Converter
{
    /**
     * $charMap.
     *
     * @var array
     */
    private static $charMap = [
        '　' => ' ',
        '！' => '!',
        '＂' => '"',
        '＃' => '#',
        '＄' => '$',
        '％' => '%',
        '＆' => '&',
        '＇' => "'",
        '（' => '(',
        '）' => ')',
        '＊' => '*',
        '＋' => '+',
        '，' => ',',
        '－' => '-',
        '．' => '.',
        '／' => '/',
        '０' => '0',
        '１' => '1',
        '２' => '2',
        '３' => '3',
        '４' => '4',
        '５' => '5',
        '６' => '6',
        '７' => '7',
        '８' => '8',
        '９' => '9',
        '：' => ':',
        '；' => ';',
        '＜' => '<',
        '＝' => '=',
        '＞' => '>',
        '？' => '?',
        '＠' => '@',
        'Ａ' => 'A',
        'Ｂ' => 'B',
        'Ｃ' => 'C',
        'Ｄ' => 'D',
        'Ｅ' => 'E',
        'Ｆ' => 'F',
        'Ｇ' => 'G',
        'Ｈ' => 'H',
        'Ｉ' => 'I',
        'Ｊ' => 'J',
        'Ｋ' => 'K',
        'Ｌ' => 'L',
        'Ｍ' => 'M',
        'Ｎ' => 'N',
        'Ｏ' => 'O',
        'Ｐ' => 'P',
        'Ｑ' => 'Q',
        'Ｒ' => 'R',
        'Ｓ' => 'S',
        'Ｔ' => 'T',
        'Ｕ' => 'U',
        'Ｖ' => 'V',
        'Ｗ' => 'W',
        'Ｘ' => 'X',
        'Ｙ' => 'Y',
        'Ｚ' => 'Z',
        '［' => '[',
        '＼' => '\\',
        '］' => ']',
        '＾' => '^',
        '＿' => '_',
        '｀' => '`',
        'ａ' => 'a',
        'ｂ' => 'b',
        'ｃ' => 'c',
        'ｄ' => 'd',
        'ｅ' => 'e',
        'ｆ' => 'f',
        'ｇ' => 'g',
        'ｈ' => 'h',
        'ｉ' => 'i',
        'ｊ' => 'j',
        'ｋ' => 'k',
        'ｌ' => 'l',
        'ｍ' => 'm',
        'ｎ' => 'n',
        'ｏ' => 'o',
        'ｐ' => 'p',
        'ｑ' => 'q',
        'ｒ' => 'r',
        'ｓ' => 's',
        'ｔ' => 't',
        'ｕ' => 'u',
        'ｖ' => 'v',
        'ｗ' => 'w',
        'ｘ' => 'x',
        'ｙ' => 'y',
        'ｚ' => 'z',
        '｛' => '{',
        '｜' => '|',
        '｝' => '}',
        '～' => '~',
    ];

    /**
     * $str.
     *
     * @var string
     */
    private $str;

    public function __construct($str)
    {
        $this->str = $str;
    }

    /**
     * full.
     *
     * @return string
     */
    public function full()
    {
        return strtr($this->str, array_flip(self::$charMap));
    }

    /**
     * half.
     *
     * @return string
     */
    public function half()
    {
        return strtr($this->str, self::$charMap);
    }

    /**
     * toFull.
     *
     * @param string $str
     *
     * @return string
     */
    public static function toFull($str)
    {
        return (new static($str))->full();
    }

    /**
     * toHalf.
     *
     * @param string $str
     *
     * @return string
     */
    public static function toHalf($str)
    {
        return (new static($str))->half();
    }
}
