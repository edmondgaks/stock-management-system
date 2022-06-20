<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./outgoing.css">
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap');
*{
    font-family: 'Quicksand', sans-serif;
}
body{
    background-color: dodgerblue;
}
.main{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    background-color: dodgerblue;
}



.main2{
    width: 60%;
    height: 98vh;
    background: #fff;
    /* margin-left: 10rem; */
}

.image{
    margin-top: 200px;
    margin-left: 100px;
}

.intro{
    
    width: 40%;
    margin-left: auto;
    margin-right: auto;
    height: 25vh;
    margin-top: 5%;
}

.forms{
    width: 40%;
    margin-left: auto;
    height: 55vh;
    margin-right: auto;
    margin-top: 2%;
}

.logoImg{
    height: 10vh;
    width: 8vw;
    background-color: #fff;
    border-radius: 50%;
    margin-left: 15%;
}

.logo{
    width: 17vw;
    margin-left: auto;
    margin-right: auto;
    padding-top: 2%;
}

.logo >h3{
    margin-left: 10px;
    font-size: 22px;
    margin-top: -4px;
}

.logodesc{
    margin-left: 10px;
    margin-right: 10px;
}

.logodesc >h4{
    font-weight: normal;
}

.desc{
    display: flex;
    font-size: 20px;
    color:rgb(7, 70, 207); ;
}

.forms{
    display: flex;
    flex-direction: column;
}

.forms >input , select{
background: #fff;
border: 1px solid grey;
height: 7vh;
margin-top: 2vh;
width: 80%;
margin-left: 10%;
margin-right: 10%;
border-radius: 7px;
padding-left: 10px;
font-size: 18px;
color: black;
}


.desc >input{
    margin-top: 5.5%;
    margin-left: 10%;
}

.desc :nth-child(2){
    margin-left: 2%;
}

.desc :nth-child(3){
    margin-left: auto;
    margin-right: 7%;
}

.forms > button{
    background: rgb(7, 70, 207);;
    border: none;
    height: 7vh;
    margin-top: 3vh;
    width: 83%;
    margin-left: 10%;
    margin-right: 10%;
    border-radius: 7px;
    padding-left: 10px;
    font-size: 18px;
    color: white;    
}

.forms >label{
    margin-left: 10%;
    margin-top: 12px;
    font-weight: bold;
    font-size: 24px;
}

    </style>
    <div class="main">
        <div class="main2">
            <div class="logo">
                <h3>Outgoing Registration </h3>
            </div>
            <div class="logodesc">
                <h4>Welcome Back to your Stock Please Enter info for outgoing</h4>
            </div>
            <form action="../../../../jstock/Stock-Management/PHP/outgoing/outgoing.php" method="post">
                <div class="forms">
                    <label for="">Product Id</label>
                    <select name="product_id" id="">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="1">5</option>
                        <option value="1">6</option>
                        <option value="1">7</option>
                    </select>
                    <label for="">Quantity</label>
                    <input type="text" name="" id="" placeholder="Enter The Quantity">
                    <button type="submit">Register Outgoing</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>