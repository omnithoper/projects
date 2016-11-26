-- put payment create table here
CREATE TABLE `payment` (
  `payment_id` int(9) NOT NULL AUTO_INCREMENT,
  `student_id` int(9) NOT NULL DEFAULT '0',
  `total_amount` int(9) NOT NULL DEFAULT '0',
  `change` int(9) NOT NULL DEFAULT '0',
  `transaction_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `payment` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;