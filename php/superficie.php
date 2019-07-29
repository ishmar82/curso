    <?php 

    function triangulo($ladoUno, $ladoDos){
      $superficie = $ladoUno * $ladoDos / 2;

      return $superficie;
    }

    function rectangulo($ladoUno, $ladoDos){
       $superficie = $ladoUno * $ladoDos;
       return $superficie;
     }


      function cuadrado($ladoUno){
        $superficie = pow ($ladoUno, 2);
        return $superficie;
      }


       function pis($radio){
         $superficie = pow($radio, 2) * 3.14;
         return $superficie;
       }



      ?>
