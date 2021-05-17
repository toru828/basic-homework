<?php

class Pair {
    public $sum = null;
    public $indexInArray1 = null;
    public $indexInArray2 = null;

    public function __construct ($indexInArray1, $indexInArray2, $sum) {
        $this->indexInArray1 = $indexInArray1;
        $this->indexInArray2 = $indexInArray2;
        $this->sum = $sum;
    }
}



function mergesort($numlist)
{
    if(count($numlist) == 1 ) return $numlist;
 
    $mid = count($numlist) / 2;
    $left = array_slice($numlist, 0, $mid);
    $right = array_slice($numlist, $mid);
 
    $left = mergesort($left);
    $right = mergesort($right);
     
    return merge($left, $right);
}

// merge 2 sorted arrays
function merge($left, $right)
{
    $result=array();
    $leftIndex=0;
    $rightIndex=0;
 
    while($leftIndex<count($left) && $rightIndex<count($right))
    {
        if($left[$leftIndex]->sum > $right[$rightIndex]->sum)
        {
            $result[]=$right[$rightIndex];
            $rightIndex++;
        }
        else
        {
            $result[]=$left[$leftIndex];
            $leftIndex++;
        }
    }
    while($leftIndex<count($left))
    {
        $result[]=$left[$leftIndex];
        $leftIndex++;
    }
    while($rightIndex<count($right))
    {
        $result[]=$right[$rightIndex];
        $rightIndex++;
    }
    return $result;
}


function printArray(&$arr, $n) 
{ 
    for ($i = 0; $i < $n; $i++) 
        echo $arr[$i]." "; 
    echo "\n"; 
} 


function findSmallestPairs($array1, $array2, $k) {
    $x = 0;
    $y = 0;
    $array3 = array();
    while($y !== count($array2)) {
        array_push($array3, new Pair($array1[$x], $array2[$y], $array1[$x] + $array2[$y]));
        $x++;
        if ($x === count($array1)) {
            $x = 0;
            $y++;
        }
    }

    $arr = mergesort($array3);
    for($z = 0; $z < $k; $z++) {
        echo "(".$arr[$z]->indexInArray1.", ".$arr[$z]->indexInArray2.")"."<br>";
    }
}

$arr1 = array(11, 7, 1, 5, 11);
$arr2 = array(4, 6, 2, 8);

// The number "8" means, pick out 8 smallest pairs.
findSmallestPairs($arr1, $arr2, 8);

?>
