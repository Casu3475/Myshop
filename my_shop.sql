-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 23-10-2022 a las 19:45:39
-- Versión del servidor: 5.7.34
-- Versión de PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `my_shop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carts`
--

CREATE TABLE `carts` (
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carts`
--

INSERT INTO `carts` (`user_id`, `product_id`, `quantity`) VALUES
(8, 2, 2),
(4, 2, 2),
(8, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`) VALUES
(1, 'Gospel', 24),
(2, 'Blues', 26),
(3, 'Jazz', 26),
(4, 'Country', 26),
(5, 'Rythm \'n\' blues', 2),
(6, 'Rock \'n\' roll', 26),
(7, 'Golden age', 26),
(8, 'Punk/wave', 26),
(9, 'Hardrock', 26),
(10, 'Alt/indie', 26),
(11, 'Contemporary', 26),
(12, 'Metal', 25),
(13, 'Pop', 25),
(14, 'Rap', 25),
(15, 'Jamaican', 25),
(16, 'Classical', 0),
(17, 'Industrial/Gothic', 25),
(18, 'Break/beat', 25),
(19, 'Drum n bass', 17),
(20, 'Hardcore', 22),
(21, 'House', 27),
(22, 'Techno', 27),
(23, 'Trance', 27),
(24, 'Utility ', 0),
(25, 'World ', 0),
(26, 'Folk', 0),
(27, 'Downtempo', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '0',
  `artist` varchar(255) NOT NULL,
  `price` int(11) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL DEFAULT '0',
  `picture` text NOT NULL,
  `description` text NOT NULL,
  `visit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `artist`, `price`, `category_id`, `picture`, `description`, `visit`) VALUES
(1, 'The Wonderful World of Depressing Country Music', 'Various', 15, 25, 'https://images.roughtrade.com/product/images/files/000/238/755/hero/the_wonderful_world__jpFxV.jpg?1647082233', '30 heartbreaking, tearjerking country classics. And aching array of tragedy and worse from George Jones, Hank Snow, Patsy Cline, Don Gibson, Kitty Wells, Rose Maddox, Eddie Arnold and many more\r\nA dramatic soap opera of cancelled weddings, divorce, separation, lying, cheating and all that good stuff from relationship management. Featuring a litany of deceit, long lost memories, childhood death, God-fearing pontifications, long lost letters and a bouquet of roses that just can’t help the situation\r\nA depressing cascade of tears for the lonely and broken hearted, the bereft and the begrudging; a fine collection of songs that could make any grown man weep.\r\nWith lesser known country icons including Goldie Hill, Texas Ruby and hillbilly legend Ray Pressley along with a aide of duets from Hank Snow And Anita Carter, Wilma Lee And Stoney Cooper and Joe Maphis And Rose Lee\r\nRemastered from a pile of tear drenched 45s, with sleeve notes from an angst-ridden Dave Henderson of Mojo magazine', 47),
(2, 'The Slim Shady LP ', 'Eminem', 18, 14, 'https://images.roughtrade.com/product/images/files/000/030/319/hero/105008.jpg?1470078236', 'Heavyweight double vinyl repress. Eminem\'s breakthrough into the mainstream. It was pretty much all or nothing for him at this point, and the huge success of the album, lead by the single \'My Name Is\', catapulted his career forward. The album is noted for its cartoonish and overly violent lyrics as well as its sharp lyricism. The production - masterminded by Dr. Dre but also helmed in large doses by Marky and Jeff Bass, along with Marshall himself - mirrors his rhymes, with their spare, intricately layered arrangements enhancing his narratives, which are always at the forefront. A stonewall classic.', 43),
(3, 'Music To Be Murdered By ', 'Eminem', 18, 14, 'https://images.roughtrade.com/product/images/files/000/187/219/hero/open-uri20200117-20250-a02cxc?1579263863', 'Eminem returns with an album title that pays homage to Alfred Hitchcock. The album features collaborations with Ed Sheeran, Skylar Grey, Royce Da 5\'9\", Black Thought, Q-Tip, Denaun, White Gold, Young M.A, KXNG Crooked, Joell Ortiz, Don Toliver, Anderson .Paak and Juice WRLD', 20),
(4, 'The Real Folk Blues ', 'Muddy Waters', 9, 2, 'https://images.roughtrade.com/product/images/files/000/009/065/hero/79190.jpg?1469764604', 'Once Chess discovered a white folk-blues audience ripe and ready to hear the real thing, they released a series of albums under the Real Folk Blues banner. This is one of the best entries in the series, a mixed bag of early Chess sides from 1949-1954, some of it hearkening back to Muddy\'s first recordings for Aristocrat with only Big Crawford on strings in support, with some wonderful full band sides rounding out the package to give everyone the big picture. A couple of highlights to pay special attention to are the cha cha/shuffle strut of the band charging through \"Walkin\' Through the Park\" and the \"I\'m a Man\"-derived nastiness of \"Mannish Boy.\"', 5),
(5, 'The Best Of Muddy Waters ', 'Muddy Waters', 11, 2, 'https://images.roughtrade.com/product/images/files/000/008/894/hero/79177.jpg?1469763442', 'Repress of an early Best Of Muddy Waters with plenty of great Rhythm and Blues tracks from a true originator.\r\nA1 I Just Want To Make Love To You A2 Long Distance Call A3 Louisiana Blues A4 Honey Bee A5 Rollin\' Stone A6 I\'m Ready Bonus TracksA7 Little Geneva A8 Rollin\' And Tumblin\' A9 Blow Wind Blow\r\nB1 Hoochie Coochie B2 She Moves Me B3 I Want You To Love Me B4 Standing Around Crying B5 Still A Fool B6 I Can\'t Be Satisfied Bonus TracksB7 Mean Red SpiderB8 Streamline WomanB9 Baby Please Don\'t Go', NULL),
(6, 'Legend - The Best Of Bob Marley and The Wailers', 'Bob Marley', 18, 15, 'https://images.roughtrade.com/product/images/files/000/046/699/hero/32991.jpg?1470243553', 'remastered 180 gram vinyl with a free mp3 download code. even as greatest hits packages go, this is an utter gem. every song is inspired, in a class of its own, whether the real version of \'i shot the sheriff,\' the hymn like \'no woman, no cry,\' or the sheer joy of \'jamming.\' even allowing that marley never wrote any bad material, then \'legend\' is still the creme de la creme, the heart and soul of the jamaican people packed into one twelve inch vinyl.', 1),
(7, 'The Masterpieces of Claude Debussy ', 'Debussy', 8, 16, 'https://images.roughtrade.com/product/images/files/000/169/496/hero/51UKajRtTWL.jpg?1553527970', 'One in the new series from Wagram - a great introduction to the classic classics.', 2),
(8, 'Cleopatra', 'The Lumineers', 7, 13, 'https://images.roughtrade.com/product/images/files/000/028/227/hero/102407.jpg?1469961199', 'Four years have passed since The Lumineers released their debut self-titled album. They hit the alternative landscape with such a strong force, it\'s a surprise how long it took for them to return. Now after that long wait, the second album, called \'Cleopatra\' is released. Frontman Wesley Schultz and co-founder Jeremiah Fraites got back to basics when it came time to write for the 11-track collection. And while the raw, jangly guitars, parlor-room piano chords, and marching band snare rolls from the first record remain intact, \'Cleopatra\' has a welcome, added heft. LP - Housed in Gatefold Sleeve.', 2),
(9, 'Teaser and The Firecat (50th Anniversary Edition)', 'Cat Stevens', 22, 16, 'https://images.roughtrade.com/product/images/files/000/235/471/hero/amlp51321__15618.1632542511.jpg?1644015084', 'Following 50th anniversary editions of the era-defining Tea for the Tillerman and Mona Bone Jakon, 2021 sees Yusuf / Cat Stevens celebrate 1971’s landmark Teaser and the Firecat, with a new 50th Anniversary Remaster on 180 gram vinyl. The 50th Anniversary remaster was completed at Abbey Road Studios, and was overseen by original album producer, Paul Samwell-Smith.', NULL),
(10, 'The Rise and Fall of Ziggy Stardust and the Spiders From Mars', 'David Bowie', 24, 13, 'https://images.roughtrade.com/product/images/files/000/026/535/hero/bowie.jpeg?1631012680', 'Originally released through RCA Victor on 6th June 1972, Ziggy Stardust was David Bowie\'s fifth album, co-produced by Bowie and Ken Scott. Incredibly, the album was written whilst Bowie was recording 1971\'s Hunky Dory album, with recording beginning a couple of months before that album\'s release. It was recorded at Trident Studios, London between 8th November 1971 and 4th February 1972, with the line up: Mick Ronson (guitar, piano, backing vocals, string arrangements), Trevor Bolder (bass), Mick Woodmansey (drums), Rick Wakeman (keyboards) and backing vocals on \"It Ain\'t Easy\" by Dana Gillespie. as well as performing vocals, Bowie also played acoustic guitar, saxophone and harpsichord on the album and was involved in the arrangements too. The album eventually peaked at number 5 on the UK album chart on 22nd July having entered the chart at number 15 on 1st July.', NULL),
(11, 'News of the World', 'Queen', 17, 9, 'https://images.roughtrade.com/product/images/files/000/023/146/hero/96210.jpg?1469893679', '180 Gram Vinyl. Mastered by Bob Ludwig. Half-speed lacquers cut at Abbey Road Studios. \'News of the World\' is the sixth studio album by Queen, released in 1977. \'News of the World\' was the second album to be produced solely by the band (the first being \'A Day at the Races\'). Famous for its anthemic opening salvo, \'We Will Rock You / We Are The Champions\' - at once an acknowledgement of and delight in their new-found stadium status - it\'s possible to see \'News Of The World\' as the last album of Queen\'s \'classic\' period, when their fusion of gaudy operatics, tearful ballads and \'70s guitar-rock came together most congruently and well. With \'Spread Your Wings\' the band crafted another of their typically artful paeans to hedonistic freedom, and \'My Melancholy Blues\' is one of Freddie Mercury\'s most engaging displays of self-indulgence - though they stepped up the pace appreciably on \'Sheer Heart Attack,\' which proved that they could match anyone for sheer muscle, when the urge seized them. The album\'s most successful cut, however - Brian May\'s \'It\'s Late\' - successfully married the guitarist\'s power chord-fetish with Mercury\'s infatuated romantic melodrama: the result, overblown on both counts, stands as a near-definitive record of this band and their sound.', NULL),
(12, 'The Joshua Tree', 'U2', 21, 13, 'https://images.roughtrade.com/product/images/files/000/083/569/hero/600x600bb.jpg?1476130520', 'Remastered Double Heavyweight Vinyl. The Joshua Tree, first released in March 1987, capitalized perfectly on U2\'s startling appearance at Live Aid almost two years previously. Aware of the platform that they now had, the band crafted away with Brian Eno and Daniel Lanois to make an album that was sonically unified, emotionally intelligent and commercially sound. It takes an outsider\'s eye to unpack and commentate on the idiosyncrasies of a country. The America of U2\'s The Joshua Tree is the one the group surveyed through their tourbus window as they built and cemented their reputation throughout the early 80s. The fact that they were working out of Ireland made it to be a far more balanced account of the failings and successes of the New World. The third track (and lead single), With Or Without You, is the unique selling point of the album; it brings together the threads of the album\'s openers Where The Streets Have No Name, and I Still Haven\'t Found What I\'m Looking For and demonstrates quite how capable as a group they had become.', NULL),
(13, 'El Mal Querer', 'Rosalia', 19, 13, 'https://images.roughtrade.com/product/images/files/000/162/107/hero/100000x100000-999.jpg?1542817983', 'The second album from the Spanish singer is a remarkable feat, seamlessly linking flamenco’s characteristic melodrama to the heart-wrenching storytelling of modern, woman-flexing R&B. El Mal Querer, the relentlessly gorgeous album from Rosalía Vila Tobella, a 25-year-old Spanish singer with one foot steeped in her Catalan history and the other hypebae-sneakered foot sidling into the future. Rooted in flamenco—the Arabic-influenced Andalusian music which she has studied since a young age—El Mal Querer is a dramatic, romantic document that seamlessly links that tradition’s characteristic melodrama to the heart-wrenching storytelling of modern, woman-flexing R&B. Flamenco music carries the sound of Spanish history within it—you can practically hear the migration patterns—and Rosalía uses it to tell the story of a doomed relationship across 11 songs, each one serving as a new chapter. It is one of the most exciting and passionately composed albums to appear not only in the global bass tradition but in the pop and experimental spheres this year. (Pitchfork)', NULL),
(14, 'Come Away With Me', 'Norah Jones', 23, 3, 'https://images.roughtrade.com/product/images/files/000/237/683/hero/open-uri20220225-28672-w4zh7?1645780386', 'Come Away With Me, released in 2002 by a young, unknown singer on a traditionally un-pop label, was a unique blend of jazz, blues, country, folk and pop – and lifted off beyond imagination. To date, the album has sold nearly 30 million times, and has garnered multiple awards, including no less than eight Grammys®. This coming February marks this landmark album’s 20th anniversary and, to celebrate, Blue Note / UMe has worked with the artist and her team on a special collection that will reveal for the first time the full story of the making of this now-classic album.', NULL),
(15, 'Graceland', 'Paul Simon', 27, 16, 'https://images.roughtrade.com/product/images/files/000/135/702/hero/600x600bb.jpg?1507210101', 'With Graceland, Paul Simon hit on the idea of combining his always perceptive songwriting with the little-heard mbaqanga music of South Africa, creating a fascinating hybrid that re-enchanted his old audience and earned him a new one. It is true that the South African angle (including its controversial aspect during the apartheid days) was a powerful marketing tool and that the catchy music succeeded in presenting listeners with that magical combination: something they\'d never heard before that nevertheless sounded familiar. As eclectic as any record Simon had made, it also delved into zydeco and conjunto-flavored rock & roll while marking a surprising new lyrical approach (presaged on some songs on Hearts and Bones); for the most part, Simon abandoned a linear, narrative approach to his words, instead drawing highly poetic (\"Diamonds on the Soles of Her Shoes\"), abstract (\"The Boy in the Bubble\"), and satiric (\"I Know What I Know\") portraits of modern life, often charged by striking images and turns of phrase torn from the headlines or overheard in contemporary speech. An enormously successful record, Graceland became the standard against which subsequent musical experiments by major artists were measured.', NULL),
(16, 'The Fat Of The Land', 'The Prodigy', 28, 23, 'https://images.roughtrade.com/product/images/files/000/193/123/hero/open-uri20200317-8756-v4rwma?1584462746', 'Few albums were as eagerly anticipated as The Fat of the Land, the Prodigy\'s long-awaited follow-up to Music for the Jilted Generation. By the time of its release, the group had two number one British singles with \"Firestarter\" and \"Breathe\" and had begun to make inroads in America. The Fat of the Land was touted as the album that would bring electronica/techno to a worldwide audience (Of course, in Britain, the group already had a staggeringly large following that was breathlessly awaiting the album.) The Fat of the Land falls short of masterpiece status, but that isn\'t because it doesn\'t deliver. Instead, it delivers exactly what anyone would expect: intense hip-hop-derived rhythms, imaginatively reconstructed samples, and meaningless shouted lyrics from Keith Flint and Maxim. Half of the album does sound quite similar to \"Firestarter,\" especially when Flint is singing. Granted, Liam Howlett is an inventive producer, and he can make empty songs like \"Smack My Bitch Up\" and \"Serial Thrilla\" kick with a visceral power, but he is at his best on the funky hip-hop of \"Diesel Power\" (which is driven by an excellent Kool Keith rap) and \"Funky Shit,\" as well as the mind-bending neo-psychedelia of \"Narayan\" (featuring guest vocals by Crispian Mills of Kula Shaker) and the blood-curdling cover of L7\'s \"Fuel My Fire,\" which features vocals by Republica\'s Saffron. All those guest vocalists mean something -- Howlett is at his best when he\'s writing for himself or others, not his group\'s own vocalists. \"Firestarter\" and all of its rewrites capture the fire of the Prodigy at their peak, and the remaining songs have imagination that give the album weight. The Fat of the Land doesn\'t have quite enough depth or variety to qualify as a flat-out masterpiece, but what it does have to offer is damn good.', NULL),
(17, 'Babel', 'Mumford & Sons', 25, 26, 'https://images.roughtrade.com/product/images/files/000/071/316/hero/65174.jpg?1470393070', 'all wristbands for the in-store have now gone! heavyweight 180 gram vinyl housed in a lush gatefold sleeve. while \'sigh no more\' was completed in just five weeks, the band spent a year and a half recording \'babel\' due to their heavy tour schedule. markus dravs, who also helmed \'sigh no more\', served as producer. the end result is an album with \'heavier emotions,\' but does not stray far from their trademark acoustic sound. the ingredients are very much the same: the four core instruments and a lack of a drummer, which can give it that strange, simple, unique sort of sound.', NULL),
(18, 'Rebellion Rises', 'Ziggy Marley', 18, 15, 'https://images.roughtrade.com/product/images/files/000/175/604/hero/open-uri20190711-5370-ahucag?1562840156', '7th solo studio album from the 8 x Grammy winning artist, reggae icon, author, entrepreneur and philanthropist Ziggy Marley! Politically motivated, message driven, stand up, speak out and think about your future, your world and the lives of others. \"The rebellion begins in the mind, the melody, and the music,\" assures Ziggy. \"We are a conduit of that. The rebellion is consciousness. Now the consciousness starts spreading, we become aware and we rise.\" No track embodies this message better than the album\'s title track and official first single \"Rebellion Rises.\" A manifesto with a chant-like chorus, the song emboldens its listeners to use the power we all have as instruments of positive change around the world.', NULL),
(19, 'Blue Train', 'John Coltrane', 14, 3, 'https://images.roughtrade.com/product/images/files/000/245/139/hero/open-uri20220606-23952-189x9og?1654529058', 'As his only release for Blue Note, this 1957 set is one of the finest bop albums recorded. Not only does it feature Coltrane and his soaring sax working through \"Blue Train,\" it also gets some truly wonderful brass help from Lee Morgan and Curtis Fuller. Not as exploratory as his later work, but this is surely one of the most influential LPs to come out of jazz.', 1),
(20, 'St Anger', 'Metallica', 32, 12, 'https://images.roughtrade.com/product/images/files/000/022/732/hero/95669.jpg?1469889008', 'Double 180 Gram Heavyweight Vinyl. Never underestimate the regenerative powers of Metallica. Following the stripped-down \'Load\' and \'Reload\', they\'ve returned to the raw, vitriolic savagery of their earlier canon, using 1984\'s \'Ride the Lightning\' as a template for \'St. Anger\'. The title track provides the psychic lynchpin of the album by combining the bombast and defiance of the band\'s earliest high-water marks with more deliberate lyrics and emotional nakedness. Equally cathartic is \'Some Kind of Monster,\' a lumbering beast of a song that declares, \"This is the voice of silence no more.\" Despite that claim, there\'s an economy to these lyrics; James Hetfield\'s raw-toothed growl only occasionally punctuates the menacing soundscapes. In fact, \'Dirty Windows,\' the standout track here, is a shimmering five-minute instrumental that\'s free of the baroque trappings that sometimes clutter the Metallica landscape.', NULL),
(21, 'Led Zeppelin', 'Led Zeppelin', 21, 9, 'https://images.roughtrade.com/product/images/files/000/011/084/hero/81577.jpg?1469779063', 'On their classic 1969 debut album, Led Zeppelin pumped up blues classics such as Otis Rush\'s \'I Can\'t Quit You Baby\' and Howlin\' Wolf\'s \'How Many More Times\' and introduced the world to their manic and exaggerated blues-rock.CD - The original album, newly remastered, in a gatefold sleeve with an 8 page booklet.Double CD - Deluxe 2 CD package with the original artwork, plus the newly created negative artwork for the companion audio. The original album is newly remastered; the 2nd CD featuring a previously unreleased October 1969 concert from Paris, France. 16 page booklet.LP - Original album on 180 gram vinyl, newly remastered in single sleeve replicating the original album.3LP - Original remastered LP, plus 2 LPs of companion audio on 180 gram vinyl in a tri-fold sleeve. Featuring a previously unreleased October 1969 concert from Paris, France.Boxset - Led Zeppelin\'s debut album, newly remastered, and including an additional CD and double LP featuring a previously unreleased October 1969 concert from Paris, France. Super Deluxe Edition Box Set Includes: CD1: Original album newly remastered in vinyl replica sleeve, CD2: Companion audio featuring a previously unreleased October 1969 concert from Paris, France in a new sleeve, Vinyl 1: Original album newly remastered in single sleeve replicating the original album on 180 gram vinyl, Vinyl 2/3: Companion audio on two LPs ( 180 gram vinyl ) in a new sleeve featuring negative artwork based on the original album artwork, and featuring a previously unreleased October 1969 concert from Paris, France, HD Download card with the original album @ 96/24 and the live concert from Paris @ 48/24, LP sized, individually numbered, high quality print of the original album cover, Album-size hardback book (72 pages) and Replica of original Atlantic press kit.', 1),
(22, 'Richard D James', 'Aphex Twin', 24, 21, 'https://images.roughtrade.com/product/images/files/000/005/287/hero/74649.jpg?1469740602', 'Official Warp repress. Heavyweight 180 Gram vinyl with Download. None of his recordings have captured the competing impulses to lull you to sleep and blast out your eardrums as well as Richard D. James, his third and best album. As the title indicates, James has turned inward for inspiration, painting aural pictures of real and imagined scenes from his west country childhood. Goongumpas is a fanciful, playful tune that wouldn\'t sound out of place on the soundtrack to Willy Wonka and the Chocolate Factory. As his adventures with the family upright indicate, James was a bit of a devil even as a child. Beetles is the sound of a boy frying bugs on the sidewalk with a magnifying glass, and To Cure A Weakling Child shows flashes of the sort of sadism found only on preschool playgrounds. If you still doubt that young Richard developed early on, the romantic Nino Rota-style strings on Girl / Boy Song are just made for passionate seductions, and the tune appears in three mixes, each one hot and hornier than the one before.', NULL),
(23, 'Be Here Now', 'Oasis', 35, 10, 'https://images.roughtrade.com/product/images/files/000/031/091/hero/105932.jpg?1470082800', '\'Be Here Now\' is the third release in the Oasis series \'Chasing The Sun: 1993-1997\', released on Big Brother Recordings on the 20th anniversary of the first day of the \'Be Here Now\' recording sessions at Abbey Road Studios. Arguably the most anticipated British album release of all time, \'Be Here Now\' was recorded with producer Owen Morris at Abbey Road Studios, Ridge Farm Studios, and Air Studios between October 1996 and May 1997. Originally released at midnight on Thursday August 21st 1997, \'Be Here Now\' sold 700,000 copies in just 3 days and remains, to this day, the fastest selling UK album on release. To date it has sold over 8 million copies worldwide. Oasis released three singles from the album, two of which - \'D\'You Know What I Mean?\' and \'All Around The World\' - charted at No.1, with \'Stand By Me\' reaching No.2. The album has now been re-mastered from the original tapes and the deluxe edition format features bonus content of B-sides, rare and unreleased Oasis tracks from the \'Be Here Now\' era, plus a brand new Noel Gallagher mix of \'D\'You Know What I Mean?\'. The deluxe edition also includes the legendary Mustique demos; 14 previously unreleased original demos for \'Be Here Now\' recorded in the Caribbean Island in early 1996 by Noel Gallagher and Owen Morris. None of these original versions of the songs have ever been heard by anyone outside of the band before.', NULL),
(24, 'The Car', 'Arctic Monkeys', 11, 10, 'https://images.roughtrade.com/product/images/files/000/251/480/hero/am_tc_packshot_3000x3000_RGB_%281%29.jpg?1661267406', 'The Car is the seventh studio album from Arctic Monkeys. Featuring ten new songs written by Alex Turner, produced by James Ford and recorded at Butley Priory, Suffolk, La Frette, Paris and RAK Studios, London.', NULL),
(25, 'Never Mind The Bollocks', 'Sex Pistols', 23, 8, 'https://images.roughtrade.com/product/images/files/000/081/825/hero/100000x100000-999.jpg?1472502441', 'Back To Black. 180 gram heavyweight vinyl with download. Never Mind the Bollocks perfectly articulated the frustration, rage, and dissatisfaction of the British working class with the establishment, a spirit quick to translate itself to strictly rock & roll terms. the Pistols paved the way for countless other bands to make similarly rebellious statements, but arguably none were as daring or effective. It\'s easy to see how the band\'s roaring energy, overwhelmingly snotty attitude, and Rotten\'s furious ranting sparked a musical revolution, and those qualities haven\'t diminished one bit over time. Never Mind the Bollocks is simply one of the greatest, most inspiring rock records of all time.', NULL),
(26, 'The Times They Are a Changin\'', 'Bob Dylan', 25, 26, 'https://images.roughtrade.com/product/images/files/000/082/262/hero/TimesUKStereo1Front.JPG?1473758172', 'Bob Dylan\'s third album The Times They Are a Changin\', released in 1964, might not have been such a landmark as The Freewheelin\' Bob Dylan, but it still was a very strong album. This album was political and social statement like no other. Most of the songs on his protest album are about very dark subjects, such as murders, racism, war, and hardship. As the album released two months after president John F Kennedy\'s assassination, the powerful title track became an anthem for the generation. The lyrics are absolutely brilliant and Dylan\'s singing, and playing is simple, but powerful.', NULL),
(27, 'Band of Brothers', 'Willie Nelson', 27, 4, 'https://images.roughtrade.com/product/images/files/000/013/384/hero/84392.jpg?1469797187', 'Band Of Brothers is the 63rd studio album by country music singer songwriter Willie Nelson. Produced by Buddy Cannon, the album was recorded by Nelson in October 2013 and March 2014. The sessions took place at Nashville’s Sound Emporium Studios with additional recordings at Pedernales Studio in Austin, Texas and The Hit Factory Criteria in Miami, Florida.', NULL),
(28, 'Rhythm n Gospel ', 'Sister Rosetta Tharpe', 14, 1, 'https://images.roughtrade.com/product/images/files/000/188/597/hero/catlp140.jpg?1581071705', 'Females have never figured strongly in the ranks of blues and rock guitar players, but the woman featured on this LP can claim to be one of the formative influences on modern rock ‘n’ roll guitar. Sister Rosetta Tharpe is remarkable, not just because she was an acclaimed gospel singer from the late Thirties to her death in 1973, but because she was also one of the earliest exponents of the electric guitar. In fact she helped to invent the whole concept of rock lead guitar. Her guitar-playing, which featured a fingerpicking style unusual at the time, strongly influenced Elvis Presley, Johnny Cash, Jerry Lee Lewis, Etta James, Little Richard and Bonnie Raitt. Enjoy some of those moments on this collection selected from her prolific first recording decade.', NULL),
(29, 'Bronco ', 'Orville Peck', 18, 4, 'https://images.roughtrade.com/product/images/files/000/236/042/hero/open-uri20220214-5421-10n41p0?1644840266', 'Bronco is the new album from country artist and songwriter Orville Peck. A consummate storyteller, the country rock inspired Bronco plays upon the horse theme so often found in Orville’s work, but this time with an exploration of freedom, breaking free from that which binds us and all that is wild and untamed. Bronco builds upon and follows Peck’s previous album Pony and EP Show Pony, which explored themes of love, loss and loneliness but advances the story arc in a bolder, newer and warmer trajectory.\r\n\r\n“This is my most impassioned and authentic album to date,” says Peck. “I was inspired by country rock, 60s and 70s psychedelic, California and even bluegrass with everything being anchored in country. Bronco is all about being unrestrained and the culmination of a year of touring, writing in isolation and going through and ultimately emerging from a challenging personal time.”\r\n', NULL),
(30, 'The Ultimate Chuck Berry ', 'Chuck Berry', 17, 6, 'https://images.roughtrade.com/product/images/files/000/036/875/hero/10101.jpg?1470156098', 'the ultimate chuck berry\' is a collection of every noteworthy track in chronological order from this legendary one-man music machine. this set is peppered with a few lesser-known cuts such as the dark, churning \'downbound train\' and the calypso-tinged \'havana moon\', as well as some entries from berry\'s later period, such as the terrific \'tulane\'. but once berry\'s classics start stacking up, there\'s not room for much else. rock archetypes such as \'johnny b. goode\', \'sweet little sixteen\', \'rock and roll music\', and \'roll over beethoven\' are merely the tip of the iceberg.', NULL),
(31, 'Toronto Rock and Roll Revival 1969', 'Chuck Berry', 48, 6, 'https://images.roughtrade.com/product/images/files/000/242/294/hero/Chuck_Berry_-_Now_On_Vinyl_2.jpg?1651076046', 'The complete concert and mastered from the Analog Tapes. There was no shortage of historic rock music festivals in 1969, from highs of Woodstock to the crashing lows of Altamont. Meanwhile, interest was steadily building on another front. A full-edged 1950s rock and roll revival was brewing, and the idiom’s pioneers were experiencing a renaissance. No longer viewed as over-the-hill relics, they stood as vital sources of real rock and roll.\r\n\r\nCombining the two contrasting demographics at one event was a rare sight to behold, but the Toronto Rock’n’Roll Revival 1969, held that September 13 at the University of Toronto’s Varsity Stadium, represented that unlikely hybrid. That afternoon the Father Of Rock & Roll returned to lead the apostles of rock into the next decade.\r\n\r\nAfter decades of inferior releases, for the first time, this historical concert is presented in its entirety.\r\n', NULL),
(32, 'Live Chile 1992', 'Guns N\' Roses', 18, 12, 'https://images.roughtrade.com/product/images/files/000/235/614/hero/CS845373-01A-MED.jpg?1644259953', 'Guns N Roses smashed their way to the top of the rock world, thanks to their uncanny synthesis of sexual obsession paranoia, rage, insecurity and arrogance, infused with a mental disorder and manic, depressive schizophrenia. G N\' R were at the peak of their success and notoriety when they embarked on their hotly anticipated Use Your Illusion world tour in January 1991. One of the longest concert tours in rock history, it took in 194 shows in 27 countries, drawing to a close in July 1993. Along the way, Izzy Stradlin had left the band and was replaced by Gilby Clarke who appears here. This superb set captures the band at their raucous best midway through the epic tour, performing a cross‐section of their best‐known material, as well as numerous covers in front of a record breaking 85,535, the largest crowd ever to attend the National stadium.\r\n\r\nRox Vox proudly presents the entire, original FM Futuro Radio broadcast of G N’ R, loud and lewd at the Estadio Nacional, Chile on December 2nd 1992. Superb, professionally remastered original broadcast with background liners and timeline photos.\r\n', NULL),
(33, 'Appetite For Destruction', 'Guns N\' Roses', 8, 12, 'https://images.roughtrade.com/product/images/files/000/000/445/hero/12762.jpg?1469689742', 'Guns N\' Roses\' debut, \'Appetite for Destruction\' was a turning point for hard rock in the late \'80s - it was a dirty, dangerous, and mean record in a time when heavy metal meant nothing but a good time. On the surface, Guns N\' Roses may appear to celebrate the same things as their peers - namely, sex, liquor, drugs, and rock & roll - but there is a nasty edge to their songs, since Axl Rose doesn\'t see much fun in the urban sprawl of L.A. and its parade of heavy metal thugs, cheap women, booze, and crime. The music is as nasty as the lyrics, wallowing in a bluesy, metallic hard rock borrowed from Aerosmith, AC/DC, and countless faceless hard rock bands of the early \'80s. It\'s a primal, sleazy sound that adds grit to already grim tales. It also makes Rose\'s misogyny, fear, and anger hard to dismiss as merely an artistic statement; this is music that sounds lived-in. And that\'s exactly why \'Appetite for Destruction\' is such a powerful record - not only does Rose have fears, but he also is vulnerable, particularly on the power ballad \'Sweet Child O\' Mine.\' He also has a talent for conveying the fears and horrors of the decaying inner city, whether it\'s on the charging \'Welcome to the Jungle,\' the heroin ode \'Mr. Brownstone,\' or \'Paradise City,\' which simply wants out. But as good as Rose\'s lyrics and screeching vocals are, they wouldn\'t be nearly as effective without the twin-guitar interplay of Slash and Izzy Stradlin, who spit out riffs and solos better than any band since the Rolling Stones, and that\'s what makes \'Appetite for Destruction\' the best metal record of the late \'80s.\r\n', 3),
(34, 'Top Gun', 'Various', 9, 24, 'https://images.roughtrade.com/product/images/files/000/250/811/hero/Top_gun.jpg?1660725814', 'Top Gun is the soundtrack from the film of the same name, released in 1986 by Columbia Records. It features Cheap Trick, Berlin, Kenny Loggins, Miami Sound Machine etc.\r\n\r\n', 6),
(35, 'Last of the Mohicans - Original Motion Picture Soundtrack ', 'Trevor Jones and Randy Edelman', 13, 24, 'https://images.roughtrade.com/product/images/files/000/255/768/hero/0.jpg?1665732705', 'Rare is the soundtrack that as time passes overshadows the film of which it was a part, but that’s what has happened in the years since the 1992 release of The Last of the Mohicans. Not that the film is any slouch; Michael Mann’s epic retelling of James Fenimore Cooper’s frontier tale is a cable TV fixture and more evidence that Daniel Day-Lewis is one of the great actors of our time. But the film’s music has emerged as easily one of the most popular scores of ‘90s cinema, with the “Main Title” in particular having become a part of our popular culture the same way as, say, the signature themes from Titanic, Star Wars, and other blockbusters. What makes it even more extraordinary is that the movie’s score emerged from postproduction turmoil as the work of two different composers, Trevor Jones and Randy Edelman. Jones’ work is more of the traditional orchestral soundtrack ilk, Edelman’s has a more contemporary feel, but somehow it all fits, with the closing credit song “I Will Find You” by Clannad an added bonus. Long a bestselling soundtrack CD, Real Gone Music release this revered soundtrack on vinyl.', 1),
(36, 'Electronic Generations', 'Carl Cox', 25, 22, 'https://images.roughtrade.com/product/images/files/000/245/663/hero/open-uri20220610-26845-38a826?1654877998', 'The legendary Carl Cox returns with his first artist album in over 10 years. Titled Electronic Generations, the 15-track techno opus is the first album of his to be released via BMG, marking an exciting new chapter for the DJ icon as a recording artist. Having spent the last two years in his Melbourne studio creating music and taking his production to a whole new level, Carl is ready to unveil his first body of work as a live electronic artist and is excited to take the album on the road later this year to perform it completely live. ', NULL),
(37, 'In The Grow', 'RAFRAM', 13, 22, 'https://images.roughtrade.com/product/images/files/000/243/180/hero/unnamed_%281%29.png?1652178746', 'Orphic Apparition is a new label born out of a transatlantic meeting of minds. Facilitated by a long, hedonistic party in one of present-day London’s ‘meanwhile use’ venues Grow Tottenham, Canadian producer Raf Reza and British acid house luminary Paul Chivers spent a precious day in the studio to record a 3 hour straight to DAT session before Reza\'s return to Canada. The result of this spontaneous yet intuitive collaboration blurs the lines between Chiver’s long-standing Ramjac Corporation alias and Reza’s genre-spanning approach to dub, breaks and house styles. Part of the early 90s rave scene and an important member of the blueprint-setting Irdial label, Ramjac locks heads with the self-professed ‘lazy music guy from Toronto’ to adapt their studio session into five separate mixdowns.', NULL),
(38, 'Cosmic Transmission', 'Zenker Brothers', 22, 22, 'https://images.roughtrade.com/product/images/files/000/201/954/hero/a1128404085_10.jpg?1600698878', 'Zenkers present their second album Cosmic Transmission.\r\nIn another time it felt like, only an unpredictable extreme event could change the way we choose to live together. Now it feels so crazy, it can be overwhelming, but always remember we are just a tiny micro spaceship traveling through a gigantic universe. When nothing is safe, all is possible. We are one - one love. M&D', 1),
(39, 'Choose Your Weapon', 'Hiatus Kaiyote', 26, 5, 'https://images.roughtrade.com/product/images/files/000/247/826/hero/BF120-a-7in.jpg?1657192421', 'Wrapped in soul, blending poetry and polyrhythms, the music of Hiatus Kaiyote is in a lane all by itself. The Grammy-nominated four-piece band is set to return to stereos with their new album Choose Your Weapon.The 18-track, 70-minute odyssey from the Melbourne, Australia-based band takes listeners on a journey through the group\'s self-created ecosystem, populated with songs each embodying its own mini-cinematic sonic soundscape.\r\n\r\nFans have already gotten a taste of what\'s to come on Choose Your Weapon by way of their December 2014 EP, By Fire, which featured three of the album\'s 18 tracks. \"\"By Fire\" is a burial song,\" says frontwoman Nai Palm, about the personal track. \"It discusses the creative and destructive forces of fire and uses this element as a reference point to express about my father passing away in a house fire.\" ', 1),
(40, 'Spit / Swallow ', 'Skinny Pelembe', 7, 5, 'https://images.roughtrade.com/product/images/files/000/146/308/hero/a3383681265_16.jpg?1521067458', 'Skinny Pelembe lines up his first single proper for the London imprint Brownswood Recordings. Spit / Swallow spans pastoral pop, psychedelic textures and hip-hop-tipped, chopped and spliced guitar, interlacings samples with rolling drum breaks and echoed falsettos. B-side Toy Shooter follows in similar fashion, bridging psych-rock exaltation with beat-head, synth-jamming production.', NULL),
(41, 'Soul on Top', 'James Brown', 18, 5, 'https://images.roughtrade.com/product/images/files/000/255/481/hero/JamesBrown-SoulOnTop_LP_Cvr.jpg?1665503767', 'In the liner notes to this grooving 1969 album, featuring a big band led by drummer Louis Bellson and arranged by Impulse! star Oliver Nelson, the Godfather of Soul explains that he is a “jazz man at heart.” Brown’s soul consigliere, saxophonist Maceo Parker, helps make this a swinging, spirited and satisfying set of standards and JB hits.\r\n\r\nVerve By Request Series features 180-gram vinyl, pressed at Third Man in Detroit.\r\n', NULL),
(42, 'Funky Stuff ', 'Jiro Inagaki And Soul Media', 48, 3, 'https://images.roughtrade.com/product/images/files/000/242/475/hero/unnamed_%284%29.jpg?1651231637', 'A masterpiece of jazz rock by masterpiece Jiro Inagaki! Beyond jazz rock. The soul media led by Jiro Inagaki arrived at the ultimate tight and cool groove. As Inagaki himself said, \"I did black funk,\" the musicality of black music goes to another dimension by combining the explosive feeling of jazz rock that I have cultivated up to that point with the tenacity and elasticity of black music. I made a leap. Coupled with the strange arrangement of the master Hiromasa Suzuki, the groove is polished, glossy, and shines mysteriously. All the songs are the highlights, such as \"Painted Paradise\" which is full of dynamism and sprinting, \"Breeze\" where funkness and mellowness coexist, and a cover of Cool & The Gang \"Funky Stuff\" which has a low center of gravity and sharpness. It is now a definitive masterpiece of wants from all over the world.', 1),
(43, 'The Fontana Jazz Albums (1961-1969) ', 'Tubby Hayes', 199, 3, 'https://images.roughtrade.com/product/images/files/000/195/849/hero/SharedImage-96745.png?1591361362', 'Featuring Tubby Hayes’ highly collectable Fontana albums as a leader. 11 LP deluxe double walled linen cloth bound edged box set. 180 Gram Optimal Pressings. Remastered from the original tape masters. Mostly Original Artwork. Limited Edition and Numbered. Extensive 11.5’ x 11.5’ booklet liner notes and exclusive photos and scans.\r\n\r\nMastering Notes: The recordings have been lovingly remastered at Gearbox Records’ Studios, London, directly from the original tapes, using a Studer C37 ¼-inch stereo tape machine. They were then equalised through an all-valve mastering desk built bespoke for Decca studios in the late 1950s, Vintage Lang Pultec EQ, Prism Maselec EQ and Telefunken U73b valve limiters from 1959. The LP lacquers were cut on a beautifully restored Haeco Scully Lathe from 1967 with Westrex (Western Electric) head and cutting amps: the same go-to lathe that Rudy Van Gelder used.\r\n', 1),
(44, 'Cheat Codes', 'Danger Mouse and Black Thought', 18, 14, 'https://images.roughtrade.com/product/images/files/000/243/283/hero/RSD_Stores___HMV_Exclusive_Red_Vinyl.jpeg?1652264232', 'Cheat Codes is Danger Mouse’s first hip-hop album in seventeen years - since his 2005 DangerDOOM collaboration with the late, great MF DOOM - and Black Thought’s only full length collaboration beyond his pioneering music in The Roots. On No Gold Teeth, Danger Mouse’s soulful, freewheeling production serves as the perfect backdrop to Black Thought’s metronomic, pin-sharp and chorus-free lyrical deluge. The result is a dizzying, thrilling opening single from two of contemporary music’s most respected artists.\r\n\r\nThe natural chemistry between Brian (Danger Mouse) and Tariq (Black Thought) comes through in the ease with which the artist and listener move through this album. Moreover, it’s an album untethered to any genre, era or trend — uncategorizeable and timeless. It is the sound of the pair observing their own culture and asking questions they still may not have the answers to.\r\n\r\nBrian Burton (AKA one half of Gnarls Barkley, Broken Bells, and Karen O and Danger Mouse — and universally regarded as the most versatile producer in modern music) has found a formidable new partner in the incomparably prolific rapper Tariq Trotter - rapper, MC and co-founder of The Roots, film and theater actor, producer, writer or, as Hypebeast sums up: \"one of the best lyricists in hip-hop history.\"\r\n', NULL),
(45, 'Operation Doomsday ', 'MF DOOM', 30, 14, 'https://images.roughtrade.com/product/images/files/000/091/930/hero/CS627866-01A-BIG.jpg?1494595388', 'Black double-vinyl reissue with poster of MF Doom\'s first solo gem, Operation: Doomsday, remastered from the original 1999 version on the legendary fondle \'em label, so side A is listed as \'side zero\', side B is \'side one\', and so on. Underneath his mysterious metal mask, MF Doom hides the cachet underground legends are made of.\r\n\r\nThis is ridiculously dope, in a bizarro Ol\' Dirty Bastard kind of way, Doom sounds either high or drunk on most of the tracks, his self-produced beats are gritty, and his rhyme styles are almost indecipherable. On arguably the best track, Rhymes Like Dimes, Doom weaves some pointed lyrics through his abstract wordplay, spitting \'only in America could you find a way to earn a healthy buck / And still keep your attitude on self-destruct.\'\r\n\r\nDoomsday features female vocalist Pebbles the Invisible accompanying the masked rhyme avenger on his journey to denounce wack MCs, while on ? he trades hot verses with former Columbia artist Kurious Jorge. Doom\'s avant-garde ghetto-rhyme philosophies take even more intentionally weird twists on Tick, Tick... where he and guest MC MF Grimm\'s flows warble over a rhythm track whose tempo speeds up and slows down continually.\r\n\r\nThe comic-book themed skits, many of which include snippets of dialogue from Marvel\'s Dr. Doom series, will help take you deep into the mind of an MC who is as otherworldly as they come. And in today\'s bland commercial Rap universe, Operation Doomsday\'s left-of-center beats and rhymes are the perfect remedy.\r\n', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `purchased_history`
--

CREATE TABLE `purchased_history` (
  `product_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `purchased_history`
--

INSERT INTO `purchased_history` (`product_id`, `category_id`, `quantity`, `user_id`, `date`) VALUES
(2, 14, 2, 8, '2022-10-23'),
(1, 25, 3, 8, '2022-10-23'),
(3, 14, 2, 8, '2022-10-23'),
(2, 14, 1, 8, '2022-10-23'),
(4, 2, 2, 8, '2022-10-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `admin` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `admin`) VALUES
(2, 'Javier', '$2y$10$rdL5IjBkxLOX5kq8GvI12.xQRoO4qHkpP8ZYjwvStpucAXBFPzsty', 'javi@epitech.eu', 1),
(3, 'Sandra', '$2y$10$rdL5IjBkxLOX5kq8GvI12.xQRoO4qHkpP8ZYjwvStpucAXBFPzsty', 'Sandra@epitech.eu', 1),
(4, 'Charles', '$2y$10$rdL5IjBkxLOX5kq8GvI12.xQRoO4qHkpP8ZYjwvStpucAXBFPzsty', 'charles@epitech.eu', 0),
(6, 'Anthony', '$2y$10$rdL5IjBkxLOX5kq8GvI12.xQRoO4qHkpP8ZYjwvStpucAXBFPzsty', 'Anthony@epitech.eu', 0),
(8, 'Nayel', '$2y$10$rdL5IjBkxLOX5kq8GvI12.xQRoO4qHkpP8ZYjwvStpucAXBFPzsty', 'nayel@epitech.eu', 1),
(9, 'Romain', '$2y$10$rdL5IjBkxLOX5kq8GvI12.xQRoO4qHkpP8ZYjwvStpucAXBFPzsty', 'romain@epitech.eu', 1),
(10, 'Pedro', '$2y$10$rdL5IjBkxLOX5kq8GvI12.xQRoO4qHkpP8ZYjwvStpucAXBFPzsty', 'pedro@epitech.eu', 1),
(11, 'Charlotte', '$2y$10$rdL5IjBkxLOX5kq8GvI12.xQRoO4qHkpP8ZYjwvStpucAXBFPzsty', 'charlotte@epitech.eu', 0),
(12, 'Marie', '$2y$10$rdL5IjBkxLOX5kq8GvI12.xQRoO4qHkpP8ZYjwvStpucAXBFPzsty', 'marie@epitech.eu', 0),
(13, 'Amina', '$2y$10$rdL5IjBkxLOX5kq8GvI12.xQRoO4qHkpP8ZYjwvStpucAXBFPzsty', 'amina@epitech.eu', 0),
(14, 'Ahmed', '$2y$10$rdL5IjBkxLOX5kq8GvI12.xQRoO4qHkpP8ZYjwvStpucAXBFPzsty', 'ahmed@epitech.eu', 0),
(15, 'Agnieszka', '$2y$10$rdL5IjBkxLOX5kq8GvI12.xQRoO4qHkpP8ZYjwvStpucAXBFPzsty', 'agnieszka@epitech.eu', 0),
(16, 'Carmelo', '$2y$10$rdL5IjBkxLOX5kq8GvI12.xQRoO4qHkpP8ZYjwvStpucAXBFPzsty', 'carmelo@epitech.eu', 0),
(17, 'Clara', '$2y$10$rdL5IjBkxLOX5kq8GvI12.xQRoO4qHkpP8ZYjwvStpucAXBFPzsty', 'clara@epitech.eu', 1),
(18, 'Tatiana', '$2y$10$rdL5IjBkxLOX5kq8GvI12.xQRoO4qHkpP8ZYjwvStpucAXBFPzsty', 'tatiana@epitech.eu', 1),
(19, 'Farrah', '$2y$10$rdL5IjBkxLOX5kq8GvI12.xQRoO4qHkpP8ZYjwvStpucAXBFPzsty', 'farrah@epitech.eu', 0),
(20, 'Anwar', '$2y$10$rdL5IjBkxLOX5kq8GvI12.xQRoO4qHkpP8ZYjwvStpucAXBFPzsty', 'anwar@epitech.eu', 0),
(25, 'Pablo', '$2y$10$UKZ0J1YG4kALhdrj7sZhruFaLTz8QpfjtIjPI/sveQZOMUmf3paMy', 'pablo@epitech.eu', 0),
(27, 'Pepe', '$2y$10$rqKjmXD0HsjZ0zXFFSaUJOBlCT6vO0KWA8Z2CGIZLVTEzTBKNawZW', 'pepe@epitech.eu', 0),
(28, 'Mario', '$2y$10$Rrc3lZ3RQtk2Z99ZoF1jV.MtPn9Q2gGlwX2zhZ5c1V.jrUeaHNs6C', 'mario@epitech.eu', 0),
(29, 'Jandro', '$2y$10$5WgX7K0zXHeJ2zFRhHtsyO6Dj5h1cRqfYA7H/g.ZbHYV/j8BZKXIa', 'jandro@epitech.eu', 0),
(30, 'Bernardo', '$2y$10$WiONpSlz4irb/mch2JUzWeeWYBnE89/uFx9UJ6SWXDP6E.GRrRX2G', 'bernardo@epitech.eu', 0),
(31, 'Eloise', '$2y$10$OqLwiYtGn6MoUsplDLAEsetgvjd6101FqioOJUC585pyGDURG5HW6', 'eloise@epitech.eu', 0),
(32, 'Antonio', '$2y$10$xxV3FhsAKQ48rSLFXnHAb.qEW0n8loQyenOuG/k70LDnziS9pb/xC', 'antonio@epitech.eu', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
