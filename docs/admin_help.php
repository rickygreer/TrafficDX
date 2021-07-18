<?php 

$sitetitle = "Traffic Exchange Script";
$titletext = "TrafficDX Owner Manual - Admin Area Help Guide";
$keywords = "trafficdx, traffic, exchange, script, member, sites, credits, auto, manual, paid, php, traffic exchange, exchange script, php traffic, paid click, free traffic, create unlimited, auto manual, banner text, manual surf, downline levels, traffic exchange script, php traffic exchange, traffic exchange systems, traffic exchange software, credits and cash, paid click ads, create unlimited member, member paid click, downline levels referral, earn credits";
$descript = "Best PHP Traffic Exchange Script Available! This advanced traffic exchange script features auto surf, manual surf, paid to surf, paid to click, banners ads, text ads, games, and more...";
include("../header.php");

?>
<h1>TrafficDX Admin Area Help Guide...</h1>
<p align="justify">
If changes are made in any section below, you must click the Save or Submit button for those changes to take effect.
<br><br>

<center>
<a href="index.php">Home</a> | <a href="#General Options">General Options</a> | <a href="#User/Site Manager">User/Site Manager</a> | <a href="#Manage Adverts">Manage Adverts</a>| <a href="#Manage Modules">Manage Modules</a>| <a href="#Other Settings">Other Settings</a> | <a href="#Manage Database">Manage Database</a>
</center>
<br>
<hr>
<br>
<a href="#" name="General Options"><h1>General Options</h1></a>

<b>Manage Stats:</b> View the overall statistics for your site. Also be able to Reset the Stats on the main page to zero values. This resetting will allow for all Stat values to start over.
<br><br>

<b>Overall Stats:</b> See how many new members have joined on that day, new sites that need approval, number of members that have requested payments, and number of sites that have been reported for abuse from other members. This is the default page shown at login.
<br><br>

<b>Weekly Stats:</b> Shows in a graphic way the User's earned credits and User's sites shown.
<br><br>

<b>Admin Settings:</b> Allows you to change the Admin Area login info. Note: You will need to change the Login field first and then login again. Then you will change the password, then you will login again.
<br><br>

<b>System Settings:</b> View and set all the System Settings that pertain to your site including:
<br><br>

<blockquote><blockquote>
	<b>Set Result/page:</b> Set the amount of records to show in sections that list users, sites, and any other section that lists records.
	<br><br>
	
	<b>Allow Unique Visit Credits?:</b> Set to allow Users to receive credits to an account called Unique Visit Credits when promoting their Referral URL and people visit their page. Please see below for setting value.
	<br><br>
	
	<b>Set Unique Visit Credits:</b> This value is added to every User's Unique Visit Credits account when someone visits member's Referral URL page.
	<br><br>
	
	<b>Initial bonus Auto Credits:</b> This value is added to every new User's Auto surf account when they first signup on your site.
	<br><br>
	
	<b>Initial bonus Manual Credits:</b> This value is added to every new User's Manual surf account when they first signup on your site.
	<br><br>
	
	<b>Contest 'x':</b> Number of sites User needs to Surf before a link appears on the Top Surf bar. User then will click on it to win x amount of credits (see setting below. Set to '0' to disable.
	<br><br>
	
	<b>Contest Bonus:</b> Amount of credits User Wins when surfing (Refers to Contest 'x' above).
	<br><br>
	
	<b>Inactivity threshold:</b> Number of days before User is considered inactive. It will list User in the Manage Users section under 'Inactive' column.
	<br><br>
	
	<b>Show sites in advance:</b> This setting will allow User sites to be shown even if they have no credits assigned. If set to "Yes" then a User's site with 0 assigned credits will still show to others but will receive negative credits. If set to "No" then only User sites with credits assigned will be show, otherwise the default site in the ./vars.php file will be shown.
	<br><br>
	
	<b>Signup with same IP:</b> Allow more than one signup from same IP (Internet Protocol) Address.
	<br><br>
	
	<b>Set Minimum Withdrawal $:</b> A Withdrawal Option will appear in User Area once they reach this amount. Then User may then request to be paid this amount.
	<br><br>
	
	<b>Turing Numbers:</b> This section is for enabling a Turing Number image which Users need to manually enter before submitting a form. Turing Numbers are available on the main, login, signup and contact pages. 
	<br><br>
	
	<b>Auto Surf Settings:</b> This section is for setting all parameters pertaining to the Auto Surf feature.
	<br><br>
	
	<b>Allow Auto Surf Page?:</b> Choose to allow members to auto surf or not. If you answer yes then continue to set all values in this section.
	<br><br>
	
	<b>Allow Type of Sites:</b> Allow to show java, flash and active-x member sites for Auto Surf Page.
	<br><br>
	
	<b>Allow Auto Surf For Cash?:</b> Both Auto and Manual Surf For Cash can be Yes. Only one can be offered.
	<br><br>
	
	<b>Allow Auto Surf For Signup Bonus Credits?:</b> You may set to Yes to require users to surf before their Signup Bonus credits are added. If set to No then Users will get their Signup Bonus without surfing.
	<br><br>
	
	<b>Signup-Bonus Credits after X visits:</b> User will get their One time Auto Surf signup bonus credits after they surf X amount of pages. They will need to surf before getting their credits assigned into Auto Surf account.
	<br><br>
	
	<b>Pay Cash After X time:</b> User earns cash if they surf X amount of pages within 24 hours or else it will reset after that and they start the earn x amount of sites again...they have to surf the sites set by admin to earn cash but within the 24 hour period. Note: You will set Cash Amount in Sell Member Accounts.
	<br><br>
	
	<b>Auto Surf Refresh time:</b> Time in seconds the surfbar is refreshed in Auto Surf Window. This amount of seconds is for User to wait before it goes to the next member site.
	<br><br>
	
	<b>Manual Surf Settings:</b> This section is for setting all parameters pertaining to the Manual Surf feature.
	<br><br>
	
	<b>Allow Manual Surf Page?:</b> Choose to allow members to Manual surf or not. If you answer yes then continue to set all values in this section.
	<br><br>
	
	<b>Allow Type of Sites:</b> Allow to show java, flash and active-x member sites for Manual Surf Page.
	<br><br>
	
	<b>Allow Manual Surf For Cash?:</b> Both Auto and Manual Surf For Cash can be Yes. Only one can be offered.
	<br><br>
	
	<b>Allow Manual Surf For Signup Bonus Credits?:</b> You may set to Yes to require users to surf before their Signup Bonus credits are added. If set to No then Users will get their Signup Bonus without surfing.
	<br><br>
	
	<b>Signup-Bonus Credits after X visits:</b> User will get their One time Manual Surf signup bonus credits after they surf X amount of pages. They will need to surf before getting their credits assigned into Manual Surf account.
	<br><br>
	
	<b>Pay Cash After X time:</b> User earns cash if they surf X amount of pages within 24 hours or else it will reset after that and they start the earn x amount of sites again...they have to surf the sites set by admin to earn cash but within the 24 hour period. Note: You will set Cash Amount in Sell Member Accounts.
	<br><br>
	
	<b>Manual Surf Refresh time:</b> Time in seconds the surfbar is refreshed in Manual Surf Window. This amount of seconds is for User to wait before it goes to the next member site.
	<br><br>
	
	<b>Manage Transfer Cash & Credits:</b> This section refers to the Transfer Cash & Credits in member area section.
	<br><br>
	
	<b>Transfer Cash:</b> Set amount to cut Percentage when user Transfer Earned Cash to Account Cash. This Fee will appear in User Area Transfer Cash & Credits section and will be added as an Admin fee for processing transactions. You may enter 0 if you wish NOT to charge a processing fee.
	<br><br>
	
	<b>Transfer Auto Credits:</b> Set amount to cut Percentage when users Transfer Auto Credits to Manual Credits. This Fee will appear in User Area Transfer Cash & Credits section and will be added as an Admin fee for processing transaction. You may enter 0 if you wish NOT to charge a processing fee.
	<br><br>
	
	<b>Transfer Manual Credits:</b> Set amount to cut Percentage when users Transfer Manual Credits to Auto Credits. This Fee will appear in User Area Transfer Cash & Credits section and will be added as an Admin fee for processing transaction. You may enter 0 if you wish NOT to charge a processing fee.
	<br><br>
	
	<b>Transfer Unique Visitor account credits into Auto Credits:</b> Set Percentage amount to cut when users Transfer Unique Visits Credits to Auto Credits. This Fee will appear in User Area Transfer Cash & Credits section and will be added as an Admin fee for processing transaction. You may enter 0 if you wish NOT to charge a processing fee.
	<br><br>
	
	<b>Transfer Unique Visitor account credits into Manual Credits:</b> Set Percentage amount to cut when users Transfer Unique Visits Credits to Manual Credits. This Fee will appear in User Area Transfer Cash & Credits section and will be added as an Admin fee for processing transaction. You may enter 0 if you wish NOT to charge a processing fee.
	<br><br>
	
	<b>Deposit Cash:</b> This section is for setting up an Administration fee to be charged when Users deposit cash to their Account Cash. The fee you set will be added to the Total amount for them to pay. You will manually add cash to Account Cash once you verify payment (edit User profile in the Manage Users section). Note: If you have the optional payment modules enabled, which are sold seperately, then you can set to automatically have values assigned once member has completed the payment transaction.
	<br><br>
	
	<b>Deposit Cash:</b> You may set to charge either a percentage or a fixed amount.
	<br><br>
	
	<b>Set Amount:</b> Set amount to cut Percentage / Constant when admin place cash for user account. This Fee will appear in User Area Deposit Cash section and will be added as an Admin fee for processing transaction. You may enter 0 if you wish NOT to charge a processing fee.
	<br><br>
	
	<b>Minimum Deposit Cash:</b> Set Minimum amount a user can deposit to their Account Cash.
	<br><br>
	
	<b>Manage Accounts:</b> This section refers to the Sell Member Accounts section.
	<br><br>
	
	<b>Send Reminder:</b> Set x amount of days before the system sends a notification email about a Member's Expired Account.
	<br><br>
	
	<b>Set Amount To Del Site:</b> Set x amount of days before Sites are deleted from a Paid User Account if they don't renew their membership level account. This will reset their account back to the Free Account status.
	<br><br>
	
	<b>Site Status Settings:</b> This section is for enabling the Site Statistics on the main page right hand side bar. To include: Guest Statistics, Site Statistics, Online Member Statistics, Site Displayed Statistics, Top 10 Surfers and Top 10 Referrers.
	<br><br>
	
</blockquote></blockquote>
<b>Edit Templates:</b> In this section you will be able to edit (change the look and feel) of all the pages on the main site and member area.
<br><br>

<b>Manage FAQ Page:</b> This section will appear on the main site faq.php page that is accessible through the Top main header menu (this is not the User Area help page).
<br><br>

<hr>
<br>
<a href="#" name="User/Site Manager"><h1>User/Site Manager</h1></a> 

<b>Manage Users:</b> View all the Users that are in the System. It will list them depending their account status mode. You may Add new User, Delete All Users, Enable, Suspend and Edit Users Profile. To View/Edit a User Profile, click their Email Address.
	<br><br>
	Note: When using the Search function, you may enter any string, no need to be exact word. And click the Search button, NO Enter on keyboard allowed.
<br><br>

<b>Manage Sites:</b> View all the sites that are in the System. It will list them depending their status mode. You may Add new sites to a member or Delete any sites. Also you may globaly enable, delete, disable or suspend sites.
<br><br>
	Note: When using the Search function, you may enter any string, no need to be exact word. And click the Search button, NO Enter on keyboard allowed.
<br><br>

<b>Abuse Report:</b> View a list of all Sites that were submitted by Users surfing other sites that were considered as abusive or inaccessible. You will verify them and decide if you are going to enable them or delete them.
<br><br>
	Note: You will need to remove the site from here first then it will remove from Manage Sites as well.
<br><br>

<b>Sell Member Accounts:</b> Here you will be able to add as many Paid Memberships as you like. These Packages will appear in the Member Area under the Upgrade section. Users will be able to Upgrade their current account to a higher level account.
<br><br>
	NOTE: If admin sets Membership Duration (days) to something else other than -1 (Lifetime Membership). Once User's membership expires, it will send a notification for renewal. User will have to Login and Deposit money if needed, Upgrade account if they wish to keep their Paid membership level and all the features that come with it. OR else account will be downgraded to Free (Basic) account and all saved URLs with assigned credits will return to waiting period until they renew their membership.
<br><br>

<b>Sell Member Credits:</b> Here you will be able to add as many Credit Packages as you like. These packages will appear in the Member Area for them to buy Credits from Admin.
<br><br>
	Note: 'Buy Cost' will be the amount you will charge User for amount you set in 'Credits' field and 'Sell Cost' will be the amount you will pay User for amount you set in 'Credits' field.
<br><br>

<b>Add Promo Banners:</b> These Banners will appear in User Referral area for use of promoting their referral URL.
<br><br>

<b>Email Users:</b> You may send and save message in plain text or html by User Account Status, All Users or by Membership level. When you hit Send message button it will return you to this page. This section will help you to keep in touch with your members or send newsletters.
<br><br>

<b>Pending Payments:</b> Note: You can only see the pending payments if you are using the Optional Payment Modules and Pending mode is enabled.
<br><br>

<b>Withdrawal Requests:</b> Here you will see the list of all Users requesting to have their Earned Cash amount be sent to their preferred payment processor account.
<br><br>

<b>Transaction Log:</b> In this section you will be able to see all Cash Transactions made by user.
<br><br>

<hr>
<br>
<a href="#" name="Manage Adverts"><h1>Manage Adverts</h1></a> 

<b>Sell PTC Ad Packages:</b> Here you will be able to add as many Paid To Click packages as you like. These Packages will appear in the Member Area under PTC Section where they will be able to buy, and admin will then approve these in the Manage PTC Ads area which will then appear in the Member Area for all members to earn cash or credits. Each member will need to logon to the member area and go to the PTC section to view other member ads to earn credits and/or cash.
<br><br>

<b>Sell Banner/Text Ads:</b> Here you will be able to add as many Banner/Text Ad packages as you like. These Packages will appear in the Member Area where they will be able to buy, and admin will then approve these in the Manage Banner/Text Ads area. 
<br><br>
	The banners will rotate on top of all site pages, the Jackpot area, and the surfbars. Text Ads will rotate on all bottom part of all site pages except for the main page where they will appear on the right side under the Site News box.
<br><br>

<b>Manage Banner Ads:</b> Banners that members have submitted will appear on top of all site pages, the Jackpot area, and the surfbars for Users to see. All ads submitted must be approved by the admin before they will be shown.
<br><br>
	Note: If you get errors trying to upload banners then you will need to change /banners and /banners/advertisers and /banners/jackpot to 777 permission.
<br><br>

<b>Manage Text Ads:</b> These Text Ads submitted by members or approved by you (admin) will rotate/appear on all site pages (on the side bar of the main page) and are all Clickable.
<br><br>

<hr>
<br>
<a href="#" name="Manage Modules"><h1>Manage Modules</h1></a>

These are optional modules which are sold seperately. This currently includes: Automatic Payment Deposits, Targeted Categories, and Game Modules.
<br><br>

<b>Enable Modules:</b> You will need to enable all modules before all the different module menus are activated.
<br><br>

<b>Manage Categories:</b> Enter categories that will appear on the member signup page and member area for users to select. If this module is activated then members can choose the categories to view sites in, and the categories their sites will be show in.
<br><br>

<b>Payment Processors:</b> These modules will allow you to setup the Automatic Cash Deposits directly into the user's Account Cash account. Available payment processors are: 2checkout, paypal, stormpay, sfipay, Egold, INTgold, Moneybookers,and PaySwiss. 
<br><br>

<b>Game Modules:</b> 3 games are available: Match Tickets, Heads Or Tails, and the Bubble Game. Each game allows user to earn cash or credits.
<br><br>

<hr>
<br>
<a href="#" name="Other Settings"><h1>Other Settings</h1></a>

<b>Credit Market:</b> If you allow this section, Amounts set on here will be reflected in Post Credit Sale and Buy User Credits in Member area. Amounts in Maximal and Minimal fields are ranges where User will need to set within these 2 ranges in the Post Credit Sale section.
<br><br>

<b>Jackpot Settings:</b> Here you will allow Credits or Cash Jackpots. You may set the Jackpot Section in User area where they Bid an X amount of credits for a chance to WIN more credits to their account. Example: If User Bets 50 then they will win 50000. Each Bet and Amount of Credits to win is multiplied.
	<br><br>
	Note: You will need to have 4 active banners for Jackpot to work in User area. You may add them from Manage Banners or wait until Users start adding them from their area.
<br><br>

<b>Downline Settings:</b> You may set up to 10 earning levels. Users will earn cash when their downline Upgrades account to a paid one, Buys PTC, Banner and Text Ads.
<br><br>
	Note: Users will NOT earn when their downline deposits cash into their Account Cash, only when they spend the cash.
<br><br>

<b>Payment Methods:</b> Here you will be able to enter an unlimited amount of Payment Methods to offer your Users. These payment options will appear in User area where ever there is a Purchase involved OR for requesting their Earned Cash.
<br><br>
	Important note: If you installed any optional Payment Module(s), then you will NOT need to add here as well. Available Payment Processor Modules are 2checkout, Paypal, Stormpay, E-Gold, INTGold, MoneyBookers, SFIPay and PaySwiss, AND are purchased seperately. 
<br><br>

<b>Block Signup:</b> This section is for you to enter either email address or IP address to prevent  or block a signup.
<br><br>

<b>Block Domains:</b> This section is for Blocking Domains on the signup page "Your site URL:" or when user adds new site.
<br><br>

<hr>
<br>
<a href="#" name="Manage Database"><h1>Manage Database</h1></a>

<b>Optimize DB:</b> It is recommended you run this Function every week, or on a monthly basis, to keep your system optimized and running smoothly.
<br><br>
	Note: Before you click the Optimize button below, you will should Backup your Database first then come here and click Optimize. This will fix any problems with database corruptions or slowness and will Optimize to make the system work faster. 
	<br><br>
	WARNING: After you click Optimize Button, DON'T do anything else like refresh or close window. While this is in process please wait until it Finishes the Optimization. For larger databases it make take several minutes. 
<br><br>

<b>Restore Database:</b> Here you may Restore any Database backups you have already done in "Backup Database".
<br><br>

<b>Backup Database:</b> Here you may Backup your Database including Tables and Data into the http://www.yourdomain.com/control/export/* file. Make sure the /export directory has 777 permission.
<br><br>

<hr>
<br>
</p>

<center>
<a href="index.php">Home</a> | <a href="#General Options">General Options</a> | <a href="#User/Site Manager">User/Site Manager</a> | <a href="#Manage Adverts">Manage Adverts</a>| <a href="#Manage Modules">Manage Modules</a>| <a href="#Other Settings">Other Settings</a> | <a href="#Manage Database">Manage Database</a>
</center>
<br>
</td>
<?php 

include("../footer.php");

?>
