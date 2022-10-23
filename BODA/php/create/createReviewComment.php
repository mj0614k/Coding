<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE myReviewComment (";
    $sql .= "myReviewCommentID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "myMemberID int(10) unsigned NOT NULL,";
    $sql .= "myReviewID int(10) unsigned NOT NULL,";
    $sql .= "CommentMsg varchar(255) NOT NULL,";
    $sql .= "CommentDelete int(10) NOT NULL,";
    $sql .= "CommentregTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (myReviewCommentID)";
    $sql .= ")charset=utf8;";

    $connect -> query($sql);

?>