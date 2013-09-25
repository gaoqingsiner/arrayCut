<?php

/**
+----------------------------------------------------------
 * 切割数组
+----------------------------------------------------------
 * @access public
+----------------------------------------------------------
 * @param string $data 数组
 * @param integer $number  切割数量
+----------------------------------------------------------
 * @author Tony An <taotao9229@gmail.com>
 * @return $result
+----------------------------------------------------------
 */


function arrayCut($data,$number){

    $result = array();

        foreach($data as $k_1=>$v_1){
            if(is_array($v_1)){
                foreach($data[$k_1] as $k_2=>$v_2){
                    if(is_array($v_2)){
                        foreach($data[$k_1][$k_2] as $k_3=>$v_3){
                            $result[$k_1/$number][$k_1][$k_2][$k_3].=$v_3;
                        }
                    }else{
                        $result[$k_1/$number][$k_1][$k_2].=$v_2;
                    }
                }
            }else{
                $result[$k_1/$number][].=$v_1;
            }
        }

    return $result;
} 


?>

test