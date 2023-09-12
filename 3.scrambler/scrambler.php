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

        #data {
            width: 100%;
            height: 160%;
        }

        #result {
            width: 100%;
            height: 160%;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <p>

                    <?php
                    include_once "scramblerFunction.php";

                    $task = 'encode';
                    if (isset($_GET['task']) && $_GET['task'] != '') {
                        $task = $_GET['task'];
                    }
                    $key = 'abcdefghijklmnopqrstuvwxyz1234567890';
                    if ('key' == $task) {
                        $key_original = str_split($key);
                        shuffle($key_original);
                        $key = join('', $key_original);
                    } elseif (isset($_POST['key']) && $_POST['key']  != '') {
                        $key = $_POST['key'];
                    }

                    ?>
                </p>
                <h2>Data Scrambler</h2>
                <p>Use this application to scramble your data</p>
                <p>
                    <a href="scrambler.php?task=encode">Encode</a> |
                    <a href="scrambler.php?task=decode">Decode</a> |
                    <a href="scrambler.php?task=key">Generate Key</a>

                </p>

                <div class="row">
                    <div class="column column-60 column-offset-20">
                        <form action="scrambler.php" method="POST">
                            <label for="key">Key</label>
                            <input type="text" name="key" id="key" <?php displayKey($key) ?>>

                            <label for="data">Data</label>
                            <textarea name="data" id="data"></textarea>

                            <label for="result">Result</label>
                            <textarea name="result" id="result"></textarea>
                            <button type="submit">Do It For Me</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>