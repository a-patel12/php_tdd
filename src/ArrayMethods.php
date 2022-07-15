<?php
namespace Apatel\PhpTdd;

class ArrayMethods{

    /**
     * @param array $arr
     * @param $N
     */
    public function sort012(array $arr, $N){

        $total_values = count($arr);

        if($N != $total_values){
            return false;
        }

        $count_occurances = [];
        $int_0 = 0;
        $int_1 = 0;
        $int_2 = 0;

        foreach($arr as $value){
            if($value == 0)
                $count_occurances[0] = ++$int_0;
            else if ($value == 1)
                $count_occurances[1] = ++$int_1;
            else if ($value == 2)
                $count_occurances[2] =  ++$int_2;
            else
                return false;
        }

        $index = 0;
        $sorted_arr= [];
        $new_arr_count = count($count_occurances);

        for($i = 0; $i < $new_arr_count; $i++) {

            $count = $count_occurances[$i];
            $generate_arr = array_fill($index, $count, $i);
            $index += $count;
            $sorted_arr = array_merge($sorted_arr, $generate_arr);
        }

        return $sorted_arr;
    }
}