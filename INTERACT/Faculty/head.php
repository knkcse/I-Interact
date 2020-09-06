
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    iframe{
      height: 500px;
      width: 740px;
      overflow-x: hidden;

    }
    .link2{
    position: relative;
    left: 5px;
    width: 250px;
    color: blue;
    border:2px solid black;

}
  body{
    overflow-x: hidden;
  }
  .left{
      height:500px;
  }
  footer{
    position: relative;
    top:-19px;
  }
  .modal-content{
    border-radius: 10px;
    width: auto;
    height: auto;
  }
  p{
    text-align: center;
    text-shadow: 3px;
  }
  h1{
    text-align: center;
  }
  
  </style>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <a href="index.php"><h2>I-INTERACT</h2></a>
    
    
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right " id="about" >
      <li> <a href="" style="color:orange" data-toggle="modal" data-target="#aboutus">About Us</a>

  <!-- Modal -->
  <div class="modal fade" id="aboutus" >
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><h1>I-Interact</h1></h4>
        </div>
        <div class="modal-body">
          <p>I-Interact : The essence of idle discussion; The embodiment of gyan-sharing. Everything happens over I-Interact.
A platform for both the students and faculty(s) to interact with each other, empower their
knowledge by asking doubts, clarifying doubts, and to participate in debate
sessions and to interact in a private chatbox with the faculty. 
          "Have Fun Sharing"
</p>
<br>
<h3>Team Members</h3>
<hr>
  Vamsi Chaitanya Vanklapati<hr>
  Naveen Kumar Kammari<hr>
  Venu Gajji<hr>
  Venkatesh Batthini<hr>
  Rajendar Eslavath<hr>

        </div>
        
      </div>
    </div>
  </div></li>
        
        <li><a href="" style="color:orange" data-toggle="modal" data-target="#contactus">Contact US</a>
          <!-- Modal -->
  <div class="modal fade" id="contactus" >
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><h1>I-Interact</h1></h4>
        </div>
        <div class="modal-body">
          <p style="color: green">AB-I , 007 <br>I-Interact team</p>
        </div>
        
      </div>
    </div>
  </div>

        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>
