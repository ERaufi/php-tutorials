<?php
// | Mode   | Meaning                        |
// | ------ | ------------------------------ |
// | `"r"`  | Read only                      |
// | `"w"`  | Write only (overwrite file)    |
// | `"a"`  | Append (write at end)          |
// | `"r+"` | Read + write (file must exist) |
// | `"w+"` | Read + write (overwrite)       |
// | `"a+"` | Read + write (append)          |


// $file=fopen('example.txt','w');
// fclose($file);

// $file=fopen('example.txt','w');
// fwrite($file,"hello, this is my first content\n");
// fclose($file);

// $file=fopen('example.txt','a');
// fwrite($file,"Adding another line....\n");
// fclose($file);


// $content=file_get_contents("example.txt");
// echo $content;


// rename("example.txt","new_example.txt");

// unlink("new_example.txt");


mkdir("my_folder");

?>