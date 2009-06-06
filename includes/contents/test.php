<?php

mysql_connect("localhost","root","");
mysql_select_db("IIMS");
function tree_view($index)
{
    $q=mysql_query("SELECT * FROM table_name WHERE parent=$index");
    if(!mysql_num_rows($q))
        return;
    echo '<ul>';
    while($arr=mysql_fetch_assoc($q))
    {
        echo '<li>';
        echo $arr['name'];//you can add another output there
        tree_view($arr['id']);
        echo '</li>';
    }
    echo '</ul>';
}  

?>