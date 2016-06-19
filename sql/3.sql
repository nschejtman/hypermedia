alter table products add COLUMN (root_Category varchar(100))

update products set root_Category = CASE when category = 'smartphone' then category
	when category = 'tablet' then category
	when category in ('modem','bridge') then 'modem'
	when category in ('tv','decoder','speaker','headphone','sensor') then 'smart-living'
	END
