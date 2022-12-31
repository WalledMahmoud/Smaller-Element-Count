<?php 

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function countSmaller($nums) {
        
        $counts = [];
        for ($i = 0; $i < count($nums); $i++) {
            $count = 0;
            for ($j = $i + 1; $j < count($nums); $j++) {
                if ($nums[$j] < $nums[$i]) {
                    $count++;
                }
            }
            $counts[] = $count;
        }

        return $counts;

    }
}
