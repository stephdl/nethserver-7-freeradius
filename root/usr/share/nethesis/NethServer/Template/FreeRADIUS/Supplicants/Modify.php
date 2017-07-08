<?php

/* @var $view \Nethgui\Renderer\WidgetFactoryInterface */
$view->requireFlag($view::INSET_FORM);

if ($view->getModule()->getIdentifier() == 'update') {
    $headerText = $T('Update supplicant `${0}`');
    $keyStyles = $view::STATE_READONLY;
} else {
    $headerText = $T('Create a new supplicant');
    $keyStyles = 0;
}

echo $view->header('key')->setAttribute('template', $headerText);

echo $view->textInput('key', $keyStyles);
echo $view->textInput('username');
echo $view->textInput('password');
echo $view->textInput('Description');

echo $view->buttonList($view::BUTTON_SUBMIT | $view::BUTTON_HELP | $view::BUTTON_CANCEL);
