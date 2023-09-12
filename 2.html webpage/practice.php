<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <style>
        div {
            margin-top: 30px;
            margin-left: 40px;
        }
    </style>
</head>

<body>
    <p>
        <?php
        print_r($_REQUEST);

        function isPersonChecked($value)
        {
            if (isset($_REQUEST['persons']) && is_array($_REQUEST['persons']) && in_array($value, $_REQUEST['persons'])) {
                echo 'checked';
            }
        }

        ?>

    </p>
    <div>

        <form action="" method="GET">
            <label for="">Mark Checkbox</label><br />

            <input type="checkbox" name="persons[]" value="rauf" <?php isPersonChecked("alif") ?>>
            <label for="">Alif</label><br />

            <input type="checkbox" name="persons[]" value="rauf" <?php isPersonChecked("rauf") ?>>
            <label for="">Rauf</label><br />

            <input type="checkbox" name="persons[]" value="rahan" <?php isPersonChecked("rahan") ?>>
            <label for="">Rehan</label><br />

            <input type="checkbox" name="persons[]" value="anas" <?php isPersonChecked('anas') ?>>
            <label for="">Anas</label><br />

            <input type="checkbox" name="persons[]" value="rupok" <?php isPersonChecked('rupok') ?>>
            <label for="">Rupok</label><br />

            <input type="checkbox" name="persons[]" value="nur" <?php isPersonChecked('nur') ?>>
            <label for="">Nur</label><br />

            <input type="checkbox" name="persons[]" value="bapon" <?php isPersonChecked('bapon') ?>>
            <label for="">Bapon</label><br />

            <button type="submit">Submit</button>
        </form>


    </div>


</body>

</html>