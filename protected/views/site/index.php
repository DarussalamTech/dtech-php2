<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'contact-form',
    'enableClientValidation' => true,
    //'focus' => array($model, 'name'),
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
        ));

/**
 * to make focus on field
 * thats y did this code
 * after validation
 */
if ($model->hasErrors()) {
    Yii::app()->clientScript->registerScript('focus_onf_field', '
            jQuery("#ContactForm_name").focus();
            dtech.scrolltoSection("contact_us");
        ');
}
?>

<div class="contact_us_part">
    <div class="back_to_up_contact">
        <a href="javascript:void(0)" onclick="dtech.scrolltoTopOfPage()"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/back_to_up_03.jpg" /></a>
    </div>
    <div class="twelve columns">
    	<h2><span>Contact Us</span></h2>
  	</div>
    <div class="clear"></div>
    <span class="flash-message">

        <?php
        if (Yii::app()->user->hasFlash('email_status')):

            echo Yii::app()->user->getFlash('email_status');
        endif;
        ?>
    </span>
    <div class="four columns">
        <div class="left_contact">
            <div class="contact_input">
                <p>Full Name (required)</p>
                <?php echo $form->textField($model, 'name', array("class" => "contact_text")); ?>
            </div>
            <div class="contact_input">
                <p>Your Email (required)</p>
                <?php echo $form->textField($model, 'email', array("class" => "contact_text")); ?>
            </div>
            <div class="contact_input">
                <p>Subject</p>
                <?php echo $form->textField($model, 'subject', array("class" => "contact_text")); ?>
            </div>
            <div class="contact_input">
                <p>Message</p>
                <?php echo $form->textArea($model, 'body', array('cols' => 32, 'rows' => 7)); ?>
            </div>
    
            <?php if (CCaptcha::checkRequirements()): ?>
                <div class="contact_input">
                    <?php echo $form->labelEx($model, 'verifyCode'); ?>
                    <div id="captcha">
                        <?php $this->widget('CCaptcha'); ?>
                        <?php echo $form->textField($model, 'verifyCode'); ?>
                    </div>
    
                    <?php echo $form->error($model, 'verifyCode'); ?>
                </div>
            <?php endif; ?>
            <?php echo CHtml::submitButton('send'); ?>
        </div>
  	</div>
    <div class="seven columns">
        <div class="right_contact">
            <h5>Get in touch</h5>
    		<!--
            <div><a href="#">www.dtechsystems.co.uk</a></div>
 			-->          
            <div> 
                <?php
                echo CHtml::mailto("contact@dtechsystems.co.uk");
                ?>
            </div>
           
            <div><a href="http://www.facebook.com/dtech.co">www.facebook.com/dtech.co</a></div>
           	<!--
            <div>
            	<h6>UK Office:</h6>
                <p>Leyton Business Centre. Unit 17,</p>
                <p>Etloe Road, Leyton London E10 7BT</p>
            </div>
            <div>
            	<h6>Pakistan Office:</h6>
                <p>Office # 321, 602, Siddiq Trade Centre,</p>
                <p>Gulberg 2, Lahore – Pakistan</p>
            </div>
            <div>
            	<h6>Saudi Arabia Office:</h6>
                <p>P.O. Box 22743, Riyadh 11416</p>
                <p>Kingdom of Saudi Arabia</p>
                <p>00966- 11- 4033962</p>
            </div>
            -->
            <div class="social_media_images">
                <div class="tweet_hover">
                    <a href="https://twitter.com/dtechnet"><img 
                            hover ="<?php echo Yii::app()->baseUrl; ?>/frontend/images/tweeter_hover_img_03.png"
                            un-hover ="<?php echo Yii::app()->baseUrl; ?>/frontend/images/tweeter_img_03.png"
                            src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/tweeter_img_03.png"
                            /></a>
                </div>
                <div class="facebook_hover">
                    <a href="https://www.facebook.com/dtech.co" target="_blank">
                        <img 
                            hover ="<?php echo Yii::app()->baseUrl; ?>/frontend/images/facebook_hover_img_03.jpg"
                            un-hover ="<?php echo Yii::app()->baseUrl; ?>/frontend/images/facebook_big_img_03.png"
                            src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/facebook_big_img_03.png" /></a>
                </div>
                <div class="google_hover">
                    <a href="https://plus.google.com/u/3/b/105213190898214474427/105213190898214474427">
                        <img 
                            hover ="<?php echo Yii::app()->baseUrl; ?>/frontend/images/google_hover_img_03.png"
                            un-hover ="<?php echo Yii::app()->baseUrl; ?>/frontend/images/google_img_03.png"
                            src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/google_img_03.png" />
                    </a>
                </div>
                <div class="linkedin_hover">
                    <a href="javascript:void(0)">
                        <img 
                            hover ="<?php echo Yii::app()->baseUrl; ?>/frontend/images/linkedin_hover_img_03.png"
                            un-hover ="<?php echo Yii::app()->baseUrl; ?>/frontend/images/footer_linked_in_03.jpg"
                            src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/footer_linked_in_03.jpg" />
                    </a>
                </div>
            </div>
        </div>
	</div>
</div>

<?php $this->endWidget(); ?>

<?php
if (!$model->hasErrors()) {
    Yii::app()->clientScript->registerScript('capcha', '
            jQuery("#captcha a#yw0_button").trigger("click");
    ');
}
?>