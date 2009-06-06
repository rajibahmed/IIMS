<?

/*********************************
THIS IS THE PHP_TREEVIEW
Made by Pablo Santiago Sanchez
Copyright Pablo Santiago Sanchez
<phackwer@hotmail.com>
DON'T REMOVE THOSE CREDITS!!!
You may remove any other comment.
*********************************/

/*
Run this script to create the treeview table
You can change it to suit your needs (like adding
types of elements such as files or diferent types
of directories).

#Starts here

CREATE TABLE stock_group (
  stock_group_id int(11) NOT NULL auto_increment,
  stock_group_name text NOT NULL,
  treeview_desc text NOT NULL,
  stock_group_parent_id int(11) NOT NULL default '-1',
  PRIMARY KEY  (stock_group_id)
) TYPE=MyISAM;

INSERT INTO stock_group VALUES (2, 'parent1', '', -1);
INSERT INTO stock_group VALUES (3, 'parent2', '', -1);
INSERT INTO stock_group VALUES (4, 'parent3', '', -1);
INSERT INTO stock_group VALUES (5, 'child1', '', 2);
INSERT INTO stock_group VALUES (6, 'child2', '', 2);
INSERT INTO stock_group VALUES (7, 'grandchild1', '', 5);
INSERT INTO stock_group VALUES (8, 'grandchild2', '', 5);
INSERT INTO stock_group VALUES (9, 'child3', '', 4);
INSERT INTO stock_group VALUES (10, 'child4', '', 4);
INSERT INTO stock_group VALUES (11, 'grandchild3', '', 9);
INSERT INTO stock_group VALUES (12, 'grandgrandchild1', '', 11);
INSERT INTO stock_group VALUES (13, 'grandgrandchild2', '', 11);

#Ends here

Change the variables bellow to fit your system.
I suggest you create a db.inc.php file an include it
instead of edit every page every time you change any
variable.

*/

//Connection to database

    define("PASSWORD","");
    define("HOST","localhost");
    define("USER","root");

    $LINK=mysql_connect(HOST,USER,PASSWORD);
    mysql_select_db("IIMS",$LINK);

//Function used by the other bellow recursively to help to check
//if the folder that`s being opened is son of the one being displayed.

    function checkParents($stock_group_id,$treeview_current,$treeview_parents)
    {
        $sql="select * from stock_group where stock_group_id=".$stock_group_id." order by stock_group_name";
        $rs=mysql_query($sql);
        if (mysql_num_rows($rs)!=0)
        {
            while($rows=mysql_fetch_array($rs))
            {
                  $treeview_parents[]=$rows["stock_group_id"];
                  checkParents($rows["stock_group_parent_id"],$treeview_current,&$treeview_parents);
            }

        }

    }

//Function used to check if the folder that`s being opened
//is son of the one being displayed.

    function openFolder($stock_group_id,$treeview_current)
    {
        checkParents($stock_group_id,$treeview_current,&$treeview_parents);

        if (in_array($treeview_current,$treeview_parents))
        {
            return true;
        }
    }
    
//This was the most difficult of all the functions cause it
//calculates and organize the hierarchy of the opened folders...
//A pain in the ass, literally. I had night mares and woke up
//in the middle of the night because of this son of a b*

    function drawBlanksIntersecs($stock_group_id)
    {
            $sql="select * from stock_group where stock_group_id=".$stock_group_id;
            if ($rs=mysql_query($sql))
               $row=mysql_fetch_array($rs);

            $sql2="select * from stock_group where stock_group_id=".$row["stock_group_parent_id"];
            if ($rs2=mysql_query($sql2))
               $row2=mysql_fetch_array($rs2);
            
            $sql3="select * from stock_group where stock_group_parent_id=".$row2["stock_group_parent_id"]." order by stock_group_name";
            $rs3=mysql_query($sql3);

            $i=0;
            
            if (mysql_query($sql3))
            {
                  while ($row3=mysql_fetch_array($rs3))
                  {

                      $i++;

                      if ($row3["stock_group_id"]==$row["stock_group_parent_id"] && mysql_num_rows($rs3)==$i)
                      {
                           $is_last=1;
                      }
                      else
                      {
                           $is_last=0;
                      }
                  }
            }

            if ($row["stock_group_parent_id"]!=-1)
            {
                  drawBlanksIntersecs($row["stock_group_parent_id"]);
                  
                  if ($is_last==1)
                  {
                      echo "<img src=images/trv_blank.gif height=18 width=18 border=0 vspace=0 hspace=0 align=left>";
                  }
                  else
                  {
                      echo "<img src=images/trv_nointersec.gif height=18 width=18 border=0 vspace=0 hspace=0 align=left>";
                  }
            }

    }

//Function that builds the tree from root to the last opened folder
//I`m very proud of it, `cause it works!!! Don`t care if it is too
//messy or has too many ifs. At least idention is right, so if you
//want go ahead and fix it yourself.

    function buildTreeView($action,$stock_group_id=0,$stock_group_parent_id=-1,$depth=0,$parent_last=0)
    {

        $sql="select * from stock_group where stock_group_parent_id=".$stock_group_parent_id." order by stock_group_name";
        if ($rs=mysql_query($sql))
        {
            $depth++;
            $i=1;
            while ($parent=mysql_fetch_array($rs))
            {
                    echo "<tr valign=top>";
                    echo "<td nowrap>";

                    if ($parent["stock_group_parent_id"]!=-1)
                       drawBlanksIntersecs($parent["stock_group_id"]);

                    $sql2="select * from stock_group where stock_group_parent_id=".$parent["stock_group_id"]." order by stock_group_name";
                    $rs2=mysql_query($sql2);
                    if (mysql_num_rows($rs2)!=0)
                    {
                         if ($action=="expand"&&openFolder($stock_group_id,$parent["stock_group_id"]))
                         {
                               echo "<a href=treeview.php?action=expand&stock_group_id=".$parent["stock_group_parent_id"].">";

                               if (mysql_num_rows($rs)==$i)
                               {
                                   echo "<img src=".$dir."images/trv_intersecminus_end.gif height=18 width=18 border=0 vspace=0 hspace=0 align=left>";
                               }
                               else
                               {
                                   echo "<img src=".$dir."images/trv_intersecminus.gif height=18 width=18 border=0 vspace=0 hspace=0 align=left>";
                               }
                         }
                         else
                         {
                               echo "<a href=treeview.php?action=expand&stock_group_id=".$parent["stock_group_id"].">";

                               if (mysql_num_rows($rs)==$i)
                               {
                                   echo "<img src=".$dir."images/trv_intersecplus_end.gif height=18 width=18 border=0 vspace=0 hspace=0 align=left>";
                               }
                               else
                               {
                                   echo "<img src=".$dir."images/trv_intersecplus.gif height=18 width=18 border=0 vspace=0 hspace=0 align=left>";
                               }
                         }
                    }
                    else
                    {
                         if (mysql_num_rows($rs)==$i)
                         {
                               echo "<img src=images/trv_end.gif height=18 width=18 border=0 vspace=0 hspace=0 align=left>";
                         }
                         else
                         {
                               echo "<img src=images/trv_intersec.gif height=18 width=18 border=0 vspace=0 hspace=0 align=left>";
                         }
                    }

                    if ($action=="expand"&&openFolder($stock_group_id,$parent["stock_group_id"]))
                    {
                         echo "<img src=images/trv_openfolder.gif height=18 width=18 border=0 vspace=0 hspace=0 align=left>";
                    }
                    else
                    {
                         echo "<img src=images/trv_closedfolder.gif height=18 width=18 border=0 vspace=0 hspace=0 align=left>";
                    }
                    echo "</a>";

                    //Here you can change where the link of the folder points too.
                    //You really should to edit it...

                    echo "<a href=main.php?stock_group_id=".$parent["stock_group_id"]." target=treeview_main>";
                    echo "&nbsp;&nbsp;".$parent["stock_group_name"];
                    echo "</td>";
                    echo "</tr>";
                    if ($action=="expand"&&openFolder($stock_group_id,$parent["stock_group_id"]))
                    {
                         buildTreeView($action,$stock_group_id,$parent["stock_group_id"],$depth,$parent_last);
                    }

                    $i++;
            }
        }
    }
    
//Now the old plain and boring HTML stuff...

    echo "

    <html>
    <title>TreeView</title>
    <style>

        a {
                color:#000000;
                font-family:'Tahoma,Arial,Helvetica';
                font-size: 8pt;
                text-decoration:none;
        }

        a:hover {
                color:#0000FF;
                font-family:'Tahoma,Arial,Helvetica';
                font-size: 8pt;
                text-decoration:none;
        }

        .titulo {
                color:#000000;
                font-family:'Tahoma,Arial,Helvetica';
                font-size: 30pt;
                text-decoration:none;
                font-weight:bold;
        }

        p {
                color:#000000;
                font-family:'Tahoma,Arial,Helvetica';
                font-size: 11px;
                text-decoration:none;
        }

        text {
                color:#000000;
                font-family:'Tahoma,Arial,Helvetica';
                font-size: 11px;
                text-decoration:none;
        }

        </style>

        <body bgcolor=#FFFFFF>";

//Building the table for display of the treeview

    echo "<table border=0 cellpadding=0 cellspacing=0 width=100%>";

    echo "<tr>";
    echo "<td valign=top>";
    echo "<p><img src=images/trv_root.gif>";
    echo "&nbsp;&nbsp;<font size=4><b>Root</b></font>";
    echo "</td>";
    echo "</tr>";

    echo "<tr height=3>";
    echo "<td valign=top nowrap>";
    echo "</td>";
    echo "</tr>";

//Calling the function for the treeview.

    buildTreeView($action,$stock_group_id);
    
//Closing everything...

    echo "</table>";
    echo "</body></html>"

?>
