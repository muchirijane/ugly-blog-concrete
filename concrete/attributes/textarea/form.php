<?php

// switch display type here
if ($akTextareaDisplayMode == 'text' || $akTextareaDisplayMode == '') { ?>

    <?php
    echo $form->textarea(
        $view->controller->field('value'),
        h($value),
        array('rows' => 5)
    );
    ?>

<?php } else {
    $requestValue = $form->getRequestValue($view->controller->field('value'));
    if (is_string($requestValue)) {
        $value = $requestValue;
    }
    
    echo Core::make('editor')->outputSimpleEditor(
        $view->controller->field('value'),
        h($value)
    );
}
