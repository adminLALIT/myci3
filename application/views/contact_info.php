<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Contact</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .formBox {
            margin-top: 90px;
            padding: 50px;
        }

        .formBox h1 {
            margin: 0;
            padding: 0;
            text-align: center;
            margin-bottom: 50px;
            text-transform: uppercase;
            font-size: 48px;
        }

        .inputBox {
            position: relative;
            box-sizing: border-box;
            margin-bottom: 50px;
        }

        .inputBox .inputText {
            position: absolute;
            font-size: 24px;
            line-height: 50px;
            transition: .5s;
            opacity: .5;
        }

        .inputBox .input {
            position: relative;
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 24px;
            border-bottom: 1px solid rgba(0, 0, 0, .5);

        }

        .focus .inputText {
            transform: translateY(-30px);
            font-size: 18px;
            opacity: 1;
            color: #00bcd4;

        }

        textarea {
            height: 100px !important;
        }

        .button {
            width: 100%;
            height: 50px;
            border: none;
            outline: none;
            background: #03A9F4;
            color: #fff;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>

    <!------ Include the above in your HEAD tag ---------->
    <h2>Contacts Information</h2>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Sno.</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Email Id</th>
                <th scope="col">Phone no.</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($records as $record) : ?>
            <tr>
                <th scope="row"><?= $record->id; ?></th>
                <td><?= $record->firstname; ?></td>
                <td><?= $record->lastname; ?></td>
                <td><?= $record->email; ?></td>
                <td><?= $record->phone; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript">
        $(".input").focus(function() {
            $(this).parent().addClass("focus");
        })
    </script>
</body>

</html>