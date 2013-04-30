Yii-Chat-Extension
==================

Simple chat extension for Yii framework.

Installation
===

1. Clone it using GIT into yout Yii extensions folder.

> git clone git://github.com/lxblink/Yii-Chat-Extension.git

Quote break.

2. In config/main, in your imports, add:

> 'imports' => array(
>        ..bla..
>        'application.extensions.chat.*',
>    ),

Quote break.

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

Quote break.

4. Put this code inside "position: relative" block (it can be in layout or view).

> <?php $this->widget('application.extensions.chat.Chat'); ?>

5. Execute sql query from "sql/chatSQL.sql".

Almost done!