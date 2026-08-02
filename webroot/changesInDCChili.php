<?php require 'views/header.php'; ?> 
<?php require 'views/neck.php';   ?>
<h1>Changes to Dungeon Crawl Chili</h1>
<p>As of July 28 @ 10:30am Eastern time</p>

<pre>MASSIVE SPOILERS BELOW!</pre>

<h2>Implemented already:</h2>
<h4>Branch and Floor Related</h4>
<ul><li>D:1 is mostly a forested semi-open floor layout and has Jessica almost guaranteed.</li>
    <li>D:2  has 4 different floors and Medusa is garanteed.</li>
    <li>D:3 is BCadren's sewer with Oskar almost guaranteed.</li>
    <li>The number of floors for each branch (including Dungeon) was reduced by 1 floor (except for Orcish Mines, the Elven Halls and Crypt).</li>
    <li>To compensate for the loss of XP from 1 less floor in most branches and Dungeon, Uniques have a much higher spawn rate. (to be tested)</li>
</ul>

<h4>New or modified Uniques:</h4>
<ul><li><img src="https://raw.githubusercontent.com/DungeonCrawl-org/DungeonCrawlChili/refs/heads/master/crawl-ref/source/rltiles/mon/unique/jessica.png">
        Jessica now drops a book 50% of time with the Blink spell being included 50% of the time.</li>
    <li><img src="https://raw.githubusercontent.com/DungeonCrawl-org/DungeonCrawlChili/refs/heads/master/crawl-ref/source/rltiles/mon/unique/medusa.png">
        Medusa, a naga with the Petrify spell, will always show up on D:2 close to the granite statues.
        Medusa on her own isn't dangerous but when she dies the statues change into adders and one water moccasin emerges from the fountain.</li>
    <li><img src="https://raw.githubusercontent.com/DungeonCrawl-org/DungeonCrawlChili/refs/heads/master/crawl-ref/source/rltiles/mon/unique/oskar.png">
        Oskar the Grump is a new D:3 unique that throws garbage bags at you.</li>
    <li><img src="https://raw.githubusercontent.com/DungeonCrawl-org/DungeonCrawlChili/refs/heads/master/crawl-ref/source/rltiles/mon/unique/rusk.png">
        Rusk is a Death Yak who can trample and with a posse of Yaks that it can drive into a frenzy. It shows up in the Lair.</li>
    <li><img src="https://raw.githubusercontent.com/DungeonCrawl-org/DungeonCrawlChili/refs/heads/master/crawl-ref/source/rltiles/mon/unique/katinboo.png">
        Katinboo is a Felid with curare claws that can summon an ogre and a stubborn mule.</li>
    <li><img src="https://raw.githubusercontent.com/DungeonCrawl-org/DungeonCrawlChili/refs/heads/master/crawl-ref/source/rltiles/mon/unique/verity.png">
        Verity the Stone Dragon has the Stone Arrow spell and shows up in the Lair.</li>
    <li><img src="https://raw.githubusercontent.com/DungeonCrawl-org/DungeonCrawlChili/refs/heads/master/crawl-ref/source/rltiles/mon/unique/octavia.png">
        Octavia the Heretic is an Octopode of Gozag that can show up in Depths.</li>
    <li><img src="https://raw.githubusercontent.com/DungeonCrawl-org/DungeonCrawlChili/refs/heads/master/crawl-ref/source/rltiles/mon/unique/regal.png">
        Regal, an octopode with a cape, that was never added to DCSS over a year ago and was written by our own MrSquiggles.
        Regal can show up somewhere in Vaults, Depths, Crypt or Zot.</li>
</ul>

<h4>Imported from BCadren Crawl</h4>
<ul><li>The species Silent Specter was added.</li>
    <li>Ported over the Maces and Flails "Leiomanos" weapon found predominately in Shoals.</li>
    <li>Wooden weapons can no longer get the Flaming ego/brand.</li>
</ul>

<h4>Miscelanious</h4>
<ul><li>Lowered QB's and athame's mindelay to 14 skill, raised rapier's base dam to 10, and gave athame the dagger-stabbing modifier.</li>
    <li>The +6 Iskenderun Plasma Blade is a dagger type weapon that deals unresistable damage!</li>
    <li>The XP value is shown in the monster's description.</li>
    <li>Changes the silence aura mutation to a 3 tier silence halo mutation that the player is not silenced.</li>
    <li>A mutation set rework for: Black Mark<br>
        Tier 1: Hex enchancer @ 20% (unchanged);<br>
        Tier 2: Procs 50% up from 20%;<br>
        Tier 3: Replaces silent aura with an engulf attack and silent casting,</li>
    <li>Removed Malevolent Forces.</li>
</ul>

<h2>Already planned prior to CC Forks Tournament:</h2>
<ul><li>Some more imports from BCadren Crawl.</li>
</ul>

<h2>Suggestions to be considered:</h2>
<ul><li>rogga - allow Formicids to wear hats.</li>
    <li>rogga - allow Felids to wear hat and boots. And create a new unique: Katinhat</li>
    <li>rogga - allow Octopodes to wear cloaks and a helmet</li>
    <li>kuniqs — Friday, July 24, 2026 at 5:37 AM<br>
        Idea for a new mutation:<br>
        "You have large clown feet"<br>
        "You have clown-like feet"<br>
        "You have clown shoes instead of feet"<br>
        -(--) stealth, 3(4 5) base damage, kick trigger chance aux attack with 5% (10 15) chance to unresistably confuse the target for 1 (2 3) turns.
        3rd level prohibits footwear, works only without boots like the kick<br>
        rogga - add the throw pie from killer klowns?</li>
</ul>
<?php require 'views/footer.php'; ?>
