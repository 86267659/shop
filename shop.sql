DROP TABLE IF EXISTS `shop_user`;
CREATE TABLE `shop_user`(
	`id` int unsigned not null auto_increment primary key,
	`username` varchar(32) not null,
	`password` char(32) not null,
	`rtime` int unsigned not null default 0,
	`rip` int unsigned not null default 0,
	`logintime` int unsigned not null default 0,
	`loginip` int unsigned not null default 0
)engine=myisam default charset=utf8;

DROP TABLE IF EXISTS `shop_profile`;
CREATE TABLE `shop_profile`(
	`uid` int unsigned not null default 1,
	`tname` varchar(32),
	`age` tinyint unsigned not null default 0,
	`sex` enum('保密','男','女') not null default '保密',
	`edu` enum('小学','初中','高中','大专','本科','硕士研究生','博士研究生','其他'),
	`signed` text,
	`pic` varchar(255) not null default 'default.gif',
	`telephone` varchar(20),
	`qq` varchar(20),
	`email` varchar(255)
)engine=myisam default charset=utf8;
	
	
	
	
	
	
	
	
	