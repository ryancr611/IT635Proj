-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: IT635Proj
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1-log

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
-- Table structure for table `Admin`
--

DROP TABLE IF EXISTS `Admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Admin` (
  `Username` varchar(15) NOT NULL,
  `Password` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Admin`
--

LOCK TABLES `Admin` WRITE;
/*!40000 ALTER TABLE `Admin` DISABLE KEYS */;
INSERT INTO `Admin` VALUES ('Admin','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8');
/*!40000 ALTER TABLE `Admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Care`
--

DROP TABLE IF EXISTS `Care`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Care` (
  `ID` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `Plant_Name` varchar(30) NOT NULL,
  `Care` varchar(10000) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Care`
--

LOCK TABLES `Care` WRITE;
/*!40000 ALTER TABLE `Care` DISABLE KEYS */;
INSERT INTO `Care` VALUES (1,'Arbor Vitae','After planting, create a water basin by making a ridge of soil around the outer circumference of the planting hole. Make the ridge about 3 inches high. Once you have created the ridge, cover the ground around the arborvitae with 2 to 3 inches of mulch, such as pine needles or bark chips. Mulch keeps the soil moist and helps maintain an even temperature around the roots. To prevent rot that often results from mulch piling up against the trunk, leave a 3- to 4-inch span unmulched. Water the arborvitae regularly throughout the first year. Provide enough water to soak the root zone, and then allow the top few inches of soil to dry before watering again.'),(2,'Marigold','Water marigolds the first 10 to 12 days after transplanting bedding plants into the garden. Thereafter, water the plants once every week without rainfall. Water deeply to saturate the roots and then allow the soil to dry before watering again. Marigolds are drought-tolerant plants that may develop rot, mildew or other diseases in soggy soil. Avoid fertilizing the plants. Marigolds thrive in poor soil and fertilizer often creates lush, rich foliage with few blooms. Pinch off, or deadhead marigold blooms as soon as they fade to encourage continued blooming. Otherwise, the plants go to seed early and blooming rapidly decreases. To deadhead marigolds, remove the bloom, along with the stem down to the next branching stem, bud or leaf. Stake tall marigold varieties to keep the plants upright. Install a wooden or bamboo stake into the soil 4 to 6 inches from the plant. Tie the plant to the stake loosely with soft garden twine. Staking the plant while its about one-third its mature height is best, as attempting to stake a full-grown plant may damage the roots.\n'),(3,'Redwood','Consistent moisture is key to dawn redwood bonsais success. Water often to keep the soil consistently moist, but not waterlogged. Over-watering can cause moss and rot to grow at the base of the tree, while too little water will quickly cause the delicate, thin tips of the leaves to shrivel. Check the tree daily, especially during the summer. Allowing the plant to dry out just once can be enough to kill it. Dawn redwood is a fast-growing tree that requires regular trimming. Roots should be trimmed annually. Generally, roots should be trimmed to about the size of a fist, or smaller. You may find it helpful to take a piece of slate and spread the roots out on top of it before putting the tree back in its container. The slate helps keep the roots from forming such a dense ball. Regular pruning is necessary to maintain the trees triangular shape and encourage dense branching. Remove any large branches that seem out of proportion with the rest of the tree, as they will only continue to grow and throw the tree off balance.'),(4,'White DogWood','Consistent moisture is key to dawn redwood bonsais success. Water often to keep the soil consistently moist, but not waterlogged. Over-watering can cause moss and rot to grow at the base of the tree, while too little water will quickly cause the delicate, thin tips of the leaves to shrivel. Check the tree daily, especially during the summer. Allowing the plant to dry out just once can be enough to kill it. Dawn redwood is a fast-growing tree that requires regular trimming. Roots should be trimmed annually. Generally, roots should be trimmed to about the size of a fist, or smaller. You may find it helpful to take a piece of slate and spread the roots out on top of it before putting the tree back in its container. The slate helps keep the roots from forming such a dense ball. Regular pruning is necessary to maintain the trees triangular shape and encourage dense branching. Remove any large branches that seem out of proportion with the rest of the tree, as they will only continue to grow and throw the tree off balance.'),(5,'Forsythia','While forsythia bushes like well-draining soil, they also grow best of watered regularly. Forsythias should receive at least 2 inches of water a week. If enough rain does not fall to provide this amount of water, you can supplement with water from the hose. But, if you are worried about water conservation, forsythia plants can tolerate periods of decreased watering. You should also fertilize when caring for forsythia. Use a balanced fertilizer once every two to three months in the spring and summer. Do not fertilize them in the fall and winter.'),(6,'Magnolia','If you are looking for an ornamental tree that will tolerate wet, soggy soil, you need look no further than a magnolia. Magnolia planting is best done in a moist, rich, slightly acidic soil that is amended with compost or leaf mold will get the tree off to a good start. As part of your magnolia tree care, youâ€™ll need to water the trees to keep the soil around the base of the tree moist. It is especially important to keep young trees well-watered until they become established. Fertilize in spring when the flower buds begin to swell with a slow-release fertilizer.'),(7,'Japanese Maple','Japanese Maple are greedy feeders, especially when young. Before planting, work as much compost as you like into the soil around the tree, and keep adding it during spring and early summer. Composted matter not only adds valuable nutrients to the soil, it tends to retain moisture, which Japanese Maple love. These trees are quite drought-tolerant when mature, but like most young trees, they need regular deep waterings during the first few years. Plan to water heavily twice a week during normal weather and three or even four times weekly in periods of drought. Whether your tree is young or mature, it will grow best in soil kept consistently moist by regular watering and mulching.'),(8,'Blue Spruce','Healthy, unstressed Colorado blue spruces have a greater ability to avoid and overcome potential disease and pest problems than stressed trees. Blue spruce trees thrive in full sun to partial shade and moist, well-drained soil with a pH of 6.0 to 7.5. However, these evergreens function poorly in full shade and waterlogged or dry soil conditions. For continued soil health, water the soil when conditions become dry, and lay a 2- to 3-inch layer of organic mulch just beyond the trees canopy without pressing it against the trunk. Mulch helps to conserve moisture and to keep weeds at bay.'),(9,'Black Pine','The watering of your Bonsai must never be neglected. Apply water when the soil appears dry never allow the soil to become completely dry. If your Bonsai is receiving full sun, it may be necessary to water once a day. This schedule may vary with the size pot, type of soil and type of Bonsai tree you own. Evaluate each trees water requirements and adjust your watering schedule to accommodate it. It is a good idea to use a moisture meter until you get to know the requirements of your Bonsai tree. Watering should be done with a watering can or hose attachment which should dispense the water in a soft enough manner as not to disturb the soil. Water should be applied until it begins running out of the holes in the bottom of your pot. A good rain is usually a sufficient watering. '),(10,'Dragon Lily','Dragon Lilies are tough and easy to care for. They can be grown in full sun to partial shade. Provide good drainage and water well during the growing season. When the plant begins to die back after blooming, you should decrease watering.'),(11,'Alder','Remember to water Alder often. Keep in mind when planting that Alder is thought of as very hardy, so this plant will tend to go dormant over the long winter months. When your alder is 1-2 years you may transplant it from the seedling pot into a prepared hole. Clear away weeds and grass and make a hole big enough to accommodate the root ball. Plant at same depth it was in the pot. As Alder is very hardy, ensure temperatures are mild enough to plant out wait until after your last frost date to be on the safe side.'),(12,'Hemlock','Once established, hemlocks require little care, but establishing them can be a challenge. They need acidic soils that stay moist, but not wet, and frequent waterings. Like willows, hemlocks are riverbank trees, so if your site is elevated and dry, you may need to add a thick ring of mulch over your treeâ€™s root zone and consider installing a drip irrigation system to keep your tree looking its best. The shallow roots of the hemlock can allow it to topple easily; if high winds are a frequent problem, a stabilizing tree stake should be considered while your hemlock is young'),(13,'Holly','Adequate water is necessary for your hollies in the early growing phase. Once the trees are established, you can cut back. You donâ€™t need to water as much during the winter, however, supplemental watering is necessary during drought and as fall draws to a close before the ground freezes. Hollies cannot tolerate soggy soil, so make sure to choose a spot that is not prone to water retention.'),(14,'Apple Tree','Apple trees need well-drained soil, not too wet. Soil needs to be moderately rich and retain moisture as well as air. Mulch with straw, hay, or some other organic material to keep soil moist and provide nutrients as they decompose. Choose a sunny site. For best fruiting, an apple tree needs â€œfull sunlight,â€ which means six or more hours of direct summer sun daily.'),(15,'Cypress','Young outdoor cypress trees will need supplemental watering during dry weather. It is best to stop watering them if the ground freezes. Weeding near cypress trees helps their overall health because they do not have to compete for water and nutrients. Leyland cypress tolerates heavy trimming, so you can shape it into a hedge or windscreen. In very windy areas, such as areas near the coast, you can prevent wind damage by wrapping the trees in burlap when a storm is on the way.');
/*!40000 ALTER TABLE `Care` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Plants`
--

DROP TABLE IF EXISTS `Plants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Plants` (
  `ID` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `Plant_Name` varchar(30) NOT NULL,
  `DATE_ARRIVED` date DEFAULT NULL,
  `IN_STOCK` int(6) DEFAULT NULL,
  `DEAD` int(6) DEFAULT NULL,
  `SOLD` int(6) DEFAULT NULL,
  `ORDERED` int(6) DEFAULT NULL,
  `LOCATION` varchar(400) DEFAULT NULL,
  `MAINTENANCE` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Plants`
--

LOCK TABLES `Plants` WRITE;
/*!40000 ALTER TABLE `Plants` DISABLE KEYS */;
INSERT INTO `Plants` VALUES (1,'Arbor Vitae','2017-02-15',40,1,10,0,'Front of Store','Water Twice a day'),(2,'Marigold','2017-02-20',100,0,7,20,'Back Of Store','Water Once a Day'),(3,'Dawn Redwood','2017-02-22',5,0,0,20,'Back Of Lot','Water Three Times a Day'),(4,'White Dogwood','2017-02-22',45,2,30,15,'Back Of Lot','Water Twice A Day'),(5,'Forsythia','2017-02-10',5,0,2,10,'Front of Lot','Water Twice A Day'),(6,'Magnolia','2017-02-10',150,0,15,20,'Front of Lot','Water Twice A Day'),(7,'Japanese Maple','2017-02-01',30,0,10,20,'Back Of Lot','Water Twice A Day'),(8,'Blue Spruce','2017-01-14',50,10,40,50,'Back Of Lot','Water Twice A Day'),(9,'Black Pine','2017-01-10',20,0,10,5,'Back Of Lot','Water Twice A Day'),(10,'Dragon Lily','2017-03-15',30,5,15,30,'Front of Store','Water Twice A Day'),(11,'Alder','2017-03-10',5,0,1,0,'Back Left Corner of Lot','Water Twice A Day'),(12,'Hemlock','2017-03-20',10,0,5,5,'Back Right Corner of Lot','Water Twice A Day'),(13,'Holly','2017-03-20',15,5,20,5,'Back Right Corner of Lot','Water Twice A Day'),(14,'Apple Tree','2017-03-15',15,0,25,5,'Center Of Lot',' Water Daily and Pick Apples if Tree is Fully Grown'),(15,'Cypress','2017-03-01',10,2,3,0,'Back Right Corner of Lot','Water Daily');
/*!40000 ALTER TABLE `Plants` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-09 17:02:24
