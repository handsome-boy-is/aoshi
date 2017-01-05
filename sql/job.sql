-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-01-04 17:16:25
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yuanku_job`
--

-- --------------------------------------------------------

--
-- 表的结构 `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_name` varchar(50) NOT NULL,
  `job_type` varchar(50) NOT NULL,
  `enterprise_id` int(11) NOT NULL,
  `place` varchar(255) NOT NULL,
  `money` int(11) NOT NULL,
  `work_time` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `job_require` text NOT NULL,
  `job_describe` text NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0:岗位不显示;1:显示',
  `add_time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `job`
--

INSERT INTO `job` (`id`, `job_name`, `job_type`, `enterprise_id`, `place`, `money`, `work_time`, `education`, `email`, `job_require`, `job_describe`, `status`, `add_time`) VALUES
(13, '阿里巴巴数据分析师', '', 15, '天河区棠东东路11号御富科贸园A1座B406室', 0, '', '', '', '塑料袋可分解落实扩', '1、有良好的代码习惯，要求结构清晰，命名规范，逻辑性强，代码冗余率低；较强的文档编写能力；\n                            2、基础扎实、思路清晰，有独立设计算法、解决程序问题的能力；\n                            3、对新技术感兴趣，学习能力强，有钻研和开拓精神；具有良好的沟通能力、合作能力、逻辑分析与表达能力，具有较强的团队协作精神及高度的责任心。\n                        ', 0, '1481267113'),
(6, 'HTML5程师', '', 15, '天河区棠东东路11号御富科贸园A1座B406室', 88888, '', '', '', '桑兰多夫空军看风景斯蒂芬', '1、有良好的代码习惯，要求结构清晰，命名规范，逻辑性强，代码冗余率低；较强的文档编写能力；\n                            2、基础扎实、思路清晰，有独立设计算法、解决程序问题的能力；\n                            3、对新技术感兴趣，学习能力强，有钻研和开拓精神；具有良好的沟通能力、合作能力、逻辑分析与表达能力，具有较强的团队协作精神及高度的责任心。\n                        ', 0, '1481183427'),
(5, 'JS攻城', '', 15, '天河区棠东东路11号御富科贸园A1座B406室', 88888, '', '', '', '会攻城！', '1、有良好的代码习惯，要求结构清晰，命名规范，逻辑性强，代码冗余率低；较强的文档编写能力；\n                            2、基础扎实、思路清晰，有独立设计算法、解决程序问题的能力；\n                            3、对新技术感兴趣，学习能力强，有钻研和开拓精神；具有良好的沟通能力、合作能力、逻辑分析与表达能力，具有较强的团队协作精神及高度的责任心。\n                        ', 0, '1481178395'),
(11, 'PHP高级工程师', '', 15, '天河区棠东东路11号御富科贸园A1座B406室', 88888, '', '', '', '', '1、有良好的代码习惯，要求结构清晰，命名规范，逻辑性强，代码冗余率低；较强的文档编写能力；\n                            2、基础扎实、思路清晰，有独立设计算法、解决程序问题的能力；\n                            3、对新技术感兴趣，学习能力强，有钻研和开拓精神；具有良好的沟通能力、合作能力、逻辑分析与表达能力，具有较强的团队协作精神及高度的责任心。\n                        ', 0, '1481187478'),
(12, 'HTML5程师', '', 15, '天河区棠东东路11号御富科贸园A1座B406室', 88888, '', '', '', '', '1、有良好的代码习惯，要求结构清晰，命名规范，逻辑性强，代码冗余率低；较强的文档编写能力；\n                            2、基础扎实、思路清晰，有独立设计算法、解决程序问题的能力；\n                            3、对新技术感兴趣，学习能力强，有钻研和开拓精神；具有良好的沟通能力、合作能力、逻辑分析与表达能力，具有较强的团队协作精神及高度的责任心。\n                        ', 0, '1481187494'),
(14, 'PHP高级工程师', '', 15, '天河区棠东东路11号御富科贸园A1座B406室', 0, '', '', '', '234234', '1、有良好的代码习惯，要求结构清晰，命名规范，逻辑性强，代码冗余率低；较强的文档编写能力；\n                            2、基础扎实、思路清晰，有独立设计算法、解决程序问题的能力；\n                            3、对新技术感兴趣，学习能力强，有钻研和开拓精神；具有良好的沟通能力、合作能力、逻辑分析与表达能力，具有较强的团队协作精神及高度的责任心。\n                        ', 0, '1481267449'),
(15, 'JavaG程师', '', 15, '天河区棠东东路11号御富科贸园A1座B406室', 0, '', '', '', 'sf斯蒂芬斯蒂芬', '1、有良好的代码习惯，要求结构清晰，命名规范，逻辑性强，代码冗余率低；较强的文档编写能力；\n                            2、基础扎实、思路清晰，有独立设计算法、解决程序问题的能力；\n                            3、对新技术感兴趣，学习能力强，有钻研和开拓精神；具有良好的沟通能力、合作能力、逻辑分析与表达能力，具有较强的团队协作精神及高度的责任心。\n                        ', 0, '1481531557'),
(16, 'Java高级程师', '', 15, '天河区棠东东路11号御富科贸园A1座B406室', 0, '', '', '', '', '1、有良好的代码习惯，要求结构清晰，命名规范，逻辑性强，代码冗余率低；较强的文档编写能力；\n                            2、基础扎实、思路清晰，有独立设计算法、解决程序问题的能力；\n                            3、对新技术感兴趣，学习能力强，有钻研和开拓精神；具有良好的沟通能力、合作能力、逻辑分析与表达能力，具有较强的团队协作精神及高度的责任心。\n                        ', 0, '1481531575'),
(19, 'UI设计', '', 15, '', 0, '', '', '', '234234', '1、有良好的代码习惯，要求结构清晰，命名规范，逻辑性强，代码冗余率低；较强的文档编写能力；\n                            2、基础扎实、思路清晰，有独立设计算法、解决程序问题的能力；\n                            3、对新技术感兴趣，学习能力强，有钻研和开拓精神；具有良好的沟通能力、合作能力、逻辑分析与表达能力，具有较强的团队协作精神及高度的责任心。\n                        ', 0, '1481618126'),
(18, '前端工程师', '', 10, '', 32232, '', '', '', '看见了空间', '', 0, '1481612958'),
(20, '产品经理', '', 10, '', 123123, '', '', '', '123123', '', 0, '1481618138'),
(21, '项目经理', '', 15, '', 0, '', '', '', '234234', '1、有良好的代码习惯，要求结构清晰，命名规范，逻辑性强，代码冗余率低；较强的文档编写能力；\n                            2、基础扎实、思路清晰，有独立设计算法、解决程序问题的能力；\n                            3、对新技术感兴趣，学习能力强，有钻研和开拓精神；具有良好的沟通能力、合作能力、逻辑分析与表达能力，具有较强的团队协作精神及高度的责任心。\n                        ', 0, '1481618149'),
(22, '项目老板', '', 10, '', 23234234, '', '', '', '234234', '', 0, '1481618163'),
(23, '12', '', 15, '广州市天河区车陂路', 23, '大于1年', '本科及以上', '21241421421@qq.com', '4124', '1、有良好的代码习惯，要求结构清晰，命名规范，逻辑性强，代码冗余率低；较强的文档编写能力；\n                            2、基础扎实、思路清晰，有独立设计算法、解决程序问题的能力；\n                            3、对新技术感兴趣，学习能力强，有钻研和开拓精神；具有良好的沟通能力、合作能力、逻辑分析与表达能力，具有较强的团队协作精神及高度的责任心。\n                        ', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
