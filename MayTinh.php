<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="MayTinh.css">
    </head>
    <body>
        <div>
            <p class="text-center txt">Máy tính đơn giản</p>
        </div>
        <form method="post">
            <div> 
                <input type="text" class="input" style="text-align: right">   

            </div>
            <div class="btn-group" role="group" aria-label="Basic outlined example">
                <button onclick="button1()" type="button" name="AC" class="btn btn-outline-primary" style="background-color: rgb(168, 168, 168)">AC</button>
                <button onclick="button2()" type="button" name="+/-" class="btn btn-outline-primary" style="background-color: rgb(168, 168, 168)">DEL</button>
                <button onclick="button('%')" type="button" class="btn btn-outline-primary" style="background-color: rgb(168, 168, 168)">%</button>
                <button onclick="button(':')" type="button" name=":" class="btn btn-outline-primary" style="background-color: rgb(252, 164, 2)">:</button>
            </div>
            <div class="btn-group" role="group" aria-label="Basic outlined example">
                <button onclick="button(7)" type="button" name="7" class="btn btn-outline-primary" style="background-color: rgb(196, 196, 196)">7</button>
                <button onclick="button(8)" type="button" name="8" class="btn btn-outline-primary" style="background-color: rgb(196, 196, 196)">8</button>
                <button onclick="button(9)" type="button" name="9" class="btn btn-outline-primary" style="background-color: rgb(196, 196, 196)">9</button>
                <button onclick="button('x')" type="button" name="X" class="btn btn-outline-primary" style="background-color: rgb(252, 164, 2)">X</button>
               
            </div>
            <div class="btn-group" role="group" aria-label="Basic outlined example">
                <button onclick="button(4)" type="button" name="4" class="btn btn-outline-primary" style="background-color: rgb(196, 196, 196)">4</button>
                <button onclick="button(5)" type="button" name="5" class="btn btn-outline-primary" style="background-color: rgb(196, 196, 196)">5</button>
                <button onclick="button(6)" type="button" name="6" class="btn btn-outline-primary" style="background-color: rgb(196, 196, 196)">6</button>
                <button onclick="button('-')" type="button" name="-" class="btn btn-outline-primary" style="background-color: rgb(252, 164, 2)">-</button>
               
            </div>
            <div class="btn-group" role="group" aria-label="Basic outlined example">
                <button onclick="button(1)" type="button" name="1" class="btn btn-outline-primary" style="background-color: rgb(196, 196, 196)">1</button>
                <button onclick="button(2)" type="button" name="2" class="btn btn-outline-primary" style="background-color: rgb(196, 196, 196)">2</button>
                <button onclick="button(3)" type="button" name="3" class="btn btn-outline-primary" style="background-color: rgb(196, 196, 196)">3</button>
                <button onclick="button('+')" type="button" name="+" class="btn btn-outline-primary" style="background-color: rgb(252, 164, 2)">+</button>
            </div>
            <div class="btn-group" role="group" aria-label="Basic outlined example">
                <button onclick="button(0)" type="button" name="0" class="btn btn-outline-primary" style="width:179px; background-color: rgb(196, 196, 196)">0</button>
                <button onclick="button('.')" type="button" name="." class="btn btn-outline-primary" style="background-color: rgb(196, 196, 196)">.</button>
                <button onclick="equal()" type="button" name="=" class="btn btn-outline-primary" style="background-color: rgb(252, 164, 2)">=</button>
                
            </div>
        </form>
        <script src="MayTinh.js">
        </script>
    </body>
</html>