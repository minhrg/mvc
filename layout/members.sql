<?php
CREATE TABLE IF NOT EXISTS `member` (
  `mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `login-id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
   PRIMARY KEY (`mem_id`)
) 
ENGINE=InnoDB DEFAULT CHARSET=latin1;
?>