-- put settings create table here
CREATE TABLE `settings` (
  `number_of_allowed_units` int(9) DEFAULT NULL,
  `price_per_unit` int(9) DEFAULT NULL,
  `price_of_misc` int(9) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;