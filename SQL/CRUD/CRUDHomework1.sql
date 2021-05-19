CREATE TABLE `new_agents` AS
SELECT DISTINCT `agents`.`AGENT_CODE`, `agents`.`AGENT_NAME`, `agents`.`WORKING_AREA`, `agents`.`COMMISSION`, `agents`.`PHONE_NO`, `agents`.`COUNTRY`
FROM `agents`
JOIN `customer`
ON `agents`.`AGENT_CODE` = `customer`.`AGENT_CODE`
WHERE `agents`.`WORKING_AREA` = "London"
AND `customer`.`CUST_COUNTRY` = "UK";

ALTER TABLE `new_agents`
ADD PRIMARY KEY (`AGENT_CODE`);
