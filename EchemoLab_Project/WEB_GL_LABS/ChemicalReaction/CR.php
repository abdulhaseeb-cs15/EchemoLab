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
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   <meta name="keywords" content="footer, links, icons" />
	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	
    
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
    <script src="TemplateData/UnityProgress.js"></script>  
    <script src="Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/ChemicalReaction.json", {onProgress: UnityProgress});
    </script>
</head>
<body>
<div class="container mt-3" >
 <!-- Navigation -->
      <nav class="navbar navbar-expand-md tm-navbar bg-dark navbar-dark fixed-top" id="tmNav">              
        <div class="container">   
          <div class="tm-next">
              <a class="nav-link " href="../../Practicing.php">><img src="../images/logopng.png" width=200 height=50 ></a>
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
 
  <h2>Heating of CuSo4 </h2>
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
        To carry out the Sodium sulphate with barium chloride in the form of their solutions in water and classify them as Physical or Chemical changes.<br>
		<h3>The Theory</h3>

What is a chemical change?

In a chemical change, chemical reaction takes place and the substances undergo a change in their state.  
During chemical reactions, one substance reacts with another to form a new substance. The chemical composition of the new
 substance is different from that of the reacting species.  Due to a chemical change, the chemical properties of matter also 
 change. That means the product is entirely different from either of the reactants. Some chemical reactions may be either
 exothermic or endothermic in nature.
 <br><center><img src="../images/Cm.png" width=500 height=300 ></center><br><br>

What are exothermic and endothermic reactions?<br>
<br>In endothermic reactions, a substance absorbs energy in the form of heat and undergoes a chemical reaction. An example is the heat energy absorbed during a chemical change involved in cooking, like baking a cake.

<br><br>In exothermic reactions, heat energy is released. Explosion of fireworks is an example of exothermic chemical change.
 The explosion releases energy in the form of light.:</b> Types of molecules in the liquid affect the boiling point of the 
 liquid. If the force of attraction between the molecules is relatively strong, the boiling point will be relatively high. 
 If the force of attraction between molecules is relatively weak, the boiling point will be relatively low.
   
<br><br>Do you know what a photochemical reaction is?<br><br>
Some chemical reactions do not take place in the dark, but take place only in the presence of sunlight or other radiations. Such reactions are called photochemical reactions. The most commonly known example is photosynthesis, in which plants convert 
carbon dioxide and water into sugars using energy from sunlight  and produce oxygen as a side product.
<br>A chemical change changes the identity or property of a substance and may or may not be reversed.<br><br><br>
 <h3>Learning Outcomes</h3>
<br>
1) Students understand the term “Chemical reaction”.<br>
2) Students visualize the different chemical reactions and understand the differences between physical changes and chemical changes.<br>
3) Students identify the products formed in each reaction & conclude that they are chemically different from that of reactants<br>
4) Based on the acquired skills, students should be able to perform a chemical reaction.<br>
   </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Animated Video </h3><br><br><br>
      <center><iframe width="860" height="515" src="https://www.youtube.com/embed/aqVNKyu_XBE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
	  </iframe></center>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Determination of Heating of CuSo4 </h3>
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
  <h4>1)Barium sulphate is:	</h4>
  <input type="radio" id="q11" name="q0" value="male">Soluble in water.<br>
  <input type="radio" id="q12" name="q0" value="female">Partially soluble in water.<br>
  <input type="radio" id="q13" name="q0" value="other"> Insoluble in water. <br>
  <input type="radio" id="q14" name="q0" value="other"> A gas at room temperature.
<br>
</div></div>
<br>

<div  id ="jb" class="container">
  <div class="jumbotron">
  <h4>2)Which product is formed when magnesium burns in air?	</h4>
  <input type="radio" id="q21" name="q1" value="male">MgCO<sub>3</sub><br>
  <input type="radio" id="q22" name="q1" value="female">MgO<br>
  <input type="radio" id="q23" name="q1" value="other"> Mg(OH)<sub>2</sub>
<br>
  <input type="radio" id="q24" name="q1" value="other"> MgH<sub>2</sub>
 <br>
</div></div>
<br>
<div  id ="jb" class="container">
  <div class="jumbotron">
  <h4>3)Why do copper sulphate crystals change colour from blue to white on heating?	</h4>
  <input type="radio" id="q31" name="q2" value="male">Due to hydration
<br>
  <input type="radio" id="q32" name="q2" value="female"> Due to hydrogenation
 <br>
  <input type="radio" id="q33" name="q2" value="other"> Due to dehydrogenation
 <br>
  <input type="radio" id="q34" name="q2" value="other"> Due to dehydration
 <br>
</div></div><br>

<div  id ="jb" class="container">
  <div class="jumbotron">
  <h4>4)Barium sulphate is:	</h4>
  <input type="radio" id="q41" name="q3" value="male">Soluble in water.
<br>
  <input type="radio" id="q42" name="q3" value="female"> Partially soluble in water.
 <br>
  <input type="radio" id="q43" name="q3" value="other"> Insoluble in water.
 <br>
  <input type="radio" id="q44" name="q3" value="other"> A gas at room temperature.
 <br>
</div></div>
<br>
<div  id ="jb" class="container">
  <div class="jumbotron">
  <h4>5)When will we observe a precipitate to occur in the solution?	</h4>
  <input type="radio" id="q51" name="q4" value="male">Barium chloride is added to sodium sulphate.
<br>
  <input type="radio" id="q52" name="q4" value="female"> Barium chloride is added to sodium chloride.
 <br>
  <input type="radio" id="q53" name="q4" value="other"> Sodium sulphate is added to sodium chloride.
 <br>
  <input type="radio" id="q54" name="q4" value="other"> Hydrochloric acid is added to barium chloride.
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