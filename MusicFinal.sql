GRANT ALL ON MUSIC.* TO 'root'@'localhost';

DROP DATABASE MUSIC;

CREATE DATABASE MUSIC;

USE MUSIC;


CREATE TABLE Genre (
	Name VARCHAR(25),
	PRIMARY KEY (Name)
);

CREATE TABLE Artist (
	Name VARCHAR(25),
	Bio TEXT,
	Bday DATE,
	PRIMARY KEY (Name)
);


CREATE TABLE Songs 
(
	Name VARCHAR(25),
	Song_length TIME,
	Song_link VARCHAR(750),
	Artist_name VARCHAR(25),
	PRIMARY KEY (Name, Song_link),
	FOREIGN KEY (Artist_name) REFERENCES Artist (Name)
);

CREATE TABLE Album (
	Artist_name VARCHAR(25),
	Name VARCHAR(250),
	Year_released YEAR,
	Artwork VARCHAR(750),
	PRIMARY KEY (Name, Year_released),
	FOREIGN KEY (Artist_name) REFERENCES Artist (Name)

);
	

CREATE TABLE Belongs_to (
	Artist_name VARCHAR(25),
	Genre_name VARCHAR(25),
	FOREIGN KEY (Artist_name) REFERENCES Artist (Name),
	FOREIGN KEY (Genre_name) REFERENCES Genre (Name)
);

CREATE TABLE Belongs_to_album(
	Album_name VARCHAR(250),
	Song_name VARCHAR(25),
	FOREIGN KEY (Album_name) REFERENCES Album (Name),
	FOREIGN KEY (Song_name) REFERENCES Songs (Name)
);

INSERT INTO Genre VALUES
	('Blues'),
	('Country'),
	('Rock'),
	('Hip Hop'),
	('Electronic'),
	('Modern Rock'),
	('Folk')
	;

INSERT INTO Artist VALUES
	('John Mayer',
     'John Clayton Mayer was born on the 16th of October. He grew up in the beautiful state of Connecticut, which is a great state to grow up in. Many say that Mayer\'s talent has come from his humble upbringing in Fairfield, CT. After two semesters at Berklee College, Mayer left and started his music career. Since then, his ability to shred the nar-nar on his guitar have brought him fame, money, and copious amounts of ladies (Jessica Simpson, Jennifer Aniston, Katy Perry, ext). His past few albums have been a little weird though to be honest. 
PETER\'S  RATING: 8/10','1977-10-16'),

	('Jason Aldean', 'Jason Aldean was born on the 28th of February, 1977. Shockingly, he\'s does country singer from the south (really original, Jason...). He also has earrings and struggles with smiling (seriously, google image him right now and check it out. Almost always, he has this face like he\'s holding in a fart).  
PETER\'S RATING: Who are we kidding, I don\'t listen to him. N/A','1977-02-28'),

	('Johnny Cash','Johnny Cash was a singer/ songwriter from Nashville, TN. After joining the Air Force Security Service, Cash formed a band and began creating music. People loved his unique voice, and his handsome looks. All was not well for Cash however. He struggled with drug and alcohol problems. Furthermore, his love life was far from perfect (if he was around today, his tumblr would be nuts). In the end however, Cash conquered his problems and became an amazing artist, who kept recording music to the day he died (which was September 12, 2013) He was also one of he few artists to be in both the Rock and Roll Hall of Fame as well as the Country Hall of Fame. 

PETER\'S RATING:8.59/10

PS: Walk The Line, great movie', '1932-02-26'),

	('Rolling Stones','The Rolling Stones consist of Mick Jagger, Keith Richards, Ronnie Wood,  and Charlie Watts. These guys were nuts. The started making music in the 1960s (\'62 to be exact) and haven\'t stopped since. In 2006, the preformed during the Super Bowl XL halftime show, where the age-old question of, "can an old Mick Jagger pull of leather pants?" was answered. (Yes. Yes he can). To this day everyone loves the Stones and wonders how Keith Richards is still alive. 

PETER\'S RATING: 8.32/10', '1962-01-01'),

	('Red Hot Chili Peppers','Red Hot Chili Peppers started recording in 1983, and since then have become the band you play when you don\'t know someone\'s music taste, but you want to play something that you think they will like. Case in point, I would like to try to find someone who A) doesn\'t know the song Snow (Hey Oh) or B) hates the song. It\'s honestly hard to do. The bands biggest claim to fame, however, is being featured on Rock Band 2: the game that turns anyone into a rock star right in the comfort of there own home. 

PETER\'S RATING: 7.1/10', '1983-01-01'),

	('Rick Ross','Rick Ross is the most non-gangster gangster looking rapper. He attended college (on a football scholarship...) and then became a Correctional officer. "Correct" me if I\'m wrong, but a correctional officer is the furthest thing from gangster I have ever heard of! That being said, he has given all of us the "Rick Ross Grunt" which if you do from time to time after you finish a sentence, people respect and admire you. 

PETER\'S RATING: 5.5/10', '1976-01-28'),

	('Coldplay','Coldplay is by far the best band out there. The literally have a song for everything. Are you in love with a girl? Coldplay has a song for that. Are you trying to have a good time? Coldplay has a song for that. Going for a run? Coldplay has a song for that. Are you annoyed with Nick Thomas? Coldplay has a song for that! Coldplay started recording 1996, and since then have adapted to changing times and kept recording hits after hits. Their live performances (WHICH I have seen two of, no big deal...) cannot be bested. 

PETER\'S RATING: \∞/10', '1996-01-01'),

	('Kanye West','I\'m not going to lie; Mr. West gets a lot of negative press. I mean, this man is a lyrical genius. Sure he might slip up from time to time and interrupt an award show... and yes, sometimes his music videos can be odd when they feature his naked wife... But he is only human! Being humans, we all mess up from time to time.  But because Kanye is bigger than life, his mess-ups are bigger than life too. To conclude, I leave you with the wise words once spoken by a young Mr. West: "My life is dope, and I do dope shit". 

PETER\'S RATING 9/10

PS. He is a big fan of fishsticks ','1977-01-08'),

	('Gold Panda','I honestly doubt that anyone will ever look this song up. Why did I even add this song? I honestly dont know. I think it came up on shuffle and I just went," yeah, why not?!". Anyways, if you actually want to know about Gold Panda, google it. hit ctrl T, and type it in (command T for the mac users out there).

PETER\'S RATING: 6.9/10, but no one will read this so it doesn\'t matter. Penis.', '1980-01-01'),

	('Vampire Weekend','Vampire Weekend is becoming that band that people name drop when they want to sound like they are into indie and hipster music, but any good hipster knows that they have become way too mainstream. But the band itself loves trying to be hipster by naming their songs names like Obvious Bicycle (REALLY???? Do less Weekend, do less) and Oxford Comma. Once you get by their pretentious attitude, they\ve got some good music. If you haven\'t heard of them, give them a listen! 

PETER\'S RATING: 8.5/10','2006-02-06'),

	('Arctic Monkeys','Arctic Monkeys are a really cool band. They\'re English, so right from the start, they are cooler than non-British bands. My friend once saw them live said that they were, "sick!" Also, for the longest time, they were one of the only CD\'s I had in my car. I\'m going to be honest, this is the last bio I am writing and I am wiped out. If anyone knows any interesting facts about this band, shout the out, I\'d love to hear them. 

PETER\'S RATING:8.76/10', '2002-01-01'),

	('Lucy Rose','If anyone know\'s who Lucy Rose is, let me know. We are honestly just using her for the database project to show how you can search two songs with the same name, but different artist. She seems good though. 

PETER\'S RATING: 5/10','1989-06-28')	
	;

INSERT INTO Songs VALUES
	('Wildfire','4:14','<iframe width="420" height="315" src="https://www.youtube.com/embed/3yEn94IiFnM" frameborder="0" allowfullscreen></iframe> ','John Mayer'),
	('Dear Marie','3:44','<iframe width="560" height="315" src="https://www.youtube.com/embed/s0zaNpics48" frameborder="0" allowfullscreen></iframe> ','John Mayer'),
	('Waitin On the Day','4:35','<iframe width="560" height="315" src="https://www.youtube.com/embed/EwOST3ixE74" frameborder="0" allowfullscreen></iframe> ','John Mayer'),
	('Paper Doll','4:19','<iframe width="560" height="315" src="https://www.youtube.com/embed/5yD9RrrAsyE" frameborder="0" allowfullscreen></iframe> ','John Mayer'),
	('Call Me the Breeze','3:27','<iframe width="560" height="315" src="https://www.youtube.com/embed/XBLgIFAVi_4" frameborder="0" allowfullscreen></iframe> ','John Mayer'),
	('Who You Love (feat. Katy Perry)','4:12','<iframe width="560" height="315" src="https://www.youtube.com/embed/UDfS-sVimcI" frameborder="0" allowfullscreen></iframe> ','John Mayer'),
	('I Will Be Found (Lost At Sea)','4:03','<iframe width="560" height="315" src="https://www.youtube.com/embed/-DrsDWrvYms" frameborder="0" allowfullscreen></iframe> ','John Mayer'),
	('Wildfire (feat. Frank Ocean)','1:28','<iframe width="560" height="315" src="https://www.youtube.com/embed/G6z7c-nIQ6M" frameborder="0" allowfullscreen></iframe> ','John Mayer'),
	('Youre No One Til Someone Lets You Down','2:48','<iframe width="560" height="315" src="https://www.youtube.com/embed/e2tjVP0MUA4" frameborder="0" allowfullscreen></iframe> ','John Mayer'),
	('Badge and Gun','3:15','<iframe width="560" height="315" src="https://www.youtube.com/embed/fCaiQjNJclU" frameborder="0" allowfullscreen></iframe> ','John Mayer'),
	('On the Way Home','3:57','<iframe width="560" height="315" src="https://www.youtube.com/embed/fCaiQjNJclU" frameborder="0" allowfullscreen></iframe> ','John Mayer'),	
	('Johnny Cash','3:10','<iframe width="560" height="315" src="https://www.youtube.com/embed/nFed-Jmizv0" frameborder="0" allowfullscreen></iframe> ','Jason Aldean'),
	('Shiver','3:42','<iframe width="560" height="315" src="https://www.youtube.com/embed/wsfXXPR0wbY" frameborder="0" allowfullscreen></iframe>','Lucy Rose'),	
	('I Walk The Line','2:44','https://www.youtube.com/watch?v=Lq0fUa0vW_E ','Johnny Cash'),
	
	('Get Rhythm','2:13','<iframe width="420" height="315" src="https://www.youtube.com/embed/8QQC-C3sCwQ" frameborder="0" allowfullscreen></iframe>','Johnny Cash'),	
	('Guess Things Happen That Way','1:50','<iframe width="420" height="315" src="https://www.youtube.com/embed/jJSLTrf8F3A" frameborder="0" allowfullscreen></iframe>','Johnny Cash'),
	('Brown Sugar','3:49','<iframe width="420" height="315" src="https://www.youtube.com/embed/oOBP7QMuHHs" frameborder="0" allowfullscreen></iframe>','Rolling Stones'),
	('Jumping Jack Flash', '3:35','<iframe width="560" height="315" src="https://www.youtube.com/embed/NbT1k5DYYds" frameborder="0" allowfullscreen></iframe>','Rolling Stones'),
	('Satisfaction','3:46','<iframe width="420" height="315" src="https://www.youtube.com/embed/HoxRFOr_sQ0" frameborder="0" allowfullscreen></iframe>','Rolling Stones'),
	('Wild Horses','5:40','<iframe width="420" height="315" src="https://www.youtube.com/embed/QhwwCWkmYoc" frameborder="0" allowfullscreen></iframe>','Rolling Stones'),	
	('Dani California','4:40','<iframe width="420" height="315" src="https://www.youtube.com/embed/QZmM4YeSu8g" frameborder="0" allowfullscreen></iframe>','Red Hot Chili Peppers'),
	('Snow (Hey Oh)','5:35','<iframe width="420" height="315" src="https://www.youtube.com/embed/o7MhpFF1vv0" frameborder="0" allowfullscreen></iframe>','Red Hot Chili Peppers'),	
	('Hustlin','3:47','<iframe width="420" height="315" src="https://www.youtube.com/embed/5betFZRICVg" frameborder="0" allowfullscreen></iframe>','Rick Ross'),
	
	('Dont Panic','2:17','<iframe width="560" height="315" src="https://www.youtube.com/embed/8uxt-FnNy2I?list=PL4DFBEB0D0D3C7EB9" frameborder="0" allowfullscreen></iframe>','Coldplay'),
	
	('Shiver','5:00','<iframe width="560" height="315" src="https://www.youtube.com/embed/otNqnVgEs9M?list=PL4DFBEB0D0D3C7EB9" frameborder="0" allowfullscreen></iframe>','Coldplay'),
	
	('Spies','5:19','<iframe width="560" height="315" src="https://www.youtube.com/embed/9QzDHPcNfrw?list=PL4DFBEB0D0D3C7EB9" frameborder="0" allowfullscreen></iframe>','Coldplay'),
	
	('Sparks','3:47','<iframe width="560" height="315" src="https://www.youtube.com/embed/Ar48yzjn1PE?list=PL4DFBEB0D0D3C7EB9" frameborder="0" allowfullscreen></iframe>','Coldplay'),
	
	('Yellow','4:29','<iframe width="560" height="315" src="https://www.youtube.com/embed/tdVAqxNLXiw?list=PL4DFBEB0D0D3C7EB9" frameborder="0" allowfullscreen></iframe>','Coldplay'),
	
	('Trouble','4:31','<iframe width="560" height="315" src="https://www.youtube.com/embed/FPzI4dpEcF8?list=PL4DFBEB0D0D3C7EB9" frameborder="0" allowfullscreen></iframe>','Coldplay'),
	
	('Parachutes','0:46','<iframe width="560" height="315" src="https://www.youtube.com/embed/ZYZYqkAM9uI?list=PL4DFBEB0D0D3C7EB9" frameborder="0" allowfullscreen></iframe>','Coldplay'),
	('We Never Change','4:09', '<iframe width="560" height="315" src="https://www.youtube.com/embed/uZSobH1wiiM?list=PL4DFBEB0D0D3C7EB9" frameborder="0" allowfullscreen></iframe>','Coldplay'),
	('Everythings Not Lost','7:15','<iframe width="560" height="315" src="https://www.youtube.com/embed/0IywjWWlxF8?list=PL4DFBEB0D0D3C7EB9" frameborder="0" allowfullscreen></iframe>','Coldplay'),
	('Life Is For Living [Bonus Hidden Track]','1:37','<iframe width="420" height="315" src="https://www.youtube.com/embed/VxUsQssT8Jc" frameborder="0" allowfullscreen></iframe>','Coldplay'),
	
	('Good Morning','3:17','<iframe width="560" height="315" src="https://www.youtube.com/embed/DHd_grtyVkQ?list=PL07C8DAFBB7396880" frameborder="0" allowfullscreen></iframe>','Kanye West'),
	('Champion','2:48','<iframe width="560" height="315" src="https://www.youtube.com/embed/6I-d0LJ6ojg?list=PL07C8DAFBB7396880" frameborder="0" allowfullscreen></iframe>','Kanye West'),
	('I Wonder','4:03','<iframe width="560" height="315" src="https://www.youtube.com/embed/9pXvuXrbkmc?list=PL07C8DAFBB7396880" frameborder="0" allowfullscreen></iframe>','Kanye West'),
	('Good Life (feat. T-Pain)','3:28','<iframe width="560" height="315" src="https://www.youtube.com/embed/udHCWQbw8yI?list=PL07C8DAFBB7396880" frameborder="0" allowfullscreen></iframe>','Kanye West'),
	('Cant Tell Me Nothing','4:32','<iframe width="560" height="315" src="https://www.youtube.com/embed/sJa41-3ugEs?list=PL07C8DAFBB7396880" frameborder="0" allowfullscreen></iframe>','Kanye West'),
	('Flashing Lights','3:58','<iframe width="560" height="315" src="https://www.youtube.com/embed/N1GjgEaLnYw?list=PL07C8DAFBB7396880" frameborder="0" allowfullscreen></iframe>','Kanye West'),
	('Homecoming (feat. Chris Martin)','3:24','<iframe width="560" height="315" src="https://www.youtube.com/embed/bLSvUUhu7ro?list=PL07C8DAFBB7396880" frameborder="0" allowfullscreen></iframe>', 'Kanye West'),
	('Bittersweet Poetry (feat. John Mayer)','4:11','<iframe width="560" height="315" src="https://www.youtube.com/embed/A0n0DM0acZM?list=PL07C8DAFBB7396880" frameborder="0" allowfullscreen></iframe>','Kanye West'),
	('You','3:36','<iframe width="560" height="315" src="https://www.youtube.com/embed/t5f7pQUdGzU" frameborder="0" allowfullscreen></iframe>','Gold Panda'),	
	('Obvious Bicycle','4:13','<iframe width="560" height="315" src="https://www.youtube.com/embed/ANznirklths?list=RDANznirklths" frameborder="0" allowfullscreen></iframe>','Vampire Weekend'),
	('Unbelievers','3:23','<iframe width="560" height="315" src="https://www.youtube.com/embed/oIcjA5ykloI" frameborder="0" allowfullscreen></iframe>','Vampire Weekend'),
	('Step','4:12','<iframe width="420" height="315" src="https://www.youtube.com/embed/2IDR67SWdpk" frameborder="0" allowfullscreen></iframe>','Vampire Weekend'),
	('Diane Young','2:40','<iframe width="420" height="315" src="https://www.youtube.com/embed/JqsI2ed4XuI" frameborder="0" allowfullscreen></iframe>','Vampire Weekend'),
	('Dont Lie','3:33','<iframe width="560" height="315" src="https://www.youtube.com/embed/25Zmyh1PbW4" frameborder="0" allowfullscreen></iframe>','Vampire Weekend'),
	('Hanna Hunt','3:56','<iframe width="560" height="315" src="https://www.youtube.com/embed/lJCIhDQkqTQ" frameborder="0" allowfullscreen></iframe>','Vampire Weekend'),
	('Everything Arms','3:05','<iframe width="560" height="315" src="https://www.youtube.com/embed/q6FjwUwJup0" frameborder="0" allowfullscreen></iframe>','Vampire Weekend'),
	('Finger Back','3:26','<iframe width="420" height="315" src="https://www.youtube.com/embed/2oPbpPIG_mQ" frameborder="0" allowfullscreen></iframe>','Vampire Weekend'),
	('Worship You','3:21','<iframe width="560" height="315" src="https://www.youtube.com/embed/Yu5PD02s05I" frameborder="0" allowfullscreen></iframe>','Vampire Weekend'),
	('Ya Hey','5:13','<iframe width="420" height="315" src="https://www.youtube.com/embed/P8itnSsNxSg" frameborder="0" allowfullscreen></iframe>','Vampire Weekend'),
	('Hudson','4:15','<iframe width="560" height="315" src="https://www.youtube.com/embed/ooVbsS_vW78" frameborder="0" allowfullscreen></iframe>','Vampire Weekend'),
	('Young Lion','1:45','<iframe width="560" height="315" src="https://www.youtube.com/embed/CtlFWZdgNsk" frameborder="0" allowfullscreen></iframe>','Vampire Weekend'),		
	('Do I Wanna Know?','4:32','<iframe width="420" height="315" src="https://www.youtube.com/embed/9xE0x05Xuuk" frameborder="0" allowfullscreen></iframe>', 'Arctic Monkeys'),
	('R U Mine?','3:22','<iframe width="420" height="315" src="https://www.youtube.com/embed/mULMm59PzFA" frameborder="0" allowfullscreen></iframe>', 'Arctic Monkeys'),
	('One For The Road','3:26','<iframe width="420" height="315" src="https://www.youtube.com/embed/ZkkqIA4R4hI" frameborder="0" allowfullscreen></iframe>', 'Arctic Monkeys'),
	('Arabella','3:27','<iframe width="420" height="315" src="https://www.youtube.com/embed/W5EKTvW2Atg" frameborder="0" allowfullscreen></iframe>', 'Arctic Monkeys'),
	('I Want it All','3:04','<iframe width="420" height="315" src="https://www.youtube.com/embed/CPBX89Rq688" frameborder="0" allowfullscreen></iframe>', 'Arctic Monkeys'),
	('No. 1 Party Anthem','4:03','<iframe width="420" height="315" src="https://www.youtube.com/embed/pDYlWAf-ekk" frameborder="0" allowfullscreen></iframe>', 'Arctic Monkeys'),
	('Mad Sounds','3:35','<iframe width="420" height="315" src="https://www.youtube.com/embed/iP9zhCA9AfQ" frameborder="0" allowfullscreen></iframe>', 'Arctic Monkeys'),
	('Fireside','3:01','<iframe width="420" height="315" src="https://www.youtube.com/embed/jNbLINg3SrQ" frameborder="0" allowfullscreen></iframe>', 'Arctic Monkeys'),
	('Whyd You Only Call Me When Youre High','2:41','<iframe width="420" height="315" src="https://www.youtube.com/embed/C8zDfF2sT6w" frameborder="0" allowfullscreen></iframe>', 'Arctic Monkeys'),
	('Snap Out Of It','3:31','<iframe width="420" height="315" src="https://www.youtube.com/embed/4ZWOnok69Mw" frameborder="0" allowfullscreen></iframe>', 'Arctic Monkeys'),
	('Knee Socks','4:18','<iframe width="420" height="315" src="https://www.youtube.com/embed/4zA8U0aKtaQ" frameborder="0" allowfullscreen></iframe>', 'Arctic Monkeys'),
	('I Wanna Be Yours','3:04','<iframe width="420" height="315" src="https://www.youtube.com/embed/1r3kEcCJo9g" frameborder="0" allowfullscreen></iframe>', 'Arctic Monkeys')	
	;
	
	
INSERT INTO Album VALUES
	('John Mayer','Paradise Valley','2013','http://assets.rollingstone.com/assets/images/album_review/john-mayer-1376403903.jpg'),
	
	('Jason Aldean','Relentless','2007','https://upload.wikimedia.org/wikipedia/en/4/4c/Jasonrelentless.jpg'),
	
	('Johnny Cash', 'The Legend of Johnny Cash','2005','http://ecx.images-amazon.com/images/I/51MGN27RJ1L.jpg'),
	
	('Rolling Stones','Hot Rocks','1971', 'http://slyvinyl.com/wp-content/uploads/2013/05/Rolling_stones_-_hot_rocks.jpg'),
	
	('Red Hot Chili Peppers','Stadium Arcadium','2006','http://ecx.images-amazon.com/images/I/51NMPS4744L.jpg'),
	
	('Rick Ross','Port Of Miami','2006','http://www.discobelle.net/wp-content/uploads/2006/07/rick%20ross2.jpg'),
	
	('Coldplay','Parachutes','2000','http://static.gigwise.com/artists/parachutes-coldplay.jpg'),
	
	('Kanye West','Graduation','2007','https://farm2.staticflickr.com/1427/1336794875_fe0c9e6437_o.jpg'),
	
	('Gold Panda','Lucky Shiner','2010','http://cdn2.pitchfork.com/news/39733/2b69c160.jpg'),
	
	('Vampire Weekend','Modern Vampires of the City','2013','https://upload.wikimedia.org/wikipedia/en/archive/4/4d/20150204021125!Vampire_Weekend_-_Modern_Vampires_of_the_City.png'),
	
	('Arctic Monkeys','AM','2013','https://upload.wikimedia.org/wikipedia/en/0/04/Arctic_Monkeys_-_AM.png'),
	
	('Lucy Rose','Like I Used To','2012','http://www.cafemaroon.com/wp-content/uploads/2012/10/MC-Lucy-Rose-like-i-used-to.jpg')
		;
	


INSERT INTO Belongs_to VALUES
	('John Mayer','Blues'),
	('Jason Aldean','Country'),
	('Johnny Cash','Country'),
	('Rolling Stones','Rock'),
	('Red Hot Chili Peppers','Rock'),
	('Rick Ross','Hip Hop'),
	('Coldplay','Rock'),
	('Kanye West','Hip Hop'),
	('Gold Panda','Electronic'),
	('Vampire Weekend','Modern Rock'),
	('Arctic Monkeys','Rock'),
	('Lucy Rose','Folk')
	
	
		;
	
INSERT INTO Belongs_to_album VALUES
	('Paradise Valley','Wildfire'),
	('Paradise Valley','Dear Marie'),
	('Paradise Valley','Waitin On the Day'),
	('Paradise Valley','Paper Doll'),
	('Paradise Valley','Call Me the Breeze'),
	('Paradise Valley','Who You Love (feat. Katy Perry)'),
	('Paradise Valley','I Will Be Found (Lost At Sea)'),
	('Paradise Valley','Wildfire (feat. Frank Ocean)'),
	('Paradise Valley','Youre No One Til Someone Lets You Down'),
	('Paradise Valley','Badge and Gun'),
	('Paradise Valley','On the Way Home'),
	
	('Relentless','Johnny Cash'),
	
	('The Legend of Johnny Cash','I Walk The Line'),
	('The Legend of Johnny Cash','Get Rhythm'),
	('The Legend of Johnny Cash','Guess Things Happen That Way'),
	
	('Hot Rocks','Brown Sugar'),
	('Hot Rocks','Jumping Jack Flash'),
	('Hot Rocks','Satisfaction'),
	('Hot Rocks','Wild Horses'),


	('Stadium Arcadium','Dani California'),
	('Stadium Arcadium','Snow (Hey Oh)'),
	
	('Port Of Miami','Hustlin'),
	
	
	('Parachutes','Dont Panic'),
	('Parachutes','Shiver'),
	('Parachutes','Spies'),
	('Parachutes','Sparks'),
	('Parachutes','Yellow'),
	('Parachutes','Trouble'),
	('Parachutes','Parachutes'),
	('Parachutes','We Never Change'),
	('Parachutes','Everythings Not Lost'),
	('Parachutes','Life Is For Living [Bonus Hidden Track]'),
	
	('Graduation','Good Morning'),
	('Graduation','Champion'),
	('Graduation','I Wonder'),
	('Graduation','Good Life (feat. T-Pain)'),
	('Graduation','Cant Tell Me Nothing'),
	('Graduation','Flashing Lights'),
	('Graduation','Homecoming (feat. Chris Martin)'),
	('Graduation','Bittersweet Poetry (feat. John Mayer)'),
	
	('Lucky Shiner','You'),

	('Modern Vampires of the City','Obvious Bicycle'),
	('Modern Vampires of the City','Unbelievers'),
	('Modern Vampires of the City','Step'),
	('Modern Vampires of the City','Diane Young'),
	('Modern Vampires of the City','Dont Lie'),
	('Modern Vampires of the City','Hanna Hunt'),
	('Modern Vampires of the City','Everything Arms'),
	('Modern Vampires of the City','Finger Back'),
	('Modern Vampires of the City','Worship You'),
	('Modern Vampires of the City','Ya Hey'),
	('Modern Vampires of the City','Hudson'),
	('Modern Vampires of the City','Young Lion'),
	
	
	('AM','Do I Wanna Know?'),
	('AM','R U Mine?'),
	('AM','One For The Road'),
	('AM','Arabella'),
	('AM','I Want it All'),
	('AM','No. 1 Party Anthem'),
	('AM','Mad Sounds'),
	('AM','Fireside'),
	('AM','Whyd You Only Call Me When Youre High'),
	('AM','Snap Out Of It'),
	('AM','Knee Socks'),
	('AM','I Wanna Be Yours'),
	
	('Like I Used To','Shiver')
	;

		
