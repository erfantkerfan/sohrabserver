<!DOCTYPE html>
<!--
███████╗██████╗ ███████╗ █████╗ ███╗   ██╗     ██████╗ ██╗  ██╗ ██████╗ ██╗     ██╗███████╗ █████╗ ██████╗ ███████╗
██╔════╝██╔══██╗██╔════╝██╔══██╗████╗  ██║    ██╔════╝ ██║  ██║██╔═══██╗██║     ██║╚══███╔╝██╔══██╗██╔══██╗██╔════╝
█████╗  ██████╔╝█████╗  ███████║██╔██╗ ██║    ██║  ███╗███████║██║   ██║██║     ██║  ███╔╝ ███████║██║  ██║█████╗
██╔══╝  ██╔══██╗██╔══╝  ██╔══██║██║╚██╗██║    ██║   ██║██╔══██║██║   ██║██║     ██║ ███╔╝  ██╔══██║██║  ██║██╔══╝
███████╗██║  ██║██║     ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║╚██████╔╝███████╗██║███████╗██║  ██║██████╔╝███████╗
╚══════╝╚═╝  ╚═╝╚═╝     ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝ ╚═════╝ ╚══════╝╚═╝╚══════╝╚═╝  ╚═╝╚═════╝ ╚══════╝
Erfan Gholizade
https://github.com/erfantkerfan

-->
<?php
$file = 10;
$latest = 6;

$folder = isset($_GET["week"]) ? str_pad($_GET["week"], 2, "0", STR_PAD_LEFT) : str_pad($latest, 2, "0", STR_PAD_LEFT);
if ($folder > $latest) {
    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
    die();
}

$numbers = range(1, $file);
$numbers = array_map(function ($item) {
    return str_pad($item, 2, "0", STR_PAD_LEFT);
}, $numbers);
shuffle($numbers);
?>
<html lang='en'>
<head>
    <meta charset=utf-8>
    <title>ققنوس</title>
    <link rel='icon' href='img/icon.webp' type='image/webp'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='description' content="> <meta name='authors content=">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/jqueryui-touch-punch-0.2.2-jquery.ui.touch-punch.min.js"></script>

    <script>
        $(function () {
            $("#sortable").sortable();
            $("#sortable").disableSelection();
        });
    </script>
    <style>
        #sortable {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        #sortable li {
            height: 100%;
            margin: 0px;
            border: 0px;
            padding: 0px
        }

        #sortable li img {
            width: 100%;
            margin: 0px;
            border: 0px;
            padding: 0px;
        }
    </style>
</head>
<body>
<div class='container'>

    <div>
        <ul id="sortable">
            <?php
            foreach ($numbers as $number) {
                $x =
                    "
                    <li class='ui-state-default'>
                        <img src='/img/" . $folder . "/" . $number . ".webp'>
                    </li>
                    ";
                echo $x;
            }
            ?>
        </ul>
    </div>
</div>
</body>
</html>