SELECT
	`working_area`, avg(`commission`), count(`agent_name`)
FROM
	`agents`
GROUP BY
	`working_area`
HAVING
	count(`agent_name`) < 3
ORDER BY
	avg(`commission`), count(`agent_name`) desc;
