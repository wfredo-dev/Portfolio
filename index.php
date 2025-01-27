<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            scroll-behavior: smooth;
            box-sizing: border-box;
            text-decoration: none;
            border: none;
            outline: none;  
            font-family: 'Courier New', Courier, monospace;
        }

        html,body {
            height: 100%; /* Ensures the parent elements cover full height */
            margin: 0;
            color:var(--text-color);
            background-color: var(--bg-color);
  
        }
        header{

        }
        section{
        display: block;
        unicode-bidi: isolate;
        }
        :root{
        --bg-color:#fff;
        --snd-bg-color:#d5fdf9;
        --text-color:#000;
        --main-color:#007f73;
        }
        .home{
        display: flex;
        justify-content: center;
        align-items: center;
        }
        .aboutme{
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: var(--main-color);
        }
        .projects{
        display: flex;
       
 
        }
        .contacts{
        background-color: var(--main-color);
        display: flex;
        justify-content: center;
        align-items: center;
         }
        section{
        min-height: 100vh;
        }
        header{
            width: 100%;
            background-color: var(--main-color);
            position: fixed;
            right: 0;
            top: 0;
            z-index: 1000;
            display:flex;
            justify-content: space-between;
            align-items: center;

        }
        .header{
            padding: 2rem 3%;
        }
        .navbar a{
            margin-left: 4rem;
        
        }
 
    </style>
</head>
<body>
 <div class="container">

    <header class="header" id="header">
        <a href="#" class="logo" id="logo">Logo</a>
        <nav class="navbar" id="navbar">

<a href="#home">Home</a>
<a href="#aboutme">Aboutme</a>
<a href="#projects">Projects</a>
<a href="#contacts">Contacts</a>

</nav>
    </header>

    <section class="home" id="home">
HOME
    </section>
    <section class="aboutme" id="aboutme">
ABOUT ME
    </section>
    <section class="projects" id="projects">
PROJECTs
    </section>
    <section class="contacts" id="contacts">
CONTACTS
    </section>

   
 </div>
</body>
</html>