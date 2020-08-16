<?php

function showTime(){
           $con= mysqli_connect("localhost","root","","iasds");
           if($con){
                $sql="SELECT `timestamp` FROM `notice`";
                $execute=mysqli_query($con,$sql);
                $num= mysqli_num_rows($execute);
                for($i=0;$i<$num;$i++){
                    $row= mysqli_fetch_array($execute);
                    $dt = new DateTime($row[$i]);
                    echo "Year : ".$dt->format('Y');
                    echo "<br>";
                    echo "Month : ".$dt->format('m');
                    echo "<br>";
                    echo "Day : ".$dt->format('d');
                    echo "<br>";
                    echo "Hour : ".$dt->format('H');
                    echo "<br>";
                    echo "Minutes : ".$dt->format('i');
                    echo "<br>";
                    echo "Seconds : ".$dt->format('s');
                }
           }else{
               echo '<h6>There is an error</h6>';
           }
}
           ?>