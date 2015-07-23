<?php
/* ARRAY TEMPLATE START - MOST RECENT GOES ON THE BOTTOM
array ( 
							'title' =>"",
							'intro' =>"",
							'link' => "", #no http://
							'type' => "website", #website, logos, communications
							'tags' => 
									array ( 
										array ("web","websites"), # "tag","label
										array ("photoshop","photoshop"),
										array ("css","css"),
										array ("html","html"),
										array ("php","php"),
										array ("medium","&gt; 10 pages &lt; 100 pages"),
										array ("blog","blog"),
										array ("forms","forms"),
										array ("bluediamond","blue diamond tours")
									),
											
							'images' => 
									array(
										array ("dunn1.jpg", "Front page"),
										array ("dunn2.jpg", "Property Listing"),
										array ("dunn3.jpg", "Property Details")
									),
                                                       'active' => "yes"
						  ),
ARRAY TEMPLATE END */

$filters = null;
$portfolio = array (
	  
	  array ( 
		'title' =>"Blue Diamond Tours", 
		'intro' =>"Halifax based Blue Diamond Tours had a website that was a few years old but had a good ranking on Google. With Google Search expanding its use of mobile-friendliness as a ranking signal he wanted to make sure his website showed up in mobile searches.",
		'description' =>"
		<h3>Solution</h3>
		<p>The website was rebuilt using the mobile first framework Bootstrap 3. The overall look was modernized with large striking images and easy to navigate menus.  The most important information (the tours) were featured on the homepage, so visitors could get the information they wanted faster.</p>

		<h3>Result</h3>
		<p>The site passes the Mobile-Friendly Test. Site works well in all modern browsers and mobile devices.  Bounce rate on the right has dropped almost 75% for mobile user and resulted in more contact from possible clients using the contact form.</p>",
		'link' => "www.bluediamondtours.com",
		'type' => "website",
		'tags' => 
				array ( 
					array ("web","websites"),
					array ("photoshop","photoshop"),
					array ("css","css"),
					array ("html","html"),
					array ("php","php"),
					array ("medium","&gt; 10 pages &lt; 100 pages"),
					array ("blog","blog"),
					array ("forms","forms"),
					array ("bluediamond","blue diamond tours")
				),
						
		'images' => 
				array(
					array ("bluediamond3.jpg", "Front page close up"),
					array ("bluediamond2.jpg", "Inside page"),
					array ("bluediamond1.jpg", "Front page")
				),
		'active' => "yes"
	  ),
	  array ( 
		'title' =>"BELLIN", 
		'intro' =>"BELLIN sells Treasury Software. They wanted a corporate site that was multilingual, 
					fully ;responsive, with a blog, news feeds, videos and different products and service types. They
					also wanted it to be updated by the staff.",
		'description' =>"<h3>Solution</h3>
						  <p>The Drupal 7 content manager system was
							used to build the site, handle the blogs, different content types, the products
							and services pages and the multiple languages. To keep the site
							responsive Bootstrap 3 was used as a framework for the template. Several
							Drupal 7 modules were used to manage the multilingual requirement</p>
						  <h3>Result</h3>
						  <p>The site is fully responsive in mobile
							devices and BELLIN can easily add new content including products and services.
							&nbsp;Currently there are two languages on the site - English and German,
							however more languages can be added as needed.</p>",
		'link' => "www.bellin.com",
		'type' => "website",
		'tags' => 
				array ( 
					array ("web","websites"),
					array ("drupal7","Drupal 7"),
					array ("css","css"),
					array ("php","php"),
					array ("html","html"),
					array ("responsive","responsive"),
					array ("over100","&gt; 100 pages"),
					array ("blog","blog"),
					array ("news","news"),
					array ("video","video"),
					array ("bellin","BELLIN")
				),
						
		'images' => 
				array(
					array ("bellin-1.jpg", "Front page close up"),
					array ("bellin-2.jpg", "Front page"),
					array ("bellin-3.jpg", "Inside page")
				),
		'active' => "yes"
	  ),
	array ( 
		'title' =>"I Love Treasury", 
		'intro' =>"BELLIN attends many trade shows to sell
					their Treasury software. At the trade shows they encourage people to say why
					they love BELLIN's products or treasury in general. BELLIN needed a way
					to easily record they testimonial and upload a photo for each trade show.",
		'description' =>"<h3>Solution</h3>
				  <p>The site was set up using Drupal 7 to
					manage the content and Bootstrap 3 as the layout framework. The theme was
					dynamic depending on how many testimonials were available for each trade show.
					Should a block in the layout have 4 smaller blocks? Or 3?
					Or two long rectangles.</p>
				  <p>To keep the uploaded images consistent
					(size and colour) image processors were used to crop the image and to convert
					the colours to gray scale. CSS was used to give some images a red hue.</p>
				  <h3>Result</h3>
				  <p>The website is easy to update and sort
					testimonials depending on the trade show. BELLIN is able to upload photos from
					the event, upload video and list upcoming trade shows that they will be at.</p>",
		'link' => null,
		'type' => "website",
		'tags' => 
				array ( 
					array ("web","websites"),
					array ("drupal7","Drupal 7"),
					array ("css","css"),
					array ("php","php"),
					array ("html","html"),
					array ("responsive","responsive"),
					array ("medium","&gt; 10 pages &lt; 100 pages"),
					array ("bellin","BELLIN")
				),
						
		'images' => 
				array(
					array ("ilt-1.jpg", "Front page close up"),
					array ("ilt-2.jpg", "Front page"),
					array ("ilt-3.jpg", "Inside page")
				),
		'active' => "yes"
	  ),
	 array ( 
		'title' =>"Gambling Support Network: Take 5", 
		'intro' =>"The Gambling Support Network required a
					website that would help people take the first steps to overcome their gambling
					habits. The user would proceed through 5 steps of questions, information panels
					and quiz. At the end, the user is given a plan that they could follow.",
		'description' =>"<h3>Solution</h3>
						<p>To allow more users the site was fully
						responsive on many different mobile devices. The site was developed using the
						Drupal 7 so the staff could add new questions, content and videos. </p>
						<h3>Result</h3>
						<p>The Take 5 questionnaire is fully
						editable for the staff from adding new questions to changing the order of the
						pages. Other tools were added to the site for the user, including a gambling
						spending calculator, a way to contact the Gambling Support staff and personal
						stories from people who have problems with gambling.</p>",
		'link' => "www.gamblingsupportnetwork.ca/",
		'type' => "website",
		'tags' => 
				array ( 
					array ("web","websites"),
					array ("drupal7","Drupal 7"),
					array ("css","css"),
					array ("php","php"),
					array ("html","html"),
					array ("responsive","responsive"),
					array ("medium","&gt; 10 pages &lt; 100 pages"),
					array ("government","Government of Nova Scotia")
				),
						
		'images' => 
				array(
					array ("take5-1.jpg", "Front page"),
					array ("take5-2.jpg", "Quiz page"),
					array ("take5-3.jpg", "Calculator page"),
					array ("take5-4.jpg", "Front page mobile"),
					array ("take5-5.jpg", "Quiz page mobile")
				),
		'active' => "yes"
	  ),
	array ( 
		'title' =>"MDS trak",
		'intro' =>"MetOcean Data Systems launched a new product line aimed at the covert and surveillance market called MDS trak. They wanted a logo that would tie into the MetOcean brand.",
		'description' =>"",
		'link' => null,
		'type' => "logos",
		'tags' => 
				array ( 
					array ("illustrator","illustrator"),
					array ("logos","logos"),
					array ("branding","branding"),
					array ("business","business identity"),
					array ("metocean","MetOcean"),
					array ("2colours","two colour")
				),
						
		'images' => 
				array(
					array ("MDS-track-logo.jpg", "Logo")
				),
		'active' => "yes"
	  ),
	array ( 
		'title' =>"TiGR TG-100 Product Sheet",
		'intro' =>"MetOcean Data Systems launched a new product line aimed at the covert and surveillance market called MDStrak. This is the brochure of their first product under this line the TiGR TG-100. The tracker would be able to track globally with out boundaries.",
		'description' =>"",
		'link' => null,
		'type' => "communications",
		'tags' => 
				array ( 
					array ("illustrator","illustrator"),
					array ("photoshop","photoshop"),
					array ("communications","communications"),
					array ("metocean","MetOcean")
				),
						
		'images' => 
				array(
					array ("TiGR-1.jpg", "Close up"),
					array ("TiGR-2.jpg", "Front"),
					array ("TiGR-3.jpg", "Inside")
					
				),
		'active' => "yes"
	  ),	
	  array ( 
		'title' =>"What does it mean to me to be a Web Professional?",
		'intro' =>"You know those parallax images? You see them on greeting cards, promotional 
		pieces anything where they want to make a two dimension scene look three dimensions. When 
		you first see them it looks like a regular image. Then you turn your head and suddenly 
		it's more than a flat image, it has depth and movement. It's almost magical. My profession 
		is like a parallax.",
		'description' =>"<p>When I tell people what I do I am greeted with a glazed look in their 
		eyes.  They see me as a guy sitting in front of a computer banging on keys, maybe surrounded 
		by empty energy drink cans and action figures. They are looking at the parallax head on.</p>

		<p>Then I begin to explain how I do what I do. How I take several pieces: design, art, 
		programming, 		information, user experience, client needs and weave it all into something 
		that you interact with and experience. Suddenly it's like they turned their head a little bit 
		and see the whole parallax image.</p>

		<p>I live for that transformation in people's eyes.  I go from being a Star Wars geek in my 
		parents' basement to a Jedi Knight levitating rocks and robots with my mind while doing a one 
		armed hand stand.</p>

		<p>Even though I could go on for hours with metaphors (it's one of my talents) let me talk 
		about why I love what I do.</p>

		<p>My background is Hospitality. Honest. I graduated the top the 1991 class at the New 
		Brunswick Community College in their Accommodation Food and Beverage Program. It was because of 
		my hospitality life that I was introduced to graphic design. It's a good story I can tell when 
		we meet. Those hospitality skills are not forgotten, I call on them when talking with clients. 
		Whether I was selling a bottle of fine wine or a website redesign, the same skills are used.</p>

		<p>I'm passionate about what I do. I'm passionate about creating, about developing, learning new 
		skills and ways to approach a challenge. I love a challenge. But I love overcoming that challenge 
		even more. </p>

		<p>I want to surround myself with people who are passionate about development.  I believe everyone 
		is a resource, everyone knows things I don't. I know things they don't. I want to share what I know. 
		I want to learn from others things I don't know. I want to be inspired by the passion of others.</p>

		<p>More metaphors here, but when a project starts it's a freshly mined hunk of rock with a rough diamond 
		in it. Then through the work of myself and my co-workers we chisel away the rock, use our tools to form that 
		rough diamond into something that will look beautiful on someone's finger. </p>

		<p>My name is Rob Evans, I'm a web professional.</p>",
		'link' => null,
		'type' => "articles",
		'tags' => 
				array ( 
					array ("articles","articles"),
					array ("rob","By Rob"),
					array ("fun","fun")
				),
						
		'images' => 
				array(
					array ("articles/webpro.jpg", "What does it mean to me to be a Web Professional?")
				),
		'active' => "yes"
	  ),
	  array ( 
		'title' =>"Five Knives Catering",
		'intro' =>"A catering company started by five local chefs. Each knife represents the skill and experience of each chef. Together they are a team, but individually they are all sharp and honed.",
		'description' =>"",
		'link' => null,
		'type' => "logos",
		'tags' => 
				array ( 
					array ("illustrator","illustrator"),
					array ("logos","logos"),
					array ("branding","branding"),
					array ("business","business identity"),
					array ("5knives","five knives"),
					array ("2colours","two colour")
				),
						
		'images' => 
				array(
					array ("5knives1.jpg", "Logo"),
					array ("5knives2.jpg", "Business card")
				),
								   'active' => "yes"
	  ),
	  array ( 
		'title' =>"Actra: Team Actra!",
		'intro' =>"One of the many things that the actor's union, ACTRA does is make sure child actors are safe on set. They bought advertising space during the View Finders Film Festival in Halifax.",
		'description' =>"",
		'link' => null,
		'type' => "communications",
		'tags' => 
				array ( 
					array ("communications","communications"),
					array ("advertisement","advertisement"),
					array ("illustration","illustration"),
					array ("illustrator","illustrator"),
					array ("actra","actra")
				),
						
		'images' => 
				array(
					array ("actra1.jpg", "Team Actra close up"),
					array ("actra2.jpg", "Team Actra full ad"),
					array ("actra3.jpg", "Team Actra close up")
				),
								   'active' => "yes"
	  ),
	  array ( 
		'title' =>"AnyBodyHome.ca",
		'intro' =>"A business networking organization for home based business owners.<p></p><p></p>",
		'description' =>"",
		'link' => null,
		'type' => "logos",
		'tags' => 
				array ( 
					array ("illustrator","illustrator"),
					array ("logos","logos"),
					array ("branding","branding"),
					array ("business","business identity"),
					array ("anybodyhome","five knives"),
					array ("2colours","two colour")
				),
						
		'images' => 
				array(
					array ("anybodyhome1.jpg", "Logo"),
					array ("anybodyhome2.jpg", "Business card")
				),
								   'active' => "yes"
	  ),
	  array ( 
		'title' =>"As We Are",
		'intro' =>"An online magazine for women that focussed on articles that told women they were perfect as they are. The logo represents different ideas, cultures and personalities the magazine hopes to attract.",
		'description' =>"",
		'link' => null,
		'type' => "logos",
		'tags' => 
				array ( 
					array ("illustrator","illustrator"),
					array ("logos","logos"),
					array ("branding","branding"),
					array ("asweare","asweare")
				),
						
		'images' => 
				array(
					array ("asweare.jpg", "Logo")
				),
								   'active' => "yes"
	  ),
	  array ( 
		'title' =>"Blair Properties",
		'intro' =>"A property manager who has several properties by the ocean.",
		'description' =>"",
		'link' => null,
		'type' => "logos",
		'tags' => 
				array ( 
					array ("illustrator","illustrator"),
					array ("logos","logos"),
					array ("branding","branding"),
					array ("2colours","two colour"),
					array ("blair","blair properties")
				),
						
		'images' => 
				array(
					array ("blair.jpg", "Logo")
				),
								   'active' => "yes"
	  ),
	  array ( 
		'title' =>"Blame the Dog",
		'intro' =>"Blame the Dog produces business cards as unique as their name. They needed a logo just as unique.",
		'description' =>"",
		'link' => null,
		'type' => "logos",
		'tags' => 
				array ( 
					array ("illustrator","illustrator"),
					array ("logos","logos"),
					array ("branding","branding"),
					array ("blamethedog","blame the dog")
				),
						
		'images' => 
				array(
					array ("blamethedog1.jpg", "Logo")
				),
								   'active' => "no"
	  ),
	  array ( 
		'title' =>"Cambridge Financial",
		'intro' =>"Sign placed in the mall that Cambridge is located.",
		'description' =>"",
		'link' => null,
		'type' => "communications",
		'tags' => 
				array ( 
					array ("communications","communications"),
					array ("advertisement","advertisement"),
					array ("photoshop","photoshop"),
					array ("illustrator","illustrator"),
					array ("cambridge","cambridge")
				),
						
		'images' => 
				array(
					array ("cambridge1.jpg", "Warning Tax Time Ahead! close up"),
					array ("cambridge2.jpg", "Warning Tax Time Ahead! full sign")
				),
								   'active' => "yes"
	  ),
	  array ( 
		'title' =>"BCANS: Resource Directory",
		'intro' =>"Breast Cancer Action Nova Scotia produces a resource directory for patients and families living with breast cancer.  They hired me to design a front and back cover as well as layout the 200 plus page book.",
		'description' =>"",
		'link' => null,
		'type' => "communications",
		'tags' => 
				array ( 
					array ("communications","communications"),
					array ("directory","directory"),
					array ("photoshop","photoshop"),
					array ("indesign","indesign"),
					array ("publication","publication"),
					array ("bcans","bcans")
				),
						
		'images' => 
				array(
					array ("directory1.jpg", "Cover close up"),
					array ("directory2.jpg", "Front and Back full"),
					array ("directory3.jpg", "Inside the directory")
				),
								   'active' => "yes"
	  ),
	  array ( 
		'title' =>"Hage Enterprises",
		'intro' =>"Hage Enterprises is proud of their Lebanese heritage and wanted to show that in their logo.  The cedar tree is a national emblem.",
		'description' =>"",
		'link' => null,
		'type' => "logos",
		'tags' => 
											array ( 
													array ("logos","logos"),
													array ("illustrator","illustrator"),
													array ("branding","branding"),
													array ("2colours","two colour"),
													array ("hage","hage enterprises")
											),
						
		'images' => 
											array(
													array ("hage_logo1.jpg", "Cover close up")
											),
								   'active' => "yes"
	  ),
	   array ( 
		'title' =>"Hage Enterprises Website",
		'intro' =>"A brochure style website, with the added functionality of a CMS.  I built a custom property manager, that would allow Hage Enterprises to update and add the properties they were developing.",
		'description' =>"",
		'link' => null,
		'type' => "website",
		'tags' => 
											array ( 
													array ("web","websites"),
													array ("photoshop","photoshop"),
													array ("customCMS", "custom CMS"),
													array ("css","css"),
													array ("mysql", "mySQL"),
													array ("php", "php"),
													array ("html","html"),
													array ("medium","&gt; 10 pages &lt; 100 pages"),
													array ("forms","forms"),
													array ("hage","hage enterprises")
											),
						
		'images' => 
											array(
													array ("hage1.jpg", "Home page"),
													array ("hage2.jpg", "Property Manager main page"),
													array ("hage3.jpg", "Property Manager property page")
											),
								   'active' => "no"
	  ),
	  array ( 
		'title' =>"ICC",
		'intro' =>"Integrated Commissioning Certification or ICC, is a third party who is hired to certify that newly constructed building meet standards.",
		'description' =>"",
		'link' => null,
		'type' => "logos",
		'tags' => 
											array ( 
													array ("logos","logos"),
													array ("illustrator","illustrator"),
													array ("branding","branding"),
													array ("2colours","two colour"),
													array ("icc","icc")
											),
						
		'images' => 
											array(
													array ("icc1.jpg", "Logo"),
													array ("icc2.jpg", "Business card")
											),
								   'active' => "yes"
	  ),
	   array ( 
		'title' =>"Joan Mikkelsen",
		'intro' =>"Joan offers financial and insurance services and is an Elder Planning Counsellor. She publishes several articles as well as a bimonthly newsletter and she wanted to be able to easily added them to her site.",
		'description' =>"",
		'link' => null,
		'type' => "website",
		'tags' => 
											array ( 
													array ("web","websites"),
													array ("photoshop","photoshop"),
													array ("customCMS", "custom CMS"),
													array ("css","css"),
													array ("mysql", "mySQL"),
													array ("php", "php"),
													array ("html","html"),
													array ("medium","&gt; 10 pages &lt; 100 pages"),
													array ("joan","joan mikkelsen")
											),
						
		'images' => 
											array(
													array ("joan1.jpg", "Home page"),
													array ("joan2.jpg", "Articles"),
													array ("joan3.jpg", "Calculator page")
											),
								   'active' => "yes"
	  ),
	  array ( 
		'title' =>"JouBeh Technologies",
		'intro' =>"JouBeh sells modems that communicate with Iridium satellites.",
		'description' =>"",
		'link' => null,
		'type' => "logos",
		'tags' => 
											array ( 
													array ("logos","logos"),
													array ("illustrator","illustrator"),
													array ("branding","branding"),
													array ("2colours","two colour"),
													array ("joubeh","joubeh")
											),
						
		'images' => 
											array(
													array ("joubeh1.jpg", "Logo")
											),
								   'active' => "yes"
	  ),
	  array ( 
		'title' =>"Lewis MacKinnon",
		'intro' =>"Nova Scotian Gaelic singer, songwriter and poet Lewis MacKinnon celebrates his culture through Gaelic songs and poetry. I built him a website that allowed him to add his CDs, books, manage comments, and news items. Site also was used the PayPal API so Lewis could accept payments for his merchandise.",
		'description' =>"",
		'link' => "www.lewismackinnon.com",
		'type' => "website",
		'tags' => 
											array ( 
													array ("web","websites"),
													array ("photoshop","photoshop"),
													array ("customCMS", "custom CMS"),
													array ("api","api"),
													array ("paypal","paypal"),
													array ("css","css"),
													array ("mysql", "mySQL"),
													array ("php", "php"),
													array ("html","html"),
													array ("small","&lt; 10 pages"),
													array ("lewis","lewis mackinnon")
											),
						
		'images' => 
											array(
													array ("lewis1.jpg", "Home page"),
													array ("lewis2.jpg", "Product page"),
													array ("lewis3.jpg", "Content manager")
											),
								   'active' => "yes"
	  ),
	array ( 
		'title' =>"Lyla Hage",
		'intro' =>"An interior design and real-estate agent.  The site features her portfolio and properties for sale. Most of the properties are being sold by her family's company Hage Enterprises, but she has other houses as well.  The site uses the CMS at Hage Enterprises to manager the properties.",
		'description' =>"",
		'link' => "www.lylahage.com",
		'type' => "website",
		'tags' => 
											array ( 
													array ("web","websites"),
													array ("photoshop","photoshop"),
													array ("customCMS", "custom CMS"),
													array ("css","css"),
													array ("mysql", "mySQL"),
													array ("php", "php"),
													array ("html","html"),
													array ("small","&lt; 10 pages"),
													array ("hage","hage enterprises")
											),
						
		'images' => 
											array(
													array ("lyla1.jpg", "Home page"),
													array ("lyla2.jpg", "Property page"),
													array ("lyla3.jpg", "Portfolio page")
											),
								   'active' => "no"
	  ),
	  array ( 
		'title' =>"MetOcean MASS Ads",
		'intro' =>"A series of ads placed in 'JANES Defense Weekly' for MetOcean's MASS.",
		'description' =>"",
		'link' => null,
		'type' => "communications",
		'tags' => 
											array ( 
													array ("communications","communications"),
													array ("advertisement","advertisement"),
													array ("photoshop","photoshop"),
													array ("illustrator","illustrator"),
													array ("metocean","metocean")
											),
						
		'images' => 
											array(
													array ("massad1.jpg", "First ad"),
													array ("massad2.jpg", "Second ad")
											),
								   'active' => "yes"
	  ),
	  array ( 
		'title' =>"MetOcean",
		'intro' =>"MetOcean sells buoys for oceanography research.",
		'description' =>"",
		'link' => null,
		'type' => "logos",
		'tags' => 
											array ( 
													array ("logos","logos"),
													array ("illustrator","illustrator"),
													array ("branding","branding"),
													array ("2colours","two colour"),
													array ("metocean","metocean")
											),

		'images' => 
											array(
													array ("metocean_logo1.jpg", "Logo")
											),
								   'active' => "yes"
	  ),
	  array ( 
		'title' =>"MetOcean Product Sheets",
		'intro' =>"MetOcean needed a consistent look for all of their product sheets.",
		'description' =>"",
		'link' => null,
		'type' => "communications",
		'tags' => 
											array ( 
													array ("communications","communications"),
													array ("photoshop","photoshop"),
													array ("illustrator","illustrator"),
													array ("metocean","metocean")
											),
						
		'images' => 
											array(
													array ("metocean_ps1.jpg", "MASS product sheet"),
													array ("metocean_ps2.jpg", "Ice Beacon product sheet"),
													array ("metocean_ps3.jpg", "NovaTech product sheet")
											),
								   'active' => "yes"
	  ),
	  array ( 
		'title' =>"MTANS Holiday Ad",
		'intro' =>"An ad for the doctors of Nova Scotia around the holidays.",
		'description' =>"",
		'link' => null,
		'type' => "communications",
		'tags' => 
				array ( 
					array ("communications","communications"),
					array ("photoshop","photoshop"),
					array ("illustrator","illustrator"),
					array ("mtans","mtans")
				),
						
		'images' => 
				array(
					array ("mtans_holiday1.jpg", "MTANS ad close up"),
					array ("mtans_holiday2.jpg", "MTANS ad full")
				),
								   'active' => "yes"
	  ),
	  array ( 
		'title' =>"MTANS",
		'intro' =>"Website for the Massage Therapists' Association of Nova Scotia.  Has a searchable map for registered massage therapists in Nova Scotia, a customized content manager for the member details, MTANS news, classified ads and the ability for the members to submit their continuing education credits.",
		'description' =>"",
		'link' => "www.mtans.ca",
		'type' => "website",
		'tags' => 
				array ( 
					array ("web","websites"),
					array ("photoshop","photoshop"),
					array ("customCMS", "custom CMS"),
					array ("api","api"),
					array ("googlemaps","google maps"),
					array ("css","css"),
					array ("mysql", "mySQL"),
					array ("php", "php"),
					array ("html","html"),
					array ("over100","&gt; 100 pages"),
					array ("mtans","mtans")
				),
						
		'images' => 
				array(
					array ("mtans1.jpg", "Home page"),
					array ("mtans2.jpg", "Find a Therapist page"),
					array ("mtans3.jpg", "Edit member detail page")
				),
								   'active' => "yes"
	  ),
	  array ( 
		'title' =>"NMA Choice Communications",
		'intro' =>"NMA Choice Communication is about bringing the power of effective communication and leadership to its clients. Like a compass.",
		'description' =>"",
		'link' => null,
		'type' => "logos",
		'tags' => 
				array ( 
					array ("logos","logos"),
					array ("illustrator","illustrator"),
					array ("branding","branding"),
					array ("2colours","two colour"),
					array ("nma","NMA Choice Communications")
				),
						
		'images' => 
				array(
					array ("nmalogo.jpg", "Logo"),
					array ("nmalogo2.jpg", "Card")
				),
								   'active' => "yes"
	  ),
	  array ( 
		'title' =>"Nova Spinal Care",
		'intro' =>"The chiropractors at Nova Spinal Care provide a different kind of chiropractic care.  They provide very gentle treatments to the top three vertebrae of the spine.",
		'description' =>"",
		'link' => null,
		'type' => "logos",
		'tags' => 
				array ( 
					array ("logos","logos"),
					array ("illustrator","illustrator"),
					array ("branding","branding"),
					array ("2colours","two colour"),
					array ("nova","Nova Spinal Care")
				),
						
		'images' => 
				array(
					array ("novaspinal.jpg", "Logo")
				),
								   'active' => "yes"
	  ),
	   array ( 
		'title' =>"BCANS Patient Navigators",
		'intro' =>"Patient Navigators are help cancer patient work with the cancer care system.  They hired me to design a poster that would be placed in doctor's offices around the province to let patients with cancer know that there is help for them.",
		'description' =>"",
		'link' => null,
		'type' => "communications",
		'tags' => 
				array ( 
					array ("communications","communications"),
					array ("photoshop","photoshop"),
					array ("illustrator","illustrator"),
					array ("poster", "poster"),
					array ("bcans","bcans")
				),
						
		'images' => 
				array(
					array ("navigator1.jpg", "Poster close up"),
					array ("navigator2.jpg", "Poster full")
				),
								   'active' => "yes"
	  ),
	  array ( 
		'title' =>"BCANS Pink Spring Celebration",
		'intro' =>"Each year BCANS has their Pink Spring Celebration fund raiser.  The artwork was produced by Holly New DeWolf.",
		'description' =>"",
		'link' => null,
		'type' => "communications",
		'tags' => 
				array ( 
					array ("communications","communications"),
					array ("photoshop","photoshop"),
					array ("illustrator","illustrator"),
					array ("illustration", "illustration"),
					array ("poster", "poster"),
					array ("bcans","bcans")
				),
						
		'images' => 
				array(
					array ("pinkspring2.jpg", "Poster close up"),
					array ("pinkspring3.jpg", "Poster close up bottom"),
					array ("pinkspring1.jpg", "Poster full")
				),
								   'active' => "yes"
	  ),
	  array ( 
		'title' =>"Nova Scotia Down Products",
		'intro' =>"Brochure style website with some jQuery enhancements to make the back image stretch the full size of the browser, as well as some hover state effects.",
		'description' =>"",
		'link' => "www.novascotiandown.ca",
		'type' => "website",
		'tags' => 
				array ( 
					array ("web","websites"),
					array ("photoshop","photoshop"),
					array ("css","css"),
					array ("jQuery", "jQuery"),
					array ("html","html"),
					array ("small","&lt; 10 pages"),
					array ("nsdown","nova scotia down")
				),
						
		'images' => 
				array(
					array ("nsdown1.jpg", "Home page"),
					array ("nsdown2.jpg", "Product page"),
					array ("nsdown3.jpg", "Close up")
				),
								   'active' => "yes"
	  ),
	   array ( 
		'title' =>"Schooner Toastmasters",
		'intro' =>"A website for my Toastmasters club.  Site has two functions. The first was to offer information to those interested in attending a meeting. The other is to keep track of member statistics (speeches given, awards received) and to plan the meeting agenda. Currently inactive.",
		'description' =>"",
		'link' => "",
		'type' => "website",
		'tags' => 
											array ( 
													array ("web","websites"),
													array ("photoshop","photoshop"),
													array ("customCMS", "custom CMS"),
													array ("api","api"),
													array ("googlemaps","google maps"),
													array ("css","css"),
													array ("mysql", "mySQL"),
													array ("php", "php"),
													array ("html","html"),
													array ("over100","&gt; 100 pages"),
													array ("schooner","schooner toastmasters")
											),

		'images' => 
											array(
													array ("schooner1.jpg", "Home page"),
													array ("schooner2.jpg", "Agenda page"),
													array ("schooner3.jpg", "Members area")
											),
								   'active' => "yes"
	  ), 
	  array ( 
		'title' =>"Strategic Wealth Planning",
		'intro' =>"A brochure style website for a local independent financial and insurance provider.",
		'description' =>"",
		'link' => "www.novascotiandown.ca",
		'type' => "website",
		'tags' => 
											array ( 
													array ("web","websites"),
													array ("photoshop","photoshop"),
													array ("css","css"),
													array ("html","html"),
													array ("small","&lt; 10 pages"),
													array ("swp","strategic wealth planning")
											),
						
		'images' => 
											array(
													array ("swp1.jpg", "Home page"),
													array ("swp2.jpg", "Services page"),
													array ("swp3.jpg", "Calculators page")
											),
								   'active' => "yes"
	  ),
	  
		array ( 
			'title' =>"David Dunn",
			'intro' =>"David Dunn is a well established real estate agent in the Halifax area.  His site was built entirely in Drupal 7. It uses Google Maps API, several different Drupal modules and some hand coded jQuery to make the site easy for a prospective client to find their new home. Currently not active.",
										'description' =>"",
			'link' => "", #no http://
			'type' => "website", #website, logos, communications
			'tags' => 
													array ( 
															array ("web","websites"),
															array ("photoshop","photoshop"),
															array ("css","css"),
															array ("drupal7","Drupal 7"),
															array ("html","html"),
															array ("php","php"),
															array ("googlemaps","google maps"),
															array ("jQuery", "jQuery"),
															array ("medium","&gt; 10 pages &lt; 100 pages"),
															array ("productsearch","product search"),
															array ("daviddunn","david dunn")
													),
							
			'images' => 
													array(
															array ("dunn1.jpg", "Front page"),
															array ("dunn2.jpg", "Property Listing"),
															array ("dunn3.jpg", "Property Details")
													),
								   'active' => "yes"
	  ),
	  

);
?>