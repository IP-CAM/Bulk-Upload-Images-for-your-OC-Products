<?php
// Heading
$_['heading_title']             = 'Fancy upload';

$_['text_edit']                 = 'Насройки';
$_['text_extension']            = 'Расширения';
$_['button_save']               = 'Сохранить';
$_['button_cancel']             = 'Отмена';

$_['tab_upload']                = 'Загрузка';
$_['tab_interface']             = 'Интерфейс';

$_['entry_path']                = 'Папка для загрузки изображений';
$_['entry_path_help']           = 'Вы можете создавать статичные и динамические пути используя шорткоды. Динамические пути могут быть уникальными для каждого товара.';

$_['text_show_description']     = 'Показать описание';
$_['entry_path_description']    = "
<h4><b>Примеры</b></h4>
<ul>
<li>products/[product_name]-[product_id] = <b>products/mac-book-pro-28</b></li>
<li>products/[manufacturer_name]/[product_name] = <b>products/apple/mac-book-pro</b></li>
<li>products/[manufacturer_id]/[product_name] = <b>products/2/mac-book-pro</b></li>
<li>products/[category_name]/[product_name] = <b>products/laptops/mac/mac-book-pro</b></li>
<li>products/[category_id]/[product_id] = <b>products/21/26/28</b></li>
</ul>
<hr>
<h4><b>Доступные шорткоды</b></h4>
<div class='col-sm-6'>
<p>Product - [product_*]</p>
<ul>
    <li>[product_id]</li>
    <li>[product_name]</li>
    <li>[product_model]</li>
    <li>[product_sku]</li>
    <li>[product_upc]</li>
    <li>[product_ean]</li>
    <li>[product_jan]</li>
    <li>[product_isbn]</li>
    <li>[product_mpn]</li>
    <li>[product_location]</li>
    <li>[product_image]</li>
    <li>[product_length]</li>
    <li>[product_width]</li>
    <li>[product_height]</li>
    <li>[product_tag]</li>
    <li>[product_meta_title]</li>
    <li>[product_meta_h1]</li>
    <li>[product_meta_keyword]</li>
    <li>[product_keyword]</li>
</ul>
</div>
<div class='col-sm-6'>
<p>Производитель - [manufacturer_*]</p>
<ul>
    <li>[manufacturer_id]</li>
    <li>[manufacturer_name]</li>
    <li>[manufacturer_meta_title]</li>
    <li>[manufacturer_meta_h1]</li>
    <li>[manufacturer_meta_keyword]</li>
</ul>
<p>Категории - [category_*]</p>
<ul>
    <li>[category_id]</li>
    <li>[category_name]</li>
    <li>[category_image]</li>
    <li>[category_parent_id]</li>
    <li>[category_meta_title]</li>
    <li>[category_meta_h1]</li>
    <li>[category_meta_keyword]</li>
    <li>[category_path]</li>
    <li>[category_keyword]</li>
</ul>
Если у товара назначена главная категория, то она будет использована, включая все родительские категории. Если това находится в нескольких категориях, то быдет выбран самый длинный путь. 
Например, товар находится в двух категориях \"Ноутбуки\" и \"Ноутбуки>Windows\", будет выбран \"Ноутбуки>Windows\".
</div>
<div class=\"col-sm-12\">
<hr>
<h4><b>Правила автоматической очистки путей и названий файлов</b></h4>
<p>Все символы, используемые в путях и названиях файлов будут автоматически удалены или заменены в соответствии с правилами, описанными ниже. Например, \"Apple Cinema '30\" = \"apple-cinema-30\"</p>
<ul>
<li>Зарезирвированные символы файловой системы <a href=\"https://en.wikipedia.org/wiki/Filename#Reserved_characters_and_words\">https://en.wikipedia.org/wiki/Filename#Reserved_characters_and_words</a></li>
<li>Контрольные символы <a href=\"\">http://msdn.microsoft.com/en-us/library/windows/desktop/aa365247%28v=vs.85%29.aspx</a></li>
<li>Непечатаемые символы DEL, NO-BREAK SPACE, SOFT HYPHEN</li>
<li>URI зарезервированные <a href=\"https://www.rfc-editor.org/rfc/rfc3986#section-2.2\">https://www.rfc-editor.org/rfc/rfc3986#section-2.2</a></li>
<li>URL небезопасные символы <a href=\"https://www.ietf.org/rfc/rfc1738.txt\">https://www.ietf.org/rfc/rfc1738.txt</a></li>
<li>Вся кириллица будет транслитерирована в литиницу</li>
<li>Все пробелы будут заменены на дефис</li>
</ul>
</div>
";

$_['entry_exec']                = 'Выполнить команду после загрузки';
$_['entry_exec_help']           = 'Используется команда shell_exec. ${image} будет заменен на абсолютный путь. Оставьте пустым, если не используется.';

$_['entry_change_image_size']   = 'Изменить размер оригинала после загрузкиы';
$_['entry_change_image_size_help'] = 'Это опциональный пункт для тех кто загружает больщие изображения и хочет сэкономить место. Эта опция увеличивает время загрузки файлов.';
$_['entry_image_size']          = 'Размер оригинала';

$_['text_height']               = 'Ширина';
$_['text_width']                = 'Высота';

$_['entry_disable_confirm']     = 'Отключить диалоги подтверждения';
$_['text_current_values']       = 'Текущие значения php.ini';

// Modal
$_['button_save']               = 'Сохранить';
$_['button_apply']              = 'Применить';
$_['button_close']              = 'Закрыть';
// Grid
$_['button_select_all']         = 'Выделить все';
$_['button_unselect_all']       = 'Снять выделение';
$_['button_delete']             = 'Удалить файл';
$_['button_remove']             = 'Удалить';
$_['button_rotate_left']        = 'Повернуть влево';
$_['button_rotate_right']       = 'Повернуть вправо';
$_['button_reload']             = 'Перезагрузить';
$_['button_move']               = 'Переместить внешние изображения';
$_['button_upload']             = 'Загрузить';
$_['button_settings']           = 'Настройка';

// Messages
$_['text_success']              = 'Настройки успешно сохранены!';
$_['text_success_set']          = 'Изображения успешно обновлены!';
$_['text_success_deleted']      = 'Изображение успешно удалено!';
$_['text_success_moved']        = 'Изображение успешно перенесено!';

$_['text_uploading_files']      = 'Загрузка файлов $%';
$_['text_uploaded']             = 'Загрузка завершена. Ожидание ответа.';
$_['text_upload_message_d']     = 'Загружено $ файлов из $ в $';
$_['text_upload_message']       = 'Загружено $ файлов из $';
$_['text_moved_message_d']      = 'Перемещено $ файлов из $ в $';
$_['text_moved_message']        = 'Перемещено $ файлов из $';
$_['text_saving']               = 'Сохранение...';
$_['text_upload_errors']        = 'При загрузке файлов произошли ошибки';
$_['text_confirm_relocate']     = 'Будьте осторожны с этой функцией. Эта функция переместит все файлы в новую директорию. Если изображение связано с несколькими товарами, то после переноса во втором товаре оно будет отсутствовать. Вы уверены что хотите сделать это?';

$_['error_empty_images']        = 'Не выбраны изображения!';
$_['error_permission']          = 'У вас нет прав для работы с модулем!';
$_['error_exists']              = 'Файл или лиректория с таким же названием уже существует!';
$_['error_filesize']            = 'Некорректный размер файла!';
$_['error_filetype']            = 'Некорректный тип файла!';
$_['error_upload']              = 'Файл не может быть загружен по неизвестной причине!';
