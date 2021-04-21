		<?php include('header.php');?>
        <?php include('menu.php');?>
        <?php include('slider.php');?>
       
       	<div class="content">
            <div class="content">
            	<h1>Welcome to Home Comfort - Buy With Us</h1>
            
        		  <p> The project is about a grocery store that sells grocery items offline. Now, the grocery store wants to expand its business and would like to go online. The store wants a web application that can be accessed online to connect with its customers. The web application should include all the grocery items they sell, the opening hours, their location and contact details and options to order the products online. <a href="about-us.php">Read More</a></p>

        		<h2>Message From MD</h2>

        		<div class="md">
        			<img src="images/md.jpg" alt="MD" />
        		</div>

        		<p>I, Abdulla Mohammed aqil, Managing Director of Home Comfort - Buy With Us welcomes you all to my web portal. We have varieties of items that you can purchase. Enjoy using our web portal and buy goods from your home and get home delivery. We have exciting offers too and we are adding more offers and items in future. Thank you for trusting us and giving us an opportunity to serve you. Looking forward to serve you more in future too.</p>

        		<h1>Customer Review</h1>
                <form method="post" action="process/contact-us.php">
                    <table>
                        <tr>
                            <td>Fullname: *</td>
                            <td><input type="text" name="fullname" id="fullname" required="required"></td>
                        </tr>
                        <tr>
                            <td>Email: *</td>
                            <td><input type="text" name="email" id="email" required="required"></td>
                        </tr>
                        <tr>
                            <td>Phone: *</td>
                            <td><input type="text" name="phone" id="phone" required="required"></td>
                        </tr>
                        <tr>
                            <td>Message: *</td>
                            <td><textarea name="message" id="message" required="required"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" id="submit"></td>
                        </tr>
                    </table>
                    
                </form>
        	</div>


        </div> <!--end of content div-->
       
       <?php include('footer.php');?>
    </div> <!--end of wrapper div-->
</body>
</html>