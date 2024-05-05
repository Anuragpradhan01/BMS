-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 31, 2024 at 04:16 AM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u957918675_bulk_mailer`
--

-- --------------------------------------------------------

--
-- Table structure for table `Campaigns`
--

CREATE TABLE `Campaigns` (
  `df_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `from_mail` varchar(255) NOT NULL,
  `from_name` varchar(255) NOT NULL,
  `from_company_name` varchar(100) DEFAULT NULL,
  `from_company_campaign_name` text NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`content`)),
  `selected_lists` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'draft',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Campaigns`
--

INSERT INTO `Campaigns` (`df_id`, `user_id`, `subject`, `from_mail`, `from_name`, `from_company_name`, `from_company_campaign_name`, `content`, `selected_lists`, `status`, `created_at`) VALUES
(1, 1, 'This is a test email', 'crm@itmonkinc.com', 'Mohit sethi', '', '', '\"                        <h3>Every conebt hee<\\/h3>\\n                        \"', '{\"lists_array\":[\"32\"]}', 'draft', '2024-01-21 23:43:05'),
(2, 1, 'Hi man', 'crm@itmonkinc.com', 'pyare mohan', '', '', '\"                        <h3>Type your content here...<\\/h3>\\n                        \"', '{\"lists_array\":[\"32\"]}', 'draft', '2024-01-22 05:04:41'),
(3, 1, 'uuu', 'crm@itmonkinc.com', 'uuu', '', '', '\"                        <h3>Type your content here...<\\/h3>\\n                        \"', '{\"lists_array\":[\"32\"]}', 'draft', '2024-01-22 06:13:37'),
(4, 1, 'uuu', 'crm@itmonkinc.com', 'uuu', '', '', '\"                        <h3>Type your content here...<\\/h3>\\n                        \"', '{\"lists_array\":[\"32\"]}', 'draft', '2024-01-22 06:13:59'),
(5, 1, 'uuu', 'crm@itmonkinc.com', 'uuu', '', '', '\"                        <h3>Type your content here...<\\/h3>\\n                        \"', '{\"lists_array\":[\"32\"]}', 'draft', '2024-01-22 06:14:10'),
(6, 1, 'uuu', 'crm@itmonkinc.com', 'uuu', '', '', '\"                        <h3>Type your content here...<\\/h3>\\n                        \"', '{\"lists_array\":[\"32\"]}', 'draft', '2024-01-22 06:15:57'),
(7, 1, 'uuu', 'crm@itmonkinc.com', 'uuu', '', '', '\"                        <h3>Type your content here...<\\/h3>\\n                        \"', '{\"lists_array\":[\"32\"]}', 'draft', '2024-01-22 06:16:26'),
(8, 1, 'uuu', 'crm@itmonkinc.com', 'uuu', '', '', '\"                        <h3>Type your content here...<\\/h3>\\n                        \"', '{\"lists_array\":[\"32\"]}', 'draft', '2024-01-22 06:18:43'),
(9, 1, 'uuu', 'crm@itmonkinc.com', 'uuu', '', '', '\"                        <h3>Type your content here...<\\/h3>\\n                        \"', '{\"lists_array\":[\"32\"]}', 'draft', '2024-01-22 06:19:20'),
(10, 1, 'uuu', 'crm@itmonkinc.com', 'uuu', '', '', '\"                        <h3>Type your content here...<\\/h3>\\n                        \"', '{\"lists_array\":[\"32\"]}', 'draft', '2024-01-22 06:20:44'),
(11, 1, 'uuu', 'crm@itmonkinc.com', 'uuu', '', '', '\"                        <h3>Type your content here...<\\/h3>\\n                        \"', '{\"lists_array\":[\"32\"]}', 'draft', '2024-01-22 06:25:56'),
(12, 1, 'uuu', 'crm@itmonkinc.com', 'uuu', '', '', '\"                        <h3>Type your content here...<\\/h3>\\n                        \"', '{\"lists_array\":[\"32\"]}', 'draft', '2024-01-22 06:29:24'),
(13, 1, 'uuu', 'crm@itmonkinc.com', 'uuu', '', '', '\"                        <h3>Type your content here...<\\/h3>\\n                        \"', '{\"lists_array\":[\"32\"]}', 'draft', '2024-01-22 06:32:07'),
(14, 1, 'uuu', 'crm@itmonkinc.com', 'uuu', '', '', '\"                        <h3>Type your content here...<\\/h3>\\n                        \"', '{\"lists_array\":[\"32\"]}', 'draft', '2024-01-22 06:34:38'),
(15, 1, 'uuu', 'crm@itmonkinc.com', 'uuu', '', '', '\"                        <h3>Type your content here...<\\/h3>\\n                        \"', '{\"lists_array\":[\"32\"]}', 'draft', '2024-01-22 06:36:10'),
(16, 1, 'uuu', 'crm@itmonkinc.com', 'uuu', '', '', '\"                        <h3>Type your content here...<\\/h3>\\n                        \"', '{\"lists_array\":[\"32\"]}', 'draft', '2024-01-22 06:36:47'),
(17, 1, 'uuu', 'crm@itmonkinc.com', 'uuu', '', '', '\"                        <h3>Type your content here...<\\/h3>\\n                        \"', '{\"lists_array\":[\"32\"]}', 'draft', '2024-01-22 06:37:45'),
(18, 1, 'New game arrived', 'crm@itmonkinc.com', 'codelone', '', '', '\"                        <h3>[0] =&gt; Array<\\/h3><h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (<\\/h3><h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; [Email] =&gt; codelone.storage02@gmail.com<\\/h3><h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; [MessageUUID] =&gt; e945c749-99a8-45fb-aecb-9dbb8558444f<\\/h3><h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; [MessageID] =&gt; 1152921526475204554<\\/h3><h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; [MessageHref] =&gt; https:\\/\\/api.mailjet.com\\/v3\\/REST\\/message\\/1152921526475204554<\\/h3><h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; )<\\/h3>\\n                        \"', '{\"lists_array\":[\"32\"]}', 'draft', '2024-01-22 06:40:28'),
(19, 1, 'Test Message from developer not spam', 'info@itmonkinc.com', 'Testing team', '', '', '\"                        <h3>Test Message from developer not spam<\\/h3>\\n                        \"', '{\"lists_array\":[\"35\"]}', 'draft', '2024-01-25 06:42:15'),
(20, 1, 'Test Message from developer not spam', 'info@itmonkinc.com', 'Testing team', '', '', '\"                        <h3>Test Message from developer not spam<\\/h3>\\n                        \"', '{\"lists_array\":[\"35\"]}', 'draft', '2024-01-25 06:42:26'),
(21, 1, 'Test Message from developer not spam', 'info@itmonkinc.com', 'Testing team', '', '', '\"                        <h3>Test Message from developer not spam<\\/h3>\\n                        \"', '{\"lists_array\":[\"35\"]}', 'draft', '2024-01-25 06:42:44'),
(22, 1, 'Testing email', 'info@itmonkinc.com', 'Test team', '', '', '\"                        <h3>This is just a test<\\/h3>\\n                        \"', '{\"lists_array\":[\"44\"]}', 'draft', '2024-01-25 07:33:11'),
(23, 1, 'Testing email', 'info@itmonkinc.com', 'Test team', '', '', '\"                        <h3>This is just a test<\\/h3>\\n                        \"', '{\"lists_array\":[\"44\"]}', 'draft', '2024-01-25 07:55:19'),
(24, 1, 'Test Message from developer not spam', 'info@itmonkinc.com', 'testing team', '', '', '\"                        <h3>Test Message from developer not spam<\\/h3>\\n                        \"', '{\"lists_array\":[\"44\"]}', 'draft', '2024-01-25 08:15:29'),
(25, 1, 'Test Message from developer not spam', 'info@itmonkinc.com', 'testing team', '', '', '\"                        <h3>Test Message from developer not spam<\\/h3>\\n                        \"', '{\"lists_array\":[\"44\"]}', 'draft', '2024-01-25 08:16:07'),
(26, 1, 'Test Message from developer not spam', 'info@itmonkinc.com', 'testing team', '', '', '\"                        <h3>Test Message from developer not spam<\\/h3>\\n                        \"', '{\"lists_array\":[\"44\"]}', 'draft', '2024-01-25 08:18:25'),
(27, 1, 'Test Message from developer not spam', 'info@itmonkinc.com', 'testing team', '', '', '\"                        <h3>Test Message from developer not spam<\\/h3>\\n                        \"', '{\"lists_array\":[\"44\"]}', 'draft', '2024-01-25 08:19:39'),
(28, 1, 'Test Message from developer not spam', 'info@itmonkinc.com', 'testing team', '', '', '\"                        <h3>Test Message from developer not spam<\\/h3>\\n                        \"', '{\"lists_array\":[\"44\"]}', 'draft', '2024-01-25 08:20:29'),
(29, 1, 'Test Message from developer not spam', 'info@itmonkinc.com', 'testing team', '', '', '\"                        <h3>Test Message from developer not spam<\\/h3>\\n                        \"', '{\"lists_array\":[\"44\"]}', 'draft', '2024-01-25 08:21:44'),
(30, 1, 'Test Message from developer not spam', 'info@itmonkinc.com', 'testing team', '', '', '\"                        <h3>Test Message from developer not spam<\\/h3>\\n                        \"', '{\"lists_array\":[\"44\"]}', 'draft', '2024-01-25 08:22:29'),
(31, 1, 'Test Message from developer not spam', 'info@itmonkinc.com', 'testing team', '', '', '\"                        <h3>Test Message from developer not spam<\\/h3>\\n                        \"', '{\"lists_array\":[\"44\"]}', 'draft', '2024-01-25 08:22:59'),
(32, 1, 'Test Message from developer not spam', 'info@itmonkinc.com', 'testing team', '', '', '\"                        <h3>Test Message from developer not spam<\\/h3>\\n                        \"', '{\"lists_array\":[\"44\"]}', 'draft', '2024-01-25 08:23:49'),
(33, 1, 'Test mail from developer not a spam', 'info@itmonkinc.com', 'Testing team', '', '', '\"                        <h3>Test mail from developer not a spam<\\/h3>\\n                        \"', '{\"lists_array\":[\"44\"]}', 'draft', '2024-01-25 08:42:32'),
(34, 1, 'Test email not spam', 'info@itmonkinc.com', 'Testing Team', '', '', '\"                        <h3>Test email not spam<\\/h3>\\n                        \"', '{\"lists_array\":[\"44\"]}', 'draft', '2024-01-28 00:18:52'),
(35, 1, 'Test email not spam', 'info@itmonkinc.com', 'Testing Team', '', '', '\"                        <h3>Test email not spam<\\/h3>\\n                        \"', '{\"lists_array\":[\"44\"]}', 'draft', '2024-01-28 00:21:32'),
(36, 1, 'This is not a spam its a test email', 'info@itmonkinc.com', 'This is not a spam its a test email', '', '', '\"                        <h3>This is not a spam its a test email<\\/h3>\\n                        \"', '{\"lists_array\":[\"44\"]}', 'draft', '2024-01-28 00:55:58'),
(37, 1, 'Test email not a spam', 'info@itmonkinc.com', 'Testing team', '', '', '\"                        <h3>Test email not a spam<\\/h3>\\n                        \"', '{\"lists_array\":[\"44\"]}', 'draft', '2024-01-28 01:15:55'),
(38, 1, 'Test email not a spam', 'info@itmonkinc.com', 'Test team', '', '', '\"                        <h3>Test email not a spam<\\/h3>\\n                        \"', '{\"lists_array\":[]}', 'draft', '2024-01-28 01:58:27'),
(39, 1, 'Test email not a spam', 'info@itmonkinc.com', 'Test team', '', '', '\"                        <h3>Test email not a spam<\\/h3>\\n                        \"', '{\"lists_array\":[\"44\"]}', 'draft', '2024-01-28 02:03:21'),
(40, 1, 'Test email not a spam', 'info@itmonkinc.com', 'Test team', 'Itmonk', 'Test email not a spam', '\"                        <h3>Test email not a spam<\\/h3>\\n                        \"', '{\"lists_array\":[\"44\"]}', 'draft', '2024-01-28 02:34:01'),
(41, 1, 'Test mail not a spam', 'info@itmonkinc.com', 'Test team', 'Itmonk', '', '\"                        <h3>Test mail not a spam<\\/h3>\\n                        \"', '{\"lists_array\":[\"44\",\"47\"]}', 'draft', '2024-01-28 02:41:31'),
(42, 1, 'Test message from codelone', 'info@itmonkinc.com', 'Codelone Team', 'Itmonk', 'The Horde webmail application has been removed in cPanel &amp; WHM version 108. All Horde email, contacts, and calendars will be automatically migrated to Roundcube', '\"                        <h3>This is just a test message<\\/h3>\\n                        \"', '{\"lists_array\":[\"44\"]}', 'draft', '2024-01-28 04:31:01'),
(43, 1, 'IT MONK Inc Hotlist', 'info@itmonkinc.com', 'Naresh', 'Itmonk', 'Hotlist', '\"                        <h3><p style=\\\"margin: 0cm 0cm 8pt; line-height: 24pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family:&quot;Calibri&quot;,sans-serif;\\ncolor:black\\\">Good day!!!&nbsp;<\\/span><span style=\\\"font-size:11.0pt;font-family:\\n&quot;Calibri&quot;,sans-serif;color:#222222\\\">&nbsp;<\\/span><span style=\\\"font-family:&quot;Calibri&quot;,sans-serif;\\ncolor:#222222\\\"><o:p><\\/o:p><\\/span><\\/p>\\n\\n<p style=\\\"margin: 0cm 0cm 8pt; line-height: 24pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family:&quot;Calibri&quot;,sans-serif;\\ncolor:black\\\">I\\u2019m Kumar,&nbsp;<\\/span><span style=\\\"font-size:11.0pt;font-family:\\n&quot;Calibri&quot;,sans-serif;color:#222222\\\">&nbsp;<\\/span><span style=\\\"font-family:&quot;Calibri&quot;,sans-serif;\\ncolor:#222222\\\"><o:p><\\/o:p><\\/span><\\/p>\\n\\n<p style=\\\"margin: 0cm 0cm 8pt; line-height: 24pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family:&quot;Calibri&quot;,sans-serif;\\ncolor:black\\\">I have excellent Resources available for your client\\u2019s needs;\\nplease share suitable contract C2C opportunities for my candidates. Following\\nis the Hotlist of available excellent bench candidates for new positions.\\nKindly add me to your distribution list and keep me posted on your C2C\\nRequirements.&nbsp;<\\/span><span style=\\\"font-size:11.0pt;font-family:&quot;Calibri&quot;,sans-serif;\\ncolor:#222222\\\">&nbsp;<\\/span><span style=\\\"font-family:&quot;Calibri&quot;,sans-serif;\\ncolor:#222222\\\"><o:p><\\/o:p><\\/span><\\/p>\\n\\n<p style=\\\"margin: 0cm 0cm 8pt; line-height: 24pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family:&quot;Calibri&quot;,sans-serif;\\ncolor:black\\\">Feel free to reach me 404-800-062<\\/span><span style=\\\"font-family:\\n&quot;Calibri&quot;,sans-serif;color:#222222\\\"><o:p><\\/o:p><\\/span><\\/p>\\n\\n<p class=\\\"MsoNormal\\\"><o:p>&nbsp;<\\/o:p><\\/p>\\n\\n<table class=\\\"MsoTableGrid\\\" border=\\\"1\\\" cellspacing=\\\"0\\\" cellpadding=\\\"0\\\" width=\\\"648\\\" style=\\\"width: 486pt; border: none;\\\">\\n <tbody><tr style=\\\"mso-yfti-irow:0;mso-yfti-firstrow:yes;height:34.5pt\\\">\\n  <td width=\\\"98\\\" valign=\\\"top\\\" style=\\\"width:73.3pt;border:solid windowtext 1.0pt;\\n  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\"><span style=\\\"font-size:16.0pt;color:#ED7D31;mso-themecolor:accent2\\\">Name<o:p><\\/o:p><\\/span><\\/p>\\n  <\\/td>\\n  <td width=\\\"121\\\" valign=\\\"top\\\" style=\\\"width:90.6pt;border:solid windowtext 1.0pt;\\n  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\\n  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\"><span style=\\\"font-size:16.0pt;color:#ED7D31;mso-themecolor:accent2\\\">Technology<o:p><\\/o:p><\\/span><\\/p>\\n  <\\/td>\\n  <td width=\\\"118\\\" valign=\\\"top\\\" style=\\\"width:88.75pt;border:solid windowtext 1.0pt;\\n  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\\n  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\"><span style=\\\"font-size:16.0pt;color:#ED7D31;mso-themecolor:accent2\\\">Experience<o:p><\\/o:p><\\/span><\\/p>\\n  <\\/td>\\n  <td width=\\\"104\\\" valign=\\\"top\\\" style=\\\"width:78.2pt;border:solid windowtext 1.0pt;\\n  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\\n  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\"><span style=\\\"font-size:16.0pt;color:#ED7D31;mso-themecolor:accent2\\\">Location<o:p><\\/o:p><\\/span><\\/p>\\n  <\\/td>\\n  <td width=\\\"93\\\" valign=\\\"top\\\" style=\\\"width:69.75pt;border:solid windowtext 1.0pt;\\n  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\\n  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\"><span style=\\\"font-size:16.0pt;color:#ED7D31;mso-themecolor:accent2\\\">Visa<o:p><\\/o:p><\\/span><\\/p>\\n  <\\/td>\\n  <td width=\\\"114\\\" valign=\\\"top\\\" style=\\\"width:85.4pt;border:solid windowtext 1.0pt;\\n  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\\n  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\"><span style=\\\"font-size:16.0pt;color:#ED7D31;mso-themecolor:accent2\\\">Relocation<o:p><\\/o:p><\\/span><\\/p>\\n  <\\/td>\\n <\\/tr>\\n <tr style=\\\"mso-yfti-irow:1;mso-yfti-lastrow:yes;height:34.5pt\\\">\\n  <td width=\\\"98\\\" valign=\\\"top\\\" style=\\\"width:73.3pt;border:solid windowtext 1.0pt;\\n  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\\n  padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\">Yasmeen\\n  Akthar<o:p><\\/o:p><\\/p>\\n  <\\/td>\\n  <td width=\\\"121\\\" valign=\\\"top\\\" style=\\\"width:90.6pt;border-top:none;border-left:\\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\\n  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\">Java Support\\n  Professional<o:p><\\/o:p><\\/p>\\n  <\\/td>\\n  <td width=\\\"118\\\" valign=\\\"top\\\" style=\\\"width:88.75pt;border-top:none;border-left:\\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\\n  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\"><b><span lang=\\\"EN-US\\\">12<\\/span><\\/b><span lang=\\\"EN-US\\\"> years<\\/span><o:p><\\/o:p><\\/p>\\n  <\\/td>\\n  <td width=\\\"104\\\" valign=\\\"top\\\" style=\\\"width:78.2pt;border-top:none;border-left:\\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\\n  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\"><b>Austin, TX<\\/b><o:p><\\/o:p><\\/p>\\n  <\\/td>\\n  <td width=\\\"93\\\" valign=\\\"top\\\" style=\\\"width:69.75pt;border-top:none;border-left:\\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\\n  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\"><span style=\\\"font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#1A1A1A\\\">H1B<\\/span><o:p><\\/o:p><\\/p>\\n  <\\/td>\\n  <td width=\\\"114\\\" valign=\\\"top\\\" style=\\\"width:85.4pt;border-top:none;border-left:\\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\\n  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\">Remote<o:p><\\/o:p><\\/p>\\n  <\\/td>\\n <\\/tr>\\n<\\/tbody><\\/table>\\n\\n<p class=\\\"MsoNormal\\\"><o:p>&nbsp;<\\/o:p><\\/p>\\n\\n<p class=\\\"MsoNormal\\\"><o:p>&nbsp;<\\/o:p><\\/p>\\n\\n<p class=\\\"MsoNormal\\\"><o:p>&nbsp;<\\/o:p><\\/p>\\n\\n<p class=\\\"MsoNormal\\\">------<o:p><\\/o:p><\\/p>\\n\\n<p style=\\\"margin: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><b><span lang=\\\"EN-US\\\" style=\\\"font-family:\\n&quot;Aptos&quot;,sans-serif;color:black;mso-ansi-language:EN-US\\\">Thanks &amp; Regards,<o:p><\\/o:p><\\/span><\\/b><\\/p>\\n\\n<p style=\\\"margin: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family:&quot;Aptos&quot;,sans-serif;\\ncolor:black\\\">&nbsp;<\\/span><\\/p>\\n\\n<p style=\\\"margin: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><b><span lang=\\\"EN-US\\\" style=\\\"font-family:\\n&quot;Aptos&quot;,sans-serif;color:black;mso-ansi-language:EN-US\\\">Kumar,<\\/span><\\/b><span style=\\\"font-family:&quot;Aptos&quot;,sans-serif;color:black\\\"><o:p><\\/o:p><\\/span><\\/p>\\n\\n<p style=\\\"margin: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><b><span lang=\\\"EN-US\\\" style=\\\"font-family:\\n&quot;Aptos&quot;,sans-serif;color:black;mso-ansi-language:EN-US\\\">Sr. Bench Sales\\nRecruiter,<\\/span><\\/b><span style=\\\"font-family:&quot;Aptos&quot;,sans-serif;color:black\\\"><o:p><\\/o:p><\\/span><\\/p>\\n\\n<p style=\\\"margin: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><b><span style=\\\"color: rgb(46, 117, 182); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\">404-800-0062<\\/span><\\/b><b><span lang=\\\"EN-US\\\" style=\\\"font-family:\\n&quot;Aptos&quot;,sans-serif;color:black;mso-ansi-language:EN-US\\\"><o:p><\\/o:p><\\/span><\\/b><\\/p><\\/h3>\\n                        \"', '{\"lists_array\":[\"70\"]}', 'draft', '2024-01-31 16:07:35'),
(44, 1, 'IT MONK Inc Hotlist', 'info@itmonkinc.com', 'Naresh', 'Itmonk', 'Hotlist', '\"                        <h3><p style=\\\"margin: 0cm 0cm 8pt; line-height: 24pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family:&quot;Calibri&quot;,sans-serif;\\ncolor:black\\\">Good day!!!&nbsp;<\\/span><span style=\\\"font-size:11.0pt;font-family:\\n&quot;Calibri&quot;,sans-serif;color:#222222\\\">&nbsp;<\\/span><span style=\\\"font-family:&quot;Calibri&quot;,sans-serif;\\ncolor:#222222\\\"><o:p><\\/o:p><\\/span><\\/p>\\n\\n<p style=\\\"margin: 0cm 0cm 8pt; line-height: 24pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family:&quot;Calibri&quot;,sans-serif;\\ncolor:black\\\">I\\u2019m Kumar,&nbsp;<\\/span><span style=\\\"font-size:11.0pt;font-family:\\n&quot;Calibri&quot;,sans-serif;color:#222222\\\">&nbsp;<\\/span><span style=\\\"font-family:&quot;Calibri&quot;,sans-serif;\\ncolor:#222222\\\"><o:p><\\/o:p><\\/span><\\/p>\\n\\n<p style=\\\"margin: 0cm 0cm 8pt; line-height: 24pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family:&quot;Calibri&quot;,sans-serif;\\ncolor:black\\\">I have excellent Resources available for your client\\u2019s needs;\\nplease share suitable contract C2C opportunities for my candidates. Following\\nis the Hotlist of available excellent bench candidates for new positions.\\nKindly add me to your distribution list and keep me posted on your C2C\\nRequirements.&nbsp;<\\/span><span style=\\\"font-size:11.0pt;font-family:&quot;Calibri&quot;,sans-serif;\\ncolor:#222222\\\">&nbsp;<\\/span><span style=\\\"font-family:&quot;Calibri&quot;,sans-serif;\\ncolor:#222222\\\"><o:p><\\/o:p><\\/span><\\/p>\\n\\n<p style=\\\"margin: 0cm 0cm 8pt; line-height: 24pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family:&quot;Calibri&quot;,sans-serif;\\ncolor:black\\\">Feel free to reach me 404-800-062<\\/span><span style=\\\"font-family:\\n&quot;Calibri&quot;,sans-serif;color:#222222\\\"><o:p><\\/o:p><\\/span><\\/p>\\n\\n<p class=\\\"MsoNormal\\\"><o:p>&nbsp;<\\/o:p><\\/p>\\n\\n<table class=\\\"MsoTableGrid\\\" border=\\\"1\\\" cellspacing=\\\"0\\\" cellpadding=\\\"0\\\" width=\\\"648\\\" style=\\\"width: 486pt; border: none;\\\">\\n <tbody><tr style=\\\"mso-yfti-irow:0;mso-yfti-firstrow:yes;height:34.5pt\\\">\\n  <td width=\\\"98\\\" valign=\\\"top\\\" style=\\\"width:73.3pt;border:solid windowtext 1.0pt;\\n  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\"><span style=\\\"font-size:16.0pt;color:#ED7D31;mso-themecolor:accent2\\\">Name<o:p><\\/o:p><\\/span><\\/p>\\n  <\\/td>\\n  <td width=\\\"121\\\" valign=\\\"top\\\" style=\\\"width:90.6pt;border:solid windowtext 1.0pt;\\n  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\\n  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\"><span style=\\\"font-size:16.0pt;color:#ED7D31;mso-themecolor:accent2\\\">Technology<o:p><\\/o:p><\\/span><\\/p>\\n  <\\/td>\\n  <td width=\\\"118\\\" valign=\\\"top\\\" style=\\\"width:88.75pt;border:solid windowtext 1.0pt;\\n  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\\n  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\"><span style=\\\"font-size:16.0pt;color:#ED7D31;mso-themecolor:accent2\\\">Experience<o:p><\\/o:p><\\/span><\\/p>\\n  <\\/td>\\n  <td width=\\\"104\\\" valign=\\\"top\\\" style=\\\"width:78.2pt;border:solid windowtext 1.0pt;\\n  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\\n  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\"><span style=\\\"font-size:16.0pt;color:#ED7D31;mso-themecolor:accent2\\\">Location<o:p><\\/o:p><\\/span><\\/p>\\n  <\\/td>\\n  <td width=\\\"93\\\" valign=\\\"top\\\" style=\\\"width:69.75pt;border:solid windowtext 1.0pt;\\n  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\\n  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\"><span style=\\\"font-size:16.0pt;color:#ED7D31;mso-themecolor:accent2\\\">Visa<o:p><\\/o:p><\\/span><\\/p>\\n  <\\/td>\\n  <td width=\\\"114\\\" valign=\\\"top\\\" style=\\\"width:85.4pt;border:solid windowtext 1.0pt;\\n  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\\n  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\"><span style=\\\"font-size:16.0pt;color:#ED7D31;mso-themecolor:accent2\\\">Relocation<o:p><\\/o:p><\\/span><\\/p>\\n  <\\/td>\\n <\\/tr>\\n <tr style=\\\"mso-yfti-irow:1;mso-yfti-lastrow:yes;height:34.5pt\\\">\\n  <td width=\\\"98\\\" valign=\\\"top\\\" style=\\\"width:73.3pt;border:solid windowtext 1.0pt;\\n  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\\n  padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\">Yasmeen\\n  Akthar<o:p><\\/o:p><\\/p>\\n  <\\/td>\\n  <td width=\\\"121\\\" valign=\\\"top\\\" style=\\\"width:90.6pt;border-top:none;border-left:\\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\\n  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\">Java Support\\n  Professional<o:p><\\/o:p><\\/p>\\n  <\\/td>\\n  <td width=\\\"118\\\" valign=\\\"top\\\" style=\\\"width:88.75pt;border-top:none;border-left:\\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\\n  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\"><b><span lang=\\\"EN-US\\\">12<\\/span><\\/b><span lang=\\\"EN-US\\\"> years<\\/span><o:p><\\/o:p><\\/p>\\n  <\\/td>\\n  <td width=\\\"104\\\" valign=\\\"top\\\" style=\\\"width:78.2pt;border-top:none;border-left:\\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\\n  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\"><b>Austin, TX<\\/b><o:p><\\/o:p><\\/p>\\n  <\\/td>\\n  <td width=\\\"93\\\" valign=\\\"top\\\" style=\\\"width:69.75pt;border-top:none;border-left:\\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\\n  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\"><span style=\\\"font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#1A1A1A\\\">H1B<\\/span><o:p><\\/o:p><\\/p>\\n  <\\/td>\\n  <td width=\\\"114\\\" valign=\\\"top\\\" style=\\\"width:85.4pt;border-top:none;border-left:\\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\\n  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt\\\">\\n  <p class=\\\"MsoNormal\\\" style=\\\"margin-bottom:0cm;line-height:normal\\\">Remote<o:p><\\/o:p><\\/p>\\n  <\\/td>\\n <\\/tr>\\n<\\/tbody><\\/table>\\n\\n<p class=\\\"MsoNormal\\\"><o:p>&nbsp;<\\/o:p><\\/p>\\n\\n<p class=\\\"MsoNormal\\\"><o:p>&nbsp;<\\/o:p><\\/p>\\n\\n<p class=\\\"MsoNormal\\\"><o:p>&nbsp;<\\/o:p><\\/p>\\n\\n<p class=\\\"MsoNormal\\\">------<o:p><\\/o:p><\\/p>\\n\\n<p style=\\\"margin: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><b><span lang=\\\"EN-US\\\" style=\\\"font-family:\\n&quot;Aptos&quot;,sans-serif;color:black;mso-ansi-language:EN-US\\\">Thanks &amp; Regards,<o:p><\\/o:p><\\/span><\\/b><\\/p>\\n\\n<p style=\\\"margin: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family:&quot;Aptos&quot;,sans-serif;\\ncolor:black\\\">&nbsp;<\\/span><\\/p>\\n\\n<p style=\\\"margin: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><b><span lang=\\\"EN-US\\\" style=\\\"font-family:\\n&quot;Aptos&quot;,sans-serif;color:black;mso-ansi-language:EN-US\\\">Kumar,<\\/span><\\/b><span style=\\\"font-family:&quot;Aptos&quot;,sans-serif;color:black\\\"><o:p><\\/o:p><\\/span><\\/p>\\n\\n<p style=\\\"margin: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><b><span lang=\\\"EN-US\\\" style=\\\"font-family:\\n&quot;Aptos&quot;,sans-serif;color:black;mso-ansi-language:EN-US\\\">Sr. Bench Sales\\nRecruiter,<\\/span><\\/b><span style=\\\"font-family:&quot;Aptos&quot;,sans-serif;color:black\\\"><o:p><\\/o:p><\\/span><\\/p>\\n\\n<p style=\\\"margin: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><b><span style=\\\"color: rgb(46, 117, 182); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\">404-800-0062<\\/span><\\/b><b><span lang=\\\"EN-US\\\" style=\\\"font-family:\\n&quot;Aptos&quot;,sans-serif;color:black;mso-ansi-language:EN-US\\\"><o:p><\\/o:p><\\/span><\\/b><\\/p><\\/h3>\\n                        \"', '{\"lists_array\":[\"70\"]}', 'draft', '2024-01-31 16:08:06'),
(45, 2, 'kkk', 'info@itmonkinc.com', 'nnn', 'Itmonk', 'kk', '\"                        <h3>Type your content here...<\\/h3>\\n                        \"', '{\"lists_array\":[\"71\"]}', 'draft', '2024-03-31 03:55:11'),
(46, 2, 'kkk', 'info@itmonkinc.com', 'nnn', 'Itmonk', 'kk', '\"                        <h3>Type your content here...<\\/h3>\\n                        \"', '{\"lists_array\":[\"71\"]}', 'draft', '2024-03-31 04:06:40');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `c_id` int(11) NOT NULL,
  `list_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_update_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`c_id`, `list_id`, `user_id`, `name`, `email`, `created_at`, `last_update_at`) VALUES
(65, 70, 1, NULL, 'crm@itmonkinc.com', '2024-01-31 11:02:58', NULL),
(66, 70, 1, NULL, 'info@larchsolutions.com', '2024-01-31 11:02:58', NULL),
(67, 71, 2, NULL, 'aa2@gm.com', '2024-03-30 23:53:42', NULL),
(63, 44, 1, NULL, 'testing@codelone.com', '2024-01-25 02:32:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lists`
--

CREATE TABLE `lists` (
  `list_id` int(11) NOT NULL,
  `lc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `list_desc` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_update_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lists`
--

INSERT INTO `lists` (`list_id`, `lc_id`, `user_id`, `name`, `list_desc`, `create_at`, `last_update_at`) VALUES
(71, 1, 2, 'kk', 'kk', '2024-03-30 23:53:22', NULL),
(70, 1, 1, 'IT MONK Inc', 'IT MONK Inc', '2024-01-31 11:02:23', NULL),
(44, 1, 1, 'Tech Gadgets Wishlist', 'List of tech gadgets to buy in the future.', '2023-12-21 14:00:00', NULL),
(45, 2, 1, 'Art Supplies', 'List of art supplies for the upcoming project.', '2023-12-21 15:00:00', NULL),
(46, 3, 1, 'Gardening Tools', 'List of tools needed for the garden.', '2023-12-21 16:00:00', NULL),
(47, 1, 1, 'Study Materials', 'List of materials for upcoming exams.', '2023-12-21 17:00:00', NULL),
(48, 2, 1, 'Financial Goals', 'List of financial goals for the year.', '2023-12-21 18:00:00', NULL),
(49, 1, 1, 'Vacation Spots', 'List of vacation spots for the next holiday.', '2023-12-21 19:00:00', NULL),
(50, 1, 1, 'Pet Supplies', 'List of supplies needed for the pet.', '2023-12-21 20:00:00', NULL),
(51, 2, 1, 'DIY Projects', 'List of DIY projects to undertake.', '2023-12-21 21:00:00', NULL),
(52, 3, 1, 'Health and Fitness', 'List of health goals and fitness routines.', '2023-12-21 22:00:00', NULL),
(53, 1, 1, 'Photography Gear', 'List of photography equipment to purchase.', '2023-12-21 23:00:00', NULL),
(54, 2, 1, 'Family Activities', 'List of activities for family bonding.', '2023-12-22 00:00:00', NULL),
(55, 3, 1, 'Restaurant Bucket List', 'List of restaurants to try out.', '2023-12-22 01:00:00', NULL),
(56, 1, 1, 'Fashion Trends', 'List of fashion trends to explore.', '2023-12-22 02:00:00', NULL),
(57, 2, 1, 'Eco-friendly Products', 'List of eco-friendly products to purchase.', '2023-12-22 03:00:00', NULL),
(58, 3, 1, 'Learning New Languages', 'List of languages to learn.', '2023-12-22 04:00:00', NULL);

--
-- Triggers `lists`
--
DELIMITER $$
CREATE TRIGGER `delete_contacts_after_lists_delete` AFTER DELETE ON `lists` FOR EACH ROW BEGIN
    DELETE FROM contacts WHERE list_id = OLD.list_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `list_category`
--

CREATE TABLE `list_category` (
  `lc_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `list_category`
--

INSERT INTO `list_category` (`lc_id`, `name`) VALUES
(1, 'Requirements'),
(2, 'Hot-List / Bench Candidates');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `type`) VALUES
(1, 'admin'),
(2, 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'john@example.com', '7C4A8D09CA3762AF61E59520943DC26494F8941B', 2, 1, '2023-12-17 20:05:19', '2023-12-28 04:35:22'),
(2, 'Adminstartor', 'admin@admin.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1, '2023-12-17 23:17:32', '2023-12-17 23:17:32');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `SubscriptionPlan` int(11) DEFAULT NULL,
  `LastPaidOn` date DEFAULT NULL,
  `ExpirationDate` date DEFAULT NULL,
  `CompanyName` varchar(255) DEFAULT NULL,
  `Web` varchar(255) DEFAULT NULL,
  `WorkEmail` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `SubscriptionPlan`, `LastPaidOn`, `ExpirationDate`, `CompanyName`, `Web`, `WorkEmail`) VALUES
(1, 1, 1, '2023-12-20', '2023-12-31', 'Larch solutions', 'larchsol.com', 'info@larchsol.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Campaigns`
--
ALTER TABLE `Campaigns`
  ADD PRIMARY KEY (`df_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `lists`
--
ALTER TABLE `lists`
  ADD PRIMARY KEY (`list_id`);

--
-- Indexes for table `list_category`
--
ALTER TABLE `list_category`
  ADD PRIMARY KEY (`lc_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Campaigns`
--
ALTER TABLE `Campaigns`
  MODIFY `df_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `lists`
--
ALTER TABLE `lists`
  MODIFY `list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `list_category`
--
ALTER TABLE `list_category`
  MODIFY `lc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
