<?php

/**
 * return html from an array
 * array array
 * string html
 **/

function dibujaTabla($array)
{
  // Determinar el inicio y fin de filas
  $filasmax = sizeof($array);

  // Determinar el inicio y fin de columnas
  $columnasmax = sizeof($array[0]);

  // Crear tabla
  $html ="<table border=1>";
      // Crear filas
      for ($i=0;$i<$filasmax;$i++)
      {
        $html.="<tr>";
          // Verificacion de si el array es unidimensional
          if(!is_array($array[0]))
          {
            $html.="<td>";
                // Poner el valor
                $html.=$array[$i];
            $html.="</td>";
          }
          else
          {
            // Crear columnas
            for($j=0;$j<$columnasmax;$j++)
            {
              $html.="<td>";
                  // Para cada columna poner el valor
                  $html.=$array[$i][$j];
              $html.="</td>";
            }
          }
        $html.="</tr>";
      }
  $html.="</table>";
  // Retornar la tabla
  return $html;
}
