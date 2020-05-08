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

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset=utf-8>
    <title>ققنوس</title>
    <link rel='icon' href='img/icon.webp' type='image/webp'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='description' content="">
    <meta name='authors' content="">

    <script src='/js/jquery-1.11.0-jquery.min.js' type="javascript"></script>
    <script src='/js/jqueryui-1.10.3-jquery-ui.min.js' type="javascript"></script>
    <script src='/js/jqueryui-touch-punch-0.2.2-jquery.ui.touch-punch.min.js' type="javascript"></script>
    <style>
        #sortable {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 100%;
        }
    </style>
    <script type="javascript">
        $(function () {
            $('#sortable').sortable({forceHelperSize: true});
            // $('#sortable').disableSelection();
        });

    </script>
</head>
<body>
<div>
    <ol id="sortable">
        <?php
        $file = 10;
        $latest = 5;

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

        foreach ($numbers as $number) {
            $x =
                "
                    <li class='ui-state-default' style='height: 100%; margin: 0px; border: 0px; padding: 0px'>
                        <img style='width: 100%; margin: 0px; border: 0px; padding: 0px;' src='/img/" . $folder . "/" . $number . ".webp'>
                    </li>
                    ";
            echo $x;
        }
        ?>
    </ol>
</div>
</body>
</html>