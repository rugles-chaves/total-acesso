<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* 


{
  box-sizing: border-box;
}


ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
}
body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
  background-color: #CCEEFF;
  padding: 1px;
  text-align: center;
  font-size: 20px;
  color: black;
}


/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: center;
  padding: auto;
  width: auto;
  background-color: #f1f1f1;
  height: auto; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

li {
  display: inline;
}

/* Style the footer */
footer {
  
  background-color: #FF0000;
  padding: auto;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}

div.figure {
  float: left;
  width: auto;
  border: thin silver solid;
  margin: 6em;
  padding: 0.5em;
  text-align: center;
  font-style: italic;
  font-size: smaller;
  text-indent: 0;
}
img.scaled {
  width: 200%;
}
</style>
</head>
<body>
<header>

  <img src="./img/totalseg.png"  width=auto height=100>

</header>


    <ul>
      <li><a href="#">London</a></li>
      <li><a href="#">Paris</a></li>
      <li><a href="#">Tokyo</a></li>
    </ul>
  

            <article>
            
            <form action="#">
                    <fieldset>
                    <div class=figure>
                    <p><img src="../fotos/teste.jpg"
                        width="300" height="500"
                        alt="Torre Eiffel">
                    <p>Miniatura da 
                        torre Eiffel no 
                        Parque Mini-France
                    </div>

                    <div class=figure>
                    <p><img src="../fotos/teste.jpg"
                        width="300" height="500"
                        alt="Torre Eiffel">
                    <p>Miniatura da 
                        torre Eiffel no 
                        Parque Mini-France
                    </div>

                    <div class=figure>
                    <p><img src="../fotos/teste.jpg"
                        width="300" height="500"
                        alt="Torre Eiffel">
                    <p>Miniatura da 
                        torre Eiffel no 
                        Parque Mini-France
                    </div>
                    </fieldset>
            </form>
            
            </article>


<footer>
<b>Totalseg Acesso</b>
</footer>

</body>
</html>