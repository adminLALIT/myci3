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
        .error{
            color: red;
        }
    </style>
</head>

<body>

    <!------ Include the above in your HEAD tag ---------->

    <div class="container-fluid">
        <div class="container">
            <div class="formBox">
                <form action="contact" method="post">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>Contact form</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="inputBox ">
                            <div class="inputText">First Name</div>
                            <input type="text" name="fname" class="input" value="<?= set_value('fname'); ?>">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="inputBox">
                            <div class="inputText">Last Name</div>
                            <input type="text" name="lname" class="input">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="inputBox">
                            <div class="inputText">Email</div>
                            <input type="text" name="email" class="input">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="inputBox">
                            <div class="inputText">Mobile</div>
                            <input type="text" name="phone" class="input">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <input type="submit" name="" class="button" value="Send Message">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript">
        $(".input").focus(function() {
            $(this).parent().addClass("focus");
        })
    </script>
</body>

</html>