SELECT * 
	FROM(
		SELECT `type`, `value`
			FROM `test` 
			ORDER BY `date` DESC
	) `t` 
	GROUP BY type  ;
