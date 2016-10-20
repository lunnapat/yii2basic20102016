<?php

namespace app\controllers;

class ReportcometypeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        //การส่งค่าข้อมูลหลายตาราง  เพื่อสร้างรายงาน
        //การสร้าการติดต่อ
        $conn=\Yii::$app->db;
        //คำสั่ง sql
        $sql='select * from com_type';
//        print_r('$sql');
//        die();
//        
                
        //สร้าง query
        $cmd=$conn->createCommand($sql);
        //run query
        $data=$cmd->queryAll();
//        
//       print_r($data);
//       die();
        //ส่งค่าไป views
        return $this->render('index',['data'=>$data]);
    }

}
