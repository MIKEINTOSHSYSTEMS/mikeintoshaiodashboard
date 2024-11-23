<?php
$topsperformance_overview = array();
		$topsperformance_overview["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT 
    pi.indicator_id,
    pi.indicator_name,
    pi.unit_of_measurement,
    pi.reporting_frequency,
    pt.tracking_id,
    pt.baseline_year,
    pt.baseline_value,
    py.year AS performance_year,
    py.target,
    py.actual
FROM 
    performance_indicators pi
JOIN 
    performance_tracking pt ON pi.indicator_id = pt.indicator_id
JOIN 
    performance_years py ON pt.tracking_id = py.tracking_id;"
	);
		$tables_data["Performance_Overview"][".operations"] = &$topsperformance_overview;
?>