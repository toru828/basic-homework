SELECT
	`working_area`, avg(`commission`) AS `avg_commission`, count(`agent_name`) AS `count_agent_name`
FROM
	`agents`
GROUP BY
	`working_area`
HAVING
	`count_agent_name` < 3
ORDER BY
	`avg_commission`, `count_agent_name` desc;
