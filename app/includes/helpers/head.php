<head>
    <!-- Character set -->
    <meta charset="utf-8">

    <!-- Making IE act like Edge -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Setting the viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>
    <?php
        // IF ON MAIN PAGE
        if (true) {
            echo true ? "Diary | Welcome" : "Diary | Home";
        // IF ON MOOD PAGE
        } else if (false) {
            echo "Diary | Mood";
        }
    ?>
    </title>

    <!-- Page description -->
    <meta name="description"
    <?php
        // IF ON MAIN PAGE
        if (true) {
            echo "content=\"Description\"";
        // IF ON MOOD PAGE
        } else if (false) {
            echo "content=\"Description\"";
        }
    ?>
    >

    <!-- Icon -->
    <link rel="icon" type="assets/image/png" href="favicon.png">

    <!-- Css -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- Scripts -->
    <script src="main.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>
    <!-- Include external CSS. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
 
    <!-- Include Editor style. -->
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/css/froala_style.min.css" rel="stylesheet" type="text/css" />

</head>

