<?php
function dumper($obj)
{
    echo "<pre>",
    htmlspecialchars(dumperGet($obj)),
    "</pre>";
}

function dumperGet($obj) {

}
