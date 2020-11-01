-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020 年 10 月 25 日 16:37
-- 服务器版本: 5.5.40
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `mydb`
--

-- --------------------------------------------------------

--
-- 表的结构 `admindata`
--

CREATE TABLE IF NOT EXISTS `admindata` (
  `name` varchar(32) NOT NULL COMMENT '姓名',
  `gender` varchar(32) NOT NULL COMMENT '性别',
  `age` int(11) NOT NULL COMMENT '年龄',
  `briday` date NOT NULL COMMENT '生日',
  `ihpone` bigint(30) NOT NULL COMMENT '手机号',
  `emil` varchar(32) NOT NULL COMMENT '电子邮箱',
  `content` text NOT NULL COMMENT '个人简介',
  `user` varchar(32) NOT NULL COMMENT '用户名'
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `admindata`
--

INSERT INTO `admindata` (`name`, `gender`, `age`, `briday`, `ihpone`, `emil`, `content`, `user`) VALUES
('小梁', '女', 30, '2020-09-16', 15181445847, '526635387@qq.com', '111111asss', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '' COMMENT '部门名称',
  `Total` int(32) NOT NULL COMMENT '总人数',
  `information` text COMMENT '部门详细信息',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `department`
--

INSERT INTO `department` (`id`, `name`, `Total`, `information`) VALUES
(1, '招聘部', 15, '招聘部就是牛！'),
(2, '人事部', 13, '11111'),
(3, '面试部', 15, '面试部');

-- --------------------------------------------------------

--
-- 表的结构 `employeelist`
--

CREATE TABLE IF NOT EXISTS `employeelist` (
  `state` varchar(4) NOT NULL COMMENT '状态',
  `num` bigint(20) NOT NULL COMMENT '编号',
  `name` varchar(4) NOT NULL COMMENT '姓名',
  `gender` enum('男','女') NOT NULL COMMENT '性别',
  `age` int(11) NOT NULL COMMENT '年龄',
  `department` varchar(11) NOT NULL COMMENT '部门',
  `hiredate` date NOT NULL COMMENT '入职时间',
  `leavedate` date NOT NULL COMMENT '离职时间',
  `id` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL COMMENT '手机号',
  `birthplace` varchar(32) NOT NULL COMMENT '籍贯',
  `heigh` int(11) NOT NULL COMMENT '身高',
  `weight` int(11) NOT NULL COMMENT '体重',
  `education` varchar(32) NOT NULL COMMENT '学历',
  `major` varchar(32) NOT NULL COMMENT '专业',
  `birthday` date NOT NULL COMMENT '出生日期',
  `School` varchar(32) NOT NULL COMMENT '毕业院校',
  `email` varchar(100) NOT NULL COMMENT '邮箱',
  `address` varchar(100) NOT NULL COMMENT '家庭住址',
  `explain` text NOT NULL COMMENT '个人说明',
  `experience` text NOT NULL COMMENT '工作经历',
  `nation` varchar(32) NOT NULL COMMENT '民族',
  `username` varchar(32) NOT NULL COMMENT '员工账号',
  `zhaopian` varchar(255) DEFAULT NULL COMMENT '照片',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `employeelist`
--

INSERT INTO `employeelist` (`state`, `num`, `name`, `gender`, `age`, `department`, `hiredate`, `leavedate`, `id`, `phone`, `birthplace`, `heigh`, `weight`, `education`, `major`, `birthday`, `School`, `email`, `address`, `explain`, `experience`, `nation`, `username`, `zhaopian`) VALUES
('正常', 12345678901, '张01', '男', 50, '人事部', '2020-10-17', '0000-00-00', 1, '', '汉', 0, 112, '', '', '0000-00-00', '', '           ', '', '', '', '汉', 'zhanglingyi', 'img/touxiang/timg.jpg'),
('正常', 12345678902, '张02', '男', 18, '人事部', '2020-10-17', '0000-00-00', 2, '', '', 0, 0, '', '', '0000-00-00', '', ' ', '', '', '', '', 'zhanglingrt', 'img/touxiang/u=387639067,1599589691&fm=26&gp=0.jpg'),
('正常', 12345678903, '张03', '男', 18, '人事部', '2020-10-17', '0000-00-00', 3, '', '', 0, 0, '', '', '0000-00-00', '', '', '', '', '', '', '', NULL),
('正常', 12345678904, '张04', '男', 18, '财务部', '2020-10-17', '0000-00-00', 4, '', '', 0, 0, '', '', '0000-00-00', '', '', '', '', '', '', '', NULL),
('正常', 12345678905, '张05', '男', 5, '人事部', '2020-10-17', '0000-00-00', 5, '', '', 0, 0, '', '', '0000-00-00', '', '', '', '', '', '', '', NULL),
('离职', 12345678906, '张06', '女', 18, '管理部', '2020-10-17', '0000-00-00', 6, '', '', 0, 0, '', '', '0000-00-00', '', '', '', '', '', '', '', NULL),
('正常', 12345678907, '张07', '男', 18, '人事部', '2020-08-16', '0000-00-00', 7, '', '', 0, 0, '', '', '0000-00-00', '', ' ', '', '', '', '', '', NULL),
('正常', 12345678908, '张08', '男', 40, '人事部', '2020-08-12', '0000-00-00', 8, '', '', 0, 0, '', '', '0000-00-00', '', '', '', '', '', '', 'zhanglingba', NULL),
('正常', 12345678909, '张09', '男', 18, '人事部', '2020-08-11', '0000-00-00', 9, '', '', 0, 0, '', '', '0000-00-00', '', '  ', '', '', '', '汉', '', 'img/touxiang/timg.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `emuser`
--

CREATE TABLE IF NOT EXISTS `emuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) DEFAULT NULL COMMENT '名字',
  `number` bigint(20) NOT NULL COMMENT '编号',
  `xingbie` varchar(10) NOT NULL COMMENT '性别',
  `username` varchar(120) NOT NULL COMMENT '账号',
  `password` varchar(120) DEFAULT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `emuser`
--

INSERT INTO `emuser` (`id`, `name`, `number`, `xingbie`, `username`, `password`) VALUES
(1, '张01', 12345678901, '男', 'zhanglingyi', 'xx1314520zz'),
(5, '张02', 12345678902, '男', 'zhanglingrt', '123456');

-- --------------------------------------------------------

--
-- 表的结构 `gonggao`
--

CREATE TABLE IF NOT EXISTS `gonggao` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(120) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `time` date NOT NULL COMMENT '发布时间',
  `Publisher` varchar(30) NOT NULL COMMENT '发布人',
  `state` varchar(10) NOT NULL COMMENT '状态',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `gonggao`
--

INSERT INTO `gonggao` (`ID`, `title`, `content`, `time`, `Publisher`, `state`) VALUES
(7, '开会', '开会', '2020-10-25', '管理员', '已发布'),
(6, '开会通知', '开会！！！1', '2020-10-25', '管理员', '已发布'),
(4, '职位调动通知', '舒适生调到人事部部长！！！！', '2020-10-15', '小杜林', '已发布'),
(3, '舒适生', '水水水水', '2020-10-16', '舒适生', '已发布'),
(2, '搜索', 'ssssss', '0000-00-00', '死死得', '已发布');

-- --------------------------------------------------------

--
-- 表的结构 `kaoqin`
--

CREATE TABLE IF NOT EXISTS `kaoqin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL COMMENT '名字',
  `number` bigint(20) NOT NULL COMMENT '员工编号',
  `time` datetime NOT NULL COMMENT '打卡时间',
  `state` varchar(10) NOT NULL COMMENT '状态',
  `username` varchar(120) NOT NULL COMMENT '员工账号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `kaoqin`
--

INSERT INTO `kaoqin` (`id`, `name`, `number`, `time`, `state`, `username`) VALUES
(6, '张01', 12345678901, '2020-10-25 16:17:11', '迟到', 'zhanglingyi'),
(5, '张05', 12345678905, '2020-10-17 19:00:00', '迟到', ''),
(4, '张04', 12345678904, '2020-10-17 19:00:00', '正常', ''),
(3, '张03', 12345678903, '2020-10-17 19:05:00', '正常', ''),
(2, '张02', 12345678902, '2020-10-17 19:03:00', '正常', 'zhanglingrt'),
(1, '张01', 12345678901, '2020-10-17 19:00:00', '正常', '');

-- --------------------------------------------------------

--
-- 表的结构 `payroll`
--

CREATE TABLE IF NOT EXISTS `payroll` (
  `num` bigint(20) NOT NULL COMMENT '编号',
  `name` varchar(4) NOT NULL COMMENT '姓名',
  `id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL COMMENT '职称',
  `monthlysalary` int(11) NOT NULL COMMENT '月薪',
  `hourlywage` int(11) NOT NULL COMMENT '时薪',
  `Absencedays` int(11) NOT NULL COMMENT '缺勤天数',
  `Overtimehours` int(11) NOT NULL COMMENT '加班时数',
  `ZhengBan` int(11) NOT NULL COMMENT '正班薪资',
  `JiaBan` int(11) NOT NULL COMMENT '加班薪资',
  `allowance` int(11) NOT NULL COMMENT '津贴',
  `PA` int(11) NOT NULL COMMENT '全勤奖',
  `DFAFW` int(11) NOT NULL COMMENT '请假缺勤扣款',
  `SSF` int(11) NOT NULL COMMENT '社保费用',
  `DueToPay` int(11) NOT NULL COMMENT '应得薪资',
  `PersonalTax` int(11) NOT NULL COMMENT '个人扣税',
  `RHS` int(11) NOT NULL COMMENT '实发薪资',
  `username` varchar(32) NOT NULL COMMENT '员工账号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `payroll`
--

INSERT INTO `payroll` (`num`, `name`, `id`, `title`, `monthlysalary`, `hourlywage`, `Absencedays`, `Overtimehours`, `ZhengBan`, `JiaBan`, `allowance`, `PA`, `DFAFW`, `SSF`, `DueToPay`, `PersonalTax`, `RHS`, `username`) VALUES
(0, '张01', 1, '普通员工', 2000, 50, 0, 20, 1000, 2000, 500, 500, 0, 2000, 2000, 500, 1500, 'zhanglingyi'),
(0, '张02', 2, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'zhanglingrt'),
(0, '张03', 3, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(0, '张04', 4, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(0, '张05', 5, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(0, '张06', 6, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(0, '张07', 7, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(0, '张08', 8, '普通员工', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'zhanglingba'),
(0, '张09', 9, '普通员工', 50000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `username`
--

CREATE TABLE IF NOT EXISTS `username` (
  `id` int(10) unsigned DEFAULT NULL COMMENT '编号',
  `username` varchar(32) DEFAULT NULL COMMENT '用户名',
  `password` varchar(32) DEFAULT NULL COMMENT '密码'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `username`
--

INSERT INTO `username` (`id`, `username`, `password`) VALUES
(1, 'admin', 'xx1314520zz');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
