SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpform`
--

-- --------------------------------------------------------

--
-- Table structure for table `formdata`
--

CREATE TABLE `formdata` (
  `s.no.` int(16) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `about` text NOT NULL,
  `receiptno.` int(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formdata`
--

INSERT INTO `formdata` (`s.no.`, `name`, `email`, `dob`, `about`, `receiptno.`, `date`) VALUES

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formdata`
--
ALTER TABLE `formdata`
  ADD PRIMARY KEY (`s.no.`),
  ADD UNIQUE KEY `receiptno.` (`receiptno.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formdata`
--
ALTER TABLE `formdata`
  MODIFY `s.no.` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
