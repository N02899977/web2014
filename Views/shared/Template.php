<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
        <title>Fitness Tracker Site</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		
    </head>
    <body>
    		<div id="top-nav">
			<? include __DIR__ . '/../../inc/nav.php'; ?>
		</div>
			<? include __DIR__ . '/../' . $view; ?>
    		<div class="container">
        
        	
				
				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" >
				  <div class="modal-dialog">
				    <div class="modal-content">
				    </div>
				  </div>
				</div>
			
        </div>
        
        
        <footer>
            <div class="container">
                <p>
                    &copy; 2014 Heidi Fritz <a href="https://developers.facebook.com/apps/410747215739708/dashboard/"> 
                    							<img id="facebook-page" src="../images/facebooklogo.jpg" class="img-rounded" style="width:40px; height:40px; margin-left: 10px; margin-top: 5px">
                    						</a>
                    						<a href="https://twitter.com/fritzheidi1"> 
                    							<img id="facebook-page" src="../images/twitterbutton.png" class="img-rounded" style="width:40px; height:40px; margin-left: 5px; margin-top: 5px">
                    						</a>
											<a class="twitter-follow-button"
											  href="https://twitter.com/fritzheidi1"
											  data-show-count="false"
											  data-lang="en">
											Follow @fritzheidi1
											</a>
											<a
											  class="fb-like"
											  data-share="true"
											  data-width="450"
											  data-show-faces="false">
											</a>
											
                </p>
                
            </div>
        </footer>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.4.0/holder.js"></script>
    </body>
</html>