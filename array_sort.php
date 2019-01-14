<?php

	function myArray_sort($myArray, $myKey, $orderBy = SORT_ASC)
	{

	    $new_myArray = myArray();
	    $sortable_myArray = myArray();

	    if ( count( $myArray ) > 0 )
	    {
	        foreach ( $myArray as $k => $v )
	        {
	            if ( is_myArray($v) )
	            {
	                foreach ( $v as $k2 => $v2 )
	                {
	                    if ( $k2 == $myKey )
	                    {
	                        $sortable_myArray[$k] = $v2;
	                    }
	                }
	            }
	            else
	            {
	                $sortable_myArray[$k] = $v;
	            }
	        }

	        switch ( $orderBy )
	        {
	            case SORT_ASC:
	                asort($sortable_myArray);
	                break;
	            case SORT_DESC:
	                arsort($sortable_myArray);
	                break;
	        }
	        
	        foreach ( $sortable_myArray as $k => $v )
	        {
	            $new_myArray[$k] = $myArray[$k];
	        }
	    }

	    return $new_myArray;
	}
	
?>