<?php

# Шаблон регулярных выражений - пример вхождения подстроки в строку
$str = 'Masha is very    beautiful';

// $res = preg_split('/\s+/', $str); // делим строку $str по некоему шаблону

// preg_match('/\s+/', $str); // поиск подстроки в строке с помощью регулярных выражений. 1 параметр - шаблон, 2 параметр - строка в которой будем что-то искать. Также есть 3 параметр, необязательный, куда будет записан результат
// preg_match_all('/\s+/', $str); // поиск всех входжений, а не одного как в прошлой строке

// '/[x]/' - найти конктретный символ
// '/iii/' - найти последовательность символов i
// '/[a-c]/' - найти все входжения в этом диапазоне a-c
// '/[a-zA-Z]/' - найти все входжения в этом диапазоне a-c и A-Z
// '/[a-zA-Z0-9]/' - найти все входжения в этом диапазоне a-c и A-Z и 0-9
// '/[\w]/' - найти все сымволы в строке имеющие вид: латинский алфавит, цифры и нижние подчеркивание
// '/[\W]/' - найти все сымволы в строке НЕ имеющие вид: латинский алфавит, цифры и нижние подчеркивание
// '/[\d]/' - найти толкьо цифры
// '/[\D]/' - найти все что НЕ цифры
// '/[\n]/' - найти сколько перенесов в строке
// '/[\t]/' - найти табуляции
// '/a(s|\s)/' - найти все входжения, когда после а идет либо s либо пробел (\s - пробел)
// '/a./' - найти все входжения, сивола а после которого идет любой другой символ
// '/\s{2,}/' - найти пробел который идет 2 и более раз
// '/\s{2,4}/' - найти пробел который идет от 2 до 4 раз
// '/[\S]\s{2,4}\w/' - найти пробел который идет от 2 до 4 раз, до этого идет любой символ кроме пробела, а после идет любой символ из алфавита и цифр
// '/^2/' - найти все что не два (^ - означает НЕ, отрицание)
// '/[A-Z]+/' - найти вхождения заглавных букв, которые повторяются 1 и более раз (+ - означает 1 и более раз)
// '/[а-яА-Я]+/u/' - найти все входжения букв 1 и более раз (/u - работа с мультибайтовыми кодировками, русский язык)



