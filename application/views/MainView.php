

<script src="<?php echo base_url('assets/countdownTimer/countdown/jquery.countdown.ReadMode.js')?>"></script>
<script src="<?php echo base_url('assets/countdownTimer/js/ReadModeCountdownScript.js')?>"></script>

<div id='navigationDiv'>
<span id="lessionNumberSpan1">
	<span id="lessionNumberSpan2">
		
	</span>  of 5
</span>

<div id='navProgressDiv'>
<!-------------------------- progressDiv --------------------------->
	<div id="progressOutDiv">
		<div id="progressInDiv">
		</div>
	</div>
</div>

<nav> <?php /*echo anchor('usercontroller/startQuiz', 'Start test', array('id'=>'startTest') ) . " | "; */if($this->session->userdata('account_type') =="f") {echo anchor('/usercontroller/registerFBUser', 'Register') ;} /*. " | "; } echo anchor('usercontroller/logout', 'Logout', array('class'=>'focus') ); */?> </nav>
</div>

<!------------------------- mainDiv, centralni div u koji se ucitava tekst ------------------------->
<div id='mainDiv'>

	

	<script>
	
		// slanje informacije o akciji poktretanja sistema za ucenje
		sendUserActionsLessions(currentLessionNumber, "start_dsi", null);

	</script>
	
    <?php
        		
        $qNo=1;
        $qNoPerPage = 6;
       	$qPageNo = 1;
        
      /*  function showQuestions($qNo, $qNoPerPage, $qPageNo, $questions)
        {
  	
        	global $qNo;
        	global $qNoPerPage;
        	global $qPageNo;
        	
        	echo "<table>";
        		
        	$counterValue = $qNoPerPage * $qPageNo - $qNoPerPage/2;
        
        	for ($i = 1; $i <=$counterValue; $i++)
        	{
	        	echo "<tr><td>" . "" . $questions[$i] . "</td>";
	        	
	        	$qNo++;
	        		
	        	echo "<td>" . "" . $questions[$i + $qNoPerPage/2] . "</td></tr>";
	        	$qNo++;
        	 }
        
        	echo "</table>";
        
        	$qPageNo++;
        }*/
        			
    ?>
    
	 	<!------------------------- tabs, div koje ce da sadrzi tabove (divove)  ------------------------->
        <div id="tabs">

        		
	    	<ul>
	        		<li><a href="#fragment-1">1</a></li><li><a href="#fragment-2">2</a></li>
	        		<li><a href="#fragment-3">3</a></li><li><a href="#fragment-4">4</a></li>
	        		<li><a href="#fragment-5">5</a></li><li><a href="#fragment-6">6</a></li>

	    	</ul>
	
        	<div id="fragment-1" class="ui-tabs-panel">
	        	<div id="lessionDiv1" class="lessionDiv">
	        	
	        	</div>
        	</div>
        	
        	<div id="fragment-2" class="ui-tabs-panel ui-tabs-hide">
                <div id="lessionDiv2" class="lessionDiv"></div>      
			</div>
            
        	<div id="fragment-3" class="ui-tabs-panel ui-tabs-hide">
        		<div id="lessionDiv3" class="lessionDiv"></div>
        		<div id="nextPrevDiv1" class="nextPrevDiv"></div>
        		<div id="quizDiv1" class="quizDiv">
        		
				<?php

				//showQuestions($qNo, $qNoPerPage, $qPageNo, $questions);
				
				
					echo "<table>";
				
					$counterValue = $qNoPerPage * $qPageNo - $qNoPerPage/2;
					
	        		for ($i = 1; $i <=$counterValue; $i++)
					{
						echo "<tr><td>" . "" . $questions[$i] . "</td>";
						$qNo++;
						
						echo "<td>" . "" . $questions[$i + $qNoPerPage/2] . "</td></tr>";
						$qNo++;
						
						
					} 
					
					echo "</table>";
					
					$qPageNo++;
				?>
        		
        		</div>
        	</div>
            
        	<div id="fragment-4" class="ui-tabs-panel ui-tabs-hide">
        		<div id="lessionDiv4" class="lessionDiv"></div>
        		<div id="quizDiv2" class="quizDiv">
        		
        		<?php
        		//showQuestions($qNo, $qNoPerPage, $qPageNo, $questions);
        		
        		echo "<table>";
        		
        			$counterValue = $qNoPerPage * $qPageNo - $qNoPerPage/2;
					
	        		for ($i = $qNo; $i <=$counterValue; $i++)
					{
						
						echo "<tr><td>" . "" . $questions[$i] . "</td>";
						$qNo++;
						
						echo "<td>" . "" . $questions[$i + $qNoPerPage/2] . "</td></tr>";
						$qNo++;
						
					

					}
					
					echo "</table>";
					
					$qPageNo++;
					
				?>
        		</div>
        	</div>
        		
        	<div id="fragment-5" class="ui-tabs-panel ui-tabs-hide">
        		<div id="lessionDiv5" class="lessionDiv"></div>
        		<div id="quizDiv3" class="quizDiv">
        		  
        		  
        		<?php
        		//showQuestions($qNo, $qNoPerPage, $qPageNo, $questions);

        			echo "<table>";
        		
        			$counterValue = $qNoPerPage * $qPageNo - $qNoPerPage/2;
        			
	        		for ($i = $qNo; $i <=$counterValue; $i++)
					{
						
						echo "<tr><td>" . "" . $questions[$i] . "</td>";
						$qNo++;
						
						echo "<td>" . "" . $questions[$i + $qNoPerPage/2] . "</td></tr>";
						$qNo++;
						
					} 
					
					echo "</table>";
					
				?>
   <!--      		    
	<span id="finishButtonSpan">
		<input  id="finishButton" type="button" onclick="finishQuiz();" value="FINISH!"/>
	</span>--> 
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