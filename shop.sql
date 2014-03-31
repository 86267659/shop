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
	`sex` enum('����','��','Ů') not null default '����',
	`edu` enum('Сѧ','����','����','��ר','����','˶ʿ�о���','��ʿ�о���','����'),
	`signed` text,
	`pic` varchar(255) not null default 'default.gif',
	`telephone` varchar(20),
	`qq` varchar(20),
	`email` varchar(255)
)engine=myisam default charset=utf8;
	
	
	
	
	
	
	
	
	