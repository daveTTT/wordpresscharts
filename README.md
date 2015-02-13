# wordpresscharts
add Sheetsee to WordPress
<h3>WORKING CODE FOR ADDING SHEETSEEJS TO WORDPRESS WEBSITE</h3>
<p>Step 1: insert the "sheetseejs" folder into your childtheme's "js" folder</p>
<p>Step 2: copy the functions from "add-to-childtheme-functions.php" into your childtheme's functions.php file</p>
<p>Step 3: add additional css into the sss.css file</p>
<p>Step 4: use the default shortcode for inserting a Sheetsee PIECHART:</p>
<p>[ss_chart url="" label="" unit=""]</p>
<p>url="INSERT YOUR URL TO GOOGLE SPREADSHEET"</p>
<p>label="INSERT YOUR LABEL"</p>
<p>unit="INSERT YOUR UNIT"</p>
<p>Step 5: Other shortcode field options:</p>
<p></p>
<p>div_id="" // the default is "sheetseecharts" if adding more than one chart to a page, be sure to give each a unique name</p>
<p>          // follow the naming convention of "sheetseecharts1", "sheetseecharts2", "sheetseecharts3", etc</p>
<p>class="" // the default is "sheetseepie" which gives a piechart</p>
<p>         // for a line chart use "sheetseeline" and for a bar chart use "sheetseebar"</p>
<p>m="" // the default is "[80,80,80,80]", and is the margins top, right, bottom, left</p>
<p>w="" // the default is "600" and should match the width you set in your css</p>
<p>h="" // the default is "400" and should match the height you set in your css</p>
<p>x="" // this is an optional x axis text label</p>
<p>hi="" // this is an optional highlight colour, the default is the same hex colour as the item</p>
<p></p>
<p>Set hexcolor by adding a column to your spreadsheet with the heading hexcolor.</p>
<p></p>
<p>Follow chart and sheetsee instructions at:</p>
<p>http://jlord.us/sheetsee.js/docs/basics.html and http://jlord.us/sheetsee.js/docs/sheetsee-charts.html</p>
