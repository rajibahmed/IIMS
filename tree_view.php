<?php

mysql_connect("localhost","root","");
mysql_select_db("IIMS");
function tree_view($index)
{
    $q=mysql_query("SELECT * FROM stock_group WHERE stock_group_parent_id=$index");
	
    if(!@mysql_num_rows($q))
        return;
    echo '<ul>';
    while($arr=mysql_fetch_assoc($q))
    {
        echo '<li>';
        echo $arr['stock_group_name'];//you can add another output there
        tree_view($arr['stock_group_id']);
        echo '</li>';
    }
    echo '</ul>';
}  
tree_view(0);
?>