<?php
class ViewTimeField extends ViewControl
{
	public function showDBValue( &$data, $keylink, $html = true )
	{	
		$result = $this->getTextValue( $data );
		
		if( !$this->container->forExport || $this->container->forExport != "excel" && $this->container->forExport != "csv" )
			$result = runner_htmlspecialchars( $result );
		
		return $result;
	}
	
	/**
	 * @param &Array data
	 * @return String	 
	 */
	public function getTextValue( &$data ) {
		global $locale_info;
		
		$time = $this->getTimeArray( $data );
		if( !$time )
			return "";
		
		$h = $time[0];
		$m = $time[1];
		$s = $time[2];
		
		$formatData = $this->container->pSet->getViewAsTimeFormatData( $this->field );
		
		if( $formatData["timeFormat"] == TIME_FORMAT_DURATION ) {
			// show duration
			$d = 0;
			if( $formatData["showDaysInTotals"] ) {
				$h = $time[0] % 24;
				$d = ( $time[0] - $h ) / 24;
			}
			
			$timeFormat = $formatData["showSeconds"] ? "H:mm:ss" : "H:mm";
			
			return ($d != 0 ? $d.'d ' : '')
				.format_datetime_custom( array(0, 0, 0, $h, $m, $s), $timeFormat );
		}
		
		// show time of a day
		$timeFormat = $locale_info["LOCALE_STIMEFORMAT"];
		if( !$formatData["showSeconds"] )
			$timeFormat = str_replace(array(':ss', ':s'), array('', ''), $timeFormat);
		
		return format_datetime_custom( array( 0, 0, 0, $h, $m, $s ), $timeFormat);
	}
	
	/**
	 * @param &Array data
	 * @return Array
	 * an array with following elements: 0=> hours, 1=> minutes, 2=> second
	 */
	protected function getTimeArray( &$data ) {
		if( IsDateFieldType( $this->fieldType ) ) {
			$date = db2time( $data[ $this->field ] );
			return array( $date[3], $date[4], $date[5] );
		}
		
		$time = parsenumbers( $data[ $this->field ] );
		if( !$time )
			return array();
		
		while( count($time) < 3 ) {
			$time[] = 0;
		}
		
		if ( count( $time ) == 6 ) {
			// datetime
			return array( $time[3], $time[4], $time[5] );
		}

		return $time;
	}
	
	/**
	 * @return String
	 */
	public static function getFormattedTotals( $field, $value, $pSet, $pdfMode ) {
		if( !$value ) 
			return $value;
		
		$s = $value % 60;
		$value -= $s;
		$value /= 60;
		
		$m = $value % 60;
		$value -= $m;
		$value /= 60;
		
		$h = $value;
		$d = 0;
		if( $pSet->showDaysInTimeTotals( $field ) ) {	
			$h = $value % 24;
			$value -= $h;
			$value /= 24;
			$d = $value;
		}
		
		$res = ($d != 0 ? $d.'d ' : ''). mysprintf( "%02d:%02d:%02d", array($h, $m, $s) );
		
		return $pdfMode ? 
			"'" . jsreplace( $res ) . "'"
			: $res;	
	}
}
?>