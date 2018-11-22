<?php if (isset($_SESSION['message'])) : ?>
      <div class="message" >
      	<p>
          <?php 
          	echo $_SESSION['message']; 
          	unset($_SESSION['message']);
          ?>
      	</p>
      </div>
<?php endif ?>