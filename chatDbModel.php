<?php

class ChatDbModel extends CActiveRecord {

    public function tableName() {
        return "tbl_chat";
    }

    public function relations() {
        return array(
            'user' => array(self::BELONGS_TO, 'User', 'chat_user_id')
        );
    }

    /**
      post a message in database.
     */
    
    public function postMessage($message, $user_id = null) {


        $filtered_message = trim($message);
        if ($filtered_message != "") {
            $this->chat_message = trim(htmlspecialchars($filtered_message));
            $this->chat_created = time();
            $this->chat_user_id = $user_id;
            $this->save();
            return true;
        }
        else
            return false;
    }
    
    /**
      getting messages from database.
     */
    
    public function getMessages($count = false) {

        if (!$count) {
            return $this->findAll(array(
                        'order' => 't.chat_created desc',
                    ));
        } else {
            return $this->with('user')->findAll(array(
                        'order' => 't.chat_created desc',
                        'limit' => $count,
                    ));
        }
    }

}

?>
