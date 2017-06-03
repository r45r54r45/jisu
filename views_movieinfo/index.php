
<?php
include "/views_common/header_without_login.php"
?>
<!--index banner : movie pic -->

  <div class="slider">
    <ul class="slides">
      <li>
        <img src="/logan.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Logan</h3>
          <h5 class="light grey-text text-lighten-3">Summarized info</h5>
        </div>
      </li>

      <li>
        <img src="/logan.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Detailed Info</h3>
          <h5 class="light grey-text text-lighten-3"> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
        </div>
      </li>

    </ul>
  </div>



<!-- Container : Related Posts -->


  <div class="container">
    <div class="section">
      <div class="row center">
          <h5 class="header col s12 light" style="color: black">Related Posts</h5>
      </div>

      



      <!--   Related / Carousel -->  

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









<!--글쓰기 FAB-->
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
include "../views_common/footer.php";
?>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="/js/materialize.min.js"></script>
  <script src="/js/init.js"></script>
    <script>
      
    $(document).ready(function(){
    //init


    $('.modal').modal();
    $('.carousel').carousel();
    $('.slider').slider({full_width: true, interval: 3000});
    });



    $(".button-collapse").sideNav();
    $('.chips').material_chip();
    $('.parallx').parallx();







    </script>