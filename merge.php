<html>
    <head>    
        <title>merge</title>
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
            <h1>MERGE SORTING</h1>
            <h4>UNSORTED VALUE : <span class="unsort">
                <?php
                $a=array(34, 65, 2, 7, 14, 76, 9);
                // $count=count($a);
                echo implode(",",$a);
                ?>
            </span></h4>
            <h4>SORTED VALUE : <span class="sort">
            <?php
        $count = count($a);
        $low=0;
        $high=$count-1;
        function mergesort(&$a,$low,$high){
            if($low<$high){
                $mid=floor(($low+$high)/2);
                mergesort($a,$low,$mid);
                mergesort($a,$mid+1,$high);
                merge($a,$low,$mid,$high);
            }
        }
        function merge(&$a,$low,$mid,$high){
            $i=$low;
            $j=$mid+1;
            $temp=[];
            while($i<=$mid && $j<=$high){
                if($a[$i]<$a[$j]){
                    array_push($temp,$a[$i]);
                    $i++;
                }
                else
                {
                    array_push($temp,$a[$j]);
                    $j++;
                }
            }
            while($i<=$mid){
                array_push($temp,$a[$i]);
                $i++;
            }
            while($j<=$high){
                array_push($temp,$a[$j]);
                $j++;
            }
            for($k=$low;$k<=$high;$k++)
            {
                $a[$k]=$temp[$k-$low];
            }
        }
        mergesort($a,$low,$high);
    echo implode(",",$a);
?>
</span></h4>
        </div>
    </body>
</html>
