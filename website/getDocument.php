
    <?php

include "config.php";

$q = $_REQUEST['q'];
if($q=="prev")
    $q=$q-1;

$currentpage=$q;
$list = $DB->result_for_query("select * from document where id between ".$q." and ".($q+2)." order by id desc");


  
        
      $i = 1;
      echo "<table id='table9' width='74%' border='2' align='left'  bordercolor='#333333' class='table-bordered'>";
                    foreach ($list as $p) 
//                        echo $p[1]."<br>";
                    {
                        if ($i == 0)
                        {
                            echo " <tr class='success' border='2' bordercolor='red'>";
                        }
                        if (substr($p[9], 0, 50) == ".ppt" || substr($p[9], 0, 50) == "presentation" || substr($p[9], 0, 19) == "powerpoint")
                        echo "<td width='5%' height='105'  border='2' ><a href='ppt/$p[1]' target='blank'><img src='images/word_image.png'width='100' height='50'/></a></td>";
                        else if (substr($p[9], 0, 15) == "application/pdf")
                        echo "<td width='5%' height='105'  border='2'  ><a href='pdf/$p[1]' target='blank'><img src='images/pdf_image.jpg'width='100' height='50'/></a></td>";
                        else
                        echo "<td width='5%' height='105'  border='2'  ><a href='words/$p[1]' target='blank'><img src='images/ppt_image.png'width='100' height='50'/></a></td>";
                    
                        
                        echo "<td width='15%' height='105'   border='2' ><b>Date :</b> " . $p[4] . "<br><b>Course :</b> " . $p[5] . "<br><b>Subject :</b> " . $p[6] . "<br><b>Topic :</b> " . $p[7] . "<br><b>Downloads :</b> " . $p[8] . "</td>";
                        if ($i == 3) 
                        {
                            echo "</tr>";
                            $i = 0;
                        }
                        $i++;
                    }

echo "</table>";
  
?>
