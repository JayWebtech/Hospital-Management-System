-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 23, 2020 at 02:58 PM
-- Server version: 5.0.27
-- PHP Version: 5.2.1
-- 
-- Database: `hms_system`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `id` int(11) NOT NULL auto_increment,
  `uname` varchar(20) NOT NULL,
  `pword` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` (`id`, `uname`, `pword`) VALUES 
(1, 'admin', 'admin');

-- --------------------------------------------------------

-- 
-- Table structure for table `appointment`
-- 

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL auto_increment,
  `dname` varchar(30) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `spec` varchar(70) NOT NULL,
  `adate` date NOT NULL,
  `atime` time NOT NULL,
  `status` varchar(30) NOT NULL,
  `appoint_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `appointment`
-- 

INSERT INTO `appointment` (`id`, `dname`, `pname`, `email`, `spec`, `adate`, `atime`, `status`, `appoint_time`) VALUES 
(1, 'Mathias James', 'ADAMU', 'jethroadamzy@gmail.com', 'Gynecologist/Obstetrician', '2020-02-05', '00:44:00', 'APPROVED', '2020-02-23 12:44:04'),
(2, 'ADAMA JETHRO', 'Mathias Danjaji', 'mattyfd@gmail.com', 'General Physician', '2020-02-14', '02:02:00', 'APPROVED', '2020-02-23 12:47:15');

-- --------------------------------------------------------

-- 
-- Table structure for table `diagnosed_list`
-- 

CREATE TABLE `diagnosed_list` (
  `id` int(200) NOT NULL auto_increment,
  `pat_email` longtext NOT NULL,
  `symp` longtext NOT NULL,
  `sick_name` longtext NOT NULL,
  `treatment` longtext NOT NULL,
  `prev` longtext NOT NULL,
  `doc_email` varchar(100) NOT NULL,
  `diag_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `diagnosed_list`
-- 

INSERT INTO `diagnosed_list` (`id`, `pat_email`, `symp`, `sick_name`, `treatment`, `prev`, `doc_email`, `diag_date`) VALUES 
(1, 'jethroadamzy@gmail.com', 'fever , sore throat, body rash, tiredness, muscle pain, swollen glands , chronic diarrhoea, weight loss, night sweats', 'HIV', 'If you', 'The best ways to prevent HIV are to take PrEP before exposure to HIV, use a condom for sex and to never share needles or other injecting equipment (including syringes, spoons and swabs)., Lubricant can make sex safer by reducing the risk of anal or vaginal tears caused by dryness or friction, and it can also prevent a condom from tearing. , A condom is the most effective form of protection against HIV and other STIs. It can be used for vaginal and anal sex, and for oral sex performed on men', 'adamzyjay@gmail.com', '2020-02-23 14:41:19'),
(2, 'jethroadamzy@gmail.com', 'High temperature, Headache, Nausea or vomiting, Muscle pain, Loss of appetite, Backache', 'YELLOW FEVER', 'vaccination against yellow fever should be given at least 10 days before travelling to an area where the infection is found, to allow your body to develop protection against the virus that causes the infection. Some countries require a proof of vaccination certificate before they will let you enter the country. This will only become valid 10 days after you are vaccinated. The yellow fever vaccination is given as a single injection and it offers protection to over 95% of those who have it.', 'by using mosquito nets,  applying insect repellent containing 50% DEET to exposed skin., wearing loose, long-sleeved clothing', 'adamzyjay@gmail.com', '2020-02-23 14:46:13');

-- --------------------------------------------------------

-- 
-- Table structure for table `diagnosis`
-- 

CREATE TABLE `diagnosis` (
  `id` int(200) NOT NULL auto_increment,
  `sname` longtext NOT NULL,
  `bsick` longtext NOT NULL,
  `symp` longtext NOT NULL,
  `dcause` longtext NOT NULL,
  `treat` longtext NOT NULL,
  `prev` longtext NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- 
-- Dumping data for table `diagnosis`
-- 

INSERT INTO `diagnosis` (`id`, `sname`, `bsick`, `symp`, `dcause`, `treat`, `prev`) VALUES 
(1, 'YELLOW FEVER', 'Yellow fever is a serious viral infection that is spread by certain types of mosquito. It’s mainly found in sub-Saharan Africa, South America and parts of the Caribbean.\r\nThe condition can be prevented with a vaccination and is a very rare cause of illness in travellers.\r\nThe virus that causes yellow fever is passed to humans through the bites of infected mosquitoes. The mosquitoes that spread the infection are usually active and bite during daylight hours, and are found in both urban and rural areas.', 'High temperature, Headache, Nausea or vomiting, Muscle pain, Loss of appetite, Backache', 'Bite from Mosquito', 'vaccination against yellow fever should be given at least 10 days before travelling to an area where the infection is found, to allow your body to develop protection against the virus that causes the infection. Some countries require a proof of vaccination certificate before they will let you enter the country. This will only become valid 10 days after you are vaccinated. The yellow fever vaccination is given as a single injection and it offers protection to over 95% of those who have it.', 'by using mosquito nets,  applying insect repellent containing 50% DEET to exposed skin., wearing loose, long-sleeved clothing'),
(2, 'Whooping cough', 'Whooping cough, also called pertussis, is a highly contagious bacterial infection of the lungs and airways.\r\nIt causes repeated coughing bouts that can last for two to three months or more, and can make babies and young children in particular very ill.\r\nWhooping cough is spread in the droplets of the coughs or sneezes of someone with the infection.\r\n', 'runny nose, red and watery eyes, slightly raised temperature', 'Exposing self to dust particles', 'Children under six months who are very ill and people with severe symptoms will usually be admitted to hospital for treatment.', 'Stay away from nursery, school or work until five days from the start of antibiotic treatment or three weeks after the coughing bouts started (whichever is sooner).'),
(3, 'Stroke ', 'A stroke is a serious, life-threatening medical condition that occurs when the blood supply to part of the brain is cut off.\r\nStrokes are a medical emergency and urgent treatment is essential. The sooner a person receives treatment for a stroke, the less damage is likely to happen.\r\n', 'the face may have dropped on one side, the person may not be able to smile or their mouth may have dropped, and their eyelid may droop, the person with suspected stroke may not be able to lift both arms and keep them there because of arm weakness or numbness in one arm, Speech – their speech may be slurred or garbled, or the person may not be able to talk at all despite appearing to be awake', 'when a blood clot blocks the flow of blood and oxygen to the brain', 'Treatment usually involves taking one or more different medications. Some people may also need surgery. It’s important to seek treatment as soon as possible to improve the chances of a good recovery.', 'eating a healthy diet, exercising regularly, drinking alcohol in moderation, not smoking'),
(4, 'Stomach ulcers', 'Stomach ulcers (gastric ulcers) are open sores that develop on the lining of the stomach. Ulcers can also occur in part of the intestine just beyond the stomach. These are called duodenal ulcers.\r\nStomach and duodenal ulcers are sometimes called peptic ulcers. This information applies to both.\r\n', 'Tummy pain, indigestion, heartburn, loss of appetite, weight loss', 'pylori bacteria, spicy foods, stress', 'This is also recommended if it''s thought your stomach ulcer''s caused by a combination of an H. pylori infection and non-steroidal anti-inflammatory drugs (NSAIDs)', 'Avoid eating spicy foods'),
(5, 'Tooth decay', 'Tooth decay can occur when acid is produced from plaque, which builds up on your teeth.\r\nIf plaque is allowed to build up, it can lead to further problems, such as dental caries (holes in the teeth), gum disease or dental abscesses, which are collections of pus at the end of the teeth or in the gums.\r\n', 'an unpleasant taste in your mouth, tenderness or pain when eating or drinking something hot, cold or sweet, grey, brown or black spots appearing on your teeth, bad breath', 'Eating sugary foods', '1. For early stage tooth decay – your dentist will talk to you about the amount of sugar in your diet and the times you eat. They may apply a fluoride gel, varnish or paste to the area. Fluoride helps to protect teeth by strengthening the enamel, making teeth more resistant to the acids from plaque that can cause tooth decay.', 'visit your dentist regularly – your dentist will decide how often they need to see you based on the condition of your mouth, teeth and gums, cut down on sugary and starchy food and drinks, particularly between meals or within an hour of going to bed – some medications can also contain sugar, so it''s best to look for sugar-free alternatives where possible'),
(6, 'Malaria ', 'Malaria is a serious tropical disease spread by mosquitoes. If it isn''t diagnosed and treated promptly, it can be fatal. A single mosquito bite is all it takes for someone to become infected.', 'high temperature , sweats and chills, headaches, vomiting, diarrhoea, chills', 'Malaria is caused by the Plasmodium parasite. The parasite can be spread to humans through the bites of infected mosquitoes. There are many different types of plasmodium parasite, but only five types cause malaria in humans.', 'Patient should be given arthemeter', 'Bite prevention – avoid mosquito bites by using insect repellent, covering your arms and legs, and using a mosquito net, Awareness of risk – find out whether you''re at risk of getting malaria, Check whether you need to take malaria prevention tablets – if you do, make sure you take the right antimalarial tablets at the right dose, and finish the course'),
(7, 'Kidney stones', 'Kidney stones can develop in one or both kidneys and most often affect people aged 30 to 60.\r\nThey''re quite common, with around three in 20 men and up to two in 20 women developing them at some stage of their lives.\r\nThe medical term for kidney stones is nephrolithiasis, and if they cause severe pain it''s known as renal colic.\r\n', 'severe pain in the abdomen, persistent ache in the lower back, feeling restless and unable to lie still, needing to urinate more often than normal, pain when you urinate', 'The waste products in the blood can occasionally form crystals that collect inside the kidneys', 'Larger stones may need to be broken up using ultrasound or laser energy. Occasionally, keyhole surgery may be needed to remove very large kidney stones directly.', 'To avoid getting kidney stones, make sure you drink plenty of water every day so you don''t become dehydrated. It''s very important to keep your urine diluted (clear) to prevent waste products forming into kidney stones.'),
(8, 'HIV', 'HIV is a long term health condition which is now very easy to manage. HIV stands for human immunodeficiency virus. The virus targets the immune system and if untreated, weakens your ability to fight infections and disease.\r\nNowadays, HIV treatment can stop the virus spreading and if used early enough, can reverse damage to the immune system.\r\n', 'fever , sore throat, body rash, tiredness, muscle pain, swollen glands , chronic diarrhoea, weight loss, night sweats', 'sharing needles, syringes and other injecting equipment, from mother to baby before or during birth when the mother isn''t taking HIV medication, from mother to baby by breastfeeding when the mother isn''t taking HIV medication, sharing sex toys with someone infected with HIV and who isn''t taking HIV medication (or by not using a fresh condom on sex toys for each person using it)', 'If you''re diagnosed with HIV, you''ll be referred to a specialist HIV clinic for treatment, regular monitoring and care.', 'The best ways to prevent HIV are to take PrEP before exposure to HIV, use a condom for sex and to never share needles or other injecting equipment (including syringes, spoons and swabs)., Lubricant can make sex safer by reducing the risk of anal or vaginal tears caused by dryness or friction, and it can also prevent a condom from tearing. , A condom is the most effective form of protection against HIV and other STIs. It can be used for vaginal and anal sex, and for oral sex performed on men'),
(9, 'Hepatitis A ', 'Hepatitis A is a liver infection caused by a virus that''s spread in the poo of an infected person.\r\nIt''s uncommon in the UK, but certain groups are at increased risk. This includes travellers to parts of the world with poor levels of sanitation, men who have sex with men, and people who inject drugs.\r\nHepatitis A can be unpleasant, but it''s not usually serious and most people make a full recovery within a couple of months.\r\n', 'feeling tired and generally unwell, joint and muscle pain, pain in the upper-right part of your tummy, constipation, mild fever, dark urine, yellowing of the skin and eyes , pale stools', 'Hepatitis A is caused by the hepatitis A virus, which is spread in the poo of someone with the infection., injecting drugs using equipment contaminated with the hepatitis A virus, having sex with someone who has the infection – particularly if you touch their rectum (back passage) with your fingers, mouth or tongue, eating raw or undercooked shellfish from contaminated water', 'There''s currently no cure for hepatitis A, but it will normally pass on its own within a couple of months. You can usually look after yourself at home. However, it''s still a good idea to see your GP for a blood test if you think you could have hepatitis A, as more serious conditions can have similar symptoms. Your GP can also advise you about treatments and they may carry out regular blood tests to check how well your liver is working. Go back to your GP if your symptoms get worse or haven''t started to improve within a couple of months.', 'Clean the toilet, flush handles and taps more frequently than usual, Avoid having sex while you''re infectious ');

-- --------------------------------------------------------

-- 
-- Table structure for table `doctor`
-- 

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gsm` varchar(20) NOT NULL,
  `pword` varchar(20) NOT NULL,
  `spec` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `doctor`
-- 

INSERT INTO `doctor` (`id`, `name`, `email`, `gsm`, `pword`, `spec`) VALUES 
(1, 'ADAMA JETHRO', 'adamzyjay@gmail.com', '090345786', '989810', 'General Physician'),
(2, 'Mathias James', 'mathyjay@gmail.com', '08075737687', '989810', 'Gynecologist/Obstetrician'),
(3, 'Samuel Gana', 'samjay@gmail.com', '08058684847', '9898', 'General Physician'),
(4, 'Chris Daman', 'cdy@gmail.com', '0908675475', 'admin', 'Dentist');

-- --------------------------------------------------------

-- 
-- Table structure for table `specialized`
-- 

CREATE TABLE `specialized` (
  `id` int(11) NOT NULL auto_increment,
  `specialization` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `specialized`
-- 

INSERT INTO `specialized` (`id`, `specialization`) VALUES 
(1, 'Gynecologist/Obstetrician'),
(2, 'General Physician'),
(3, 'Dermatologist'),
(4, 'Dentist'),
(6, 'Ear-Nose-Throat (Ent) Specialist');

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `fullName` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `state` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` (`id`, `fullName`, `address`, `state`, `gender`, `email`, `password`, `regDate`) VALUES 
(1, 'ADAMU', 'NO. 234. U/ZAWU GONIN GORA', 'Kaduna', 'MALE', 'jethroadamzy@gmail.com', '989810', '2020-02-21 10:34:57'),
(2, 'Isaac', 'behind nitel gadan marke jaji', 'Kaduna', 'MALE', 'isaacga@gmail.com', 'gaius', '2020-02-23 12:21:12'),
(3, 'Mathias Danjaji', 'No 34 River Close Damar', 'Ebonyi', 'MALE', 'mattyfd@gmail.com', '989810', '2020-02-23 12:23:26');
