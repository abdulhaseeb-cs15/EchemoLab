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
    
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
    <script src="TemplateData/UnityProgress.js"></script>  
    <script src="Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/app.json", {onProgress: UnityProgress});
    </script>
</head>
<body>
<div class="container mt-3" >
 <!-- Navigation -->
      <nav class="navbar navbar-expand-md tm-navbar bg-dark navbar-dark fixed-top" id="tmNav">              
        <div class="container">   
          <div class="tm-next">
              <a href="#slider" class="navbar-brand"><img src="../images/logo3.jpeg" width=200 height=50 ></a>
          </div>             
            
          
          
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link " href="../../Project.php">Introduction</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="../../Project.php">Experiment</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#foot">Contact Us</a>
              </li>                    
            </ul>
               
        </div>
      </nav><br><br><br><br>
 
  <h2>Burning of Magnesium</h2>
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

Burning of Magnesium in Air
<img src="../images/mr.png"  >
Magnesium is an alkaline earth metal with symbol Mg. It is a silvery white metal.
 Magnesium is a highly inflammable metal and it is easy to ignite its powdered form or thin strips. 
 Magnesium burns in air by taking oxygen from air to form magnesium oxide and is basic in nature. 

 
<br>
 <h3>Learning Outcomes</h3>
<br>
1) Students understand the term “Chemical reaction”.<br>
2) Students visualize the different chemical reactions and understand the differences between physical changes and chemical changes.<br>
3) Students identify the products formed in each reaction & conclude that they are chemically different from that of reactants<br>
4) Based on the acquired skills, students should be able to perform a chemical reaction.<br>
   </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Animated Video </h3><br><br><br>
      <center><iframe width="860" height="515" src="https://www.youtube.com/embed/drL2gpIUSLs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
	  </iframe></center>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Determination of Burning of Magnesium</h3>
       <div class="webgl-content">
      <div id="gameContainer" style="width: 1067px; height: 568px" ></div>
     <center> <div class="footer">
       
        <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
        <div class="title">Full Screen </div>
      </div></center>
    </div>
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
  <h4>1) What is your name</h4>
  <input type="radio" id="q11" name="q0" value="male">  Haseeb <br>
  <input type="radio" id="q12" name="q0" value="female">  Lateef<br>
  <input type="radio" id="q13" name="q0" value="other"> Shumaila <br>
  <input type="radio" id="q14" name="q0" value="other"> Nouman <br>
</div></div>
<br>

<div  id ="jb" class="container">
  <div class="jumbotron">
  <h4>2) What is your Father name</h4>
  <input type="radio" id="q21" name="q1" value="male">Haneef<br>
  <input type="radio" id="q22" name="q1" value="female"> Jafar <br>
  <input type="radio" id="q23" name="q1" value="other"> Zaffar <br>
  <input type="radio" id="q24" name="q1" value="other"> Shakeel <br>
</div></div>
<br>
<div  id ="jb" class="container">
  <div class="jumbotron">
  <h4>3) What is your Father name</h4>
  <input type="radio" id="q31" name="q2" value="male">Haneef<br>
  <input type="radio" id="q32" name="q2" value="female"> Jafar <br>
  <input type="radio" id="q33" name="q2" value="other"> Zaffar <br>
  <input type="radio" id="q34" name="q2" value="other"> Shakeel <br>
</div></div><br>

<div  id ="jb" class="container">
  <div class="jumbotron">
  <h4>4) What is your Father name</h4>
  <input type="radio" id="q41" name="q3" value="male">Haneef<br>
  <input type="radio" id="q42" name="q3" value="female"> Jafar <br>
  <input type="radio" id="q43" name="q3" value="other"> Zaffar <br>
  <input type="radio" id="q44" name="q3" value="other"> Shakeel <br>
</div></div>
<br>
<div  id ="jb" class="container">
  <div class="jumbotron">
  <h4>5) What is your Father name</h4>
  <input type="radio" id="q51" name="q4" value="male">Haneef<br>
  <input type="radio" id="q52" name="q4" value="female"> Jafar <br>
  <input type="radio" id="q53" name="q4" value="other"> Zaffar <br>
  <input type="radio" id="q54" name="q4" value="other"> Shakeel <br>
</div></div><br>



  <center><input type="submit" class="btn btn-info" value="Submit Button" onclick="k()" ></center><br>

<div id="result"> Result Would be Shown Here</div>
<br>

    </div>
  </div>

</div>
<br><br>
<br><BR><br><br><br><BR><br><br><br>
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
  margin-top : 400px 
}
	</style>
</div>
</body>
</html>