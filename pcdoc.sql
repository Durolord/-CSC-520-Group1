-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2021 at 07:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcdoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `pageID` varchar(20) NOT NULL DEFAULT '',
  `pageFolder` varchar(30) NOT NULL DEFAULT '',
  `pageDesc` varchar(100) NOT NULL DEFAULT '',
  `pageTitle` varchar(50) NOT NULL DEFAULT '',
  `pageScript` varchar(20) NOT NULL DEFAULT '',
  `pgmenu` varchar(30) NOT NULL DEFAULT '',
  `filtermaster` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`pageID`, `pageFolder`, `pageDesc`, `pageTitle`, `pageScript`, `pgmenu`, `filtermaster`) VALUES
('loadquestions', 'include', 'Loads main questions related to a problem set.', 'Problem Diagnosis - Main', '', 'main', ''),
('memfail', 'memory', 'Memory Failure Questions', 'Memory Questions - Failure', 'memfailclips', 'main', ''),
('memfailclips', 'memory', 'Clips interface for memory fail problems', 'Memory Recommendations', '', 'main', ''),
('memnotrec', 'memory', 'Memory Not Recognized Questions', 'Memory Questions - Memory Not Recognized', 'memfailclips', 'main', ''),
('memout', 'memory', 'Memory Out of Memory Questions', 'Memory Questions - Out of Memory', 'memfailclips', 'main', ''),
('memparity', 'memory', 'Memory Parity Errors Questions', 'Memory Questions - Parity Errors', 'memfailclips', 'main', ''),
('memperform', 'memory', 'Memory Performance Problems Questions', 'Memory Questions - Performance Problems', 'memfailclips', 'main', ''),
('proccrash', 'processor', 'Processor Instability Questions', 'Processor Questions - Instability', 'procfailclips', 'main', ''),
('procfail', 'processor', 'Processor Failure Questions', 'Processor Questions - Failure', 'procfailclips', 'main', ''),
('procfailclips', 'processor', 'Clips Interface for proc fail problems', 'Processor Recommendations', '', 'main', ''),
('procheat', 'processor', 'Processor Overheating Questions', 'Processor Questions - Overheating', 'procfailclips', 'main', ''),
('procslow', 'processor', 'Processor Slowdown Questions', 'Processor Questions - Slowdowns', 'procfailclips', 'main', ''),
('procspeed', 'processor', 'Processor Incorrect Speed Questions', 'Processor Questions - Incorrect Speed', 'procfailclips', 'main', ''),
('psintdiagnosis', 'psupply', 'Interactive Diagnosis of Problems', 'Power Supply - Interactive Diagnosis', '', 'main', ''),
('selmain', '/', 'Allows users to select a problem set.', 'Problem Selection Main Page', '', 'main', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblproblems`
--

CREATE TABLE `tblproblems` (
  `probID` int(4) NOT NULL,
  `qid` varchar(10) NOT NULL DEFAULT '',
  `probDesc` varchar(20) NOT NULL DEFAULT '',
  `probresp` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblproblems`
--

INSERT INTO `tblproblems` (`probID`, `qid`, `probDesc`, `probresp`) VALUES
(1, 'proc01', 'upgraded', NULL),
(2, 'proc01', 'extraproc', NULL),
(3, 'proc01', 'insimproprly', NULL),
(4, 'proc01', 'bios', NULL),
(5, 'proc01', 'voltage', NULL),
(6, 'proc01', 'incompatible', NULL),
(7, 'proc01', 'seccache', NULL),
(8, 'proc02', 'errmessages', NULL),
(9, 'proc02', 'appfail', NULL),
(10, 'proc02', 'perproblem', NULL),
(11, 'proc02', 'vesa', NULL),
(12, 'proc02', 'lean', NULL),
(13, 'proc02', 'nbios', NULL),
(14, 'proc03', 'memory', NULL),
(15, 'proc03', 'lblink', NULL),
(17, 'mem01', 'dupmem', NULL),
(18, 'mem01', 'os', NULL),
(19, 'mem01', 'dust', NULL),
(20, 'mem01', 'simm', NULL),
(21, 'mem01', 'dimm', NULL),
(22, 'mem01', 'memmis', NULL),
(23, 'mem01', 'memold', NULL),
(24, 'mem01', 'restrict', NULL),
(25, 'mem01', 'hx', NULL),
(28, 'mem01', 'sdram', NULL),
(29, 'mem01', 'edo', NULL),
(30, 'mem01', 'diffmtype', NULL),
(31, 'mem01', 'specbios', NULL),
(33, 'mem01', 'mboard', NULL),
(34, 'mem01', 'metal', NULL),
(35, 'mem02', 'errboot', NULL),
(36, 'mem02', 'errbios', NULL),
(37, 'mem02', 'it5h', NULL),
(38, 'mem02', 'ecc', NULL),
(39, 'mem02', 'erraddr', NULL),
(40, 'mem02', 'addnewhd', NULL),
(42, 'mem03', 'bootup', NULL),
(43, 'mem03', 'notallrec', NULL),
(44, 'mem04', 'runprog', NULL),
(45, 'mem04', 'win', NULL),
(46, 'mem05', 'noimprov', NULL),
(47, 'mem05', 'worse', NULL),
(48, 'mem05', 'more256', NULL),
(49, 'mem05', 'slow', NULL),
(50, 'mem05', 'hx', NULL),
(51, 'mem02', 'paritydisabled', NULL),
(53, 'mem02', 'parityenabled', NULL),
(54, 'proc04', 'led', NULL),
(55, 'proc04', 'recbuy', NULL),
(56, 'proc04', 'offslightly', NULL),
(57, 'proc04', 'newchip', NULL),
(58, 'proc05', 'nocompound', NULL),
(59, 'proc05', 'fanworn', NULL),
(61, 'proc02', 'overheating', NULL),
(64, 'psup0101', 'livescreen', ''),
(65, 'psup0206', 'videofail', NULL),
(66, 'psup0102', 'bootsectry', ''),
(67, 'psup0207', 'pwronsignal', NULL),
(68, 'psup0103', 'beeps', NULL),
(69, 'psup0208', 'mboardfail', NULL),
(70, 'psup0104', 'newhdw', ''),
(71, 'psup0209', 'removeadd', ''),
(72, 'psup0105', 'drvspin', ''),
(74, 'psup0106', 'spinlead', NULL),
(76, 'psup0107', 'badadap', NULL),
(77, 'psup0212', 'stripdown', NULL),
(78, 'psup0108', 'pwrmboard', NULL),
(80, 'psup0201', 'pwrgood', ''),
(81, 'psup0215', 'liveoutlet', NULL),
(82, 'psup0202', 'voltset', NULL),
(83, 'psup0216', 'selvolt', NULL),
(84, 'psup0203', 'mboardlead', NULL),
(85, 'psup0217', 'connlead', NULL),
(86, 'psup0204', 'switchfail', NULL),
(87, 'psup0218', 'subswitch', NULL),
(88, 'psup0205', 'conncorrect', NULL),
(89, 'psup0211', 'deflead', NULL),
(90, 'psup0210', 'testpc', NULL),
(91, 'psup0213', 'shortcircuit', NULL),
(92, 'psup0214', 'replace', NULL),
(93, 'psup0219', 'remakeconn', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblquestions`
--

CREATE TABLE `tblquestions` (
  `qid` varchar(10) NOT NULL DEFAULT '',
  `qtype` varchar(20) NOT NULL DEFAULT '',
  `qdesc` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblquestions`
--

INSERT INTO `tblquestions` (`qid`, `qtype`, `qdesc`) VALUES
('mem01', 'Memory', 'Do you suspect a failure with the system memory?'),
('mem02', 'Memory', 'Are you having problems with parity errors?'),
('mem03', 'Memory', 'Is your memory not being recognized by the system?'),
('mem04', 'Memory', 'Are you getting errors indicating that you are out of memory and you think you really have enough?'),
('mem05', 'Memory', 'Do you notice problems related to the performance of your P.C. after adding more memory?'),
('proc01', 'Processor', 'Does the Processor appear to be dead, impossible to boot up, or not functioning properly?'),
('proc02', 'Processor', 'Is the system rebooting without warning, or seizing up?'),
('proc03', 'Processor', 'Is the processor running slowly?'),
('proc04', 'Processor', 'At boot time, is the system reporting an incorrect processor speed?'),
('proc05', 'Processor', 'Does it seem like the processor is overheating?');

-- --------------------------------------------------------

--
-- Table structure for table `tblrecommend`
--

CREATE TABLE `tblrecommend` (
  `probID` varchar(10) NOT NULL DEFAULT '',
  `recDesc` varchar(255) NOT NULL DEFAULT '',
  `recHead` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblrecommend`
--

INSERT INTO `tblrecommend` (`probID`, `recDesc`, `recHead`) VALUES
('1', 'There are a number problems related to new or newly assembled pc\'s:', 'Y'),
('1', 'Inspect the machine to ensure everything is in order. Many common pitfalls can occur after doing work on a new system.', 'N'),
('1', 'Check for Loose Connections or shorts.', 'N'),
('1', 'Make sure that the motherboard (with CPU, Memory, Video card, and hard drive) is connected to the Power Supply.', 'N'),
('1', 'Go through the BIOS settings and ensure that they are correct.', 'N'),
('1', 'Check the expansion cards especially for incorrect jumpers and settings.', 'N'),
('1', 'Check the Hard drives and ensure they are jumpered correctly', 'N'),
('1', 'Check the system for resource conflicts', 'N'),
('2', 'If you have an extra processor:', 'Y'),
('2', 'Try running a quick test by swapping the processor with the other one and see if the problem clears up.<BR>If it does, then put back the original processor and see if the problem returns.<BR>If it does, you can be certain that the processor is bad.', 'N'),
('3', 'If the processor is inserted improperly:', 'Y'),
('3', 'Try fitting it tightly into it\'s socket, so that it is not rotated.', 'N'),
('4', 'If you checked the BIOS settings and they are incorrect:', 'Y'),
('4', 'The jumpers may be set incorrectly.<BR>This may cause the processor to malfunction, as you may be accidentally overclocking it, or telling the motherboard that it is a different processor than it actually is.', 'N'),
('5', 'If the voltage is incorrect:', 'Y'),
('5', 'The standard 3.3 to 3.5 volts are required for most processors.<BR>They require split-rail or dual voltage. Ensure that this supported by your motherboard.', 'N'),
('6', 'If the processor is incompatible with your motherboard:', 'Y'),
('6', 'You may need a BIOS upgrade to use the chip.<BR>Contact the motherboard manufactuerer\'s technical support department and try to find out how you can get your motherboard to use it.', 'N'),
('6', 'Also if you are using an Intel motherboard, it may be very likely that you can only use an Intel processor with it. So bear that in mind.', 'N'),
('7', 'If disabling the secondary cache gets rid of the problem:', 'Y'),
('7', 'You may have a problem with your secondary cache', 'N'),
('8', 'If you are getting error messages:', 'Y'),
('8', 'Check your operating system manufactuerer for a listing of error messages and their meanings.', 'N'),
('9', 'If you are having a problem running a specific program:', 'Y'),
('9', 'The application itself may be causing the problem.', 'N'),
('10', 'If you notice the problem only occurs when a specific peripheral is used:', 'Y'),
('10', 'There may be a problem with the specific peripheral.', 'N'),
('10', 'There may be a resource conflict that is causing the system to lock up when you try to access two devices using the same resources.', 'N'),
('10', 'There may be a driver problem with the device, that is, if it is something that uses a driver in the operating system.', 'N'),
('11', 'If you are running a VESA card on a board that supports VESA and PCI:', 'Y'),
('11', 'This combination has been known to cause instability.', 'N'),
('11', 'Try replacing the VESA video card with a cheaper PCI card and see if the problem goes away.', 'N'),
('12', 'If you notice the problem whenever you lean on the box itself, or when you put the monitor on top of it:', 'Y'),
('12', 'If the problem occurs soon after booting, the weight of the monitor may be pushing down on the case and possibly causing some of the components inside the case to be bent, a cable to be pinched, or the motherboard to be shorted on the case.', 'N'),
('12', 'If your system uses a standard desktop case, do not put the monitor on top of it if the monitor is greater than 17 inch.<BR>if you are using a slimline case, you may not want to put anything over 15 inch on it.', 'N'),
('12', 'Also it may be possible that the extra pressure on the case is causing the system to heat up more than it would otherwise.', 'N'),
('12', 'If the problem is heating, try putting a separator between the case and the monitor.<BR />Make sure that the pressure of the monitor is spread out evenly.', 'N'),
('12', 'If the problem is pressure, try opening up the case and rearranging the cables and components, so that when the top cover flexes, nothing is affected.', 'N'),
('12', 'Simply rest the monitor on something other than the case.', 'N'),
('13', 'If you have recently changed the BIOS settings(especially those that control timing):', 'Y'),
('13', 'If you have noticed the problem since the time of the change, try setting it back to previous values or to low-risk defaults.<BR />Try setting the system to safe values.', 'N'),
('14', 'If you recently added more memory and you notice a slowdown:', 'Y'),
('14', 'It may be because your PC does not support caching of over a certain amount.<BR />Check the type of memory you installed and find out how much cache is required to support it.', 'N'),
('15', 'If the hard disk light is flickering when you load programs or the machine is telling you it does not have enough memory:', 'Y'),
('15', 'It is possible that your machine is thrashing.<BR />Try closing some of the programs, that should help.', 'N'),
('17', 'If you happen to have a duplicate set of memory modules available that are just like the ones you are trying to diagnose:', 'Y'),
('17', 'Try swapping the spare modules in to see if the problem goes away.<BR />If it does, put the original memory back in to see if the problem returns.<BR />If it returns, you can feel very confident that the original memory itself was bad.', 'N'),
('18', 'If you have just installed a new 32-bit operating system, where before you were just using DOS:', 'Y'),
('18', 'This may bring a memory problem to the surface.', 'N'),
('18', 'When this happens, the bad memory was probably there the whole time, but DOS is much more forgiving of bad memory than Windows 95, Windows NT or other 32-bit operating systems are.', 'N'),
('19', 'If you installed used memory, or installed into an older motherboard:', 'Y'),
('19', 'The problem may be dirt either on the modules or in the sockets.', 'N'),
('19', 'Try removing the modules and gently cleaning the contacts with a soft cloth.', 'N'),
('19', 'If the motherboard is in an existing system then it has had a chance to collect dust in the sockets.', 'N'),
('19', 'Clean the dust away using either compressed air or a PC vacuum.', 'N'),
('20', 'If you are using SIMMs:', 'Y'),
('20', 'Ensure that you have installed a full bank of memory.', 'N'),
('20', 'For a 486-class motherboard using 30-pin SIMMs, you must have 4 identical SIMM modules.', 'N'),
('20', 'For a Pentium-class motherboard using 72-pin SIMMs, you must have 2 identical SIMMs.', 'N'),
('20', 'Watch out for 16 MB non-parity SIMMs that have chips on both sides of the SIMM (parity SIMMs usually do).<BR />Some of these are actually a composite and they will not work properly in a system expecting non-composite 16MB SIMMs only.', 'N'),
('20', 'If it is a composite SIMM, ask for it to be replaced with non-composite versions.', 'N'),
('21', 'If your system uses DIMMs:', 'Y'),
('21', 'Make sure that you are using the right kind.', 'N'),
('21', 'DIMMs come in different voltages, and buffered and unbuffered versions.', 'N'),
('22', 'If you are using both DIMM and SIMM memory:', 'Y'),
('22', 'Many motherboards that support both DIMM and SIMM memory will malfunction if both are used on the board at once.', 'N'),
('22', 'This is because most DIMMs require 3.3 volt power, while SIMMs run at 5 volts.<BR /> When both are present, the DIMMs are fed 5 volts and problems can result.', 'N'),
('22', 'Try the system with only one type of memory.', 'N'),
('23', 'If you have an older motherboard, especially in a 486 or earlier system:', 'Y'),
('23', 'There is a chance that your motherboard requires jumpers to be set when adding memory to the PC.', 'N'),
('23', 'If this is the case then failing to change the jumpers may result in either the memory not being detected, or in incorrect operation.', 'N'),
('23', 'Also, older 386 and 486 motherboards use 30-pin SIMMs.', 'N'),
('23', 'These SIMMs generally come in two versions: 9-chip SIMMs or 3-chip SIMMs.', 'N'),
('23', 'The 9-chip version uses all the same DRAM chips, while the 3-chip version uses chips of different sizes.', 'N'),
('23', 'Some PCs do not work properly with the 3-chip SIMMs; you need to consult your motherboard manual or technical support for the system.', 'N'),
('24', 'If you are using 486 motherboard, Pentium, or later:', 'Y'),
('24', 'Some 486-class motherboards that have both 30-pin and 72-pin SIMM sockets have restrictions on the extent to which both can be used.', 'N'),
('24', 'Some Pentium and later motherboards that have both SIMM and DIMM sockets can also have restrictions.', 'N'),
('24', 'For example, you may only be able to use either one set of sockets or the other, or you may only be able to fill some of the sockets depending on what you are using.', 'N'),
('24', 'Consult your motherboard documentation for exact guidelines matching what you are using.', 'N'),
('25', 'If you are using a 430HX motherboard:', 'Y'),
('25', 'Some 430HX motherboards come with DIMM sockets.', 'N'),
('25', 'Most DIMM form factor memory is SDRAM, but SDRAM will not work in these boards because the 430HX chipset does not support it.', 'N'),
('25', 'These slots are intended for DIMM EDO memory.', 'N'),
('28', 'If you are using SDRAM:', 'Y'),
('28', 'Make sure you are using the right type.', 'N'),
('28', 'SDRAM comes in 2-clock and 4-clock varieties, and some motherboards require only one kind or the other.', 'N'),
('28', 'Some motherboards also require SDRAM that has the \"serial presence detect\" EEPROM on it.', 'N'),
('29', 'If we are using EDO memory:', 'Y'),
('29', 'Support for EDO memory is not found in 386 and earlier machines.', 'N'),
('29', '486 class machines fall into three categories: some will allow it and use it properly as EDO (these usually have a BIOS parameter to enable it); some will allow it to be used but will use it as regular FPM memory; and some will not work with it at all.', 'N'),
('30', 'If you are using different memory types:', 'Y'),
('30', 'Mismatches between different banks of memory can cause problems.', 'N'),
('30', 'For example, some systems only like when all the memory in the machine is identical, even in different banks.', 'N'),
('30', 'If you use memory that is of different speed or if one bank is using FPM and another EDO memory, your motherboard may not be happy.', 'N'),
('30', 'Many newer systems allow this with no problem, but some older ones do not.', 'N'),
('30', 'You may need to try changing around the memory configuration.', 'N'),
('30', 'Try to see if the machine works with either bank installed but not both together.<BR />If this is the case, then the two banks of memory are incompatible.', 'N'),
('29', 'Some motherboards will work with EDO memory installed, but only if EDO support is specifically enabled through a BIOS parameter.', 'N'),
('29', 'You may need to boot the system with regular fast-page mode memory to get into the BIOS setup, change the setting to EDO, and then shut the machine down and replace with the EDO memory.', 'N'),
('33', 'If the settings have been double-checked, the memory replaced, and the problem remains:', 'Y'),
('33', 'There could be a motherboard problem.', 'N'),
('33', 'There may be a bad motherboard or a problem with how it is configured.', 'N'),
('31', 'If you are trying to use more than 64 MB of memory:', 'Y'),
('31', 'Some systems require a special BIOS setting to be enabled when using more than 64 MB of memory.', 'N'),
('31', 'Check for one of these settings and enable it if necessary.', 'N'),
('34', 'If the memory modules being used in the PC do not use the same metal (either gold or tin) as the sockets they are in:', 'Y'),
('34', 'It is possible over time for a chemical reaction to develop that can lead to poor contact and eventually, memory problems.<BR />This will typically take months or even years to show up.', 'N'),
('34', 'If you suspect this problem, power down and unplug the PC and take out one memory module. <BR />. If its pins are gold and the socket is tin (a silvery color) or vice-versa, this may be the problem.', 'N'),
('34', 'Remove all the modules and clean them and the socket.', 'N'),
('35', 'If you receive a parity error when booting up:', 'Y'),
('35', 'Look on the screen to see if the system is giving you any sort of memory address that indicates where the parity error is occurring.', 'N'),
('35', 'Reboot the system and see if the same address comes up again, and then reboot a third time.', 'N'),
('35', 'Take note of whether or not the memory location changes.', 'N'),
('36', 'If the parity error occurs when the BIOS tries to boot, especially if it fails at memory address \'0000\' consistently:', 'Y'),
('36', 'This is a dead giveaway of trying to use non-parity memory in a parity system.', 'N'),
('36', 'Make sure that you have used real parity memory if you have parity checking enabled.', 'N'),
('37', 'If you are using a Abit IT5H motherboard:', 'Y'),
('37', 'I have encountered a defect in the Abit IT5H motherboard, version 1.5, which will cause it to fail when using parity memory--it just does not work in this board due to a design flaw.', 'N'),
('37', 'Every time parity is enabled a parity error is generated immediately at boot time. <BR />It is possible that other motherboards may have similar problems.', 'N'),
('37', 'The only solution is to replace the motherboard or run with parity checking disabled.', 'N'),
('38', 'If you are trying to run with ECC enabled on a motherboard that supports both parity and ECC:', 'Y'),
('38', 'Change the ECC/parity BIOS setting to straight parity and try to reboot.', 'N'),
('38', 'If the parity error goes away, and returns when ECC is re-enabled, the chances are high that you have false parity memory in your PC.', 'N'),
('38', 'False or \"logic\" parity memory is designed to fool the standard motherboard parity circuits but will not work if you set the machine to run with ECC.', 'N'),
('38', 'The only good solution is to replace the memory.', 'N'),
('39', 'If the parity error address remains the same or is in the same general vicinity each time it is encountered:', 'Y'),
('39', 'This implies a <a href=\'default.php?pid=memfail\'>failure of the memory</a> itself. <BR />Even in a new PC, it is possible to have an actual hardware failure.', 'N'),
('40', 'If you have just added any hardware to the system:', 'Y'),
('40', 'Check for resource conflicts.', 'N'),
('42', 'If the system boots up, and reports either 128 KB or 384 KB less memory than is in the system:', 'Y'),
('42', 'This is normal for many types of machines.', 'N'),
('42', 'The \"missing\" memory is the area of RAM between conventional memory and extended memory, called the upper memory area.<BR />It is not available for use by most standard programs, and therefore some BIOSes choose not to report it.', 'N'),
('42', 'No action is required.', 'N'),
('43', 'If not all of the memory that I have installed in the PC is being recognized:', 'Y'),
('43', 'This is almost always caused by using the wrong type of memory, incorrect installation, or incorrect configuration. <BR />Check for <a href=\'default.php?pid=memfail\'>general memory failures</a>.', 'N'),
('44', 'If you are running a program, but the system says it doesn\'t have enough memory to load, but you have know you have enough memory and it only needs a few KBs:', 'Y'),
('44', 'The problem is likely caused by insufficient conventional memory.', 'N'),
('44', 'The conventional memory area is the first 640 KB of system RAM, which is what the operating system uses when running standard programs.', 'N'),
('44', 'This is the most \"hotly contested\" memory real estate in the PC, and a program that needs more of it in most cases cannot use the megabytes of extended memory that are in your machine for this purpose.', 'N'),
('44', 'Increase the amount of available conventional memory.', 'N'),
('45', 'If you are running Windows and getting \'Out of Memory\' errors, yet the Program Manager says you have several megabytes free:', 'Y'),
('45', 'This should win an award as one of the most ridiculously misnamed error messages ever. <BR />Most times when you get an \'Out of Memory\' error you are really running out of Windows system resources, not actual memory.', 'N'),
('45', 'Close one or more programs to free up more system resources for the program you want to run.', 'N'),
('45', 'Exit Windows and restart it. Windows may \"leak\" system resources over time and may have to be rebooted frequently when heavily used.', 'N'),
('46', 'If you added more memory to the system but haven\'t seen any improvement in performance:', 'Y'),
('46', 'Make sure that all of the memory is being recognized in the system. If it isn\'t, then the upgrade isn\'t working properly.', 'N'),
('46', 'Beware of being misled by benchmarks. <BR /> Adding more memory will not improve the score of a benchmark that only tests the processor. For example, If possible, run an identical system benchmark before and after adding the new RAM.', 'N'),
('46', 'There should be some increase, even if it is minor.', 'N'),
('46', 'Check your BIOS settings related to memory to see if any of them need to be changed if you add memory or if you cross one of the common memory size \"borders\" .', 'N'),
('46', 'Often too, the problem is that the operating system you are using is not being set up optimally to manage its memory efficiently.<BR />If you increase the amount of memory in some systems, the operating system may allocate the extra memory poorly.', 'N'),
('47', 'If you added more memory and performance gets worst:', 'Y'),
('47', 'Make sure that all of the memory is being recognized in the system. <BR />If it isn\'t, then the upgrade isn\'t working properly.', 'N'),
('47', 'Double-check the setup of the new memory to make sure that it is configured correctly.', 'N'),
('47', 'Check the BIOS settings, because some BIOSes need settings changed when the memory size changes.', 'N'),
('48', 'If you have added enough memory to take you over a certain amount of RAM, say from 256 to 400:', 'Y'),
('48', 'Your problem may be that your secondary cache can only cache a certain amount of memory.', 'N'),
('48', 'Certain chipsets can only cache a certain amount of RAM. <BR />Any memory above that is uncached, and accesses to those memory locations will be much slower than accesses to memory below the barrier.', 'N'),
('48', 'There is nothing you can do unless you want to upgrade your motherboard.', 'N'),
('49', 'If you have added memory to the system that is slower in speed than what was there before (or uses a slower technology):', 'Y'),
('49', 'Then your motherboard may slow down all memory accesses to match the speed of the slower memory, especially if it sets memory timing by autodetecting the memory speed.', 'N'),
('49', 'This will cause a small performance decrease. <BR />You may be able to change BIOS settings to get around this.', 'N'),
('50', 'If you are using an Intel Triton II 430HX motherboard and your PC still slows down with more than 64 MB RAM:', 'Y'),
('50', 'Check the motherboard and manual to figure out whether your board has the 11-bit tag RAM that is required for 512 MB of cached RAM.', 'N'),
('50', 'If you do have the tag RAM, then there is either a problem with the components, or something is misconfigured.', 'N'),
('50', 'Check for other Memory or Motherboard problems.', 'N'),
('51', 'If you are or were running with parity checking disabled:', 'Y'),
('51', 'Double-check the BIOS setting to make sure that it is still set as disabled.', 'N'),
('51', 'If it is enabled accidentally, parity errors will result.', 'N'),
('53', 'If you are or were running with parity checking enabled:', 'Y'),
('53', 'Disable parity checking in the BIOS, having it enabled will cause parity errors.', 'N'),
('44', 'Also it may be a problem with the program itself. Some software are not developed to handle memory resources well, and this may lead to the program needing more memory resources than it really should.<br />Contact the Program Developers if you can.', 'N'),
('44', 'If it is a Windows program, it may need a dll file installed. Try reinstalling the program and ensure that all dll files are installed and registered properly.', 'N'),
('54', 'If in considering the misreported speed, you are referring to the LED speed readout on the front of the case:', 'Y'),
('54', 'Know that this readout has nothing to do with the processor at all. Therefore do not be misinformed by it.', 'N'),
('55', 'If this system was recently purchased:', 'Y'),
('55', 'Contact the vendor immediately. Remember these are not necessarily new systems and may need some tune up.', 'N'),
('56', 'If the reported speed of the processor is off slightly (say a 2GHZ being reported as a 1.8GHZ):', 'Y'),
('56', 'This is probably just a quirk; don\'t worry too much about it.', 'N'),
('57', 'If you are using a newer chip:', 'Y'),
('57', 'You may need a BIOS upgrade, especially if the chip was not on the market when your motherboard was designed.', 'N'),
('57', 'Contact your motherboard vendor. Tell them about the chip you have and find out if you may need a BIOS upgrade.', 'N'),
('58', 'If you do not have heat sink compound between the processor and the heat sink:', 'Y'),
('58', 'The heat sink won\'t be able to do a good job of cooling the CPU. Get some!...and apply it right away.', 'N'),
('59', 'If CPU fan is dirty, looking worn, or close to failure:', 'Y'),
('59', 'Give it a good cleaning.', 'N'),
('59', 'Bear in mind though, that if it is close to failure, try replacing it with a good quality ball bearing fan.', 'N'),
('61', 'If the problem occurs when the system is warming up or when the room is hot:', 'Y'),
('61', 'It is likely that the problem is hardware-related and probably something to do with the motherboard, processor or another system component that is running too hot.', 'N'),
('61', 'Check problems related to <a href=\'#\'>general overheating</a> or <a href=\'default.php?pid=procheat\'>processor overheating</a>.', 'N'),
('64', '<p class=\'\'>Do you get a Live screen?<br/><input type=\'checkbox\' name=\'chkLiveScrYes\' value=\'yes\'  enabled /><label>Yes</label><input type=\'checkbox\' name=\'chkLiveScrNo\' value=\'no\'  enabled /><label>No</label><p>', 'N'),
('80', '<p class=\'\'>Are you using a good power source?<br/><input type=\'checkbox\' name=\'chkPwrGoodYes\' value=\'yes\' enabled /><label>Yes</label><input type=\'checkbox\' name=\'chkPwrGoodNo\' value=\'no\' enabled /><label>No</label><p>', 'N'),
('66', '<p class=\'\'>Try booting it a few times, Does it boot on the 2nd or 3rd try?<br/><input type=\'checkbox\' name=\'chkBootTryYes\' value=\'yes\'  enabled /><label>Yes</label><input type=\'checkbox\' name=\'chkBootTryNo\' value=\'no\'  enabled /><label>No</label><p>', 'N'),
('65', '<b>Diagnosis:</b><br />It is probably a video failure. If you are getting messages such as \"No video signal detected\" or \"Please connect the monitor\" this is definately the problem. The video adapter may be providing signals that cannot be interpreted.', 'N'),
('68', '<p class=\'\'>Do you hear any unusual beeps?<br/><input type=\'checkbox\' name=\'chkBeepYes\' value=\'yes\'  enabled /><label>Yes</label><input type=\'checkbox\' name=\'chkBeepNo\' value=\'no\'  enabled /><label>No</label><p>', ''),
('67', '<b>Diagnosis:</b><br />If it boots on other tries it is probably suffering from a quick power_good signal, coming before the power supply is stable. It\'s possible that your p-supply isn\'t up to the ATX standard. Try buying a higher quality power supply.', 'N'),
('70', '<p class=\'\'>Have you installed any new hardware?<br/><input type=\'checkbox\' name=\'chkNewHdwYes\' value=\'yes\'  enabled /><label>Yes</label><input type=\'checkbox\' name=\'chkNewHdwNo\' value=\'no\'  enabled /><label>No</label><p>', 'N'),
('69', '<b>Diagnosis:</b><br />Irregular Beep codes often indicate a failure with other components in the system, i.e. RAM, CPU, video system. Thus the problem is likely to be unrelated to the power supply. Instead check for Processor, Memory, or other problems.', 'N'),
('72', '<p class=\'\'>Do you hear the hard drive motor spin the drive (like a quiet jet)?<br/><input type=\'checkbox\' name=\'chkDrvSpinYes\' value=\'yes\'  enabled /><label>Yes</label><input type=\'checkbox\' name=\'chkDrvSpinNo\' value=\'no\'  enabled /><label>No</label><p>', 'N'),
('71', '<b>Diagnosis:</b><br />If you recently  added new components to the system, they may be overtaxing the p-supply or causing a short circuit. Try undoing the last change you made and retry. Try testing and replacing your p-supply as well.', 'N'),
('74', '<p class=\'\'>Is the power lead properly seated in the drive power socket?<br/><input type=\'checkbox\' name=\'chkSpinLeadYes\' value=\'yes\'  enabled /><label>Yes</label><input type=\'checkbox\' name=\'chkSpinLeadNo\' value=\'no\'  enabled /><label>No</label><p>', 'N'),
('76', '<p class=\'\'>Do you suspect a bad adapter?<br/><input type=\'checkbox\' name=\'chkBadAdapYes\' value=\'yes\'  enabled /><label>Yes</label><input type=\'checkbox\' name=\'chkBadAdapNo\' value=\'no\'  enabled /><label>No</label><p>', 'N'),
('89', '<b>Diagnosis:</b><br />It\'s highly possible that you have a defective power supply lead or connector. Try another lead or disconnect all the drives, one at a time and try powering up after each change. If the system powers, it\'s a faulty lead or drive.', 'N'),
('90', '<b>Diagnosis:</b><br />Try using another drive, to test the possibility that the previous drive may have been bad. Also you can test the drive in another system.', 'N'),
('77', '<b>Diagnosis:</b><br />Strip the system down, removing adapters, one by one, until only the video adapter is left. Unplug the power cord before removing them, then reconnect and power up. If it powers, replace all adapters except the last one.', 'N'),
('78', '<p class=\'\'>Try powering it on a bench rather than in a case, does it power?<br/><input type=\'checkbox\' name=\'chkBenchYes\' value=\'yes\'  enabled /><label>Yes</label><input type=\'checkbox\' name=\'chkBenchNo\' value=\'no\'  enabled /><label>No</label><p>', 'N'),
('91', '<b>Diagnosis:</b><br />Either you have a short circuit (notice a burnt smell) in the case, or a geometry problem placing unacceptable stress on the motherboard. It is also possible that the video adapter was never seated due to the bracket position.', 'N'),
('92', '<b>Diagnosis:</b><br />You probably have a defective power supply. Try replacing it.', 'N'),
('82', '<p class=\'\'>Is the voltage set to 110/120v on the power supply?<br/><input type=\'checkbox\' name=\'chkVoltSetYes\' value=\'yes\'  enabled /><label>Yes</label><input type=\'checkbox\' name=\'chkVoltSetNo\' value=\'no\'  enabled /><label>No</label><p>', 'N'),
('81', '<b>Diagnosis:</b><br />Ensure that you are using a live outlet. Power strips have been known to have at least one bad outlet, and power outlets that seem to be good have been known to fail for no particular reason.', 'N'),
('84', '<p class=\'\'>Is the motherboard\'s power switch lead connected?<br/><input type=\'checkbox\' name=\'chkMboardLeadYes\' value=\'yes\'  enabled /><label>Yes</label><input type=\'checkbox\' name=\'chkMboardLeadNo\' value=\'no\'  enabled /><label>No</label><p>', 'N'),
('83', '<b>Diagnosis:</b><br />Use the small red switch located on the p-supply, usually between  the power cord and the on/off override switch at the back of the case, to adjust the voltage to a suitable level. Unplug the p-supply while doing this.', 'N'),
('86', '<p class=\'\'>Do you suspect a failure with the power switch?<br/><input type=\'checkbox\' name=\'chkSwitchFailYes\' value=\'yes\'  enabled /><label>Yes</label><input type=\'checkbox\' name=\'chkSwitchFailNo\' value=\'no\'  enabled /><label>No</label><p>', 'N'),
('85', '<b>Diagnosis:</b><br />Try to connect the lead from the front panel switch. The proper location is usually printed on the motherboard next to the connector block, or you can consult the motherboard documentation.', 'N'),
('88', '<p class=\'\'>Are the power supply connections to the motherboard correct?<br/><input type=\'checkbox\' name=\'chkConnCorrectYes\' value=\'yes\'  enabled /><label>Yes</label><input type=\'checkbox\' name=\'chkConnCorrectNo\' value=\'no\'  enabled /><label>No</label><p>', 'N'),
('87', '<b>Diagnosis:</b><br />Check the switch operation with a Digital Volt Meter on the continuity or resistance setting. If it is bad, replace the switch or substitute it with the reset button. You can get away with using it for the PW-ON logic switch.', 'N'),
('93', '<b>Diagnosis:</b><br />You can try to remake the motherboard\'s power supply connections, though this is not advisable if you are not experienced at working around live circuitry, as this option involves live testing.', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`pageID`);

--
-- Indexes for table `tblproblems`
--
ALTER TABLE `tblproblems`
  ADD PRIMARY KEY (`probID`);

--
-- Indexes for table `tblquestions`
--
ALTER TABLE `tblquestions`
  ADD PRIMARY KEY (`qid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproblems`
--
ALTER TABLE `tblproblems`
  MODIFY `probID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
