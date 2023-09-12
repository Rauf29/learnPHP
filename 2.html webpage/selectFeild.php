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
                    $fruits = ['banana', 'Apple', 'pineapple', 'guava', 'tomato', 'brenjil', 'licchi'];



                    function addFruits($options, $selectedFruits)
                    {
                        foreach ($options as $option) {
                            $selected = '';
                            if (in_array(strtolower($option), $selectedFruits)) {
                                echo $selected = 'selected';
                            }
                            printf("<option value='%s' %s >%s</option> \n ", strtolower($option), $selected, ucwords($option));
                        }
                    }

                    ?>
                </p>
                <p>
                    <?php
                    $sFruits = filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                    if (isset($_POST['fruits']) && $_POST['fruits'] != '') {
                        printf("You have selected: %s", join(', ', $sFruits));
                    }
                    ?>
                </p>
                <div class="row">
                    <div class="column column-60 column-offset-20">
                        <form action="" method="POST">

                            <label for="fruits">Select Some Fruits</label>
                            <select style="height:250px;" name="fruits[]" id="fruits" multiple>
                                <option value="" disabled selected> Select Some Fruits</option>
                                <option value="mango">Mango</option>
                                <?php addFruits($fruits, $sFruits); ?>
                            </select>
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>