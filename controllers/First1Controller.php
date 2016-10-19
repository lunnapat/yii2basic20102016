<?php

namespace app\controllers;

class First1Controller extends \yii\web\Controller
{
    public function actionIndex()
    {   //สร้างตัวแปร
        $title = 'ระบบรายงาน';
        
        $person = [
            ['fname' => 'สมชาย', 'lname' => 'ใจดี', 'email' => 'som@hotmail.com'],
            ['fname' => 'สมหญิง', 'lname' => 'ใจงาม', 'email' => 'ying@hotmail.com'],
            ['fname' => 'หญิง', 'lname' => 'สดใส', 'email' => 'newying@hotmail.com']
        ];
        
        
        //การส่งค่าตัวแปรไปแสดงที่ views หน้า index โดย['key'=>$value]
        return $this->render('index',['title'=>$title,
                                      'person'=>$person]); 
   
    }

}
