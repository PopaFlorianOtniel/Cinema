<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Movies seed.
 */
class MoviesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'id' => '1',
                'user_id' => '2',
                'cinema_id' => '1',
                'title' => 'Fast X',
                'slug' => 'fast_x',
                'description' => 'Dominic Toretto (Vin Diesel) and his family are targeted once again, and this time it\'s a ghost from their past who returns to haunt them. Dom and his family and friends are hunted by the vengeful son of drug kingpin Hernan Reyes, Dante (Jason Momoa).

Dominic Toretto (Vin Diesel) and his family are targeted once again, and this time it\'s a ghost from their past who returns to haunt them. Dom and his family and friends are hunted by the vengeful son of drug kingpin Hernan Reyes, Dante (Jason Momoa).

Dominic Toretto (Vin Diesel) and his family are targeted once again, and this time it\'s a ghost from their past who returns to haunt them. Dom and his family and friends are hunted by the vengeful son of drug kingpin Hernan Reyes, Dante (Jason Momoa).

Dominic Toretto (Vin Diesel) and his family are targeted once again, and this time it\'s a ghost from their past who returns to haunt them. Dom and his family and friends are hunted by the vengeful son of drug kingpin Hernan Reyes, Dante (Jason Momoa).

Dominic Toretto (Vin Diesel) and his family are targeted once again, and this time it\'s a ghost from their past who returns to haunt them. Dom and his family and friends are hunted by the vengeful son of drug kingpin Hernan Reyes, Dante (Jason Momoa).',
                'image' => 'fastx.jpg',
                'created' => '2023-08-01 07:03:58',
                'modified' => '2023-08-01 07:03:58',
            ],
            [
                'id' => '2',
                'user_id' => '2',
                'cinema_id' => '1',
                'title' => 'Mission: Impossible - Dead Reckoning Part One',
                'slug' => 'mission_impossible',
                'description' => 'In Mission: Impossible – Dead Reckoning Part One, Ethan Hunt (Tom Cruise) and his IMF team embark on their most dangerous mission yet: To track down a terrifying new weapon that threatens all of humanity before it falls into the wrong hands.',
                'image' => 'Mission_Impossible.jpg',
                'created' => '2023-08-01 07:49:02',
                'modified' => '2023-08-01 07:49:02',
            ],
            [
                'id' => '3',
                'user_id' => '4',
                'cinema_id' => '1',
                'title' => 'You People',
                'slug' => 'you_people',
                'description' => 'Follows a new couple and their families, who find themselves examining modern love and family dynamics amidst clashing cultures, societal expectations and generational differences.',
                'image' => 'you_people.jpg',
                'created' => '2023-08-02 12:53:56',
                'modified' => '2023-08-21 13:08:25',
            ],
            [
                'id' => '4',
                'user_id' => '2',
                'cinema_id' => '1',
                'title' => 'Test2',
                'slug' => 'test2',
                'description' => 'fasdfsdfasdf',
                'image' => 'picture2.jpg',
                'created' => '2023-08-02 13:22:11',
                'modified' => '2023-08-02 13:22:11',
            ],
            [
                'id' => '5',
                'user_id' => '2',
                'cinema_id' => '2',
                'title' => 'Spencer',
                'slug' => 'spencer',
                'description' => 'Diana Spencer, struggling with mental-health problems during her Christmas holidays with the Royal Family at their Sandringham estate in Norfolk, England, decides to end her decade-long marriage to Prince Charles.',
                'image' => 'spencer.jpg',
                'created' => '2023-08-09 10:05:05',
                'modified' => '2023-08-09 10:05:05',
            ],
            [
                'id' => '6',
                'user_id' => '4',
                'cinema_id' => '2',
                'title' => 'The Covenant',
                'slug' => 'The-Covenant',
                'description' => 'Guy Ritchie\'s The Covenant (or simply The Covenant) is a 2023 American action thriller film co-written, produced and directed by Guy Ritchie. The film stars Jake Gyllenhaal and Dar Salim. Its plot follows John Kinley, a U.S. Army Green Beret sergeant, and Ahmed, his Afghan interpreter, fighting the Taliban.',
                'image' => 'covenant.jpg',
                'created' => '2023-08-10 06:58:34',
                'modified' => '2023-08-23 11:41:42',
            ],
            [
                'id' => '7',
                'user_id' => '4',
                'cinema_id' => '2',
                'title' => 'Oppenheimer',
                'slug' => 'oppenheimer',
                'description' => 'In 1926, 22-year-old doctoral student J. Robert Oppenheimer studies under experimental physicist Patrick Blackett at the Cavendish Laboratory in Cambridge. Oppenheimer suffers from homesickness and anxiety and struggles doing the required lab work. Oppenheimer, upset with the demanding Blackett, leaves him a poison-laced apple but retrieves it. Visiting scientist Niels Bohr is impressed enough by Oppenheimer\'s intellect to recommend that he should instead study theoretical physics in Germany, where Oppenheimer completes his PhD. He later meets theoretical physicist Werner Heisenberg at a conference in Switzerland.

Oppenheimer returns to the United States, wanting to expand quantum physics research there. He begins teaching at the University of California, Berkeley and the California Institute of Technology, starting with one student. He meets his future wife, Katherine "Kitty" Puening, a biologist and ex-communist, and also has an intermittent affair with Jean Tatlock, a member of the Communist Party USA, until her suicide a few years later. In 1938, Nazi Germany\'s progress in nuclear fission research spurs Oppenheimer and his colleagues to replicate their results. Leo Szilard and Albert Einstein then warn President Franklin D. Roosevelt of atomic weaponry\'s catastrophic potential.

In 1942, amid World War II, U.S. Army General Leslie Groves recruits Oppenheimer to lead the Manhattan Project to develop an atomic bomb after Oppenheimer\'s assurances he has no communist sympathies. Oppenheimer, who is Jewish, is particularly driven by the Nazis\' potentially completing their nuclear weapons program, headed by Heisenberg. Oppenheimer assembles a scientific team including Edward Teller and Isidor Isaac Rabi in Los Alamos, New Mexico and also collaborates with scientists Enrico Fermi and David L. Hill; he and Einstein discuss how an atomic bomb potentially risks triggering an unstoppable chain reaction that could ignite the atmosphere and destroy the world.

After Germany surrenders, some project scientists question the bomb\'s relevance, while Oppenheimer believes using it will quickly end the ongoing war in the Pacific, saving Allied lives. The Trinity test is successful and President Harry S. Truman orders Hiroshima and Nagasaki to be bombed, forcing Japan\'s surrender. Oppenheimer is thrust into the public eye as the "father of the atomic bomb", but the immense destruction and mass fatalities haunt him. He urges Truman to restrict further nuclear weapon development. Truman rejects Oppenheimer\'s advice, considering him weak.

As an advisor to the U.S. Atomic Energy Commission, Oppenheimer advocates against further nuclear research, especially the hydrogen bomb proposed by Edward Teller. Oppenheimer\'s stance becomes a point of contention amid the tense Cold War with the Soviet Union. AEC Chairman Lewis Strauss deeply resents Oppenheimer for having publicly humiliated him by dismissing his concerns about exporting radioisotopes and also for Oppenheimer recommending arms talks with the Soviet Union. Strauss also believes Oppenheimer turned Einstein and other scientists against him.

At a hearing intended to eliminate his political influence, Oppenheimer is betrayed by Teller and other associates. Strauss exploits Oppenheimer\'s past associations with Communist party members. Despite allies testifying in his defense, Oppenheimer\'s security clearance is revoked, damaging his public image and neutralizing his policy influence. At Strauss\'s later Senate confirmation hearing for Secretary of Commerce, Hill testifies about Strauss\'s personal motives in engineering Oppenheimer\'s downfall. The U.S. Senate votes against Strauss\'s nomination. Strauss privately rants that Oppenheimer schemed against him. It is revealed that an earlier conversation between Einstein and Oppenheimer, in which Strauss believed Oppenheimer denigrated him, instead concerned nuclear weapons\' possible cataclysmic consequences.',
                'image' => 'oppenheimer.jpg',
                'created' => '2023-08-11 07:17:45',
                'modified' => '2023-08-11 07:17:45',
            ],
            [
                'id' => '8',
                'user_id' => '4',
                'cinema_id' => '1',
                'title' => 'Interstellar',
                'slug' => 'interstellar',
                'description' => 'Interstellar is about Earth\'s last chance to find a habitable planet before a lack of resources causes the human race to go extinct. The film\'s protagonist is Cooper (Matthew McConaughey), a former NASA pilot who is tasked with leading a mission through a wormhole to find a habitable planet in another galaxy.',
                'image' => 'interstellar.jpg',
                'created' => '2023-08-18 12:09:12',
                'modified' => '2023-08-18 12:09:12',
            ],
            [
                'id' => '9',
                'user_id' => '4',
                'cinema_id' => '2',
                'title' => 'Meg 2: The Trench',
                'slug' => 'meg2_the_trench',
                'description' => 'Like the previous film, it follows a group of scientists who must outrun and outswim the titular Megalodons when a malevolent mining operation threatens their mission and forces them into a high-stakes battle for survival.',
                'image' => 'meg2.jpg',
                'created' => '2023-08-18 12:26:38',
                'modified' => '2023-08-18 12:26:38',
            ],
            [
                'id' => '10',
                'user_id' => '4',
                'cinema_id' => '2',
                'title' => 'House Party',
                'slug' => 'House-Party',
                'description' => 'Storyline. When a pair of down on their luck house cleaners discover they\'re assigned to clean the mansion of Lebron James while he\'s overseas, they decide to make a life changing decision to throw a giant party in a quest for immortality and some cash.',
                'image' => 'house_party.jpg',
                'created' => '2023-08-21 13:05:18',
                'modified' => '2023-08-21 13:05:18',
            ],
            [
                'id' => '11',
                'user_id' => '4',
                'cinema_id' => '2',
                'title' => 'Movies',
                'slug' => 'Movies',
                'description' => 'Movies movies',
                'image' => 'picture2.jpg',
                'created' => '2023-08-23 06:24:42',
                'modified' => '2023-08-23 07:23:02',
            ],
            [
                'id' => '12',
                'user_id' => '4',
                'cinema_id' => '2',
                'title' => 'asdasd',
                'slug' => 'asdasd',
                'description' => 'gfasdfsdf',
                'image' => 'picture1.jpg',
                'created' => '2023-08-23 07:13:37',
                'modified' => '2023-08-23 07:22:49',
            ],
            [
                'id' => '13',
                'user_id' => '4',
                'cinema_id' => '1',
                'title' => 'wedadfas',
                'slug' => 'wedadfas',
                'description' => 'fdsfsdfsdf',
                'image' => 'picture1.jpg',
                'created' => '2023-08-23 07:15:12',
                'modified' => '2023-08-23 07:18:52',
            ],
            [
                'id' => '14',
                'user_id' => '4',
                'cinema_id' => '2',
                'title' => 'Spatiu',
                'slug' => 'dasfdg',
                'description' => 'sdfgdhgsdf',
                'image' => 'picture1.jpg',
                'created' => '2023-08-23 07:16:44',
                'modified' => '2023-08-23 10:49:27',
            ],
            [
                'id' => '15',
                'user_id' => '4',
                'cinema_id' => '1',
                'title' => 'Extraction 2',
                'slug' => 'Extraction-2',
                'description' => 'Written by Joe Russo (Avengers: Endgame) and directed by Sam Hargrave, Extraction 2 is a large-scale assault on the senses with incredible action, stellar casting, and a heart-pumping pace. The second film in the exciting franchise, Extraction 2 is brilliantly shot and spends most of its two-hour run time on thrilling, explosive stunts with graceful combat choreography. Chris Hemsworth reprises his role from the first Extraction film, once again playing fearless mercenary Tyler Rake alongside Golshifteh Farahani, who also returns as Nik Khan. Ideal viewing for Jason Bourne fans, Extraction 2 embraces the action thriller genre without hesitation. – Yael Tygiel',
                'image' => 'extraction.jpg',
                'created' => '2023-09-13 11:56:38',
                'modified' => '2023-09-13 12:02:44',
            ],
        ];

        $table = $this->table('movies');
        $table->insert($data)->save();
    }
}
