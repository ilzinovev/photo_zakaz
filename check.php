

<?php


$order=date("j").date("g").date("i").date("s");


$fd = fopen("images/zakaz.txt", 'w');
$str='Номер заказа '.$order.PHP_EOL.'Размер фото: '.$_POST['nameselect'].PHP_EOL.'Бумага: '.$_POST['paper'].PHP_EOL.'Поля: '.$_POST['border'].PHP_EOL.'Имя клиента: '.$_POST['name'].PHP_EOL.'Телефон клиента: '.$_POST['phone'].PHP_EOL.'Дата создания заказа: '.date("m.d.y");

fwrite($fd, $str);
fclose($fd);
$kolvo=0;

$pathdir='images/'; // путь к папке, файлы которой будем архивировать
$nameArhive = 'orders/'.$order.'.zip'; //название архива
$zip = new ZipArchive; // класс для работы с архивами
if ($zip -> open($nameArhive, ZipArchive::CREATE) === TRUE){ // создаем архив, если все прошло удачно продолжаем
    $dir = opendir($pathdir); // открываем папку с файлами
    while( $file = readdir($dir)){
        // перебираем все файлы из нашей папки
            if (is_file($pathdir.$file)){
                 // проверяем файл ли мы взяли из папки
                $zip -> addFile($pathdir.$file, $file); // и архивируем
                $kolvo=$kolvo+1;
            }
    }
    $zip -> close(); // закрываем архив.
    //echo 'Архив успешно создан';
   // get all file names

}else{
    //die ('Произошла ошибка при создании архива');
}

function delete_directory($dirPath){
        $dir = $dirPath;
        if(is_dir($dir)){
            $files = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS), RecursiveIteratorIterator::CHILD_FIRST
            );
            foreach($files as $file){
              $kolvo=$kolvo+1;
                if ($file->isDir()){
                    rmdir($file->getRealPath());

                }else{
                    unlink($file->getRealPath());

                }
            }

        }

    }
error_reporting(0);
delete_directory('images/');

$url="http://photo-zakaz/order_ready.php"."?order=".$order."&size=".$_POST['nameselect']."&paper=".$_POST['paper']."&border=".$_POST['border']."&name=".$_POST['name']."&phone=".$_POST['phone']."&count=".$kolvo;
exit("<meta http-equiv='refresh' content='0; url= $url'>");
 ?>
