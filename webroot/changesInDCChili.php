<?php require 'views/header.php'; ?> 
<?php require 'views/neck.php';   ?>
<h1>Changes to Dungeon Crawl Chili</h1>
...as compared to DCSS.
<p>As of Oct 10</p>

<pre><b>MASSIVE SPOILERS BELOW!</b></pre>

<h2>Implemented already:</h2>

<h4>Important changes</h4>
<ul><li>Scrolls and potions are already identified.</li>
    <li>The drop rate for Artefacts has been doubled.</li>
    <li>Malevelant forces have been removed.</li>
    <li>Uniques (DCSS existing or not) have a brown text added to the unqiue's description starting with: 
        "DC Chili change: ..." that describes the drop-on-kill happening 50% of the time.</li>
         (If you would like to see a specific drop for a specific unqique, please contact RoGGa in DC discord.)</li>
    <li>Most uniques have a 5% chance of getting an artefact weapon, armour, jewellery or shield/orb.</li>
    <li>In Webtiles, the items bar has been totally rework and is vertical by default.</li>
</ul>

<h4>Branch Related</h4>
<ul><li>The number of floors for each branch (including Dungeon) was reduced by 1 floor, except for Orcish Mines, the Elven Halls and Crypt.</li>
    <li>To compensate for the loss of XP from 1 less floor in most branches and Dungeon, Uniques have a much higher spawn rate throughout the game and 
        XP on kills has been increase by 10%.</li>
</ul>

<h4>Dungeon Floor Related</h4>
<ul><li>D:1 is mostly a forested semi-open floor layout, and has a guaranteed faded altar and a basic shop to spend the 270 gold you start with.</li>
    <li>D:2 is mostly a forested semi-open floor layout with dead trees and has Jessica almost guaranteed and at least 2 altars.</li>
    <li>D:3 is mostly a forested semi-open floor layout with corrupted trees and has 8 different possible floor layouts with a castle, and Medusa is guaranteed.</li>
    <li>D:4 is BCadren's sewer with Oskar almost guaranteed. The DCSS Sewer branch has been removed.</li>
    <li>D:5 is a catacomb with Menkaure almost guaranteed. The DCSS Ossuary has been removed.</li>
    <li>D:6 has a hot & cold theme with 4 different central vaults.</li>
    <li>D:7 has a central abandoned nature reserve with 3 different central vaults.</li>
    <li>Out of Depths monsters for the Dungeon has been reduced from 7% to 3%.</li>
</ul>

<h4>New Uniques:  with a 50% chance of dropping an item when killed!</h4>
<ul><li><img src="https://raw.githubusercontent.com/DungeonCrawl-org/DungeonCrawlChili/refs/heads/master/crawl-ref/source/rltiles/mon/unique/medusa.png">
        Medusa, a naga with the Petrify spell, will always show up on D:3 close to the granite statues.
        On her own, she isn't dangerous but when she dies the statues change into adders and one water moccasin emerges from a fountain. She can drop a Medusa talisman.</li>
    <li><img src="https://raw.githubusercontent.com/DungeonCrawl-org/DungeonCrawlChili/refs/heads/master/crawl-ref/source/rltiles/mon/unique/oskar.png">
        Oskar the Grump is a new D:4 unique that throws garbage bags at you. He can drop a potion of cancellation.</li>
    <li><img src="https://raw.githubusercontent.com/DungeonCrawl-org/DungeonCrawlChili/refs/heads/master/crawl-ref/source/rltiles/mon/unique/rusk.png">
        Rusk is a Death Yak who can trample and with a posse of Yaks that it can drive into a frenzy. It shows up in the Lair, and it can drop a potion of might.</li>
    <li><img src="https://raw.githubusercontent.com/DungeonCrawl-org/DungeonCrawlChili/refs/heads/master/crawl-ref/source/rltiles/mon/unique/monkey_king.png">
        Monkey King is ...well... the King of the howler monkeys, and he can mark you. He can drop a scroll of summoning.</li>
    <li><img src="https://raw.githubusercontent.com/DungeonCrawl-org/DungeonCrawlChili/refs/heads/master/crawl-ref/source/rltiles/mon/unique/katinboo.png">
        Katinboo is a Felid with curare claws that can summon an ogre and a stubborn mule. She is a resident of the Lair and can drop 3 curare darts.</li>
    <li><img src="https://raw.githubusercontent.com/DungeonCrawl-org/DungeonCrawlChili/refs/heads/master/crawl-ref/source/rltiles/mon/unique/verity.png">
        Verity the Stone Dragon has the Stone Arrow spell and shows up in the Lair. It can drop a granite talisman.</li>
    <li><img src="https://raw.githubusercontent.com/DungeonCrawl-org/DungeonCrawlChili/refs/heads/master/crawl-ref/source/rltiles/mon/unique/peregrine.png">
        Peregrine the Pilferer is an invisible kobold scavenger who prowls the Orcish Mines collecting any items.</li>
    <li><img src="https://raw.githubusercontent.com/DungeonCrawl-org/DungeonCrawlChili/refs/heads/master/crawl-ref/source/rltiles/mon/unique/baba_yaga_exposed.png">
        Baba Yaga can show up in the Swamp and lives in a hut on chicken legs.</li>
    <li><img src="https://raw.githubusercontent.com/DungeonCrawl-org/DungeonCrawlChili/refs/heads/master/crawl-ref/source/rltiles/mon/unique/octavia.png">
        Octavia the Heretic is an Octopode of Gozag that can show up in Depths, and can dopr gold when killed.</li>
    <li><img src="https://raw.githubusercontent.com/DungeonCrawl-org/DungeonCrawlChili/refs/heads/master/crawl-ref/source/rltiles/mon/unique/regal.png">
        Regal, an octopode with a cape, can show up in Depths, Crypt or Zot. It can drop an unrand trident or a ring.</li> 
    <li><img src="https://raw.githubusercontent.com/DungeonCrawl-org/DungeonCrawlChili/refs/heads/master/crawl-ref/source/rltiles/mon/unique/scav.png">
        Scave the Devourer of Slime can appear in Slime:1. He hunts down slimes to eat them in order to restore his health. 
        He has taken you as a competitor and will likely attack you if you become the closest target.</li>
</ul>

<h4>Imported from BCadren Crawl</h4>
<ul><li>The species Silent Specter was added.</li>
    <li>Ported over the Maces and Flails "Leiomanos" weapon found predominately in Shoals.</li>
    <li>Wooden weapons can no longer get the Flaming ego/brand.</li>
    <li>Potions of beneficial mutation have been added.</li>
    <li>Potions of gain strength, dexterity, and intelligence have been added.</li>
    <li>Scrolls of bless item have been added, while Scroll of Brand Weapon have been removed.</li>
    <li>Readded staves of summoning that heal your allies.</li>
</ul>

<h4>Minor Changes not documented in-game.</h4>
<ul><li>The down staircases to the last floor of a branch use the different staircase for V:3 to V:4.</li>
    <li>The XP value is shown in the monster's description.</li>
    <li>Changes the silence aura mutation to a 3 tier silence halo mutation that the player is not silenced.</li>
    <li>A mutation set rework for: Black Mark<br>
        Tier 1: Devilish stinger aux attack;<br>
        Tier 2: Procs 50% up from 20%;<br>
        Tier 3: Replaces silent aura with an engulf attack and silent casting,</li>
    <li>Removed random blink when monsters go invisible.</li>
    <li>Potions of Moonshine have been removed, and so have scrolls of Identification.</li>
    <li>Gem counter has been set to the same as DCSS even though most of those branches have 1 less floor.</li>
    <li>The Tiles main menu has been reworked, and links to websites have been added.</li>
    <li>For the Tiles version, the window is maximised by default, and on Windows and Linux, the F11 key can be used to enter a borderless full screen view.</li>
    <li>The heavy brand has been replaced by vorpal.</li>
    <li>Character creation only shows recommended backgrounds after the species was chosen. 
        It is still possible to make any combo when selecting the backgrond first.</li>
</ul>

<h2>Suggestions to be considered:</h2>
<ul><li>Visit us in Discord to discuss ideas and provide feedback! </li>
</ul>
<?php require 'views/footer.php'; ?>
