<?php
/**
 * Copyright 2010 - 2013, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2013, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<?php $params = $this->Paginator->params(); ?>
<?php $params['limit'] = 5 ?>
    <ul class="pagination">
            <?php
                echo $this->paginator->prev('&larr;', array(
                    'class' => 'prev',
                    'tag' => 'li',
                    'escape' => false
                ), '<a onclick="return false;">&larr;</a>', array(
                    'class' => 'prev disabled',
                    'tag' => 'li',
                    'escape' => false
                ));
                echo $this->paginator->numbers(array(
                    'separator' => '',
                    'tag' => 'li',
                    'currentClass' => 'active',
                    'currentTag' => 'a',
                    'modulus' => 4,
                    'ellipsis' => '<li class="disabled"><a onclick="return false;">...</a></li>',
                    'first' => 2,
                    'last' => 2
                ));
                echo $this->paginator->next('&rarr;', array(
                    'class' => 'next',
                    'tag' => 'li',
                    'escape' => false
                ), '<a onclick="return false;">&rarr;</a>', array(
                    'class' => 'next disabled',
                    'tag' => 'li',
                    'escape' => false
                )); 
            ?>
</ul>
