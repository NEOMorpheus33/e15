 Production URL: <http://e15p3.harvardjoeapps.com  

Project 3 ~   
By: your Joseph Fanning  

Production URL: http://e15p3.harvardjoeapps.com 

Feature Summary: ~ 

Visitors to JSearch can type in keywords into the text box and search 
for anything on the https://www.harvard.edu home page. 

Visitors to the site can register/log in via the homepage menu link.     
Users can add/update/delete all of their sites while logged in including: (url, title, description, body, sitemapxml). 

Adding sites allows for faster indexing by Joebot and or manual additions to the index. More features can always be added such as logs/analytics reports, spam reports, penalties and more similar to https://www.search.google.com , also known as Google Search Console or search console for short. Bing has a similar console too.   

There's a file uploader that the user may use to upload PHP, HMTL, CSS, JS, Images for their sites. 

User's can toggle between public or private session trackers    
Each user has a public profile page which presents a short bio about their site topics, as well as a list of public favorite websites to link out to.  

Each user has their own account page where they can edit their bio, email, and login password

The home page features: 

A stream or dropdown menu of recent keyword searches / ability to delete seaerch history tab/link. 

Database Summary: 


My application has 3 tables in total in one database. It's run on DigitalOcean production servers. 

The db is named SERPS (users, serps, sites, user_serp (pivot table), serp_site (pivot table)). 


There's a many-to-many relationship between serps and sites   
There's a one-to-many relationship between users and serps 
user_serp is a pivot table that describles the two table's relationships 
serp_site is a pivot table as well. 

Outside Resources:  

https://www.stackoverflow.com     
https://www.stackexchange.com 
https://www.w3schools.com  
https://www.laravel.com  
https://www.php.net 
https://www.reddit.com 
https://www.google.com 
https://www.joepfanning.com/blog1/   

Notes for instructor:   

Omitted 