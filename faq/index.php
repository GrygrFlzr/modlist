<?php
set_include_path($_SERVER['DOCUMENT_ROOT']);
require_once('resources/scripts/engine.php');
$page = new Page;
$page->setTitle('FAQ');
$page->startBody();
?>
<div class="page-header">
  <h1>FAQ<br /><small>Things we get asked most</small></h1>
</div>
<div class="panel panel-info">
	<div class="panel-heading">What is the mod list?</div>
	<div class="panel-body">
		The modlist was created to be a comprehensive list of as many mods as possible. The MCF Mods Forum is quite hectic and popular threads easily bury fresh, new ideas that pop up and never quite gain attention.<br />
		Furthermore, searching within the forums was limited, as you could not accurately pinpoint mod versions, and each thread had its own format to display things. There was also the matter of compatibility and dependency.<br />
		Thus the list was born.
	</div>
</div>
<div class="panel panel-info">
	<div class="panel-heading">Why has (insert mod name here) not been added to the list?</div>
	<div class="panel-body">
		First of all, there are only 2 people working on the list. We are also volunteers working on our own free time. Furthermore, we are not omniscient and cannot possibly know of every mod in existence.<br />
		Mods might also not meet the requirements to be added yet.
	</div>
</div>
<div class="panel panel-info">
	<div class="panel-heading">What are the requirements for a mod to be added?</div>
	<div class="panel-body">
		Mods <em>must not</em> be created using a mod-maker program. This is to the sheer amount of such mods created, and such mods should have a dedicated list in the first place.<br />
		Second, mod pages/threads must contain <em>working downloads</em> and <em>screenshots</em>. Video can be a replacement for screenshots if what the mod does cannot be displayed by a screenshot (example: modifying vanilla drops).<br />
		Finally, mods <em>must have a description</em>. If the player doesn't know what it does, why would they ever use the mod?<br />
		Working downloads means that the downloaded mod must be able to run. Some threads have screenshots but the download link they provide is either invalid or corrupted.<br />
		WIP mods are allowed as long as these requirements are met. WIP mods that have no download links and screenshots are not accepted.<br />
		Requirements may change without notice.
	</div>
</div>
<div class="panel panel-info">
	<div class="panel-heading">Why is there only one search bar? The old list had separate search bars and dropdowns...</div>
	<div class="panel-body">
		While the redesign was in progress, it was obvious that granular search was not needed - simple search was more powerful, could look through description, author, names, tags and was much faster than the old script.<br />
		It is also more aesthetically pleasing than several textboxes and dropdowns crammed under table headers.
	</div>
</div>
<div class="panel panel-info">
	<div class="panel-heading">What's that globe icon?</div>
	<div class="panel-body">
		That means the mod is <em>Open Source</em>! A blue icon indicates it's clickable and can lead to a page containing the source code, a black icon means the source code is either contained within the normal downloads or are only available by contacting the author.<br />
		You can also look for <em>Open Source</em> using the search bar.
	</div>
</div>
<div class="panel panel-info">
	<div class="panel-heading">Why can't I see Author names on my mobile phone?</div>
	<div class="panel-body">
		The site design is now responsive and because small screen sizes cannot fit too much information as a larger screen, we have hidden both the Author Name.<br />
		We are looking for ways around this that do not mess with semantics. You are still able to search for author names, they are simply not visible on a small screen.
	</div>
</div>
<?php
$page->endBody();
echo $page->render('resources/templates/modlist-template.php');