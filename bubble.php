<html>
    <head>    
        <title>bubble</title>
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
            <h1>BUBBLE SORTING</h1>
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
        for($i=0;$i<$count-1;$i++){
         for($j=0;$j<$count-$i-1;$j++){
            if($a[$j]>$a[$j+1]){
                $temp=$a[$j];
                $a[$j]=$a[$j+1];
                $a[$j+1]=$temp;
            }
        }
    }
    echo implode(",",$a);

?>
</span></h4>
        </div>
    </body>
</html>
