<!doctype html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <title>Coding Factory</title>
    <style>
    p {
        font-family: "Consolas", monospace;
        font-style: italic;
        font-size: 1.3em;
    }
    </style>
</head>

<body>
    <?php
      $ary = array( "A", "B", "C" );
      for ( $i = 0; $i < count( $ary ); $i = $i + 1 ) {
        ${ "ary_" . $i } = $ary[ $i ];
      }
    ?>
    <p><?php echo $ary_0 ?></p>
    <p><?php echo $ary_1 ?></p>
    <p><?php echo $ary_2 ?></p>
</body>

</html>