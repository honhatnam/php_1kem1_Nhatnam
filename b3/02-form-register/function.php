<?php

function createInput($name,$type='text',$placeHolder=''){
$xhtml = '';
$xhtml .='<input class="input--style-2"  type="'.$type.'" name="'.$name.'" placeholder ="'.$placeHolder.'">';
return $xhtml;
}

function CreateDate($name,$type='text',$placeHolder=''){
 $xhtml ='';
 $xhtml .='<input class="input--style-2 js-datepicker" type="'.$type.'" placeholder="'.$placeHolder.'" name="'.$name.'">';
 $xhtml .='<i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>';
 return $xhtml;
}

function createSelect($name,$defaultOption,$option){
    $xhtml = '';
    $xhtml = ' <div class="rs-select2 js-select-simple select--no-search">
    <select name="'.$name.'">
    <option disabled="disabled" selected="selected">'.$defaultOption.'</option>';
    
    if(!empty($option)){
        foreach($option as $key=>$value){
            $xhtml .= '<option>'.$value.'</option>';
        }
    }
    $xhtml .='</select>
    <div class="select-dropdown"></div></div>';
    return $xhtml;
}