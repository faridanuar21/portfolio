<?php

namespace app\controllers;

use yii\web\Controller;

/**
 * Summary of HelpController
 */
class HelpController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }

    public function actionAccountSettings() {
        return $this->render('accountSettings');
    }

    // public function actionHelpCenter() {
    //     return $this->render('index');
    // }

    public function actionLoginAndSecurity(){
        return $this->render('loginAndSecurity');
    }

    public function actionPrivacy(){
        return $this->render('privacy');
    }
}

?>