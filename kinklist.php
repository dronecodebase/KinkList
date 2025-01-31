

<?php
define('_JEXEC', 1);
define('JPATH_BASE', '../');
require_once(JPATH_BASE . 'includes/defines.php');
require_once(JPATH_BASE . 'includes/framework.php');
require_once(JPATH_BASE . 'includes/ymolib.php');
$app = JFactory::getApplication('site');
$user = JFactory::getUser();
if ($user->id == 0) {
    $app = JFactory::getApplication();
    $app->redirect(JRoute::_('../'));
}

$user = JFactory::getUser();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Hypno-Kinklist</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/x-icon" href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABx0RVh0U29mdHdhcmUAQWRvYmUgRmlyZXdvcmtzIENTNui8sowAAAAWdEVYdENyZWF0aW9uIFRpbWUAMTAvMjEvMTV5ehY1AAAAZElEQVQ4jaWTwQ3AIAwDbcT+I9f9hjYQA/mAkO7igKAACWdFAF0A2gb0hP0uCyTATyAJSoaK5xGyEmTC9lktmORUdAQvBQ5cJshktoDk0HkmKRNUEmuE6ztYVXe7bT+jW7z9zi8qYiodCjCHKgAAAABJRU5ErkJggg==">
		<link rel="stylesheet" type="text/css" href="./assets/style.min.css">
		<script src="./assets/jquery-3.3.1.min.js"></script>
		<script src="./assets/kinklist.js"></script>

	</head>
	<body>
		
		<div class="widthWrapper">
        <p>User ID: <?php echo $user->id; ?></p>
<p>User Name: <?php echo $user->name; ?></p>

			<button id="Edit"></button>
			<h1>Hypno Kink List</h1>
			<div class="legend">
				<table border="1">
					<tbody>
					<tr>
					<td><div><span data-color="#363636" class="choice no"></span> <span class="legend-text">No / N/A</span></div></td>
					<td><div><span data-color="#fd7c31" class="choice maybe"></span> <span class="legend-text">Maybe</span></div>
						<div><span data-color="#ffc233" class="choice okay"></span> <span class="legend-text">Okay</span></div>
						<div><span data-color="#04e762" class="choice like"></span> <span class="legend-text">Like</span></div></td>
					<td><div><span data-color="#b0e0e6" class="choice favorite"></span> <span class="legend-text">Favorite</span></div></td>
					<td><div><span data-color="#f389ae" class="choice try"></span> <span class="legend-text">Want To Try</span></div></td>
					</tr>
					</tbody>
					</table>			
					<input type='hidden' name='user_id' id='user_id' value='<?php echo $user->id; ?>' />
<input type='hidden' name='user_name' id='user_name' value='<?php echo $user->name; ?>' />
<input type='hidden' name='user_email' id='user_email' value='<?php echo $user->email; ?>' />
	
			</div>
			
			<div id="ExportWrapper">
				<input type="text" id="URL">
				<button id="Export">Export</button>
				<div id="Loading">Loading</div>
			</div>
			<button id="StartBtn"></button>
			<div id="InputList"></div>
		</div>
		<div id="EditOverlay" class="overlay">
			<textarea id="Kinks">
#Partner Choice
(General)
* I enjoy working with males
* I enjoy working with females
* I enjoy working with trans people
* I enjoy working with gender-fluid people
* Gender doesn't matter to me

#Trance Behaviour
(No Suggestions)
* I am a very suggestible person
* I need a very safe environment
* I drop very easily
* I move or twitch a lot while under
* I come out of trance easily
* I am disoriented after coming back
* I experience amnesia after coming back

#Safety Agreements
(General)
* Having an Unknown play partner
* Importance of Trust
* In-Depth Safety talk
* Long Pre-Trance talk
* Post Trance talk/Aftercare
* Less Rapport/Empathy,More Trances
* Knowing what will happen before Trance
* Deleting the Triggers after the session
* Being told to wake up if necessary

#Consent Preferences
(Giving, Receiving)
* Wishing for things to happen in the Trance
* Having Clear consent before going under
* Other People watching the trance
* Being shown off to others while tranced
* Dropping without Warning
* Triggers being used without warning
* Triggers being used in public

#Types Of Trance
(Giving, Receiving)
* Non-erotic For Fun/Recreational
* Non-erotic Therapeutic
* Erotic
* Covert
* Stage-Style
* BDSM components
* Dom/Slave components

#Trance Framework
(Giving, Receiving)
* Text
* Audio
* Video
* In person
* Multiple hypnotists at once
* Multiple subjects at once (Group Trance)

#Stimuli
(Giving, Receiving)
* Auditory (files, binurals, etc)
* Kinesthetic (Self Body Movement)
* Visual (Spirals, Videos, etc)

#Stimuli Specifics
(General)
* Binaurals
* Snapping fingers
* Spirals
* Pendulums
* Shiny items
* Crystals
* Flashing light
* Pocket watch
* Metronome
* Hand movements/signs

#Suggestions 1
(Giving, Receiving)
* Post-hypnotic suggestions
* Catalepsy(trouble staying awake)
* Immobilization
* Levitation(floating)
* Freeze / ‘Stop’ Triggers
* Being Blank and empty
* Having Amnesia
* Repeating Mantras
* Positive Hallucination
* Negative Hallucination
* Mind melting
* Brainwashing
* Mind control
* Transformation(into furries)
* Transformation(into animals)
* Behavior modification
* Personality play
* Gender Play
* Pet play
* Complete control to the Tist
* Daddy and little play
* Surrendering as a sub
* Submission
* Simulated Drugging
* Being playful
* Being naughty
* Captivity / helplessness
* Power play
* Passiveness
* Orgasm trigger
* Seduction
* Unawareness of following Commands
* Unawareness of Moving or Actions
* Touch-free pleasure
* Touch-free orgasm

#Suggestions 2
(Giving, Receiving)
* Feminization
* Masculinization
* Dollification
* Robotization
* Objectification
* Bimbofication
* Sissy training
* Diaper Play
* IQ Play
* Memory play
* Furry Play
* Rape play
* BDSM Play
* D/S-Play
* Consensual non consent
* Blackmail
* Watersports
* Obedience
* Pain triggers
* Tease and release
* Tease and denial
* Ruined Orgasms
* Edging
* Covert Dom / Slave Play
* Resistance Play
* Indirect sexual desc of Self
* Direct sexual desc of Self
* Getting attention
* Being guided
* Being ordered to undress
* Being ordered to masturbate
* Being ordered to do something
* Being forced to do something

#Personal Traits/Preferences
(You like to…)
* do Resistance Play
* be Bratty
* be surprised
* Talk/Type while under
* have Long trance sessions
* Drool under trance
* have Eye rolling
* Watch others go under
* Watch others hypnotize someone
* Hypnotist doing what they want( C-N-C )

#Preferred Role
(you usually are)
* Being submissive
* Receiving Dominance
* Being Dominant
* Receiving Submission
* Being a Switch
* Receiving both Sub and Dom attention

#Induction Preferences
(Add-on/Extras)
* With Slow speech
* With Faster speech
* With Soothing or Whispering extra Voices
* With Visual elements
* With Auditory elements

#Induction Types
(Giving, Receiving)
* Relaxation
* Conversational
* Confusion
* Countdown
* Mirroring
* Instant inductions
* Fractionation
* Eye fixation
* Focusing on an Object/Person
* Overloading/Brain Overwhelming
* Progressive Muscle Relaxation
* Recalling Last trance

#Emotion Play
(I enjoy)
* Various Amounts of Pleasure
* Exploring fantasies
* Impersonal Experiences(Out of Body)

#Emotion Play Specifics
(I enjoy Feeling…)
* Beautiful and Sexy
* Empowered and focused
* Safe and protected
* Horny and Aroused
* Slutty and Naughty
* Floaty and Drifting
* Ditzy and Dumb
* Captive and Enslaved
* Objectified and Degraded
* Vulnerable and Exposed
* Emotionless and Empty
* Helpless but Aware
* Fearful and Scared

#Coming Out Of Trance
(Giving, Receiving)
* Slow counts back up to 10
* Wake up trigger
* Only counting to three
* Just being told to come back or wake up
			</textarea>
			<button id="KinksOK">Accept</button>
		</div>
		<div id="InputOverlay" class="overlay">
			<div class="widthWrapper">
				<div id="InputPrevious"></div>
				<div id="InputCurrent">
					<h2 id="InputCategory"></h2>
					<h3 id="InputField"></h3>
					<button class="closePopup">&times;</button>
					<div id="InputValues"></div>
				</div>
				<div id="InputNext"></div>
			</div>
		</div>
		<footer id="footer">Data stolen with ♥ from Herald</footer>
		<script type="text/javascript" src="./assets/script.min.js"></script>
	</body>
</html>
