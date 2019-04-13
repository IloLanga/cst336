
--
-- Database: `midterm`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_question`
--

CREATE TABLE `m_question` (
  `questionId` tinyint(4) NOT NULL,
  `questionText` varchar(500) NOT NULL,
  `questionImage` varchar(500) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `choice1` varchar(25) NOT NULL,
  `choice2` varchar(25) NOT NULL,
  `choice3` varchar(25) NOT NULL,
  `choice4` varchar(25) NOT NULL,
  `feedback` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_question`
--

INSERT INTO `m_question` (`questionId`, `questionText`, `questionImage`, `answer`, `choice1`, `choice2`, `choice3`, `choice4`, `feedback`) VALUES
(1, 'In what year was the US Constitution written?', 'constitution.png', '1787', '1787', '1774', '1779', '1789', 'Correct! It was written and signed in 1787.'),
(2, 'What\'s the capital of Illinois?', 'illinois.jpg', 'Springfield', 'Rockford', 'Peoria', 'Springfield', 'Chicago', 'That\'s right! The Capital is Springfield!'),
(3, 'What\'s the longest US River?', 'river.png', 'Missouri', 'Mississippi', 'Colorado', 'Missouri', 'Rio Grande', 'Yes, the Missouri River is the longest US river!'),
(4, 'Who was the first US Secretary of the Treasury?', 'treasury.png', 'A. Hamilton', 'T. Roosevelt', 'A. Hamilton', 'B. Franklin', 'G. Washington', 'Right! It was Alexander Hamilton!'),
(5, 'What\'s the biggest US State?', 'us_map.png', 'Texas', 'Alaska', 'Nevada', 'New Mexico', 'Texas', 'Yes, Texas is the biggest state.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_question`
--
ALTER TABLE `m_question`
  ADD PRIMARY KEY (`questionId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_question`
--
ALTER TABLE `m_question`
  MODIFY `questionId` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;



--
-- Table structure for table `m_hint`
--

CREATE TABLE `m_hint` (
  `hintId` tinyint(4) NOT NULL,
  `questionId` tinyint(4) NOT NULL,
  `hint` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_hint`
--

INSERT INTO `m_hint` (`hintId`, `questionId`, `hint`) VALUES
(1, 1, 'It was written more than a decade after US Independence'),
(2, 2, 'The Simpsons live in a city with the same name!\r\n'),
(3, 3, 'It starts with the letter \"M\" and ends with \"i\"\r\n'),
(4, 4, 'His portrait is in the ten-dollar bill'),
(5, 5, 'Its name derives from a word that means \"friends\"\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_hint`
--
ALTER TABLE `m_hint`
  ADD PRIMARY KEY (`hintId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_hint`
--
ALTER TABLE `m_hint`
  MODIFY `hintId` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
