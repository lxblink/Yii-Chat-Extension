<?php

/*

 * Chat widget class file.

 * Chat extends CWidget

 * @version 1.0 - 20130429

 * @author lxblink <lxblink@gmail.com>

 */



class Chat extends CWidget

{

    /**

     * Array of Options

     *

     * @var array

     */

    public $_options = array(

        // Update chat delay

        'delay' => '5000',

        // Max length of message (characters)

        'maxMsgLegth' => 100,

        // Count of last messages

        'countOfLastMsg' => 15,

    );

    /**

     * Array of External Options

     *

     * @var array

     */

    public $options = array();

    /**

     * Pusblish assets

     */

    public function init()

    {

        $this->publishAssets();

    }

    /**

     * Running chat

     */

    public function run()

    {

        echo $this->render('chat_view');

    }



    protected function publishAssets()

    {

        /*

         *  Registering js and css

         */
        
        Yii::app()->getClientScript()->registerCoreScript('jquery');

        $js = dirname(__FILE__) . '/js';
        
        $css = dirname(__FILE__) . '/css';

        $jsUrl = Yii::app()->assetManager->publish($js);
        
        $cssUrl = Yii::app()->assetManager->publish($css);

        Yii::app()->clientScript->registerScriptFile($jsUrl . '/chat.js', CClientScript::POS_HEAD);

        Yii::app()->clientScript->registerCssFile($cssUrl . '/chat.css');


    }



}
