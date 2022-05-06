
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Host: `localhost`
-- Database Name: `id18887859_project`
-- Database Password: `[46L7sjAxW44!LxK`
-- Database Username: `id18887859_root`


-- Table structure for table `adminlogin`

CREATE TABLE `adminlogin` (
  `sn` int(4) NOT NULL,
  `adminfirstname` varchar(35) NOT NULL,
  `adminlastname` varchar(25) NOT NULL,
  `adminid` varchar(35) NOT NULL,
  `contact` varchar(14) NOT NULL,
  `fulladdress` varchar(45) NOT NULL,
  `adminpassword` varchar(20) NOT NULL,
  `password2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `adminlogin` (`sn`, `adminfirstname`, `adminlastname`, `adminid`, `contact`, `fulladdress`, `adminpassword`, `password2`) VALUES
(1, 'Shiva', 'Thapa', 'example@gmail.com', '+9779843805352', 'Syangja, Nepal', 'example@password', 'example@password');


-- Table structure for table `delivery23`

CREATE TABLE `delivery23` (
  `SN` int(4) NOT NULL,
  `customerid` varchar(35) NOT NULL,
  `deliverytype` varchar(25) NOT NULL,
  `deliverylocation` varchar(45) NOT NULL,
  `deliverydate` date NOT NULL,
  `deliverytime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Table structure for table `feedback24`

CREATE TABLE `feedback24` (
  `sn` int(4) NOT NULL,
  `emailid` varchar(35) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Table structure for table `forgetpassword52`

CREATE TABLE `forgetpassword52` (
  `SN` int(4) NOT NULL,
  `firstname` varchar(35) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `emailid` varchar(35) NOT NULL,
  `contact` varchar(14) NOT NULL,
  `fulladdress` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Table structure for table `loginpage5`

CREATE TABLE `loginpage5` (
  `SN` int(4) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Table structure for table `ordermanufacturer`

CREATE TABLE `ordermanufacturer` (
  `sn` int(4) NOT NULL,
  `customerid` varchar(35) NOT NULL,
  `country` varchar(20) NOT NULL,
  `manufacturerid` varchar(10) NOT NULL,
  `automobiletype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Table structure for table `orderpage21`

CREATE TABLE `orderpage21` (
  `sn` int(4) NOT NULL,
  `model` varchar(35) NOT NULL,
  `chassis` varchar(25) NOT NULL,
  `engine` varchar(35) NOT NULL,
  `transmission` varchar(45) NOT NULL,
  `customerid` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Table structure for table `orderpage22`

CREATE TABLE `orderpage22` (
  `sn` int(4) NOT NULL,
  `customerid` varchar(35) NOT NULL,
  `electricalengine` varchar(45) NOT NULL,
  `thermalengine` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Table structure for table `paymentdetails`

CREATE TABLE `paymentdetails` (
  `sn` int(4) NOT NULL,
  `customerid` varchar(35) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `email` varchar(35) NOT NULL,
  `aadress` varchar(45) NOT NULL,
  `city` varchar(35) NOT NULL,
  `sstate` varchar(35) NOT NULL,
  `zip` varchar(9) NOT NULL,
  `cname` varchar(35) NOT NULL,
  `ccnum` varchar(19) NOT NULL,
  `expmonth` varchar(13) NOT NULL,
  `expyear` date NOT NULL,
  `cvv` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Table structure for table `signuppage51`

CREATE TABLE `signuppage51` (
  `s_no` int(4) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `contact` varchar(14) NOT NULL,
  `fulladdress` varchar(45) NOT NULL,
  `password` varchar(20) NOT NULL,
  `password2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Indexes for table `adminlogin`

ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`adminid`),
  ADD UNIQUE KEY `SN` (`sn`);


-- Indexes for table `delivery23`

ALTER TABLE `delivery23`
  ADD PRIMARY KEY (`customerid`),
  ADD UNIQUE KEY `SN` (`SN`);


-- Indexes for table `feedback24`

ALTER TABLE `feedback24`
  ADD PRIMARY KEY (`emailid`),
  ADD UNIQUE KEY `SN` (`sn`);


-- Indexes for table `forgetpassword52`

ALTER TABLE `forgetpassword52`
  ADD PRIMARY KEY (`emailid`),
  ADD UNIQUE KEY `SN` (`SN`);


-- Indexes for table `loginpage5`

ALTER TABLE `loginpage5`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `SN` (`SN`);


-- Indexes for table `ordermanufacturer`

ALTER TABLE `ordermanufacturer`
  ADD PRIMARY KEY (`customerid`),
  ADD UNIQUE KEY `SN` (`sn`);


-- Indexes for table `orderpage21`

ALTER TABLE `orderpage21`
  ADD PRIMARY KEY (`customerid`),
  ADD UNIQUE KEY `SN` (`sn`);


-- Indexes for table `orderpage22`

ALTER TABLE `orderpage22`
  ADD PRIMARY KEY (`customerid`),
  ADD UNIQUE KEY `SN` (`sn`);


-- Indexes for table `paymentdetails`

ALTER TABLE `paymentdetails`
  ADD PRIMARY KEY (`customerid`,`email`),
  ADD UNIQUE KEY `SN` (`sn`);


-- Indexes for table `signuppage51`

ALTER TABLE `signuppage51`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `1` (`s_no`);




-- AUTO_INCREMENT for table `adminlogin`

ALTER TABLE `adminlogin`
  MODIFY `sn` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


-- AUTO_INCREMENT for table `delivery23`

ALTER TABLE `delivery23`
  MODIFY `SN` int(4) NOT NULL AUTO_INCREMENT;


-- AUTO_INCREMENT for table `feedback24`

ALTER TABLE `feedback24`
  MODIFY `sn` int(4) NOT NULL AUTO_INCREMENT;


-- AUTO_INCREMENT for table `forgetpassword52`

ALTER TABLE `forgetpassword52`
  MODIFY `SN` int(4) NOT NULL AUTO_INCREMENT;


-- AUTO_INCREMENT for table `loginpage5`

ALTER TABLE `loginpage5`
  MODIFY `SN` int(4) NOT NULL AUTO_INCREMENT;


-- AUTO_INCREMENT for table `ordermanufacturer`

ALTER TABLE `ordermanufacturer`
  MODIFY `sn` int(4) NOT NULL AUTO_INCREMENT;


-- AUTO_INCREMENT for table `orderpage21`

ALTER TABLE `orderpage21`
  MODIFY `sn` int(4) NOT NULL AUTO_INCREMENT;


-- AUTO_INCREMENT for table `orderpage22`

ALTER TABLE `orderpage22`
  MODIFY `sn` int(4) NOT NULL AUTO_INCREMENT;


-- AUTO_INCREMENT for table `paymentdetails`

ALTER TABLE `paymentdetails`
  MODIFY `sn` int(4) NOT NULL AUTO_INCREMENT;


-- AUTO_INCREMENT for table `signuppage51`

ALTER TABLE `signuppage51`
  MODIFY `s_no` int(4) NOT NULL AUTO_INCREMENT;



-- Constraints for table `delivery23`

ALTER TABLE `delivery23`
  ADD CONSTRAINT `delivery23_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `orderpage22` (`customerid`) ON DELETE CASCADE ON UPDATE CASCADE;


-- Constraints for table `feedback24`

ALTER TABLE `feedback24`
  ADD CONSTRAINT `feedback24_ibfk_1` FOREIGN KEY (`emailid`) REFERENCES `paymentdetails` (`customerid`) ON DELETE CASCADE ON UPDATE CASCADE;


-- Constraints for table `forgetpassword52`

ALTER TABLE `forgetpassword52`
  ADD CONSTRAINT `forgetpassword52_ibfk_1` FOREIGN KEY (`emailid`) REFERENCES `signuppage51` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;


-- Constraints for table `loginpage5`

ALTER TABLE `loginpage5`
  ADD CONSTRAINT `loginpage5_ibfk_1` FOREIGN KEY (`username`) REFERENCES `signuppage51` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;


-- Constraints for table `ordermanufacturer`

ALTER TABLE `ordermanufacturer`
  ADD CONSTRAINT `ordermanufacturer_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `signuppage51` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;


-- Constraints for table `orderpage21`

ALTER TABLE `orderpage21`
  ADD CONSTRAINT `orderpage21_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `ordermanufacturer` (`customerid`) ON DELETE CASCADE ON UPDATE CASCADE;


-- Constraints for table `orderpage22`

ALTER TABLE `orderpage22`
  ADD CONSTRAINT `orderpage22_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `orderpage21` (`customerid`) ON DELETE CASCADE ON UPDATE CASCADE;


-- Constraints for table `paymentdetails`

ALTER TABLE `paymentdetails`
  ADD CONSTRAINT `paymentdetails_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `delivery23` (`customerid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

