<?php
                            //НАСТРОЙКИ СКРИПТА//
                            //Ссылка на картинку, которая будет отображаться, если изображение не найдено в базе LAST.FM
                            $no_photo_url='http://upload.wikimedia.org/wikipedia/commons/3/37/No_person.jpg';
                            $width='100'; //ширина картинки
                            $height='100';  //высота картинки
                            //НЕ ИЗМЕНЯЙТЕ НИЧЕГО НИЖЕ///
                            //LIVE STREAM
                            $data = json_decode(file_get_contents("http://a3.radioheart.ru:8038/json.xsl?mount=/RH60011"));
                            if (!count($data->mounts) || strlen($data->mounts[0]->server_name) < 2) {
                                //NONSTOP
                                $data = json_decode(file_get_contents("http://a3.radioheart.ru:8038/json.xsl?mount=/nonstop"));
                            }
                            $stream_title = $data->mounts[0]->server_name;
                            //Если сайт в кодировке windows-1251 (cp-1251), раскомментируйте следующую строчку
                            //$stream_title = iconv("UTF-8", "WINDOWS-1251", $stream_title);
                            $stream_description = $data->mounts[0]->description;
                            $listeners = $data->mounts[0]->listeners;
                            $song = $data->mounts[0]->title;
                            $image = '';
                            //Если сайт в кодировке windows-1251 (cp-1251), раскомментируйте следующую строчку
                            //$song = iconv("UTF-8", "WINDOWS-1251", $song);
                            $artist = explode(" - ", $song);
                            $artist = $artist[0];
                            $artist = str_replace(" ", " ", $artist);
                            $size = "large";
                                                        // Выводим данные
                            echo "<div id='radiostat'>";

                            echo "$song";

                            echo "</div>";
                            ?>
