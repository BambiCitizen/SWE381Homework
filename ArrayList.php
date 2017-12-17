

<html>
<head>
    <meta charset="utf-8">
    <title>Two Kind of Array Lists</title>
    <style type = "text/css">
        p {
            margin : 0;
        }
        .head {
            margin-top: 10px;
            font-weight: bold;
        }

    </style>
</head>
    <body>
    <!-- The first Array by Abdulaziz alotaibi -->

    <?php
        print("<p class = 'head'> Creating the first array </p>");
        $first[0] = "zero";
        $first[1] = "one";
        $first[2] = "two";
        $first[3] = "three";
        for($i = 0; $i<count($first); ++$i)
        print("<p>Element $i is $first[$i] </p>");


        // The second Array By Abdulaziz Alrowaished

        print("<p class='head'>Creating a Second Array</p>")
        $second=array("zero","one","two","three");
        for($i=0;i<count($second);++$i)
            print("Element $i is $second[$i]</p>")

    ?>


    </body>






</html>