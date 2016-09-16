
--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('335791ff3b206eae617f2cfb599f614facf87f4ed4eef12c7292fd95e57308d465045b55549adf1f', 14, 4, NULL, '["*"]', 0, '2016-09-06 10:12:36', '2016-09-06 10:12:36', '2016-09-21 13:12:36'),
('5a48366d381c81624f9567244579806c987f636bb19da48a352370a497496da0ab71dbb450c7d24b', 4, 4, NULL, '["*"]', 0, '2016-09-06 05:20:03', '2016-09-06 05:20:03', '2016-09-21 08:20:03'),
('5edb205dc4dc9868820fc45815bf574664ace71d179f46af7c15f832d4ed9fcc2e1bc14a5b4e0682', 14, 4, NULL, '["*"]', 1, '2016-09-06 10:11:27', '2016-09-06 10:11:27', '2016-09-21 13:11:27'),
('6d55296584149e21289e908cce54dc984678a696ab096a060a7d32d028a103d498fae2ae561aaea9', 2, 4, NULL, '["*"]', 0, '2016-09-05 08:30:45', '2016-09-05 08:30:45', '2016-09-20 11:30:45'),
('9193fa5c850021201049a3b15221b330865e4cb405e9a3b237e1d0c1d578ea1ce313bafa348aa589', 2, 4, NULL, '["*"]', 1, '2016-09-05 05:04:33', '2016-09-05 05:04:33', '2016-09-20 08:04:33'),
('d37ac9faa79a434ed7478ae2e8cedb40a525051d60e806d8d76d390ee91cdd93ffdb236760bf8ede', 2, 4, NULL, '["*"]', 1, '2016-09-05 03:38:21', '2016-09-05 03:38:21', '2016-09-20 06:38:20'),
('dc5b03d436453bf7b6eebd894caee6bb418af4d95c46a3dc09a3abd5c1b73a6095ec2e324cd0236c', 2, 4, NULL, '["*"]', 1, '2016-09-05 08:18:31', '2016-09-05 08:18:31', '2016-09-20 11:18:31'),
('e529b05304064b3ebb1716105240b8f41e04257aab67440fd1de8bb64dc5bdec787692c0ec451e1c', 2, 4, NULL, '["*"]', 1, '2016-09-05 07:29:35', '2016-09-05 07:29:35', '2016-09-20 10:29:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

 --
 -- Table structure for table `oauth_auth_codes`
 --

 CREATE TABLE `oauth_auth_codes` (
   `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
   `user_id` int(11) NOT NULL,
   `client_id` int(11) NOT NULL,
   `scopes` text COLLATE utf8_unicode_ci,
   `revoked` tinyint(1) NOT NULL,
   `expires_at` datetime DEFAULT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

 --
 -- Indexes for dumped tables
 --

 --
 -- Indexes for table `oauth_auth_codes`
 --
 ALTER TABLE `oauth_auth_codes`
   ADD PRIMARY KEY (`id`);

   --
   -- Table structure for table `oauth_clients`
   --

   CREATE TABLE `oauth_clients` (
     `id` int(10) UNSIGNED NOT NULL,
     `user_id` int(11) DEFAULT NULL,
     `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
     `secret` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
     `redirect` text COLLATE utf8_unicode_ci NOT NULL,
     `personal_access_client` tinyint(1) NOT NULL,
     `password_client` tinyint(1) NOT NULL,
     `revoked` tinyint(1) NOT NULL,
     `created_at` timestamp NULL DEFAULT NULL,
     `updated_at` timestamp NULL DEFAULT NULL
   ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

   --
   -- Dumping data for table `oauth_clients`
   --

   INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
   (1, NULL, 'My Application Personal Access Client', 'm0szodhVVI5uXiVgvneWpTCThLbh0bd8XExS40J7', 'http://localhost', 1, 0, 0, '2016-09-02 09:02:06', '2016-09-02 09:02:06'),
   (2, NULL, 'My Application Password Grant Client', 'WkeX642hPQuhZpjUYF0KB42eeaJxG7QPP04fJcFi', 'http://localhost', 0, 1, 0, '2016-09-02 09:02:06', '2016-09-02 09:02:06'),
   (3, 1, 'New Client Name', 'n1vLYQO5wtfnmmZkaQIIx14H0c4oTbkC9gfLtAZs', 'http://localhost/auth/callback', 0, 0, 0, '2016-09-02 09:17:01', '2016-09-02 09:17:01'),
   (4, NULL, 'PasswordGrantClient', '7gFUNCm7YrCXHGdG5SOy7AEgf3O6sp0gW7O96xTD', 'http://localhost', 0, 1, 0, '2016-09-02 09:38:32', '2016-09-02 09:38:32'),
   (5, NULL, 'My Application Personal Access Client', 'G3SzGrctMW3RJeBoKxU0lqgkuVYYuefJtaoqhhmq', 'http://localhost', 1, 0, 0, '2016-09-05 04:57:31', '2016-09-05 04:57:31'),
   (6, NULL, 'My Application Password Grant Client', 'msE9wBiXk9YZVvjhgmwiXWOUuzDCCC13nkZmHhUs', 'http://localhost', 0, 1, 0, '2016-09-05 04:57:33', '2016-09-05 04:57:33');

   --
   -- Indexes for dumped tables
   --

   --
   -- Indexes for table `oauth_clients`
   --
   ALTER TABLE `oauth_clients`
     ADD PRIMARY KEY (`id`),
     ADD KEY `oauth_clients_user_id_index` (`user_id`);

   --
   -- AUTO_INCREMENT for dumped tables
   --

   --
   -- AUTO_INCREMENT for table `oauth_clients`
   --
   ALTER TABLE `oauth_clients`
     MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;


--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2016-09-02 09:02:06', '2016-09-02 09:02:06'),
(2, 5, '2016-09-05 04:57:32', '2016-09-05 04:57:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `oauth_refresh_tokens`
--

INSERT INTO `oauth_refresh_tokens` (`id`, `access_token_id`, `revoked`, `expires_at`) VALUES
('195986501529c3a9496ee3dea2bb64147df7abe87e1d78bade7958ce8afb334aeadfb502af86bd84', 'e529b05304064b3ebb1716105240b8f41e04257aab67440fd1de8bb64dc5bdec787692c0ec451e1c', 0, '2016-10-05 10:29:35'),
('5e487a249e59c689c552e4578d131b1d61503218fce5e5b54adaa1089fb80214956444f1c30f0401', '6d55296584149e21289e908cce54dc984678a696ab096a060a7d32d028a103d498fae2ae561aaea9', 0, '2016-10-05 11:30:45'),
('8261b9aa53ceefa6b9ea9413037bb35a940a5512dfda884604362351bdbedc0a899b53d6c6fee859', '5a48366d381c81624f9567244579806c987f636bb19da48a352370a497496da0ab71dbb450c7d24b', 0, '2016-10-06 08:20:03'),
('84f15b4e3e02e9322682657b1d4f6c0131a6e4b071e4afb42e3721bbd9f66d531929f30bdac17510', 'dc5b03d436453bf7b6eebd894caee6bb418af4d95c46a3dc09a3abd5c1b73a6095ec2e324cd0236c', 0, '2016-10-05 11:18:31'),
('b39c255d8bef2c55085741b01e13ca8f860b903675e38506f993a6b62c9928ebf70f5166eefa3b18', 'd37ac9faa79a434ed7478ae2e8cedb40a525051d60e806d8d76d390ee91cdd93ffdb236760bf8ede', 0, '2016-10-05 06:38:20'),
('b91f1b9c37dfc6edaa2098396d2de83a23335f856c453b4585a9218701ab91d6a031e64757dbccac', '9193fa5c850021201049a3b15221b330865e4cb405e9a3b237e1d0c1d578ea1ce313bafa348aa589', 0, '2016-10-05 08:04:33'),
('cbd82d1447cec95d601cf7580208d979512c237c0e59070b883ec01b2d07650d4e9fe0505544f315', '5edb205dc4dc9868820fc45815bf574664ace71d179f46af7c15f832d4ed9fcc2e1bc14a5b4e0682', 0, '2016-10-06 13:11:27'),
('ccb3d9291cd539762154b0608334804b29cb93cd3720e12bde6230d074c243e789bdfa0620f41d7c', '335791ff3b206eae617f2cfb599f614facf87f4ed4eef12c7292fd95e57308d465045b55549adf1f', 0, '2016-10-06 13:12:36'),
('d798c3ab491f2ce688a6be27621b35c2266541ebbd40cf214358ac7f20a62827cda882564dbca3bd', '11c9a5826b7e140824ecae8f91ecda13c611fb62a0aa1f88311cf6867791d492742c11a49d5565a5', 0, '2016-10-02 13:41:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

  --
  -- Table structure for table `password_resets`
  --

  CREATE TABLE `password_resets` (
    `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

  --
  -- Dumping data for table `password_resets`
  --

  INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
  ('leo2410ua@gmail.com', 'c9fe604b9f6ebeaee58da2d3e09ba589a0138cb538b27e017d011f0e0011ae84', '2016-09-08 05:30:03'),
  ('leo2410@i.ua', '25b778d91fa514fa53839c4726ab824a9182f92f570ee4f89a6b0c2e7a80de42', '2016-09-08 07:57:07'),
  ('leo2410@ukr.net', 'd581517332f517ff920529a61a96496a9d11a0697805dcf2ab8b9d82a1ee0058', '2016-09-08 07:58:49'),
  ('leo256@ukr.net', 'a781b68dd7f283a6ca6ced33cee58240b324612209677d04b352cac6808332e4', '2016-09-08 08:03:19');

  --
  -- Indexes for dumped tables
  --

  --
  -- Indexes for table `password_resets`
  --
  ALTER TABLE `password_resets`
    ADD KEY `password_resets_email_index` (`email`),
    ADD KEY `password_resets_token_index` (`token`);


--
-- Table structure for table `signup_data`
--

CREATE TABLE `signup_data` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `signup_data`
--

INSERT INTO `signup_data` (`id`, `user_id`, `firstname`, `surname`, `gender`, `email`, `mobile_number`) VALUES
(1, 15, 'John', 'Dow', 'male', 'example@example.com', '1234567890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup_data`
--
ALTER TABLE `signup_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `signup_data_email_unique` (`email`),
  ADD UNIQUE KEY `signup_data_mobile_number_unique` (`mobile_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup_data`
--
ALTER TABLE `signup_data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` longtext,
  `authorized` tinyint(4) DEFAULT NULL,
  `info` longtext,
  `source` tinyint(4) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `federaltaxid` varchar(255) DEFAULT NULL,
  `federaldrugid` varchar(255) DEFAULT NULL,
  `upin` varchar(255) DEFAULT NULL,
  `facility` varchar(255) DEFAULT NULL,
  `facility_id` int(11) NOT NULL DEFAULT '0',
  `see_auth` int(11) NOT NULL DEFAULT '1',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `npi` varchar(15) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `specialty` varchar(255) DEFAULT NULL,
  `billname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_direct` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) DEFAULT NULL,
  `assistant` varchar(255) DEFAULT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `valedictory` varchar(255) DEFAULT NULL,
  `street` varchar(60) DEFAULT NULL,
  `streetb` varchar(60) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `zip` varchar(20) DEFAULT NULL,
  `street2` varchar(60) DEFAULT NULL,
  `streetb2` varchar(60) DEFAULT NULL,
  `city2` varchar(30) DEFAULT NULL,
  `state2` varchar(30) DEFAULT NULL,
  `zip2` varchar(20) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `fax` varchar(30) DEFAULT NULL,
  `phonew1` varchar(30) DEFAULT NULL,
  `phonew2` varchar(30) DEFAULT NULL,
  `phonecell` varchar(30) DEFAULT NULL,
  `notes` text,
  `cal_ui` tinyint(4) NOT NULL DEFAULT '1',
  `taxonomy` varchar(30) NOT NULL DEFAULT '207Q00000X',
  `ssi_relayhealth` varchar(64) DEFAULT NULL,
  `calendar` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 = appears in calendar',
  `abook_type` varchar(31) NOT NULL DEFAULT '',
  `pwd_expiration_date` date DEFAULT NULL,
  `pwd_history1` longtext,
  `pwd_history2` longtext,
  `default_warehouse` varchar(31) NOT NULL DEFAULT '',
  `irnpool` varchar(31) NOT NULL DEFAULT '',
  `state_license_number` varchar(25) DEFAULT NULL,
  `newcrop_user_role` varchar(30) DEFAULT NULL,
  `cpoe` tinyint(1) DEFAULT NULL,
  `physician_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `authorized`, `info`, `source`, `fname`, `mname`, `lname`, `federaltaxid`, `federaldrugid`, `upin`, `facility`, `facility_id`, `see_auth`, `active`, `npi`, `title`, `specialty`, `billname`, `email`, `email_direct`, `url`, `assistant`, `organization`, `valedictory`, `street`, `streetb`, `city`, `state`, `zip`, `street2`, `streetb2`, `city2`, `state2`, `zip2`, `phone`, `fax`, `phonew1`, `phonew2`, `phonecell`, `notes`, `cal_ui`, `taxonomy`, `ssi_relayhealth`, `calendar`, `abook_type`, `pwd_expiration_date`, `pwd_history1`, `pwd_history2`, `default_warehouse`, `irnpool`, `state_license_number`, `newcrop_user_role`, `cpoe`, `physician_type`) VALUES
(1, 'admin', 'NoLongerUsed', 1, NULL, NULL, 'Administrator', NULL, 'Administrator', NULL, NULL, NULL, NULL, 3, 1, 1, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, '207Q00000X', NULL, 1, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL),
(2, 'phimail-service', 'NoLogin', 0, NULL, NULL, NULL, NULL, 'phiMail Gateway', NULL, NULL, NULL, NULL, 0, 1, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '207Q00000X', NULL, 0, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL),
(3, 'portal-user', 'NoLogin', 0, NULL, NULL, NULL, NULL, 'Patient Portal User', NULL, NULL, NULL, NULL, 0, 1, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '207Q00000X', NULL, 0, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL),
(14, 'Leo', '$2y$10$.tqLpmq3n47l95ZTvDvL0uYDSpWuKbx3Bb8cdp2Q28IidrWoPyfIi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, NULL, NULL, NULL, 'leo510@i.ua', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '207Q00000X', NULL, 0, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL),
(15, 'Leo', '$2y$10$bLUKuJFj5AleJFHFkMKZjO8zENk.m27P/F6sio6lpJn77SX5DUmpC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, NULL, NULL, NULL, 'leo2410@i.ua', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '207Q00000X', NULL, 0, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL),
(16, 'Gmail', '$2y$10$SHPppdqjLSRRIEsDTiUAsuheGB6uFsnHiROL2pwvYk2oEgp1MBq26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, NULL, NULL, NULL, 'leo2410ua@gmail.com', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '207Q00000X', NULL, 0, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL),
(17, 'UkrNet', '$2y$10$GRqmjABdufmUKeQGY6C3deouG5l4JagrJ3o4OjeED1BUh7eVR9Bgi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, NULL, NULL, NULL, 'leo2410@ukr.net', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '207Q00000X', NULL, 0, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL),
(18, 'UkrNet', '$2y$10$fLJv5sHMa93ItUs3LwSgl.a51ZgCXWj6wgfy83QUD23TzxPJNLgXy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, NULL, NULL, NULL, 'leo256@ukr.net', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '207Q00000X', NULL, 0, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
