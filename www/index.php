<html lang="en">
    <head>
        <style>

           h1 {
            
            width: 537px;
            height: 111px;
            font-family: 'Arvo';
            font-style: normal;
            font-weight: 400;
            font-size: 100px;
            line-height: 123px;
            color: #998C28;
            text-align: center;
            }
        td {
            padding: 20px;
            color: white;
            text-align: center;
            top: 20%;
            left: 50%;
            transform: translate(45%, -50%);
        }
            body {

            background-color: #225E24; 
            }

            #center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            }

        </style>
         
    <meta charset="UTF-8">
    <title>Logg-inn side</title>
    
</head>

<body>

<div id="center">
<form method="POST" action="">
    <table>
        <tr>
            <h1> logg inn </h1>


            <td> brukernavn:</td>
            <td><input type="text" name="j_username" placeholder="Skriv inn brukernavnet"/></td>
        </tr>
        <tr>
            <td> passord:</td>
            <td><input type="password" name="j_password" placeholder="Skriv inn passord"/></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit"  value="Trykk her for å logge inn" /></td>
        </tr>
    </table>
</form>
</div>
</body>
</html>

            
</body>
</html>
