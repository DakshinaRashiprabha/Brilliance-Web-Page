<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventst</title>
    
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:"times new roman";
            
        }
        body{
            background-position: center;
            background-size: cover;
            background-color: gray;
            min-height: 100vh;
            width:100%;
            
        }
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;  
        }

    
        .form-box{
            position: relative;
            width: 400px;
            height: 550px;
            border:2px solid rgba(255,255,2550.5);
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-box h1{
            color: #fff;
            text-align: center;
            font-size: 32px;
        }
        .form-box .input-box{
            position: relatives;
            margin: 30px;
            width: 310px;
            border-bottom: 2px solid #fff;
        }

        .form-box .input-box input{
            width: 100%;
            
            background: transparent;
            border: none;
            outline: none;
            padding: 0 20px 0 5px;
            color: #fff;
            font-size: 16px;
        } 

        input::placeholder{
            color:#fff;
        }

    </style>
</head>

<body>
    <h3><a href = "http://localhost/Brilliance/contact/Dashboard/dashboard.html" >Back</a></h3>
   
    <div class="container">
        <div class="form-box">
            <form action="test1.php" method="POST" class="form">
                <h1>Events</h1>

                <div class="input-box">
                    <input type="text" placeholder="Full Name" id="fName" name="fName" required><br><br>
                </div>

                <div class="input-box">
                    <input type="text" placeholder="Location" id="loction" name="location" required><br><br>
                </div>

                <div class="input-box">
                    <input type="date" placeholder="Date" id="date" name="date" required> <br><br>
                </div>
                
                <div class="input-box">
                    <input type="time" placeholder="TimeFrom" id="timefrom" name="timefrom" required><br><br>
                </div>

                <div class="input-box">
                    <input type="time" placeholder="Timeto" id="timeto" name="timeto" required><br><br>
                </div>

                
                <a href="http://localhost/Test/test1.php"><button>Submit</button></a>
                
            
                
            </form>
        </div>
    
    </div>
    
</body>
</html>