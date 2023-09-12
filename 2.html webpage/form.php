<?php
header('X-XSS-Protection:0'); // protection for unusel submit from third party
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.min.css">
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Our First Form</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas suscipit earum impedit facilis itaque ab?</p>

                <p>
                    <?php
                    $fname = '';
                    $lname = '';
                    $checked = '';
                    ?>

                    <?php if (isset($_REQUEST['cb1']) && $_REQUEST['cb1'] == 1) {
                        $checked = 'checked';
                    }
                    ?>
                    <?php if (isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) {
                        //$fname = htmlspecialchars($_REQUEST['fname']);
                        $fname = filter_input(INPUT_GET, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    } // $_REQUEST for accept get and post both 
                    ?>
                    <?php if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) {
                        // $lname = htmlspecialchars($_REQUEST['lname']);
                        $lname = filter_input(INPUT_GET, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    } ?>

                    <?php
                    function isFruitsChecked($value)
                    {
                        if (isset($_REQUEST['fruits']) && is_array($_REQUEST['fruits']) && in_array($value, $_REQUEST['fruits'])) {
                            echo 'checked';
                        }
                    }
                    ?>
                </p>
                <p>
                    First Name: <?php echo $fname; ?> <br />
                    Last Name: <?php echo $lname; ?> <br>

                <div class="row">
                    <div class="column column-60 column-offset-20">
                        <form action="" method="GET">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">

                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">

                            <div>
                                <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $checked ?>>
                                <label for="cb1" class="bable-inli">Some Checkbox</label>
                            </div>
                            <label class="label">Select Some Fruits</label>

                            <input type="checkbox" name="fruits[]" value="orange" <?php isFruitsChecked('orange'); ?>>
                            <label class="label-inline">Orange</label><br />
                            <input type="checkbox" name="fruits[]" value="mango" <?php isFruitsChecked('mango'); ?>>
                            <label class="label-inline">Mango</label><br />
                            <input type="checkbox" name="fruits[]" value="banana" <?php isFruitsChecked('banana'); ?>>
                            <label class="label-inline">Banana</label><br />
                            <input type="checkbox" name="fruits[]" value="lemon" <?php isFruitsChecked('lemon'); ?>>
                            <label class="label-inline">Lemon</label><br />

                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>