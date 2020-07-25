<?php include 'header.php'; ?>
<html>
    <head>
        <title>Chat With Me</title>
        <style>
        body {
            background-color: black;
            color: white;
            font-size: 150%;
            margin:40px auto;
            max-width:650px;
            font-family: Monospace;
        }
        a {
            color: chartreuse;
        }
        pre {
            white-space: pre-wrap;       /* Since CSS 2.1 */
            white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
            white-space: -pre-wrap;      /* Opera 4-6 */
            white-space: -o-pre-wrap;    /* Opera 7 */
            word-wrap: break-word;       /* Internet Explorer 5.5+ */
        }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <center><h1>Chat With Me - ren'php</h1></center>
        <?php include 'content.php' ?>
    </body>
</html>
