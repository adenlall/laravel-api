<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizzesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
 $services = [
         [
            "title" => "Football Legends", 
            "question" => "Who is often referred to as the 'Flea' and is considered one of the greatest footballers of all time?", 
            "answers" => [
               "Lionel Messi", 
               "Cristiano Ronaldo", 
               "Neymar", 
               "Andres Iniesta" 
            ], 
            "correct" => 0 
         ], 
         [
                  "title" => "World Cup Winners", 
                  "question" => "Which country has won the FIFA World Cup the most times?", 
                  "answers" => [
                     "Brazil", 
                     "Germany", 
                     "Italy", 
                     "Argentina" 
                  ], 
                  "correct" => 0 
               ], 
         [
 "title" => "Football Clubs", 
 "question" => "Which football club is known as the 'Red Devils'?", 
 "answers" => [
    "Real Madrid", 
    "Bayern Munich", 
    "Manchester United", 
    "Barcelona" 
 ], 
 "correct" => 2 
                     ], 
         [
       "title" => "Football Records", 
       "question" => "Who holds the record for the most goals scored in a single calendar year?", 
       "answers" => [
          "Cristiano Ronaldo", 
          "Pele", 
          "Lionel Messi", 
          "Diego Maradona" 
       ], 
       "correct" => 2 
    ], 
         [
             "title" => "Football World", 
             "question" => "Which country hosted the 2018 FIFA World Cup?", 
             "answers" => [
                "Brazil", 
                "Germany", 
                "France", 
                "Russia" 
             ], 
             "correct" => 3 
          ], 
         [
                   "title" => "Football History", 
                   "question" => "Which year was the first FIFA World Cup held?", 
                   "answers" => [
                      "1930", 
                      "1950", 
                      "1966", 
                      "1974" 
                   ], 
                   "correct" => 0 
                ], 
         [
  "title" => "Football Clubs", 
  "question" => "Which club has won the most UEFA Champions League titles?", 
  "answers" => [
     "Real Madrid", 
     "FC Barcelona", 
     "Bayern Munich", 
     "AC Milan" 
  ], 
  "correct" => 0 
                      ], 
         [
        "title" => "Famous Goals", 
        "question" => "Who scored the 'Hand of God' goal in the 1986 FIFA World Cup?", 
        "answers" => [
           "Diego Maradona", 
           "Pele", 
           "Lionel Messi", 
           "Cristiano Ronaldo" 
        ], 
        "correct" => 0 
     ], 
         [
              "title" => "Football Legends", 
              "question" => "Which Brazilian striker was known as 'The Phenomenon'?", 
              "answers" => [
                 "Ronaldo", 
                 "Ronaldinho", 
                 "Neymar", 
                 "Kaka" 
              ], 
              "correct" => 0 
           ], 
         [
                    "title" => "Football Records", 
                    "question" => "Who holds the record for the most goals scored in a single FIFA World Cup tournament?", 
                    "answers" => [
"Just Fontaine", 
"Miroslav Klose", 
"Pele", 
"Gerd Muller" 
                    ], 
                    "correct" => 1 
                 ], 
         [
   "title" => "Famous Football Stadiums", 
   "question" => "Which stadium is the home of FC Barcelona?", 
   "answers" => [
      "Santiago Bernabeu", 
      "Old Trafford", 
      "Camp Nou", 
      "Anfield" 
   ], 
   "correct" => 2 
], 
         [
         "title" => "National Teams", 
         "question" => "Which country has won the most Copa America titles?", 
         "answers" => [
            "Argentina", 
            "Brazil", 
            "Uruguay", 
            "Chile" 
         ], 
         "correct" => 1 
      ], 
         [
               "title" => "Football Rivalries", 
               "question" => "What is the famous football rivalry between Barcelona and Real Madrid called?", 
               "answers" => [
                  "The Clasico", 
                  "The Milan Derby", 
                  "The Manchester Derby", 
                  "El Superclasico" 
               ], 
               "correct" => 0 
            ], 
         [
                     "title" => "Football Legends", 
                     "question" => "Who is often referred to as the 'Black Pearl' and is considered one of the greatest footballers from Brazil?", 
                     "answers" => [
 "Zico", 
 "Cafu", 
 "Romario", 
 "Pele" 
                     ], 
                     "correct" => 3 
                  ], 
         [
    "title" => "Football Tournaments", 
    "question" => "Which country hosted the 2016 UEFA European Championship (Euro 2016)?", 
    "answers" => [
       "France", 
       "Germany", 
       "Spain", 
       "Italy" 
    ], 
    "correct" => 0 
 ], 
         [
          "title" => "Football Records", 
          "question" => "Who holds the record for the most goals in a single FIFA World Cup tournament?", 
          "answers" => [
             "Just Fontaine", 
             "Pele", 
             "Miroslav Klose", 
             "Gerd Muller" 
          ], 
          "correct" => 2 
       ], 
         [
                "title" => "Football Clubs", 
                "question" => "Which club has won the most English Premier League titles?", 
                "answers" => [
                   "Liverpool FC", 
                   "Manchester United", 
                   "Arsenal FC", 
                   "Chelsea FC" 
                ], 
                "correct" => 1 
             ], 
         [
                      "title" => "Ballon d'Or Winners", 
                      "question" => "Who is the only goalkeeper to have won the Ballon d'Or?", 
                      "answers" => [
  "Lev Yashin", 
  "Gianluigi Buffon", 
  "Iker Casillas", 
  "Manuel Neuer" 
                      ], 
                      "correct" => 0 
                   ], 
         [
     "title" => "World Cup History", 
     "question" => "Which nation won the first-ever FIFA World Cup in 1930?", 
     "answers" => [
        "Uruguay", 
        "Argentina", 
        "Brazil", 
        "Italy" 
     ], 
     "correct" => 0 
  ], 
         [
           "title" => "Football Legends", 
           "question" => "Which retired French footballer is known for his playmaking abilities and is often compared to Zinedine Zidane?", 
           "answers" => [
              "Thierry Henry", 
              "Patrick Vieira", 
              "Zinedine Zidane", 
              "Michel Platini" 
           ], 
           "correct" => 3 
        ], 
         [
                 "title" => "Football Trivia", 
                 "question" => "Which country has won the most FIFA World Cup titles without ever hosting the tournament?", 
                 "answers" => [
                    "Argentina", 
                    "Uruguay", 
                    "France", 
                    "Netherlands" 
                 ], 
                 "correct" => 3 
              ], 
         [
"title" => "Football Records", 
"question" => "Who holds the record for the fastest hat-trick in a Premier League match?", 
"answers" => [
   "Alan Shearer", 
   "Sergio Agüero", 
   "Thierry Henry", 
   "Robbie Fowler" 
], 
"correct" => 1 
                    ], 
         [
      "title" => "Football Legends", 
      "question" => "Which Brazilian striker is known for his famous 'scorpion kick' save during a match?", 
      "answers" => [
         "Ronaldinho", 
         "Ronaldo", 
         "Cafu", 
         "Dida" 
      ], 
      "correct" => 3 
   ], 
         [
            "title" => "Football Club Nicknames", 
            "question" => "What is AC Milan's nickname?", 
            "answers" => [
               "The Rossoneri", 
               "The Nerazzurri", 
               "The Old Lady", 
               "The Gunners" 
            ], 
            "correct" => 0 
         ], 
         [
                  "title" => "World Cup History", 
                  "question" => "Which African nation became the first to reach the quarter-finals of a FIFA World Cup in 1990?", 
                  "answers" => [
                     "Nigeria", 
                     "Cameroon", 
                     "Ghana", 
                     "Senegal" 
                  ], 
                  "correct" => 1 
               ], 
         [
 "title" => "Premier League Top Scorers", 
 "question" => "Who is the all-time top scorer in the history of the Premier League?", 
 "answers" => [
    "Alan Shearer", 
    "Thierry Henry", 
    "Wayne Rooney", 
    "Andy Cole" 
 ], 
 "correct" => 0 
                     ], 
         [
       "title" => "Premier League Clubs", 
       "question" => "Which club was the first to win the Premier League title after its rebranding in 1992?", 
       "answers" => [
          "Liverpool FC", 
          "Manchester United", 
          "Arsenal FC", 
          "Chelsea FC" 
       ], 
       "correct" => 1 
    ], 
         [
             "title" => "Premier League Records", 
             "question" => "Who holds the record for the most assists in a single Premier League season?", 
             "answers" => [
                "Cesc Fàbregas", 
                "Thierry Henry", 
                "Kevin De Bruyne", 
                "Mesut Özil" 
             ], 
             "correct" => 2 
          ], 
         [
                   "title" => "Premier League Managers", 
                   "question" => "Which manager has won the most Premier League titles with a single club?", 
                   "answers" => [
                      "Alex Ferguson (Manchester United)", 
                      "Arsène Wenger (Arsenal)", 
                      "Pep Guardiola (Manchester City)", 
                      "José Mourinho (Chelsea)" 
                   ], 
                   "correct" => 0 
                ], 
         [
  "title" => "Premier League Derby", 
  "question" => "What is the famous Premier League derby known as 'The North West Derby'?", 
  "answers" => [
     "Manchester Derby", 
     "Merseyside Derby", 
     "London Derby", 
     "Manchester United vs. Liverpool" 
  ], 
  "correct" => 3 
                      ], 
         [
        "title" => "La Liga Top Scorers", 
        "question" => "Who is the all-time top scorer in the history of La Liga?", 
        "answers" => [
           "Lionel Messi", 
           "Cristiano Ronaldo", 
           "Telmo Zarra", 
           "Hugo Sánchez" 
        ], 
        "correct" => 0 
     ], 
         [
              "title" => "La Liga Clubs", 
              "question" => "Which club has won the most La Liga titles?", 
              "answers" => [
                 "Real Madrid", 
                 "FC Barcelona", 
                 "Atletico Madrid", 
                 "Valencia CF" 
              ], 
              "correct" => 0 
           ], 
         [
                    "title" => "La Liga Records", 
                    "question" => "Who holds the record for the most goals scored in a single La Liga season?", 
                    "answers" => [
"Lionel Messi", 
"Cristiano Ronaldo", 
"Telmo Zarra", 
"Raul" 
                    ], 
                    "correct" => 0 
                 ], 
         [
   "title" => "La Liga Rivalry", 
   "question" => "What is the famous rivalry between Real Madrid and FC Barcelona known as?", 
   "answers" => [
      "The Madrid Derby", 
      "The Clásico", 
      "The Andalusian Derby", 
      "The Basque Derby" 
   ], 
   "correct" => 1 
], 
         [
         "title" => "La Liga Legends", 
         "question" => "Which Spanish striker, known as 'El Niño,' played for Atletico Madrid and Liverpool FC?", 
         "answers" => [
            "Fernando Torres", 
            "David Villa", 
            "Raul", 
            "Fernando Hierro" 
         ], 
         "correct" => 0 
      ], 
         [
               "title" => "La Liga Legends", 
               "question" => "Which Brazilian forward was known as 'O Fenômeno' and played for Barcelona and Real Madrid in La Liga?", 
               "answers" => [
                  "Rivaldo", 
                  "Ronaldinho", 
                  "Neymar", 
                  "Ronaldo" 
               ], 
               "correct" => 3 
            ], 
         [
                     "title" => "La Liga Clubs", 
                     "question" => "Which club has won the most consecutive La Liga titles?", 
                     "answers" => [
 "Real Madrid", 
 "Barcelona", 
 "Atletico Madrid", 
 "Valencia CF" 
                     ], 
                     "correct" => 1 
                  ], 
         [
    "title" => "La Liga Records", 
    "question" => "Who holds the record for the most hat-tricks scored in La Liga history?", 
    "answers" => [
       "Lionel Messi", 
       "Cristiano Ronaldo", 
       "Telmo Zarra", 
       "Hugo Sánchez" 
    ], 
    "correct" => 0 
 ], 
         [
          "title" => "La Liga History", 
          "question" => "Which club was the first to win the inaugural La Liga season in 1929?", 
          "answers" => [
             "Barcelona", 
             "Real Madrid", 
             "Athletic Bilbao", 
             "Valencia CF" 
          ], 
          "correct" => 2 
       ], 
         [
                "title" => "La Liga Icons", 
                "question" => "Which Spanish midfielder was a key figure for both Barcelona and Xavi in their midfield?", 
                "answers" => [
                   "Andres Iniesta", 
                   "Sergio Busquets", 
                   "Xabi Alonso", 
                   "Xavi Hernandez" 
                ], 
                "correct" => 3 
             ], 
         [
                      "title" => "La Liga Top Scorers", 
                      "question" => "Who holds the record for the most goals scored in a single La Liga season?", 
                      "answers" => [
  "Lionel Messi", 
  "Cristiano Ronaldo", 
  "Telmo Zarra", 
  "Hugo Sánchez" 
                      ], 
                      "correct" => 0 
                   ], 
         [
     "title" => "La Liga Rivalries", 
     "question" => "What is the famous rivalry between FC Barcelona and Espanyol known as?", 
     "answers" => [
        "El Clásico", 
        "The Catalan Derby", 
        "El Derbi Madrileño", 
        "The Basque Derby" 
     ], 
     "correct" => 1 
  ], 
         [
           "title" => "La Liga Club Nicknames", 
           "question" => "What is the nickname of Valencia CF?", 
           "answers" => [
              "Los Blancos", 
              "Los Che", 
              "Los Colchoneros", 
              "Los Rojiblancos" 
           ], 
           "correct" => 1 
        ], 
         [
                 "title" => "La Liga Records", 
                 "question" => "Who holds the record for the most consecutive clean sheets in La Liga?", 
                 "answers" => [
                    "Iker Casillas", 
                    "Jan Oblak", 
                    "Victor Valdés", 
                    "Thibaut Courtois" 
                 ], 
                 "correct" => 1 
              ], 
         [
"title" => "La Liga Clubs", 
"question" => "Which club from the Basque Country has won multiple La Liga titles?", 
"answers" => [
   "Athletic Bilbao", 
   "Real Sociedad", 
   "Deportivo Alavés", 
   "Eibar" 
], 
"correct" => 0 
                    ], 
         [
      "title" => "Serie A Top Scorers", 
      "question" => "Who is the all-time top scorer in the history of Serie A?", 
      "answers" => [
         "Alessandro Del Piero", 
         "Silvio Piola", 
         "Gunnar Nordahl", 
         "Francesco Totti" 
      ], 
      "correct" => 2 
   ], 
         [
            "title" => "Serie A Clubs", 
            "question" => "Which club has won the most Serie A titles?", 
            "answers" => [
               "AC Milan", 
               "Juventus", 
               "Inter Milan", 
               "AS Roma" 
            ], 
            "correct" => 1 
         ], 
         [
                  "title" => "Serie A Records", 
                  "question" => "Who holds the record for the most goals in a single Serie A season?", 
                  "answers" => [
                     "Gonzalo Higuaín", 
                     "Ciro Immobile", 
                     "Francesco Totti", 
                     "Hernan Crespo" 
                  ], 
                  "correct" => 0 
               ], 
         [
 "title" => "Serie A Rivalry", 
 "question" => "What is the famous rivalry between AC Milan and Inter Milan known as?", 
 "answers" => [
    "The Milan Derby", 
    "The Turin Derby", 
    "The Rome Derby", 
    "The Naples Derby" 
 ], 
 "correct" => 0 
                     ], 
         [
       "title" => "Serie A Legends", 
       "question" => "Which Italian striker was known as 'Il Capitano' and spent his entire club career at AS Roma?", 
       "answers" => [
          "Alessandro Del Piero", 
          "Roberto Baggio", 
          "Gabriel Batistuta", 
          "Francesco Totti" 
       ], 
       "correct" => 3 
    ], 
         [
             "title" => "Serie A Icons", 
             "question" => "Which Brazilian midfielder, known for his free-kick prowess, played for Parma and Inter Milan in Serie A?", 
             "answers" => [
                "Kaka", 
                "Ronaldinho", 
                "Roberto Carlos", 
                "Zico" 
             ], 
             "correct" => 2 
          ], 
         [
                   "title" => "Serie A Clubs", 
                   "question" => "Which Serie A club is known as 'The Old Lady'?", 
                   "answers" => [
                      "Juventus", 
                      "AC Milan", 
                      "Inter Milan", 
                      "AS Roma" 
                   ], 
                   "correct" => 0 
                ], 
         [
  "title" => "Serie A Records", 
  "question" => "Who holds the record for the most consecutive clean sheets in Serie A?", 
  "answers" => [
     "Dino Zoff", 
     "Gianluigi Buffon", 
     "Samir Handanović", 
     "Sebastiano Rossi" 
  ], 
  "correct" => 1 
                      ], 
         [
        "title" => "Serie A History", 
        "question" => "Which club won the first-ever Serie A title in the 1929-1930 season?", 
        "answers" => [
           "Inter Milan", 
           "Juventus", 
           "AS Roma", 
           "Genoa" 
        ], 
        "correct" => 3 
     ], 
         [
              "title" => "Serie A Derbies", 
              "question" => "What is the famous Milanese derby between Inter Milan and AC Milan called?", 
              "answers" => [
                 "The Turin Derby", 
                 "The Rome Derby", 
                 "The Milan Derby", 
                 "The Naples Derby" 
              ], 
              "correct" => 2 
           ], 
         [
                    "title" => "Serie A Top Scorers", 
                    "question" => "Who is the all-time top scorer for AC Milan in Serie A?", 
                    "answers" => [
"Andriy Shevchenko", 
"Alessandro Del Piero", 
"Gabriel Batistuta", 
"Paolo Rossi" 
                    ], 
                    "correct" => 0 
                 ], 
         [
   "title" => "Serie A Clubs", 
   "question" => "Which club is often referred to as 'The Nerazzurri' in Serie A?", 
   "answers" => [
      "AC Milan", 
      "AS Roma", 
      "Inter Milan", 
      "Fiorentina" 
   ], 
   "correct" => 2 
], 
         [
         "title" => "Serie A Records", 
         "question" => "Who holds the record for the most appearances in Serie A?", 
         "answers" => [
            "Paolo Maldini", 
            "Francesco Totti", 
            "Gianluigi Buffon", 
            "Alessandro Del Piero" 
         ], 
         "correct" => 0 
      ], 
         [
               "title" => "Serie A Legends", 
               "question" => "Which Italian midfielder, known for his passing and vision, played for Juventus and Inter Milan in Serie A?", 
               "answers" => [
                  "Pirlo", 
                  "De Rossi", 
                  "Gattuso", 
                  "Zanetti" 
               ], 
               "correct" => 0 
            ], 
         [
                     "title" => "Serie A Derbies", 
                     "question" => "What is the famous derby between AS Roma and Lazio called?", 
                     "answers" => [
 "The Milan Derby", 
 "The Turin Derby", 
 "The Rome Derby", 
 "The Naples Derby" 
                     ], 
                     "correct" => 2 
                  ], 
         [
    "title" => "Premier League Golden Boot", 
    "question" => "Who won the Golden Boot award for being the top scorer in the 2020-2021 Premier League season?", 
    "answers" => [
       "Harry Kane", 
       "Mohamed Salah", 
       "Bruno Fernandes", 
       "Son Heung-min" 
    ], 
    "correct" => 1 
 ], 
         [
          "title" => "Premier League Clubs", 
          "question" => "Which Premier League club is known for their 'Toffees' nickname?", 
          "answers" => [
             "Liverpool FC", 
             "Manchester United", 
             "Everton FC", 
             "Leeds United" 
          ], 
          "correct" => 2 
       ], 
         [
                "title" => "Premier League Records", 
                "question" => "Who holds the record for the most consecutive Premier League appearances by an outfield player?", 
                "answers" => [
                   "Ryan Giggs", 
                   "Steven Gerrard", 
                   "Frank Lampard", 
                   "John Terry" 
                ], 
                "correct" => 0 
             ], 
         [
                      "title" => "Premier League Managers", 
                      "question" => "Which manager is known for his 'Tiki-Taka' style of football and led Manchester City to multiple Premier League titles?", 
                      "answers" => [
  "Jurgen Klopp", 
  "Ole Gunnar Solskjaer", 
  "Mauricio Pochettino", 
  "Pep Guardiola" 
                      ], 
                      "correct" => 3 
                   ], 
         [
     "title" => "Premier League Rivalry", 
     "question" => "What is the famous rivalry between Liverpool and Manchester United called?", 
     "answers" => [
        "The North West Derby", 
        "The Manchester Derby", 
        "The El Clásico", 
        "The Merseyside Derby" 
     ], 
     "correct" => 0 
  ], 
         [
           "title" => "Premier League Golden Glove", 
           "question" => "Which goalkeeper won the Premier League Golden Glove award for the 2020-2021 season?", 
           "answers" => [
              "Alisson Becker (Liverpool)", 
              "Ederson Moraes (Manchester City)", 
              "Emiliano Martínez (Aston Villa)", 
              "Nick Pope (Burnley)" 
           ], 
           "correct" => 0 
        ], 
         [
                 "title" => "Premier League Clubs", 
                 "question" => "Which Premier League club is known for their 'Spurs' nickname?", 
                 "answers" => [
                    "Arsenal FC", 
                    "Chelsea FC", 
                    "Tottenham Hotspur", 
                    "West Ham United" 
                 ], 
                 "correct" => 2 
              ], 
         [
"title" => "Premier League Records", 
"question" => "Who holds the record for the most Premier League goals in a single season (38 games)?", 
"answers" => [
   "Thierry Henry", 
   "Alan Shearer", 
   "Luis Suarez", 
   "Andy Cole" 
], 
"correct" => 1 
                    ], 
         [
      "title" => "Premier League Managers", 
      "question" => "Which Portuguese manager has won the Premier League with two different clubs, Chelsea and Manchester United?", 
      "answers" => [
         "José Mourinho", 
         "Nuno Espírito Santo", 
         "André Villas-Boas", 
         "Fernando Santos" 
      ], 
      "correct" => 0 
   ], 
         [
            "title" => "Premier League Icons", 
            "question" => "Which English midfielder, known for his long-range goals, played for Newcastle United and Tottenham Hotspur?", 
            "answers" => [
               "Frank Lampard", 
               "Paul Gascoigne", 
               "David Beckham", 
               "Gareth Bale" 
            ], 
            "correct" => 1 
         ], 
         [
                  "title" => "World Cup Hosts", 
                  "question" => "Which country hosted the 2014 FIFA World Cup?", 
                  "answers" => [
                     "Brazil", 
                     "Germany", 
                     "France", 
                     "Argentina" 
                  ], 
                  "correct" => 0 
               ], 
         [
 "title" => "World Cup Records", 
 "question" => "Who holds the record for the most goals scored in FIFA World Cup history?", 
 "answers" => [
    "Pele", 
    "Miroslav Klose", 
    "Ronaldo", 
    "Diego Maradona" 
 ], 
 "correct" => 1 
                     ], 
         [
       "title" => "World Cup Icons", 
       "question" => "Which Argentine forward is known for his 'Hand of God' goal and the 'Goal of the Century' during the 1986 World Cup?", 
       "answers" => [
          "Lionel Messi", 
          "Diego Maradona", 
          "Juan Román Riquelme", 
          "Gabriel Batistuta" 
       ], 
       "correct" => 1 
    ], 
         [
             "title" => "World Cup Winners", 
             "question" => "Which nation won the 1998 FIFA World Cup?", 
             "answers" => [
                "Germany", 
                "Brazil", 
                "France", 
                "Italy" 
             ], 
             "correct" => 2 
          ], 
         [
                   "title" => "World Cup History", 
                   "question" => "Which year marked the first FIFA World Cup tournament?", 
                   "answers" => [
                      "1930", 
                      "1950", 
                      "1966", 
                      "1970" 
                   ], 
                   "correct" => 0 
                ], 
         [
  "title" => "World Cup Golden Boot", 
  "question" => "Who won the Golden Boot award as the top scorer in the 2018 FIFA World Cup?", 
  "answers" => [
     "Cristiano Ronaldo", 
     "Lionel Messi", 
     "Harry Kane", 
     "Antoine Griezmann" 
  ], 
  "correct" => 2 
                      ], 
         [
        "title" => "World Cup Legends", 
        "question" => "Which Brazilian player, known as 'The Divine Ponytail,' participated in five FIFA World Cups?", 
        "answers" => [
           "Zico", 
           "Cafu", 
           "Ronaldo", 
           "Roberto Baggio" 
        ], 
        "correct" => 1 
     ], 
         [
              "title" => "World Cup Hosts", 
              "question" => "Which country will host the 2022 FIFA World Cup?", 
              "answers" => [
                 "Russia", 
                 "Qatar", 
                 "United Arab Emirates", 
                 "Saudi Arabia" 
              ], 
              "correct" => 1 
           ], 
         [
                    "title" => "World Cup Upsets", 
                    "question" => "In the 1950 FIFA World Cup, which country famously defeated England in a match known as the 'Miracle of Bern'?", 
                    "answers" => [
"Uruguay", 
"USA", 
"Switzerland", 
"South Korea" 
                    ], 
                    "correct" => 1 
                 ], 
         [
   "title" => "World Cup Records", 
   "question" => "Which goalkeeper holds the record for the most clean sheets in FIFA World Cup history?", 
   "answers" => [
      "Oliver Kahn", 
      "Gianluigi Buffon", 
      "Dino Zoff", 
      "Lev Yashin" 
   ], 
   "correct" => 2 
], 
         [
         "title" => "Bundesliga Top Scorers", 
         "question" => "Who is the all-time top scorer in the history of the Bundesliga?", 
         "answers" => [
            "Robert Lewandowski", 
            "Gerd Müller", 
            "Karl-Heinz Rummenigge", 
            "Miroslav Klose" 
         ], 
         "correct" => 1 
      ], 
         [
               "title" => "Bundesliga Clubs", 
               "question" => "Which Bundesliga club is known for their nickname 'Die Roten'?", 
               "answers" => [
                  "Borussia Dortmund", 
                  "Borussia Mönchengladbach", 
                  "Bayern Munich", 
                  "VfB Stuttgart" 
               ], 
               "correct" => 2 
            ], 
         [
                     "title" => "Bundesliga Records", 
                     "question" => "Who holds the record for the most goals in a single Bundesliga season?", 
                     "answers" => [
 "Gerd Müller", 
 "Robert Lewandowski", 
 "Pierre-Emerick Aubameyang", 
 "Klaus Fischer" 
                     ], 
                     "correct" => 1 
                  ], 
         [
    "title" => "Bundesliga Managers", 
    "question" => "Which German manager led Borussia Dortmund to consecutive Bundesliga titles and the UEFA Champions League final in 2013?", 
    "answers" => [
       "Jurgen Klopp", 
       "Thomas Tuchel", 
       "Felix Magath", 
       "Ralf Rangnick" 
    ], 
    "correct" => 0 
 ], 
         [
          "title" => "Bundesliga Derbies", 
          "question" => "What is the famous derby between Bayern Munich and Borussia Dortmund known as?", 
          "answers" => [
             "The Rhine Derby", 
             "The Berlin Derby", 
             "The Bavarian Derby", 
             "Der Klassiker" 
          ], 
          "correct" => 3 
       ], 
         [
                "title" => "Bundesliga Top Scorers", 
                "question" => "Who is the all-time top scorer in the history of the Bundesliga?", 
                "answers" => [
                   "Robert Lewandowski", 
                   "Gerd Müller", 
                   "Karl-Heinz Rummenigge", 
                   "Miroslav Klose" 
                ], 
                "correct" => 1 
             ], 
         [
                      "title" => "Bundesliga Clubs", 
                      "question" => "Which Bundesliga club is known for their nickname 'Die Roten'?", 
                      "answers" => [
  "Borussia Dortmund", 
  "Borussia Mönchengladbach", 
  "Bayern Munich", 
  "VfB Stuttgart" 
                      ], 
                      "correct" => 2 
                   ], 
         [
     "title" => "Bundesliga Records", 
     "question" => "Who holds the record for the most goals in a single Bundesliga season?", 
     "answers" => [
        "Gerd Müller", 
        "Robert Lewandowski", 
        "Pierre-Emerick Aubameyang", 
        "Klaus Fischer" 
     ], 
     "correct" => 1 
  ], 
         [
           "title" => "Bundesliga Managers", 
           "question" => "Which German manager led Borussia Dortmund to consecutive Bundesliga titles and the UEFA Champions League final in 2013?", 
           "answers" => [
              "Jurgen Klopp", 
              "Thomas Tuchel", 
              "Felix Magath", 
              "Ralf Rangnick" 
           ], 
           "correct" => 0 
        ], 
         [
                 "title" => "Bundesliga Derbies", 
                 "question" => "What is the famous derby between Bayern Munich and Borussia Dortmund known as?", 
                 "answers" => [
                    "The Rhine Derby", 
                    "The Berlin Derby", 
                    "The Bavarian Derby", 
                    "Der Klassiker" 
                 ], 
                 "correct" => 3 
              ], 
         [
"title" => "Ligue 1 Top Scorers", 
"question" => "Who is the all-time top scorer in the history of Ligue 1?", 
"answers" => [
   "Thierry Henry", 
   "Zlatan Ibrahimović", 
   "Edinson Cavani", 
   "Delio Onnis" 
], 
"correct" => 3 
                    ], 
         [
      "title" => "Ligue 1 Clubs", 
      "question" => "Which Ligue 1 club is known for their nickname 'Les Gones'?", 
      "answers" => [
         "Paris Saint-Germain", 
         "AS Monaco", 
         "Olympique de Marseille", 
         "Olympique Lyonnais" 
      ], 
      "correct" => 3 
   ], 
         [
            "title" => "Ligue 1 Records", 
            "question" => "Who holds the record for the most goals in a single Ligue 1 season?", 
            "answers" => [
               "Lionel Messi", 
               "Edinson Cavani", 
               "Thierry Henry", 
               "Kylian Mbappé" 
            ], 
            "correct" => 1 
         ], 
         [
                  "title" => "Ligue 1 Managers", 
                  "question" => "Which Argentine manager led Paris Saint-Germain to several Ligue 1 titles and the UEFA Champions League final?", 
                  "answers" => [
                     "Diego Simeone", 
                     "Mauricio Pochettino", 
                     "Marcelo Bielsa", 
                     "Jorge Sampaoli" 
                  ], 
                  "correct" => 1 
               ], 
         [
 "title" => "Ligue 1 Derbies", 
 "question" => "What is the famous derby between Paris Saint-Germain and Olympique de Marseille known as?", 
 "answers" => [
    "The Paris Derby", 
    "The Riviera Derby", 
    "Le Classique", 
    "The Southern Derby" 
 ], 
 "correct" => 2 
                     ], 
         [
       "title" => "Ligue 1 Golden Boot", 
       "question" => "Who won the Golden Boot as the top scorer in the 2020-2021 Ligue 1 season?", 
       "answers" => [
          "Kylian Mbappé", 
          "Wissam Ben Yedder", 
          "Memphis Depay", 
          "Erling Haaland" 
       ], 
       "correct" => 0 
    ], 
         [
             "title" => "Ligue 1 Legends", 
             "question" => "Which Brazilian forward, known for his prolific goal-scoring, played for Paris Saint-Germain in Ligue 1?", 
             "answers" => [
                "Ronaldo", 
                "Romário", 
                "Neymar", 
                "Rivaldo" 
             ], 
             "correct" => 2 
          ], 
         [
                   "title" => "Ligue 1 Clubs", 
                   "question" => "Which Ligue 1 club is known for their nickname 'Les Verts'?", 
                   "answers" => [
                      "AS Monaco", 
                      "Olympique de Marseille", 
                      "Stade Rennais", 
                      "AS Saint-Étienne" 
                   ], 
                   "correct" => 3 
                ], 
         [
  "title" => "Ligue 1 Records", 
  "question" => "Who holds the record for the most consecutive Ligue 1 titles won as a club?", 
  "answers" => [
     "Paris Saint-Germain", 
     "AS Monaco", 
     "Olympique Lyonnais", 
     "Girondins de Bordeaux" 
  ], 
  "correct" => 0 
                      ], 
         [
        "title" => "Ligue 1 Derbies", 
        "question" => "What is the name of the local derby between Olympique de Marseille and OGC Nice?", 
        "answers" => [
           "Le Classique", 
           "The Côte d'Azur Derby", 
           "The Riviera Derby", 
           "The Southern Derby" 
        ], 
        "correct" => 1 
     ], 
         [
              "title" => "Champions League Records", 
              "question" => "Who holds the record for the most goals scored in a single UEFA Champions League season?", 
              "answers" => [
                 "Lionel Messi", 
                 "Cristiano Ronaldo", 
                 "Neymar", 
                 "Robert Lewandowski" 
              ], 
              "correct" => 3 
           ], 
         [
                    "title" => "Champions League Finals", 
                    "question" => "Which two clubs faced off in the UEFA Champions League final in the 2004-2005 season, where Liverpool famously came back from a 3-0 deficit to win?", 
                    "answers" => [
"AC Milan vs. Barcelona", 
"Manchester United vs. Bayern Munich", 
"Liverpool vs. AC Milan", 
"Real Madrid vs. Juventus" 
                    ], 
                    "correct" => 2 
                 ], 
         [
   "title" => "Champions League Icons", 
   "question" => "Which Dutch midfielder, known for his playmaking abilities, won the UEFA Champions League with Ajax in 1995?", 
   "answers" => [
      "Ruud Gullit", 
      "Frank Rijkaard", 
      "Johan Cruyff", 
      "Clarence Seedorf" 
   ], 
   "correct" => 3 
], 
         [
         "title" => "Champions League Hat-Tricks", 
         "question" => "Who was the first player to score a hat-trick in a UEFA Champions League final?", 
         "answers" => [
            "Ronaldo Nazário", 
            "George Weah", 
            "Eusebio", 
            "Ferenc Puskás" 
         ], 
         "correct" => 2 
      ], 
         [
               "title" => "Champions League Winners", 
               "question" => "Which club has won the most UEFA Champions League titles as date in September 2021?", 
               "answers" => [
                  "Real Madrid", 
                  "FC Barcelona", 
                  "Bayern Munich", 
                  "AC Milan" 
               ], 
               "correct" => 0 
            ], 
         [
                     "title" => "Champions League Golden Boot", 
                     "question" => "Who won the UEFA Champions League Golden Boot for the 2020-2021 season?", 
                     "answers" => [
 "Erling Haaland", 
 "Lionel Messi", 
 "Kylian Mbappé", 
 "Karim Benzema" 
                     ], 
                     "correct" => 3 
                  ], 
         [
    "title" => "Champions League Finals", 
    "question" => "In which city was the UEFA Champions League final held in the 2019-2020 season, which was affected by the COVID-19 pandemic?", 
    "answers" => [
       "Istanbul, Turkey", 
       "Lisbon, Portugal", 
       "Madrid, Spain", 
       "Milan, Italy" 
    ], 
    "correct" => 0 
 ], 
         [
          "title" => "Champions League Icons", 
          "question" => "Which Italian goalkeeper was known as 'San Gigi' and won multiple UEFA Champions League titles with AC Milan and Juventus?", 
          "answers" => [
             "Gianluigi Buffon", 
             "Dino Zoff", 
             "Francesco Toldo", 
             "Sebastiano Rossi" 
          ], 
          "correct" => 0 
       ], 
         [
                "title" => "Champions League Hat-Tricks", 
                "question" => "Who was the first player to score a hat-trick in a UEFA Champions League final?", 
                "answers" => [
                   "Cristiano Ronaldo", 
                   "Lionel Messi", 
                   "Raul", 
                   "Filippo Inzaghi" 
                ], 
                "correct" => 3 
             ], 
         [
                      "title" => "Champions League Clubs", 
                      "question" => "Which club won three consecutive UEFA Champions League titles from 1956 to 1958?", 
                      "answers" => [
  "Real Madrid", 
  "AC Milan", 
  "Manchester United", 
  "Liverpool" 
                      ], 
                      "correct" => 0 
                   ], 
         [
     "title" => "Football History", 
     "question" => "Which country hosted the first-ever FIFA World Cup in 1930?", 
     "answers" => [
        "Brazil", 
        "Italy", 
        "Uruguay", 
        "Germany" 
     ], 
     "correct" => 2 
  ], 
         [
           "title" => "Football Legends", 
           "question" => "Which Portuguese forward is often compared to Lionel Messi and Cristiano Ronaldo and is known for his time at Manchester United and Real Madrid?", 
           "answers" => [
              "Luis Figo", 
              "Rui Costa", 
              "Eusébio", 
              "Nani" 
           ], 
           "correct" => 2 
        ], 
         [
                 "title" => "Football Records", 
                 "question" => "Who holds the record for the most goals scored in a single calendar year?", 
                 "answers" => [
                    "Cristiano Ronaldo", 
                    "Lionel Messi", 
                    "Pele", 
                    "Gerd Müller" 
                 ], 
                 "correct" => 1 
              ], 
         [
"title" => "Football Clubs", 
"question" => "Which club is nicknamed 'The Red Devils' and hails from the city of Manchester?", 
"answers" => [
   "Manchester City", 
   "Liverpool FC", 
   "Manchester United", 
   "Arsenal FC" 
], 
"correct" => 2 
                    ], 
         [
      "title" => "Football Competitions", 
      "question" => "Which tournament features national teams competing for the European championship and is often referred to as the 'Euros'?", 
      "answers" => [
         "FIFA World Cup", 
         "Copa America", 
         "UEFA European Championship", 
         "AFC Asian Cup" 
      ], 
      "correct" => 2 
   ], 
         [
            "title" => "Stadium Names", 
            "question" => "Which stadium is known as the 'Theatre of Dreams'?", 
            "answers" => [
               "Camp Nou", 
               "Signal Iduna Park", 
               "Old Trafford", 
               "Anfield" 
            ], 
            "correct" => 2 
         ], 
         [
                  "title" => "Stadium Capacity", 
                  "question" => "Which football stadium has the highest seating capacity in the world date in September 2021?", 
                  "answers" => [
                     "Wembley Stadium (London)", 
                     "Estadio Azteca (Mexico City)", 
                     "Maracanã Stadium (Rio de Janeiro)", 
                     "Camp Nou (Barcelona)" 
                  ], 
                  "correct" => 1 
               ], 
         [
 "title" => "Stadium History", 
 "question" => "Which stadium was the venue for the 2002 FIFA World Cup final between Brazil and Germany?", 
 "answers" => [
    "Yokohama International Stadium", 
    "Sapporo Dome", 
    "Seoul World Cup Stadium", 
    "International Stadium Yokohama" 
 ], 
 "correct" => 0 
                     ], 
         [
       "title" => "Stadium Architecture", 
       "question" => "Which stadium is famous for its unique design featuring a retractable roof shaped like a spaceship?", 
       "answers" => [
          "Allianz Arena", 
          "Mercedes-Benz Stadium", 
          "Estadio Santiago Bernabéu", 
          "Stade de France" 
       ], 
       "correct" => 1 
    ], 
         [
             "title" => "Stadium Nicknames", 
             "question" => "What is the nickname of the stadium that serves as the home ground for Barcelona FC?", 
             "answers" => [
                "The Emirates", 
                "The Anfield", 
                "The Camp Nou", 
                "The San Siro" 
             ], 
             "correct" => 2 
          ], 
         [
                   "title" => "Stadium Names", 
                   "question" => "Which stadium is known as the 'Theatre of Dreams'?", 
                   "answers" => [
                      "Anfield", 
                      "Signal Iduna Park", 
                      "Camp Nou", 
                      "Old Trafford" 
                   ], 
                   "correct" => 3 
                ], 
         [
  "title" => "Stadium Capacity", 
  "question" => "Which football stadium has the highest seating capacity in the world as date in September 2021?", 
  "answers" => [
     "Maracanã Stadium (Rio de Janeiro)", 
     "Wembley Stadium (London)", 
     "Estadio Azteca (Mexico City)", 
     "Camp Nou (Barcelona)" 
  ], 
  "correct" => 2 
                      ], 
         [
        "title" => "Stadium History", 
        "question" => "Which stadium was the venue for the 2002 FIFA World Cup final between Brazil and Germany?", 
        "answers" => [
           "Seoul World Cup Stadium", 
           "Yokohama International Stadium", 
           "International Stadium Yokohama", 
           "Sapporo Dome" 
        ], 
        "correct" => 1 
     ], 
         [
              "title" => "Stadium Architecture", 
              "question" => "Which stadium is famous for its unique design featuring a retractable roof shaped like a spaceship?", 
              "answers" => [
                 "Mercedes-Benz Stadium", 
                 "Allianz Arena", 
                 "Estadio Santiago Bernabéu", 
                 "Stade de France" 
              ], 
              "correct" => 0 
           ], 
         [
                    "title" => "Stadium Nicknames", 
                    "question" => "What is the nickname of the stadium that serves as the home ground for Barcelona FC?", 
                    "answers" => [
"The Anfield", 
"The Camp Nou", 
"The San Siro", 
"The Emirates" 
                    ], 
                    "correct" => 1 
                 ], 
         [
   "title" => "Player Transfers", 
   "question" => "Which player has played for both Barcelona and Paris Saint-Germain during their career?", 
   "answers" => [
      "Cristiano Ronaldo", 
      "Neymar", 
      "Lionel Messi", 
      "Kylian Mbappé" 
   ], 
   "correct" => 2 
], 
         [
         "title" => "Player Journeys", 
         "question" => "Which footballer has had stints at AC Milan, Real Madrid, and Chelsea?", 
         "answers" => [
            "Andrea Pirlo", 
            "Zlatan Ibrahimović", 
            "Didier Drogba", 
            "Kaka" 
         ], 
         "correct" => 1 
      ], 
         [
               "title" => "Player Transfers", 
               "question" => "Who is the player that has played for both Manchester United and Juventus in their career?", 
               "answers" => [
                  "Cristiano Ronaldo", 
                  "Paul Pogba", 
                  "Nemanja Matić", 
                  "Marcus Rashford" 
               ], 
               "correct" => 0 
            ], 
         [
                     "title" => "Player Journeys", 
                     "question" => "Which footballer has played for Bayern Munich, Inter Milan, and Lazio?", 
                     "answers" => [
 "Samuel Eto'o", 
 "Franck Ribéry", 
 "Miroslav Klose", 
 "Arjen Robben" 
                     ], 
                     "correct" => 2 
                  ], 
         [
    "title" => "Player Transfers", 
    "question" => "Who is the player that has had spells at Arsenal, Barcelona, and Chelsea?", 
    "answers" => [
       "Cesc Fàbregas", 
       "Thierry Henry", 
       "Luis Suárez", 
       "Alexis Sánchez" 
    ], 
    "correct" => 0 
 ], 
         [
          "title" => "Player Transfers", 
          "question" => "Which player has played for both Juventus and Real Madrid during their career?", 
          "answers" => [
             "Neymar", 
             "Cristiano Ronaldo", 
             "Lionel Messi", 
             "Kylian Mbappé" 
          ], 
          "correct" => 1 
       ], 
         [
                "title" => "Player Journeys", 
                "question" => "Which footballer has had stints at Liverpool, Barcelona, and Bayern Munich?", 
                "answers" => [
                   "Luis Suárez", 
                   "Philippe Coutinho", 
                   "Thiago Alcântara", 
                   "Xabi Alonso" 
                ], 
                "correct" => 2 
             ], 
         [
                      "title" => "Player Transfers", 
                      "question" => "Who is the player that has played for both Chelsea and Manchester City in their career?", 
                      "answers" => [
  "Kevin De Bruyne", 
  "Sergio Agüero", 
  "Fernandinho", 
  "N'Golo Kanté" 
                      ], 
                      "correct" => 1 
                   ], 
         [
     "title" => "Player Journeys", 
     "question" => "Which footballer has played for Manchester United, Real Madrid, and Paris Saint-Germain?", 
     "answers" => [
        "Zlatan Ibrahimović", 
        "David Beckham", 
        "Thiago Silva", 
        "Angel Di Maria" 
     ], 
     "correct" => 2 
  ], 
         [
           "title" => "Player Transfers", 
           "question" => "Who is the player that has had spells at Arsenal, Barcelona, and AS Monaco?", 
           "answers" => [
              "Alexis Sánchez", 
              "Thierry Henry", 
              "Cesc Fàbregas", 
              "Dani Alves" 
           ], 
           "correct" => 3 
        ], 
         [
                 "title" => "Player Transfers", 
                 "question" => "Which player has played for both AC Milan, Paris Saint-Germain, and Chelsea during their career?", 
                 "answers" => [
                    "Thiago Silva", 
                    "Zlatan Ibrahimović", 
                    "Edinson Cavani", 
                    "David Luiz" 
                 ], 
                 "correct" => 0 
              ], 
         [
"title" => "Player Journeys", 
"question" => "Which footballer has had stints at Inter Milan, Manchester United, Real Madrid, and Paris Saint-Germain?", 
"answers" => [
   "Neymar", 
   "Lionel Messi", 
   "Cristiano Ronaldo", 
   "Zinedine Zidane" 
], 
"correct" => 1 
                    ], 
         [
      "title" => "Player Transfers", 
      "question" => "Who is the player that has played for both Barcelona, AC Milan, and Chelsea?", 
      "answers" => [
         "Ricardo Kaká", 
         "Andriy Shevchenko", 
         "Deco", 
         "Fernando Torres" 
      ], 
      "correct" => 2 
   ], 
         [
            "title" => "Player Journeys", 
            "question" => "Which footballer has played for Ajax, Juventus, Barcelona, and Paris Saint-Germain?", 
            "answers" => [
               "Zlatan Ibrahimović", 
               "Andrés Iniesta", 
               "Thierry Henry", 
               "Gianluigi Buffon" 
            ], 
            "correct" => 1 
         ], 
         [
                  "title" => "Player Transfers", 
                  "question" => "Who is the player that has had spells at Liverpool, Barcelona, Bayern Munich, and Barcelona again?", 
                  "answers" => [
                     "Luis Suárez", 
                     "Xabi Alonso", 
                     "Philippe Coutinho", 
                     "Thiago Alcântara" 
                  ], 
                  "correct" => 3 
               ] 
]; 
 
 
        
        for ($i = 0; $i < count($services); $i++) {
				        DB::table('quizzes')->insert([
				            'value' => json_encode($services[$i]),
				        ]);
				}
		}
}
