SELECT * FROM movie; 


/* 
===========================Buy Domain Table=======================
CREATE TABLE `buy_domain` (
  `domain_id` int(64) NOT NULL auto_increment,
  `domain_theatre_id` varchar(64) NOT NULL, //Here it is buyer
  `domain_name` varchar(128) NOT NULL,
  `domain_extension` varchar(128) NOT NULL,
  `domain_price` varchar(30) NOT NULL,
  PRIMARY KEY  (`domain_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;
============================CONTACT===============================
===========================Requested Domain Table=================
CREATE TABLE `request_domain` (
  `request_id` int(64) NOT NULL auto_increment,
  `request_domain_id` varchar(64) NOT NULL,
  `request_theatre_id` varchar(64) NOT NULL,   
  PRIMARY KEY  (`request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;
===========================ShowCase Domain=========================
CREATE TABLE `showcase_domain` (
  `showcase_domain_id` int(64) NOT NULL auto_increment, 
  `showcase_domain_name` varchar(128) NOT NULL,
  `showcase_domain_extension` varchar(128) NOT NULL,  
  `showcase_domain_price` varchar(30) NOT NULL,  
  PRIMARY KEY  (`showcase_domain_id`)  
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;
===================================================================
//Not used presently
=====================================VALIDITY=======================
CREATE TABLE `validity`(
  `employer_id` int(4) NOT NULL auto_increment,
  `plan` varchar(30) NOT NULL,
  `number` int(4) NOT NULL,
  `validity1` int(4) NOT NULL,
  `downloads` int(4) NOT NULL,
  `validity2` date NOT NULL, 
PRIMARY KEY  (`employer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100;
=====================================================================
*>
