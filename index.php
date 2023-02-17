<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#efefef]">
    <main class="main mx-auto max-w-[800px] bg-[#fff] p-5" style="">
        <h1 class="w-full text-center">
            Send Mail with PHPMailer by PercyMH
        </h1>
        <hr>
        <form action="" class="form p-2">
            <div class="line py-2">
                <label for="">Email</label>
                <div>
                    <input type="text" placeholder="Enter your Email" class="px-2 py-1 text-[.8rem] rounded w-8/12" style="border: 1px solid #efefef; outline: none;">
                </div>
            </div>
            <div class="line py-2">
                <label for="">Subject</label>
                <div>
                    <input type="text" placeholder="Enter Subject" class="px-2 py-1 text-[.8rem] rounded w-8/12" style="border: 1px solid #efefef; outline: none;">
                </div>
            </div>
            <div class="line py-2">
                <label for="">Body</label>
                <div>
                    <textarea name="" id="" cols="30" rows="10" class="px-2 py-1 text-[.8rem] rounded w-8/12" style="border: 1px solid #efefef; outline: none;" placeholder="Enter your message">
                    </textarea>
                </div>
            </div>
        </form>
    </main>
</body>
</html>