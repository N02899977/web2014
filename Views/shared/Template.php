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
                    by Heidi Fritz
                </p>
            </div>
        </footer>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.4.0/holder.js"></script>
    </body>
</html>