<?php
/**
 * @author Sutharsan Jeganthan <sutharsan@radus28.com>
 * @internal Do not commit with an real project. Only keep for DEV ENV
 */
function vd($data, $exit=true)
{
    echo '<pre>';
    var_dump($data);
    if($exit)
    {
        exit;
    }
}
