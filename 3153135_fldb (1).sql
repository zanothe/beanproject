-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb23.awardspace.net
-- Generation Time: 10-Abr-2021 às 00:10
-- Versão do servidor: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3153135_fldb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admins`
--

CREATE TABLE `admins` (
  `user_id` int(11) NOT NULL,
  `user_name` char(50) DEFAULT NULL,
  `user_pass` varchar(255) DEFAULT NULL,
  `name` text,
  `company` text,
  `email` varchar(256) DEFAULT NULL,
  `cpfcnpj` int(18) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admins`
--

INSERT INTO `admins` (`user_id`, `user_name`, `user_pass`, `name`, `company`, `email`, `cpfcnpj`) VALUES
(9, 'admin', 'fluvasadmin', NULL, '', '', 0),
(10, 'amigo', 'mongagua', NULL, '', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` text NOT NULL,
  `brand_img` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`, `brand_img`) VALUES
(1, 'FortLuvas', 'admin_area/brand/brandfluvas.png'),
(2, 'Danny', 'admin_area/brand/branddanny.png'),
(3, 'Bracol', 'admin_area/brand/brandbracol.png'),
(4, '3M', 'admin_area/brand/brand3my.png'),
(5, 'Bravo', 'admin_area/brand/brandbravo.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cart`
--

CREATE TABLE `cart` (
  `p_id` int(11) DEFAULT NULL,
  `ip_add` varchar(16) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `size` int(2) DEFAULT NULL,
  `id_cart` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `size`, `id_cart`) VALUES
(12, '192.168.80.1', 0, 0, 1),
(0, '192.168.80.1', 0, 0, 2),
(0, '179.93.204.225', 0, 0, 3),
(0, '187.74.40.67', 0, 0, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_title` text NOT NULL,
  `img` varchar(120) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `category`
--

INSERT INTO `category` (`cat_id`, `cat_title`, `img`) VALUES
(1, 'BOTAS', 'bbot.png'),
(2, 'AVENTAIS', 'bavent.png'),
(3, 'CAPACETES', 'bcap.png'),
(4, 'MASCARAS', 'bmask.png'),
(5, 'GOOGLES', 'bglass.png'),
(6, 'PROTETORES', 'bprot.png'),
(7, 'LUVAS', 'bluv.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `category_bp`
--

CREATE TABLE `category_bp` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(56) NOT NULL,
  `subcategory` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `category_bp`
--

INSERT INTO `category_bp` (`category_id`, `category_name`, `subcategory`) VALUES
(1, 'Didática', 'JavaScript-HTML'),
(2, 'Artigos', ''),
(3, 'Exercicios resolvidos', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comments_bp`
--

CREATE TABLE `comments_bp` (
  `cur_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post_id` int(11) NOT NULL,
  `author` varchar(256) NOT NULL,
  `website` text NOT NULL,
  `email` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comments_bp`
--

INSERT INTO `comments_bp` (`cur_date`, `post_id`, `author`, `website`, `email`, `comment`) VALUES
('0000-00-00 00:00:00', 1, 'ex', 'xx', 'exm', 'comment'),
('0000-00-00 00:00:00', 1, 'gdeffg', 'dfgd', 'gfdgfd', 'fg'),
('0000-00-00 00:00:00', 1, 'llllllllll', 'llllllllll', 'llllllllll', 'llllllllll'),
('0000-00-00 00:00:00', 1, 'llllllllll', 'llllllllll', 'llllllllll', 'llllllllll'),
('0000-00-00 00:00:00', 1, 'llllllllll', 'llllllllll', 'llllllllll', 'llllllllll'),
('0000-00-00 00:00:00', 1, 'llllllllll', 'llllllllll', 'llllllllll', 'llllllllll'),
('0000-00-00 00:00:00', 1, 'llllllllll', 'llllllllll', 'llllllllll', 'llllllllll'),
('0000-00-00 00:00:00', 1, 'llllllllll', 'llllllllll', 'llllllllll', 'llllllllll'),
('0000-00-00 00:00:00', 1, 'llllllllll', 'llllllllll', 'llllllllll', 'llllllllll'),
('0000-00-00 00:00:00', 1, 'llllllllll', 'llllllllll', 'llllllllll', 'llllllllll'),
('0000-00-00 00:00:00', 1, 'llllllllll', 'llllllllll', 'llllllllll', 'llllllllll'),
('0000-00-00 00:00:00', 1, 'llllllllll', 'llllllllll', 'llllllllll', 'llllllllll'),
('0000-00-00 00:00:00', 1, 'llllllllll', 'llllllllll', 'llllllllll', 'llllllllll'),
('0000-00-00 00:00:00', 1, 'llllllllll', 'llllllllll', 'llllllllll', 'llllllllll'),
('0000-00-00 00:00:00', 1, 'llllllllll', 'llllllllll', 'llllllllll', 'llllllllll'),
('0000-00-00 00:00:00', 1, 'llllllllll', 'llllllllll', 'llllllllll', 'llllllllll'),
('0000-00-00 00:00:00', 1, 'llllllllll', 'llllllllll', 'llllllllll', 'llllllllll'),
('2020-06-26 16:59:38', 0, '', '', '', ''),
('0000-00-00 00:00:00', 1, 'hfRrr', 'fg', 'fgh', 'fgh'),
('0000-00-00 00:00:00', 1, 'bnm', 'bnm', 'bnm', 'm nmb'),
('0000-00-00 00:00:00', 1, 'bnm', 'bnm', 'bnm', 'm nmb'),
('0000-00-00 00:00:00', 1, '', '', '', 'ok'),
('0000-00-00 00:00:00', 11, 'oi', 'aleatory', 'quakquer', 'iu');

-- --------------------------------------------------------

--
-- Estrutura da tabela `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_ip` varchar(100) DEFAULT NULL,
  `customer_fname` text NOT NULL,
  `customer_lname` text,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_country` text,
  `customer_city` text,
  `Address` varchar(255) NOT NULL,
  `customer_contact` varchar(255) DEFAULT NULL,
  `customer_company` text,
  `district` text NOT NULL,
  `postalcode` varchar(10) DEFAULT NULL,
  `complement` text,
  `num` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_ip`, `customer_fname`, `customer_lname`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `Address`, `customer_contact`, `customer_company`, `district`, `postalcode`, `complement`, `num`) VALUES
(1, '::1', 'bean', 'test', 'te@st.com', 'tst', 'sp', 'sp', 'avenue', '03199999999', NULL, '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Donates`
--

CREATE TABLE `Donates` (
  `id` varchar(256) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `cause` tinyint(1) NOT NULL,
  `nonce` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `name` text,
  `contact` text,
  `msg` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `payment_date` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts_bp`
--

CREATE TABLE `posts_bp` (
  `post_id` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_id` int(11) NOT NULL,
  `subcategory` varchar(256) CHARACTER SET latin1 NOT NULL,
  `author` text CHARACTER SET latin1 NOT NULL,
  `email` text CHARACTER SET latin1 NOT NULL,
  `title` text CHARACTER SET utf8,
  `content` text CHARACTER SET latin1,
  `beans` text CHARACTER SET latin1
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `posts_bp`
--

INSERT INTO `posts_bp` (`post_id`, `data`, `category_id`, `subcategory`, `author`, `email`, `title`, `content`, `beans`) VALUES
(1, '2020-08-20 20:42:07', 1, 'JavaScript', 'Ivan Zanoth', 'ivanzanoth@gmail.com', 'Entendendo uma função', '  \r\n<script>\r\nvar i=0;\r\n\r\nvar flg=true;\r\n\r\n  \r\nfunction rotate(img1, img2, txt, oc) {\r\n\r\n	var btn = document.getElementById(\'btn\');\r\n	var txtfunc = document.getElementById(\'function\');\r\n	var elem = document.getElementById(img1);\r\n	var elem1 = document.getElementById(img2);\r\n	var txtelem = document.getElementById(txt);\r\n	\r\n	if(flg==true){\r\n		if(i<60){\r\n  			elem.setAttribute(\'style\', "transform:rotate("+i+"deg)");\r\n  			elem1.setAttribute(\'style\', "transform:rotate("+i+"deg);");\r\n  			txtfunc.setAttribute(\'style\', "color:"+(Math.floor(Math.random() * 100000))+";");\r\n  			txtelem.innerHTML = i;\r\n  			i++;\r\n  			setTimeout(rotate, 1, img1, img2, txt);\r\n		}\r\n		else {\r\n			elem.setAttribute(\'style\', "transform:rotate("+i+"deg)");\r\n  			elem1.setAttribute(\'style\', "transform:rotate("+i+"deg);");\r\n  			txtfunc.setAttribute(\'style\', "color:000;");\r\n  			txtelem.innerHTML = i;		\r\n  			flg=false;\r\n		}\r\n	}\r\n\r\n	else {\r\n		ot();\r\n	}\r\n	\r\n	//Mout function\r\n	function ot() {\r\n		if(i>0) {\r\n			elem.setAttribute(\'style\', "transform:rotate("+i+"deg)");\r\n  			elem1.setAttribute(\'style\', "transform:rotate("+i+"deg);");\r\n  			txtelem.innerHTML = i; 					\r\n			i--;\r\n  			setTimeout(ot, 1);	\r\n		}\r\n		else {\r\n		 	elem.setAttribute(\'style\', "transform:rotate("+i+"deg)");\r\n  			elem1.setAttribute(\'style\', "transform:rotate("+i+"deg);");\r\n			txtelem.innerHTML = i; 							  	\r\n  			flg=true;\r\n  			txtfunc.setAttribute(\'style\', "color:000;");\r\n		}	\r\n	}\r\n	//END function\r\n}\r\n\r\n</script>\r\n<div style="display:flex;width:100%;height:500px">\r\n\r\n\r\n              <div style="align-self:start;box-shadow: -5px 5px 5px #888888;margin-left:0;width:50%;background-color:#eeeeee;border:0;\r\n                     border-radius:5px;text-align: left;">\r\n                 <div class="pdd" style="padding:20px;">\r\n                     &#60;script&#62; <br>\r\n                     var i = <span id="txt" style="color:#990199"><b>0</b></span>;<br>\r\n                     \r\n                     <span id="function"><b>function <span class="func" style="color: #048831;">rotate(identity)</span> {</b></span><br>\r\n                     &nbsp; &nbsp; <b><span style="color:#0f11ff">document</span><span>.element(identity).rotate = </span><span style="color:#990199"><b>i</b></span>;<br>&nbsp; &nbsp;i++;<br>&nbsp; &nbsp;setTimeout(<span class"func" style="color: #048831;">rotate</span>, 10 milisecs, identity)<br>\r\n                     }</b><br>\r\n                 \r\n                      &#60;/script&#62; \r\n                 </div>\r\n                 \r\n                        <figure style="padding-left:20px;padding-bottom:20px;">\r\n                        <img src="piece.png" id="img1" alt="" width="15%" height="auto">\r\n                        <img src="piece.png" id="img2" width="10%" height="auto">             \r\n                        </figure>\r\n             </div>\r\n\r\n             <div style="box-shadow: -5px 5px 5px #888888;width:50%;position:relative;right:10%;align-self:flex-end;background-color:#eeeeff;text-align:left;border:0;border-radius:5px;">\r\n		<div class="pdd">			                    \r\n                    &#60;html&#62; <br>\r\n                    &nbsp;&nbsp;&nbsp;&#60;head&#62; <br>\r\n                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;title&#62;My Home Page&#60;/title&#62;<br>\r\n                    &nbsp;&nbsp;&nbsp;&#60;/head&#62; <br>\r\n                   &nbsp;&nbsp;&#60;body&#62; <br>\r\n                   \r\n                   \r\n                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#60;button event=&#34;onmouseover : <span style="color: #048831;">rotate(identity)&#34;&#62;</span><br> \r\n                    	&nbsp;&nbsp; &#60;/body&#62; <br>\r\n                    &#60;/html&#62; \r\n                        <input type="button" style="width:100%;display:block;padding:5;" id="btn" class="btn" onclick="rotate(\'img1\', \'img2\', \'txt\')" value="Over me!"></input>\r\n               </div>\r\n            </div>\r\n\r\n     </div>\r\n     \r\n     ', '179.93.192.216*'),
(3, '2020-07-03 02:41:38', 2, '', '', '', 'Sobre sexo', 'Sexo. Percebam o impacto que essa palavra causa. Isso porque o sexo é um tabu na medida em que pessoas feias não podem fazer com pessoas bonitas, por exemplo. A humanindade se ilude tentando instaurar uma nova concepcao. A todo momento testemunhamos as tentativas: em um programa de TV, uma "especialista" dizendo a melhor maneira de se fazer sexo oral, ou esclarecendo se é normal ter esse ou aquele orgasmo, como o te-lo e etc. Chego \r\na lamentar. O fato é que o sexo é o problema. Estou há anos sem pratica-lo e me sinto bem dessa forma. Estou sobre isso.', '201.43.194.120*179.93.192.216*'),
(5, '2020-08-13 16:10:55', 1, '', 'Ivan Zanoth', '', 'Volume de concentraçoes em misturas', 'Seja uma garrafa de 500ml de cachaça, contendo um teor de alcool equivalente a 40% do volume total. \r\nMas, nao queremos cachaça e sim cerveja. \r\nPara isso, é necessario prepararmos um <i>drink</i>. \r\n\r\nAcompanhe: em primeiro lugar, convem saber quantos mililitros de alcool existem na garrafa. Fazemos\r\n\r\n500 * 0.4 = 200ml\r\n\r\nEm seguida:\r\n\r\n<div style="margin:auto;"><table style="padding:15px;"><tr><td></td><td style="padding:10px;">200</td><td>está para</td><td style="padding:10px;">40</td>\r\n</tr><tr><td>assim como</td><td style="padding:10px;"><b>x</b></td><td>está para</td><td style="padding:10px;">5 (volume de alcool na cerveja)</td></tr></table>\r\n</div>\r\n\r\nManipulando algebricamente a equaçao, obtemos que x = 25.\r\n\r\n<div style="margin:auto;"><table style="padding:15px;"><tr><td></td><td style="padding:10px;">500</td><td>está para</td><td style="padding:10px;">200</td>\r\n</tr><tr><td>assim como</td><td style="padding:10px;"><b>x</b></td><td>está para</td><td style="padding:10px;">25</td></tr></table>\r\n</div>\r\n\r\nNovamente, manipulando algebricamente a equaçao, obtemos que x = 62.5.\r\n\r\nQueremos uma cuba-libre. Para sabermos a quantidade de coca-cola e gelo \r\n(ainda que a coca esteja muito gelada, o gelo atenuara o açucar e tornara o drink mais agradavel) \r\nMais precisamente entao:\r\n\r\n(coca-cola + gelo) + 62.5 = 500.\r\n(coca-cola + gelo) = 437.5 ml\r\n\r\nSe quisermos um drink de 300ml\r\n\r\n<div style="margin:auto;"><table style="padding:15px;"><tr><td></td><td style="padding:10px;">500</td><td>está para</td>\r\n<td style="padding:10px;">62.5</td>\r\n</tr><tr><td>assim como</td><td style="padding:10px;">300</td>\r\n<td>está para</td><td style="padding:10px;"><b>x</b></td></tr></table>\r\n</div>\r\n\r\nE manipulando algebricamente, obtemos x = 37.5ml, que corresponde ao volume de cachaça relativa ao novo drink.\r\n\r\nAprecie com moderaçao.\r\n', ''),
(7, '2020-08-15 10:48:56', 3, 'Exercicios resolvidos', 'Zanoth', '', 'Volume de concentracoes em misturas II', '<p style="color:#999999;">\r\n(UNIVESP - 2018) Em  um  laboratório,  um  recipiente  contém  uma  mistura  de  duas drogas líquidas,\r\n\r\nA e B, num total de 36 mililitros, sendo que a participação da droga A corresponde a 1/10 desse total. \r\nA quantidade de mililitros da droga A que devem ser adicio­nados  a  essa  mistura  para  que  a  sua  \r\ncomposição  passe  a  ter 1/5 da droga A é igual a\r\n\r\n<br>(A)  4,5.<br>(B)  3,8.<br>(C)  3,2.<br>(D)  2,6.<br>(E)  1,8.<br></p>\r\n<div style="padding-top:10px;">\r\nSabemos que 1/10 do volume inicial da mistura, que representa a droga A, corresponde a<br>\r\n\r\n36/10 = 3.6ml<br>\r\n\r\nMas, saber quanto será 1/5 relativo a A, apos a adiçao, nao é tao simples, ja que \r\n3.6 + x = 36y . 1/5. Temos duas incognitas: x, quantidade a ser adicionada, e y, \r\nque representa o valor percentual final em relaçao ao inicial.\r\nEm palavras, essa equaçao pode traduzida assim: \r\n(A inicial) + (A adicionado) = (Volume total da solucao final dividido por 5).\r\n\r\nFazemos:\r\n\r\n<div style="margin:auto;color:#999999;"><table style="padding:15px;">\r\n<tr>\r\n<td></td>\r\n<td style="padding:10px;">36</td><td>está para</td><td style="padding:10px;">1 (ou 100%)</td>\r\n</tr><tr><td>assim como</td>\r\n<td style="padding:10px;"><b>36 + x</b></td>\r\n<td>está para</td><td style="padding:10px;">y</td></tr></table>\r\n</div>\r\nColocando x em evidencia:\r\n<br> x = 36y - 36<br>\r\nLogo,\r\n<br>5(3.6 + 36y -36) = 36y\r\n<br>18 + 180y - 180 = 36y\r\n<br>162 = 144y\r\n\r\n<table style="padding-top:15px;">\r\n<tr><td></td><td style="text-align:center;">162</td></tr>\r\n\r\n<tr><td>y =</td>\r\n<td style="padding-left:5px;margin-top:0px;text-align:top;">______</td></tr>\r\n<tr><td></td><td style="text-align:center;">144</td></tr></table>\r\n\r\n<br>y = 1.125<br>\r\nx = 40.5 - 36 = 4.5<br>\r\n\r\nResp: A</div>', ''),
(8, '2020-08-17 18:50:14', 1, 'Cinematica escalar', 'Zanoth', 'ivanzanoth@gmail.com', 'Movimento uniforme', '<b>Cinematica escalar</b><br>\r\n\r\nSejam duas velas, de mesma altura, que foram acesas ao mesmo tempo e que queirmaram à velocidade constante, de maneira q uma \r\nqueimou totalmente \r\nao intervalo de 5 horas e a outra ao intervalo de 4 horas. Em qual instante uma terá o dobro da altura da outra?\r\n<br>\r\nSabemos que\r\n<br>\r\n<svg style="padding:20px;" width="100%" height="100">\r\n\r\n<text x="0" y="20">v =</text>\r\n<text x="50" y="10">s</text>\r\n<line x1="35" y1="10" x2="40" y2="0" style="stroke:rgb(0,0,0);stroke-width:2" />\r\n<line x1="40" y1="0" x2="45" y2="10" style="stroke:rgb(0,0,0);stroke-width:2"></line>\r\n<line x1="45" y1="10" x2="35" y2="10" style="stroke:rgb(0,0,0);stroke-width:2"></line>\r\n\r\n<line x1="35" y1="15" x2="55" y2="15" style="stroke:rgb(0,0,0);stroke-width:2"></line>\r\n\r\n<text x="40" y="35">t</text>\r\n</svg>\r\n<br>\r\nOu, em palavras: velocity = space/time. Logo, a velocidade com a qual as duas velas queimaram é dada por:\r\n<br>\r\n<svg width="350" height="200">\r\n\r\n  <circle cx="10" cy="95" r="10" stroke="#999999" stroke-width="1" fill="transparent"/>\r\n<text x="5" y="100">1</text>\r\n\r\n<text x="50" y="100">v =</text>\r\n<text x="90" y="80">1</text>\r\n\r\n<line x1="110" y1="90" x2="80" y2="90" style="stroke:rgb(0,0,0);stroke-width:2"></line>\r\n\r\n<text x="90" y="110">5</text>\r\n\r\n\r\n  <circle cx="150" cy="95" r="10" stroke="#999999" stroke-width="1" fill="transparent"/>\r\n<text x="145" y="100">2</text>\r\n\r\n<text x="190" y="100">v =</text>\r\n<text x="230" y="80">1</text>\r\n\r\n<line x1="250" y1="90" x2="220" y2="90" style="stroke:rgb(0,0,0);stroke-width:2"></line>\r\n\r\n<text x="230" y="110">4</text>\r\n\r\n</svg>\r\n\r\n<br>\r\n\r\n<!--div style="display:inline-block;margin:auto;width:50%;">\r\n<div style="width:50px;height:50px;border:1px, solid, dark;border-radius:25px;text-align:center">1</div>\r\n<span>v = 1/5</span>\r\n<div style="width:50px;height:50px;border:1px, dark, solid;border-radius:25px;text-align:center">2</div>\r\n<span>v = 1/4</span></div-->\r\n\r\nPor que a unidade? Porque estamos considerando a razao entre ambas as alturas. Ainda q pareça obvio, \r\nqueremos conhecer a altura de uma em relaçao a outra.\r\n\r\n\r\n\r\n<svg style="padding:20px;" width="100%" height="450">\r\n\r\n  <line x1="50" y1="0" x2="50" y2="300" style="stroke:rgb(0,0,0);stroke-width:2" />\r\n    <line x1="55" y1="0" x2="45" y2="0" style="stroke:rgb(0,0,0);stroke-width:2" />\r\n        <line x1="55" y1="300" x2="45" y2="300" style="stroke:rgb(0,0,0);stroke-width:2" />\r\n        <text x="0" y="150">un.</text>\r\n\r\n        \r\n    <line x1="130" y1="0" x2="130" y2="100" style="stroke:rgb(0,0,0);stroke-width:2" />\r\n    <line x1="135" y1="0" x2="125" y2="0" style="stroke:rgb(0,0,0);stroke-width:2" />\r\n        <line x1="135" y1="100" x2="125" y2="100" style="stroke:rgb(0,0,0);stroke-width:2" />\r\n        \r\n        <line x1="150" y1="50" x2="175" y2="0" style="stroke:rgd(0,0,0);stroke-width:2" />\r\n        \r\n        <!-- delta -->\r\n        <line x1="80" y1="50" x2="85" y2="40" style="stroke:rgb(0,0,0);stroke-width:2" />\r\n<line x1="85" y1="40" x2="90" y2="50" style="stroke:rgb(0,0,0);stroke-width:2"></line>\r\n<line x1="90" y1="50" x2="80" y2="50" style="stroke:rgb(0,0,0);stroke-width:2"></line>\r\n<!--end-->\r\n         <text x="95" y="50">s</text> \r\n  \r\n  <line x1="130" y1="300" x2="130" y2="100" style="stroke:rgb(0,0,0);stroke-width:2" />\r\n    <line x1="135" y1="300" x2="125" y2="300" style="stroke:rgb(0,0,0);stroke-width:2" />\r\n        <line x1="135" y1="100" x2="125" y2="100" style="stroke:rgb(0,0,0);stroke-width:2" />\r\n        \r\n         <rect x="140" y="100" width="50" height="200" style="fill:rgb(0,0,0);" />\r\n        <text x="80" y="200">2x</text>\r\n        \r\n                <!------------------------------------>\r\n             \r\n    <line x1="270" y1="0" x2="270" y2="200" style="stroke:rgb(0,0,0);stroke-width:2" />\r\n    <line x1="275" y1="0" x2="265" y2="0" style="stroke:rgb(0,0,0);stroke-width:2" />\r\n        <line x1="275" y1="200" x2="265" y2="200" style="stroke:rgb(0,0,0);stroke-width:2" />\r\n        \r\n        <line x1="150" y1="50" x2="175" y2="0" style="stroke:rgd(0,0,0);stroke-width:2" />\r\n        \r\n         <!-- delta -->\r\n        <line x1="220" y1="100" x2="225" y2="90" style="stroke:rgb(0,0,0);stroke-width:2" />\r\n<line x1="225" y1="90" x2="230" y2="100" style="stroke:rgb(0,0,0);stroke-width:2"></line>\r\n<line x1="230" y1="100" x2="220" y2="100" style="stroke:rgb(0,0,0);stroke-width:2"></line>\r\n<!--end-->\r\n         <text x="235" y="100">s</text>\r\n                \r\n                 <line x1="270" y1="300" x2="270" y2="200" style="stroke:rgb(0,0,0);stroke-width:2" />\r\n    <line x1="275" y1="300" x2="265" y2="300" style="stroke:rgb(0,0,0);stroke-width:2" />\r\n        <line x1="275" y1="200" x2="265" y2="200" style="stroke:rgb(0,0,0);stroke-width:2" />\r\n\r\n                <text x="220" y="250">x</text>\r\n         <rect x="280" y="200" width="50" height="100" style="fill:rgb(0,0,0);" />\r\n        </svg>\r\n  \r\n\r\n<br>\r\n\r\nO espaço "deixado" por cada vela, entao..\r\n\r\n<p>\r\n\r\n<svg style="padding:10px;" width="300" height="40">\r\n\r\n\r\n<text x="162" y="10">s =</text>\r\n<line x1="150" y1="10" x2="155" y2="0" style="stroke:rgb(0,0,0);stroke-width:2" />\r\n<line x1="155" y1="0" x2="160" y2="10" style="stroke:rgb(0,0,0);stroke-width:2"></line>\r\n<line x1="160" y1="10" x2="150" y2="10" style="stroke:rgb(0,0,0);stroke-width:2"></line>\r\n\r\n\r\n\r\n<text x="190" y="10">v.t</text>\r\n</svg>\r\n<br>\r\nLogo, <br>\r\n\r\n1 - 1/5 . t = 2(1 - 1/4 . t)\r\n<br>20 - 4t = 40 -10t<br>\r\n\r\n<svg width="350" height="200">\r\n\r\n<text x="50" y="100">t =</text>\r\n<text x="90" y="80">10</text>\r\n\r\n<line x1="110" y1="90" x2="80" y2="90" style="stroke:rgb(0,0,0);stroke-width:2"></line>\r\n\r\n<text x="90" y="110">3</text>\r\n\r\n<text x="120" y="100">= 3 +</text>\r\n\r\n\r\n<text x="170" y="80">1</text>\r\n\r\n<line x1="160" y1="90" x2="190" y2="90" style="stroke:rgb(0,0,0);stroke-width:2"></line>\r\n\r\n<text x="170" y="110">3</text>\r\n<text x="195" y="100">(de hora)</text>\r\n</svg>\r\n<br>ou<br> 3 horas e 20 minutos.', ''),
(9, '2020-09-02 15:14:37', 2, '', 'Zanoth', '', 'Reflexao moderna', '<p>\r\nSabemos o que estaria fazendo uma pessoa que desse dois passos de um metro no intervalo de 2 segundos: esta pessoa estaria se movendo à velocidade de 1m/s, o que é Galileu, ou, "batata". Ok, agora imagine alguém sobre um tapete voador em um translado. O tapete possui extensa área superficial, tornando possível ao viajante caminhar sobre ele durante o passeio. Suponha que este dê os mesmos dois passos. Para o observador a velocidade do viajante será a soma da velocidade do tapete com 1, uma vez que os passos equivalem a 1m/s.</p>\r\n<img style="float:right;box-shadow:1px;" src="https://1.bp.blogspot.com/-zCM9uzpgQDE/Xkv4wnMXDxI/AAAAAAAABCA/W8STmVVGFNkl4bgoCXwjDpESqghL7D7mgCLcBGAsYHQ/s1600/IMG_20200215_210042406%25281000px%2529.jpg" width="35%" height="auto">\r\n<p>\r\nA luz se propaga a uma velocidade absoluta. Experimentalmente obteve-se o seguinte número: 300.000.000m/s. Mas, experimentalmente também, sabe-se que se o viajante acender uma lanterna durante o seu passeio ao tapete, tanto observador quanto viajante verão a mesma coisa, o mesmo feixe de luz, à mesma velocidade (Einstein). A velocidade da luz é constante para ambos. Isso sugere a existência de uma 4ª dimensão, onde as "coisas" aconteçam segundo alguma dinâmica (ininteligível, aparentemente) e também a ideia de que, na verdade, não se trata de uma velocidade mas de um estado. Se alguém passasse por nós à tal velocidade sequer veríamos um vulto, talvez sentiríamos um calafrio, o que seria Lorentz, ou, "Hellmans"... Sinta a diferença. O fator limitante que nos impede de atingir maiores velocidades é o atrito, então o limiar parece se situar entre o que é comum à nós e o vácuo, mas, sem oxigênio não "vivemos", então...</p>\r\n\r\n<p>\r\nSeja como for, essa é a razão pela qual alguém envelhece depois de assistir a uma corrida de fórmula 1. \r\n</p>\r\n\r\n\r\n', NULL),
(10, '2020-09-14 16:21:25', 3, 'Calculo', 'Zanoth', '', 'Sequencias infinitas e series', ' \r\n<p style="color:#999999">\r\n(Stewart, James - Calculo I, Cap. 11)\r\n68. Na figura existem infinitos circulos se aproximando dos vertices de um triangulo equilatero.\r\nCada circulo toca outros circulos e lados do triangulo. Se o triangulo tiver \r\nlados de comprimento 1, calcule a area total ocupada pelos circulos.\r\n</p>\r\n \r\n \r\n<svg style="padding:10px;"width="100%" height="350">\r\n  <title>Triangulo equilatero</title>\r\n  <line stroke-linecap="undefined" stroke-linejoin="undefined" id="svg_18" y2="300.05786" x2="300" y1="300.05786" x1="0" opacity="0.5" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" stroke="#000" fill="none"/>\r\n  <line transform="rotate(60 224.25,168.67944335937497) " stroke-linecap="undefined" stroke-linejoin="undefined" id="svg_19" y2="168.67944" x2="374.25" y1="168.67944" x1="74.25" opacity="0.5" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" stroke="#000" fill="none"/>\r\n  <line transform="rotate(-60 75.75000000000001,169.34619140625) " stroke-linecap="undefined" stroke-linejoin="undefined" id="svg_20" y2="169.3462" x2="225.75" y1="169.3462" x1="-74.25" opacity="0.5" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" stroke="#000" fill="none"/>\r\n  <line stroke-linecap="undefined" stroke-linejoin="undefined" id="svg_22" y2="299.25" x2="300" y1="299.25" x1="0" opacity="0.5" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" stroke="#000" fill="none"/>\r\n  <ellipse stroke="#444444" ry="86" rx="86" id="svg_27" cy="213.25" cx="150" fill-opacity="null" stroke-width="1.5" fill="none"/>\r\n  <ellipse stroke="#444444" ry="29" rx="29" id="svg_28" cy="97.90237" cx="150" fill-opacity="null" stroke-width="1.5" fill="none"/>\r\n  <ellipse stroke="#444444" ry="29" rx="29" id="svg_29" cy="270.25" cx="50.65436" fill-opacity="null" stroke-width="1.5" fill="none"/>\r\n  <ellipse stroke="#444444" ry="29" rx="29" id="svg_30" cy="270.25001" cx="249.66675" fill-opacity="null" stroke-width="1.5" fill="none"/>\r\n  <ellipse stroke="null" ry="10" rx="10" id="svg_31" cy="188.9066" cx="156.00074" fill-opacity="null" stroke-width="1.5" fill="none"/>\r\n  <ellipse stroke="#444444" ry="9.5" rx="9.5" id="svg_32" cy="60.08943" cx="150" fill-opacity="null" stroke-width="1.5" fill="none"/>\r\n  <ellipse stroke="#444444" ry="9.5" rx="9.5" id="svg_33" cy="289.91675" cx="17.41749" fill-opacity="null" stroke-width="1.5" fill="none"/>\r\n  <ellipse stroke="#444444" ry="9.5" rx="9.5" id="svg_34" cy="289.25" cx="283.24927" fill-opacity="null" stroke-width="1.5" fill="none"/>\r\n \r\n</svg>\r\n \r\n<br><p>\r\nEsteja o meio da base do triangulo na origem.</p>\r\n<p style="padding:10px">\r\nBaricentro = ((-0.5 + 0.5 + 0) / 3, (h + 0 + 0) / 3)<br>\r\n \r\nRaio circulo central = h/3<br>\r\n \r\nRaio dos circulos adjacentes : h/3 . 1/3 = h/9 ... so on</p>\r\n \r\n \r\nLogo, \r\n<br>\r\n<svg width="300" heigth="40">\r\n \r\n \r\n \r\n  <line transform="rotate(-45 170.92076110839844,25.436296463012713) " fill="none" stroke-width="1.5" x1="170.92079" y1="17.7706" x2="170.92079" y2="33.10202" id="svg_3" stroke-linejoin="undefined" stroke-linecap="undefined" stroke="#000000"/>\r\n  <line transform="rotate(90 173.12692260742188,39.73746109008791) " fill="none" stroke-width="1.5" x1="173.12692" y1="32.07176" x2="173.12692" y2="47.40317" id="svg_4" stroke-linejoin="undefined" stroke-linecap="undefined" stroke="#000000"/>\r\n  <line transform="rotate(45 170.6584014892578,34.62670135498047) " fill="none" stroke="#000" stroke-width="3" x1="170.65841" y1="26.96102" x2="170.65841" y2="42.29243" id="svg_5" stroke-linejoin="undefined" stroke-linecap="undefined"/>\r\n  <line fill="none" stroke-width="3" x1="180.30338" y1="19.50284" x2="180.30338" y2="25.52187" id="svg_6" stroke-linejoin="undefined" stroke-linecap="undefined" stroke="#000000"/>\r\n  <line transform="rotate(90 173.30152893066406,20.95205497741701) " fill="none" stroke-width="3" x1="173.30154" y1="13.28635" x2="173.30154" y2="28.61777" id="svg_8" stroke-linejoin="undefined" stroke-linecap="undefined" stroke="#000000"/>\r\n  <line fill="none" stroke-width="3" x1="180.30338" y1="34.13658" x2="180.30338" y2="40.15561" id="svg_9" stroke-linejoin="undefined" stroke-linecap="undefined" stroke="#000000"/>\r\n  <path fill="none" stroke="#000000" stroke-width="1.5" id="svg_11"/>\r\n  <path fill="none" stroke="#000000" stroke-width="1.5" opacity="0.5" d="m264.41667,26.52608" id="svg_13"/>\r\n  <!--pi-->\r\n  <path fill="none" stroke="#000000" stroke-width="1.5" id="svg_11"/>\r\n  <path fill="none" stroke="#000000" stroke-width="1.5" opacity="0.5" d="m264.41667,26.52608" id="svg_13"/>\r\n  <path fill="#000000" stroke-width="1.5" stroke-opacity="null" d="m47.47826,28.67307c1.17369,6.78685 -9.24999,11.8734 -3.5,9.57534c5.74999,-2.29806 -0.68746,-2.72366 6.27091,-7.89082" id="svg_17" stroke="#000000"/>\r\n  <path fill="#000000" stroke-width="1.5" stroke-opacity="null" fill-opacity="null" d="m58.86075,28.16714c-1.27498,2.02081 -3.8713,2.41664 -5.59832,2.31248c-3.33813,0.18749 -4.95018,-1.99144 -8.67774,0.92445c-1.86611,-0.41667 -2.80314,-2.48694 -1.14567,-3.19527" id="svg_19" stroke="#000000"/>\r\n  <path fill="#000000" stroke="#000000" stroke-width="1.5" stroke-opacity="null" fill-opacity="null" opacity="0.5" d="m58.20066,29.77032" id="svg_21"/>\r\n  <path fill="#000000" stroke-width="1.5" stroke-opacity="null" fill-opacity="null" d="m56.71404,29.78127c-7.31533,0.37209 2.41945,10.27991 -2.018,9.59242c-4.43746,-0.6875 1.43079,-4.74508 -3.13068,-10.93083" id="svg_22" stroke="#000000"/>\r\n  <line stroke="#000" stroke-linecap="undefined" stroke-linejoin="undefined" id="svg_7" y2="31.1002" x2="93.72489" y1="31.1002" x1="78.32202" fill="none"/>\r\n  <path id="svg_10" fill-opacity="null" stroke-opacity="null" stroke="#000" fill="none"/>\r\n  <path id="svg_12" d="m66.14989,48.87532" opacity="0.5" fill-opacity="null" stroke-opacity="null" stroke="#000" fill="none"/>\r\n  <text xml:space="preserve" text-anchor="start" font-family="Helvetica, Arial, sans-serif" font-size="40" id="svg_16" y="40.89065" x="63.01744" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">(</text>\r\n  <text xml:space="preserve" text-anchor="start" font-family="Helvetica, Arial, sans-serif" font-size="40" id="svg_18" y="40.70639" x="95.44747" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">)</text>\r\n  <text stroke="#000" xml:space="preserve" text-anchor="start" font-family="\'Simonetta\', serif" font-size="14" id="svg_20" y="26.70252" x="82.54916" fill-opacity="null" stroke-opacity="null" stroke-width="0" fill="#000000">h</text>\r\n  <text xml:space="preserve" text-anchor="start" font-family="\'Simonetta\', serif" font-size="14" id="svg_23" y="44.20736" x="82.3649" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">3</text>\r\n  <text stroke="null" transform="matrix(1.2785686254501343,0,0,1,-29.358521541580558,0) " xml:space="preserve" text-anchor="start" font-family="\'Simonetta\', serif" font-size="8" id="svg_25" y="13.06717" x="105.39759" fill-opacity="null" stroke-opacity="null" stroke-width="0" fill="#000000">2</text>\r\n  <text xml:space="preserve" text-anchor="start" font-family="\'Simonetta\', serif" font-size="14" id="svg_27" y="34.99429" x="117.19033" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">+</text>\r\n  <path fill="#000000" stroke-width="1.5" stroke-opacity="null" d="m147.16375,29.22585c1.17369,6.78685 -9.24999,11.8734 -3.5,9.57534c5.74999,-2.29806 -0.68746,-2.72366 6.27091,-7.89082" id="svg_28" stroke="#000000"/>\r\n  <path fill="#000000" stroke-width="1.5" stroke-opacity="null" fill-opacity="null" d="m158.54624,28.71992c-1.27498,2.02081 -3.8713,2.41664 -5.59832,2.31248c-3.33813,0.18749 -4.95018,-1.99144 -8.67774,0.92445c-1.86611,-0.41667 -2.80314,-2.48694 -1.14567,-3.19527" id="svg_29" stroke="#000000"/>\r\n  <path fill="#000000" stroke="#000000" stroke-width="1.5" stroke-opacity="null" fill-opacity="null" opacity="0.5" d="m157.88615,30.3231" id="svg_30"/>\r\n  <path fill="#000000" stroke-width="1.5" stroke-opacity="null" fill-opacity="null" d="m156.39953,30.33405c-7.31533,0.37209 2.41945,10.27991 -2.018,9.59242c-4.43746,-0.6875 1.43079,-4.74508 -3.13068,-10.93083" id="svg_31" stroke="#000000"/>\r\n  <text font-weight="bold" xml:space="preserve" text-anchor="start" font-family="\'Simonetta\', serif" font-size="26" id="svg_32" y="40.70639" x="126.58767" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">3</text>\r\n  <text stroke="null" xml:space="preserve" text-anchor="start" font-family="\'Simonetta\', serif" font-size="8" id="svg_33" y="48.59287" x="177.35877" fill-opacity="null" stroke-opacity="null" stroke-width="0" fill="#000000">2</text>\r\n  <text stroke="#000" xml:space="preserve" text-anchor="start" font-family="\'Simonetta\', serif" font-size="8" id="svg_34" y="16.01535" x="177.62811" fill-opacity="null" stroke-opacity="null" stroke-width="0" fill="#000000">n</text>\r\n  <line stroke="#000" stroke-linecap="undefined" stroke-linejoin="undefined" id="svg_62" y2="30.39993" x2="223.27541" y1="30.39993" x1="207.87255" fill="none"/>\r\n  <path id="svg_63" d="m195.70041,48.17505" opacity="0.5" fill-opacity="null" stroke-opacity="null" stroke="#000" fill="none"/>\r\n  <text xml:space="preserve" text-anchor="start" font-family="Helvetica, Arial, sans-serif" font-size="40" id="svg_64" y="40.19038" x="192.56796" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">(</text>\r\n  <text style="cursor: move;" xml:space="preserve" text-anchor="start" font-family="Helvetica, Arial, sans-serif" font-size="40" id="svg_65" y="40.00612" x="224.99799" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">)</text>\r\n  <text stroke="#000" xml:space="preserve" text-anchor="start" font-family="\'Simonetta\', serif" font-size="14" id="svg_66" y="26.00224" x="212.09968" fill-opacity="null" stroke-opacity="null" stroke-width="0" fill="#000000">h</text>\r\n  <text xml:space="preserve" text-anchor="start" font-family="\'Simonetta\', serif" font-size="14" id="svg_67" y="43.50709" x="211.91542" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">3</text>\r\n  <text stroke="null" transform="matrix(1.2785686254501343,0,0,1,-29.358521541580558,0) " xml:space="preserve" text-anchor="start" font-family="\'Simonetta\', serif" font-size="8" id="svg_68" y="12.36689" x="206.72224" fill-opacity="null" stroke-opacity="null" stroke-width="0" fill="#000000">2</text>\r\n  <text xml:space="preserve" text-anchor="start" font-family="\'Simonetta\', serif" font-size="8" id="svg_70" y="47.54336" x="169.46608" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">i=</text>\r\n  <text xml:space="preserve" text-anchor="start" font-family="\'Simonetta\', serif" font-size="8" id="svg_72" y="37.73953" x="220.23588" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000000" fill="#000000">i</text>\r\n\r\n</svg>\r\n\r\n<br> q alguem corrija se estiver errado, por favor.', ''),
(11, '2020-10-23 20:00:22', 3, 'Fisica', 'Zanoth', '', 'Refraçao e reflexao da luz', '\r\n\r\n<div style="color:#999999">\r\n(UFRJ) Uma lamina homogenea de faces paralelas e constituida de um material com indice de refraçao\r\n<i>n<small>2</small></i> = 1,5. De um lado da lamina, ha um meio homogeneo de indice de refraçao <i>n<small>1</small></i> = 2,0;\r\ndo outro lado, ha ar, cujo indice de refraçao <i>n<small>1</small></i> consideramos igual a 1,0. \r\nUm raio luminoso proveniente do primeiro meio incide sobre\r\na lamina com angulo de incidencia\r\n\r\n<!--teta-->\r\n<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg">\r\n  <text fill="#999999" stroke-width="0" x="6.35229" y="17.41133" id="svg_1" font-size="24" font-family="Helvetica, Arial, sans-serif" text-anchor="start" xml:space="preserve" transform="matrix(0.685348391532898,0,0,0.685348391532898,1.0226177275180817,7.590970054268837) " stroke="#999999">0</text>\r\n  <line fill="none" stroke-width="1.5" x1="7.5245" y1="13.29901" x2="12.60787" y2="13.29901" id="svg_2" stroke-linejoin="undefined" stroke-linecap="undefined" stroke="#999999"/>\'\r\n\r\n</svg>, como indica a figura. Calcule o angulo \r\n<!--teta-->\r\n<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg">\r\n  <text fill="#999999" stroke-width="0" x="6.35229" y="17.41133" id="svg_1" font-size="24" font-family="Helvetica, Arial, sans-serif" text-anchor="start" xml:space="preserve" transform="matrix(0.685348391532898,0,0,0.685348391532898,1.0226177275180817,7.590970054268837) " stroke="#999999">0</text>\r\n  <line fill="none" stroke-width="1.5" x1="7.5245" y1="13.29901" x2="12.60787" y2="13.29901" id="svg_2" stroke-linejoin="undefined" stroke-linecap="undefined" stroke="#999999"/>\'\r\n</svg>\r\na partir do qual o raio que atravessa\r\na lamina sofre reflexao total na interface com o ar.\r\n</div>\r\n<br>\r\n<svg width="200" height="100" xmlns="http://www.w3.org/2000/svg">\r\n <!-- Created with Method Draw - http://github.com/duopixel/Method-Draw/ -->\r\n\r\n <g>\r\n  <title>background</title>\r\n  <rect x="-1" y="-1" width="51.4479" height="26.72395" id="canvas_background" fill="#fff"/>\r\n  <g id="canvasGrid" display="none">\r\n   <rect id="svg_1" width="100%" height="100%" x="0" y="0" stroke-width="0" fill="url(#gridpattern)"/>\r\n  </g>\r\n </g>\r\n <g>\r\n  <title>Layer 1</title>\r\n  <path fill="#fff" stroke="#000" stroke-width="1.5" opacity="0.5" d="m-0.5,229.4375" id="svg_2"/>\r\n  <path fill="none" stroke="#000" stroke-width="1.5" stroke-opacity="null" fill-opacity="null" opacity="0.5" d="m1.5,228.4375" id="svg_3"/>\r\n  <rect fill="#BBBBBB" stroke="#666666" stroke-width="1.5" x="-35.5" y="31.16633" width="271" height="38" id="svg_4"/>\r\n  <line fill="none" stroke-width="1.5" x1="64.99248" y1="-4.95652" x2="64.35839" y2="36.49644" id="svg_5" stroke-linejoin="undefined" stroke-linecap="undefined" transform="rotate(-45 64.67543029785156,15.769960403442383) " stroke="#666666"/>\r\n  <text fill="#000000" stroke-width="0" stroke-opacity="null" fill-opacity="null" x="-0.17195" y="18.43689" id="svg_10" font-size="8" font-family="Helvetica, Arial, sans-serif" text-anchor="start" xml:space="preserve" transform="matrix(0.9844298362731932,0,0,1,0.1715150848031044,-0.6602722406387329) " stroke="#000">n  = 2,00</text>\r\n  <path fill="#666666" stroke-width="0" d="m55.52657,12.84484l7.78944,-0.12263l-4.25522,-4.13288" id="svg_17" stroke="#666666" transform="rotate(135 59.421287536621094,10.717079162597654) "/>\r\n  <line stroke="#666666" stroke-dasharray="2,2" stroke-linecap="undefined" stroke-linejoin="undefined" id="svg_22" y2="31.29105" x2="80.37501" y1="1.10939" x1="80.37501" fill-opacity="null" fill="none"/>\r\n  <path stroke="#000" id="svg_25" d="m74.0423,26.19869c0.9814,-2.47319 3.62418,-4.22057 6.16105,-3.89873" opacity="0.5" fill-opacity="null" stroke-opacity="null" fill="none"/>\r\n  <text xml:space="preserve" text-anchor="start" font-family="Helvetica, Arial, sans-serif" font-size="8" id="svg_26" y="21.08259" x="72.90892" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#666666" fill="#666666">0</text>\r\n  <line stroke="#666666" stroke-linecap="null" stroke-linejoin="null" id="svg_27" y2="18.07372" x2="76.6582" y1="18.07372" x1="73.70719" stroke-width="null" fill="none"/>\r\n  <text fill="#000000" stroke-width="0" stroke-opacity="null" fill-opacity="null" x="-0.16588" y="53.22595" id="svg_28" font-size="8" font-family="Helvetica, Arial, sans-serif" text-anchor="start" xml:space="preserve" transform="matrix(0.9844298362731932,0,0,1,0.1715150848031044,-0.6602722406387329) " stroke="#000">n  = 1,5</text>\r\n  <text fill="#000000" stroke-width="0" stroke-opacity="null" fill-opacity="null" x="-0.16506" y="86.27764" id="svg_30" font-size="8" font-family="Helvetica, Arial, sans-serif" text-anchor="start" xml:space="preserve" transform="matrix(0.9844298362731932,0,0,1,0.1715150848031044,-0.6602722406387329) " stroke="#000">n  = 1,00</text>\r\n  <text xml:space="preserve" text-anchor="start" font-family="Helvetica, Arial, sans-serif" font-size="5" id="svg_31" y="20.27185" x="4.48735" stroke-width="0" stroke="#666666" fill="#000000">1</text>\r\n  <text xml:space="preserve" text-anchor="start" font-family="Helvetica, Arial, sans-serif" font-size="5" id="svg_32" y="55.46743" x="4.99743" stroke-width="0" stroke="#666666" fill="#000000">2</text>\r\n  <text xml:space="preserve" text-anchor="start" font-family="Helvetica, Arial, sans-serif" font-size="5" id="svg_33" y="87.85757" x="4.48736" stroke-width="0" stroke="#666666" fill="#000000">3</text>\r\n </g>\r\n</svg>\r\n<div style="padding-top:15px;">\r\nAngulo limite interface lamina-ar => sen L = 1/1,5 = 2/3<br>\r\n<svg width="200" height="100" xmlns="http://www.w3.org/2000/svg">\r\n <!-- Created with Method Draw - http://github.com/duopixel/Method-Draw/ -->\r\n\r\n <g>\r\n  <title>background</title>\r\n  <rect fill="#fff" id="canvas_background" height="102" width="202" y="-1" x="-1"/>\r\n  <g display="none" id="canvasGrid">\r\n   <rect fill="url(#gridpattern)" stroke-width="0" y="0" x="0" height="100%" width="100%" id="svg_1"/>\r\n  </g>\r\n </g>\r\n <g>\r\n  <title>Layer 1</title>\r\n  <path id="svg_2" d="m-0.5,229.4375" opacity="0.5" stroke-width="1.5" stroke="#000" fill="#fff"/>\r\n  <path id="svg_3" d="m1.5,228.4375" opacity="0.5" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" stroke="#000" fill="none"/>\r\n  <rect id="svg_4" height="38" width="271" y="31.16633" x="-35.5" stroke-width="1.5" stroke="#000000" fill="#5B9BA2"/>\r\n  <line stroke="#000000" transform="rotate(-45 65.2678451538086,16.27998924255371) " stroke-linecap="undefined" stroke-linejoin="undefined" id="svg_5" y2="37.00647" x2="64.95079" y1="-4.44649" x1="65.58488" stroke-width="1.5" fill="none"/>\r\n  <text stroke="#000" transform="matrix(0.9844298362731932,0,0,1,0.1715150848031044,-0.6602722406387329) " xml:space="preserve" text-anchor="start" font-family="Helvetica, Arial, sans-serif" font-size="8" id="svg_10" y="18.43689" x="-0.17195" fill-opacity="null" stroke-opacity="null" stroke-width="0" fill="#000000">n  = 2,00</text>\r\n  <path transform="rotate(135 59.421287536621094,10.717084884643558) " stroke="#666666" id="svg_17" d="m55.52657,12.84484l7.78944,-0.12263l-4.25522,-4.13288" stroke-width="0" fill="#000000"/>\r\n  <line stroke="#444444" fill="none" fill-opacity="null" x1="80.37501" y1="0.95322" x2="80.37501" y2="68.30433" id="svg_22" stroke-linejoin="undefined" stroke-linecap="undefined" stroke-dasharray="2,2"/>\r\n  <path stroke="#000000" fill="none" fill-opacity="null" d="m86.53624,35.88149c-1.03365,2.53037 -3.81713,4.31815 -6.48906,3.98887" id="svg_25"/>\r\n  <text fill="#000000" stroke="#000000" stroke-width="0" stroke-opacity="null" x="84.30963" y="47.16368" id="svg_26" font-size="8" font-family="Helvetica, Arial, sans-serif" text-anchor="start" xml:space="preserve">0</text>\r\n  <line stroke="#444444" fill="none" stroke-width="null" x1="84.98319" y1="44.15499" x2="87.9342" y2="44.15499" id="svg_27" stroke-linejoin="null" stroke-linecap="null"/>\r\n  <text stroke="#000" transform="matrix(0.9844298362731932,0,0,1,0.1715150848031044,-0.6602722406387329) " xml:space="preserve" text-anchor="start" font-family="Helvetica, Arial, sans-serif" font-size="8" id="svg_28" y="53.22595" x="-0.16588" fill-opacity="null" stroke-opacity="null" stroke-width="0" fill="#000000">n  = 1,5</text>\r\n  <text stroke="#000" transform="matrix(0.9844298362731932,0,0,1,0.1715150848031044,-0.6602722406387329) " xml:space="preserve" text-anchor="start" font-family="Helvetica, Arial, sans-serif" font-size="8" id="svg_30" y="86.27764" x="-0.16506" fill-opacity="null" stroke-opacity="null" stroke-width="0" fill="#000000">n  = 1,00</text>\r\n  <text fill="#000000" stroke="#666666" stroke-width="0" x="4.48735" y="20.27185" id="svg_31" font-size="5" font-family="Helvetica, Arial, sans-serif" text-anchor="start" xml:space="preserve">1</text>\r\n  <text fill="#000000" stroke="#666666" stroke-width="0" x="4.99743" y="55.46743" id="svg_32" font-size="5" font-family="Helvetica, Arial, sans-serif" text-anchor="start" xml:space="preserve">2</text>\r\n  <text fill="#000000" stroke="#666666" stroke-width="0" x="4.48736" y="87.85757" id="svg_33" font-size="5" font-family="Helvetica, Arial, sans-serif" text-anchor="start" xml:space="preserve">3</text>\r\n  <line stroke="#000000" transform="rotate(-45 109.65361022949219,49.73784255981446) " stroke-linecap="undefined" stroke-linejoin="undefined" id="svg_6" y2="14.64104" x2="101.55109" y1="84.83464" x1="117.75614" stroke-width="1.5" fill="none"/>\r\n  <line stroke="#000000" fill="none" fill-opacity="null" x1="140.65824" y1="31.56335" x2="140.65824" y2="68.77285" id="svg_7" stroke-linejoin="undefined" stroke-linecap="undefined" stroke-dasharray="2,2"/>\r\n  <path fill="none" stroke-opacity="null" fill-opacity="null" d="m134.32553,64.61753c0.9814,-2.47319 3.62418,-4.22057 6.16105,-3.89873" id="svg_8" stroke="#000"/>\r\n  <text stroke="#444444" fill="#000000" stroke-width="0" stroke-opacity="null" x="132.56745" y="59.96996" id="svg_9" font-size="8" font-family="Helvetica, Arial, sans-serif" text-anchor="start" xml:space="preserve">0</text>\r\n  <line stroke="#444444" fill="none" stroke-width="null" x1="133.36572" y1="57.27343" x2="136.31673" y2="57.27343" id="svg_11" stroke-linejoin="null" stroke-linecap="null"/>\r\n  <line stroke="#000000" transform="rotate(-45 167.03649902343747,50.284339904785156) " stroke-linecap="undefined" stroke-linejoin="undefined" id="svg_12" y2="56.1498" x2="199.12335" y1="44.41888" x1="134.94964" stroke-width="1.5" fill="none"/>\r\n  <path transform="rotate(130 106.69386291503906,48.15258789062501) " stroke="#666666" id="svg_13" d="m102.79914,50.28034l7.78944,-0.12263l-4.25522,-4.13288" stroke-width="0" fill="#000000"/>\r\n </g>\r\n</svg><br>Logo, <br>2.sen \r\n<!--teta-->\r\n<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg">\r\n  <text fill="#000" stroke-width="0" x="6.35229" y="17.41133" id="svg_1" font-size="24" font-family="Helvetica, Arial, sans-serif" text-anchor="start" xml:space="preserve" transform="matrix(0.685348391532898,0,0,0.685348391532898,1.0226177275180817,7.590970054268837) " stroke="#999999">0</text>\r\n  <line fill="none" stroke-width="1.5" x1="7.5245" y1="13.29901" x2="12.60787" y2="13.29901" id="svg_2" stroke-linejoin="undefined" stroke-linecap="undefined" stroke="#000"/>\'\r\n\r\n</svg> = 1.5. 2/3 <br>sen \r\n<!--teta-->\r\n<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg">\r\n  <text fill="#000" stroke-width="0" x="6.35229" y="17.41133" id="svg_1" font-size="24" font-family="Helvetica, Arial, sans-serif" text-anchor="start" xml:space="preserve" transform="matrix(0.685348391532898,0,0,0.685348391532898,1.0226177275180817,7.590970054268837) " stroke="#999999">0</text>\r\n  <line fill="none" stroke-width="1.5" x1="7.5245" y1="13.29901" x2="12.60787" y2="13.29901" id="svg_2" stroke-linejoin="undefined" stroke-linecap="undefined" stroke="#000"/>\'\r\n\r\n</svg> = 1/2 <br> \r\n<!--teta-->\r\n<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg">\r\n  <text fill="#000" stroke-width="0" x="6.35229" y="17.41133" id="svg_1" font-size="24" font-family="Helvetica, Arial, sans-serif" text-anchor="start" xml:space="preserve" transform="matrix(0.685348391532898,0,0,0.685348391532898,1.0226177275180817,7.590970054268837) " stroke="#999999">0</text>\r\n  <line fill="none" stroke-width="1.5" x1="7.5245" y1="13.29901" x2="12.60787" y2="13.29901" id="svg_2" stroke-linejoin="undefined" stroke-linecap="undefined" stroke="#000"/>\'\r\n\r\n</svg> = 30º</div>', ''),
(12, '2020-10-24 15:47:05', 3, 'Fisica', 'Zanoth', '', 'Fenomeno da interferencia', '\r\n<p style="color:#999999">\r\n(ITA-SP) Uma fina pelicula de fluoreto de magnesio recobre o espelho retorvisor de um carro a afim de \r\nreduzir a reflexao luminosa. Determine a menor espessura da pelicula para que produza a reflexao minima\r\nno centro do espectro visivel. Considere o comprimento de onda da luz no ar <!-- lambda -->\r\n<svg width="35" height="25" xmlns="http://www.w3.org/2000/svg">\r\n <!-- Created with Method Draw - http://github.com/duopixel/Method-Draw/ -->\r\n  <path stroke="#999999" fill="#999999" stroke-width="0.5" stroke-opacity="null" d="m16.19258,4.94395c-4.20305,18.8885 -4.50337,18.37125 -7.79991,18.80019c-0.95176,0.151 -1.58048,1.03769 -0.44113,1.08424c0.79613,0.00567 1.13571,0.0366 3.19523,-0.03353c3.20947,-0.06416 1.81666,-0.45217 5.69414,-15.39194" id="svg_5"/>\r\n  <path stroke="#999999" fill="#999999" stroke-width="0.5" stroke-opacity="null" d="m17.0507,5.0514c6.19059,14.50244 6.65243,18.02589 9.19186,18.62279c0.92881,0.19857 1.82288,0.89792 0.53218,0.94379c-2.10903,0.00558 -1.17425,0.08586 -3.50734,0.01675c-1.63943,0.03637 -1.71809,-1.46624 -6.54549,-15.5635" id="svg_7"/>\r\n  <path stroke="#999999" style="vector-effect: non-scaling-stroke;" fill="#999999" stroke-width="0.5" stroke-opacity="null" d="m16.79558,4.84203c-0.53815,-0.22889 -5.29716,-0.57894 -5.39101,0.12117c0.07405,0.84821 5.09599,1.09056 5.47296,4.11988l0.16157,-3.49382" id="svg_10"/>\r\n  <path fill="none" stroke="#000" stroke-width="0.5" stroke-opacity="null" fill-opacity="null" opacity="0.5" d="m9.57366,5.54768" id="svg_11"/>\r\n</svg>\r\n = 5.500 &#197;\r\n\r\n\r\no indice de refraçao do ar <i>n<small>ar</small></i> = 1.00; o do vidro <i>n<small>vidro</small></i> = 1.50 e o\r\nda pelicula <i>n<small>p</small></i> = 1.30. Admita a incidencia luminosa como quase pependicular ao espelho.\r\n</p>\r\n<br>\r\n\r\n<svg width="200" height="100" xmlns="http://www.w3.org/2000/svg">\r\n <!-- Created with Method Draw - http://github.com/duopixel/Method-Draw/ -->\r\n\r\n <g>\r\n  <title>background</title>\r\n  <rect fill="none" id="canvas_background" height="602" width="802" y="-1" x="-1"/>\r\n </g>\r\n <g>\r\n  <title>Layer 1</title>\r\n  <path fill="#fff" stroke="#000" stroke-width="1.5" opacity="0.5" d="m-0.5,229.4375" id="svg_2"/>\r\n  <path fill="none" stroke="#000" stroke-width="1.5" stroke-opacity="null" fill-opacity="null" opacity="0.5" d="m1.5,228.4375" id="svg_3"/>\r\n  <rect fill="none" stroke="#000" stroke-width="1.5" stroke-opacity="null" fill-opacity="null" x="-35.5" y="31.16633" width="271" height="38" id="svg_4"/>\r\n  <line fill="none" stroke-width="1.5" x1="64.99248" y1="-4.95652" x2="64.35839" y2="36.49644" id="svg_5" stroke-linejoin="undefined" stroke-linecap="undefined" transform="rotate(-45 64.67543029785156,15.769960403442385) " stroke="#000"/>\r\n  <line fill="none" stroke-width="1.5" x1="77.41555" y1="67.86714" x2="94.52291" y2="31.35065" id="svg_6" stroke-linejoin="undefined" stroke-linecap="undefined" transform="rotate(-45 85.96923065185544,49.60889816284179) " stroke="#000"/>\r\n  <line fill="none" stroke-width="1.5" x1="103.5956" y1="72.01068" x2="84.51952" y2="94.55488" id="svg_7" stroke-linejoin="undefined" stroke-linecap="undefined" transform="rotate(-45 94.05756378173822,83.28277587890622) " stroke="#000"/>\r\n  <line fill="none" stroke-width="1.5" x1="81.40005" y1="58.90797" x2="116.9493" y2="41.30023" id="svg_8" stroke-linejoin="undefined" stroke-linecap="undefined" transform="rotate(-45 99.17467498779297,50.10409927368164) " stroke="#000"/>\r\n  <line stroke="#000" fill="none" stroke-width="1.5" x1="118.49627" y1="-1.83694" x2="119.29952" y2="36.35343" id="svg_9" stroke-linejoin="undefined" stroke-linecap="undefined" transform="rotate(45 118.89789581298827,17.258241653442383) "/>\r\n  <text fill="#000000" stroke-width="0" stroke-opacity="null" fill-opacity="null" x="-0.16154" y="9.76551" id="svg_10" font-size="10" font-family="Helvetica, Arial, sans-serif" text-anchor="start" xml:space="preserve" transform="matrix(0.9844298362731932,0,0,1,0.1715150848031044,-0.6602722406387329) " stroke="#000">ar</text>\r\n  <text fill="#000000" stroke="#000" stroke-width="0" stroke-opacity="null" fill-opacity="null" x="0.00619" y="53.19092" id="svg_11" font-size="10" font-family="Helvetica, Arial, sans-serif" text-anchor="start" xml:space="preserve">película</text>\r\n  <text fill="#000000" stroke="#000" stroke-width="0" stroke-opacity="null" fill-opacity="null" x="0.01269" y="97.35699" id="svg_12" font-size="10" font-family="Helvetica, Arial, sans-serif" text-anchor="start" xml:space="preserve">vidro</text>\r\n  <path fill="#000000" stroke-width="0" stroke-opacity="null" fill-opacity="null" d="m67.37785,24.5119l7.78944,-0.12263l-4.25522,-4.13288" id="svg_17" stroke="#000" transform="rotate(135 71.2725830078125,22.38414764404297) "/>\r\n  <path fill="#000000" stroke-width="0" stroke-opacity="null" fill-opacity="null" d="m81.01685,48.79598l7.78945,-0.12263l-4.25522,-4.13288" id="svg_18" transform="rotate(165 84.91157531738281,46.6682243347168) " stroke="#000"/>\r\n  <path fill="#000000" stroke-width="0" stroke-opacity="null" fill-opacity="null" d="m96.31915,49.4613l7.78945,-0.12263l-4.25522,-4.13288" id="svg_19" transform="rotate(23 100.21386718749996,47.333541870117166) " stroke="#000"/>\r\n  <path fill="#000000" stroke-width="0" stroke-opacity="null" fill-opacity="null" d="m89.8323,83.39248l7.78945,-0.12263l-4.25522,-4.13288" id="svg_20" transform="rotate(175 93.7270278930664,81.26472473144531) " stroke="#000"/>\r\n  <path fill="#000000" stroke-width="0" stroke-opacity="null" fill-opacity="null" d="m113.32315,20.67555l7.78945,-0.12263l-4.25522,-4.13288" id="svg_21" stroke="#000" transform="rotate(35 117.21788024902342,18.54779624938967) "/>\r\n  <line stroke="#000" fill="none" stroke-width="1.5" x1="116.03905" y1="15.85426" x2="72.97844" y2="15.35232" id="svg_1" stroke-linejoin="undefined" stroke-linecap="undefined" transform="rotate(-45 94.5086898803711,15.603292465209949) "/>\r\n  <path fill="#000000" stroke-width="0" stroke-opacity="null" fill-opacity="null" d="m90.65655,18.00889l7.78945,-0.12263l-4.25522,-4.13288" id="svg_13" stroke="#000" transform="rotate(35 94.55126953124999,15.881136894226064) "/>\r\n </g>\r\n</svg>\r\n\r\n<br>1 &#197 = 10ˆ-10 m<br>\r\nFrequencia = 3.10ˆ8/(550.10ˆ-9)\r\n<br>\r\nVelocidade de propagaçao na pelicula = 3.10ˆ8 / 1.3\r\n<br>\r\n<!--lambda-->\r\n<svg width="35" height="25" xmlns="http://www.w3.org/2000/svg">\r\n <!-- Created with Method Draw - http://github.com/duopixel/Method-Draw/ -->\r\n  <path stroke="#000" fill="#000" stroke-width="0.5" stroke-opacity="null" d="m16.19258,4.94395c-4.20305,18.8885 -4.50337,18.37125 -7.79991,18.80019c-0.95176,0.151 -1.58048,1.03769 -0.44113,1.08424c0.79613,0.00567 1.13571,0.0366 3.19523,-0.03353c3.20947,-0.06416 1.81666,-0.45217 5.69414,-15.39194" id="svg_5"/>\r\n  <path stroke="#999999" fill="#000" stroke-width="0.5" stroke-opacity="null" d="m17.0507,5.0514c6.19059,14.50244 6.65243,18.02589 9.19186,18.62279c0.92881,0.19857 1.82288,0.89792 0.53218,0.94379c-2.10903,0.00558 -1.17425,0.08586 -3.50734,0.01675c-1.63943,0.03637 -1.71809,-1.46624 -6.54549,-15.5635" id="svg_7"/>\r\n  <path stroke="#999999" style="vector-effect: non-scaling-stroke;" fill="#000" stroke-width="0.5" stroke-opacity="null" d="m16.79558,4.84203c-0.53815,-0.22889 -5.29716,-0.57894 -5.39101,0.12117c0.07405,0.84821 5.09599,1.09056 5.47296,4.11988l0.16157,-3.49382" id="svg_10"/>\r\n  <path fill="none" stroke="#000" stroke-width="0.5" stroke-opacity="null" fill-opacity="null" opacity="0.5" d="m9.57366,5.54768" id="svg_11"/>\r\n</svg>\r\n <small>pelicula</small> = 3.10ˆ8 . 550 / (3.10ˆ17) . 1,3<br>\r\nPara que haja interferencia destrutiva a diferença deve ser de meio comprimento de onda. \r\nConsiderando a incidencia perpendicular, a espessura deve entao ser de 1/4 de comprimento de onda.<br>\r\nespessura e = 550 / (1,3.10ˆ9 .4) = 550/(5,2 . 10ˆ9)\r\n', '1771113311113611300a1.7712343312341362e 21*1.771234331234143e 21*-250*');
INSERT INTO `posts_bp` (`post_id`, `data`, `category_id`, `subcategory`, `author`, `email`, `title`, `content`, `beans`) VALUES
(13, '2021-03-26 21:38:38', 1, 'Calculo', 'Zanoth', '', 'Tangencia - O conceito de limite', '<!-- O conceito de Limite\r\nPara fins didaticos\r\nBootstrap classes\r\nIvan Cilento aka Zanoth - 06/03/21 -->\r\n\r\n\r\n<div class="well"><div class="panel-info"><h3>Voce se lembra?</h3>\r\n\r\n<p>sen = cateto oposto / hipotenusa </p><p>cos = cateto adjacente / hipotenusa</p>\r\n\r\n<svg style="display:block;margin-left:auto;margin-right:auto" width="170" height="80">\r\n        <text x="10" y="30" font-family="serif" font-size="18">tangente =</text>\r\n        <text x="110" y="20" font-size="18">seno</text>\r\n        <text x="100" y="40" font-size="18">cosseno</text>\r\n        \r\n        \r\n        <line x1="105" y1="25" x2="170" y2="25" stroke="#000000" stroke-width="1"/>\r\n        </svg>\r\n\r\n<svg style="display:block;margin-left:auto;margin-right:auto" width="180" height="180">\r\n        <!--adj--><line x1="0" y1="150" x2="150" y2="150" stroke-width="1" stroke="#000000"/>\r\n        <!--op--><line x1="150" y1="150" x2="150" y2="0" stroke-width="1" stroke="#000000"/>\r\n        <!--hip--><line x1="0" y1="150" x2="150" y2="0" stroke-width="1" stroke="#000000"/>\r\n        \r\n        <text font-size="18" fill="#000000" transform="rotate(-45 30,110)" x="30" y="110">hipotenusa</text>\r\n        <text font-size="18" fill="#000000" x="10" y="170">cateto adjacente</text>\r\n        <text font-size="18" fill="#000000" transform="rotate(-90 170,140)" x="170" y="140">cateto oposto</text>\r\n        </svg>\r\n</div></div>\r\n\r\n<div onload="get_quote(this, \'Poincare\', \'Quando um estudante\')"></div>\r\n\r\n<div style="padding-top:15px;margin:auto;border:2px solid #5B9BA2;border-radius:5px;width:270px">\r\n <svg style="display:block;margin-left:auto;margin-right:auto" id="svg" width="200" height="700">\r\n        <circle if="cir" r="100" cx="100" cy="600" stroke-width="1" fill="transparent" stroke="#000000"/>\r\n        <line id="line" x1="0" x2="200" y1="600" y2="600" stroke-width="1" fill="transparent" stroke="#000000"/>\r\n                </svg>\r\n                </div>\r\n                <p style="padding-top:15px;">A partir de uma pesquisa simples voce podera encontrar a derivada de uma funcao.\r\n                So entendendo o conceito eh possivel por em pratica ou executar um projeto.</p>\r\n                \r\n                <div style="padding-top:15px">\r\n        <svg style="display:block;margin-left:auto;margin-right:auto;border:2px solid #5B9BA2;border-radius:5px" \r\n        id="svgel" width="300" height="600">\r\n            <line id="ln1" y1="0" y2="500" x1="100" x2="100" stroke-width="2" stroke="#cccccc"/>\r\n            <line id="ln2" y1="0" y2="500" x1="200" x2="200" stroke-width="2" stroke="#000000"/>   \r\n\r\n        </svg></div>\r\n        <div style="padding-top:15px">\r\n        <svg style="display:block;margin-left:auto;margin-right:auto" width="170" height="80">\r\n        <text x="10" y="30" font-family="serif" font-size="18">f\'(x) =</text>\r\n        <text x="60" y="20" font-size="18">f(x + h) - f(x)</text>\r\n        <text x="100" y="40" font-size="18">h</text>\r\n        \r\n        \r\n        <line x1="65" y1="25" x2="155" y2="25" stroke="#000000" stroke-width="1"/>\r\n        </svg></div>\r\n  \r\n<script>\r\n\r\n       \r\n\r\nfunction tg() {\r\n\r\n    var svg = document.getElementById(\'svg\');\r\n    var alt = true;\r\n    var i = 200;\r\n    var cttop = document.createElementNS(\'http://www.w3.org/2000/svg\', \'line\');\r\n    cttop.setAttribute(\'stroke-width\', 1);\r\n    cttop.setAttribute(\'stroke\', \'#000000\');\r\n    cttop.setAttribute(\'x1\', 200);\r\n    cttop.setAttribute(\'x2\', 200);\r\n    cttop.setAttribute(\'y1\', 600);\r\n    cttop.setAttribute(\'y2\', 600); \r\n    var sin = document.createElementNS(\'http://www.w3.org/2000/svg\', \'line\');\r\n    sin.setAttribute(\'stroke-width\', 1.5);\r\n    sin.setAttribute(\'stroke\', \'#5555bb\');\r\n    sin.setAttribute(\'x1\', 100);\r\n    sin.setAttribute(\'x2\', 100);\r\n    sin.setAttribute(\'y1\', 600);\r\n    sin.setAttribute(\'y2\', 600);\r\n    var cos = document.createElementNS(\'http://www.w3.org/2000/svg\', \'line\');\r\n    cos.setAttribute(\'stroke-width\', 1.5);\r\n    cos.setAttribute(\'stroke\', \'#55bb55\');\r\n    cos.setAttribute(\'x1\', 100);\r\n    cos.setAttribute(\'x2\', 200);\r\n    cos.setAttribute(\'y1\', 600);\r\n    cos.setAttribute(\'y2\', 600);\r\n    \r\n   var txt = document.createElementNS(\'http://www.w3.org/2000/svg\', \'text\');\r\n    txt.setAttribute(\'stroke-width\', 1);\r\n    txt.setAttribute(\'stroke\', \'#000000\');\r\n    txt.setAttribute(\'x\', 0);\r\n    txt.setAttribute(\'y\', 20);\r\n    \r\n    svg.appendChild(txt);\r\n   \r\n    var hpt = document.createElementNS(\'http://www.w3.org/2000/svg\', \'line\');\r\n    hpt.setAttribute(\'stroke-width\', 1);\r\n    hpt.setAttribute(\'stroke\', \'#000000\');\r\n    var tg = document.createElementNS(\'http://www.w3.org/2000/svg\', \'line\');\r\n    tg.setAttribute(\'stroke-width\', 1.5);\r\n    tg.setAttribute(\'stroke\', \'#bb5555\');\r\n    \r\n    function gear() {\r\n\r\n        var cttadj = i-100;        \r\n        var  x1 = cttop.getAttribute(\'x1\');\r\n        var  x2 = cttop.getAttribute(\'x2\');\r\n        var  y1 = cttop.getAttribute(\'y1\');\r\n        var  y2 = cttop.getAttribute(\'y2\');\r\n        \r\n        alt==true ?\r\n                (i==100 ?\r\n                    (alt=false,i++) :\r\n                        (i--)) :\r\n                             (i==200 ?\r\n                                 (alt=true,i--) :\r\n                                     (i++));    \r\n                                         \r\n        var y2cttop = (600-Math.sqrt((100**2) - (cttadj**2)));\r\n        var hip_len = Math.sqrt((cttop**2) + (cttadj**2))\r\n        var cttop_len = Math.abs(y2-y1);\r\n        var y2tg = 600-100*(cttop_len/cttadj);              \r\n        var y2hpt = y2;\r\n        /*var sin_y = 600-(cttop_len/hip_len);\r\n        var cos_x = 200-(cttadj/hip_len);*/\r\n        \r\n            /*document.getElementById(\'db1\').innerHTML = sin_y;\r\n                document.getElementById(\'db2\').innerHTML = cos_x;*/\r\n        hpt.setAttribute(\'x1\', 100);\r\n        hpt.setAttribute(\'x2\', i);\r\n        hpt.setAttribute(\'y1\', 600);\r\n        hpt.setAttribute(\'y2\', y2hpt);\r\n\r\n        cttop.setAttribute(\'x1\', i);\r\n        cttop.setAttribute(\'x2\', i);\r\n        cttop.setAttribute(\'y1\', 600);\r\n        cttop.setAttribute(\'y2\', y2cttop);\r\n        \r\n        /*sin.settAttribute(\'y2\', sin_y);\r\n        cos.setAttribute(\'x2\', cos_x);*/\r\n        \r\n        \r\n        tg.setAttribute(\'x1\', 200);\r\n        tg.setAttribute(\'x2\', 200);\r\n        tg.setAttribute(\'y1\', 600);\r\n        tg.setAttribute(\'y2\', y2tg);        \r\n        \r\n        txt.innerHTML = "tan = "+cttop_len/cttadj;\r\n        \r\n        svg.appendChild(tg);\r\n        svg.appendChild(cttop);\r\n        svg.appendChild(hpt);\r\n         \r\n        setTimeout(gear, 15); \r\n    }\r\n    gear();\r\n}\r\n\r\nfunction main() {\r\nvar i;\r\nvar j;\r\nvar el = document.getElementById(\'svgel\');\r\nvar ln1 = document.getElementById(\'ln1\');\r\nvar ln2 = document.getElementById(\'ln2\');\r\nfor(i=0;i<=250;i++) {\r\n        var txt = document.createElementNS(\'http://www.w3.org/2000/svg\', \'text\');                           \r\n        txt.setAttribute(\'xml:space\', \'preserve\');\r\n        txt.setAttribute(\'font-size\', \'15\');\r\n        txt.setAttribute(\'font-family\', \'sans-serif\');\r\n        txt.setAttribute(\'y\', Math.abs(500-(i*0.1)**2) );\r\n        txt.setAttribute(\'x\', i);\r\n        var textNod = document.createTextNode(\'.\');\r\n        txt.appendChild(textNod);\r\n        el.appendChild(txt);\r\n               \r\n}\r\n//disagre\r\nln2.setAttribute(\'y1\', Math.abs(500-((200*0.1)**2)) ); \r\nln1.setAttribute(\'y1\', Math.abs(500-((100*0.1)**2)) ); \r\n  \r\n\r\n//Attributes \r\nvar ln1y1 = ln1.getAttribute(\'y1\');\r\nvar ln2y1 = ln2.getAttribute(\'y1\');\r\nvar ln1x1 = ln1.getAttribute(\'x1\');\r\nvar ln2x1 = ln2.getAttribute(\'x1\');\r\nvar ln1y2 = ln1.getAttribute(\'y2\');\r\nvar ln2y2 = ln2.getAttribute(\'y2\');\r\nvar ln1x2 = ln1.getAttribute(\'x2\');\r\nvar ln2x2 = ln2.getAttribute(\'x2\');\r\n        \r\n//Creating elements\r\n//Tangent line\r\nvar tang_line = document.createElementNS(\'http://www.w3.org/2000/svg\', \'line\');                           \r\ntang_line.setAttribute(\'id\', \'tang_line\');\r\nel.appendChild(tang_line);\r\n//Circunference\r\nvar cir = document.createElementNS(\'http://www.w3.org/2000/svg\', \'ellipse\')                        \r\ncir.setAttribute(\'id\', \'cir\');\r\ncir.setAttribute(\'stroke-width\', \'2\');\r\ncir.setAttribute(\'stroke\', \'#000000\');\r\ncir.setAttribute(\'cy\', ln1y1 );\r\ncir.setAttribute(\'cx\', 100 );\r\ncir.setAttribute(\'fill\', \'null\');             \r\nel.appendChild(cir);\r\n\r\nfunction tang() {\r\n        var el = document.getElementById(\'svgel\');\r\nvar ln1 = document.getElementById(\'ln1\');\r\nvar ln2 = document.getElementById(\'ln2\');\r\n    var cir = document.getElementById(\'cir\');\r\n    var tang_line = document.getElementById(\'tang_line\');\r\n    var count = 0;\r\n    function gear() {;\r\n        ln2.setAttribute(\'x1\', 200-count);\r\n        ln2.setAttribute(\'x2\', 200-count);\r\n        ln2.setAttribute(\'y1\', Math.abs(500-((200-count)*0.1)**2));\r\n  \r\n        //Attributes \r\n        ln1y1 = ln1.getAttribute(\'y1\');\r\n        ln2y1 = ln2.getAttribute(\'y1\');\r\n        ln1x1 = ln1.getAttribute(\'x1\');\r\n        ln2x1 = ln2.getAttribute(\'x1\');\r\n        ln1y2 = ln1.getAttribute(\'y2\');\r\n        ln2y2 = ln2.getAttribute(\'y2\');\r\n        ln1x2 = ln1.getAttribute(\'x2\');\r\n        ln2x2 = ln2.getAttribute(\'x2\');\r\n        //concerning line\r\n        var dist_line = Math.sqrt(Math.abs(ln2x1-ln1x1)**2 + Math.abs(((500-ln2y1)-(500-ln1y1))**2));   \r\n        var ang_c = Math.abs((500-ln2y1)-(500-ln1y1))/Math.abs(ln2x1-ln1x1);\r\n        //setting_tang_line\r\n        var x1 = 0;\r\n        var x2 = 500;    \r\n        \r\n        \r\n\r\n\r\n        var y1 = (500-((ang_c*(0 - ln1x1) + (500-ln1y1))));\r\n        var y2 = (500-((ang_c*(500 - ln1x1) + (500-ln1y1))));    \r\n        \r\n        tang_line.setAttribute(\'stroke-width\', \'2\');\r\n        tang_line.setAttribute(\'stroke\', \'#000000\');\r\n        tang_line.setAttribute(\'x1\', x1 );\r\n        tang_line.setAttribute(\'x2\', x2 );\r\n        tang_line.setAttribute(\'y1\', y1 );\r\n        tang_line.setAttribute(\'y2\', y2 );           \r\n        //Changing ellipseRef radius\r\n        cir.setAttribute(\'stroke-width\', \'2\');\r\n        cir.setAttribute(\'stroke\', \'#000000\');\r\n        cir.setAttribute(\'fill\', \'transparent\');\r\n        cir.setAttribute(\'cy\', ln1y1 );\r\n        cir.setAttribute(\'cx\', 100 );\r\n        cir.setAttribute(\'ry\', dist_line );\r\n        cir.setAttribute(\'rx\', dist_line );  //im mad?: there is none rect         \r\n           \r\n            count++;\r\n        if(count<100) {\r\n\r\n            setTimeout(gear, 10);\r\n        }\r\n        else {\r\n                var inc=0;\r\n                cir.setAttribute(\'ry\', 0 );\r\n        cir.setAttribute(\'rx\', 0 );\r\n                tang_line = document.createElementNS(\'http://www.w3.org/2000/svg\', \'line\');                           \r\n                tang_line.setAttribute(\'id\', \'tang_line\');\r\n\r\n        tang_line.setAttribute(\'stroke-width\', \'6px\');\r\n        tang_line.setAttribute(\'stroke\', \'#5B9BA2\');\r\n        tang_line.setAttribute(\'x1\', x1 );\r\n        tang_line.setAttribute(\'x2\', x2 );\r\n        tang_line.setAttribute(\'y1\', y1 );\r\n        tang_line.setAttribute(\'y2\', y2 ); \r\n                el.appendChild(tang_line);\r\n                 txt = document.createElementNS(\'http://www.w3.org/2000/svg\', \'text\');                           \r\n        txt.setAttribute(\'xml:space\', \'preserve\');\r\n        txt.setAttribute(\'font-size\', \'32px\');\r\n        txt.setAttribute(\'font-family\', \'sans-serif\');\r\n                txt.setAttribute(\'stroke\', \'#5B9BA2\');\r\n                        txt.setAttribute(\'fill\', \'transparent\');\r\n        txt.setAttribute(\'y\', 450 );\r\n        txt.setAttribute(\'x\', 200);\r\n        var textNod = document.createTextNode(\'chcrt\');\r\n        txt.appendChild(textNod);\r\n        el.appendChild(txt);\r\n                \r\n                function explines() {\r\n                        \r\n                                         var incopc=9;\r\n                                         function cgnopc(){\r\n                                                 txt.setAttribute(\'stroke-opacity\', 0.1*incopc);\r\n                                                 tang_line.setAttribute(\'stroke-opacity\', 0.1*incopc);\r\n                                                 if(incopc!=0){\r\n                                                         setTimeout(cgnopc, 100);\r\n                                                 }\r\n                                                 incopc--;\r\n                                          }\r\n                                          cgnopc();\r\n                                }setTimeout(main, 2000);\r\n                                \r\n                               \r\n                        \r\n \r\n                                          \r\n               setTimeout(explines, 1000);\r\n                        \r\n               }\r\n\r\n    }\r\n    gear();\r\n}tang(); }\r\nmain();tg();\r\n</script>', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `product_title` text NOT NULL,
  `product_img1` text,
  `product_img2` text,
  `product_img3` text,
  `variant` text,
  `price` int(11) NOT NULL,
  `product_desc` text,
  `status` tinyint(1) DEFAULT NULL,
  `width` varchar(256) NOT NULL,
  `height` varchar(256) NOT NULL,
  `lenght` varchar(256) NOT NULL,
  `weight` varchar(256) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `offer` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`product_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `variant`, `price`, `product_desc`, `status`, `width`, `height`, `lenght`, `weight`, `brand_id`, `offer`) VALUES
(1, 1, '2017-01-16 22:14:24', 'Botas', 'boot1.jpg', 'boot2.jpg', '', NULL, 4460, 'Descrição aqui', 1, '', '', '', '', 0, 0),
(3, 7, '2017-01-16 22:16:34', 'Luvas', 'luva1.jpg', '', '', NULL, 890, 'Desc', 1, '', '', '', '', 0, 0),
(15, 1, '0000-00-00 00:00:00', 'dassfda', 'Captura de tela de 2020-05-30 17-19-02.png', '', '', NULL, 555, 'sdfs', 0, '11', '11', '11', '1', 2, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Quotes`
--

CREATE TABLE `Quotes` (
  `author` varchar(256) NOT NULL,
  `quote` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Quotes`
--

INSERT INTO `Quotes` (`author`, `quote`) VALUES
('', 'Historia biografica, como ensinada em nossas escolas, ainda eh em grande parte uma historia de tolos: ridiculos reis e rainhas, lideres politicos paranoicos, viajantes compulsivos, generais ignorantes - destrocos das correntes historicas. Os homens que alteraram radicalmente a historia, os grandes cientistas e matematicos criativos, sao raramente mencionados, se eh que chegam a se-lo. \r\nMartin Grdner. '),
('', 'Quando um estudante comeca a estudar Matematica seriamente, ele acredita que sabe o que eh fracao, o que eh continuidade e o que eh a area de uma superficie curva; ele considera como evidente, por exemplo, que uma fracao continua nao pode mudar de sinal sem se anular. Se, sem qualquer preparacao, dissermos a ele: Nao, isto nao eh, de modo algum, evidente e devemos demonstra-lo e se a demonstracao repousa sobre premissas que nao lhe parecem mais evidentes do que a conclusao, o que pensara esse infeliz estudante? Ele pensara que a Matematica eh apenas  uma acumulacao arbitraria de sutilezas inuteis, ficara desapontado ou ira se divertir com ela como se fosse um jogo e chegara a um estado mental semelhante ao dos sofistas gregos. \r\nHenri Poincare.'),
('O. W. Holmes, Jr.', 'A conviccao nao eh um teste de certeza. Podemos estar absolutamente certos de muitas coisas que nao sao certas.'),
('Martin Gardner.', 'Historia biografica, como ensinada em nossas escolas, ainda eh em grande parte uma historia de tolos: ridiculos reis e rainhas, lideres politicos paranoicos, viajantes compulsivos, generais ignorantes - destrocos das correntes historicas. Os homens que alteraram radicalmente a historia, os grandes cientistas e matematicos criativos, sao raramente mencionados, se eh que chegam a se-lo. '),
('Henri Poincare.', 'Quando um estudante comeca a estudar Matematica seriamente, ele acredita que sabe o que eh fracao, o que eh continuidade e o que eh a area de uma superficie curva; ele considera como evidente, por exemplo, que uma fracao continua nao pode mudar de sinal sem se anular. Se, sem qualquer preparacao, dissermos a ele: Nao, isto nao eh, de modo algum, evidente e devemos demonstra-lo e se a demonstracao repousa sobre premissas que nao lhe parecem mais evidentes do que a conclusao, o que pensara esse infeliz estudante? Ele pensara que a Matematica eh apenas  uma acumulacao arbitraria de sutilezas inuteis, ficara desapontado ou ira se divertir com ela como se fosse um jogo e chegara a um estado mental semelhante ao dos sofistas gregos.'),
('Zanoth', 'Voce pode falar quanto quiser e sua alma ainda estara irreconhecivel.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `scraps_sea`
--

CREATE TABLE `scraps_sea` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `fromuser` varchar(256) NOT NULL,
  `scrap` text NOT NULL,
  `dat` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `scrapwall`
--

CREATE TABLE `scrapwall` (
  `NUM` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `msg` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `scrapwall`
--

INSERT INTO `scrapwall` (`NUM`, `time`, `msg`) VALUES
(1, '0000-00-00 00:00:00', 'exam'),
(2, '0000-00-00 00:00:00', 'exam1'),
(0, '0000-00-00 00:00:00', 'exam23'),
(4, '0000-00-00 00:00:00', 'xx');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_sea`
--

CREATE TABLE `users_sea` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `about` text,
  `photo` text NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `friends` text,
  `invites` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users_sea`
--

INSERT INTO `users_sea` (`id`, `name`, `about`, `photo`, `username`, `password`, `friends`, `invites`) VALUES
(2, 'a', NULL, '', 'a', 'a', 'b', NULL),
(3, 'b', NULL, '', 'b', 'b', 'a', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `id_cart` (`id_cart`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `category_bp`
--
ALTER TABLE `category_bp`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments_bp`
--
ALTER TABLE `comments_bp`
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `posts_bp`
--
ALTER TABLE `posts_bp`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `scraps_sea`
--
ALTER TABLE `scraps_sea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scrapwall`
--
ALTER TABLE `scrapwall`
  ADD PRIMARY KEY (`NUM`);

--
-- Indexes for table `users_sea`
--
ALTER TABLE `users_sea`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `category_bp`
--
ALTER TABLE `category_bp`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts_bp`
--
ALTER TABLE `posts_bp`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
