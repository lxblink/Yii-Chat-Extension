Yii-Chat-Extension
==================

Simple chat extension for Yii framework.

Installation
===

1. Clone it using GIT into yout Yii extensions folder.

> git clone git://github.com/lxblink/Yii-Chat-Extension.git



2. In config/main, in your imports, add:

> 'import' => array(
>        ..bla..
>        'application.extensions.Yii-Chat-Extension.*',
>    ),



3. Edit your file: 'protected/controllers/siteController.php' and add the static action int actions() array.

>    public function actions()
>    {
>        return array(
>            ..bla..
>            'chat' => array(
>                            'class' => 'ChatAction'
>            ) 
>        );
>    }



4. Put this code inside "position: relative" block (it can be in layout or view).

> <?php $this->widget('application.extensions.Yii-Chat-Extension.Chat'); ?>

5. Execute sql query from "sql/chatSQL.sql".

All done!




Used server software:

1. Apache 2.2.24
2. PHP 5.4.13
3. MySQL 5.6.10

