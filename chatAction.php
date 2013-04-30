<?php

class ChatAction extends CAction {

    public function run() {
        $action = isset($_POST['action']) ? $_POST['action'] : null;
        $result = false;
        if ($action == 'post' || $action == 'get') {
            if ($action == 'post') {
                $message = isset($_POST['message']) ? $_POST['message'] : '';
                $model = new ChatDbModel;
                $model->postMessage($message, Yii::app()->user->getID());
            }

            $model = new ChatDbModel;
            $result = $this->mapRows($model->getMessages(15));
        }
        header("Content-type: application/json");
        echo CJSON::encode($result);
    }

    private function mapRows($rows = array()) {
        $result = array();
        $count = 0;
        foreach ($rows as $row) {
            $result[$count] = $row->attributes;
            if (isset($row->user->username)) {
                $result[$count]['username'] = $row->user->username;
            }
            $count++;
        }
        return array_reverse($result);
    }

}

?>
