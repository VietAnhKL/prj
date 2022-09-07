<?php
	include 'menu-navbar.html';
  require 'admin/root/connect.php';
  $sql = "select 
			*
			from news
			
			";
			$result = mysqli_query($conn, $sql);
      $each = mysqli_fetch_array($result);
?>
	

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate text-center mb-5">
        <h1 class="mb-2 bread">Blog Single</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="fa fa-chevron-right"></i></a></span> <span>Blog Single <i class="fa fa-chevron-right"></i></span></p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
 <div class="container">
  <div class="row">
    <div class="col-lg-8 ftco-animate">
      <h2 class="mb-3"><?php echo nl2br($each['title']) ?></h2>
      <p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>
      <p>
        <img src="admin/news/photos/<?php echo $each['photo'] ?>" alt="" class="img-fluid">
      </p>
      <p><?php echo nl2br($each['content']) ?></p>
      <div class="tag-widget post-tag-container mb-5 mt-5">
        <div class="tagcloud">
          <a href="#" class="tag-cloud-link">Food</a>
          <a href="#" class="tag-cloud-link">Wine</a>
          <a href="#" class="tag-cloud-link">Drink</a>
          <a href="#" class="tag-cloud-link">Dish</a>
        </div>
      </div>
      
      <div class="about-author d-flex p-4 bg-light">
        <div class="bio mr-5">
          <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
        </div>
        <div class="desc">
          <h3>George Washington</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
        </div>
      </div>


      <div class="pt-5 mt-5">
        <h3 class="mb-5 h4 font-weight-bold p-4 bg-light">07 Feedbacks</h3>
        <ul class="comment-list">
          <li class="comment">
            <div class="vcard bio">
              <img src="images/person_1.jpg" alt="Image placeholder">
            </div>
            <div class="comment-body">
              <h3>John Doe</h3>
              <div class="meta mb-2">August 3, 2020 at 2:21pm</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
              <p><a href="#" class="reply">Reply</a></p>
            </div>
          </li>

          <li class="comment">
            <div class="vcard bio">
              <img src="images/person_1.jpg" alt="Image placeholder">
            </div>
            <div class="comment-body">
              <h3>John Doe</h3>
              <div class="meta mb-2">August 3, 2020 at 2:21pm</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
              <p><a href="#" class="reply">Reply</a></p>
            </div>

            <ul class="children">
              <li class="comment">
                <div class="vcard bio">
                  <img src="images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>John Doe</h3>
                  <div class="meta mb-2">August 3, 2020 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>


                <ul class="children">
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>John Doe</h3>
                      <div class="meta mb-2">August 3, 2020 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>

                    <ul class="children">
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="images/person_1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>John Doe</h3>
                          <div class="meta mb-2">August 3, 2020 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>

          <li class="comment">
            <div class="vcard bio">
              <img src="images/person_1.jpg" alt="Image placeholder">
            </div>
            <div class="comment-body">
              <h3>John Doe</h3>
              <div class="meta mb-2">August 3, 2020 at 2:21pm</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
              <p><a href="#" class="reply">Reply</a></p>
            </div>
          </li>
        </ul>
        <!-- END comment-list -->
        
        <div class="comment-form-wrap pt-5">
          <h3 class="mb-5 h4 font-weight-bold p-4 bg-light">Leave a comment</h3>
          <form action="#" class="p-4 p-md-5 bg-light">
            <div class="form-group">
              <label for="name">Name *</label>
              <input type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="email">Email *</label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="website">Website</label>
              <input type="url" class="form-control" id="website">
            </div>

            <div class="form-group">
              <label for="message">Message</label>
              <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
            </div>

          </form>
        </div>
      </div>
    </div> <!-- .col-md-8 -->

    <div class="col-lg-4 sidebar ftco-animate">
      <div class="sidebar-box">
        <form action="#" class="search-form">
          <div class="form-group">
            <span class="icon icon-search"></span>
            <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
          </div>
        </form>
      </div>
      <div class="sidebar-box ftco-animate">
       <h3>Category</h3>
       <ul class="categories">
        <li><a href="#">Breakfast <span>(6)</span></a></li>
        <li><a href="#">Lunch <span>(8)</span></a></li>
        <li><a href="#">Dinner <span>(2)</span></a></li>
        <li><a href="#">Desserts <span>(2)</span></a></li>
        <li><a href="#">Drinks <span>(2)</span></a></li>
        <li><a href="#">Wine <span>(2)</span></a></li>
      </ul>
    </div>

    <div class="sidebar-box ftco-animate">
      <h3>Popular Articles</h3>
      <?php
				
					$sql = "select 
					*
					from news
					ORDER BY RAND ( )  
					LIMIT 3
					";
					
					$result = mysqli_query($conn, $sql);
					if (is_array($result) || is_object($result)){
					foreach ($result as $pop)
					{
					?>
      <div class="block-21 mb-4 d-flex">
        <a class="blog-img mr-4" style="background-image: url(admin/news/photos/<?php echo $pop['photo'] ?>);"></a>
        <div class="text">
          <h3 class="heading"><a href="#"><?php echo $pop['title'] ?></a></h3>
          <div class="meta">
            <div><a href="#"><span class="icon-calendar"></span> <?php echo $pop['created_at'] ?></a></div>
            <div><a href="#"><span class="icon-person"></span> <?php echo $pop['author'] ?></a></div>
           
          </div>
        </div>
      </div>
      <?php
          }
        }
      ?>
    </div>

    <div class="sidebar-box ftco-animate">
      <h3>Tag Cloud</h3>
      <ul class="tagcloud m-0 p-0">
        <a href="#" class="tag-cloud-link">Dish</a>
        <a href="#" class="tag-cloud-link">Food</a>
        <a href="#" class="tag-cloud-link">Lunch</a>
        <a href="#" class="tag-cloud-link">Menu</a>
        <a href="#" class="tag-cloud-link">Dessert</a>
        <a href="#" class="tag-cloud-link">Drinks</a>
        <a href="#" class="tag-cloud-link">Sweets</a>
      </ul>
    </div>

    <div class="sidebar-box ftco-animate">
     <h3>Archives</h3>
     <ul class="categories">
       <li><a href="#">January 2020 <span>(20)</span></a></li>
       <li><a href="#">February 2020 <span>(30)</span></a></li>
       <li><a href="#">March 2020 <span>(20)</span></a></li>
       <li><a href="#">April 2020 <span>(6)</span></a></li>
       <li><a href="#">May 2020 <span>(8)</span></a></li>
     </ul>
   </div>


   <div class="sidebar-box ftco-animate">
    <h3>Paragraph</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
  </div>
</div><!-- END COL -->
</div>
</div>
</section>

<?php
  include 'footer.php';
?>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>