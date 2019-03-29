<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/https:/github.com/zephmonette/Assignment2/css/list.css">
        <script src="/https:/github.com/zephmonette/Assignment2/js/list.js"></script>
         <title>List</title>
         <meta charset="UTF-8"> 
    </head>
    <body>
        <!--loading gif sourced from https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif-->
        <img src="/https:/github.com/zephmonette/Assignment2/data/loadgif.gif" id = "preLoad"></img>
        <div id = "logoContainer" class = "postLoad">
        </div>
        <div id = "searchBox" class = "postLoad">
            <form action = "php shit goes here later">
            <input type="text" placeholder="Filter..." name="filter">
            <button type="submit">Go</button>
            </form>
            </div>
            <ul id = "itemList" class = "postLoad">
                </ul>
    </body>
</html>