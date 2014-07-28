        <!-- Right column -->
<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<style type="text/css">
<!--
.style1 {font-size: 18px}
-->
</style>


<div id="col" class="noprint">
            <div id="col-in">

                <!-- About Me -->
                <h3>Welcome</h3>

                <div id="about-me">
                    <p class="style1">
                      <?php 
					echo $_SESSION['Name'];
					?>
                    </p>
              </div> 
                <!-- /about-me -->

                <hr class="noscreen" />

                <!-- Category -->
                <h3 >&nbsp;</h3>

              <br/>

      <hr class="noscreen" />

                <!-- Archive -->
                <h3>&nbsp;</h3>

                <br/>

            <hr class="noscreen" />

                <!-- Links -->
                <h3>&nbsp;</h3>
<br/>

<hr class="noscreen" />
          </div> <!-- /col-in -->
</div> 
<!-- /col -->
