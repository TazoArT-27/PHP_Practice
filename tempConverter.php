<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TempConverter</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    h1{
        text-align: center;
        line-height: 20vh;
        color: #6c63ff;
    }
    .main-div{
        width: 100%;
        height: 80vh;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
    .left-side{
        background-color: #dfe6e9;
        border-radius: 15px;
    }
    .left-side img{
        max-width: 700px;
        height: auto; 
    }
    .right-side{
        width: 400px;
        height: 400px;
        background-color: #dfe6e9;
        border-radius: 15px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .input1{
        width: 250px;
        height:40px;
        border: 1px solid #6c63ff;
        border-radius:5px;
        padding: 5px;
        outline: none;

    }
    .selection{
        width: 100%;
        margin: 20px 0px;
    }
    .btn{
        padding: 10px 16px;
        border-radius: 5px;
        outline: none;
        background-color: #6c63ff;
        color: white;
        font-size: 0.9;
        border: none;
    }
    p{
        margin: 40px 0 0 0;
    }
      
    </style>
</head>
<body>
    <h1>Temperature Converter</h1>
    <div class="main-div">
        <div class="left-side">
        <img src="images/girl.png">
        </div>
        <div class="right-side">
           <form method="POST" action="">
              <input type="text" name="converter" placeholder="Enter temp" class="input1">
              <div class="selection">
                <input type="radio" name="units" id="" value="cel">
                <label for="">Cels</label>
                <input type="radio" name="units" value="faren">
                <label for="">Faren</label>
                 

                 
              </div>
              <button type="submit" value="" name="submit" class="btn">Convert Now</button>
           </form>
           <div>
              <p>
              <?php

                 if(isset($_POST['submit'])){
                     $num = $_POST['converter'];
                     $temp = $_POST['units'];
                     if($temp == 'cel'){
                         $result = $num * 9/5+32;
                         echo $result;
                     }else{
                         $result = ($num - 32)*5/9;
                         echo $result;
                     }
                 }

              ?>

              </p>
           </div>
        </div>
    </div>
</body>
</html>