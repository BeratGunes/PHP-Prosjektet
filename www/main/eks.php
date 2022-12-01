
<html lang="en">
<head>
    <style>
        td {
            padding: 20px;
            color: midnightblue;
            text-align: center;
        }


        body {
            z-index: 10000;
        }

        .imgLogo {

            z-index: 2;
            width: 10%;
        }

        #center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #bg {
            position: fixed;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            z-index: -1;
        }
        #bg img {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            min-width: 50%;
            min-height: 50%;
            opacity: 100%;
            z-index: -1;
        }

        h1 {
            color: midnightblue;
            font-family:Arial-BoldMT, Arial, Arial;
            text-align: center;

        }

    </style>

    <meta charset="UTF-8">
    <title>Logg-inn side</title>
</head>
<body>

<div id="bg">
    <img src="https://images.squarespace-cdn.com/content/v1/5bcf4baf90f904e66e8eb8bf/1583257885452-IQ1Z47PFKCT68ESQMTSR/AMV-web-31-B.jpg?format=2500w" alt="bakgrunnsbilde">
</div>

<img src=https://images.squarespace-cdn.com/content/v1/5bcf4baf90f904e66e8eb8bf/1571139220977-8Y75FILX6E39M4ZH8REW/Logo-eng-web-blue.png?format=1500w" class="imgLogo" alt="logo">
    </div>


<div id="center">
<form method="POST" action="">
    <table>
        <tr>
            <h1> INNLOGGING </h1>


            <td> Ansattnummer:</td>
            <td><input type="text" name="j_username" placeholder="Skriv inn ansattnummer"/></td>
        </tr>
        <tr>
            <td> Passord:</td>
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
