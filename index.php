<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,
body {
  height: 100%; /* Ensures the parent elements cover full height */
  margin: 0;
  
}
    
        .container{
            display: grid;
            gap: 5px;
            grid-template-areas: "header header"
                                    "nav main"
                                    "footer footer";
        
         grid-template-columns:300px auto;
       
            background-color: #2196F3;
            padding: 5px;
            gap: 5px;
        }
        .container > div{
  background-color: rgba(14, 12, 12, 0.8);
  padding: 100px;
}
        .container > div.header{
            grid-area:header;
        }
        .container > div.nav{
            grid-area:nav;
         

        }
        .container > div.main{
          grid-area:main;
          height: 100vh; /* Full viewport height */
          

        }
        .container > div.footer{
             grid-area:footer;
        }
        .container > div {
  background-color: rgba(255, 255, 255, 0.8);
  padding: 10px;
}
    </style>
</head>
<body>
 <div class="container">
    <div class="header"><h1>Wilfredo Fernandez</h1></div>
    <div class="nav">
        <ul>
            <li>Home</li>
            <li>AboutMe</li>
            <li>Projects</li>
            <li>Contacts</li>
        </ul>
    </div>
    <div class="main">Main</div>
    <div class="footer">Footer</div>
   
 </div>
</body>
</html>