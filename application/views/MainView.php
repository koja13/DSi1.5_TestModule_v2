

<script src="<?php echo base_url('assets/countdownTimer/countdown/jquery.countdown.ReadMode.js')?>"></script>
<script src="<?php echo base_url('assets/countdownTimer/js/ReadModeCountdownScript.js')?>"></script>

<div id='navigationDiv'>
<span id="lessionNumberSpan1">
	<span id="lessionNumberSpan2">
		
	</span>  of 10
</span>
<nav> <?php /*echo anchor('UserController/startQuiz', 'Start test', array('id'=>'startTest') ) . " | "; */if($this->session->userdata('account_type') =="f") {echo anchor('/UserController/registerFBUser', 'Register') . " | "; } echo anchor('UserController/logout', 'Logout', array('class'=>'focus') ); ?> </nav>
</div>

<!------------------------- mainDiv, centralni div u koji se ucitava tekst ------------------------->
<div id='mainDiv'>

	<script>
		// slanje informacije o akciji poktretanja sistema za ucenje
		sendUserActionsLessions(currentLessionNumber, "start_dsi", null);

		getQuestions();
	</script>

	 	<!------------------------- tabs, div koje ce da sadrzi tabove (divove)  ------------------------->
        <div id="tabs">
			
	    	<ul>
	        		<li><a href="#fragment-1">1</a></li><li><a href="#fragment-2">2</a></li>
	        		<li><a href="#fragment-3">3</a></li><li><a href="#fragment-4">4</a></li>
	        		<li><a href="#fragment-5">5</a></li><li><a href="#fragment-6">6</a></li>

	    	</ul>
	
        	<div id="fragment-1" class="ui-tabs-panel">
	        	<div id="lessionDiv1" class="lessionDiv"></div>
        	</div>
        	
        	<div id="fragment-2" class="ui-tabs-panel ui-tabs-hide">
                <div id="lessionDiv2" class="lessionDiv"></div>      
			</div>
            
        	<div id="fragment-3" class="ui-tabs-panel ui-tabs-hide">
        		<div id="lessionDiv3" class="lessionDiv"></div>
        		<div id="quizDiv1" class="quizDiv">
        		<?php

					// ucitavanje pitanja na stranu iz promenljive ($questions) dobijene od servera
				/*	echo "<script> var numberOfQuestions = " . count($questions) . "; </script>";
				
					for ($i = 1; $i <=3; $i++)
					{
						echo $questions[$i];
					}
				*/
				?>
        		
        		</div>
        	</div>
            
        	<div id="fragment-4" class="ui-tabs-panel ui-tabs-hide">
        		<div id="lessionDiv4" class="lessionDiv"></div>
        		<div id="quizDiv2" class="quizDiv">
        		
        		<?php
/*
					// ucitavanje pitanja na stranu iz promenljive ($questions) dobijene od servera
					echo "<script> var numberOfQuestions = " . count($questions) . "; </script>";
				
					for ($i = 4; $i <=6; $i++)
					{
						echo $questions[$i];
					}
				*/
				?>
        		</div>
        	</div>
        		
        	<div id="fragment-5" class="ui-tabs-panel ui-tabs-hide">
        		<div id="lessionDiv5" class="lessionDiv"></div>
        		<div id="quizDiv3" class="quizDiv">
        		    
        		<?php
/*
					// ucitavanje pitanja na stranu iz promenljive ($questions) dobijene od servera
					echo "<script> var numberOfQuestions = " . count($questions) . "; </script>";
				
					for ($i = 7; $i <=9; $i++)
					{
						echo $questions[$i];
					}
				*/
				?>
        		</div>
        	</div>       
        	
        <!--	<div id="fragment-6" class="ui-tabs-panel ui-tabs-hide">
        		<div id="lessionDiv6" class="lessionDiv"></div>
        	</div>        	
        	-->
        	
        </div>
        
</div>

<div id="countDiv">
	<div id="countdown"> </div>
</div>

<div id="bottomDiv">
		 <span class="close">&times;</span>
		 
		 <div id="statementDiv"> </div>
	</div>