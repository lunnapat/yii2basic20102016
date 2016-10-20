<?php 
use yii\helpers\Html;

//        foreach ($com as $key=>$Value ){
//               echo   ($key+1).' : '.$Value->brand.'/'.$Value->asset_code.'<br>';
//        }
//        
?>  


  <? การแสดงค่าโดยการวน loop โชว์ในตาราง/?>  
<table class="table">
    <thead>
        <tr class="success">
            <th>ลำดับที่</th>
            <th>รหัสประเภท</th>
            <th>ประเภทคอม</th>
            <th>  </th>
        </tr>
    </thead>
    <tbody>
        <?php
        
        foreach ($data as $key => $value) {
        
        echo '<tr>';
        echo '<td>'.($key+1).'</td>';
        echo '<td>'.$value['com_type_id'].'</td>';
        echo '<td>'.$value['com_type_name'].'</td>';
        echo '<td>'.Html::a('<span class="glyphicon glyphicon-list-alt"> </span>',['/report_com_detail','id'=>$value['com_type_id']]).'</td>';
        echo '</tr>';
            
        }
        ?>
    </tbody>
</table>