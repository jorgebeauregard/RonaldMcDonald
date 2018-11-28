<?php 
    require_once("apiManager.php");
    require_once("check.php");
    
    //retorna el número de cuartos ocupados en una cierta fecha UNIX
    function getChilds($date)
    {
        $childs = 0;

        $checkins = $GLOBALS["checkin"];
        
        foreach( (array)$checkins as $entry)
        {
            $value = $entry->check_in_date;

            $checkinDate = validDate($value);

            if($checkinDate == $date)
            {
                $childs++;
            }
            else if($checkinDate < $date)
            {
                $checkout = $entry->check_out_date;

                if(!empty($checkout))
                {
                    $checkout = validDate($checkout);
                }
                else
                {
                    $childs++;
                    continue;
                }

                if($checkout > $date)
                {
                    $childs++;
                }
            }
        }
        
        return $childs;
    }

    function getRooms($date)
    {
        $rooms = 0;

        $checkins = $GLOBALS["checkin"];
        
        foreach( (array)$checkins as $entry)
        {
            $value = $entry->check_in_date;

            $checkinDate = validDate($value);

            if($checkinDate == $date)
            {
                $rooms += count($entry->companions);
            }
            else if($checkinDate < $date)
            {
                $checkout = $entry->check_out_date;

                if(!empty($checkout))
                {
                    $checkout = validDate($checkout);
                }
                else
                {
                    $rooms += count($entry->rooms);
                    continue;
                }

                if($checkout > $date)
                {
                    $rooms += count($entry->rooms);
                }
            }
        }
        
        return $rooms;
    }

    function getCompanions($date)
    {
        $companions = 0;

        $checkins = $GLOBALS["checkin"];

        foreach( (array)$checkins as $entry)
        {
            $value = $entry->check_in_date;

            $checkinDate = validDate($value);

            if($checkinDate == $date)
            {
                $companions += count($entry->companions);
            }
            else if($checkinDate < $date)
            {
                $checkout = $entry->check_out_date;

                if(!empty($checkout))
                {
                    $checkout = validDate($checkout);
                }
                else
                {
                    $companions += count($entry->companions);
                }

                if($checkout > $date)
                {
                    $companions += count($entry->companions);
                }
            }
        }
        return $companions;
    }
?>