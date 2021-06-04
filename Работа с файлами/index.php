<?php
    // r - только для чтения. Курсор в самом начале файла    } они оба будут перезаписывать текст который в файле
    // r+ - для чтение и записи. Курсор в самом начале файла }
    // w - только для записи, курсор, в начале файла, удаляет все символы в файле. Если файла нет, пробует создать
    // w+ - только для записи, курсор, в начале файла, удаляет все символы в файле. Если файла нет, пробует создать
    // a -  только для записи, курсор в конце файла
    // a+ -  для чтение и записи, курсор в конце файла. Если файла нет, пробует создать
    // a+t - говорит о том, что у файле будет возможность делать следующее "\n" "\t" ...

    // ОТКРЫВАЮ ФАЙЛ ДЛЯ ЗАПИСИ ДОЗАПИСИ
//    $file = fopen("test_file.txt", "a+t");  // открываю файл для дозаписи
//    fwrite($file, "Новая строка\nText\nNexu\n"); // делает запись в файле
//    fclose($file); // закрываю файл

    // ОТКРЫВАЮ ФАЙЛ ДЛЯ ЧТЕНИЯ
//     $file = fopen("test_file.txt", "r+t");
//
//     // feof - проверяет файл на то, сколько мы его уже считали
//     while (!feof($file)){
//         echo fread($file, 1); // считывает файл по 1 символу из строчки
//     }
//     fseek($file, 0); // устанавливает курсор на определенную строчку файла (здесь установить на 0 строчку)
//     fclose($file); // закрываю файл

    // РАЗНЫЕ ФУНКЦИИ ДЛЯ РАБОТЫ С ФАЙЛАМИ
    file_put_contents("test_file_two.txt", "TEST"); // открывает файл, если такого нет - создает, и записывает туда что-то. По сути является заменой для функций fopen(), fwrite(), fclose()
    file_get_contents("test_file_two.txt"); // выводит на экран содержимое файла
    file_exists("test_file_two.txt"); // проверяет существует ли файл и возвращяет 1 или 0 соотвественно
    filesize("test_file_two.txt"); // возвращяет размер файла
    rename("test_file_two.txt", "rename file test_file_two"); // переименовывает файл
    unlink("rename file test_file_two"); // удаляет файл