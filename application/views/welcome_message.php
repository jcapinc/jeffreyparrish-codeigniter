<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Jeffrey Parrish: Web Applications Developer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/res/main.css">
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular-resource.min.js"> </script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular-route.min.js"> </script>
    <script src="https://cdn.firebase.com/js/client/2.0.4/firebase.js"></script>
    <script src="https://cdn.firebase.com/libs/angularfire/0.9.0/angularfire.min.js"></script>
    <script>
    document.base_url = "<?php echo base_url();?>";
    </script>
	<script src="<?php echo base_url();?>/res/particleground/jquery.particleground.min.js"></script>
    <script src="<?php echo base_url();?>/res/app.js"></script>

</head>
<body>
<a name="top"></a>
<div class="first" id="particles-js">
</div>
<div class="banner">
	<div>
		<h1>Jeffrey Parrish</h1>
	</div>
	<div>
		<b>Web Applications Developer</b>
	</div>
	<div>
		<p>PHP HTML CSS MySQL JavaScript JQuery Codeigniter</p>
	</div>
	<div>
		<img src="/res/images/circleface2.png" />
	</div>
</div>
<div class="nav">
	<a href="#experience">Experience</a> &nbsp; | &nbsp;
	<!-- <a href="#technologies">Technologies</a> &nbsp; | &nbsp; -->
	<a href="/res/Resume.pdf" target="new">Resume</a> &nbsp; | &nbsp;
	<a href="#contact">Contact</a>
</div>
<div class="container">
	<div class="row page">
		<div class="col-lg-12 col-md-12">
			<a name="experience" style="display:block;">&nbsp;</a>
			<div class="rightnav btn-group">
				<a class="btn btn-default" href="#top">Home</a>
			</div>
			<h1>Experience</h1>
		</div>
		<div class="row experience-section">
			<div class="col-md-3 col-lg-3 col-sm-3 col-xs-6">
				<a href="#medicus">
					<img src="/res/images/medicus.png" class="experience" />
				</a>
			</div>
			<div class="col-md-3 col-lg-3 col-sm-3 col-xs-6">
				<a href="#silvertech">
					<img src="/res/images/silvertech.png" class="experience" />
				</a>
			</div>
			<div class="col-md-3 col-lg-3 col-sm-3 col-xs-6">
				<a href="#griffin">
					<img src="/res/images/griffin.png" class="experience" />
				</a>
			</div>
			<div class="col-md-3 col-lg-3 col-sm-3 col-xs-6">
				<a href="#surfmerchants">
					<img src="/res/images/surfmerchants2.png" class="experience" />
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-lg-3 col-sm-3 col-xs-6">
				<a href="#cadlearning">
					<img src="/res/images/cadlearning.png" class="experience" />
				</a>
			</div>
			<div class="col-md-3 col-lg-3 col-sm-3 col-xs-6">
				<a href="#rovion">
					<img src="/res/images/rovion.png" class="experience" />
				</a>
			</div>
			<div class="col-md-3 col-lg-3 col-sm-3 col-xs-6">
				<a href="#wedu">
					<img src="/res/images/wedu2.png" class="experience" />
				</a>
			</div>
			<div class="col-md-3 col-lg-3 col-sm-3 col-xs-6">
				<a href="#jcap">
					<img src="/res/images/jcaplogo.png" class="experience" />
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-lg-3 col-sm-3 col-xs-6">
				<a href="#mcc">
					<img src="/res/images/mcc.jpg" class="experience" />
				</a>
			</div>
			<div class="col-md-3 col-lg-3 col-sm-3 col-xs-6">
				<a href="#hoa">
					<img src="/res/images/hoa.png" class="experience" />
				</a>
			</div>
			<div class="col-md-3 col-lg-3 col-sm-3 col-xs-6">
				<a href="#desjardins">
					<img src="/res/images/desjardins.png" class="experience" />
				</a>
			</div>
		</div>
	</div>
	<div class="row page experience-section medicus-section">
		<div class="col-md-12 col-sm-12" style="min-height:500px;">
			<a name="griffin" style="display:block;">&nbsp;</a>
			<div>
				<h2>Medicus Healthcare Solutions</h2>
				<div class="rightnav btn-group">
					<a class="btn btn-default" href="#top">Home</a>
					<a class="btn btn-default" href="#experience">Experience</a>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div class="experience-description col-lg-9 col-md-7 col-sm-12 col-xs-12">
				<img class="col-lg-4 col-md-4 col-sm-5 col-xs-12" src="/res/images/Griffin-logo-2016.png" />
				<p>
				Medicus Healthcare Solutions is a medical recruiting company specializing in temporary (Locum Tenens) doctor postings. 
				</p>
				<p>
				Medicus needed an internal tool to replace their aging internal CRM application with a newer one that would be built to be a more long term solution. The needs evolved over time and I transitioned from building PHP microservices on the backend, 
				</p>
				<p>
				
				</p>
				<p>
				</p>

			</div>
			<div class="experience-description col-lg-3 col-md-5 col-sm-12 col-xs-12">
				<h3>Technologies Used</h3>
				<ul>
					<li>PHP</li>
					<li>MySQL</li>
					<li>HTML</li>
					<li>CSS</li>
					<li>JavaScript</li>
					<li>JQuery</li>
					<li>Angular.js</li>
					<li>Adobe After Effects</li>
					<li>Adobe Premier</li>
					<li>Adobe Photoshop</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row page experience-section silvertech-section">
		<div class="col-md-12 col-sm-12" style="min-height:500px;">
			<a name="silvertech" style="display:block;">&nbsp;</a>
			<div>
				<h2>Silvertech Inc.</h2>
				<div class="rightnav btn-group">
					<a class="btn btn-default" href="#top">Home</a>
					<a class="btn btn-default" href="#experience">Experience</a>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div class="experience-description col-lg-9 col-md-7 col-sm-12 col-xs-12">
				<img class="col-lg-4 col-md-4 col-sm-5 col-xs-12" src="/res/images/silvertech 2.png" />
				<p>
				Silvertech is a web development and marketing agency based in Manchester, they specialize in large scale, content-managed websites for banks, hotels government agencies and other large institutions. 
				</p>
				<p>
				At Silvertech I delved deeper into the frontend role and learned that aspect of my craft much more deeply. I learned each of the three major frontend technoligies, Vue.JS, angularJS and React while on this role, and got exposed to backend technologies like Sitecore and Kentico.
				</p>
				<p>
				One of the major themes that became very important was Web Accessibility, WCAG and ADA compliance. I was helping to build websites for large banks and other, similar institutions, and these institutions needed to be able to substantiate to government agencies that information that was made available on their website was accessible, that means that if you are blind, colorblind, deaf, or motor-impaired that you should still be able to navigate these websites effectively.
				</p>
				<p>
				I was given a short course in WCAG compliance and was successful in helping to make a major regional bank's website WCAG compliant. 
				</p>
			</div>
			<div class="experience-description col-lg-3 col-md-5 col-sm-12 col-xs-12">
				<h3>Technologies Used</h3>
				<ul>
					<li>HTML/Pug Templating</li>
					<li>Sass/CSS</li>
					<li>JavaScript/NodeJS</li>
					<li>Angular.js</li>
					<li>Vue.js</li>
					<li>WCAG/ADA Compliance</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row page experience-section griffin-section">
		<div class="col-md-12 col-sm-12" style="min-height:500px;">
			<a name="griffin" style="display:block;">&nbsp;</a>
			<div>
				<h2>Griffin Greenhouse Supplies</h2>
				<div class="rightnav btn-group">
					<a class="btn btn-default" href="#top">Home</a>
					<a class="btn btn-default" href="#experience">Experience</a>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div class="experience-description col-lg-9 col-md-7 col-sm-12 col-xs-12">
				<img class="col-lg-4 col-md-4 col-sm-5 col-xs-12" src="/res/images/Griffin-logo-2016.png" />
				<p>
				I was approached by Griffin Greenhouse Supplies to become their primary in-house developer for their new e-commerce initiative.  This workplace was very unique for me because they had no previous developer or development environment.  Before I began working here they relied on external IT services entirely. 
				</p>
				<p>
				I quickly found myself making crucial platform and development decisions for the company's online offerings.  Beyond this, I found myself taking on new and varied roles to meet the company's multifarious technical needs, including promotional video production, social media consulting, videography and photography, project management, catalog production, and automation.
				</p>
				<p>
				I also found myself in the position to take more technical leadership than I have had at any previous job.  Without an in-house technical lead, the company's technology choices were fractured and disparate.  They lacked tools to do simple tasks like file transfers, task management and sharing, and managerial project oversight for anything more complicated than a simple sale.  While I was not given the power to make technical decisions on behalf of others, I was able to sway opinions within the company executive committees using compelling arguments for modern high-quality, high power solutions that would eventually go on to change how the company worked.
				</p>
				<p>
				Overall this was a very powerful growing experience for me.  I was challenged to do work that might have been outside my comfort zone before, and it put me in better touch with the fundamentals of my trade and the nature of the platform choices that I make, and how those choices effect the people I work with in a practical way.</p>

			</div>
			<div class="experience-description col-lg-3 col-md-5 col-sm-12 col-xs-12">
				<h3>Technologies Used</h3>
				<ul>
					<li>PHP</li>
					<li>MySQL</li>
					<li>HTML</li>
					<li>CSS</li>
					<li>JavaScript</li>
					<li>JQuery</li>
					<li>Angular.js</li>
					<li>Adobe After Effects</li>
					<li>Adobe Premier</li>
					<li>Adobe Photoshop</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row page experience-section surfmerchants-section">
		<div class="col-md-12 col-sm-12" style="min-height:500px;">
			<a name="surfmerchants" style="display:block;">&nbsp;</a>
			<div>
				<h2>SurfMerchants LLC.</h2>
				<div class="rightnav btn-group">
					<a class="btn btn-default" href="#top">Home</a>
					<a class="btn btn-default" href="#experience">Experience</a>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div class="experience-description col-lg-9 col-md-7 col-sm-12 col-xs-12">
				<img class="col-lg-4 col-md-4 col-sm-5 col-xs-12" src="/res/images/surfmerchants-webpage.png" />
				<p>
				Surfmerchants is the world’s leading provider of mystery shopping software.  My duties there were to add client-requested customizations to the main application, SASSIE.  These customizations were written in PHP, MySQL, HTML, CSS, Javascript and JQuery. 
				</p><p>
				The customizations were often Reports that needed to pass through millions of records of information and return condensed results which required intelligent use of memory and MySQL temporary tables to process large amounts of information in the most efficient way to suite the needs of the clients in the custom reports.  Other projects involved custom triggers that would notify clients when their stores met certain conditions.
				</p><p>
				These projects required efficient use of data and system resources, and creative ways to use iterables and temporary tables to handle large sets of data efficiently in PHP and MySQL.
				</p>
			</div>
			<div class="experience-description col-lg-3 col-md-5 col-sm-12 col-xs-12">
				<h3>Technologies Used</h3>
				<ul>
					<li>PHP</li>
					<li>MySQL</li>
					<li>HTML</li>
					<li>CSS</li>
					<li>JavaScript</li>
					<li>JQuery</li>
					<li>Custom Frameworks</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row page experience-section cadlearning-section"> 
		<div class="col-md-12 col-sm-12" style="min-height:500px;">
			<div>
			<a name="cadlearning" style="display:block;">&nbsp;</a>
				<h2>CADLearning by 4D Technologies</h2>
				<div class="rightnav btn-group">
					<a class="btn btn-default" href="#top">Home</a>
					<a class="btn btn-default" href="#experience">Experience</a>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div class="experience-description col-lg-9 col-md-7 col-sm-12 col-xs-12">
				<img class="col-lg-4 col-md-4 col-sm-5 col-xs-12" src="/res/images/cadlearning-website.png" />
				<p>
				Cadlearning is a leading provider of AutoDesk Training systems.  They have a Moodle-based video delivery platform that was based on a legacy version of Moodle and needed a proper CDN.  While there I maintained and modified proprietary customizations for their Moodle sites, as well as copied and duplicated instances of their system as they brought on new clients.  
				</p><p>
				New courses containing thousands of videos are created in a complicated process each year, I wrote bash and PHP scripts to automate the transcoding and uploading process for these new videos as they were completed by the content creation team.  I set up a clear technical process that fed videos into the CDN as they became available, saving content creators and editors time they would have otherwise spent manually uploading, tagging and cataloguing videos in processes that could have taken weeks of manual input.
				</p><p>
				I also automated processes that were already taking weeks of manual input.  When I arrived, the company had more than one hundred distinct instances of moodle - one for each major client.  They had no way of distributing courses created in one instance of moodle to another, meaning each year, on a schedule, they had video editors and business managers manually inputting courses across hundreds of sites in a process that took weeks of multiple people’s time.  I created a tool that allowed them to create a course once in one moodle instance and send the course to selected clients with the press of a button, freeing business and video editing teams time and saving the company money.
				</p>
			</div>
			<div class="experience-description col-lg-3 col-md-5 col-sm-12 col-xs-12">
				<h3>Technologies Used</h3>
				<ul>
					<li>PHP</li>
					<li>MySQL</li>
					<li>HTML</li>
					<li>CSS</li>
					<li>BASH</li>
					<li>Moodle</li>
					<li>Linux Server Management</li>
					<li>Automation</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row page experience-section rovion-section"> 
		<div class="col-md-12 col-sm-12" style="min-height:500px;">
			<div>
			<a name="rovion" style="display:block;">&nbsp;</a>
				<h2>Rovion</h2>
				<div class="rightnav btn-group">
					<a class="btn btn-default" href="#top">Home</a>
					<a class="btn btn-default" href="#experience">Experience</a>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div class="experience-description col-lg-9 col-md-7 col-sm-12 col-xs-12">
				<img class="col-lg-4 col-md-4 col-sm-5 col-xs-12" src="/res/images/rovion-website-big.png" />
				<p>
				Rovion was a startup in Boston that was acquired by PointRoll after I was done with my temporary position there.  They provide a platform that allows non-technical users to create flash and html ads using an intuitive web-based interface called RAMP.  
				</p><p>
				I worked on several small features and bugs during my short time there, but my major contribution was a tool that allowed users to create an ad and then visualise that ad on their own webpage. They could input any public facing URL and an engine would save the page as an image and set the ad in a movable container on screen so that they could visualise where  the ad might fit on their page.
				</p>
			</div>
			<div class="experience-description col-lg-3 col-md-5 col-sm-12 col-xs-12">
				<h3>Technologies Used</h3>
				<ul>
					<li>PHP</li>
					<li>MySQL</li>
					<li>HTML</li>
					<li>CSS</li>
					<li>JavaScript</li>
					<li>JQuery</li>
					<li>Custom Frameworks</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row page experience-section wedu-section"> 
		<div class="col-md-12 col-sm-12" style="min-height:500px;">
			<div>
			<a name="wedu" style="display:block;">&nbsp;</a>
				<h2>Wed&uuml;</h2>
				<div class="rightnav btn-group">
					<a class="btn btn-default" href="#top">Home</a>
					<a class="btn btn-default" href="#experience">Experience</a>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div class="experience-description col-lg-9 col-md-7 col-sm-12 col-xs-12">
				<img class="col-lg-4 col-md-4 col-sm-5 col-xs-12" src="/res/images/wedu-website.png" />
				<p>
				Wed&uuml; was my first regular web job, and it mostly consisted of parsing PSDs into functional HTML and CSS websites.  I learned quite a bit about cross-browser compatability.  This was also the time when we had to support Internet Explorer 7, and a lot of us remember the headache that was!
				</p><p>
				I was beginning to grow as a developer quite a bit while I worked there with side projects and learning how to use PHP frameworks.  Their backend admin system that allowed clients to control the content on their new pages was old and had no system or framework behind it.  Towards the end of my time there I developed a new back end for them that revolved around Codeigniter and allowed for modular activation of administrative features, allowing product managers to sell packages to clients in a clearly defined way with easy on-and-off switches for functionality.
				</p>
			</div>
			<div class="experience-description col-lg-3 col-md-5 col-sm-12 col-xs-12">
				<h3>Technologies Used</h3>
				<ul>
					<li>PHP</li>
					<li>MySQL</li>
					<li>HTML</li>
					<li>CSS</li>
					<li>Codeigniter</li>
					<li>Web Design</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row page experience-section jcap-section"> 
		<div class="col-md-12 col-sm-12" style="min-height:500px;">
			<div>
			<a name="jcap" style="display:block;">&nbsp;</a>
				<h2>J-Cap Web Design</h2>
				<div class="rightnav btn-group">
					<a class="btn btn-default" href="#top">Home</a>
					<a class="btn btn-default" href="#experience">Experience</a>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div class="experience-description col-lg-9 col-md-7 col-sm-12 col-xs-12">
				<p>
				J-Cap Web Design was my own business that I ran while I was in college after I had learned the basics of web development from my mentor at HOA Online Resource.  The name came from my own name, Jeffrey Carl Allen Parrish - JCAP.  
				</p><p>
				Here I took the basic things I learned about HTML and PHP and expanded into CSS, JavaScript, JQuery and Object-Oriented programming while I worked for various other companies in the southern New Hampshire area.  I built basic websites, added unique applications to existing websites, and maintained legacy PHP applications for several clients.
				</p><p>
				While I was learning new ways to write better code and design better websites, I also had to understand the entire web development process in order to get anything done by myself.  I had to start by selling my services to a new client that I had just met, then I had to seek to understand their needs, and sometimes develop specifications for the client to understand the service I will provide, then I could get to the actual development of the product.  Finally I had to support projects and struggle with how to bill for support hours after the fact.  I had to learn on my feet, and adapt what I knew about the technology to each client’s completely unique needs.
				</p><p>
				One of my favorite projects that I did while running this business was a complex form builder tool that allowed the client to dynamically control their questions.  It was for a software company in Manchester that had a sophisticated modular product, and the form was a Needs Analysis tool for onboarding new clients.  They write new modules for their product all the time, so - naturally - new questions would arise.  This tool allowed them to tailor their needs analysis as their product changed, and this tool is still in service at time of writing.
				</p>
			</div>
			<div class="experience-description col-lg-3 col-md-5 col-sm-12 col-xs-12">
				<h3>Technologies Used</h3>
				<ul>
					<li>PHP</li>
					<li>MySQL</li>
					<li>HTML</li>
					<li>CSS</li>
					<li>JavaScript</li>
					<li>JQuery</li>
					<li>Codeigniter</li>
					<li>Web Design</li>
					<li>Client Management</li>
					<li>Technical Support</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row page experience-section mcc-section"> 
		<div class="col-md-12 col-sm-12" style="min-height:500px;">
			<div>
			<a name="mcc" style="display:block;">&nbsp;</a>
				<h2>Manchester Community College</h2>
				<div class="rightnav btn-group">
					<a class="btn btn-default" href="#top">Home</a>
					<a class="btn btn-default" href="#experience">Experience</a>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div class="experience-description col-lg-9 col-md-7 col-sm-12 col-xs-12">
				<img class="col-lg-4 col-md-4 col-sm-5 col-xs-12" src="/res/images/mcc-website.png" />
				<p>
				I attended Manchester Community College for my computer science training.  Unfortunately, there were two classes that attended the college -  those who had a technical background and came to college for the degree, and those who were curious about programming and wanted to actually learn.  The latter were often underserved at the college, and I was given the opportunity to help some of them
				</p><p>
				I mostly taught html and basic programming concepts, explaining variables as containers and showing them basic programs with input and how it can output.  I found that concepts and code started making sense to students when they could input their own figures, usually numbers, into an application and watch it change the output based on their code - and it was very satisfying to see concepts ‘click’ with them.
				</p>
			</div>
			<div class="experience-description col-lg-3 col-md-5 col-sm-12 col-xs-12">
				<h3>Technologies Used</h3>
				<ul>
					<li>C#.NET</li>
					<li>VB.NET</li>
					<li>HTML</li>
					<li>Technical Training</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row page experience-section hoa-section"> 
		<div class="col-md-12 col-sm-12" style="min-height:500px;">
			<div>
			<a name="hoa" style="display:block;">&nbsp;</a>
				<h2>hoa online resource</h2>
				<div class="rightnav btn-group">
					<a class="btn btn-default" href="#top">Home</a>
					<a class="btn btn-default" href="#experience">Experience</a>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div class="experience-description col-lg-9 col-md-7 col-sm-12 col-xs-12">
				<img class="col-lg-4 col-md-4 col-sm-5 col-xs-12" src="/res/images/hoa-website.png" />
				<p>
				This is where I first started working on any kind of development.  A friend of the family, met through church, was interested in mentoring a new developer to offload some work onto.
				</p><p>
				I worked on my very first programs when I was there.  One of the first things I did was to create a dynamic pdf generation tool, that would draw a legal form line by line with user input.  This allowed homeowners associations to deliver documents to home owners to sign, with their information filled into the form before printing.  This saved homeowner’s time and made the signature process easier for homeowners associations.
				</p>
			</div>
			<div class="experience-description col-lg-3 col-md-5 col-sm-12 col-xs-12">
				<h3>technologies used</h3>
				<ul>
					<li>PHP</li>
					<li>MySQL</li>
					<li>HTML</li>
					<li>CSS</li>
					<li>Custom Frameworks</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row page experience-section desjardins-section"> 
		<div class="col-md-12 col-sm-12" style="min-height:500px;">
			<div>
			<a name="desjardins" style="display:block;">&nbsp;</a>
				<h2>Desjardins Diamond Merchants</h2>
				<div class="rightnav btn-group">
					<a class="btn btn-default" href="#top">Home</a>
					<a class="btn btn-default" href="#experience">Experience</a>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div class="experience-description col-lg-9 col-md-7 col-sm-12 col-xs-12">
				<p>
				I built Desjardins in Manchester a new website to replace their aging one while I was running my Business for J-Cap Web Design.  I found them as a client after going door to door in manchester on elm street to ask all of the businesses if they had any web-related needs that I could fulfill.  Desjardins was interested and I built them a new website based on the content from their old site.
				</p><p>
				While I was proud of the design work that I could fulfill that I did on the website, after I built their website they contacted me about other technical needs that they had with their access database that they had on their computer, and other basic technical support that they needed on their older PCs that they used to manage their business.  I found myself becoming their technical support person, and I was happy to fill the need.  I was happy to do the work, even though it might not have been the kind of work I intended to do, and I am not ‘above’ providing technical support, and I make it a point to become flexible in any role to either learn a new technology as the company needs evolve, or to help with other roles that I might not normally consider to be my job description.
				</p>
			</div>
			<div class="experience-description col-lg-3 col-md-5 col-sm-12 col-xs-12">
				<h3>technologies used</h3>
				<ul>
					<li>HTML</li>
					<li>CSS</li>
					<li>Web Design</li>
					<li>Technical Support</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row page experience-section contact-section"> 
		<div class="col-md-12 col-sm-12" style="min-height:500px;">
			<div>
			<a name="contact" style="display:block;">&nbsp;</a>
				<h2>Get in touch</h2>
				<div class="rightnav btn-group">
					<a class="btn btn-default" href="#top">Home</a>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div class="experience-description col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<p>
					<b>Jeffrey Parrish</b><br />
					106 Center St.<br />
					Goffstown, NH 03045
				</p><p>
					603.325.5846<br />
					<a href="mailto:jeffs.linux@gmail.com">jeffs.linux@gmail.com</a><br />
				</p>
			</div>
		</div>
	</div>
</div>


<script>
$('#particles-js').particleground({
	dotColor: '#08298A',
	lineColor: '#0431B4',
	direction: 'bottom'
});

$(document).scroll(function() {
	var islow = $(this).scrollTop()>$(window).height()-1;
	$(".nav").css({backgroundColor: islow ? "white":"transparent",color:islow?"black":"white"});
	$(".nav a").css({backgroundColor: islow ? "white":"transparent",color:islow?"black":"white"});
});
$(document).scroll();
</script>
</body>
</html>
