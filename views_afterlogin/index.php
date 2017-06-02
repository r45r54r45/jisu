
<?php
include "./header.php"
?>
<!--index banner 1: Map/Search Bar -->

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container" style="margin-top: 80px">
        
        
        <div class="row center">
          <h5 class="header col s12 light" style="color: black">Now you are at</h5>
        </div>
        <div class="row center" style="width: 70%; margin: auto">
          <nav>
          <form>
          <div class="nav-wrapper">
            <div class = "input-field">
              <input type="search" id="search" placeholder="Yonsei University, Seoul, South Korea">
              <label class="label-icon" for="search"><i class="material-icons">search</i></label>
              <i class="material-icons">close</i>
              
            </div>
          </div>  
          </form>
          </nav>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="/GoogleMap.jpg" alt="Map"></div>
  </div>


<!-- Container 1: Near Posts -->


  <div class="container">
    <div class="section">
      <div class="row center">
          <h5 class="header col s12 light" style="color: black">Near Posts</h5>
      </div>


      <!--   Near Posts / Carousel   -->

      <div class="row">
        
          <div class="carousel">
            <a class="carousel-item" href="#one!"><img src="http://lorempixel.com/250/250/nature/1"></a>
            <a class="carousel-item" href="#two!"><img src="http://lorempixel.com/250/250/nature/2"></a>
            <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/250/250/nature/3"></a>
            <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/250/250/nature/4"></a>
            <a class="carousel-item" href="#five!"><img src="http://lorempixel.com/250/250/nature/5"></a>
          </div>
      </div>

    </div>
  </div>


  <!-- Near Related Movies -->


  <div class="slider">
    <ul class="slides">
      <li>
        <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
        <div class="caption center-align">
          <h3>Movies related to your location</h3>
          <h5 class="light grey-text text-lighten-3">Toy Story</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
        <div class="caption left-align">
          <h3>Movies related to your location</h3>
          <h5 class="light grey-text text-lighten-3">Snow White</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Movies related to your location</h3>
          <h5 class="light grey-text text-lighten-3">Beauty and the Beast</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Mulan</h5>
        </div>
      </li>
    </ul>
  </div>


<!-- movie search -->


  <div class="container" style="padding-top: 100px; padding-bottom: 150px">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          
          <h5 class="header col s12 light" style="color: black">Didn't you find the movie you want among above?</h5>
        </div>
      </div>

        <div class="row" style="width: 70%; margin: auto">
          <nav>
          <form>
          <div class="nav-wrapper">
            <div class = "input-field">
              <input type="search" id="search" placeholder="Search by Movie Name">
              <label class="label-icon" for="search"><i class="material-icons">movie</i></label>
              <i class="material-icons">close</i>
              
            </div>
          </div>  
          </form>
          </nav>
        </div> 
        </div>
      </div>

    </div>
  </div>


  <!--Banner 3-->


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="/background3.jpg" alt="Unsplashed background img 3"></div>
  </div>


<!--글쓰기 fixed button-->
  <div class="fixed-action-btn">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">share</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">dashboard</i></a></li>
      <li><a class="btn-floating green modal-trigger" href="#modal3"><i class="material-icons">library_add</i></a></li>
      
    </ul>
  </div>

<!-- Modal Structure (Posting)-->

        <div id="modal3" class="modal modal-fixed-footer">
            <div class = "modal-content">
                <h4>Posting</h4>
                <div class="row">
                <form class="col s12">

                     <div class="file-field input-field">
                      <div class="btn">
                        <span>File</span>
                        <input type="file">
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                      </div>
                    </div>                   
                                      


                 


                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="textarea" class="materialize-textarea"></textarea>
                            <label for="textarea">Write Text</label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">label</i>
                          <div id="tags" class="chips"></div>
                          <label for="tags">Write tags and hit enter</label>

                        </div>
                      

                    </div>
      

                </form>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                  <i class="material-icons right">send</i>
                </button>               
            </div>
        </div>



<?php
include "./footer.php"
?>

