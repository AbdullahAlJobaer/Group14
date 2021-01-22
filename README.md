<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<p align="center"><strong><img src="https://media.dhakatribune.com/uploads/2016/11/nsulogo.jpg" alt="" width="307" height="172" /></strong></p>
<p align="center"><strong>North South University</strong></p>
<p align="center">Department of Electrical &amp; Computer Engineering</p>
<p align="center"><strong>Project Report</strong></p>
<p align="center"><strong>Group No</strong>: 14</p>
<p align="center"><strong>Fall 2020</strong></p>
<p align="center"><strong>Project Name</strong>: Chess Station (Online Chess Store)</p>
<p align="center"><strong>Course Title</strong>: CSE 299 (Junior Design)</p>
<p align="center"><strong>Section</strong><strong>:</strong> 2</p>
<p align="center"><strong>Faculty</strong>: Shaikh Shawon Arefin Shimon (SAS3)</p>
<p align="center"><strong>Name</strong><strong>:</strong> Md. Abdullah Al Jobaer</p>
<p align="center"><strong>ID</strong><strong>:&nbsp; </strong>1512028042</p>
<p align="center"><strong>Email</strong><strong>:</strong> <a href="mailto:al.jobaer@northsouth.edu">al.jobaer@northsouth.edu</a></p>
<p align="center"><strong>Git Repository</strong><strong>: </strong><a href="https://github.com/NSU-FA20-CSE299-2/Group14">https://github.com/NSU-FA20-CSE299-2/Group14</a></p>
<p align="center"><strong>Date Prepared</strong><strong>: </strong>22/01/2021</p>
<p><strong>&nbsp;</strong></p>
<p><strong>&nbsp;</strong></p>

<p><strong>ACKNOWLEDGEMENT</strong></p>
<p> I would like to thank my faculty Shaikh Shawon Arefin Shimon Sir.</p>
<p>During the production of this whole project I’ve learned a lot because of his guideline, help and strictness. Without his directions and instructions, I would not be able to pull the project this far alone.</p>
<p>&nbsp;</p>


<p><strong>INTRODUCTION</strong></p>
<p>In Bangladesh, especially in Dhaka City, there are so many people (other than the PROs) who love to play chess regularly, or every now and then. So many of them are so passionate about this game that they even want to buy stuff and accessories that are all about chess. Chess books, chess clocks, chess bags, chess T-shirts, for example, and, of course, along with different kinds and designs of chess boards and pieces of chess. The main objective was to create a platform for eCommerce where chess freaks can order and purchase their desired products online from anywhere in our country.</p>
<p> Chess Station is an eCommerce website built with latest technologies.</p>
<p>&nbsp;</p>

<p><strong>TECHNOLOGY</strong></p>
<p>Implemented Technology Stack:</p>
<p><strong>GitHub</strong> has been used for this project. Used <strong>Basic Kanban Board</strong> of GitHub as the project management tool.</p> 
<p>Used <strong>VS Code</strong> as IDE.</p> 
<p><em>Frontend</em>: <strong>HTML5</strong>, <strong>CSS3</strong> and <strong>Bootstrap 3</strong></p>
<p><em>Backend</em>: <strong>Laravel Framework</strong> and <strong>MySQL</strong> for the database.</p>
<p>&nbsp;</p>

<p><strong>PROJECT FEATURES</strong></p>
<p><strong>(a) Home Page:</strong></p>
<p align="center"><strong><img src="Documentation/Project Report/Images/homepage.png" alt="" width="700" height="550" /></strong></p>
<p>&nbsp;</p>

<p><strong>(b) Single Product Page:</strong></p> 
<p>A user can click a product and it will go to the single product page.</p>
<p align="center"><strong><img src="Documentation/Project Report/Images/singleproduct.png" alt="" width="850" height="260" /></strong></p>
<p>&nbsp;</p>

<p><strong>(c) Login Page:</strong></p>
<p>Login: A user can login by using his email address and password</p>
<p align="center"><strong><img src="Documentation/Project Report/Images/Loginpage.png" alt="" width="850" height="400" /></strong></p>
<p>&nbsp;</p>

<p><strong>(d) Login and Logout Functionality with Session:</strong></p> 
<p>Created a logout route for the Login and logout system and the dropdown menu shows the username when a user logs in.</p>
<p align="center"><strong><img src="Documentation/Project Report/Images/loginsession.png" alt="" width="850" height="300" /></strong></p>
<p>&nbsp;</p>

<p><strong>(e) Logout:</strong></p> 
<p>A user can easily logout by clicking the logout button in the dropdown menu (showing the username).</p>
<p align="center"><strong><img src="Documentation/Project Report/Images/logout.png" alt="" width="850" height="300" /></strong></p>
<p>&nbsp;</p>

<p><strong>(f) Search Page:</strong></p> 
<p>A user can search the products by any letter which is between the products’ name. Search page will filter the product searched list. Built the search functionality for the search page, get data from the database, and go to product detail from the search page.</p>
<p>Type the product or any letter to search:</p>
<p align="center"><strong><img src="Documentation/Project Report/Images/search1.png" alt="" width="850" height="300" /></strong></p>
<p>It will show the search page with searched products:</p>
<p align="center"><strong><img src="Documentation/Project Report/Images/Search2.png" alt="" width="850" height="400" /></strong></p>
<p>&nbsp;</p>


<p><strong>(g) Add to Cart Option:</strong></p> 
<p>A user can add products using the add to cart button in the single product page. Also Added the functionality to show the number count of product(s) added to cart. Anyone can browse the website and see the products but if he/clicks the add to cart button the website will redirect to its login page to force the user to login first.</p>
<p align="center"><strong><img src="Documentation/Project Report/Images/addtocart.png" alt="" width="850" height="280" /></strong></p>
<p>Also Added the functionality to show the number count of product(s) added to cart:</p>
<p align="center"><strong><img src="Documentation/Project Report/Images/cartcount.png" alt="" width="850" height="300" /></strong></p>
<p>&nbsp;</p>


<p><strong>(h) Cart List Page:</strong></p> 
<p>The added product(s) will show in the Cart list page. It has a remove from cart option and order now option.</p>
<p align="center"><strong><img src="Documentation/Project Report/Images/cartlistpage.png" alt="" width="850" height="300" /></strong></p>
<p>&nbsp;</p>

<p><strong>(i) Order-Now Page: </strong></p> 
<p>When a user decides to order the added products from the cart page he/she can click the Ordernow option and the order-now page will appear with the whole product and delivery details with pricing. User can then type his/her valid address on the address bar and then after selecting the payment method he/she can select the ordernow button and the order will be placed. This will complete the ordering process. The address bar and payment method options are both required field. An order cannot procced without filling these two required fields. When an order is placed successfully the website will redirect to the home page and the cart count will show (0) on the navbar menu.</p>
<p align="center"><strong><img src="Documentation/Project Report/Images/ordernowpage.png" alt="" width="850" height="260" /></strong></p>
<p>&nbsp;</p>

<p><strong>FUTURE WORKS AND PLAN</strong></p>
<p>As this project is not ready yet to run for the production for the business plan that discussed in the project proposal, I would like to work on the development of remaining areas that need to be done to make it up-and-running for the primary goal for which it was proposed in the first place.</p>
<p>I would like to develop the remaining features like: user registration, admin panel, dashboard section in the admin panel where admin can see the information of whole system, payment methods, add payment gateway (i.e., bKash) for the successful online order and transaction.</p>
<p>In future, Chess Station will be selling imported chess products and accessories through online platform. By using this eCommerce website chess lovers will order and buy their desired products and accessories. Chess Station will sell various forms of products related to Chess to its customers and earn money through online payments or cash on delivery.</p>
<p>&nbsp;</p>

