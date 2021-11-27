<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form With Captcha</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .form-btn {
        width: 60%;
        margin: auto;
        text-align: center;
    }

    .form-btn #btn {
        width: 10%;
        margin: 0.5rem auto;
        padding: 0.3rem 0;
        font-size: 25px;
        font-weight: 400;
        color: white;
        background-color: orangered;
        border: none;
        outline: none;
    }

    .form-btn #btn:hover {
        font-size: 20px;
        padding: 0.45rem 0;
        box-shadow: inset 0px 0px 6px rgba(53, 40, 40, 0.4);
    }

    .form-btn .form-status {
        font-size: 34px;
        margin: 2rem auto;
    }

    .timer {
        /* width: 60%; */
        margin: auto;
        margin-bottom: 0;
        position: absolute;
        top: 2%;
        right: 4%;
    }

    .timer p {
        color: red;
        font-size: 3.4rem;
        font-weight: bold;
        text-align: center;
    }

    .form-container {
        /* display: none; */
        position: relative;
        width: 80%;
        margin: 0% auto;
    }

    .form-container h1 {
        text-align: center;
        font-size: 3.4rem;
        font-weight: 500;
    }

    .form-container form {
        width: 55%;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .form-container form label {
        font-size: 28px;
        font-weight: 400;
        text-align: left;
        margin: 0.5rem 0.6rem;
        margin-top: 0.9rem;
        color: rgb(175, 9, 9);
    }

    .form-container form input::-webkit-outer-spin-button,
    .form-container form input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .form-container form input,
    .form-container form textarea {
        width: 200%;
        font-size: 10px;
        padding: 8px;
        border: none;
        outline: none;
        background-color: rgb(248, 237, 237);
    }

    .form-container form div img {
        vertical-align: bottom;
        margin: 0 3rem;
    }

    .form-container form #captcha {
        width: 60%;
    }

    .form-container form input[type=button] {
        width: 60%;
        margin: 1rem auto;
        padding: 0.6rem 0;
        font-size: 30px;
        font-weight: 500;
        color: white;
        background-color: orangered;
        border: none;
        outline: none;
        /* transition: 0.2s ease-in-out; */
    }

    .form-container form input[type=button]:hover {
        font-size: 19px;
        padding: 0.35rem 0;
        box-shadow: inset 0px 0px 6px rgba(0, 0, 0, 0.6);
    }
    </style>

</head>

<body>
    <div class="form-container">
        <h1>Form</h1>
        <div class="timer">
        </div>
        <form>
            <label for="name">*Name :</label>
            <input type="text" name="name" id="name" placeholder="Enter Your name here"></input>

            <label for="dob">*Date Of Birth :</label>
            <input type="date" name="dob" id="dob"></input>

            <label for="email">*Email :</label>
            <input type="email" name="email" id="email" placeholder="Enter Your email here"></input>

            <label for="about">*About Yourself :</label>
            <textarea type="text" name="about" id="about" placeholder="Tell us something about Yourself"></textarea>

            <label for="captcha">*Captcha :</label>
            <div>
                <input type="number" name="captcha" id="captcha"></input>
                <img src="captcha.php" alt="captcha_code">
            </div>

            <input type="button" id="submit-btn" value="Submit"></input>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function() {
        $('#submit-btn').click(function() {
            let name = $('#name').val();
            let dob = $('#dob').val();
            let email = $('#email').val();
            let about = $('#about').val();
            let captcha = $('#captcha').val();

            let showPara = $(document.createElement('p'));
            showPara.css({
                fontSize: "15px",
                color: "red",
                margin: "0.7rem",
            });

            if (name == "" || dob == "" || email == "" || about == "" || captcha == "") {
                showPara.html("Fields should not be Empty");
                showPara.appendTo('.form-container form');

                setTimeout(function() {
                    showPara.hide();
                }, 3000);
            } else {
                $.ajax({
                    url: 'form.php',
                    method: 'POST',
                    data: {
                        name: name,
                        dob: dob,
                        email: email,
                        about: about,
                        captcha: captcha
                    },
                    success: function(data) {
                        // console.log(data);
                        if (data == "Form Submitted successfully") {
                            showPara.css({
                                fontSize: '20px',
                                color: 'green'
                            });

                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        }
                        showPara.html(data);
                        showPara.appendTo('.form-container form');

                        setTimeout(function() {
                            showPara.hide();
                            header("location:receipt.php");
                        }, 3000);
                    }
                });

            }   

        });
    });
    </script>

</body>

</html>