<?php if (Yii::app()->user->hasFlash('_success') || Yii::app()->user->hasFlash('_error') || Yii::app()->user->hasFlash('_default')) {

    $message = '';
    $header = '';
    if (Yii::app()->user->hasFlash('_success')) {
        $header = 'Сообщение';
        $theme = 'successMessage';
        $message = Yii::app()->user->getFlash('_success');
    } elseif (Yii::app()->user->hasFlash('_error')) {
        $header = 'Ошибка';
        $theme = 'errorMessage';
        $message = Yii::app()->user->getFlash('_error');
    } else {
        $header = 'Сообщение';
        $theme = 'default';
        $message = Yii::app()->user->getFlash('_default');
    }

    if (!empty($message)) {
        echo '<script type="text/javascript">$.jGrowl("' . $message . '", { header: "' . $header . '", life: 15000, theme: "' . $theme . '" });</script>';
    }

}