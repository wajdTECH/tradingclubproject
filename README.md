# tradingclubproject
a platform for learning to trade financial markets for a local community at Tunis Business School, University of Tunis

For the most part I have used raw HTML5 and CSS3 to built the front-end from scratch.
I have also used a snip of jQuery to manage to get the sticky interactive navbar effect when scrolling up and down.

All images used within the web pages are Copyright Free Public Domain Images retrieved from Pexel.com

As for the private members area, I tried not to reinvent the wheel and work with a strong open source app that I can customize as freely as I want to. So I downloaded and used a recent version of Wordpress and using the power of custom plugins I used to manipulate the app to reach a desired state.

List of Plugins Used:

*Restrict Categories By Matthew Muro (https://wordpress.org/plugins/restrict-categories/)
*Members By Justin Tadlock (https://wordpress.org/plugins/members/)
*Profile Builder By COZMOSLABS https://www.cozmoslabs.com)
*Nav Menu Roles By Kathy Darling (https://wordpress.org/plugins/nav-menu-roles/)

Members Folder:

Inside the members folder you will find a Compressed/Exported version of the private members area.
You can Extract it using the Wpress-Extractor tool (https://github.com/fifthsegment/Wpress-Extractor) and by placing both the compressed  version of the file (with the .wpress extension) and the Wpress-Extractor (.exe) tool within the same folder and then opening the command line, get the folder path using the 'cd PATHOFTHEFOLDER' command and then using the 'wpress-extractor filename.wpress'.


Contact Page:

I used a simple yet effective php script to retrieve the data submitted through the contact form and store it into a MySQL database. You can find that script named 'action_insert.php' inside the 'PHP_CONTACT_HANDLING folder';
Then I used the 'include' method in php to call that script into the web page 'contact_success_page.php'.
