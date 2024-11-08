//Banco de dados de  nome dbteste

Script do sql da tabela clientes.
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `img` blob NOT NULL,
  `end` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `uf` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cnpj` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci

# CrudCakePhp
