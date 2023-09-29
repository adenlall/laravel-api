<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoalOrAssistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    		
 $services = [
         [
            "title" => "Dilemma of Glory", 
            "question" => "You're on the brink of a hat-trick in a crucial football match. Do you take the shot and aim for personal glory or pass the ball to your teammate who's in an even better position to score and secure the win for the team?", 
            "answers" => [
               "I'm shooting the ball!; like a 9 superstar", 
               "No, I'm choosing the win for the team; not all times if the teammate is darwin núñez!" 
            ]
         ], 
         [
                  "title" => "The Assist or Ego Quandary", 
                  "question" => "You're renowned for your playmaking abilities, but you have a clear shot at the goal. Do you pass the ball to a teammate for an assist, cementing your status as the 'assist king', or take the shot yourself?", 
                  "answers" => [
                     "Make the assist; let the crown of 'assist king' shine", 
                     "Take the shot; even the 'assist king' deserves a goal once in a while." 
                  ] 
               ], 
         [
 "title" => "Goal or Generosity", 
 "question" => "The clock is ticking, and you're in a perfect position to score. However, your teammate is having a bad day and desperately needs a confidence boost. Do you shoot for the goal or pass it to them, hoping to revive their spirits?", 
 "answers" => [
    "Shoot for the goal; sometimes, you have to be a little selfish.", 
    "Make the assist; boost your teammate's confidence and team morale." 
 ] 
                     ], 
         [
       "title" => "The Last-Minute Conundrum", 
       "question" => "It's the final minute of a tied match, and you're in a prime position to shoot. But your teammate, who has been struggling, is also open for a pass. Do you take the shot for potential victory or pass it and trust your teammate to shine in the clutch?", 
       "answers" => [
          "Take the shot; seize the moment and aim for glory!", 
          "Make the assist; trust in your teammate's ability to be the hero." 
       ] 
    ], 
         [
             "title" => "The Captain's Dilemma", 
             "question" => "As the team captain, you're known for your leadership. In the dying moments, do you take the shot yourself to lead by example or set up your teammate, encouraging collective success?", 
             "answers" => [
                "Take the shot; captain sets the tone!", 
                "Make the assist; inspire your team with unselfish play." 
             ] 
          ], 
         [
                   "title" => "The Rivalry Showdown", 
                   "question" => "You're facing your biggest rival, and the score is level. You have a shot opportunity, but your rival's goalkeeper is your childhood friend. Do you risk your friendship for the goal or pass the ball to avoid a post-match awkwardness?", 
                   "answers" => [
                      "Take the shot; rivalries come first, friendship later!", 
                      "Make the assist; preserve the friendship and sportsmanship." 
                   ] 
                ], 
         [
  "title" => "The Spectacular Assist Opportunity", 
  "question" => "You have a chance to make an incredible no-look pass that will surely lead to a goal, but the goal itself would be a routine finish. Do you go for the flashy assist or opt for the simpler shot on goal?", 
  "answers" => [
     "Go for the spectacular assist; add some style to the game!", 
     "Take the shot; simplicity often wins matches." 
  ] 
                      ], 
         [
        "title" => "The Spectacular Assist Opportunity", 
        "question" => "You missed an easy goal earlier in the game, and now you find yourself in a similar position. Do you take the shot to redeem yourself or pass the ball to ensure a team goal?", 
        "answers" => [
           "Take the shot; it's time for redemption!", 
           "Make the assist; team success is the ultimate redemption." 
        ] 
     ], 
         [
              "title" => "The Golden Boot Quest", 
              "question" => "You're competing for the Golden Boot award as the league's top scorer. With a chance to score your 20th goal of the season, do you shoot for personal glory or make the pass for a team win?", 
              "answers" => [
                 "Take the shot; secure the Golden Boot!", 
                 "Make the assist; chase the team's championship dream." 
              ] 
           ], 
         [
                    "title" => "The Penalty Predicament", 
                    "question" => "You've earned a penalty kick, and scoring is almost guaranteed. However, your teammate has yet to score this season and desperately needs a goal. Do you take the penalty or give your teammate a chance to break their drought?", 
                    "answers" => [
"Take the penalty; you can't pass up such a high-percentage scoring opportunity.", 
"Pass the penalty to your teammate; share the spotlight and boost their confidence." 
                    ] 
                 ], 
         [
   "title" => "The Equalizer Opportunity", 
   "question" => "Your team is trailing by one goal in the dying moments of the match. You have a chance to shoot and possibly tie the game, but a teammate is wide open for an assist that could lead to a game-winner. What do you choose?", 
   "answers" => [
      "Take the shot for the equalizer; seize the crucial moment.", 
      "Make the assist for a potential game-winning goal; teamwork prevails." 
   ] 
], 
         [
         "title" => "The Unstoppable Momentum", 
         "question" => "Your team is on fire, leading by a large margin, and you're in front of an open goal. Do you add to your team's goal tally or pass to a teammate who hasn't scored all season to help them break their drought?", 
         "answers" => [
            "Take the shot; ride the wave of success and rack up the goals.", 
            "Make the assist; spread the joy among your teammates." 
         ] 
      ], 
         [
               "title" => "The Trick Shot Challenge", 
               "question" => "You've got a chance to attempt a jaw-dropping, YouTube-worthy trick shot that could go viral. But a traditional shot would be more reliable. What's your choice?", 
               "answers" => [
                  "Go for the trick shot; create internet magic and entertain the fans.", 
                  "Take the conventional shot; reliability wins matches." 
               ] 
            ], 
         [
                     "title" => "The Extra-Time Crossroads", 
                     "question" => "It's the final moments of extra time in a tied match. You can either shoot from a distance or send a precise cross into the penalty area. What's your game-changing move?", 
                     "answers" => [
 "Take the long shot; be the hero with a dramatic long-range goal.", 
 "Make the perfect cross; set up a teammate for a potential game-winner." 
                     ] 
                  ], 
         [
    "title" => "The Unexpected Free Kick", 
    "question" => "You're known for your accuracy with free kicks, but this time, the referee allows a quick free kick opportunity. Do you take the shot before the defense is ready or pause to set up a more strategic play?", 
    "answers" => [
       "Take the quick free kick; catch the defense off guard and aim for a surprise goal.", 
       "Wait and set up a strategic play; ensure the best chance of success." 
    ] 
 ], 
         [
          "title" => "The Messi Magic Moment", 
          "question" => "You find yourself in the same position where Lionel Messi scored countless free-kick goals. Do you try to emulate his legendary free-kick style or pass it to a teammate for a potentially easier goal?", 
          "answers" => [
             "Channel your inner Messi; take the free-kick and aim for the top corner.", 
             "Make the assist; trust your teammate to finish the chance." 
          ] 
       ], 
         [
                "title" => "The Ronaldo Goal Machine Dilemma", 
                "question" => "Cristiano Ronaldo is known for his goal-scoring prowess, and you have a chance to break a scoring record in the same fashion. Do you take the shot to achieve individual glory or pass to maintain team harmony?", 
                "answers" => [
                   "Take the shot; chase Ronaldo's goal-scoring record.", 
                   "Make the assist; show your commitment to team success." 
                ] 
             ], 
         [
                      "title" => "The Neymar Showboat Opportunity", 
                      "question" => "You've skillfully dribbled past multiple defenders, setting up a one-on-one with the goalkeeper. Do you attempt a flashy, signature Neymar trick to score or go for the simple, effective finish?", 
                      "answers" => [
  "Go for the Neymar-esque trick; put on a show and score in style.", 
  "Take the straightforward shot; ensure the goal without unnecessary risk." 
                      ] 
                   ], 
         [
     "title" => "The Xavi's Precision Pass Moment", 
     "question" => "You're renowned for your exceptional passing ability, much like Xavi Hernandez. You have a chance to thread a perfect through ball to a teammate in a goal-scoring position. Do you go for the assist or attempt a shot yourself?", 
     "answers" => [
        "Deliver the Xavi-style through ball; set up your teammate for a tap-in.", 
        "Take the shot; sometimes, even a playmaker needs to take matters into their own hands." 
     ] 
  ], 
         [
           "title" => "The World Cup Final Penalty Drama", 
           "question" => "It's the last minute of extra time in the World Cup final, and your team has been awarded a penalty. You have a chance to become a national hero by taking the shot, but the opposing goalkeeper is known for saving penalties. Do you take the high-pressure penalty yourself or trust your teammate with nerves of steel to seal the World Cup victory?", 
           "answers" => [
              "Step up and take the penalty; become a national legend with the World Cup-winning goal.", 
              "Pass the responsibility to your ice-cold teammate; trust them to secure the historic win." 
           ] 
        ], 
         [
                 "title" => "The Maradona Hand of God Redux", 
                 "question" => "In a crucial match, the ball is about to cross the goal line, but it's just out of reach. You can replicate Maradona's infamous 'Hand of God' moment to score, but it will go down in history as controversial. Do you embrace the dark side of football and use your hand or let the ball pass and play fair?", 
                 "answers" => [
                    "Embrace the controversy; use your hand to score the infamous goal.", 
                    "Play fair and let the ball pass; uphold the spirit of the game." 
                 ] 
              ], 
         [
"title" => "The Zidane Headbutt or Heroism", 
"question" => "In the heat of the World Cup final, a player from the opposing team provokes you. You have a choice: respond with a headbutt a la Zinedine Zidane, risking expulsion, or rise above it and lead your team to victory with your skills and leadership. What's your move?", 
"answers" => [
   "Go for the headbutt; Zidane-style retaliation.", 
   "Rise above it; lead your team to victory through skill and leadership" 
] 
                    ], 
         [
      "title" => "The Beckham Spice It Up Free Kick", 
      "question" => "Your team has been awarded a crucial free kick just outside the penalty area. You have an opportunity to curve the ball in a manner reminiscent of David Beckham's trademark free kicks. Do you attempt the stylish curve or opt for a traditional approach?", 
      "answers" => [
         "Attempt the Beckham-esque curve; bend it like Beckham for a stunning goal.", 
         "Take the straightforward approach; ensure the free kick finds the back of the net." 
      ] 
   ], 
         [
            "title" => "The Panenka or Precision", 
            "question" => "It's a penalty shootout in a high-stakes match. Do you channel your inner Antonín Panenka and attempt a daring, cheeky chip down the middle or choose the safer, more conventional approach?", 
            "answers" => [
               "Go for the Panenka; risk it all with audacious flair.", 
               "Take the safe, conventional penalty; ensure a reliable shot on target." 
            ] 
         ], 
         [
                  "title" => "The Underwater Soccer Showdown", 
                  "question" => "You find yourself in an underwater soccer match, complete with scuba gear and a floating ball. With limited mobility and buoyancy, do you attempt an underwater bicycle kick or pass the ball to a teammate to adapt to this surreal aquatic challenge?", 
                  "answers" => [
                     "Go for the underwater bicycle kick; become the Aquaman of soccer!", 
                     "Pass the ball to a teammate; teamwork conquers even underwater." 
                  ] 
               ], 
         [
 "title" => "The Alien Invasion Soccer Match", 
 "question" => "During a match, a UFO lands on the field, and extraterrestrial beings challenge your team to a game of soccer. Their rules are bizarre and involve zero gravity and laser beams. Do you take a shot at scoring a cosmic goal or pass to an alien teammate who seems eager to assist?", 
 "answers" => [
    "Take the cosmic shot; score an out-of-this-world goal against the aliens!", 
    "Make the intergalactic assist; let the aliens have their fun." 
 ] 
                     ], 
         [
       "title" => "The Upside-Down Soccer Spectacle", 
       "question" => "In an alternate dimension, gravity works differently, and you're playing a soccer match on the ceiling. The goalposts are on the floor, but you have an opportunity to shoot into the bizarre, upside-down goal or make a pass to a teammate. What's your unconventional choice?", 
       "answers" => [
          "Shoot into the upside-down goal; embrace the topsy-turvy world.", 
          "TPass to a teammate; help them navigate this gravity-defying challenge." 
       ] 
    ], 
         [
             "title" => "The Time-Loop Soccer Quandary", 
             "question" => "You find yourself stuck in a time loop, replaying the same 90 minutes of a match over and over again. Each time, you have the choice to either take a shot or make an assist. Do you try to break the loop with a shot or experiment with assists to see if they hold the key to escape?", 
             "answers" => [
                "Take the shot every time; consistency might lead to a way out of the time loop.", 
                "Focus on making assists; maybe teamwork is the key to breaking the cycle." 
             ] 
          ], 
         [
                   "title" => "The Soccer Match with a Portal Goal", 
                   "question" => "In a surreal match, one of the goals has turned into a portal that leads to another dimension. You can either kick the ball into the portal goal, potentially scoring an unconventional goal, or pass it to a teammate for a traditional goal. What's your adventurous choice?", 
                   "answers" => [
                      "Score through the portal goal; explore the unknown dimensions of soccer.", 
                      "Pass the ball for a traditional goal; safety first in this cosmic game." 
                   ] 
                ], 
         [
  "title" => "The UCL Trophy Mix-Up", 
  "question" => "You're about to lift the UEFA Champions League trophy, but there's a mix-up, and you're handed a giant chocolate cupcake instead. Do you take a bite of the cupcake or politely refuse and wait for the real trophy to arrive?", 
  "answers" => [
     "Take a bite of the chocolate cupcake; savor the sweet victory!", 
     "Politely refuse; insist on the real UCL trophy and avoid a chocolatey mess." 
  ] 
                      ], 
         [
        "title" => "The La Liga Flamenco Challenge", 
        "question" => "During a La Liga match, the referee suddenly calls for a halftime flamenco dance-off instead of a typical break. Do you dance your heart out for the crowd's amusement or pass on the dance floor and prepare for the second half?", 
        "answers" => [
           "Embrace the dance-off; become the footballer with the best flamenco moves.", 
           "Skip the dance; stay focused on the match and your football skills." 
        ] 
     ], 
         [
              "title" => "The Premier League Tea Time Twist", 
              "question" => "In the middle of a Premier League game, the halftime whistle blows, and you're presented with a traditional British tea ceremony on the pitch, complete with scones and cucumber sandwiches. Do you join the tea party or insist on a typical halftime break?", 
              "answers" => [
                 "Join the tea time tradition; sip tea and enjoy a mid-game snack.", 
                 "Insist on a regular halftime break; focus on football, not tea parties." 
              ] 
           ], 
         [
                    "title" => "The UCL Mascot Takeover", 
                    "question" => "In a UCL match, the mascots unexpectedly take to the field and start playing instead of the players. Do you join in on the mascot mayhem or try to regain control of the game for the professionals?", 
                    "answers" => [
"Join the mascot game; enjoy some playful football with the fuzzy mascots.", 
"Regain control of the match; show the mascots who's boss on the field." 
                    ] 
                 ], 
         [
   "title" => "The La Liga Salsa Dance Challenge", 
   "question" => "During a La Liga match, the stadium DJ plays salsa music, and both teams are challenged to a dance-off. Do you showcase your best salsa moves for the fans or keep your focus on the football?", 
   "answers" => [
      "Join the salsa dance-off; entertain the crowd with your fancy footwork.", 
      "Keep your focus on football; let others dance while you score goals." 
   ] 
], 
         [
         "title" => "The Pitch Invasion Hug", 
         "question" => "In the middle of a crucial Premier League match, a passionate fan storms the field to hug you. Do you embrace the fan's enthusiasm with a warm hug or politely ask them to return to the stands for safety?", 
         "answers" => [
            "Embrace the fan with a hug; share a moment of joy and connection.", 
            "Politely ask the fan to return to the stands; prioritize safety and the ongoing match.", 
            "Punch him in the face; Glade of you sir" 
         ] 
      ], 
         [
               "title" => "The UCL Final Handshake Surprise", 
               "question" => "it's the UEFA Champions League final, and as you're preparing for the pre-match handshake with the opposing team, one of their players challenges you to a thumb-wrestling match instead. Do you accept the unusual thumb-wrestling duel or stick to the traditional handshake?", 
               "answers" => [
                  "Accept the thumb-wrestling challenge; show your thumb-wrestling skills on the grand stage.", 
                  "Stick to the traditional handshake; maintain the solemnity of the moment.", 
                  "F*ck him off; So responsible" 
               ] 
            ], 
         [
                     "title" => "The La Liga Ballerina Tribute", 
                     "question" => "After scoring a goal in La Liga, you decide to celebrate by performing a ballet routine in honor of a famous ballerina who is a fan of your team. Do you pirouette and plié in front of the fans or celebrate with a traditional goal celebration?", 
                     "answers" => [
 "Perform the ballet routine; pay homage to the ballerina and entertain the crowd.", 
 "Stick to a traditional goal celebration; keep the focus on the game." 
                     ] 
                  ], 
         [
    "title" => "The Premier League Dog Challenge", 
    "question" => "During a Premier League match, a dog lands on the field and starts dribbling the ball toward the goal. Do you join forces with the dog for a comical attempt at a goal or shoo it away to resume the match?", 
    "answers" => [
       "Join forces with the dog; let the feathered friend assist in a humorous goal attempt.", 
       "Shoo the dog away; regain control of the game for the professionals." 
    ] 
 ], 
         [
          "title" => "The Double Yellow Card Dilemma", 
          "question" => "You've already received a yellow card in the match, and now you're faced with a tough decision. Do you risk another challenge that could lead to a second yellow card and your expulsion, or do you play it safe and avoid further fouls?", 
          "answers" => [
             "Take the risk with an aggressive challenge; hope to avoid a second yellow card while staying in the game.", 
             "Play it safe; avoid risky tackles to prevent a second yellow and a red card." 
          ] 
       ], 
         [
                "title" => "The Tactical Yellow Card", 
                "question" => "In a crucial La Liga match, you're on a counter-attack, but you realize that a tactical foul on an opposing player might prevent a dangerous goal-scoring opportunity. Do you commit the tactical foul to receive a yellow card, or do you let the play continue and risk conceding a goal?", 
                "answers" => [
                   "Commit the tactical foul; take the yellow card to prevent a potential goal.", 
                   "Let the play continue; avoid the foul and hope your defense can handle the situation." 
                ] 
             ], 
         [
                      "title" => "The Red Card or Innocence", 
                      "question" => "The referee mistakenly thought you had committed a violent foul that deserved a red card. You have a quick decision to make: accept the wrong red card and leave the field or zealously defend your innocence, which could result in a further suspension.", 
                      "answers" => [
  "Accept the wrongful red card; leave the field to avoid further controversy.", 
  "Plead your innocence; fight to stay on the field and clear your name." 
                      ] 
                   ], 
         [
     "title" => "The Foul Play Act", 
     "question" => "Your team is trailing in a Premier League match, and the opposing goalkeeper is wasting time by holding onto the ball for extended periods. Do you intentionally provoke a confrontation with the goalkeeper to force the referee to issue a yellow card, or do you respect fair play and wait for an opportunity?", 
     "answers" => [
        "Provoke a confrontation with the goalkeeper; try to earn a yellow card and speed up the game.", 
        "Respect fair play; wait for an opportunity to level the score without resorting to foul play." 
     ] 
  ], 
         [
           "title" => "The Strategic Time-Wasting Yellow", 
           "question" => "In the final minutes of a UCL semifinal, your team is ahead by a slim margin. To eat up precious seconds, you intentionally tie your shoelaces in a slow, exaggerated manner. Do you risk receiving a yellow card for time-wasting or try to win valuable seconds for your team?", 
           "answers" => [
              "Tie your shoelaces slowly; risk a yellow card to waste valuable time.", 
              "Speed up the shoelace tying; avoid the yellow card and maintain your lead." 
           ] 
        ], 
         [
                 "title" => "The Derby Day Brawl", 
                 "question" => "In a heated local derby match, tensions flare, and a scuffle breaks out between you and an opposing player. Do you engage in the brawl and risk getting sent off, or do you step away from the fight and avoid the red card?", 
                 "answers" => [
                    "Engage in the brawl; stand your ground and risk a red card in the midst of the rivalry.", 
                    "Step away from the fight; prioritize staying on the field and maintaining your team's numerical advantage." 
                 ] 
              ], 
         [
"title" => "The Taunting Rivalry", 
"question" => "During a Premier League match against your arch-rivals, an opponent engages in relentless verbal taunting and provocation. Do you respond with retaliatory remarks or maintain your composure and focus on the game?", 
"answers" => [
   "Respond with taunts; fire back in the intense rivalry, risking a potential confrontation.", 
   "Maintain composure; ignore the taunts and concentrate on playing your best football." 
] 
                    ], 
         [
      "title" => "The Yellow Card Retaliation", 
      "question" => "After a particularly rough challenge from an opponent, you're left with an injury. In a fit of anger, do you retaliate with a reckless tackle on the same player, potentially earning a red card, or do you report the incident to the referee and let them handle the situation?", 
      "answers" => [
         "Retaliate with a reckless tackle; seek vengeance but risk a red card for your actions.", 
         "Report the incident to the referee; let the officials handle the matter and maintain your discipline" 
      ] 
   ], 
         [
            "title" => "Dump coach's decisions", 
            "question" => "You started the match hoping to score a hat-trick and break a record, but before you scored the last goal and made history, the coach replaced you in the sixtieth minute. What would be your reaction?", 
            "answers" => [
               "Cursing and kicking everything in your way.", 
               "Applaud the audience and respect the coach's decisions" 
            ] 
         ], 
         [
                  "title" => "The Tactical Substitution", 
                  "question" => "Your team is trailing by a goal in a crucial UCL knockout match. The coach decides to substitute you, a star player, to bring in a fresh striker. Do you accept the tactical decision gracefully, understanding the need for change, or express your desire to stay on and make a difference?", 
                  "answers" => [
                     "Accept the substitution; trust the coach's tactics and support your team from the bench.", 
                     "Express your desire to stay on; convey your confidence in turning the game around." 
                  ] 
               ], 
         [
 "title" => "The Injury Concern", 
 "question" => "During a La Liga match, you pick up a minor injury that affects your performance. The coach suggests a substitution to allow you to receive proper medical attention. Do you willingly agree to the substitution, prioritizing your health, or insist on continuing to play through the pain?", 
 "answers" => [
    "Agree to the substitution; prioritize your health and trust the coach's decision.", 
    "Insist on continuing to play; tough it out despite the injury to help your team." 
 ] 
                     ], 
         [
       "title" => "The Injury Concern", 
       "question" => "During a World Cup match, you pick up a minor injury that affects your performance. The coach suggests a substitution to allow you to receive proper medical attention. Do you willingly agree to the substitution, prioritizing your health, or insist on continuing to play through the pain?", 
       "answers" => [
          "Agree to the substitution; prioritize your health and trust the coach's decision.", 
          "Insist on continuing to play; tough it out despite the injury to help your team." 
       ] 
    ], 
         [
             "title" => "The Youthful Substitution", 
             "question" => "In a Premier League game, the coach decides to replace you, a seasoned player, with a talented young prospect to inject energy into the team. Do you accept the decision gracefully and provide mentorship to the younger player, or express your desire to stay on the pitch and show your experience?", 
             "answers" => [
                "Accept the substitution gracefully; support the younger player and offer mentorship.", 
                "Express your desire to stay on; showcase your experience and leadership on the field." 
             ] 
          ], 
         [
                   "title" => "The Training Ground Clash", 
                   "question" => "During a practice session, a disagreement between you and a teammate escalates into a heated exchange of words and shoving. Do you choose to escalate the situation further or take a step back to cool off and address the issue calmly later?", 
                   "answers" => [
                      "Escalate the confrontation; engage in the heat of the moment to resolve the issue immediately.", 
                      "Step back and cool off; avoid further conflict and address the matter calmly after training." 
                   ] 
                ], 
         [
  "title" => "The Penalty Spot Disagreement", 
  "question" => "Your team is awarded a penalty in a Premier League match, and two teammates insist on taking the kick. One is the designated penalty taker, while the other believes they're in better form. Do you join the argument, adding to the chaos, or step in as captain to settle the matter and choose the designated taker?", 
  "answers" => [
     "Join the argument and state your case; further the confusion and contention over the penalty kick.", 
     "Step in as captain and settle the matter; choose the designated penalty taker to maintain order and focus." 
  ] 
                      ], 
         [
        "title" => "The Goal Celebrations Quarrel", 
        "question" => "After scoring a goal in a La Liga match, a teammate disagrees with your choice of celebration, thinking it's too extravagant. Do you argue in defense of your celebration style or adjust your celebration to keep the team unity intact?", 
        "answers" => [
           "Argue in defense of your celebration style; assert your individuality and right to express yourself.", 
           "Adjust your celebration; prioritize team harmony and avoid unnecessary conflict." 
        ] 
     ], 
         [
              "title" => "The Positional Clash", 
              "question" => "In a UCL match, a teammate repeatedly encroaches on your position, causing confusion and disrupting the team's gameplay. Do you confront your teammate on the field, risking a confrontation, or maintain composure and address the issue privately later?", 
              "answers" => [
                 "Confront your teammate on the field; assert your position and seek immediate resolution.", 
                 "Maintain composure; avoid a public confrontation and discuss the matter privately after the match." 
              ] 
           ], 
         [
                    "title" => "The Training Ground Spat", 
                    "question" => "During a training session, a disagreement between two teammates spirals into a physical altercation. Do you join the fight to support your friend, or do you intervene to break up the brawl and restore peace?", 
                    "answers" => [
"Join the fight to support your friend; engage to resolve the issue together.", 
"Intervene to break up the brawl; prioritize peace and discipline within the team." 
                    ] 
                 ], 
         [
   "title" => "The Post-Goal Slip 'n Slide", 
   "question" => "After scoring a goal in a La Liga match, you decide to celebrate by sliding on your knees across the wet pitch. However, you end up sliding uncontrollably and crash into the advertising boards. Do you laugh off the mishap or act like it was part of the plan?", 
   "answers" => [
      "Laugh off the mishap; turn it into a comical celebration and entertain the fans.", 
      "Act like it was part of the plan; maintain your dignity and carry on as if nothing happened." 
   ] 
], 
         [
         "title" => "The Emotional Reunion Goal", 
         "question" => "In a highly anticipated match, you find yourself facing your former team, where you enjoyed many successful years. You have a chance to score against your old club. Do you celebrate your goal with exuberance or choose to show respect and gratitude by not celebrating?", 
         "answers" => [
            "Celebrate with exuberance; relish the moment and show your current team's pride.", 
            "Refrain from celebrating; out of respect and gratitude to your former team, keep the celebration subdued." 
         ] 
      ], 
         [
               "title" => "The Own Goal Comedy", 
               "question" => "In a Premier League match, a teammate accidentally sends a wayward shot toward the goal, and the ball ricochets off your shin, heading into your own net. Do you react with frustration or make light of the comical own goal by laughing it off?", 
               "answers" => [
                  "React with frustration; show your frustration at the accidental own goal.", 
                  "Laugh it off; embrace the humor in the comical own goal and make light of the situation." 
               ] 
            ], 
         [
                     "title" => "The Miscommunication Own Goal", 
                     "question" => "During a UCL semifinal, a miscommunication between you and your goalkeeper results in you accidentally tapping the ball into your own net. Do you publicly accept responsibility for the own goal or maintain that it was a team error to shield yourself from blame?", 
                     "answers" => [
 "Publicly accept responsibility; show accountability and acknowledge your role in the own goal.", 
 "Maintain it was a team error; avoid singling yourself out for blame and protect team dynamics." 
                     ] 
                  ], 
         [
    "title" => "The Heroic Return Goal", 
    "question" => "you have an opportunity to score against your previous team. Do you seize the moment and do it, potentially becoming a hero for your new fans, or do you deliberately miss the chance as a sign of respect to your old club?", 
    "answers" => [
       "React with frustration; show your frustration at the accidental own goal.", 
       "Laugh it off; embrace the humor in the comical own goal and make light of the situation." 
    ] 
 ], 
         [
          "title" => "The Heroic Return Goal", 
          "question" => "Taking a corner kick in the middle of the match, your teammates assigned you to monitor Luis Suarez, whatever you may do.", 
          "answers" => [
             "Run away to bring a dog toy; be careful he still Suarez!", 
             "Run away and never return back; good chose." 
          ] 
       ], 
         [
                "title" => "The Missed Penalty Heartbreak", 
                "question" => "In the final minutes of a World Cup quarter-final, you step up to take a penalty that could send your team to the semi-finals. However, your shot hits the crossbar and bounces out. Do you find solace in knowing you gave your best or feel the weight of the missed opportunity and let it haunt you?", 
                "answers" => [
                   "Find solace in giving your best; recognize that penalties can be unpredictable and keep your head high.", 
                   "Feel the weight of the missed opportunity; let the regret and disappointment haunt you, impacting your confidence." 
                ] 
             ], 
         [
                      "title" => "The Career-Threatening Injury", 
                      "question" => "During a crucial Champions League match, you suffer a severe injury that threatens your career. As you're being stretchered off the field, do you keep a positive outlook and focus on recovery, or succumb to despair, fearing that your playing days may be over?", 
                      "answers" => [
  "Keep a positive outlook and focus on recovery; maintain hope and determination to return to the game.", 
  "Succumb to despair and fear the worst; let the uncertainty and fear of career-ending injury consume you." 
                      ] 
                   ], 
         [
     "title" => "The Sudden Retirement Announcement", 
     "question" => "After years of successful football, you're forced to announce your retirement due to a recurring injury. Do you gracefully accept the decision and look forward to new opportunities, or struggle with the loss of your lifelong passion for the game?", 
     "answers" => [
        "Gracefully accept retirement and look forward to new opportunities; embrace the next chapter of your life.", 
        "Struggle with the loss of your lifelong passion; find it difficult to let go and move on." 
     ] 
  ], 
         [
           "title" => "The Relegation Heartbreak", 
           "question" => "Your team is on the verge of relegation from the top division, and despite your best efforts, the final match ends in a draw that seals your team's fate. Do you accept the disappointment find a new club or dwell on the relegation, feeling responsible for the team's fate?", 
           "answers" => [
              "Accept the disappointment; and try finding a new club.", 
              "Dwell on the relegation and feel responsible; carry the burden of the team's fate and struggle to move on." 
           ] 
        ], 
         [
                 "title" => "The Unfulfilled World Cup Dream", 
                 "question" => "You've worked tirelessly throughout your career, but in your final World Cup appearance, your team is eliminated in the group stage. Do you reflect on the positive moments of your career or dwell on the unfulfilled dream of lifting the World Cup?", 
                 "answers" => [
                    "Reflect on the positive moments of your career; appreciate the journey and experiences.", 
                    "Dwell on the unfulfilled World Cup dream; feel the weight of the missed opportunity in your final appearance." 
                 ] 
              ], 
         [
"title" => "Play In Fog", 
"question" => "Your football field is filled with thick fog, reducing visibility. To score a goal, what do you do ?", 
"answers" => [
   "kicking the ball blindly; who know whats can happen.", 
   "teach it to play on its own; it might surprise everyone with its newfound soccer skills" 
] 
                    ], 
         [
      "question" => "You're playing football, and your socks start arguing. One sock claims it can make you run at lightning speed, while the other insists it grants the power of levitation. Which sock should you believe for a winning goal?", 
      "answers" => [
         "the first one; maybe you'll break the sound barrier on the field!", 
         "the last one", 
         "any of these!!" 
      ] 
   ], 
         [
            "question" => "The Quantum Football Your football has become quantum entangled with another one across town. Every time you kick it, the other ball reacts instantly. Is this a breakthrough in football strategy or just a friendly game of teleportation soccer?", 
            "answers" => [
               "Embrace the quantum soccer revolution; your opponents won't know which ball to defend!", 
               "Call it a friendly teleportation game; the other team probably misses their ball too.", 
               "Wtf is happening!" 
            ] 
         ], 
         [
                  "question" => "The Sneezing Goalkeeper Your team's goalkeeper has developed a sudden allergy to grass, causing sneezing fits during the game. Do you replace them with a scarecrow or offer them allergy pills and a tissue box?", 
                  "answers" => [
                     "replace the goalkeeper with a scarecrow; At lest its better than David de Gea", 
                     "Provide allergy pills and a tissue box", 
                     "my man can finish the game!" 
                  ] 
               ] 
]; 
 
 
			  for ($i = 0; $i < count($services); $i++) {
			      DB::table('goal_or_assists')->insert([
			          'value' => json_encode($services[$i]),
			      ]);
			  }
    }
}
