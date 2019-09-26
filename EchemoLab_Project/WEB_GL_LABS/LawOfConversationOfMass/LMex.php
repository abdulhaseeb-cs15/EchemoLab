<!DOCTYPE html>
<html lang="en">
<head>
  <title>EcheMoLab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   
   <meta name="keywords" content="footer, links, icons" />
	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
    <script src="TemplateData/UnityProgress.js"></script>  
    <script src="Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/LawOfConversationOfMass.json", {onProgress: UnityProgress});
    </script>
</head>
<body>
<div class="container mt-3" >
 <!-- Navigation -->
      <nav class="navbar navbar-expand-md tm-navbar bg-dark navbar-dark fixed-top" id="tmNav">              
        <div class="container">   
          <div class="tm-next">
              <a class="nav-link " href="../../Practicing.php"><img src="../images/logopng.png" width=200 height=50 ></a>
          </div>             
            
          
          
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link " href="../../Practicing.php">Introduction</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="../../Practicing.php">Experiment</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#foot">Contact Us</a>
              </li>                    
            </ul>
               
        </div>
      </nav><br><br><br><br>
 
  <h2>Law Of Conversation Of Mass</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home"><img src="../images/theory.jpg" width=50 height=50 >Theory</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1"><img src="../images/video.png" width=50 height=50 >Video</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2"><img src="../images/simulate.jpg" width=50 height=50 >Simulator</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu3"><img src="../images/QIcon.png" width=50 height=50 >Viva Voice</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      
      <p><h3>Our Objective</h3>
        To verify the Law of Conservation of Mass during a chemical reaction.<br>
		<h3>The Theory</h3>

What is meant by a chemical reaction?

A chemical reaction is process by which one set of chemical substances is transformed to another. There are different types of chemical reactions such as:
<br><br>Acid-base Reactions
Precipitation Reactions<br>
Synthesis Reactions<br>
Oxidation-Reduction Reactions<br>
Displacement Reactions<br>
Decomposition Reactions  <br><br><br><br>
<img src="../images/law.png" width=300 height=400 >
<br><br>
Substances which chemically react are called reactants and the newly formed substances are called products.<br>
<br><b>A French chemist, Antoine Lavoisier, who is known as the father of modern chemistry, changed chemistry from a qualitative to a quantitative science.</b>
 He proved that the mass of the products in a chemical reaction is equal to the mass of the reactants. There are no more atoms at the end of the chemical reaction than there were at the beginning.

<br><b>The Law of Conservation of Mass states that matter can neither be created nor destroyed in a chemical reaction.</b>  
<br><br><b>Examples:</b><br><br>
Consider the formation of water molecule. Hydrogen combines with oxygen to form  a water molecule.<br><br>
<img src="../images/ex.png" width=400 height=200 >
<br><br><br>
<img src="../images/ex2.png" width=600 height=400 ><br><br>
In this case, the total mass of the reactants = total mass of the products. Also, the number of atoms of hydrogen and oxygen in the reactants side and the products side are equal.

 <h3>Learning Outcomes</h3>
<br>
1) Students understand “The Law of Conservation of Mass”.<br>
2) Students acquire the skill to verify the Law of Conservation of Mass.<br>
3)Students identify the chemicals required for the verification of the Law of Conservation of Mass.<br>
4) Students will be able to do the experiment quicker and more accurately in the real lab after understanding the different steps.<br>
   </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Animated Video </h3><br><br><br>
     <center><iframe width="860" height="515"src="https://www.youtube.com/embed/LSRnocfSLV8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
	 </iframe></center>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Law Of Conversation Of Mass</h3>
	  <div class="contents" style=" height: 800px">
       <div class="webgl-content">
      <div id="gameContainer" style="width: 1067px; height: 568px" ></div>
     <center> <div class="footer">
       
        <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
        <div class="title">Full Screen </div>
      </div></center>
    </div></div>
	<style>
	#menu2 div.webgl-content{
	margin : 350px 0px 0px 0px;	
		
	}
	</style>
    </div>
	<div id="menu3" class="container tab-pane fade"><br>
      
       <h2>Perform Quiz</h2>
       


<div  id ="jb" class="container">
  <div class="jumbotron">
  <h4>1)Which scientist established the Law of Conservation of Mass?	</h4>
  <input type="radio" id="q11" name="q0" value="male">  Joseph Proust
 <br>
  <input type="radio" id="q12" name="q0" value="female">  John Dalton
<br>
  <input type="radio" id="q13" name="q0" value="other"> Antoine Lavoisier
 <br>
  <input type="radio" id="q14" name="q0" value="other"> Albert Einstein
 <br>
</div></div>
<br>

<div  id ="jb" class="container">
  <div class="jumbotron">
  <h4>2)Which one of the following is the correct statement of Law of Conservation of Mass?	</h4>
  <input type="radio" id="q21" name="q1" value="male">Mass can neither created nor destroyed.
<br>
  <input type="radio" id="q22" name="q1" value="female"> Atoms combined in the fixed ratio to form compounds.
 <br>
  <input type="radio" id="q23" name="q1" value="other"> In a reaction, total mass of the reactant is always greater than total mass of the products.
 <br>
  <input type="radio" id="q24" name="q1" value="other"> There is a change in mass when a chemical reaction takes place.
 <br>
</div></div>
<br>
<div  id ="jb" class="container">
  <div class="jumbotron">
  <h4>3)To identify the Law of Conservation of Mass, a student added 10 ml of 5% barium chloride solution into 10 ml of 5% sodium sulphate solution. Which one of the following is the correct observation?</h4>
  <input type="radio" id="q31" name="q2" value="male">A clear solution is formed
<br>
  <input type="radio" id="q32" name="q2" value="female"> The solution turns to red colour
 <br>
  <input type="radio" id="q33" name="q2" value="other"> Yellow precipitate is formed
 <br>
  <input type="radio" id="q34" name="q2" value="other"> White precipitate is formed
 <br>
</div></div><br>

<div  id ="jb" class="container">
  <div class="jumbotron">
  <h4>4)Which one of the following reactions is not suitable in the laboratory to verify the Law of Conservation of Mass?	</h4>
  <input type="radio" id="q41" name="q3" value="male">Mixing HCl and NaOH solution.
<br>
  <input type="radio" id="q42" name="q3" value="female"> Thermal decomposition of ferrous sulphate.
 <br>
  <input type="radio" id="q43" name="q3" value="other"> Mixing copper sulphate and barium chloride solutions.
 <br>
  <input type="radio" id="q44" name="q3" value="other"> Mixing lead nitrate and potassium iodide solutions.
 <br>
</div></div>
<br>
<div  id ="jb" class="container">
  <div class="jumbotron">
  <h4>5)To verify the Law of Conservation of Mass, barium chloride is not available. Which one of the following combinations can a student select to prove the Law?</h4>
  <input type="radio" id="q51" name="q4" value="male">Copper sulphate and Sodium sulphate
<br>
  <input type="radio" id="q52" name="q4" value="female"> Sodium sulphate and sodium chloride
 <br>
  <input type="radio" id="q53" name="q4" value="other"> Copper sulphate and Sodium carbonate
 <br>
  <input type="radio" id="q54" name="q4" value="other"> Sodium sulphate and Sodium carbonate
 <br>
</div></div><br>



  <div  align="right" ><input type="submit" class="btn btn-primary btn-lg" value="Done" onclick="k()" ></div>
<h4> <u>Result in %age: </u></h4><div id="result" name="rslt"></div>
<br><br>
 <div class="card bg-success text-white">
 
    <div class="card-body"><h2> We Need Your Feedback</h2sssss></div>
  </div>
  <br><br>
  <h4>Ratings <i class="fas fa-thumbs-up"></i></h4>
<br>
<div class="rw-ui-container"></div>
<br><br><br>

    </div>
  </div>

</div>
<br><br>
<br><BR><br><br><br><BR><br><br><br>
<script type="text/javascript">(function(d, t, e, m){
    
    // Async Rating-Widget initialization.
    window.RW_Async_Init = function(){
                
        RW.init({
            huid: "438626",
            uid: "e47fefa18435bb21d0ac6355ce446b0c",
            source: "website",
            options: {
                "advanced": {
                    "layout": {
                        "lineHeight": "32px"
                    },
                    "font": {
                        "hover": {
                            "color": "#906461"
                        },
                        "italic": true,
                        "color": "#906461"
                    }
                },
                "size": "medium",
                "label": {
                    "background": "#FFEDA4"
                },
                "style": "oxygen",
                "isDummy": false
            } 
        });
        RW.render();
    };
        // Append Rating-Widget JavaScript library.
    var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
        l = d.location, ck = "Y" + t.getFullYear() + 
        "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
        f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
        a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
    if (d.getElementById(id)) return;              
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = "text/javascript";
    rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
    s.parentNode.insertBefore(rw, s);
    }(document, new Date(), "script", "rating-widget.com/"));</script>
<script>

function k() {
var array=[];
var p=0;
  if (document.getElementById('q11').checked) {
    array[0]="Correct";
    p++;
  }
  else
  {
    array[0]="Wrong";
  }


    if (document.getElementById('q23').checked) {
      array[1]="Correct";
      p++;
    }
    else
    {
      array[1]="Wrong";
    }
      if (document.getElementById('q31').checked) {
        array[2]="Correct";
        p++;
      }
      else
      {
        array[2]="Wrong";
      }
        if (document.getElementById('q44').checked) {
          array[3]="Correct";
          p++;
        }
        else
        {
          array[3]="Wrong";
        }
          if (document.getElementById('q52').checked) {
            array[4]="Correct";
            p++;
          }
          else
          {
            array[4]="Wrong";
          }
            


var result="Your percentage is: "+(p/6)*100;
document.getElementById("result").innerHTML = result;


}



</script>

<footer class="footer-distributed">
<div id = "foot" class="container">
  <div class="jumbotron" > 
    <center><h1>Information</h1>      
    <p>Developed by Aatiqa batool and Abdul Haseeb , Funded By <a href=#iba >IBA university Sukkur</a></p><br>
	 <a href=#e >English Language</a></center>
	<center> <div class="footer-right">

				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>

			</div></center>
  </div>
  </footer>
      <style>
	
	#foot div.jumbotron {
  background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0));
  height: 300px;
  width: 100%;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  -webkit-filter: brightness(100%);
 
}
	</style>
</div>
</body>
</html>