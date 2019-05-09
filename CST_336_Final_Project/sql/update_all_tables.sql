DELETE FROM 'admin';
INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4'),
('admin2', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4'),
('admin6', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8'),
('FredTheAdmin', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3');

DELETE FROM 'items';
INSERT INTO `items` (`id`, `name`, `description`, `gender`, `type`, `size`, `stock`, `price`, `imageURL`) VALUES
(9, 'Blazer', 'Tailored Formal Blazer Jacket', 'M', 'jacket', 'M', '5', '199.99', 'img/clothing/men/jackets/1.jpg'),
(10, 'Casual Jacket', 'Casual Zip Up Jacket', 'M', 'jacket', 'S', '10', '99.99', 'img/clothing/men/jackets/2.jpg'),
(11, 'Plaid Jacket', 'Stylish Plaid Jacket', 'M', 'jacket', 'L', '10', '179.99', 'img/clothing/men/jackets/3.jpg'),
(12, 'Plaid Trench Coat', 'Casual Plaid Trench Coat', 'M', 'jacket', 'S', '10', '299.99', 'img/clothing/men/jackets/4.jpg'),
(13, 'Hiking Jacket', 'Warm Puff Hiking Jacket', 'M', 'jacket', 'M', '10', '399.99', 'img/clothing/men/jackets/5.jpg'),
(14, 'Skinny Jeans', 'Casual Black Skinny Jeans', 'M', 'pants', 'M', '10', '59.99', 'img/clothing/men/pants/6.jpg'),
(15, 'Cargo Pants', 'Dark Colored Casual Cargo Pants', 'M', 'pants', 'M', '10', '49.99', 'img/clothing/men/pants/5.jpg'),
(16, 'Bootcut Jeans', 'Bootcut Casual Denim Jeans', 'M', 'pants', 'M', '10', '59.99', 'img/clothing/men/pants/6.jpg'),
(17, 'Long Dress', 'Quinceanera Long Two Piece Set Quinceanera Ball Gown Sweet 16 Dress', 'F', 'dress', 'S', '10', '83.56', 'img/clothing/women/dress/4.png'),
(18, 'Glitter High Heels', 'Gold Glitter High Heels', 'F', 'shoes', 'S', '10', '45.67', 'img/clothing/women/shoes/5.jpg'),
(19, 'Hiking Shoes', 'Comfortable Hiking Shoes', 'F', 'shoes', 'M', '10', '77.80', 'img/clothing/women/shoes/8.jpg'),
(21, 'Lace Dress', ' Green Lace Panel Off The Shoulder Dress', 'F', 'dress', 'L', '10', '46.00', 'img/clothing/women/dress/1.png'),
(22, 'Vintage Dress', 'Vintage Forest Print Ruched Pin Up Dress', 'F', 'dress', 'M', '10', '71.67', 'img/clothing/women/dress/2.png'),
(23, 'Sleeveless Dress', 'Women\'s Sleeveless Sweetheart Flared Mini Dress', 'F', 'dress', 'S', '10', '67.99', 'img/clothing/women/dress/3.png'),
(24, 'High Heels Ankle Boots', 'Zip-up high-heel ankle boots.', 'F', 'shoes', 'S', '10', '90.77', 'img/clothing/women/shoes/4.jpg'),
(25, 'Polka Dot Sneakers Shoes', 'Breathable Canvas Polka Dot Sneakers', 'F', 'shoes', 'S', '10', '35.89', 'img/clothing/women/shoes/15.png'),
(26, 'Flare Cape Dress', 'Pink Flare Cape Dress', 'F', 'dress', 'S', '10', '30.99', 'img/clothing/women/dress/5.png'),
(27, ' Round Glasses', 'Retro Vintage Round Glasses', 'M', 'glasses', 'S', '10', '54.00', 'img/clothing/men/glasses/9.jpg'),
(28, 'Sunglasses', 'Polarized Sunglasses Men', 'M', 'glasses', 'S', '10', '76.87', 'img/clothing/men/glasses/1.jpg'),
(29, 'Flannel Shirt', 'Women\'s Long Sleeve Plaid Flannel Shirt', 'F', 'long sleeve shirts', 'S', '10', '$21.68', 'img/clothing/women/long_sleeve_shirts/2.png'),
(30, 'Long Sleeve T shirts', 'Long-sleeve striped artist T-shirt', 'F', 'long sleeve shirts', 'S', '10', '16.90', 'img/clothing/women/long_sleeve_shirts/1.png'),
(31, 'Short Sleeve Button Up', 'slim wrinkle-resistant button-down short sleeve performance shirt', 'M', 'short sleeve shirts', 'M', '10', '44.00', 'img/clothing/men/short_sleeve_shirts/3.png'),
(32, 'White Short Sleeve Shirt', 'Short Sleeve Cabana Breeze Solid Button Down Camp Shirt ', 'M', 'short sleeve shirts', 'M', '10', '45.90', 'img/clothing/men/short_sleeve_shirts/2.png'),
(33, 'Light Pink Short Sleeves', 'Red Tape Light Pink Short Sleeves Shirt', 'M', 'short sleeve shirts', 'L', '10', '67.56', 'img/clothing/men/short_sleeve_shirts/1.png'),
(34, 'Blue Point Collar Shirt', 'Blue Unique Bargains Men Point Collar Button Down Short Sleeve Anchor Pattern Shirt', 'M', 'short sleeve shirts', 'S', '10', '45.90', 'img/clothing/men/short_sleeve_shirts/4.png'),
(35, 'Black Long Sleeve Shirt', 'Black classic long sleeved shirt with slim fit design', 'M', 'long sleeve shirts', 'S', '10', '78.99', 'img/clothing/men/long_sleeve_shirts/1.png'),
(36, 'Gray Neck T-shirt', 'Long Sleeve Heavyweight Crew Neck T-Shirt', 'M', 'long sleeve shirts', 'L', '10', '23.65', 'img/clothing/men/long_sleeve_shirts/4.png'),
(37, 'Cypress Denim', 'Solid Long-Sleeve Cypress Denim with Pocket Button Down Dress Shirt Light', 'M', 'long sleeve shirts', 'S', '10', '78.87', 'img/clothing/men/long_sleeve_shirts/3.png\r\n'),
(38, 'Navy style long sleeve shirt', 'Basic Navy style long-sleeve shirt ', 'M', 'long sleeve shirts', 'L', '10', '21.90', 'img/clothing/men/long_sleeve_shirts/2.png\r\n'),
(39, 'Jeans Baseball Cap', 'Dark Blue Jeans Baseball Cap Simple Style ', 'M', 'caps', 'S', '10', '23.11', 'img/clothing/men/caps/2.png\r\n'),
(40, 'White Baseball Cap', 'White baseball cap ', 'M', 'caps', 'S', '10', '45.55', 'img/clothing/men/caps/3.png'),
(41, 'Light Blue Baseball Cap', 'Light blue baseball cap for men', 'M', 'caps', 'S', '10', '30.99', 'img/clothing/men/caps/1.png'),
(42, 'Purple short sleeve shirt', 'Blue Soft Cotton Shirt', 'F', 'short sleeve shirts', 'M', '10', '32.70', 'img/clothing/women/short_sleeve_shirts/2.png'),
(43, 'Red Short Sleeve Stripe ', 'Womens Short Sleeve Stripe Shirt Red Stripe', 'F', 'short sleeve shirts', 'M', '10', '23.59', 'img/clothing/women/short_sleeve_shirts/1.png'),
(44, 'Light Pink Blouse', 'Spring Autumn Casual Chiffon Blouse Pink White Office', 'F', 'long sleeve shirts', 'S', '10', '44.33', 'img/clothing/women/long_sleeve_shirts/3.png'),
(45, ' Short Sleeve Polo Shirt', 'White Morgan Short Sleeve Polo Shirt', 'F', 'short sleeve shirts', 'S', '10', '40.90', 'img/clothing/women/short_sleeve_shirts/4.png'),
(46, 'Mid Rise \r\nJean Leggings', 'Mid Rise Wash Jean Leggings', 'F', 'pants', 'S', '10', '34.65', 'img/clothing/women/pants/13.png'),
(48, 'Super High Rise Jeans', 'Light blue high rise jeans', 'F', 'pants', 'S', '10', '56.45', 'img/clothing/women/pants/12.png'),
(49, 'Black Jean Leggings', 'Super soft black women skin tight denim pants', 'F', 'pants', 'M', '10', '30.23', 'img/clothing/women/pants/11.png');

DELETE FROM 'orders';
INSERT INTO `orders` (`id`, `user`, `totalPrice`, `date`) VALUES
(1, 'test', '999.99', '2019-05-09 00:17:45'),
(2, 'test', '199.99', '2019-05-09 00:24:59'),
(3, 'shopaholic', '999.99', '2019-05-09 00:35:14'),
(4, 'shopaholic', '10.99', '2019-05-09 00:36:32'),
(5, 'shopaholic', '700.50', '2019-05-09 00:36:32'),
(6, 'shopaholic', '126.99', '2019-05-09 00:36:32'),
(7, 'shopaholic', '100.75', '2019-05-09 00:36:32'),
(8, 'shopaholic', '56.99', '2019-05-09 00:36:32'),
(9, 'shopaholic', '99699.99', '2019-05-09 00:36:32'),
(10, 'shopaholic', '10.99', '2019-05-09 00:36:32'),
(11, 'shopaholic', '505.50', '2019-05-09 00:36:32'),
(12, 'shopaholic', '156.99', '2019-05-09 00:36:32'),
(13, 'shopaholic', '100.75', '2019-05-09 00:36:32'),
(14, 'shopaholic', '56.99', '2019-05-09 00:36:32'),
(15, 'shopaholic', '3999.99', '2019-05-09 00:36:32'),
(16, 'shopaholic', '10.99', '2019-05-09 00:36:32'),
(17, 'shopaholic', '700.50', '2019-05-09 00:36:32'),
(18, 'shopaholic', '126.99', '2019-05-09 00:36:32'),
(19, 'shopaholic', '100.75', '2019-05-09 00:36:32'),
(20, 'shopaholic', '56.99', '2019-05-09 00:36:32'),
(21, 'shopaholic', '1999.99', '2019-05-09 00:36:32');

DELETE FROM 'users';
INSERT INTO `users` (`username`, `password`, `email`, `address`) VALUES
('shopaholic', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'shop@holic.mall', '123 Gotta St., Opshopp, IN 99999 '),
('test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test@yourdomain.com', '123 Valley Lane, Somewhere, CA 55555'),
('user', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4', 'user@gmail.com', '106 Oak St., Springfield, CA 55555');