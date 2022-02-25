<?php
session_start();
//echo $_SESSION['user_id'];
include 'header.php';
?>
    <div id="slide1" class=" carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#slide1" data-slide-to="0" class="active"></li>
  <li data-target="#slide1" data-slide-to="1"></li>
  <li data-target="#slide1" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="html-website/images/trainer.jpg" class="img-fluid "alt="">
    <div class="absolute-div">
      <div class="carousel-caption">
          <h1 class="quote1">Success starts with self-confidence! COME, JOIN US!!</h1>
      </div>
  </div>
  </div>
  <div class="carousel-item">
    <img src="html-website/images/man3.jpg" class="img-fluid"alt="">
    <div class="absolute-div">
      <div class="carousel-caption">
          <h1 class="quote1">DO your BEST and FORGET the REST</h1>
      </div>
  </div>
  </div>
  <div class="carousel-item">
    <img src="html-website/images/man.jpg" class="img-fluid"alt="">
    <div class="absolute-div">
      <div class="carousel-caption">
          <h1 class="quote1">Don't WISH for it. WORK for it.</h1>
      </div>
  </div>
  </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#slide1" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#slide1" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>

</div>
    
    
    <!-- <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="html-website/images/trainer.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          <h5>
              <a class="btn btn-primary" href="signup.php" role="button">Register!</a>
          </h5>
            <p>Check our Courses and Offers!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="html-website/images/pic10.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="html-website/images/pic4.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>slideshow -->

    <div>
    <article class="naya">
      <h3>Train with us!</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti reprehenderit rem doloribus eos, tempora delectus
        obcaecati distinctio dolores repellendus architecto quod, dicta excepturi nostrum harum incidunt nobis voluptatibus i
        taque temporibus id deserunt ad illum fugiat. Perspiciatis 
        amet sunt delectus deleniti voluptas, reprehenderit distinctio, quas velit tenetur alias ducimus molestias id!
    </p>
  </article>
    </div>

  
  <!-- <div class="naya2">
    <form class="row row-cols-lg-auto g-3 align-items-center">
      <div class="col-8">
        <label class="visually-hidden" for="inlineFormInputGroupUsername"><h4>Enroll to our 30 days free campaign!</h4></label>
        <div class="input-group">
          <input type="text" class="form-control" id="" placeholder="Name">
          <input type="text" class="form-control" id="" placeholder="Email">
        </div>
      </div>
      <div class="col-md-4 call12"><br><br>
        <a href="">
        <h4>Call us NOW!</h4>
        <h4>+358-987654321</h4>
        </a>

        
      </div>
    
      <div class="col-12">
        <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
        <select class="form-select" id="inlineFormSelectPref">
          <option selected>Choose...</option>
          <option value="1">Gym</option>
          <option value="2">Yoga</option>
          <option value="3">Zumpa</option>
        </select>
      </div>
    
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="inlineFormCheck">
          <label class="form-check-label" for="inlineFormCheck">
            Remember me
          </label>
        </div>
      </div>
    
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>form div -->
  <hr>
  <div class = "row">
    <div class="col-md-4">
    <a href="signup.php">
        <h4>Click to Enroll</h4>
        <h6>And enjoy the features!</h6>
        </a>    </div>
    <div class="col-md-4">
      <h4> Check if gym open or not </h4>
      <script>
          let hour = new Date().getHours();
          let greeting;
            if (hour < 22) {
              greeting = "Good day! We are open";
            } else {
              greeting = "Good evening! We are closed";
            }
      </script>
      <button onclick='getElementById("demo").innerHTML= greeting'> Check it</button>
      <p id="demo"></p>
    </div>
    <div class="col-md-4 call12">
        <a href="">
        <h4>Call us NOW!</h4>
        <h4>+358-987654321</h4>
        </a>
    </div>    
    </div>
    <hr>

  
  <div class = "row">
    <div class="col-md-4">
      <article>
        <img src="html-website/images/pic1.jpg" class="img-fluid" alt="">
        <h3>Gym</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis 
            enim hic aliquam nobis optio tenetur, veritatis deleniti harum, 
            quaerat, molestiae expedita necessitatibus aperiam! Unde quidem 
            fugit libero cupiditate pariatur praesentium iste animi eum, suscipit nequ. e
            Minima, similique. Voluptatem neque suscipit atque nostrum beatae 
            <a href="url">Read more...</a>
        </p>
      </article>
    </div>
    <div class="col-md-4">
      <article>
        <img src="html-website/images/pic4.jpg" class="img-fluid" alt="">
        <h3>Yoga</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis 
            enim hic aliquam nobis optio tenetur, veritatis deleniti harum, 
            quaerat, molestiae expedita necessitatibus aperiam! Unde quidem 
            fugit libero cupiditate pariatur praesentium iste animi eum, suscipit nequ. e
            Minima, similique. Voluptatem neque suscipit atque nostrum beatae 
            <a href="url">Read more...</a>

        </p>
      </article>
    </div>
    <div class="col-md-4">
      <article>
        <img src="html-website/images/pic11.jpg" class="img-fluid" alt="">
        <h3>Zumba</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis 
            enim hic aliquam nobis optio tenetur, veritatis deleniti harum, 
            quaerat, molestiae expedita necessitatibus aperiam! Unde quidem 
            fugit libero cupiditate pariatur praesentium iste animi eum, suscipit nequ. e
            Minima, similique. Voluptatem neque suscipit atque nostrum beata
            <a href="url">Read more...</a>
        </p>
      </article>
    </div>
  </div><!--middle section row, 3 columns-->
  
  


<?php
include 'footer.php';
?>
