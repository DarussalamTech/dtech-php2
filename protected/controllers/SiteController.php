<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0x2F2F2F,
                'foreColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->layout = "frontend";
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                if ($model->customer_copy_check == 1) {
                    /*
                     * module to send 
                     * email copy to customer itself
                     * if the button is checked
                     */
                    $email['To'] = $model->email;
                    $email['From'] = Yii::app()->params['adminEmail'];
                    $email['Subject'] = 'Contact Notification From ' . Yii::app()->name;
                    $email['Body'] = $model->body;
                    $email['Body'] = $this->renderPartial('/common/_email_template', array('email' => $email), true, false);
                    $this->sendEmail2($email);
                }
                $contactM = new ContactFeedback;
                $contactM->email = $model->email;
                $contactM->name = $model->name;
                $contactM->subject = $model->subject;
                $contactM->body = $model->body;
                $contactM->save();

                /**
                 * email code
                 */
                $email['From'] = $model->email;
                $email['FromName'] = $model->name;
                $email['To'] = Yii::app()->params['adminEmail'];
                $email['Subject'] = $model->subject;
                $body = $model->body;

                $email['Body'] = $body;
                $email['Body'] = $this->renderPartial('/common/_email_template', array('email' => $email), true, false);

                $this->sendEmail2($email);
                Yii::app()->user->setFlash('email_status', 'Thank you ! for your feedback');

                $this->redirect($this->createUrl("index") . "#contact_us");
            }
        }


        $this->render("index", array("model" => $model));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }
//
//    /**
//     * Displays the contact page
//     */
//    public function actionContact() {
//        $model = new ContactForm;
//        if (isset($_POST['ContactForm'])) {
//            $model->attributes = $_POST['ContactForm'];
//            if ($model->validate()) {
//                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
//                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
//                $headers = "From: $name <{$model->email}>\r\n" .
//                        "Reply-To: {$model->email}\r\n" .
//                        "MIME-Version: 1.0\r\n" .
//                        "Content-type: text/plain; charset=UTF-8";
//
//                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
//                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
//                $this->refresh();
//            }
//        }
//        $this->render('contact', array('model' => $model));
//    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $this->layout = '//layouts/login';
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login()) {

                $this->redirect(Yii::app()->user->returnUrl);
            }
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

}
