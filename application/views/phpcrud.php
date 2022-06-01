<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>
<style>
    body {
        /* background: url(https://picsum.photos/2000/1000); */
        background: gray;
    }

    .change {
        opacity: 20%
    }

    .change:hover {
        opacity: 100%;
    }

    .formbox {
        max-width: 600px;
        margin: 20px auto;
        border-radius: 30px;
        overflow: hidden;
        border: 2px solid wheat;
        text-align: center;
        letter-spacing: 10px;
    }

    .form-header {
        font-size: 40px;
        color: azure;
    }

    h1 {
        margin-top: 10px;
        margin-bottom: 30px;
    }

    .form-header-title {
        font-size: 24px;
        margin: 0;
    }

    .form-group {
        margin-bottom: 15px;

    }

    .form-control {
        display: block;
        width: 50%;
        padding: 10px 10px;
        font-size: 16px;
        line-height: 1.5;
        background: gray;
        border-top: 2px solid wheat;
        border-bottom: 2px solid wheat;
        color: white;
        resize: none;
        outline: none;

    }

    .submit-btn {
        color: gray;
        background: white;
        border-radius: 10px;

    }

    .p {
        margin-bottom: 20px;
    }

    .move {
        margin-left: 204px;

    }

    .move2 {
        margin-left: 328px;

    }

    .move3 {
        margin-left: 0px;

    }

    button {
        border-radius: 30px
    }
</style>

<body>

    <div class="formbox">
        <div class="form-header">
            <h1><i class="fas fa-book-open"></i></h1>
        </div>
        <form action="form-body">
            <div class="form-group">
                <label for="email"><i class="far fa-envelope">帳號</i></label>
                <input type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="username"><i class="fas fa-address-card">姓名</i></label>
                <input type="text" name="username" id="username">
            </div>
            <div class="form-group">
                <label for="Expertise"><i class="fas fa-paperclip"></i>性別</label>
                <input type="radio">男性</button>
                <input type="radio">女性</button>
            </div>
            <div class="form-group">
                <label for="email"><i class="far fa-envelope">生日</i></label>
                <input type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="email"><i class="far fa-envelope">信箱</i></label>
                <input type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="comment"><i class="far fa-calendar">備註</i></label>
                <input type="text" name="remark" id="remark">
            </div>
            <div class="form-group" style="display:flex;justify-content:end;">
                <button type="reset" class="btn btn-outline-light" style="margin-right:20px"><i class="fas fa-paper-plane">RESERT</i></button>
                <button type="button" class="btn btn-outline-light"style="margin-right:20px"><i class="fas fa-paper-plane">SEND</i></button>
            </div>
        </form>
    </div>
    </div>
</body>

</html>