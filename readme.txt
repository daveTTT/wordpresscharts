WORKING CODE FOR ADDING SHEETSEEJS TO WORDPRESS WEBSITE

insert the "sheetseejs" folder into your childtheme's "js" folder
copy the functions from "add-to-childtheme-functions.php" into your childtheme's functions.php file

add additional css into the sss.css file

use the default shortcode for inserting a Sheetsee PIECHART:
[ss_chart url="" label="" unit=""]

url="INSERT YOUR URL TO GOOGLE SPREADSHEET"
label="INSERT YOUR LABEL"
unit="INSERT YOUR UNIT"

Other shortcode field options:
div_id=""  // the default is "sheetseecharts" if adding more than one chart to a page, be sure to give each a unique name
              // follow the naming convention of "sheetseecharts1", "sheetseecharts2", "sheetseecharts3", etc
           
class=""  // the default is "sheetseepie" which gives a piechart
             // for a line chart use "sheetseeline" and for a bar chart use "sheetseebar"
           
m=""      // the default is "[80,80,80,80]", and is the margins top, right, bottom, left

w=""      // the default is "600" and should match the width you set in your css

h=""      // the default is "400" and should match the height you set in your css

x=""      // this is an optional x axis text label

hi=""     // this is an optional highlight colour, the default is the same hex colour as the item

Set hexcolor by adding a column to your spreadsheet with the heading hexcolor. 
Follow chart and sheetsee instructions at:
http://jlord.us/sheetsee.js/docs/basics.html and http://jlord.us/sheetsee.js/docs/sheetsee-charts.html

  
