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
                <pre>
        <?php
        print_r($_POST);
        print_r($_FILES);

        $allowedTypes = [
            'image/png',
            'image/jpg',
            'image/jpeg'
        ];
        if ($_FILES['photo']) {
            $countFile = count($_FILES['photo']['name']);
            for ($i = 0; $i < $countFile; $i++) {
                if (in_array($_FILES['photo']['type'][$i], $allowedTypes) != false && $_FILES['photo']['size'][$i] < 5 * 1024 * 1024) {
                    move_uploaded_file($_FILES['photo']['tmp_name'][$i], "files/" . $_FILES['photo']['name'][$i]);
                }
            }
        }
        ?>


               </pre>
                <div class="row">
                    <div class="column column-60 column-offset-20">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" id="fname">

                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" id="lname">

                            <label for="photo">Photo</label>
                            <input type="file" name="photo[]" id="photo">
                            <input type="file" name="photo[]" id="photo">
                            <input type="file" name="photo[]" id="photo">

                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>