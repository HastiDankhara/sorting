<html>
    <head>    
        <title>quick</title>
        <style>
      body {
        background-color: rgb(156, 156, 216);
      }
      h1 {
        text-align: center;
        margin-top: 15%;
        margin-bottom: 3rem;
      }
      .container {
        text-align: center;
      }
      h4 {
        margin: 2rem;
      }
      span {
        font-size: 22px;
      }
    </style>
    </head>
    <body>
        <div class="container">
            <h1>QUICK SORTING</h1>
            <h4>UNSORTED VALUE : <span class="unsort">
                <?php
                $a=array(34, 65, 2, 7, 14, 76, 9);
                // $count=count($a);
                echo implode(",",$a);
                ?>
            </span></h4>
            <h4>SORTED VALUE : <span class="sort">
            <?php
            $count=count($a);
            $low=0;
            $high=$count-1;
            function partition(&$a,$low,$high)
            {
              $storeI=$a[$low];
              $i=$low;
              $j=$high;
              while($i<$j){
                while($a[$i]<=$storeI && $i<=$high){
                  $i++;
                }
                while($a[$j]>=$storeI &&  $j>=$low){
                  $j--;
                }
                if($i<$j){
                  $temp=$a[$i];
                  $a[$i]=$a[$j];
                  $a[$j]=$temp;
                }
              }
              $temp=$a[$low];
              $a[$low]=$a[$j];
              $a[$j]=$temp;
              return $j;
            }
            function quicksort(&$a,$low,$high){
              if($low<$high){
                $index=partition($a,$low,$high);
                quicksort($a,$low,$index-1);
                quicksort($a,$index+1,$high);
              }
            }
            quicksort($a,$low,$high);
            echo implode(",",$a);
            ?>
</span></h4>
        </div>
    </body>
</html>
