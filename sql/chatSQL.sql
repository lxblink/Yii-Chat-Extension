CREATE TABLE `tbl_chat` (
`id_chat`  int NOT NULL AUTO_INCREMENT ,
`chat_user_id`  int NULL ,
`chat_message`  text NULL ,
`chat_created`  bigint(20) NULL ,
PRIMARY KEY (`id_chat`)
);
