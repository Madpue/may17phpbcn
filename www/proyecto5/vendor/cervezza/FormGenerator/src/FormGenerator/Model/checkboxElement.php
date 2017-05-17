<?php

/**
 * Create a checkbox element
 * array element
 * html element
**/

function checkboxElement($element, $data)
{
  if(empty($data))
  {
  $html='';
  $html.="<p>
  <label for=\"".$element['name']."\">".$element['label']."</label>";
      foreach($element['options'] as $option => $value)
       {
        $html.="</br><input type=\"".$element['type']."\" name=\"".
                                     $element['name']."[]\" value=\"".$value."\"
                     >$option";
       }
    $html.="</p>";
  }
  else
  {
      $data = explode("|", $data[$element['name']]);

      echo "<pre>";
      print_r($data);
      echo "</pre>";

      $html='';
      $html.="<p>
      <label for=\"".$element['name']."\">".$element['label']."</label>";
          foreach($element['options'] as $option => $value)
           {
            $html.="</br><input type=\"".$element['type']."\" name=\"".
                                         $element['name']."[]\" value=\"".$value."\"";
            if(in_array($value,$data ))
              $html.="checked";
            $html.=">$option";
           }
        $html.="</p>";


  }
  return $html;
}
