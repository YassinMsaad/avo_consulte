<?php 



if (isset($_GET['d'])) {
    
$sum = $_GET['d']+ 5 ;

 	$Listblog = $crud->ShowMoreBlogs($conn, $sum) ; 
}
?>
 
<input type="hidden" name="" value="<?php echo count($Listblog) ?>" id="id">
<?php 
foreach ($Listblog as $key) {

 ?>
                     <article class="blog" >

						<div class="row no-gutters" >
							<div class="col-lg-7">
								<figure>
                            <a href="/المجلة-القانونية/<?php echo $key['url_slug'] ?>/<?php echo $key['id'] ?>/"><img src="https://avoconsulte.com/img/<?php echo $key['image'] ?>" alt="<?php echo $key['titre'] ?>">
                               </a>
								</figure>
							</div>
							<div class="col-lg-5">
								<div class="post_info">
									<small><?php echo $key['temps'] ?></small>
									<h3>
									    
                           <a href="/المجلة-القانونية/<?php echo $key['url_slug'] ?>/<?php echo $key['id'] ?>/">
									    <?php echo $key['titre'] ?></a></h3>
									<p><?php echo $crud-> short_name($key['body'] , 200)  ?></p>
								</div>
							</div>
						</div>
										
					</article>
						<?php } ?>