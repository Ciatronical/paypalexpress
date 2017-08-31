CREATE TABLE IF NOT EXISTS `plugin_paypal_express_settings` (
`id` int(10) NOT NULL,
`prodID` varchar(255) NOT NULL,
`sandID` varchar(255) NOT NULL,
`useSandbox` tinyint(1) NOT NULL,
`usePaypalfee` tinyint(1) NOT NULL,
`paypalfee` varchar(255) NOT NULL,
 Primary key (`id`)
) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_unicode_ci;

INSERT INTO `plugin_paypal_express_settings`
VALUES ('1', '', '','0','0','*1.019+0.35')
ON DUPLICATE KEY UPDATE id=1;

UPDATE `plugin` SET `version`='2.3.0' WHERE `name`='paypal';


INSERT INTO `shopping_product`
VALUES ('999999', 'NULL', '1','0','999999','PaypalFee','','NULL','1','NULL','PaypalExpressFee','','0.0','1','','','NULL','NULL','0')
ON DUPLICATE KEY UPDATE id=1;