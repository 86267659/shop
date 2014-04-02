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

DROP TABLE IF EXISTS `shop_category`;
CREATE TABLE `shop_category`(
	`id` int unsigned not null auto_increment primary key,
	`name` varchar(32) not null,
	`pid` int unsigned not null default 0,
	`path` varchar(255) not null default '0',
	`type` enum('分类','品牌') not null default '分类'
)engine=myisam default charset=utf8;

DROP TABLE IF EXISTS `shop_product`;
CREATE TABLE `shop_product`(
	`id` int unsigned not null auto_increment primary key,
	`name` varchar(300) not null,
	`price` float(10,2) not null default 0.00,
	`memberprice` float(10,2) not null default 0.00,
	`saleprice` float(10,2) not null default 0.00,
	`salestart` int unsigned not null default 0,
	`saleend` int unsigned not null default 0,
	`ishot` tinyint not null default 0,
	`isrecommend` tinyint not null default 0,
	`isdiscount` tinyint not null default 0,
	`discount` float(4,2) not null default 10.00,
	`summary` text,
	`detail` text,
	`clickcount` int unsigned not null default 0,
	`salecount` int unsigned not null default 0,
	`salesurplus` int unsigned not null default 0,
	`productorder` int unsigned not null default 0
)engine=myisam default charset=utf8;

DROP TABLE IF EXISTS `shop_productcate`;
CREATE TABLE `shop_productcate`(
	`pid` int unsigned not null default 1,
	`cid` int unsigned not null default 1
)engine=myisam default charset=utf8;

DROP TABLE IF EXISTS `shop_pic`;
CREATE TABLE `shop_pic`(
	`pid` int unsigned not null default 1,
	`pic` varchar(255) not null default 'default.gif',
	`type` tinyint not null default 1
)engine=myisam default charset=utf8;

DROP TABLE IF EXISTS `shop_brand`;
create table `shop_brand`(
	`id` int unsigned not null auto_increment primary key,
    `name` varchar(300) not null,
    `des` text,
    `pic` varchar(255) not null default 'default.gif'
)engine=myisam default charset=utf8;
	
	
	
	
	
	
	