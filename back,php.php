<!DOCTYPE html>
<html>
    <head>
        <title>Control</title>
        <style>
            
             body {background-color: rgba(153, 153, 165, 0.726);}
            
            .button {
              display: inline-block;
              padding: 15px 25px;
              font-size: 24px;
              cursor: pointer;
              text-align: center;
              text-decoration: none;
              outline: none;
              color: rgb(188, 196, 240);
              background-color: #2c4ebd;
              border: none;
              border-radius: 15px;
              box-shadow: 0 9px rgb(226, 218, 189);
            }

            .buttonS {background-color: #f4c836;}
           
            .button:hover {background-color: #aaaaa9}
            
            .button:active {
              background-color: #c3cecb;
              box-shadow: 0 5px rgb(212, 211, 219);
              transform: translateY(4px);
            }

           
            footer{
      background-color: #ffffff;
     
      height: 25em;
      font-size: 20px;}
      .fotterc{
        margin: 0.3em;
        padding: 0.1;
        float: left;
        width: 30%;
        padding: 1px;
        height: 300px; 
        text-align: right;
      }
            
            </style>
            <html>
                <head>
                    <title>Control</title>
                    <body>
                        <center>
                            <input type="range"  min="0" max="100" value="0" id="get1"  onchange="fetch1()"><span id="demo1"></span>
                            <br>
                            <input type="range"  min="0" max="100" value="0" id="get2" onchange="fetch2()"><span id="demo2"></span>
                            <br>
                            <input type="range"  min="0" max="100" value="0" id="get3" onchange="fetch3()"><span id="demo3"></span>
                            <br>
                            <input type="range"  min="0" max="100" value="0" id="get4" onchange="fetch4()"><span id="demo4"></span>
                            <br>
                            <input type="range"  min="0" max="100" value="0" id="get5" onchange="fetch5()"><span id="demo5"></span>
                            <br>
                            <input type="range"  min="0" max="100" value="0" id="get6" onchange="fetch6()"><span id="demo6"></span>
                            <br>	
                            <br>
                            <br>		
                             <button type="submit">Save</button>   
                            <br>	
                            <br>
                            <button type="submit">Running</button>
                            </center>					
                                                
                             <script class="slider1">
                                    
                                    function fetch1(){
                            var slider = document.getElementById("get1");
                            var output = document.getElementById("demo1");
                            output.innerHTML = slider.value;
                            
                            slider.oninput = function() {
                              output.innerHTML = this.value;
                            }
                            }
                                    
                                </script>
                                <script class="slider2">
                                function fetch2(){
                            var slider = document.getElementById("get2");
                            var output = document.getElementById("demo2");
                            output.innerHTML = slider.value;
                            
                            slider.oninput = function() {
                              output.innerHTML = this.value;
                            }
                            }
                            </script>
                            
                               <script class="slider3">
                                function fetch3(){
                            var slider = document.getElementById("get3");
                            var output = document.getElementById("demo3");
                            output.innerHTML = slider.value;
                            
                            slider.oninput = function() {
                              output.innerHTML = this.value;
                            }
                            }
                            </script>
                            
                               <script class="slider4">
                                function fetch4(){
                            var slider = document.getElementById("get4");
                            var output = document.getElementById("demo4");
                            output.innerHTML = slider.value;
                            
                            slider.oninput = function() {
                              output.innerHTML = this.value;
                            }
                            }
                            </script>
                            
                               <script class="slider5">
                                function fetch5(){
                            var slider = document.getElementById("get5");
                            var output = document.getElementById("demo5");
                            output.innerHTML = slider.value;
                            
                            slider.oninput = function() {
                              output.innerHTML = this.value;
                            }
                            }
                            </script>
                            
                               <script class="slider6">
                                function fetch6(){
                            var slider = document.getElementById("get6");
                            var output = document.getElementById("demo6");
                            output.innerHTML = slider.value;
                            
                            slider.oninput = function() {
                              output.innerHTML = this.value;
                            }
                            }
                            </script>
                    
                    </body>
                </head>
            </html>
        <body>

            <form action="MovingControl.php" method="post">

            <footer>     
              
                    <div class ="fotterc">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <input type="button" value="Left" class="button" id="L" >
                    </div>

                    <div class ="fotterc">
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                        <center><input type="button"  value="Forward" class="button" id="F" > </center><br>
                        <br>
                        <br>
                        <br>
                        <center><input type="submit"  value="Stop" class="button buttonS" id="S" > </center><br>
                        <br> 
                        <br>
                        <br>
                       <center><input type="button"  value="Backward" class="button" id="B" > </center>
                   
                    </div>
            
                 <div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    <br>
                        <br>
                    <input type="button" value="Right" class="button buttonR" id="R" >
                </div>
            
            </footer>
        </form>
        </body>
    </head>
</html>