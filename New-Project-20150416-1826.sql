-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.6.21


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema pedro_ruiz_gallo
--

CREATE DATABASE IF NOT EXISTS pedro_ruiz_gallo;
USE pedro_ruiz_gallo;

--
-- Temporary table structure for view `v_alumno_matr`
--
DROP TABLE IF EXISTS `v_alumno_matr`;
DROP VIEW IF EXISTS `v_alumno_matr`;
CREATE TABLE `v_alumno_matr` (
  `codigo_alumno` char(10),
  `codigo_curso` char(6),
  `apelli__alumno` varchar(50),
  `nombre__alumno` char(50),
  `grado___aula` char(1),
  `seccio__aula` char(1),
  `nombre__curso` varchar(50),
  `nombre__docente` varchar(50)
);

--
-- Temporary table structure for view `v_alumno_matriculado`
--
DROP TABLE IF EXISTS `v_alumno_matriculado`;
DROP VIEW IF EXISTS `v_alumno_matriculado`;
CREATE TABLE `v_alumno_matriculado` (
  `codigo_alumno` char(10),
  `dni__alumno` char(8),
  `apelli__alumno` varchar(50),
  `nombre__alumno` char(50),
  `fechaN__alumno` date,
  `fechaI__alumno` date,
  `sexo__alumno` char(1),
  `fecha__matricula` date
);

--
-- Temporary table structure for view `v_asg_notas`
--
DROP TABLE IF EXISTS `v_asg_notas`;
DROP VIEW IF EXISTS `v_asg_notas`;
CREATE TABLE `v_asg_notas` (
  `CODIGO_CURSO` char(6),
  `fecha__cargaLect` char(7),
  `codigo_alumno` char(10),
  `nombre__alumno` char(50),
  `apelli__alumno` varchar(50),
  `nombre__curso` varchar(50),
  `GRADO___AULA` char(1),
  `SECCIO__AULA` char(1),
  `CODIGO_BIMESTRE` varchar(12),
  `nota_trabajos` int(11),
  `promedio_01` int(11),
  `promedio_02` int(11),
  `promedio_03` int(11),
  `nota_actitud` int(11),
  `promedio_general` int(11)
);

--
-- Temporary table structure for view `v_estado_pago`
--
DROP TABLE IF EXISTS `v_estado_pago`;
DROP VIEW IF EXISTS `v_estado_pago`;
CREATE TABLE `v_estado_pago` (
  `estad__pago` char(1),
  `apelli__apoderado` varchar(30),
  `nombre__apoderado` varchar(30),
  `codigo_alumno` char(10)
);

--
-- Temporary table structure for view `v_horarios`
--
DROP TABLE IF EXISTS `v_horarios`;
DROP VIEW IF EXISTS `v_horarios`;
CREATE TABLE `v_horarios` (
  `grado___aula` char(1),
  `seccio__aula` char(1),
  `fecha__cargalect` char(7),
  `numero_cargaLect` int(11),
  `apelli_docente` varchar(50),
  `nombre__docente` varchar(50),
  `n` varchar(101),
  `codigo_docente` char(10),
  `nombre__curso` varchar(50),
  `codigo_curso` char(6),
  `hora_inicio` time,
  `hora_fin` time,
  `anio` varchar(4),
  `nombre_dia` varchar(30)
);

--
-- Temporary table structure for view `v_info_alumno`
--
DROP TABLE IF EXISTS `v_info_alumno`;
DROP VIEW IF EXISTS `v_info_alumno`;
CREATE TABLE `v_info_alumno` (
  `codigo_alumno` char(10),
  `dni__alumno` char(8),
  `apelli__alumno` varchar(50),
  `nombre__alumno` char(50),
  `foto__alumno` varchar(100),
  `fechaN__alumno` date,
  `fechaI__alumno` date,
  `sexo__alumno` char(1),
  `iduser__alumno` char(10),
  `apelli__apoderado` varchar(30),
  `nombre__apoderado` varchar(30),
  `grado___aula` char(1),
  `seccio__aula` char(1),
  `ubigeo__aula` varchar(50)
);

--
-- Temporary table structure for view `v_lista_docente`
--
DROP TABLE IF EXISTS `v_lista_docente`;
DROP VIEW IF EXISTS `v_lista_docente`;
CREATE TABLE `v_lista_docente` (
  `codigo` char(10),
  `curso` varchar(50),
  `grado` char(1),
  `seccion` char(1),
  `fecha` char(7)
);

--
-- Temporary table structure for view `v_lista_matriculados`
--
DROP TABLE IF EXISTS `v_lista_matriculados`;
DROP VIEW IF EXISTS `v_lista_matriculados`;
CREATE TABLE `v_lista_matriculados` (
  `codigo` char(10),
  `dni` char(8),
  `apellidos` varchar(50),
  `nombres` char(50),
  `grado` char(1),
  `seccion` char(1),
  `fecha` date,
  `sexo__alumno` char(1)
);

--
-- Temporary table structure for view `v_prefil_alumno`
--
DROP TABLE IF EXISTS `v_prefil_alumno`;
DROP VIEW IF EXISTS `v_prefil_alumno`;
CREATE TABLE `v_prefil_alumno` (
  `codigo_alumno` char(10),
  `dni__alumno` char(8),
  `claveu_alumno` varchar(100),
  `estado__alumno` char(1),
  `apelli__alumno` varchar(50),
  `nombre__alumno` char(50),
  `foto__alumno` varchar(100),
  `fechaN__alumno` date,
  `fechaI__alumno` date,
  `sexo__alumno` char(1),
  `iduser__alumno` char(10),
  `apelli__apoderado` varchar(30),
  `nombre__apoderado` varchar(30),
  `grado___aula` char(1),
  `seccio__aula` char(1),
  `ubigeo__aula` varchar(50)
);

--
-- Temporary table structure for view `v_val_matricula`
--
DROP TABLE IF EXISTS `v_val_matricula`;
DROP VIEW IF EXISTS `v_val_matricula`;
CREATE TABLE `v_val_matricula` (
  `numero_matricula` int(11),
  `codigo___matricula` char(6),
  `fecha__matricula` date,
  `codigo_alumno` char(10),
  `apelli__alumno` varchar(50),
  `nombre__alumno` char(50),
  `grado___aula` char(1),
  `seccio__aula` char(1)
);

--
-- Temporary table structure for view `v_val_tareas_notas_asis`
--
DROP TABLE IF EXISTS `v_val_tareas_notas_asis`;
DROP VIEW IF EXISTS `v_val_tareas_notas_asis`;
CREATE TABLE `v_val_tareas_notas_asis` (
  `codigo_curso` char(6),
  `nombre__curso` varchar(50),
  `codigo_docente` char(10),
  `codigo_aula` char(4),
  `seccio__aula` char(1),
  `n` varchar(101),
  `grado___aula` char(1)
);

--
-- Temporary table structure for view `v_validar_carga_lectiva`
--
DROP TABLE IF EXISTS `v_validar_carga_lectiva`;
DROP VIEW IF EXISTS `v_validar_carga_lectiva`;
CREATE TABLE `v_validar_carga_lectiva` (
  `grado___aula` char(1),
  `seccio__aula` char(1),
  `fecha__cargalect` char(7),
  `numero_cargaLect` int(11),
  `apelli_docente` varchar(50),
  `nombre__docente` varchar(50),
  `n` varchar(101),
  `codigo_docente` char(10),
  `nombre__curso` varchar(50),
  `codigo_curso` char(6)
);

--
-- Definition of table `tb_alumno`
--

DROP TABLE IF EXISTS `tb_alumno`;
CREATE TABLE `tb_alumno` (
  `codigo_alumno` char(10) NOT NULL,
  `dni__alumno` char(8) NOT NULL,
  `apelli__alumno` varchar(50) NOT NULL,
  `nombre__alumno` char(50) NOT NULL,
  `foto__alumno` varchar(100) DEFAULT NULL,
  `fechaN__alumno` date DEFAULT NULL,
  `fechaI__alumno` date DEFAULT NULL,
  `sexo__alumno` char(1) DEFAULT NULL,
  `estado__alumno` char(1) NOT NULL,
  `iduser__alumno` char(10) NOT NULL,
  `claveu_alumno` varchar(100) NOT NULL,
  `codigo_apoderado` char(8) NOT NULL,
  PRIMARY KEY (`codigo_alumno`),
  KEY `RefTB_APODERADO5` (`codigo_apoderado`),
  CONSTRAINT `RefTB_APODERADO5` FOREIGN KEY (`codigo_apoderado`) REFERENCES `tb_apoderado` (`codigo_apoderado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alumno`
--

/*!40000 ALTER TABLE `tb_alumno` DISABLE KEYS */;
INSERT INTO `tb_alumno` (`codigo_alumno`,`dni__alumno`,`apelli__alumno`,`nombre__alumno`,`foto__alumno`,`fechaN__alumno`,`fechaI__alumno`,`sexo__alumno`,`estado__alumno`,`iduser__alumno`,`claveu_alumno`,`codigo_apoderado`) VALUES 
 ('1000000000','00000000','h','h','fotos/06.jpg','2015-03-11','2015-03-06','F','1','1000000000','1000000000','10000001'),
 ('1111234550','11123455','mallqui','mable','fotos/983868_663848827074291_2222994621021622899_n.jpg','2015-03-03','2015-03-18','F','1','1111234550','1111234550','10000001'),
 ('1455555550','45555555','msmsmsmsmss','smsmmsmssm','fotos/983868_663848827074291_2222994621021622899_n.jpg','2015-03-10','2015-03-14','F','1','1455555550','1455555550','10000001'),
 ('1777777770','77777777','BLAS  GOMEZ','LUIS','fotos/images.jpg','2014-12-19','2014-03-04','M','1','1777777770','1777777770','10000001'),
 ('1786877870','78687787','jj','jjj','fotos/web PRGx1-01.jpg','2015-03-05','2015-03-05','F','1','1786877870','1786877870','10000001'),
 ('1888888880','88888888','PEREZ JARA','MABEL','fotos/dsd.jpg','2014-12-08','2014-03-12','F','1','1888888880','1888888880','10000000'),
 ('1999999990','99999999','PEREZ JARA','ANGEL','fotos/01345.jpg','2014-12-09','2014-03-04','M','1','1999999990','1999999990','10000000'),
 ('A086667870','08666787','RODRIGUEZ FLORES','JUAN','fotos/','2015-03-16','2015-03-25','M','1','A086667870','202cb962ac59075b964b07152d234b70','10000001'),
 ('A734839950','73483995','SUAREZ LOLI','EDSON J','fotos/10435899_833021526750170_3305424389039740074_n.jpg','1993-11-06','2015-03-03','M','1','A734839950','0958b9aa2792f4d6f59bc6f74dd52d86','10000001'),
 ('A878768760','87876876','TORREZ  RAFAEL','DIANA','fotos/10422537_635190443279853_6592894856554180257_n.jpg','1899-11-07','2015-03-09','F','1','A878768760','c20ad4d76fe97759aa27a0c99bff6710','10000001'),
 ('A878987680','87898768','MENDOZA ZOTO','SOFIA BRENDA','fotos/1234865_1476258489329151_5259925515665809621_n.jpg','1993-09-07','2015-03-10','F','1','A878987680','81dc9bdb52d04dc20036dbd8313ed055','10000001'),
 ('A973366260','97336626','SUAREZ LOLI','elisabeth vanessa','fotos/1557729_614632685269019_1976294091_n.jpg','1993-11-06','2015-03-04','F','1','A973366260','4afa162004fce97f413709117d9d3e75','10000001');
/*!40000 ALTER TABLE `tb_alumno` ENABLE KEYS */;


--
-- Definition of table `tb_alumno_periodo`
--

DROP TABLE IF EXISTS `tb_alumno_periodo`;
CREATE TABLE `tb_alumno_periodo` (
  `codigo_alumno` char(10) NOT NULL,
  `codigo_periodo` char(7) NOT NULL,
  `promediofinal` int(11) NOT NULL,
  `cursoaprobados` int(11) NOT NULL,
  `cursosjalados` int(11) NOT NULL,
  `estado_periodo` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`codigo_alumno`,`codigo_periodo`),
  KEY `RefTB_PERIODO_CLASES12` (`codigo_periodo`),
  CONSTRAINT `RefTB_ALUMNO10` FOREIGN KEY (`codigo_alumno`) REFERENCES `tb_alumno` (`codigo_alumno`),
  CONSTRAINT `RefTB_PERIODO_CLASES12` FOREIGN KEY (`codigo_periodo`) REFERENCES `tb_periodo_clases` (`codigo_periodo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alumno_periodo`
--

/*!40000 ALTER TABLE `tb_alumno_periodo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_alumno_periodo` ENABLE KEYS */;


--
-- Definition of table `tb_apoderado`
--

DROP TABLE IF EXISTS `tb_apoderado`;
CREATE TABLE `tb_apoderado` (
  `codigo_apoderado` char(8) NOT NULL,
  `dni__apoderado` char(8) NOT NULL,
  `apelli__apoderado` varchar(30) NOT NULL,
  `nombre__apoderado` varchar(30) NOT NULL,
  `direcc__apoderado` varchar(30) DEFAULT NULL,
  `tlfcel__apoderado` varchar(10) DEFAULT NULL,
  `sexo__apoderado` char(1) DEFAULT NULL,
  `estado__apoderado` char(1) DEFAULT NULL,
  `copDNI__apoderado` varchar(100) DEFAULT NULL,
  `copRec__apoderado` varchar(100) DEFAULT NULL,
  `copPag__apoderado` varchar(100) DEFAULT NULL,
  `email__apoderado` varchar(145) DEFAULT NULL,
  PRIMARY KEY (`codigo_apoderado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_apoderado`
--

/*!40000 ALTER TABLE `tb_apoderado` DISABLE KEYS */;
INSERT INTO `tb_apoderado` (`codigo_apoderado`,`dni__apoderado`,`apelli__apoderado`,`nombre__apoderado`,`direcc__apoderado`,`tlfcel__apoderado`,`sexo__apoderado`,`estado__apoderado`,`copDNI__apoderado`,`copRec__apoderado`,`copPag__apoderado`,`email__apoderado`) VALUES 
 ('','','','','','','','0','archivos/','archivos/','archivos/',''),
 ('10000000','45452343','blas gomez','enrrique','leticia','956970181','M','1',NULL,NULL,NULL,NULL),
 ('10000001','76858766','MARTINEZ ESCOBAR','DANIEL FELIPE','HUACHO','9878665434','M','1','archivos/Captura.JPG','archivos/ed.png','archivos/02.JPG','CHIV@HOTMAIL.COM'),
 ('10000002','76864543','JARA TORREZ','LUIS','LIMA','987665457','M','1',NULL,NULL,NULL,NULL),
 ('10000003','98865453','MILLA TRUJILLO','ELISABETH','BARRANCA','088676655','F','1',NULL,NULL,NULL,NULL),
 ('88777999','88777999','RODRIGUEZ ESPINOZA','LUCIA','','','F','0','archivos/','archivos/','archivos/','');
/*!40000 ALTER TABLE `tb_apoderado` ENABLE KEYS */;


--
-- Definition of table `tb_aula`
--

DROP TABLE IF EXISTS `tb_aula`;
CREATE TABLE `tb_aula` (
  `codigo_aula` char(4) NOT NULL,
  `ubigeo__aula` varchar(50) DEFAULT NULL,
  `grado___aula` char(1) DEFAULT NULL,
  `seccio__aula` char(1) DEFAULT NULL,
  `capaci__aula` int(11) DEFAULT NULL,
  `estado__aula` varchar(30) DEFAULT NULL,
  `nivel_academico` varchar(45) DEFAULT NULL,
  `actividad` char(1) DEFAULT NULL,
  PRIMARY KEY (`codigo_aula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_aula`
--

/*!40000 ALTER TABLE `tb_aula` DISABLE KEYS */;
INSERT INTO `tb_aula` (`codigo_aula`,`ubigeo__aula`,`grado___aula`,`seccio__aula`,`capaci__aula`,`estado__aula`,`nivel_academico`,`actividad`) VALUES 
 ('A000','1er piso ','3','A',30,'HABILITADA','SECUNDARIA',NULL),
 ('A001','2do piso lado Derecho','5','A',30,'HABILITADA','SECUNDARIA',NULL),
 ('A002','1er piso lado del Quiosko','1','B',25,'HABILITADA','SECUNDARIA',NULL),
 ('A003','2do piso','2','C',30,'HABILITADA','SECUNDARIA',NULL),
 ('A004','2do lado izq','4','A',25,'HABILITADA','SECUNDARIA',NULL),
 ('A005','','1','A',30,'HABILITADA','SECUNDARIA',NULL),
 ('A006','','1','C',30,'HABILITADA','SECUNDARIA',NULL),
 ('A007','','2','A',30,'HABILITADA','SECUNDARIA',NULL),
 ('A008','','2','B',30,'HABILITADA','SECUNDARIA',NULL),
 ('A009','','3','B',30,'HABILITADA','SECUNDARIA','1'),
 ('A010','','3','C',30,'HABILITADA','SECUNDARIA','1'),
 ('A011','','4','C',30,'HABILITADA','SECUNDARIA','1'),
 ('A012','','4','B',30,'HABILITADA','SECUNDARIA','1'),
 ('A013','','5','B',30,'HABILITADA','SECUNDARIA','1'),
 ('A014','','5','C',30,'HABILITADA','SECUNDARIA','1'),
 ('S000','aa','1','a',34,'HABILITADA','SECUNDARIA','1'),
 ('S001','aaaaaaaaa','1','a',23,'MANTENIMIENTO','PRIMARIA','0'),
 ('S018','aaaaaaaaa','1','a',23,'TALLER','PRIMARIA','0'),
 ('S019','aa','1','a',34,'ha','SECUNDARIA','1'),
 ('S020','aaaaaaaaa','','',600,'TALLER','PRIMARIA','0'),
 ('S021','aaaaaaaaa','6','B',30,'HABILITADA','PRIMARIA','1');
/*!40000 ALTER TABLE `tb_aula` ENABLE KEYS */;


--
-- Definition of table `tb_carac_pago`
--

DROP TABLE IF EXISTS `tb_carac_pago`;
CREATE TABLE `tb_carac_pago` (
  `codigopagocarct` int(11) NOT NULL AUTO_INCREMENT,
  `nombrepago` varchar(100) NOT NULL,
  `monto_cpago` decimal(10,2) DEFAULT NULL,
  `caracteristica_cpago` varchar(100) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`codigopagocarct`)
) ENGINE=InnoDB AUTO_INCREMENT=231 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_carac_pago`
--

/*!40000 ALTER TABLE `tb_carac_pago` DISABLE KEYS */;
INSERT INTO `tb_carac_pago` (`codigopagocarct`,`nombrepago`,`monto_cpago`,`caracteristica_cpago`,`tipo`,`fecha`) VALUES 
 (230,'matricula','100.00','matricula 2015','Obligatorio','2015-03-21');
/*!40000 ALTER TABLE `tb_carac_pago` ENABLE KEYS */;


--
-- Definition of table `tb_carga_lectiva`
--

DROP TABLE IF EXISTS `tb_carga_lectiva`;
CREATE TABLE `tb_carga_lectiva` (
  `numero_cargaLect` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_docente` char(10) NOT NULL,
  `codigo_curso` char(6) NOT NULL,
  `codigo_aula` char(4) NOT NULL,
  `fecha__cargaLect` char(7) DEFAULT NULL,
  PRIMARY KEY (`numero_cargaLect`),
  KEY `RefTB_DOCENTE7` (`codigo_docente`),
  KEY `RefTB_CURSO8` (`codigo_curso`),
  KEY `RefTB_AULA14` (`codigo_aula`),
  CONSTRAINT `RefTB_AULA14` FOREIGN KEY (`codigo_aula`) REFERENCES `tb_aula` (`codigo_aula`),
  CONSTRAINT `RefTB_CURSO8` FOREIGN KEY (`codigo_curso`) REFERENCES `tb_curso` (`codigo_curso`),
  CONSTRAINT `RefTB_DOCENTE7` FOREIGN KEY (`codigo_docente`) REFERENCES `tb_docente` (`codigo_docente`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_carga_lectiva`
--

/*!40000 ALTER TABLE `tb_carga_lectiva` DISABLE KEYS */;
INSERT INTO `tb_carga_lectiva` (`numero_cargaLect`,`codigo_docente`,`codigo_curso`,`codigo_aula`,`fecha__cargaLect`) VALUES 
 (7,'0111111110','M0PRG5','A005','2014PRG'),
 (8,'0222222220','CIPRG5','A006','2014PRG'),
 (9,'0333333330','EFPRG5','A005','2014PRG'),
 (10,'0444444440','A0PRG5','A005','2014PRG'),
 (11,'2734839950','HGPRG5','A005','2014PRG'),
 (122,'0678676760','M0PRG5','A005','2015PRG'),
 (123,'0678676760','CIPRG5','A006','2015PRG'),
 (124,'0678676760','EFPRG5','A005','2015PRG'),
 (125,'0678676760','A0PRG5','A005','2015PRG'),
 (126,'0678676760','HGPRG5','A005','2015PRG'),
 (127,'0678676760','CTPRG5','A005','2015PRG'),
 (128,'2734839950','mtprg2','S000','2015PRG');
/*!40000 ALTER TABLE `tb_carga_lectiva` ENABLE KEYS */;


--
-- Definition of table `tb_control`
--

DROP TABLE IF EXISTS `tb_control`;
CREATE TABLE `tb_control` (
  `codigo_control` char(11) NOT NULL,
  `asisten__control` int(11) DEFAULT NULL,
  `tardans__control` int(11) DEFAULT NULL,
  `faltas__control` int(11) DEFAULT NULL,
  `justifi__control` int(11) DEFAULT NULL,
  `codigo_alumno` char(10) NOT NULL,
  PRIMARY KEY (`codigo_control`),
  KEY `RefTB_ALUMNO23` (`codigo_alumno`),
  CONSTRAINT `RefTB_ALUMNO23` FOREIGN KEY (`codigo_alumno`) REFERENCES `tb_alumno` (`codigo_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_control`
--

/*!40000 ALTER TABLE `tb_control` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_control` ENABLE KEYS */;


--
-- Definition of table `tb_curso`
--

DROP TABLE IF EXISTS `tb_curso`;
CREATE TABLE `tb_curso` (
  `codigo_curso` char(6) NOT NULL,
  `nombre__curso` varchar(50) NOT NULL,
  `hrteor__curso` int(11) DEFAULT NULL,
  `hrprac__curso` int(11) DEFAULT NULL,
  `aacade__curso` varchar(10) DEFAULT NULL,
  `estado__curso` char(1) NOT NULL,
  `nivel_acedemico` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo_curso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_curso`
--

/*!40000 ALTER TABLE `tb_curso` DISABLE KEYS */;
INSERT INTO `tb_curso` (`codigo_curso`,`nombre__curso`,`hrteor__curso`,`hrprac__curso`,`aacade__curso`,`estado__curso`,`nivel_acedemico`) VALUES 
 ('A0PRG1','ARTE',2,1,'1','1',NULL),
 ('A0PRG2','ARTE',2,1,'2','1',NULL),
 ('A0PRG3','ARTE',2,1,'3','1',NULL),
 ('A0PRG4','ARTE',2,1,'4','1',NULL),
 ('A0PRG5','ARTE',2,1,'5','1',NULL),
 ('CIPRG1','COMUNICACION INTEGRAL',3,2,'1','1',NULL),
 ('CIPRG2','COMUNICACION INTEGRAL',3,2,'2','1',NULL),
 ('CIPRG3','COMUNICACION INTEGRAL',3,2,'3','1',NULL),
 ('CIPRG4','COMUNICACION INTEGRAL',3,4,'3','1',NULL),
 ('CIPRG5','COMUNICACION INTEGRAL',3,5,'3','1',NULL),
 ('CTPRG1','CIENCIA TECNOLOGIA Y AMBIENTE',2,1,'1','1',NULL),
 ('CTPRG2','CIENCIA TECNOLOGIA Y AMBIENTE',2,1,'2','1',NULL),
 ('CTPRG3','CIENCIA TECNOLOGIA Y AMBIENTE',2,1,'3','1',NULL),
 ('CTPRG4','CIENCIA TECNOLOGIA Y AMBIENTE',2,1,'4','1',NULL),
 ('CTPRG5','CIENCIA TECNOLOGIA Y AMBIENTE',0,0,'5','1',NULL),
 ('EFPRG1','EDUCACION FISICA',2,1,'1','1',NULL),
 ('EFPRG2','EDUCACION FISICA',2,1,'2','1',NULL),
 ('EFPRG3','EDUCACION FISICA',2,1,'3','1',NULL),
 ('EFPRG4','EDUCACION FISICA',2,1,'4','1',NULL),
 ('EFPRG5','EDUCACION FISICA',5,3,'5','1',NULL),
 ('ERPRG1','EDUCACION RELIGIOSA',2,1,'1','1',NULL),
 ('ERPRG2','EDUCACION RELIGIOSA',2,1,'2','1',NULL),
 ('ERPRG3','EDUCACION RELIGIOSA',2,1,'3','1',NULL),
 ('ERPRG4','EDUCACION RELIGIOSA',2,1,'4','1',NULL),
 ('ERPRG5','EDUCACION RELIGIOSA',2,1,'5','1',NULL),
 ('ETPRG1','EDUCACION POR EL TRABAJO',2,1,'1','1',NULL),
 ('ETPRG2','EDUCACION POR EL TRABAJO',2,1,'2','1',NULL),
 ('ETPRG3','EDUCACION POR EL TRABAJO',2,1,'3','1',NULL),
 ('ETPRG4','EDUCACION POR EL TRABAJO',2,1,'4','1',NULL),
 ('ETPRG5','EDUCACION POR EL TRABAJO',20,10,'5','1',NULL),
 ('FCPRG1','FORMACION CIUDADANA Y CIVICA',2,1,'1','1',NULL),
 ('FCPRG2','FORMACION CIUDADANA Y CIVICA',2,1,'2','1',NULL),
 ('FCPRG3','FORMACION CIUDADANA Y CIVICA',2,1,'3','1',NULL),
 ('FCPRG4','FORMACION CIUDADANA Y CIVICA',2,1,'4','1',NULL),
 ('FCPRG5','FORMACION CIUDADANA Y CIVICA',2,1,'5','1',NULL),
 ('HGPRG1','HISTORIA,GEOGRAFIA Y ECONOMIA',2,1,'1','1',NULL),
 ('HGPRG2','HISTORIA,GEOGRAFIA Y ECONOMIA',2,1,'2','1',NULL),
 ('HGPRG3','HISTORIA,GEOGRAFIA Y ECONOMIA',2,1,'3','1',NULL),
 ('HGPRG4','HISTORIA,GEOGRAFIA Y ECONOMIA',2,1,'4','1',NULL),
 ('HGPRG5','HISTORIA,GEOGRAFIA Y ECONOMIA',2,1,'5','1',NULL),
 ('I0PRG1','INGLES',2,1,'1','1',NULL),
 ('I0PRG2','INGLES',2,1,'2','1',NULL),
 ('I0PRG3','INGLES',2,1,'3','1',NULL),
 ('I0PRG4','INGLES',2,1,'4','1',NULL),
 ('I0PRG5','INGLES',2,1,'5','1',NULL),
 ('M0PRG1','MATEMATICA',3,4,'1','1',NULL),
 ('M0PRG2','MATEMATICA',3,4,'2','1',NULL),
 ('M0PRG3','MATEMATICA',3,5,'3','1',NULL),
 ('M0PRG4','MATEMATICA',3,5,'4','1',NULL),
 ('M0PRG5','MATEMATICA',3,5,'5','1',NULL),
 ('mtprg2','informatica',4,3,'1','0','PRIMARIA'),
 ('mtprgo','asasasasa',10,10,'4','0','PRIMARIA'),
 ('PFPRG1','PERSONA FAMILIA Y RELACIONES  HUMANAS',2,1,'1','1',NULL),
 ('PFPRG2','PERSONA FAMILIA Y RELACIONES  HUMANAS',2,1,'2','1',NULL),
 ('PFPRG3','PERSONA FAMILIA Y RELACIONES  HUMANAS',2,1,'3','1',NULL),
 ('PFPRG4','PERSONA FAMILIA Y RELACIONES  HUMANAS',2,1,'4','1',NULL),
 ('PFPRG5','PERSONA FAMILIA Y RELACIONES  HUMANAS',2,1,'5','1',NULL),
 ('xxxxzz','asasasasa',12,23,'3','0','SECUNDARIA');
/*!40000 ALTER TABLE `tb_curso` ENABLE KEYS */;


--
-- Definition of table `tb_dias_semanas`
--

DROP TABLE IF EXISTS `tb_dias_semanas`;
CREATE TABLE `tb_dias_semanas` (
  `codigo_dia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_dia` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`codigo_dia`),
  UNIQUE KEY `u_na_D` (`nombre_dia`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dias_semanas`
--

/*!40000 ALTER TABLE `tb_dias_semanas` DISABLE KEYS */;
INSERT INTO `tb_dias_semanas` (`codigo_dia`,`nombre_dia`) VALUES 
 (7,'domingo'),
 (4,'jueves'),
 (1,'lunes'),
 (2,'martes'),
 (3,'miercoles'),
 (6,'sabado'),
 (5,'viernes');
/*!40000 ALTER TABLE `tb_dias_semanas` ENABLE KEYS */;


--
-- Definition of table `tb_docente`
--

DROP TABLE IF EXISTS `tb_docente`;
CREATE TABLE `tb_docente` (
  `codigo_docente` char(10) NOT NULL,
  `dni__docente` char(8) NOT NULL,
  `apelli_docente` varchar(50) NOT NULL,
  `nombre__docente` varchar(50) NOT NULL,
  `direcc__docente` varchar(100) DEFAULT NULL,
  `celula__docente` char(9) DEFAULT NULL,
  `email__docente` varchar(50) DEFAULT NULL,
  `sexo__docente` char(1) DEFAULT NULL,
  `usuari__docente` char(10) DEFAULT NULL,
  `clave__docente` varchar(100) DEFAULT NULL,
  `fechai__docente` date DEFAULT NULL,
  `foto__docente` varchar(100) DEFAULT NULL,
  `TIPO__DOCENTE` varchar(30) DEFAULT NULL,
  `HORAS_MAX` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo_docente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_docente`
--

/*!40000 ALTER TABLE `tb_docente` DISABLE KEYS */;
INSERT INTO `tb_docente` (`codigo_docente`,`dni__docente`,`apelli_docente`,`nombre__docente`,`direcc__docente`,`celula__docente`,`email__docente`,`sexo__docente`,`usuari__docente`,`clave__docente`,`fechai__docente`,`foto__docente`,`TIPO__DOCENTE`,`HORAS_MAX`) VALUES 
 ('0111111110','11111111','HUERTA MENDEZ','JUAN','HUARA','989898989','','M','0111111110','9c455ae96c01532d9f0f86a980638048','2014-02-05','fotos/SSSS.jpgContratado','PROFESOR',10),
 ('0222222220','22222222','JARA MOGOLLON','ERICK','BARRANCA','989898989','','M','0222222220','0222222220','2014-02-06','fotos/PRD222.jpgNombrado','PROFESOR',10),
 ('0223242430','22324243','Quispe','Ivan','Huacho','','','M','0223242430','0223242430','2015-03-02','fotos/carnet_mac-640x640x80.jpgContratado','PROFESOR',10),
 ('0333333330','33333333','RODRIGUEZ MENDOZA','LIDIA','','','','F','0333333330','0333333330','2014-02-03','fotos/TAMAÃ‘O PASAPORTE.JPGContratado','PROFESOR',9),
 ('0444444440','44444444','TRUJILLO LOZA','DIANA','','','','F','0444444440','0444444440','2014-02-11','fotos/images (1).jpgNombrado','PROFESOR',10),
 ('0678676760','67867676','xmen','xmen','gg','989898988','w@g.com','M','0678676760','142573425b8a53f67ce7a64550281d3b','2015-03-27','fotos/1506747_10200410993033389_8571575300474946538_n.jpg','PROFESOR',2),
 ('0734839950','73483995','SUAREZ LOLI','EDSON J','PUERTO SUPE','947390162','EDSON061193@GMAIL.COM','M','0734839950','9c455ae96c01532d9f0f86a980638048','2015-03-18','fotos/1234865_1476258489329151_5259925515665809621_n.jpg','DIRECTOR',5),
 ('2734839950','73483995','SUAREZ LOLI','EDSON J','PUERTO SUPE','956970181','EDSON061193@GMAIL.COM','M','2734839950','2734839950','1993-11-06',NULL,'DIRECTOR',10);
/*!40000 ALTER TABLE `tb_docente` ENABLE KEYS */;


--
-- Definition of table `tb_historial_actividades`
--

DROP TABLE IF EXISTS `tb_historial_actividades`;
CREATE TABLE `tb_historial_actividades` (
  `numero_actividad` int(11) NOT NULL AUTO_INCREMENT,
  `oberva__actividad` text,
  `fecha__actividad` date DEFAULT NULL,
  `codigo_control` char(11) NOT NULL,
  PRIMARY KEY (`numero_actividad`),
  KEY `RefTB_CONTROL24` (`codigo_control`),
  CONSTRAINT `RefTB_CONTROL24` FOREIGN KEY (`codigo_control`) REFERENCES `tb_control` (`codigo_control`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_historial_actividades`
--

/*!40000 ALTER TABLE `tb_historial_actividades` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_historial_actividades` ENABLE KEYS */;


--
-- Definition of table `tb_horario_clases`
--

DROP TABLE IF EXISTS `tb_horario_clases`;
CREATE TABLE `tb_horario_clases` (
  `codigo_horario` int(11) NOT NULL AUTO_INCREMENT,
  `numero_cargaLect` int(11) DEFAULT NULL,
  `codigo_dia` int(11) DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  `anio` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`codigo_horario`),
  KEY `fk_nc_hr` (`numero_cargaLect`),
  KEY `fk_cd_hr` (`codigo_dia`),
  CONSTRAINT `fk_cd_hr` FOREIGN KEY (`codigo_dia`) REFERENCES `tb_dias_semanas` (`codigo_dia`),
  CONSTRAINT `fk_nc_hr` FOREIGN KEY (`numero_cargaLect`) REFERENCES `tb_carga_lectiva` (`numero_cargaLect`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_horario_clases`
--

/*!40000 ALTER TABLE `tb_horario_clases` DISABLE KEYS */;
INSERT INTO `tb_horario_clases` (`codigo_horario`,`numero_cargaLect`,`codigo_dia`,`hora_inicio`,`hora_fin`,`anio`) VALUES 
 (20,7,1,'08:10:00','12:45:00',NULL),
 (27,7,1,'08:10:00','03:40:00','2015'),
 (28,7,2,'08:10:00','12:45:00','2015'),
 (29,7,2,'08:10:00','12:45:00','2015'),
 (30,7,2,'08:10:00','12:45:00','2015'),
 (33,7,3,'08:10:00','12:45:00','2015'),
 (34,7,4,'08:10:00','03:40:00','2015'),
 (35,7,4,'08:10:00','03:40:00','2015'),
 (36,7,4,'08:10:00','03:40:00','2015'),
 (37,7,4,'08:10:00','03:40:00','2015'),
 (38,7,5,'08:10:00','03:40:00','2015'),
 (39,7,3,'08:10:00','12:45:00','2015'),
 (40,7,4,'08:10:00','12:45:00','2015'),
 (41,7,4,'08:10:00','12:45:00','2015');
/*!40000 ALTER TABLE `tb_horario_clases` ENABLE KEYS */;


--
-- Definition of table `tb_matricula`
--

DROP TABLE IF EXISTS `tb_matricula`;
CREATE TABLE `tb_matricula` (
  `numero_matricula` int(11) NOT NULL AUTO_INCREMENT,
  `codigo___matricula` char(6) NOT NULL,
  `fecha__matricula` date NOT NULL,
  `codigo_alumno` char(10) NOT NULL,
  PRIMARY KEY (`numero_matricula`),
  KEY `pk_mat` (`codigo_alumno`),
  CONSTRAINT `pk_mat` FOREIGN KEY (`codigo_alumno`) REFERENCES `tb_alumno` (`codigo_alumno`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_matricula`
--

/*!40000 ALTER TABLE `tb_matricula` DISABLE KEYS */;
INSERT INTO `tb_matricula` (`numero_matricula`,`codigo___matricula`,`fecha__matricula`,`codigo_alumno`) VALUES 
 (44,'M00001','2015-01-02','1777777770'),
 (45,'M00002','2015-01-01','1888888880'),
 (46,'M00003','2015-01-01','1999999990'),
 (47,'M00004','2015-03-04','1111234550'),
 (48,'M00005','2015-03-12','1000000000'),
 (49,'M00006','2015-03-14','A878987680'),
 (50,'M00007','2015-03-18','A086667870'),
 (51,'M00008','2015-03-23','A973366260');
/*!40000 ALTER TABLE `tb_matricula` ENABLE KEYS */;


--
-- Definition of table `tb_pago`
--

DROP TABLE IF EXISTS `tb_pago`;
CREATE TABLE `tb_pago` (
  `registro_pago` int(11) NOT NULL AUTO_INCREMENT,
  `estad__pago` char(1) DEFAULT NULL,
  `fecha__pago` date DEFAULT NULL,
  `codigo_apoderado` char(8) NOT NULL,
  `codigopagocarct` int(11) DEFAULT NULL,
  PRIMARY KEY (`registro_pago`),
  KEY `RefTB_APODERADO20` (`codigo_apoderado`),
  KEY `fk_cp_pago` (`codigopagocarct`),
  CONSTRAINT `RefTB_APODERADO20` FOREIGN KEY (`codigo_apoderado`) REFERENCES `tb_apoderado` (`codigo_apoderado`),
  CONSTRAINT `fk_cp_pago` FOREIGN KEY (`codigopagocarct`) REFERENCES `tb_carac_pago` (`codigopagocarct`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pago`
--

/*!40000 ALTER TABLE `tb_pago` DISABLE KEYS */;
INSERT INTO `tb_pago` (`registro_pago`,`estad__pago`,`fecha__pago`,`codigo_apoderado`,`codigopagocarct`) VALUES 
 (1,'1','2014-05-05','10000001',NULL),
 (2,'1','2014-05-05','10000000',NULL),
 (3,'1','2014-05-05','10000002',NULL);
/*!40000 ALTER TABLE `tb_pago` ENABLE KEYS */;


--
-- Definition of table `tb_periodo_clases`
--

DROP TABLE IF EXISTS `tb_periodo_clases`;
CREATE TABLE `tb_periodo_clases` (
  `codigo_periodo` char(7) NOT NULL,
  `nombre__periodo` varchar(150) DEFAULT NULL,
  `fechaI__periodo` date DEFAULT NULL,
  `fechaF__periodo` date DEFAULT NULL,
  PRIMARY KEY (`codigo_periodo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_periodo_clases`
--

/*!40000 ALTER TABLE `tb_periodo_clases` DISABLE KEYS */;
INSERT INTO `tb_periodo_clases` (`codigo_periodo`,`nombre__periodo`,`fechaI__periodo`,`fechaF__periodo`) VALUES 
 ('2014PRG','AÃ±o 2014 es de la PromociÃ³n de la Industria Responsable y del Compromiso ClimÃ¡tico','2014-03-03','2014-12-26'),
 ('2015PRG','AÃ±o de la ley pulpin ','2015-03-09','2015-12-18');
/*!40000 ALTER TABLE `tb_periodo_clases` ENABLE KEYS */;


--
-- Definition of table `tb_resumen_trimestre`
--

DROP TABLE IF EXISTS `tb_resumen_trimestre`;
CREATE TABLE `tb_resumen_trimestre` (
  `numero_resgistro_bimestre` int(11) NOT NULL AUTO_INCREMENT,
  `nota_trabajos` int(11) DEFAULT NULL,
  `promedio_01` int(11) DEFAULT NULL,
  `promedio_02` int(11) DEFAULT NULL,
  `promedio_03` int(11) DEFAULT NULL,
  `nota_actitud` int(11) DEFAULT NULL,
  `promedio_general` int(11) DEFAULT NULL,
  `codigo_bimestre` varchar(12) NOT NULL,
  `codigo_curso` char(6) NOT NULL,
  `codigo_alumno` char(10) NOT NULL,
  PRIMARY KEY (`numero_resgistro_bimestre`),
  KEY `RefTB_TRIMESTRE13` (`codigo_bimestre`),
  KEY `RefTB_CURSO17` (`codigo_curso`),
  KEY `RefTB_ALUMNO19` (`codigo_alumno`),
  CONSTRAINT `RefTB_ALUMNO19` FOREIGN KEY (`codigo_alumno`) REFERENCES `tb_alumno` (`codigo_alumno`),
  CONSTRAINT `RefTB_CURSO17` FOREIGN KEY (`codigo_curso`) REFERENCES `tb_curso` (`codigo_curso`),
  CONSTRAINT `RefTB_TRIMESTRE13` FOREIGN KEY (`codigo_bimestre`) REFERENCES `tb_trimestre` (`codigo_bimestre`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_resumen_trimestre`
--

/*!40000 ALTER TABLE `tb_resumen_trimestre` DISABLE KEYS */;
INSERT INTO `tb_resumen_trimestre` (`numero_resgistro_bimestre`,`nota_trabajos`,`promedio_01`,`promedio_02`,`promedio_03`,`nota_actitud`,`promedio_general`,`codigo_bimestre`,`codigo_curso`,`codigo_alumno`) VALUES 
 (81,10,10,10,20,10,12,'2015PRGTR01','M0PRG5','1777777770'),
 (82,0,0,0,0,0,0,'2015PRGTR01','EFPRG5','1777777770'),
 (83,10,12,12,15,18,13,'2015PRGTR01','A0PRG5','1777777770'),
 (84,10,10,15,20,10,13,'2015PRGTR01','HGPRG5','1777777770'),
 (85,10,10,15,12,11,12,'2015PRGTR01','M0PRG5','1888888880'),
 (86,0,0,0,0,0,0,'2015PRGTR01','EFPRG5','1888888880'),
 (87,10,12,11,12,9,11,'2015PRGTR01','A0PRG5','1888888880'),
 (88,0,0,0,0,0,0,'2015PRGTR01','HGPRG5','1888888880'),
 (89,4,6,19,16,11,11,'2015PRGTR01','M0PRG5','1999999990'),
 (90,0,0,0,0,0,0,'2015PRGTR01','EFPRG5','1999999990'),
 (91,0,0,0,0,0,0,'2015PRGTR01','A0PRG5','1999999990'),
 (92,10,12,17,20,0,12,'2015PRGTR01','HGPRG5','1999999990'),
 (93,20,20,15,1,20,15,'2015PRGTR01','M0PRG5','1111234550'),
 (94,0,0,0,0,0,0,'2015PRGTR01','EFPRG5','1111234550'),
 (95,0,0,0,0,0,0,'2015PRGTR01','A0PRG5','1111234550'),
 (96,0,0,0,0,0,0,'2015PRGTR01','HGPRG5','1111234550'),
 (97,0,0,0,0,0,0,'2015PRGTR01','M0PRG5','A973366260'),
 (98,0,0,0,0,0,0,'2015PRGTR01','EFPRG5','A973366260'),
 (99,0,0,0,0,0,0,'2015PRGTR01','A0PRG5','A973366260'),
 (100,0,0,0,0,0,0,'2015PRGTR01','HGPRG5','A973366260'),
 (101,0,0,0,0,0,0,'2015PRGTR01','CTPRG5','A973366260'),
 (102,0,0,0,0,0,0,'2015PRGTR01','mtprg2','A973366260');
/*!40000 ALTER TABLE `tb_resumen_trimestre` ENABLE KEYS */;


--
-- Definition of table `tb_salon_clases`
--

DROP TABLE IF EXISTS `tb_salon_clases`;
CREATE TABLE `tb_salon_clases` (
  `numero_registro_sc` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_periodo` date DEFAULT NULL,
  `codigo_aula` char(4) DEFAULT NULL,
  `codigo_alumno` char(10) DEFAULT NULL,
  PRIMARY KEY (`numero_registro_sc`),
  KEY `RefTB_AULA15` (`codigo_aula`),
  KEY `RefTB_ALUMNO16` (`codigo_alumno`),
  CONSTRAINT `RefTB_ALUMNO16` FOREIGN KEY (`codigo_alumno`) REFERENCES `tb_alumno` (`codigo_alumno`),
  CONSTRAINT `RefTB_AULA15` FOREIGN KEY (`codigo_aula`) REFERENCES `tb_aula` (`codigo_aula`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_salon_clases`
--

/*!40000 ALTER TABLE `tb_salon_clases` DISABLE KEYS */;
INSERT INTO `tb_salon_clases` (`numero_registro_sc`,`fecha_periodo`,`codigo_aula`,`codigo_alumno`) VALUES 
 (53,'2015-01-02','A005','1777777770'),
 (54,'2015-01-01','A005','1888888880'),
 (55,'2015-01-01','A005','1999999990'),
 (56,'2015-03-04','A005','1111234550'),
 (57,'2015-03-12','A009','1000000000'),
 (58,'2015-03-14','A001','A878987680'),
 (59,'2015-03-18','A010','A086667870'),
 (60,'2015-03-23','A005','A973366260');
/*!40000 ALTER TABLE `tb_salon_clases` ENABLE KEYS */;


--
-- Definition of table `tb_trimestre`
--

DROP TABLE IF EXISTS `tb_trimestre`;
CREATE TABLE `tb_trimestre` (
  `codigo_bimestre` varchar(12) NOT NULL,
  `fechaI__trimestre` date DEFAULT NULL,
  `fechaF__trimestre` date DEFAULT NULL,
  `codigo_periodo` char(7) DEFAULT NULL,
  PRIMARY KEY (`codigo_bimestre`),
  KEY `RefTB_PERIODO_CLASES9` (`codigo_periodo`),
  CONSTRAINT `RefTB_PERIODO_CLASES9` FOREIGN KEY (`codigo_periodo`) REFERENCES `tb_periodo_clases` (`codigo_periodo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_trimestre`
--

/*!40000 ALTER TABLE `tb_trimestre` DISABLE KEYS */;
INSERT INTO `tb_trimestre` (`codigo_bimestre`,`fechaI__trimestre`,`fechaF__trimestre`,`codigo_periodo`) VALUES 
 ('2014PRGTR01','2014-03-03','2014-06-20','2014PRG'),
 ('2015PRGTR01','2015-03-09','2015-05-22','2015PRG');
/*!40000 ALTER TABLE `tb_trimestre` ENABLE KEYS */;


--
-- Definition of procedure `sp_aula_insert`
--

DROP PROCEDURE IF EXISTS `sp_aula_insert`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_aula_insert`(
in xubi  varchar(50),
in xgrado char(1),
in xseccion char(1),
in xcapacidad int,
in xestado varchar(30),
in xnivel varchar(45))
begin
set @num=0;
select count(*)into @num from tb_aula;
set @codC=concat('S',right(concat('00',cast((@num+1) as char)),3));
insert into tb_aula values(@codC,xubi,xgrado, xseccion,xcapacidad,xestado,xnivel,'1');
commit;
end $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_notas_update`
--

DROP PROCEDURE IF EXISTS `sp_notas_update`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_notas_update`(
in nt int,
in p1 int,
in p2 int,
in p3 int,
in pa int,
in pg int,
in cb varchar(12),
in cc char(6),
in ca char(10) )
begin
update tb_resumen_trimestre set
nota_trabajos=nt,
promedio_01=p1,
promedio_02=p2,
promedio_03=p3,
nota_actitud=pa,

promedio_general=pg
 where codigo_bimestre=cb and codigo_curso=cc and codigo_alumno=ca;
commit;
end $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_registrar_matricula`
--

DROP PROCEDURE IF EXISTS `sp_registrar_matricula`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registrar_matricula`(
in xcodigoA char(10)
)
begin
set @num=0;
select count(*)into @num from tb_matricula;
set @codM=concat('M',right(concat('0000',cast((@num+1) as char)),5));
insert into tb_matricula values(null,@codM, now(),xcodigoA);
commit;
end $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of view `v_alumno_matr`
--

DROP TABLE IF EXISTS `v_alumno_matr`;
DROP VIEW IF EXISTS `v_alumno_matr`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_alumno_matr` AS select `s`.`codigo_alumno` AS `codigo_alumno`,`cl`.`codigo_curso` AS `codigo_curso`,`a`.`apelli__alumno` AS `apelli__alumno`,`a`.`nombre__alumno` AS `nombre__alumno`,`au`.`grado___aula` AS `grado___aula`,`au`.`seccio__aula` AS `seccio__aula`,`cu`.`nombre__curso` AS `nombre__curso`,`d`.`nombre__docente` AS `nombre__docente` from (((((`tb_alumno` `a` join `tb_salon_clases` `s` on((`a`.`codigo_alumno` = `s`.`codigo_alumno`))) join `tb_aula` `au` on((`au`.`codigo_aula` = `s`.`codigo_aula`))) join `tb_carga_lectiva` `cl` on((`cl`.`codigo_aula` = `au`.`codigo_aula`))) join `tb_docente` `d` on((`d`.`codigo_docente` = `cl`.`codigo_docente`))) join `tb_curso` `cu` on((`cl`.`codigo_curso` = `cu`.`codigo_curso`)));

--
-- Definition of view `v_alumno_matriculado`
--

DROP TABLE IF EXISTS `v_alumno_matriculado`;
DROP VIEW IF EXISTS `v_alumno_matriculado`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_alumno_matriculado` AS select `m`.`codigo_alumno` AS `codigo_alumno`,`a`.`dni__alumno` AS `dni__alumno`,`a`.`apelli__alumno` AS `apelli__alumno`,`a`.`nombre__alumno` AS `nombre__alumno`,`a`.`fechaN__alumno` AS `fechaN__alumno`,`a`.`fechaI__alumno` AS `fechaI__alumno`,`a`.`sexo__alumno` AS `sexo__alumno`,`m`.`fecha__matricula` AS `fecha__matricula` from (`tb_matricula` `m` join `tb_alumno` `a` on((`a`.`codigo_alumno` = `m`.`codigo_alumno`)));

--
-- Definition of view `v_asg_notas`
--

DROP TABLE IF EXISTS `v_asg_notas`;
DROP VIEW IF EXISTS `v_asg_notas`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_asg_notas` AS select `c`.`codigo_curso` AS `CODIGO_CURSO`,`cl`.`fecha__cargaLect` AS `fecha__cargaLect`,`r`.`codigo_alumno` AS `codigo_alumno`,`a`.`nombre__alumno` AS `nombre__alumno`,`a`.`apelli__alumno` AS `apelli__alumno`,`c`.`nombre__curso` AS `nombre__curso`,`al`.`grado___aula` AS `GRADO___AULA`,`al`.`seccio__aula` AS `SECCIO__AULA`,`r`.`codigo_bimestre` AS `CODIGO_BIMESTRE`,`r`.`nota_trabajos` AS `nota_trabajos`,`r`.`promedio_01` AS `promedio_01`,`r`.`promedio_02` AS `promedio_02`,`r`.`promedio_03` AS `promedio_03`,`r`.`nota_actitud` AS `nota_actitud`,`r`.`promedio_general` AS `promedio_general` from ((((`tb_alumno` `a` join `tb_resumen_trimestre` `r` on((`a`.`codigo_alumno` = `r`.`codigo_alumno`))) join `tb_curso` `c` on((`r`.`codigo_curso` = `c`.`codigo_curso`))) join `tb_carga_lectiva` `cl` on((`cl`.`codigo_curso` = `c`.`codigo_curso`))) join `tb_aula` `al` on((`al`.`codigo_aula` = `cl`.`codigo_aula`)));

--
-- Definition of view `v_estado_pago`
--

DROP TABLE IF EXISTS `v_estado_pago`;
DROP VIEW IF EXISTS `v_estado_pago`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_estado_pago` AS select `p`.`estad__pago` AS `estad__pago`,`a`.`apelli__apoderado` AS `apelli__apoderado`,`a`.`nombre__apoderado` AS `nombre__apoderado`,`al`.`codigo_alumno` AS `codigo_alumno` from ((`tb_pago` `p` join `tb_apoderado` `a`) join `tb_alumno` `al`) where ((`p`.`codigo_apoderado` = `a`.`codigo_apoderado`) and (`al`.`codigo_apoderado` = `a`.`codigo_apoderado`) and (`p`.`estad__pago` = 1));

--
-- Definition of view `v_horarios`
--

DROP TABLE IF EXISTS `v_horarios`;
DROP VIEW IF EXISTS `v_horarios`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_horarios` AS select `a`.`grado___aula` AS `grado___aula`,`a`.`seccio__aula` AS `seccio__aula`,`cl`.`fecha__cargaLect` AS `fecha__cargalect`,`cl`.`numero_cargaLect` AS `numero_cargaLect`,`d`.`apelli_docente` AS `apelli_docente`,`d`.`nombre__docente` AS `nombre__docente`,concat_ws(',',`d`.`apelli_docente`,`d`.`nombre__docente`) AS `n`,`d`.`codigo_docente` AS `codigo_docente`,`cu`.`nombre__curso` AS `nombre__curso`,`cu`.`codigo_curso` AS `codigo_curso`,`hr`.`hora_inicio` AS `hora_inicio`,`hr`.`hora_fin` AS `hora_fin`,`hr`.`anio` AS `anio`,`ds`.`nombre_dia` AS `nombre_dia` from (((((`tb_aula` `a` join `tb_docente` `d`) join `tb_carga_lectiva` `cl`) join `tb_curso` `cu`) join `tb_horario_clases` `hr`) join `tb_dias_semanas` `ds`) where ((`cl`.`codigo_docente` = `d`.`codigo_docente`) and (`cl`.`codigo_aula` = `a`.`codigo_aula`) and (`cu`.`codigo_curso` = `cl`.`codigo_curso`) and (`hr`.`numero_cargaLect` = `cl`.`numero_cargaLect`) and (`hr`.`codigo_dia` = `ds`.`codigo_dia`));

--
-- Definition of view `v_info_alumno`
--

DROP TABLE IF EXISTS `v_info_alumno`;
DROP VIEW IF EXISTS `v_info_alumno`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_info_alumno` AS select `a`.`codigo_alumno` AS `codigo_alumno`,`a`.`dni__alumno` AS `dni__alumno`,`a`.`apelli__alumno` AS `apelli__alumno`,`a`.`nombre__alumno` AS `nombre__alumno`,`a`.`foto__alumno` AS `foto__alumno`,`a`.`fechaN__alumno` AS `fechaN__alumno`,`a`.`fechaI__alumno` AS `fechaI__alumno`,`a`.`sexo__alumno` AS `sexo__alumno`,`a`.`iduser__alumno` AS `iduser__alumno`,`ap`.`apelli__apoderado` AS `apelli__apoderado`,`ap`.`nombre__apoderado` AS `nombre__apoderado`,`au`.`grado___aula` AS `grado___aula`,`au`.`seccio__aula` AS `seccio__aula`,`au`.`ubigeo__aula` AS `ubigeo__aula` from (((`tb_alumno` `a` join `tb_apoderado` `ap`) join `tb_aula` `au`) join `tb_salon_clases` `s`) where ((`s`.`codigo_aula` = `au`.`codigo_aula`) and (`a`.`codigo_alumno` = `s`.`codigo_alumno`) and (`a`.`codigo_apoderado` = `ap`.`codigo_apoderado`)) order by `s`.`fecha_periodo` desc limit 1;

--
-- Definition of view `v_lista_docente`
--

DROP TABLE IF EXISTS `v_lista_docente`;
DROP VIEW IF EXISTS `v_lista_docente`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_lista_docente` AS select `c`.`codigo_docente` AS `codigo`,`cu`.`nombre__curso` AS `curso`,`a`.`grado___aula` AS `grado`,`a`.`seccio__aula` AS `seccion`,`c`.`fecha__cargaLect` AS `fecha` from ((`tb_carga_lectiva` `c` join `tb_curso` `cu` on((`cu`.`codigo_curso` = `c`.`codigo_curso`))) join `tb_aula` `a` on((`a`.`codigo_aula` = `c`.`codigo_aula`)));

--
-- Definition of view `v_lista_matriculados`
--

DROP TABLE IF EXISTS `v_lista_matriculados`;
DROP VIEW IF EXISTS `v_lista_matriculados`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_lista_matriculados` AS select `a`.`codigo_alumno` AS `codigo`,`a`.`dni__alumno` AS `dni`,`a`.`apelli__alumno` AS `apellidos`,`a`.`nombre__alumno` AS `nombres`,`au`.`grado___aula` AS `grado`,`au`.`seccio__aula` AS `seccion`,`sc`.`fecha_periodo` AS `fecha`,`a`.`sexo__alumno` AS `sexo__alumno` from ((`tb_alumno` `a` join `tb_aula` `au`) join `tb_salon_clases` `sc`) where ((`sc`.`codigo_alumno` = `a`.`codigo_alumno`) and (`sc`.`codigo_aula` = `au`.`codigo_aula`)) order by 3;

--
-- Definition of view `v_prefil_alumno`
--

DROP TABLE IF EXISTS `v_prefil_alumno`;
DROP VIEW IF EXISTS `v_prefil_alumno`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_prefil_alumno` AS select `a`.`codigo_alumno` AS `codigo_alumno`,`a`.`dni__alumno` AS `dni__alumno`,`a`.`claveu_alumno` AS `claveu_alumno`,`a`.`estado__alumno` AS `estado__alumno`,`a`.`apelli__alumno` AS `apelli__alumno`,`a`.`nombre__alumno` AS `nombre__alumno`,`a`.`foto__alumno` AS `foto__alumno`,`a`.`fechaN__alumno` AS `fechaN__alumno`,`a`.`fechaI__alumno` AS `fechaI__alumno`,`a`.`sexo__alumno` AS `sexo__alumno`,`a`.`iduser__alumno` AS `iduser__alumno`,`ap`.`apelli__apoderado` AS `apelli__apoderado`,`ap`.`nombre__apoderado` AS `nombre__apoderado`,`au`.`grado___aula` AS `grado___aula`,`au`.`seccio__aula` AS `seccio__aula`,`au`.`ubigeo__aula` AS `ubigeo__aula` from (((`tb_alumno` `a` join `tb_apoderado` `ap`) join `tb_aula` `au`) join `tb_salon_clases` `s`) where ((`s`.`codigo_aula` = `au`.`codigo_aula`) and (`a`.`codigo_alumno` = `s`.`codigo_alumno`) and (`a`.`codigo_apoderado` = `ap`.`codigo_apoderado`)) order by `s`.`fecha_periodo` desc limit 1;

--
-- Definition of view `v_val_matricula`
--

DROP TABLE IF EXISTS `v_val_matricula`;
DROP VIEW IF EXISTS `v_val_matricula`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_val_matricula` AS select `m`.`numero_matricula` AS `numero_matricula`,`m`.`codigo___matricula` AS `codigo___matricula`,`m`.`fecha__matricula` AS `fecha__matricula`,`m`.`codigo_alumno` AS `codigo_alumno`,`a`.`apelli__alumno` AS `apelli__alumno`,`a`.`nombre__alumno` AS `nombre__alumno`,`au`.`grado___aula` AS `grado___aula`,`au`.`seccio__aula` AS `seccio__aula` from (((`tb_matricula` `m` join `tb_salon_clases` `s` on((`m`.`codigo_alumno` = `s`.`codigo_alumno`))) join `tb_alumno` `a` on((`a`.`codigo_alumno` = `s`.`codigo_alumno`))) join `tb_aula` `au` on((`s`.`codigo_aula` = `au`.`codigo_aula`)));

--
-- Definition of view `v_val_tareas_notas_asis`
--

DROP TABLE IF EXISTS `v_val_tareas_notas_asis`;
DROP VIEW IF EXISTS `v_val_tareas_notas_asis`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_val_tareas_notas_asis` AS select `cl`.`codigo_curso` AS `codigo_curso`,`c`.`nombre__curso` AS `nombre__curso`,`cl`.`codigo_docente` AS `codigo_docente`,`cl`.`codigo_aula` AS `codigo_aula`,`a`.`seccio__aula` AS `seccio__aula`,concat_ws(',',`d`.`apelli_docente`,`d`.`nombre__docente`) AS `n`,`a`.`grado___aula` AS `grado___aula` from (((`tb_curso` `c` join `tb_carga_lectiva` `cl` on((`c`.`codigo_curso` = `cl`.`codigo_curso`))) join `tb_docente` `d` on((`d`.`codigo_docente` = `cl`.`codigo_docente`))) join `tb_aula` `a` on((`cl`.`codigo_aula` = `a`.`codigo_aula`)));

--
-- Definition of view `v_validar_carga_lectiva`
--

DROP TABLE IF EXISTS `v_validar_carga_lectiva`;
DROP VIEW IF EXISTS `v_validar_carga_lectiva`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_validar_carga_lectiva` AS select `a`.`grado___aula` AS `grado___aula`,`a`.`seccio__aula` AS `seccio__aula`,`cl`.`fecha__cargaLect` AS `fecha__cargalect`,`cl`.`numero_cargaLect` AS `numero_cargaLect`,`d`.`apelli_docente` AS `apelli_docente`,`d`.`nombre__docente` AS `nombre__docente`,concat_ws(',',`d`.`apelli_docente`,`d`.`nombre__docente`) AS `n`,`d`.`codigo_docente` AS `codigo_docente`,`cu`.`nombre__curso` AS `nombre__curso`,`cu`.`codigo_curso` AS `codigo_curso` from (((`tb_aula` `a` join `tb_docente` `d`) join `tb_carga_lectiva` `cl`) join `tb_curso` `cu`) where ((`cl`.`codigo_docente` = `d`.`codigo_docente`) and (`cl`.`codigo_aula` = `a`.`codigo_aula`) and (`cu`.`codigo_curso` = `cl`.`codigo_curso`));



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
