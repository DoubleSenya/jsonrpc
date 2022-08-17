<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Demo page / Демонстрационная страница -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="micro-framework HLEB" />
    <meta name="theme-color" content="#ff786c">
    <link rel="icon" href= "/favicon.ico" type="image/x-icon">
    <style>
        html, body{
            padding:0;
            margin:0;
            width:100%;
            height:100%;
            background-color: white;
            font-family: "PT Sans", "Arial", serif;
        }
        body{
            width:100%;
            height:100%;
            display: flex;
            position: fixed;
            top: 0;
            left: 0;
            align-items: center;
            align-content: center;
            justify-content: center;
            overflow: auto;
        }
        input{
            outline: none;
            height: 50px;
            width: auto;
            border: none;
            font-size: 24px;
            font-weight: 500;
            text-align: center;
        }
    </style>
    <title>HLEB Start Page</title>
</head>
<body>
    <div class="inputs">
        <input id="date-input" readonly placeholder="Date">
        <input id="time-input" readonly placeholder="Time">
    </div>
</body>
</html>