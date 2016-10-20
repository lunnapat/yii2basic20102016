<?php


//        foreach ($com as $key=>$Value ){
//               echo   ($key+1).' : '.$Value->brand.'/'.$Value->asset_code.'<br>';
//        }
//        
?>  

<?php
$this->params['breadcrumbs'][] = ['label' => 'ประเภทคอม', 'url' => ['/reportcomtype/index']];
?>




  <? การแสดงค่าโดยการวน loop โชว์ในตาราง/?>  
<table class="table">
    <thead>
        <tr class="success">
            <th>ลำดับที่</th>
            <th>ยี่ห้อ</th>
            <th>รหัสครุภัณฑ์</th>
        </tr>
    </thead>
    <tbody>
        <?php
        
        foreach ($data as $key => $value) {
        
        echo '<tr>';
        echo '<td>'.($key+1).'</td>';
        echo '<td>'.$value['brand'].'</td>';
        echo '<td>'.$value['asset_code'].'</td>';
        echo '</tr>';
            
        }
        ?>
    </tbody>
</table>