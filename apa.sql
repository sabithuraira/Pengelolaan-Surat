CREATE DATABASE  IF NOT EXISTS `arsip` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `arsip`;
-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: localhost    Database: arsip
-- ------------------------------------------------------
-- Server version	5.5.8-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `data_sk`
--

DROP TABLE IF EXISTS `data_sk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_sk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_sk` varchar(45) NOT NULL,
  `tentang` text NOT NULL,
  `tgl_penetapan` datetime NOT NULL,
  `berlaku` datetime NOT NULL,
  `tt` varchar(255) NOT NULL,
  `upload_file` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_time` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nomor_sk` (`nomor_sk`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_sk`
--

LOCK TABLES `data_sk` WRITE;
/*!40000 ALTER TABLE `data_sk` DISABLE KEYS */;
INSERT INTO `data_sk` VALUES (2,'001b/ 1608 / Tahun 2015','PERUBAHAN PENGANGKATAN PENGELOLA ANGGARAN\r\nBADAN PUSAT STATISTIK KABUPATEN OKU SELATAN\r\n TAHUN ANGGARAN 2015','2015-02-11 00:00:00','2015-12-31 00:00:00','YUSRON, SE, M.Si','2.doc',1,'2015-11-15 08:58:09',1,'2015-11-15 08:58:09');
/*!40000 ALTER TABLE `data_sk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_spd`
--

DROP TABLE IF EXISTS `data_spd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_spd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_spd` varchar(45) NOT NULL,
  `nama` text NOT NULL,
  `jabatan` text NOT NULL,
  `berangkat_dari` text NOT NULL,
  `tujuan` text NOT NULL,
  `lama` varchar(255) NOT NULL,
  `tgl_berangkat` datetime NOT NULL,
  `tgl_kembali` datetime NOT NULL,
  `upload_file` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_time` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nomor_spd` (`nomor_spd`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_spd`
--

LOCK TABLES `data_spd` WRITE;
/*!40000 ALTER TABLE `data_spd` DISABLE KEYS */;
INSERT INTO `data_spd` VALUES (2,'/ST/SPD/2015','Ahmad Rahmadhan, S.ST','Plh. Kasi Statistik Sosial BPS Kabupaten Ogan Komering Ulu Propinsi Sumatera Selatan','Palembang','Lombok','5 (lima) hari','2015-11-02 00:00:00','2015-11-06 00:00:00','2.xlsx',1,'2015-11-15 08:53:38',1,'2015-11-15 08:53:38');
/*!40000 ALTER TABLE `data_spd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_st`
--

DROP TABLE IF EXISTS `data_st`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_st` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_st` varchar(45) NOT NULL,
  `dasar_st` text NOT NULL,
  `tujuan` text NOT NULL,
  `lama` text NOT NULL,
  `tgl_tugas` datetime NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `tt` varchar(255) NOT NULL,
  `upload_file` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_time` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nomor_st` (`nomor_st`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_st`
--

LOCK TABLES `data_st` WRITE;
/*!40000 ALTER TABLE `data_st` DISABLE KEYS */;
INSERT INTO `data_st` VALUES (2,'16081.068/2014','Berdasarkan Surat Kepala BPS Provinsi Sumatera Selatan No. 16522.2619 Tanggal 14 \r\n  September  2014 Perihal Rapat Teknis Daerah Suseda 2014 di Hotel Swiis Bell Inn Palembang','Mengikuti Rapat Teknis Daerah Dalam Rangka Suseda 2014 yang diadakan di Hotel Swiss Bell Inn, Palembang','18 - 21 September  2014','2014-09-18 00:00:00','Yusron, SE, M.Si','Pembina Tingkat I (IV/b)','YUSRON, SE, M.Si','2.docx',1,'2015-11-15 09:01:15',1,'2015-11-15 09:01:16');
/*!40000 ALTER TABLE `data_st` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mem_user`
--

DROP TABLE IF EXISTS `mem_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mem_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_time` datetime NOT NULL,
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mem_user`
--

LOCK TABLES `mem_user` WRITE;
/*!40000 ALTER TABLE `mem_user` DISABLE KEYS */;
INSERT INTO `mem_user` VALUES (1,'sabit','sabit@bps.go.id','$2a$13$0MXLS2XjrNw0qhaBQSsBmOxFc0O62sPeWGbOaySr0h/IhliHSmfiy','2014-02-10 11:44:05','2015-11-15 09:03:27'),(2,'User1','user1@email.com','$2a$13$AJWXMQDapCGCEX1qvkyFkelAIMBT2/KPByIQ2oUvSFF8pMs2TI4.2','2015-11-13 10:48:09','2015-11-13 10:48:40');
/*!40000 ALTER TABLE `mem_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-16 11:53:10
