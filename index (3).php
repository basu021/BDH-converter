<html>
 <head> 
     <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"> 
  <title>Number Converter</title> 
</head> 
 <body> 
  <div class="softBar"> 
   <div id="Binary, Decimal and Hex Converter" class="yellow softButton" onclick="selectItem('Binary, Decimal and Hex Converter')"> 
    <i class="fas fa-file-code"></i> 
   </div> 
   <div id="Home" class="green softButton" onclick="selectItem('Home')"> 
    <i class="fas fa-home"></i> 
   </div> 
   <div id="Learn more" class="red softButton" onclick="selectItem('Learn more')"> 
    <i class="fas fa-info-circle"></i> 
   </div> 
   <div id="About" class="pink softButton" onclick="selectItem('About')"> 
    <i class="fab fa-dev"></i> 
   </div> 
   <div id="Share" class="turquoise softButton" onclick="selectItem('Share')"> 
    <i class="fas fa-share-alt"></i> 
   </div> 
  </div> 
  <div class="contentBox"> 
   <h1 id="outputt"></h1> 
  </div> 
  <div class="container"> 
   <div class="section"> 
    <div class="heading"> 
     <h2 class="que">Binary</h2> 
    </div> 
    <div class="demoCard" id="text"> 
     <input type="number" class="input" name="binary" id="binary"> 
    </div> 
    <div class="btnn"> 
     <button class="btn learn-more" id="bToD">To Dec</button> 
     <button class="btn learn-more" id="bToH">To Hex</button> 
    </div> 
   </div> 
   <div class="section"> 
    <div class="heading"> 
     <h2 class="res">Result</h2> 
    </div> 
    <div class="ansCard" id="textans"> 
     <span class="output" id="bOutput"></span> 
    </div> 
   </div> 
  </div> 
  <div class="container"> 
   <div class="section"> 
    <div class="heading"> 
     <h2 class="que">decimal</h2> 
    </div> 
    <div class="demoCard" id="text"> 
     <input type="number" class="input" name="decimal" id="decimal"> 
    </div> 
    <div class="btnn"> 
     <button class="btn learn-more" id="dToB">To Binary</button> 
     <button class="btn learn-more" id="dToH">To Hex</button> 
    </div> 
   </div> 
   <div class="section"> 
    <div class="heading"> 
     <h2 class="res">Result</h2> 
    </div> 
    <div class="ansCard" id="textans"> 
     <span class="output" id="dOutput"></span> 
    </div> 
   </div> 
  </div> 
  <div class="container"> 
   <div class="section"> 
    <div class="heading"> 
     <h2 class="que">hexadecimal</h2> 
    </div> 
    <div class="demoCard" id="text"> 
     <input type="text" class="input" name="hexadecimal" id="hexadecimal"> 
    </div> 
    <div class="btnn"> 
     <button class="btn learn-more" id="hToB">To Binary</button> 
     <button class="btn learn-more" id="hToD">To Dec</button> 
    </div> 
   </div> 
   <div class="section"> 
    <div class="heading"> 
     <h2 class="res">Result</h2> 
    </div> 
    <div class="ansCard" id="textans"> 
     <span class="output" id="hOutput"></span> 
    </div> 
   </div> 
  </div> 
  <script src="script.js"></script>
 </body>
</html>